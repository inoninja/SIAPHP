<?php
// him_collection.php
session_start();
// Assuming database connection is still needed, adjust path if necessary
require_once __DIR__ . '/../../../database/db.php'; 

// --- 1. PHP Data Fetching Logic (Placeholder) ---

// NOTE: This function simulates fetching data from your database ($pdo is assumed 
// to be available from db.php). Replace the placeholder $products_data array 
// with actual database queries using $pdo->query() or prepared statements.
function get_men_products($pdo) {
    // --- START: Placeholder Data Array (Replace with Database Query) ---
    $products_data = [
        [
            'url' => 'product-the-dominica.php',
            'image_src' => 'assets/him_collection_assets/The-Dominica-Crochet-Shirt-Tierra.png',
            'image_alt' => 'Striped Knit Polo',
            'title' => 'The Leisure Knit Polo',
            'price' => 149.00,
            'on_sale' => false,
        ],
        [
            'url' => 'product-the-robe.php',
            'image_src' => 'https://via.placeholder.com/300x400/004c3e/ffffff?text=Emerald+Robe',
            'image_alt' => 'Emerald Robe',
            'title' => 'The Hotel Robe - Emerald',
            'price' => 189.00,
            'on_sale' => false,
        ],
        [
            'url' => 'product-the-brisa.php',
            'image_src' => 'https://via.placeholder.com/300x400/8c7c63/ffffff?text=Striped+Button+Down',
            'image_alt' => 'Striped Button Down',
            'title' => 'The Brisa Striped Shirt',
            'original_price' => 169.00,
            'price' => 143.00, // Sale Price
            'sale_tag' => 'Save 15%',
            'on_sale' => true,
        ],
        [
            'url' => 'product-the-riviera.php',
            'image_src' => 'https://via.placeholder.com/300x400/ede8e3/52433f?text=Cream+Knit+Polo',
            'image_alt' => 'Cream Knit Polo',
            'title' => 'The Riviera Knit Sweater',
            'price' => 175.00,
            'on_sale' => false,
        ],
    ];
    // --- END: Placeholder Data Array ---

    // Example of database integration (uncomment and modify to use actual data)
    /*
    try {
        $stmt = $pdo->query("SELECT * FROM products WHERE gender = 'male' AND is_active = 1 ORDER BY created_at DESC");
        $products_data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Database Error: " . $e->getMessage());
        $products_data = []; // Fallback to empty array on error
    }
    */
    return $products_data;
}

// Fetch the products
$products = get_men_products($pdo);

// Page title and CSS file (header.php should use these)
$pageTitle = "MAISON MUGLER - Men's Apparel";
$cssFile = "him_collection.css"; // The CSS file for this page

// include header (expects $pageTitle and $cssFile)
require_once __DIR__ . '/../../components/header.php';
?>

<style>
/* ------------------------------------------- */
/* 1. Global & Utility Styles */
/* ------------------------------------------- */
:root {
    --primary-font: 'Playfair Display', serif; 
    --secondary-font: 'Poppins', sans-serif; 
    --brand-dark: #1e1e1e; 
    --brand-accent: #8b0000; 
    --brand-gold: #c3b091; 
    --background-light: #ffffff;
    --subtle-gray: #f4f4f4; 
    --social-icon-color: #555555;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: var(--secondary-font);
    color: var(--brand-dark);
    line-height: 1.6;
    background-color: var(--subtle-gray);
}

a {
    text-decoration: none;
    color: inherit;
}

.container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 20px;
}

.icon {
  font-size: 1.1em;
  display: inline-block;
}

/* Icon anchor and image styles (used in header) */
.icon-anchor {
  display: inline-flex;
  align-items: center;
  justify-content: center;
}
.icon-anchor img {
    width: 22px;
    height: 22px;
    object-fit: contain;
    display: block;
    transition: opacity 0.18s ease, transform 0.18s ease;
    filter: brightness(0); /* makes icons black — remove if icons are colored */
}
.icon-anchor img:hover {
    opacity: 0.75;
    transform: translateY(-1px);
}

/* ------------------------------------------- */
/* 2. Header & Navigation (From Index) */
/* ------------------------------------------- */
.promo-bar {
    background-color: var(--brand-accent);
    color: white;
    text-align: center;
    padding: 5px 0;
    font-size: 0.85em;
}
.promo-bar span {
  margin: 0 15px;
}

