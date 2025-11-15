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

    <header class="header-main">
        <div class="container header-content">
            <nav class="nav-left">
              <a href="/search" class="icon-anchor search-icon" aria-label="Search">
                <img src="/assets/icons/search.png" alt="Search icon">
              </a>
            </nav>
            <a href="homepage.php" class="logo">MAISON MUGLER</a>
            <div class="nav-right utility-icons">
                <a href="login.php" class="icon-anchor" aria-label="Profile">
                  <img src="/assets/icons/profile.png" alt="Profile icon">
                </a>
                <a href="/cart" class="icon-anchor" aria-label="Cart">
                  <img src="/assets/icons/cart.png" alt="Cart icon">
                </a>
            </div>
        </div>
        <nav class="nav-links container" style="text-align:center; padding-top: 15px;">
        <a href="him_collection.php" class="active">Him</a>
        <a href="her_collection.php">Her</a>
        <a href="newarrivals.php">New Arrivals</a>
        <a href="about_us.php">About Us</a>
        <a href="concierge.php">Concierge</a>
        </nav>
    </header>
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

    <footer class="footer-main">
        <div class="container footer-grid">
            
            <div class="newsletter-section">
                <div class="icon person-icon">👤</div>
                <h2>JOIN THE LEISURE LETTER</h2>
                <form class="newsletter-form" action="/subscribe.php" method="post">
                    <input name="email" type="email" placeholder="Enter your email" required>
                    <button type="submit">→ </button>
                </form>
                <div class="social-icons">
                    <a href="#">✉️</a> 
                    <a href="#">▶️</a> 
                    <a href="#">🎵</a> 
                    <a href="#">📌</a> 
                </div>
            </div>
            
            <div class="footer-links">
                <h3>SHOP</h3>
                <a href="him_collection.php">Him</a>
                <a href="her_collection.php">Her</a>
                <a href="/collections/new">New Arrivals</a>
                <a href="/sale">Now Departing</a>
                <a href="/blog">Institute of Leisure</a>
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
// include footer (closes body/html)
require_once __DIR__ . '/../../components/footer.php';
?>