<?php $page_title = "The Dominica Crochet Shirt — Tierra | MAISON MUGLER"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title><?php echo $page_title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* All CSS from the original request (combined collection and product styles) */
        :root {
            --primary-font: 'Playfair Display', serif; 
            --secondary-font: 'Poppins', sans-serif; 
            --brand-dark: #1e1e1e; 
            --brand-accent: #8b0000; 
            --brand-gold: #c3b091; 
            --background-light: #ffffff;
            --subtle-gray: #f7f7f7; 
            --social-icon-color: #555555;
            --muted: #666;
        }
        * { box-sizing: border-box; margin: 0; padding: 0 }
        body { font-family: var(--secondary-font); color: var(--brand-dark); background: var(--subtle-gray); line-height: 1.6 }
        a { text-decoration: none; color: inherit }
        .container { max-width: 1400px; margin: 0 auto; padding: 0 20px }

        /* Header & Navigation */
        .promo-bar { background-color: var(--brand-accent); color: white; text-align: center; padding: 5px 0; font-size: 0.85em; }
        .promo-bar span { margin: 0 15px; }
        .header-main { padding: 15px 0; border-bottom: 1px solid #eee; background: white; position: sticky; top: 0; z-index: 100; }
        .header-content { display: flex; justify-content: space-between; align-items: center; }
        .nav-left, .nav-right { flex: 1; display: flex; align-items: center; }
        .logo { font-family: var(--primary-font); font-size: 2.2em; letter-spacing: 2px; font-weight: 400; text-align: center; flex: 2; }
        .nav-links a { margin: 0 12px; text-transform: uppercase; font-weight: 400; font-size: 0.8em; letter-spacing: 0.5px; }
        .nav-links a.active { font-weight: 600; }
        .utility-icons { display: flex; justify-content: flex-end; align-items: center; }
        .utility-icons a { margin-left: 20px; display: inline-flex; align-items: center; justify-content: center; }
        .cart-count { background: #222; color: #fff; border-radius: 50%; width: 22px; height: 22px; display: inline-flex; align-items: center; justify-content: center; font-size: 0.8rem; margin-left: 6px }
        .icon-anchor img { width: 22px; height: 22px; filter: brightness(0); }

        /* Product Layout */
        .product-hero{background:#fff;padding:40px 0}
        .product-wrap{display:grid;grid-template-columns:1fr 460px;gap:40px;padding:30px 0}
        .main-image{width:100%;height:640px;overflow:hidden;border:1px solid #eee}
        .main-image img{width:100%;height:100%;object-fit:cover;display:block}
        .thumbs{display:flex;gap:10px;margin-top:12px}
        .thumbs img{width:80px;height:80px;object-fit:cover;border:1px solid #eee;cursor:pointer}
        .product-info{background:#fff;padding:24px;border:1px solid #eee}
        .product-title{font-family:var(--primary-font);font-size:1.6rem;margin-bottom:8px}
        .product-sku{color:var(--muted);font-size:.9rem;margin-bottom:12px}
        .price{font-weight:700;font-size:1.1rem;margin-bottom:14px}
        .price .original{color:#888;text-decoration:line-through;font-weight:400;margin-right:8px}
        .option-row{margin-bottom:12px}
        label{display:block;font-weight:600;margin-bottom:6px;font-size:.85rem}
        select, input[type="number"]{width:100%;padding:10px;border:1px solid #ddd;border-radius:3px;margin-bottom:10px;font-size:1rem}
        button.addcart{background:var(--brand-dark);color:#fff;border:none;padding:12px 16px;font-weight:600;cursor:pointer}
        button.addcart:hover{background:var(--brand-accent)}
        button.checkout-btn{background:transparent;border:1px solid #ddd;padding:10px 14px;cursor:pointer}
        .product-desc{margin-top:18px;color:var(--muted);line-height:1.6}
        .meta{margin-top:14px;font-size:.9rem;color:var(--muted)}
        .toast{position:fixed;right:20px;bottom:20px;background:#222;color:#fff;padding:12px 16px;border-radius:4px;opacity:0;transform:translateY(8px);transition:all .28s;z-index:999}
        .toast.show{opacity:1;transform:translateY(0)}

        /* Footer Styles */
        .footer-main { background: var(--background-light); padding: 60px 0; border-top: 1px solid #eee; }
        .footer-grid { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 50px; padding-bottom: 60px; }
        .footer-bar { background: var(--brand-dark); color: white; text-align: left; padding: 15px 20px; font-size: 0.75em; }

        @media(max-width:900px){
            .product-wrap{grid-template-columns:1fr}
            .main-image{height:420px}
            .thumbs img{width:64px;height:64px}
        }
    </style>
</head>
<body>

    <div class="promo-bar">
        <span class="icon">←</span> Free shipping on all over the Philippines <span class="icon">→</span>
    </div>

    <header class="header-main">
        <div class="container header-content">
            <nav class="nav-left">
                <a href="/search" class="icon-anchor search-icon" aria-label="Search">
                    <img src="assets/icons/search.png" alt="Search icon">
                </a>
            </nav>
            <a href="him_collection.php" class="logo">MAISON MUGLER</a>
            <div class="nav-right utility-icons">
                <a href="login.php" class="icon-anchor" aria-label="Profile">
                    <img src="assets/icons/profile.png" alt="Profile icon">
                </a>
                <a href="checkout.php" id="cartLink" class="icon-anchor" aria-label="Cart">
                    <span class="icon">👜</span> <span id="cartCount" class="cart-count">0</span>
                </a>
            </div>
        </div>
        <nav class="nav-links container" style="text-align:center; padding-top: 15px;">
            <a href="him_collection.php" class="active">Him</a>
            <a href="her_collection.php">Her</a>
            <a href="new_arrivals.php">New Arrivals</a>
            <a href="about_us.php">About Us</a>
            <a href="concierge.php">Concierge</a>
        </nav>
    </header>

    <main class="container product-hero">
        <div class="product-wrap">
            <div class="gallery">
                <div class="main-image" id="mainImage">
                    <img src="assets/him_collection_assets/The-Dominica-Crochet-Shirt-Tierra.png" alt="The Dominica Crochet Shirt - Tierra">
                </div>

                <div class="thumbs" id="thumbs">
                    <img src="assets/him_collection_assets/The-Dominica-Crochet-Shirt-Tierra.png" alt="thumb1" data-full="assets/him_collection_assets/The-Dominica-Crochet-Shirt-Tierra.png">
                    <img src="assets/him_collection_assets/The-Dominica-Crochet-Shirt-Alt2.png" alt="thumb2" data-full="assets/him_collection_assets/The-Dominica-Crochet-Shirt-Alt2.png">
                    <img src="assets/him_collection_assets/The-Dominica-Crochet-Shirt-Alt3.png" alt="thumb3" data-full="assets/him_collection_assets/The-Dominica-Crochet-Shirt-Alt3.png">
                </div>
            </div>

            <aside class="product-info">
                <div class="product-title">The Dominica Crochet Shirt — Tierra</div>
                <div class="product-sku">SKU: DDM-THE-DOMINICA-T</div>
                <div class="price">
                    <span class="original">$169.00</span>
                    <span class="current" data-price="149.00">$149.00</span>
                </div>

                <form id="addToCartForm" method="POST" action="#">
                    <div class="option-row">
                        <label for="size">Size</label>
                        <select id="size" name="size" required>
                            <option value="">Select size</option>
                            <option>XS</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                    </div>

                    <div class="option-row">
                        <label for="qty">Quantity</label>
                        <input id="qty" name="quantity" type="number" min="1" value="1">
                    </div>

                    <div style="display:flex;gap:12px;align-items:center">
                        <button type="submit" class="addcart">Add to cart</button>
                        <button type="button" class="checkout-btn" id="goCheckout">Checkout</button>
                    </div>
                </form>

                <div class="product-desc">
                    <p>Hand-crocheted shirt in a warm Tierra tone. Lightweight cotton blend — perfect for coastal evenings and resort wear. Ethically produced with attention to craft and finish.</p>
                </div>

                <div class="meta">
                    <p><strong>Materials:</strong> Cotton blend</p>
                    <p><strong>Care:</strong> Hand wash or delicate cycle. Lay flat to dry.</p>
                </div>
            </aside>
        </div>
    </main>

    <footer class="footer-main">
        <div class="container footer-grid">
            <div class="newsletter-section">
                <div class="icon person-icon">👤</div>
                <h2>JOIN THE LEISURE LETTER</h2>
                <div class="newsletter-form">
                    <input type="email" placeholder="Enter your email" required>
                    <button type="submit">→ </button>
                </div>
                <div class="social-icons">
                    <a href="#">✉️</a> <a href="#">▶️</a> <a href="#">🎵</a> <a href="#">📌</a> 
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
        © 2025 MAISON MUGLER.
      </div>
    </div>

    <div id="toast" class="toast">Added to cart</div>

    <script>
        const STORAGE_KEY = 'ddm_cart_v1';

        function readCart(){
            const raw = localStorage.getItem(STORAGE_KEY);
            return raw ? JSON.parse(raw) : [];
        }
        function writeCart(cart){
            localStorage.setItem(STORAGE_KEY, JSON.stringify(cart));
            updateCartCount();
        }
        function updateCartCount(){
            const cart = readCart();
            const totalQty = cart.reduce((s,i)=> s + (i.qty||0), 0);
            document.getElementById('cartCount').textContent = totalQty;
        }

        // Thumbnail swap
        document.querySelectorAll('#thumbs img').forEach(function(t){
            t.addEventListener('click', function(){
                var full = this.getAttribute('data-full') || this.src;
                document.querySelector('#mainImage img').src = full;
            });
        });

        // Product add to cart
        document.getElementById('addToCartForm').addEventListener('submit', function(e){
            e.preventDefault();
            const size = document.getElementById('size').value;
            const qty = parseInt(document.getElementById('qty').value,10) || 1;
            if(!size){ 
                showToast('Please select a size.'); 
                return; 
            }

            // product data (hardcoded)
            const product = {
                id: 'the-dominica-crochet-shirt-tierra',
                title: 'The Dominica Crochet Shirt — Tierra',
                price: parseFloat(document.querySelector('.current').getAttribute('data-price')), // 149.00
                qty: qty,
                size: size,
                image: document.querySelector('#mainImage img').src
            };

            // read / merge into cart
            const cart = readCart();
            const existingIndex = cart.findIndex(i => i.id === product.id && i.size === product.size);
            if(existingIndex > -1){
                cart[existingIndex].qty = cart[existingIndex].qty + product.qty;
            } else {
                cart.push(product);
            }
            writeCart(cart);

            // show toast
            showToast('Added to cart: ' + product.title + ' (' + product.size + ') x' + product.qty);
        });

        // Checkout button (go to checkout.php)
        document.getElementById('goCheckout').addEventListener('click', function(){
            window.location.href = 'checkout.php'; 
        });

        function showToast(text){
            const t = document.getElementById('toast');
            t.textContent = text;
            t.classList.add('show');
            setTimeout(()=> t.classList.remove('show'), 2200);
        }

        updateCartCount();
    </script>
</body>
</html>