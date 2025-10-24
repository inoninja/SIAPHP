<?php
// Start the session to make $_SESSION variables available
session_start();

// --- Page-Specific Variables ---
// These variables will be used by header.php
$pageTitle = "Him Collection";
// This path is relative to him_collection.php, which is correct for how header.php includes it.
$cssFile = "him_collection.css"; 
// --- End of Variables ---


// Include the existing header
// We go up two directories (out of 'him_collection' and 'pages') to find 'components'
include_once __DIR__ . '/../../components/header.php';
?>

<!-- Start of Page-Specific Content -->
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
        
        <div class="filter-group" id="product-type-filter">
            <h4 class="filter-title">Product type <span class="icon">⌄</span></h4>
            <div class="filter-options">
                <label class="filter-option">
                    <input type="checkbox" name="product-type" value="tops">
                    Tops 
                </label>
                <label class="filter-option">
                    <input type="checkbox" name="product-type" value="bottoms">
                    Bottoms 
                </label>
            </div>
        </div>
        
        <div class="filter-group" id="category-filter">
            <h4 class="filter-title">Category <span class="icon">⌄</span></h4>
            <div class="filter-options">
                <label class="filter-option">
                    <input type="checkbox" name="category" value="shirts">
                    Shirts 
                </label>
                <label class="filter-option">
                    <input type="checkbox" name="category" value="tank_tops">
                    Tank tops 
                </label>
                <label class="filter-option">
                    <input type="checkbox" name="category" value="shorts">
                    Shorts 
                </label>
            </div>
        </div>
        
        <div class="filter-group" id="size-filter">
            <h4 class="filter-title">Size <span class="icon">⌄</span></h4>
            <div class="filter-options">
                <label class="filter-option">
                    <input type="checkbox" name="size" value="xs">
                    XS 
                </label>
                <label class="filter-option">
                    <input type="checkbox" name="size" value="s">
                    S 
                </label>
                <label class="filter-option">
                    <input type="checkbox" name="size" value="m">
                    M 
                </label>
                <label class="filter-option">
                    <input type="checkbox" name="size" value="l">
                    L 
                </label>
                <label class="filter-option">
                    <input type="checkbox" name="size" value="xl">
                    XL 
                </label>
            </div>
        </div>
    </aside>

    <section class="product-listing">
        <div class="top-bar-controls">
            <nav class="horizontal-nav">
                <!-- These links can be updated to point to real category pages -->
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
            <!-- These classes are used by the JavaScript filter -->
            <a href="#" class="product-card product-tops category-shirts size-m">
                <div class="product-card-image">
                    <img src="https://i.ibb.co/VYxVpKb3/ASSETS-knit-polo.png" alt="Striped Knit Polo">
                </div>
                <h4>The Leisure Knit Polo</h4>
                <p class="price-info">$149.00</p>
            </a>
            
            <a href="#" class="product-card product-tops category-shirts size-s">
                <div class="product-card-image">
                    <img src="https://i.ibb.co/KpT5QCMT/ASSETS-5.png" alt="Crochet Shirt - Pistachio">
                </div>
                <h4>The Antibes Shirt - Pistachio</h4>
                <p class="price-info">$189.00</p>
            </a>
            
            <a href="#" class="product-card product-tops category-tank_tops size-s">
                <div class="product-card-image">
                    <span class="sale-tag">Save 15%</span>
                    <img src="https://i.ibb.co/rGJhkjJT/ASSETS-1.png" alt="Rib tank">
                </div>
                <h4>The Milan Rib Tank - Onyx</h4>
                <p class="price-info"><span class="original-price">$169.00</span> <span class="sale-price">$143.00</span></p>
            </a>
            
            <a href="#" class="product-card product-bottoms category-shorts size-l">
                <div class="product-card-image">
                    <img src="https://i.ibb.co/Nd2HR8Ct/ASSETS-2.png" alt="Ventura Volly Short">
                </div>
                <h4>The Ventura Volly Short - Anchor</h4>
                <p class="price-info">$175.00</p>
            </a>
            
            <a href="#" class="product-card product-bottoms category-shorts size-m">
                <div class="product-card-image">
                    <img src="https://i.ibb.co/3mhG288K/ASSETS-3.png" alt="Rio Velour Short - Bordeaux">
                </div>
                <h4>The Rio Velour Short - Bordeaux</h4>
                <p class="price-info">$175.00</p>
            </a>
            
            <a href="#" class="product-card product-bottoms category-shorts size-xl">
                <div class="product-card-image">
                    <img src="https://i.ibb.co/84QQzynT/ASSETS-4.png" alt="Tropez Jacquard Short - Onyx">
                </div>
                <h4>The Tropez Jacquard Short - Onyx</h4>
                <p class="price-info">$175.00</p>
            </a>
        </div>
    </section>
</main>
<!-- End of Page-Specific Content -->


<!-- 
  Since your footer.php doesn't have a spot for JS, 
  we link it here, right before the footer is included.
-->
<script src="him_collection.js"></script>

<?php
// Include the existing footer
include_once __DIR__ . '/../../components/footer.php';
?>
