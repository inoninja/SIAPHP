<?php
// homepage.php
session_start();
require_once __DIR__ . '/../../../database/db.php';

// Page title
$pageTitle = "MAISON MUGLER - Homepage";

// include header (even if CSS is inline, header.php likely includes nav + structure)
require_once __DIR__ . '/../../components/header.php';
?>

<style>
/* -----------------------------------
   BASE + GLOBAL
----------------------------------- */
:root {
    --primary-font: "Playfair Display", serif;
    --secondary-font: "Poppins", sans-serif;
}

body {
    margin: 0;
    padding: 0;
    font-family: var(--secondary-font);
    background-color: #ffffff;
}

/* -----------------------------------
   HERO SECTION
----------------------------------- */
.hero {
    position: relative;
    width: 100%;
    height: 85vh;
    overflow: hidden;
}

.hero-video {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.25);
    display: flex;
    justify-content: center;
    align-items: center;
}

.hero-content {
    text-align: center;
    color: #ffffff;
}

.hero-content h1 {
    font-family: var(--primary-font);
    font-weight: 700;
    font-size: 4rem;
    line-height: 1.2;
    letter-spacing: 2px;
}

.hero-cta a {
    margin-top: 20px;
    display: inline-block;
    padding: 10px 30px;
    background: #ffffff;
    color: #000;
    font-weight: 600;
    text-decoration: none;
    border-radius: 30px;
    transition: 0.3s;
}

.hero-cta a:hover {
    background: #000;
    color: #fff;
}

/* -----------------------------------
   FEATURE ROW
----------------------------------- */
.container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
}

.feature-row {
    padding: 60px 0;
    display: flex;
    justify-content: space-between;
    text-align: center;
}

.feature-item {
    width: 30%;
}

.feature-item .icon {
    font-size: 2rem;
    display: block;
    margin-bottom: 10px;
}

.feature-item h4 {
    font-weight: 600;
    margin-bottom: 10px;
    font-family: var(--secondary-font);
}

.feature-item p {
    font-size: 0.9rem;
    color: #555;
}

/* -----------------------------------
   PLACEHOLDER SECTION
----------------------------------- */
.collections-placeholder h2 {
    font-size: 1.8rem;
}

/* -----------------------------------
    CHATBOT STYLES
----------------------------------- */
#chatbot-container {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 1000;
}

#chatbot-button {
    background: #000;
    color: #fff;
    padding: 12px 20px;
    border-radius: 30px;
    cursor: pointer;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    font-weight: 600;
    display: flex;
    align-items: center;
    transition: background 0.3s;
}

#chatbot-button:hover {
    background: #555;
}

#chatbot-button .icon {
    margin-right: 8px;
    font-size: 1.1rem;
}

#chatbot-box {
    width: 300px;
    height: 400px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    position: absolute;
    bottom: 0;
    right: 0;
    /* Start hidden */
    transform: translateY(100px) scale(0);
    opacity: 0;
    transition: all 0.3s ease-in-out;
    transform-origin: bottom right;
}

#chatbot-box.open {
    transform: translateY(-70px) scale(1); /* Adjust translateY for button height + margin */
    opacity: 1;
}

#chat-header {
    background: #000;
    color: #fff;
    padding: 15px;
    font-weight: 600;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

#close-chat {
    cursor: pointer;
    font-size: 1.2rem;
}

#chat-messages {
    flex-grow: 1;
    padding: 10px;
    overflow-y: auto;
    background-color: #f4f4f4;
}

.message {
    padding: 8px 12px;
    border-radius: 15px;
    margin-bottom: 10px;
    max-width: 80%;
    line-height: 1.4;
}

.user-message {
    background-color: #007bff; /* A nice blue for user */
    color: #fff;
    align-self: flex-end;
    margin-left: auto;
}

.bot-message {
    background-color: #fff;
    color: #333;
    border: 1px solid #ddd;
    align-self: flex-start;
    margin-right: auto;
}

#user-input {
    width: 100%;
    padding: 10px;
    border: none;
    border-top: 1px solid #ddd;
    box-sizing: border-box;
    font-family: var(--secondary-font);
}

</style>

<section class="hero">
    <video autoplay muted loop playsinline class="hero-video" poster="assets/images/hero-poster.jpg">
        <source src="./vid1.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="hero-overlay">
        <div class="hero-content">
            <h1>WELCOME TO THE<br>WAREHOUSE<br>SALE</h1>
            <div class="hero-cta">
                <a href="new_arrivals.php">Shop the Sale →</a>
            </div>
        </div>
    </div>
