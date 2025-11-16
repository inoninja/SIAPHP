<?php
// api/chat.php

session_start();

// Load configuration where GEMINI_API_KEY is defined
require_once __DIR__ . '../../../config.php';

// --- 1. Basic Security and Input Validation ---
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['message'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid request.']);
    exit();
}

$userMessage = $_POST['message'];

// Ensure API key is available
if (!defined('GEMINI_API_KEY') || !GEMINI_API_KEY) {
    error_log("GEMINI_API_KEY is missing or undefined.");
    http_response_code(500);
    echo json_encode(['error' => 'API configuration failed on the server.']);
    exit();
}

// --- 2. Define the Chat Context & Request Body ---

// System Instruction: Tell the model how to behave
$systemInstruction = "You are the 'Mugler Sale Assistant' for an e-commerce store. Your purpose is to answer user questions, primarily about the ongoing Warehouse Sale, shipping, and returns. Keep your answers concise, helpful, and in a professional, retail tone. Highlight key terms like '30% off' or 'free shipping' using bold markdown.";

$requestBody = [
    'config' => [
        'systemInstruction' => $systemInstruction,
        'temperature' => 0.7,
    ],
    'contents' => [
        [
            'role' => 'user',
            'parts' => [
                ['text' => $userMessage]
            ],
        ],
    ],
];

// --- 3. Make the API Call using cURL ---

$apiKey = GEMINI_API_KEY;
$url = "https://generativelanguage.googleapis.com/v1/models/gemini-2.5-flash:generateContent?key={$apiKey}";
$jsonBody = json_encode($requestBody);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonBody);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonBody)
]);

$apiResponse = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

// --- 4. Process the Response ---

if ($httpCode !== 200 || $curlError) {
    error_log("Gemini API Error (HTTP {$httpCode}): {$curlError} | Response: {$apiResponse}");
    http_response_code(500);
    echo json_encode(['error' => 'Sorry, the assistant is currently unavailable. (API Error)']);
    exit();
}

$responseData = json_decode($apiResponse, true);

// Extract the text response from the API result structure
$botResponse = $responseData['candidates'][0]['content']['parts'][0]['text'] ?? 'Sorry, I had trouble generating a response.';

// --- 5. Return the response to the client ---
header('Content-Type: application/json');
echo json_encode(['response' => $botResponse]);

?>