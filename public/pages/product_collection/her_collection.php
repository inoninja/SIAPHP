<?php
// her_collection.php
session_start();
// Include the database connection (adjust path if needed)
require_once __DIR__ . '/../../../database/db.php';

// --- Configuration for Header ---
// Define page-specific variables for header.php
$pageTitle = "Her Collection";
$cssFile = "her_collection.css"; 

// --- Includes ---
// The header.php should be located in public/components/
require_once __DIR__ . '/../../components/header.php';
?>

<section class="collection-hero">
    <div class="container">
        <h1>WOMEN'S APPAREL</h1>
        <p>A curated selection of our finest garments for the modern woman.</p>
    </div>
</section>

<main class="collection-content container">
    <aside class="sidebar-filters">
        <button class="filter-toggle active">
            <span class="icon"></span> Hide filters
        </button>
        <div class="filter-group"><h4 class="filter-title">Material <span class="icon">⌄</span></h4></div>
        <div class="filter-group"><h4 class="filter-title">Category <span class="icon">⌄</span></h4></div>
        <div class="filter-group"><h4 class="filter-title">Size <span class="icon">⌄</span></h4></div>
    </aside>

    <section class="product-listing">

        <h2 style="font-family:var(--primary-font); margin-bottom:20px;">New Arrivals</h2>
        <div class="product-grid">
            <a href="#" class="product-card">
                <div class="product-card-image"><img src="https://via.placeholder.com/300x400/96b8a8/ffffff?text=Linen+Sundress" alt="Linen Sundress"></div>
                <h4>The Riviera Linen Sundress</h4>
                <p class="price-info">$220.00</p>
            </a>
            <a href="#" class="product-card">
                <div class="product-card-image"><span class="sale-tag">New!</span><img src="https://via.placeholder.com/300x400/e8d5bf/1e1e1e?text=Silk+Knit+Top" alt="Silk Knit Top"></div>
                <h4>The Silk Resort Knit Top</h4>
                <p class="price-info">$135.00</p>
            </a>
            <a href="#" class="product-card">
                <div class="product-card-image"><img src="https://via.placeholder.com/300x400/4e5a6a/ffffff?text=High+Waist+Shorts" alt="High Waist Shorts"></div>
                <h4>The High-Waist Linen Short</h4>
                <p class="price-info">$110.00</p>
            </a>
        </div>

        <h2 style="font-family:var(--primary-font); margin:60px 0 20px;">Tops</h2>
        <div class="product-grid">
            <a href="#" class="product-card"><div class="product-card-image"><img src="https://via.placeholder.com/300x400/c7a7a5/1e1e1e?text=One+Piece+Blouse" alt="One Piece Blouse"></div><h4>The Retro Blouse</h4><p class="price-info">$128.00</p></a>
            <a href="#" class="product-card"><div class="product-card-image"><img src="https://via.placeholder.com/300x400/ffb6b9/1e1e1e?text=Silk+Camisoletop" alt="Silk Camisoletop"></div><h4>Silk Camisole Top</h4><p class="price-info">$140.00</p></a>
            <a href="#" class="product-card"><div class="product-card-image"><img src="https://via.placeholder.com/300x400/a3959c/1e1e1e?text=Linen+Shirt" alt="Linen Shirt"></div><h4>Linen Relaxed Shirt</h4><p class="price-info">$150.00</p></a>
        </div>

        <h2 style="font-family:var(--primary-font); margin:60px 0 20px;">Bottoms</h2>
        <div class="product-grid">
            <a href="#" class="product-card"><div class="product-card-image"><img src="https://via.placeholder.com/300x400/52433f/ffffff?text=Midi+Skirt" alt="Midi Skirt"></div><h4>The Italian Cotton Skirt</h4><p class="price-info">$195.00</p></a>
            <a href="#" class="product-card"><div class="product-card-image"><img src="https://via.placeholder.com/300x400/4d4d4d/ffffff?text=Wide+Leg+Pants" alt="Wide Leg Pants"></div><h4>Wide-Leg Linen Pants</h4><p class="price-info">$180.00</p></a>
            <a href="#" class="product-card"><div class="product-card-image"><img src="https://via.placeholder.com/300x400/a3959c/1e1e1e?text=Shorts" alt="Tailored Shorts"></div><h4>Tailored High-Waist Shorts</h4><p class="price-info">$110.00</p></a>
        </div>

    </section>
</main>

<?php
// The footer.php should be located in public/components/
require_once __DIR__ . '/../../components/footer.php';
?>
