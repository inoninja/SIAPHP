<?php
// homepage.php
session_start();
require_once __DIR__ . '/../../../database/db.php';

// Page title and CSS file (header.php should use these)
$pageTitle = "MAISON MUGLER - Homepage";
$cssFile = "homepage.css"; // make sure header.php links this file from the same folder

// include header (expects $pageTitle and $cssFile)
require_once __DIR__ . '/../../components/header.php';
?>

    <div class="promo-bar">
        <span class="icon">←</span> Free shipping on all over the Philippines <span class="icon">→</span>
    </div>

    <header class="header-main">
        <div class="container header-content">
            <nav class="nav-left">
              <!-- search icon - ensure assets/icons/search.png exists -->
              <a href="/search" class="icon-anchor search-icon" aria-label="Search">
                <img src="assets/icons/search.png" alt="Search icon">
              </a>
            </nav>

            <div class="logo">MAISON MUGLER</div>

            <div class="nav-right utility-icons">
                <a href="login.php" class="icon-anchor" aria-label="Profile">
                  <img src="assets/icons/profile.png" alt="Profile icon">
                </a>
                <a href="/cart" class="icon-anchor" aria-label="Cart">
                  <img src="assets/icons/cart.png" alt="Cart icon">
                </a>
            </div>
        </div>

        <nav class="nav-links container" style="text-align:center; padding-top: 15px;">
            <a href="him_collection.php">Him</a>
            <a href="her_collection.php">Her</a>
            <a href="new_arrivals.php">New Arrivals</a>
            <a href="about_us.php">About Us</a>
            <a href="concierge.php">Concierge</a>
        </nav>
    </header>

    <!-- Hero Section with Background Video -->
    <section class="hero">
      <!-- video file should be placed at the same folder relative to this page: assets/videos/vid1.mp4 (or change path) -->
      <video autoplay muted loop playsinline class="hero-video" poster="assets/images/hero-poster.jpg">
        <source src="vid1.mp4" type="video/mp4">
        <!-- fallback: use background image via CSS from homepage.css -->
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

    <footer class="footer-main">
        <div class="container footer-grid">
            <div class="newsletter-section">
                <div class="icon" style="margin-bottom: 15px;">👤</div>
                <h2>JOIN THE LEISURE LETTER</h2>
                <form class="newsletter-form" action="/subscribe.php" method="post">
                    <input name="email" type="email" placeholder="Enter your email" required>
                    <button type="submit" aria-label="Subscribe">→</button>
                </form>
                <div class="social-icons">
                    <a href="#">📷</a>
                    <a href="#">▶️</a>
                    <a href="#">🎵</a>
                    <a href="#">📌</a>
                </div>
            </div>

            <div class="footer-links">
                <h3>SHOP</h3>
                <a href="/collections/him">Him</a>
                <a href="/collections/her">Her</a>
                <a href="/collections/new">New Arrivals</a>
                <a href="/sale">Now Departing</a>
                <a href="/blog">About Us</a>
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
        © <?php echo date("Y"); ?> MAISON MUGLER.
      </div>
    </div>

<?php
// include footer (closes body/html if footer.php does that)
require_once __DIR__ . '/../../components/footer.php';
?>
