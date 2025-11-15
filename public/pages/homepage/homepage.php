<?php
// homepage.php
session_start();
require_once __DIR__ . '/../../../database/db.php';

// Page title and CSS file (header.php should use these)
$pageTitle = "MAISON MUGLER - Homepage";
$cssFile = "homepage.css"; // make sure header.php links this file from the same folder

// include header (expects $pageTitle and $cssFile)
// This file is assumed to contain the starting <html>, <head>, and <body> tags.
require_once __DIR__ . '/../../components/header.php';
?>

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

<?php
// include footer
// This file is assumed to contain the closing </body> and </html> tags.
require_once __DIR__ . '/../../components/footer.php';
?>