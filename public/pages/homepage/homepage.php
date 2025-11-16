<?php
//homepage.php
session_start();
require_once __DIR__ . '/../../../database/db.php';

// Set page title and CSS file
$pageTitle = "Homepage";
$cssFile = "homepage.css";
?>
<?php require_once __DIR__ . '/../../components/header.php'; ?>

    <section class="hero hero-video">
        <video autoplay loop muted playsinline class="hero-background-video">
            <source src="vid1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="hero-overlay">
            <div class="hero-content">
                <h1>WELCOME TO THE<br>WAREHOUSE<br>SALE</h1>
                <div class="hero-cta">
                    <a href="/sale">Shop the Sale →</a>
                </div>
            </div>
        </div>
    </section>

    <section style="height: 50vh; display: flex; align-items: center; justify-content: center;">
      <h2 style="font-family: var(--primary-font); font-weight: 400;">(Product Collections Go Here)</h2>
    </section>

    <div class="container feature-row">
        <div class="feature-item">
            <span class="icon">🎁</span> <h4>ENJOY 30% OFF FOR LABOR DAY</h4>
            <p>Plus, Buy two, get one free on all shorts</p>
        </div>
        <div class="feature-item">
            <span class="icon">🚚</span> <h4>FAST AND FREE SHIPPING</h4>
            <p>Get free shipping on orders of $150 or more</p>
        </div>
        <div class="feature-item">
            <span class="icon">🔄</span> <h4>FREE EXCHANGES, EASY RETURNS</h4>
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
        
        box.classList.toggle('open');
        
        if (box.classList.contains('open')) {
            button.style.display = 'none'; // Hide button
            document.getElementById('chat-messages').scrollTop = document.getElementById('chat-messages').scrollHeight;
            document.getElementById('user-input').focus();
        } else {
            button.style.display = 'flex'; // Show button
        }
    }

    // NOTE: The old 'chatbotResponses' object is removed since you are now using the Gemini API.

    // --- MESSAGE HANDLING (Now correctly sequenced for API call) ---
    async function sendMessage() {
        const inputField = document.getElementById('user-input');
        const userText = inputField.value.trim();

        if (userText === "") return;

        // 1. Display User Message & Clear Input
        displayMessage(userText, 'user-message');
        inputField.value = '';
        
        // Disable input while waiting for API
        inputField.disabled = true;
        inputField.placeholder = "Thinking...";

        // 2. Prepare Data for PHP Proxy (DEFINED HERE BEFORE FETCH)
        const formData = new FormData();
        formData.append('message', userText);

        try {
            // 3. Call the PHP Proxy Endpoint (Correct Path)
            const response = await fetch('/../../../database/chat.php', { 
                method: 'POST',
                body: formData
            });

            const data = await response.json();

            if (response.ok && data.response) {
                // 4. Display Bot Response
                setTimeout(() => {
                    displayMessage(data.response, 'bot-message');
                }, 500);
            } else {
                // Handle errors from the PHP side
                displayMessage('Error: ' + (data.error || 'Could not get a response from the AI assistant.'), 'bot-message');
            }

        } catch (e) {
            console.error("Fetch Error:", e);
            displayMessage('Network error. Please try again later.', 'bot-message');
        } finally {
            // Re-enable input
            inputField.disabled = false;
            inputField.placeholder = "Ask a question...";
            inputField.focus();
        }
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
</script>

<?php require_once __DIR__ . '/../../components/footer.php'; ?>