.header-main {
    padding: 15px 0;
    border-bottom: 1px solid #eee;
    background: white;
    position: sticky; 
    top: 0; 
    z-index: 100; 
}
.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-left, .nav-right {
  flex: 1;
  display: flex;
  align-items: center;
}

.logo {
    font-family: var(--primary-font);
    font-size: 2.2em;
    letter-spacing: 2px;
    font-weight: 400;
    text-align: center;
    flex: 2;
}

.nav-links a {
    margin: 0 12px;
    text-transform: uppercase;
    font-weight: 400;
    font-size: 0.8em;
    letter-spacing: 0.5px;
}
.nav-links a.active {
    font-weight: 600;
}

.utility-icons {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}
.utility-icons a {
    margin-left: 20px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}
.search-icon { margin-left: 0; }

/* ------------------------------------------- */
/* 3. COLLECTION SPECIFIC STYLES */
/* ------------------------------------------- */
.collection-hero {
    background-color: white; 
    text-align: left;
    padding: 60px 0 0;
    margin-bottom: 0;
}
.collection-hero h1 {
    font-family: var(--primary-font);
    font-size: 3.5em;
    font-weight: 400;
    margin-bottom: 10px;
    padding-left: 20px;
}
.collection-hero p {
    font-size: 1.1em;
    color: #555;
    margin-bottom: 0;
    padding-left: 20px;
}

.collection-content {
    display: grid;
    grid-template-columns: 250px 1fr;
    gap: 40px;
    padding-top: 50px;
    min-height: 800px;
    background-color: white; 
}

.sidebar-filters {
    padding-top: 55px;
    border-right: 1px solid #eee;
    padding-right: 40px;
    padding-left: 20px;
}

.filter-toggle {
    background-color: var(--brand-dark);
    color: white;
    border: none;
    padding: 10px 20px;
    text-transform: uppercase;
    font-size: 0.8em;
    letter-spacing: 0.5px;
    cursor: pointer;
    margin-bottom: 30px;
    display: flex;
    align-items: center;
}
.filter-toggle .icon {
    display: inline-block;
    width: 12px;
    height: 12px;
    border-top: 2px solid white;
    border-bottom: 2px solid white;
    margin-right: 8px;
}

.filter-group {
    border-bottom: 1px solid #eee;
    padding: 15px 0;
    cursor: pointer;
}
.filter-title {
    font-family: var(--secondary-font);
    font-size: 1em;
    font-weight: 500;
    color: var(--brand-dark);
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.filter-title .icon {
    font-size: 0.8em;
    color: #666;
    transition: transform 0.2s;
}

.product-listing {
    padding-right: 20px;
}

.top-bar-controls {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
    padding-bottom: 15px;
    border-bottom: 1px solid #eee;
}

.horizontal-nav .nav-link {
    font-size: 0.9em;
    text-transform: capitalize; 
    margin-right: 5px;
    color: #666;
}

.sort-control {
    display: flex;
    align-items: center;
    font-size: 0.9em;
}
.sort-control label {
    color: #666;
    margin-right: 15px;
}
.sort-select {
    background-color: var(--brand-dark); 
    color: white;
    border: none;
    padding: 8px 15px;
    text-transform: uppercase;
    font-size: 0.75em;
    appearance: none;
    /* Custom down arrow using SVG data URI */
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>');
    background-repeat: no-repeat;
    background-position: right 8px center;
    padding-right: 30px;
    cursor: pointer;
}
.sort-select option {
      background-color: white;
      color: var(--brand-dark);
      text-transform: none;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr); 
    gap: 40px 25px;
    padding-bottom: 80px;
}

.product-card {
    display: block;
    text-align: left;
}
.product-card-image {
    position: relative;
    overflow: hidden;
    margin-bottom: 15px;
}
.product-card-image img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.3s ease;
}
.product-card-image:hover img {
    transform: scale(1.05);
}
.product-card h4 {
    font-size: 1em;
    font-weight: 400;
    margin-bottom: 5px;
}
.product-card .price-info {
    font-size: 0.9em;
    font-weight: 600;
}
.product-card .sale-price {
    color: var(--brand-accent); 
    margin-left: 8px;
}
.product-card .original-price {
    text-decoration: line-through;
    color: #888;
    font-weight: 400;
}

