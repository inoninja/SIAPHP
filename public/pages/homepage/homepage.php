<?php
//homepage.php
session_start();
require_once __DIR__ . '/../../../database/db.php';

// Set page title and CSS file
 $pageTitle = "Homepage";
 $cssFile = "homepage.css";
?>
<?php require_once __DIR__ . '/../../components/header.php'; ?>

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

<?php require_once __DIR__ . '/../../components/footer.php'; ?>