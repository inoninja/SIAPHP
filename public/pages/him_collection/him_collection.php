<?php $page_title = "Him Collection - Shirts & Tops | MAISON MUGLER"; 
require_once __DIR__ . '/../../components/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="him_collection.css">
</head>
<body>

    <main>
        <section class="collection-hero">
            <div class="container">
                <h1>MEN'S APPAREL</h1>
            </div>
        </section>

            <section class="product-listing">
                <div class="top-bar-controls">
                    <nav class="horizontal-nav">
                        <a href="#" class="nav-link">New Arrivals</a> /
                        <a href="#" class="nav-link">Shirts and Tops</a> /
                        <a href="#" class="nav-link">Pants and Shorts</a> 
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
                    <a href="product-the-dominica.php" class="product-card">
                        <div class="product-card-image">
                            <img src="him_collection_assets/men1.png" alt="Long Sleeve Polo">
                        </div>
                        <h4>The Leisure Polo</h4>
                        <p class="price-info">₱ 1,500.00</p>
                    </a>
                    <a href="#" class="product-card">
                        <div class="product-card-image">
                            <img src="him_collection_assets/men2.png" alt="Emerald Robe">
                        </div>
                        <h4>The Hotel Robe - Emerald</h4>
                        <p class="price-info">$189.00</p>
                    </a>
                    <a href="#" class="product-card">
                        <div class="product-card-image">
                            <span class="sale-tag">Save 15%</span>
                            <img src="him_collection_assets/men3.png" alt="Striped Button Down">
                        </div>
                        <h4>The Brisa Striped Shirt</h4>
                        <p class="price-info"><span class="original-price">$169.00</span> <span class="sale-price">$143.00</span></p>
                    </a>
                    <a href="#" class="product-card">
                        <h2 style="font-family:var(--primary-font); margin-bottom:20px;">Shirt and Tops</h2>
                        <div class="product-card-image">
                            <img src="him_collection_assets/men4.png" alt="Cream Knit Polo">
                        </div>
                        <h4>The Riviera Knit Sweater</h4>
                        <p class="price-info">$175.00</p>
                    </a>
                        <a href="#" class="product-card">
                        <div class="product-card-image">
                            <img src="him_collection_assets/men5.png" alt="Cream Knit Polo">
                        </div>
                        <h4>The Riviera Knit Sweater</h4>
                        <p class="price-info">$175.00</p>
                    </a>
                        <a href="#" class="product-card">
                        <div class="product-card-image">
                            <img src="him_collection_assets/men6.png" alt="Cream Knit Polo">
                        </div>
                        <h4>The Riviera Knit Sweater</h4>
                        <p class="price-info">$175.00</p>
                                            <a href="#" class="product-card">
                        <h2 style="font-family:var(--primary-font); margin-bottom:20px;">Pants and Shorts</h2>
                        <div class="product-card-image">
                            <img src="him_collection_assets/men7.png" alt="Cream Knit Polo">
                        </div>
                        <h4>The Riviera Knit Sweater</h4>
                        <p class="price-info">$175.00</p>
                    </a>
                        <a href="#" class="product-card">
                        <div class="product-card-image">
                            <img src="him_collection_assets/men8.png" alt="Cream Knit Polo">
                        </div>
                        <h4>The Riviera Knit Sweater</h4>
                        <p class="price-info">$175.00</p>
                    </a>
                        <a href="#" class="product-card">
                        <div class="product-card-image">
                            <img src="him_collection_assets/men9.png" alt="Cream Knit Polo">
                        </div>
                        <h4>The Riviera Knit Sweater</h4>
                        <p class="price-info">$175.00</p>
                    </a>
                </div>
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
            // Calculate total quantity of items in the cart
            const totalQty = cart.reduce((s,i)=> s + (i.qty||0), 0);
            const cartCountElement = document.getElementById('cartCount');
            if (cartCountElement) cartCountElement.textContent = totalQty;
        }
        
        document.addEventListener('DOMContentLoaded', updateCartCount);
    </script>
</body>
</html>

<?php
require_once __DIR__ . '/../../components/footer.php';
?>