.sale-tag {
    position: absolute;
    top: 15px;
    right: 0;
    background-color: var(--brand-accent);
    color: white;
    padding: 5px 10px;
    font-size: 0.75em;
    font-weight: 600;
}

/* ------------------------------------------- */
/* 4. Footer STYLES (UPDATED TO MATCH IMAGE) */
/* ------------------------------------------- */
.feature-row { /* Stays the same */
    display: flex; justify-content: space-around; text-align: center; padding: 50px 0; border-top: 1px solid #eee; background: white;
}
.feature-item { width: 30%; }
.feature-item .icon { font-size: 2em; margin-bottom: 10px; }
.feature-item p { font-size: 0.9em; color: #666; }

.footer-main { 
    background: var(--background-light); /* Enforce white background */
    padding: 60px 0; 
    border-top: 1px solid #eee; /* Added separator */
}

.footer-grid { 
    display: grid; 
    grid-template-columns: 1fr 1fr 1fr; 
    gap: 50px; 
    padding-bottom: 60px; 
}

.newsletter-section {
    padding-right: 50px;
}

.newsletter-section .person-icon {
    font-size: 2.5em; 
    margin-bottom: 10px;
    color: #7d7d7d; 
}

.newsletter-section h2 { 
    font-family: var(--primary-font); 
    font-size: 2.2em; 
    font-weight: 400; 
    margin-bottom: 25px; 
    line-height: 1.1;
}

.newsletter-form {
    display: flex;
    align-items: center;
    background: #e9e9e9; 
    padding: 5px 10px;
    border-radius: 2px;
    max-width: 300px; 
    margin-bottom: 25px;
}
.newsletter-form input {
    flex-grow: 1;
    padding: 10px 0;
    border: none;
    background: transparent;
    font-size: 1em;
    outline: none;
    color: var(--brand-dark);
}
.newsletter-form button {
    background: transparent;
    border: none;
    cursor: pointer;
    font-size: 1.5em; 
    padding: 0 5px;
    color: var(--brand-dark); 
}

.social-icons a {
    margin-right: 20px;
    font-size: 1.5em;
    color: var(--social-icon-color);
    transition: color 0.2s;
}
.social-icons a:hover {
    color: var(--brand-dark);
}

.footer-links h3 { 
    font-size: 1em; 
    text-transform: uppercase; 
    font-weight: 600; 
    margin-bottom: 20px; 
    color: var(--brand-dark);
}
.footer-links a { 
    display: block; 
    margin-bottom: 10px; 
    font-size: 0.9em; 
    color: #444; 
}

.footer-bar { 
    background: var(--brand-dark); 
    color: white; 
    text-align: left; 
    padding: 15px 20px; 
    font-size: 0.75em; 
}

/* Responsive tweaks for header icons (small screens) */
@media (max-width: 720px) {
    .collection-hero h1 { font-size: 2.2em; }
    .nav-links { display: none; }
    .icon-anchor img { width: 20px; height: 20px; filter: none; } /* smaller on mobile, no forced brightness */
    .collection-content { grid-template-columns: 1fr; padding-top: 30px; min-height: auto; }
    .sidebar-filters { border-right: none; padding-right: 0; padding-left: 0; }
}
</style>

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
            
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                    <a href="<?= htmlspecialchars($product['url']) ?>" class="product-card">
                        <div class="product-card-image">
                            <?php if (isset($product['on_sale']) && $product['on_sale']): ?>
                                <span class="sale-tag"><?= htmlspecialchars($product['sale_tag'] ?? 'Sale') ?></span>
                            <?php endif; ?>
                            
                            <img src="<?= htmlspecialchars($product['image_src']) ?>" alt="<?= htmlspecialchars($product['image_alt']) ?>">
                        </div>
                        <h4><?= htmlspecialchars($product['title']) ?></h4>
                        <p class="price-info">
                            <?php if (isset($product['on_sale']) && $product['on_sale']): ?>
                                <span class="original-price">$<?= number_format($product['original_price'], 2) ?></span> 
                                <span class="sale-price">$<?= number_format($product['price'], 2) ?></span>
                            <?php else: ?>
                                $<?= number_format($product['price'], 2) ?>
                            <?php endif; ?>
                        </p>
                    </a>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No products found in this collection.</p>
            <?php endif; ?>
            
        </div>
    </section>
</main>

<?php
// include footer (closes body/html)
require_once __DIR__ . '/../../components/footer.php';
?>