</section>

<section class="collections-placeholder">
    <div class="container" style="height: 50vh; display:flex; align-items:center; justify-content:center;">
        <h2 style="font-family: var(--primary-font); font-weight: 400;">(Product Collections Go Here)</h2>
    </div>
</section>

<div class="container feature-row">
    <div class="feature-item">
        <span class="icon">🎁</span>
        <h4>ENJOY 30% OFF FOR LABOR DAY</h4>
        <p>Plus, Buy two, get one free on all shorts</p>
    </div>
    <div class="feature-item">
        <span class="icon">🚚</span>
        <h4>FAST AND FREE SHIPPING</h4>
        <p>Get free shipping on orders of $150 or more</p>
    </div>
    <div class="feature-item">
        <span class="icon">🔄</span>
        <h4>FREE EXCHANGES, EASY RETURNS</h4>
        <p>Find the perfect fit, just for you.</p>
    </div>
</div>

<div id="chatbot-container">
    <div id="chatbot-button" onclick="toggleChatbot()">
        <span class="icon">💬</span> Chat
    </div>
    <div id="chatbot-box">
        <div id="chat-header">
            Mugler Bot
            <span id="close-chat" onclick="toggleChatbot()">×</span>
        </div>
        <div id="chat-messages">
            <div class="message bot-message">Hello! I'm the Mugler Sale Assistant. Ask me about the sale, shipping, or returns!</div>
        </div>
        <input type="text" id="user-input" placeholder="Ask a question..." onkeypress="if(event.key === 'Enter') sendMessage()">
    </div>
</div>

<script>
    // --- CHATBOT TOGGLE FUNCTION ---
    function toggleChatbot() {
        const button = document.getElementById('chatbot-button');
        const box = document.getElementById('chatbot-box');
        
        // Hide the button and show the box, or vice versa
        if (box.classList.contains('open')) {
            box.classList.remove('open');
            button.style.display = 'flex'; // Show button when closing box
        } else {
            box.classList.add('open');
            button.style.display = 'none'; // Hide button when opening box
            // Scroll to bottom of chat history when opening
            document.getElementById('chat-messages').scrollTop = document.getElementById('chat-messages').scrollHeight;
            document.getElementById('user-input').focus();
        }
    }

    // --- CHATBOT KNOWLEDGE BASE (THE BRAIN) ---
    const chatbotResponses = {
        "hello|hi|hey": "Hello there! I'm here to help you with the sale.",
        "sale|discount|labor day": "Our Warehouse Sale offers **30% off**, plus buy two, get one free on all shorts!",
        "shipping|delivery|free shipping": "We offer **fast and free shipping** on all orders of $150 or more.",
        "return|exchange": "Yes! We offer **free exchanges and easy returns** to help you find the perfect fit.",
        "thank|thanks|bye": "You're welcome! Have a great time shopping!",
        "default": "I'm a simple assistant. Try asking about the **sale**, **shipping**, or **returns**."
    };

    // --- MESSAGE HANDLING ---
    function sendMessage() {
        const inputField = document.getElementById('user-input');
        const userText = inputField.value.trim();

        if (userText === "") return;

        // 1. Display User Message
        displayMessage(userText, 'user-message');

        // 2. Get Bot Response
        const botResponse = getBotResponse(userText);

        // 3. Display Bot Response after a small delay
        setTimeout(() => {
            displayMessage(botResponse, 'bot-message');
        }, 500);

        // 4. Clear Input
        inputField.value = '';
    }

    function displayMessage(text, className) {
        const messagesContainer = document.getElementById('chat-messages');
        const newMessage = document.createElement('div');
        newMessage.className = `message ${className}`;
        
        // Use innerHTML to allow **bolding** in the bot's response
        newMessage.innerHTML = text.replace(/\*\*(.*?)\*\*/g, '<b>$1</b>'); 
        
        messagesContainer.appendChild(newMessage);
        messagesContainer.scrollTop = messagesContainer.scrollHeight; // Auto-scroll to bottom
    }

    function getBotResponse(userInput) {
        const normalizedInput = userInput.toLowerCase();

        // Check for keyword matches in the chatbotResponses object
        for (const key in chatbotResponses) {
            // Create a regex from the key (allowing | for OR)
            const regex = new RegExp(`\\b(${key})\\b`);
            if (regex.test(normalizedInput)) {
                return chatbotResponses[key];
            }
        }

        // Return default response if no keyword is found
        return chatbotResponses.default;
    }
</script>

<?php
require_once __DIR__ . '/../../components/footer.php';
?>
