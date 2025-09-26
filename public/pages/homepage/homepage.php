<?php
//homepage.php
session_start();
require_once __DIR__ . '/../../../database/db.php';

// Check if user is logged in
if (isset($_SESSION["user_id"])) {
    // If logged in, redirect to profile page
    header("Location: ../profile/profile.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAISON MUGLER - Homepage</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="homepage.css">
</head>
<body>

    <div class="promo-bar">
        <span class="icon">←</span> Free shipping on all over the Philippines <span class="icon">→</span>
    </div>

    <header class="header-main">
        <div class="container header-content">
            <nav class="nav-left">
              <a href="/search" class="icon search-icon">🔍</a>
            </nav>
            <div class="logo">MAISON MUGLER</div>
            <div class="nav-right utility-icons">
                <a href="../login/login.php" class="icon">👤</a>
                <a href="/cart" class="icon">👜</a>
            </div>
        </div>
        <nav class="nav-links container" style="text-align:center; padding-top: 15px;">
            <a href="/collections/him">Him</a>
            <a href="/collections/her">Her</a>
            <a href="/sale">Warehouse Sale</a>
            <a href="/blog">Institute of Leisure</a>
            <a href="/contact">Concierge</a>
        </nav>
    </header>

    <section class="hero" style="background-image: url('https://via.placeholder.com/1600x800/402927/ffffff?text=WELCOME+TO+THE+WAREHOUSE+SALE+IMAGE');">
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

    <footer class="footer-main">
        <div class="container footer-grid">
            
            <div class="newsletter-section">
                <div class="icon" style="margin-bottom: 15px;">👤</div>
                <h2>JOIN THE LEISURE LETTER</h2>
                <div class="newsletter-form">
                    <input type="email" placeholder="Enter your email" required>
                    <button type="submit">→ </button>
                </div>
                <div class="social-icons">
                    <a href="#">📷</a> <a href="#">▶️</a> <a href="#">🎵</a> <a href="#">📌</a> </div>
            </div>
            
            <div class="footer-links">
                <h3>SHOP</h3>
                <a href="/collections/him">Him</a>
                <a href="/collections/her">Her</a>
                <a href="/collections/new">New Arrivals</a>
                <a href="/sale">Now Departing</a>
                <a href="/blog">Institute of Leisure</a>
                <a href="/contact">Concierge</a>
            </div>

            <div class="footer-links">
                <h3>INFORMATION</h3>
                <a href="/shipping">Shipping Policy</a>
                <a href="/returns">Return Policy</a>
                <a href="/terms">Terms of Service</a>
                <a href="/privacy">Privacy Policy</a>
                <a href="/contact">Contact</a>
                <a href="/gifts">Gift Cards</a>
                <a href="/accessibility">Click for Accessibility</a>
            </div>
        </div>
    </footer>

    <div class="footer-bar">
      <div class="container">
        © 2025 MAISON MUGLER.
      </div>
    </div>

</body>
</html>