<?php
// him_collection.php
session_start();
// Assuming database connection is still needed, adjust path if necessary
require_once __DIR__ . '/../../../database/db.php'; 

// Page title and CSS file (header.php should use these)
$pageTitle = "MAISON MUGLER - Men's Apparel";
$cssFile = "him_collection.css"; // The CSS file for this page

// include header (expects $pageTitle and $cssFile)
// NOTE: Ensure your header.php correctly links $cssFile from the same directory 
// or adjusts the path to find it.
require_once __DIR__ . '/../../components/header.php';
?>

    <div class="promo-bar">
        <span class="icon">←</span> Free shipping on all over the Philippines <span class="icon">→</span>
    </div>

    <section class="collection-hero">
        <div class="container">
            <h1>MEN'S APPAREL</h1>
        </div>
    </section>

    <main class="collection-content container">
        <aside class="sidebar-filters">
            <button class="filter-toggle active">
                <span class="icon"> </span> Hide filters
            </button>
            <div class="filter-group">
                <h4 class="filter-title">Material <span class="icon">⌄</span></h4>
            </div>
            <div class="filter-group">
                <h4 class="filter-title">Product type <span class="icon">⌄</span></h4>
            </div>
            <div class="filter-group">
                <h4 class="filter-title">Category <span class="icon">⌄</span></h4>
            </div>
            <div class="filter-group">
                <h4 class="filter-title">Size <span class="icon">⌄</span></h4>
            </div>
        </aside>

        <section class="product-listing">
            <div class="top-bar-controls">
                <nav class="horizontal-nav">
                    <a href="#" class="nav-link">New Arrivals</a> /
                    <a href="#" class="nav-link">Shirts and Tops</a> /
                    <a href="#" class="nav-link">Pants and Shorts</a> /
                    <a href="#" class="nav-link">Swim</a> /
                    <a href="#" class="nav-link">Suiting</a> /
                    <a href="#" class="nav-link">Accessories</a>
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
            <div class="product-grid">
                <a href="product-the-dominica.php" class="product-card">
                    <div class="product-card-image">
                        <img src="assets/him_collection_assets/The-Dominica-Crochet-Shirt-Tierra.png" alt="Striped Knit Polo">
                    </div>
                    <h4>The Leisure Knit Polo</h4>
                    <p class="price-info">$149.00</p>
                </a>
                <a href="#" class="product-card">
                    <div class="product-card-image">
                        <img src="https://via.placeholder.com/300x400/004c3e/ffffff?text=Emerald+Robe" alt="Emerald Robe">
                    </div>
                    <h4>The Hotel Robe - Emerald</h4>
                    <p class="price-info">$189.00</p>
                </a>
                <a href="#" class="product-card">
                    <div class="product-card-image">
                        <span class="sale-tag">Save 15%</span>
                        <img src="https://via.placeholder.com/300x400/8c7c63/ffffff?text=Striped+Button+Down" alt="Striped Button Down">
                    </div>
                    <h4>The Brisa Striped Shirt</h4>
                    <p class="price-info"><span class="original-price">$169.00</span> <span class="sale-price">$143.00</span></p>
                </a>
                <a href="#" class="product-card">
                    <div class="product-card-image">
                        <img src="https://via.placeholder.com/300x400/ede8e3/52433f?text=Cream+Knit+Polo" alt="Cream Knit Polo">
                    </div>
                    <h4>The Riviera Knit Sweater</h4>
                    <p class="price-info">$175.00</p>
                </a>
                </div>
        </section>
    </main>


    <div class="footer-bar">
      <div class="container">
        © <?php echo date("Y"); ?> MAISON MUGLER.
      </div>
    </div>
    <?php
// include footer (closes body/html)
require_once __DIR__ . '/../../components/footer.php';
?>