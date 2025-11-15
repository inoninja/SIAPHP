<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>The Dominica Crochet Shirt — Tierra | MAISON MUGLER</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    :root{
      --primary:'Playfair Display',serif;
      --secondary:'Poppins',sans-serif;
      --brand-dark:#1e1e1e;
      --brand-accent:#8b0000;
      --bg:#ffffff;
      --muted:#666;
      --accent:#8b0000;
    }
    *{box-sizing:border-box;margin:0;padding:0}
    body{font-family:var(--secondary);color:var(--brand-dark);background:#f7f7f7;line-height:1.5}
    a{text-decoration:none;color:inherit}
    .container{max-width:1200px;margin:0 auto;padding:0 20px}

    /* header/nav */
    .promo{background:var(--brand-accent);color:#fff;text-align:center;padding:6px 0;font-size:0.9rem}
    header{background:#fff;border-bottom:1px solid #eee;position:sticky;top:0;z-index:90}
    .header-inner{display:flex;align-items:center;justify-content:space-between;padding:14px 0}
    .logo{font-family:var(--primary);font-size:2.2rem;flex:2;text-align:center}
    .nav-left,.nav-right{flex:1;display:flex;align-items:center}
    .nav-links{display:flex;justify-content:center;padding:12px 0;gap:18px}
    .nav-links a{font-size:.9rem;text-transform:uppercase}
    .nav-links a.active{font-weight:600}
    .cart-count{background:#222;color:#fff;border-radius:50%;width:22px;height:22px;display:inline-flex;align-items:center;justify-content:center;font-size:0.8rem;margin-left:6px}

    /* product layout */
    .product-hero{background:#fff;padding:40px 0}
    .product-wrap{display:grid;grid-template-columns:1fr 460px;gap:40px;padding:30px 0}
    .gallery{background:#fff}
    .main-image{width:100%;height:640px;overflow:hidden;border:1px solid #eee}
    .main-image img{width:100%;height:100%;object-fit:cover;display:block}
    .thumbs{display:flex;gap:10px;margin-top:12px}
    .thumbs img{width:80px;height:80px;object-fit:cover;border:1px solid #eee;cursor:pointer}

    .product-info{background:#fff;padding:24px;border:1px solid #eee}
    .product-title{font-family:var(--primary);font-size:1.6rem;margin-bottom:8px}
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

    /* small toast */
    .toast{position:fixed;right:20px;bottom:20px;background:#222;color:#fff;padding:12px 16px;border-radius:4px;opacity:0;transform:translateY(8px);transition:all .28s;z-index:999}
    .toast.show{opacity:1;transform:translateY(0)}

    /* footer */
    .feature-row{display:flex;justify-content:space-around;padding:36px 0;background:#fff;border-top:1px solid #eee}
    .feature-item{text-align:center;width:30%}
    .footer{background:#fff;padding:56px 0;border-top:1px solid #eee}
    .footer-grid{display:grid;grid-template-columns:1fr 1fr 1fr;gap:28px}
    .footer-bar{background:var(--brand-dark);color:#fff;padding:12px 20px}
    @media(max-width:900px){
      .product-wrap{grid-template-columns:1fr}
      .main-image{height:420px}
      .thumbs img{width:64px;height:64px}
    }
  </style>
</head>
<body>

  <header>
    <div class="container header-inner">
      <div class="nav-left"><a href="/search">🔍</a></div>
      <div class="logo"><a href="index.html" style="color:inherit">MAISON MUGLER</a></div>
      <div class="nav-right" style="justify-content:flex-end">
        <a href="login.php" style="margin-right:14px">👤</a>
        <a href="cart.php" id="cartLink">👜 <span id="cartCount" class="cart-count">0</span></a>
      </div>
    </div>
    <nav class="nav-links container">
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

  <footer class="footer">
    <div class="container footer-grid">
      <div>
        <div style="font-size:2.2rem;margin-bottom:12px">👤</div>
        <h3 style="font-family:var(--primary);margin-bottom:10px">JOIN THE LEISURE LETTER</h3>
        <div style="display:flex;gap:8px"><input style="padding:8px;border:1px solid #eee;flex:1" placeholder="Email address"><button style="padding:8px 12px;background:var(--brand-dark);color:#fff;border:none">Subscribe</button></div>
      </div>
      <div class="footer-links">
        <h4 style="text-transform:uppercase">Shop</h4>
        <a href="him_collection.php">Him</a><br>
        <a href="her_collection.php">Her</a><br>
        <a href="new_arrivals.php">New Arrivals</a>
      </div>
      <div class="footer-links">
        <h4 style="text-transform:uppercase">Information</h4>
        <a href="#">Shipping Policy</a><br>
        <a href="#">Return Policy</a>
      </div>
    </div>
  </footer>

  <div class="footer-bar">© 2025 MAISON MUGLER.</div>

  <div id="toast" class="toast">Added to cart</div>

  <script>
    /***********************
     * Utility: Cart in localStorage
     * Structure: cart = [{id, title, price, qty, size, image}]
     ***********************/
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
      if(!size){ alert('Please select a size.'); return; }

      // product data (could be rendered server-side)
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
      showToast('Added to cart — ' + product.title + ' (' + product.size + ') x' + product.qty);
    });

    // Checkout button (go to our simple checkout page)
    document.getElementById('goCheckout').addEventListener('click', function(){
      // open local checkout page
      window.location.href = 'checkout.php'; // Updated to .php
    });

    function showToast(text){
      const t = document.getElementById('toast');
      t.textContent = text;
      t.classList.add('show');
      setTimeout(()=> t.classList.remove('show'), 2200);
    }

    // initialize cart badge
    updateCartCount();
  </script>
</body>
</html>