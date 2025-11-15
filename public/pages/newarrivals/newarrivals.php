<?php
// new_arrivals.php
session_start();
require_once __DIR__ . '/../../../database/db.php'; // keep if you need DB later

$pageTitle = "New Arrivals | MAISON MUGLER";
$cssFile = "newarrivals.css"; // make sure header.php uses this variable to include the CSS

require_once __DIR__ . '/../../components/header.php';
?>

<div class="promo-bar"><span class="icon">←</span> Free shipping all over the Philippines <span class="icon">→</span></div>

<header class="header-main">
  <div class="container header-content">
    <nav class="nav-left">
      <!-- search icon - ensure assets/icons/search.png exists -->
      <a href="/search" class="icon-anchor" aria-label="Search">
        <img src="assets/icons/search.png" alt="Search">
      </a>
    </nav>

    <a href="index.php" class="logo">MAISON MUGLER</a>

    <div class="nav-right utility-icons">
      <a href="login.php" class="icon-anchor" aria-label="Profile">
        <img src="assets/icons/profile.png" alt="Profile">
      </a>
      <a href="/cart" class="icon-anchor" aria-label="Cart">
        <img src="assets/icons/cart.png" alt="Cart">
      </a>
    </div>
  </div>

  <nav class="nav-links container" style="text-align:center; padding-top:15px;">
    <a href="him_collection.php">Him</a>
    <a href="her_collection.php">Her</a>
    <a href="newarrivals.php"><strong>New Arrivals</strong></a>
    <a href="about_us.php">About Us</a>
    <a href="concierge.php">Concierge</a>
  </nav>
</header>

<section class="hero" role="img" aria-label="New arrivals landing image">
  <div class="hero-content">
    <h1>NEW ARRIVALS</h1>
  </div>
</section>

<section class="product-section container">
  <div class="product-grid">
    <div class="product-card">
      <img src="https://via.placeholder.com/400x500/52433f/ffffff?text=Linen+Shirt" alt="The Riviera Linen Shirt">
      <h4>The Riviera Linen Shirt</h4>
      <p>$149.00</p>
    </div>

    <div class="product-card">
      <img src="https://via.placeholder.com/400x500/a3959c/ffffff?text=Silk+Top" alt="Silk Resort Top">
      <h4>Silk Resort Top</h4>
      <p>$120.00</p>
    </div>

    <div class="product-card">
      <img src="https://via.placeholder.com/400x500/e8d5bf/1e1e1e?text=Hotel+Robe" alt="The Hotel Robe - Rose">
      <h4>The Hotel Robe - Rose</h4>
      <p>$189.00</p>
    </div>
  </div>
</section>

<footer class="footer-main">
  <div class="container footer-grid">
    <div class="newsletter-section">
      <div class="person-icon">👤</div>
      <h2>JOIN THE LEISURE LETTER</h2>
      <form class="newsletter-form" action="/subscribe.php" method="post">
        <input name="email" type="email" placeholder="Enter your email" required>
        <button type="submit" aria-label="Subscribe">→</button>
      </form>
      <div class="social-icons"><a href="#">📷</a><a href="#">▶️</a><a href="#">🎵</a><a href="#">📌</a></div>
    </div>

    <div class="footer-links">
      <h3>SHOP</h3>
      <a href="him_collection.php">Him</a>
      <a href="her_collection.php">Her</a>
      <a href="newarrivals.php">New Arrivals</a>
      <a href="about_us.php">About Us</a>
      <a href="concierge.php">Concierge</a>
    </div>

    <div class="footer-links">
      <h3>INFORMATION</h3>
      <a href="/shipping">Shipping Policy</a>
      <a href="/returns">Return Policy</a>
      <a href="/privacy">Privacy Policy</a>
    </div>
  </div>
</footer>

<div class="footer-bar">© <?php echo date("Y"); ?> MAISON MUGLER.</div>

<?php
require_once __DIR__ . '/../../components/footer.php';
?>
