<?php
// new_arrivals.php
session_start();
require_once __DIR__ . '/../../../database/db.php'; // keep if you need DB later

$pageTitle = "New Arrivals | MAISON MUGLER";
$cssFile = "newarrivals.css"; // make sure header.php uses this variable to include the CSS

require_once __DIR__ . '/../../components/header.php';
?>

<div class="promo-bar"><span class="icon">←</span> Free shipping all over the Philippines <span class="icon">→</span></div>

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

<div class="footer-bar">© <?php echo date("Y"); ?> MAISON MUGLER.</div>

<?php
require_once __DIR__ . '/../../components/footer.php';
?>
