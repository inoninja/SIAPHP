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
        
        // Toggle the 'open' class
        box.classList.toggle('open');
        
        // Hide the button when the box is open, show it when closed
        if (box.classList.contains('open')) {
            button.style.display = 'none'; // Hide button when opening box
            // Scroll to bottom of chat history when opening
            document.getElementById('chat-messages').scrollTop = document.getElementById('chat-messages').scrollHeight;
            document.getElementById('user-input').focus();
        } else {
            button.style.display = 'flex'; // Show button when closing box
        }
    }

    // --- CHATBOT KNOWLEDGE BASE (THE BRAIN) ---
    const chatbotResponses = {
        "hello|hi|hey": "Hello there! I'm here to help you with the sale.",
        "sale|discount|labor day": "Our Warehouse Sale offers **30% off**, plus **buy two, get one free on all shorts**!",
        "shipping|delivery|free shipping": "We offer fast and free shipping on all orders of $150 or more.",
        "return|exchange": "Yes! We offer **free exchanges** and **easy returns** to help you find the perfect fit.",
        "thank|thanks|bye": "You're welcome! Have a great time shopping!",
        "default": "I'm a simple assistant. Try asking about the sale, shipping, or returns."
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

<?php require_once __DIR__ . '/../../components/footer.php'; ?>