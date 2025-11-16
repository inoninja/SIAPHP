<?php
// her_collection.php
session_start();
// Include the database connection (adjust path if needed)
require_once __DIR__ . '/../../../database/db.php';

// --- Configuration for Header ---
$pageTitle = "Her Collection | MAISON MUGLER";

// --- Includes ---
// The header.php should be located in public/components/
require_once __DIR__ . '/../../components/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="collection.css">
</head>
<body>

<main>
    <section class="collection-hero her-hero">     <div class="container">
            <h1>WOMEN'S APPAREL</h1>
            <p>A curated selection of our finest garments for the modern woman.</p>
        </div>
    </section>

    <section class="collection-content container">
        <aside class="sidebar-filters">
            <button class="filter-toggle active">
                <span class="icon"></span> Hide filters
            </button>
            <div class="filter-group"><h4 class="filter-title">Material <span class="icon">⌄</span></h4></div>
            <div class="filter-group"><h4 class="filter-title">Category <span class="icon">⌄</span></h4></div>
            <div class="filter-group"><h4 class="filter-title">Size <span class="icon">⌄</span></h4></div>
        </aside>

        <section class="product-listing">
            <div class="top-bar-controls">
                <nav class="horizontal-nav">
                    <a href="#" class="nav-link">New Arrivals</a> /
                    <a href="#" class="nav-link">Tops</a> /
                    <a href="#" class="nav-link">Bottoms</a> 
                </nav>
                <div class="sort-control">
                    <label for="sort-by">Sort by:</label>
                    <select id="sort-by" class="sort-select">
                        <option value="featured">Featured</option>
                        <option value="newest">Newest</option>
                        <option value="price-asc">Price: Low to High</option>
                    </select>
                </div>
            </div>

            <h2 style="font-family:var(--primary-font); margin-bottom:20px;">New Arrivals</h2>
            <div class="product-grid">
                <a href="#" class="product-card">
                    <div class="product-card-image"><img src="https://via.placeholder.com/300x400/96b8a8/ffffff?text=Linen+Sundress" alt="Linen Sundress"></div>
                    <h4>The Riviera Linen Sundress Title is Longer Than Others</h4>
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
                <a href="#" class="product-card"><div class="product-card-image"><img src="https://via.placeholder.com/300x400/ffb6b9/1e1e1e?text=Silk+Camisoletop" alt="Silk Camisoletop"></div><h4>Silk Camisole Top is a long title here</h4><p class="price-info">$140.00</p></a>
                <a href="#" class="product-card"><div class="product-card-image"><img src="https://via.placeholder.com/300x400/a3959c/1e1e1e?text=Linen+Shirt" alt="Linen Shirt"></div><h4>Linen Relaxed Shirt</h4><p class="price-info">$150.00</p></a>
            </div>

            <h2 style="font-family:var(--primary-font); margin:60px 0 20px;">Bottoms</h2>
            <div class="product-grid">
                <a href="#" class="product-card"><div class="product-card-image"><img src="https://via.placeholder.com/300x400/52433f/ffffff?text=Midi+Skirt" alt="Midi Skirt"></div><h4>The Italian Cotton Skirt</h4><p class="price-info">$195.00</p></a>
                <a href="#" class="product-card"><div class="product-card-image"><img src="https://via.placeholder.com/300x400/4d4d4d/ffffff?text=Wide+Leg+Pants" alt="Wide Leg Pants"></div><h4>Wide-Leg Linen Pants</h4><p class="price-info">$180.00</p></a>
                <a href="#" class="product-card"><div class="product-card-image"><img src="https://via.placeholder.com/300x400/a3959c/1e1e1e?text=Shorts" alt="Tailored Shorts"></div><h4>Tailored High-Waist Shorts</h4><p class="price-info">$110.00</p></a>
            </div>

        </section>
    </section>
</main>

<script>
    const STORAGE_KEY = 'ddm_cart_v1';

    function readCart(){
        const raw = localStorage.getItem(STORAGE_KEY);
        return raw ? JSON.parse(raw) : [];
    }

    function updateCartCount(){
        const cart = readCart();
        const totalQty = cart.reduce((s,i)=> s + (i.qty||0), 0);
        const cartCountElement = document.getElementById('cartCount');
        if (cartCountElement) cartCountElement.textContent = totalQty;
    }
    
    document.addEventListener('DOMContentLoaded', updateCartCount);
</script>
</body>
</html>

<?php
// The footer.php should be located in public/components/
require_once __DIR__ . '/../../components/footer.php';
?>