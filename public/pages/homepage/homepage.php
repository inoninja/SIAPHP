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

<?php
require_once __DIR__ . '/../../components/footer.php';
?>
