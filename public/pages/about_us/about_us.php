<?php
// pages/about_us/about_us.php
session_start();
// Assuming database connection is required for consistency with homepage.php
require_once __DIR__ . '/../../../database/db.php'; 

// Define page variables for header.php
$pageTitle = "About Us | MAISON MUGLER";
// Sets the specific CSS file to be linked in the header component
$cssFile = "about_us.css"; 

// Include header (Note the relative path: up two dirs to 'pages', then into 'components')
require_once __DIR__ . '/../../components/header.php';
?>

<!-- About Us Page Content -->
<main>
  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>ABOUT US</h1>
    </div>
  </section>

  <!-- About Content Section -->
  <section class="about-section container">
    <h2>Who We Are</h2>
    <p>Founded in 2018, Maison Mugler was created out of a desire to slow down, travel often, and appreciate life’s finest details. Inspired by coastal leisure and timeless style, we craft apparel and accessories designed for refined relaxation — made for the jet-setter, the weekend wanderer, and those who live for the sea breeze.</p>

    <img class="about-image" src="assets/au1.png" alt="Lifestyle image">

    <h2>Our Philosophy</h2>
    <p>We believe leisure is an art form — one that balances elegance, confidence, and comfort. Every collection embodies sophistication while honoring simplicity, designed to take you seamlessly from sunrise swims to late-night dinners by the coast.</p>

    <h2>Environmentally Conscious Practices </h2>
    <p>At Maison Mugler, sustainability isn’t just a statement — it’s our commitment. We partner with ethical manufacturers, prioritize responsible sourcing, and design garments built to last. By embracing slow fashion, we aim to reduce waste and create enduring pieces that transcend trends.</p>

    <h2>Our Journey Continues</h2>
    <p>From our origins on the Mediterranean coast to our expansion into global markets, we remain dedicated to crafting leisurewear that celebrates life, travel, and authenticity. Join us as we continue our pursuit of effortless luxury, one timeless piece at a time.</p>
  </section>
</main>

<?php
// Include footer
require_once __DIR__ . '/../../components/footer.php';
?>