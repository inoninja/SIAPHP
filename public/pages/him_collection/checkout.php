<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Checkout — MAISON MUGLER</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    :root{
      --primary:'Playfair Display', serif;
      --secondary:'Poppins', sans-serif;
      --brand-dark:#1e1e1e;
      --brand-accent:#8b0000;
      --muted:#666;
      --bg:#f7f7f7;
      --card-bg:#fff;
      --border-color:#ddd;
    }
    *{box-sizing:border-box;margin:0;padding:0}
    body{font-family:var(--secondary);background:var(--bg);color:var(--brand-dark);line-height:1.4}
    a{text-decoration:none;color:inherit}
    .container{max-width:1200px;margin:0 auto;padding:20px}

    /* Header */
    .promo{background:var(--brand-accent);color:#fff;text-align:center;padding:6px 0;font-size:0.85rem}
    header{background:#fff;border-bottom:1px solid #eee;position:sticky;top:0;z-index:90}
    .header-inner{display:flex;align-items:center;justify-content:space-between;padding:14px 20px}
    .logo{font-family:var(--primary);font-size:2.2rem;text-align:center;margin:0 auto}

    /* Checkout Layout */
    .checkout-layout{display:grid;grid-template-columns:3fr 2fr;gap:40px;margin-top:20px}
    
    /* Form Section */
    .checkout-form-section h1{font-family:var(--primary);font-size:2.5rem;margin-bottom:20px}
    .form-group{margin-bottom:15px}
    label{display:block;font-weight:600;margin-bottom:5px;font-size:.9rem}
    input[type="text"],input[type="email"],input[type="tel"],select{
      width:100%;padding:12px;border:1px solid var(--border-color);border-radius:3px;font-size:1rem;
    }
    .form-row{display:flex;gap:15px}
    .form-row > div{flex:1}

    .section-title{font-size:1.2rem;font-weight:600;margin-bottom:15px;padding-top:20px;border-top:1px solid #eee}
    .section-title:first-child{border-top:none;padding-top:0}

    /* Shipping Options */
    .shipping-option{
      display:flex;justify-content:space-between;align-items:center;padding:15px;border:1px solid var(--border-color);
      margin-bottom:10px;cursor:pointer;background:var(--card-bg);border-radius:3px;
    }
    .shipping-option.selected{border-color:var(--brand-accent);background:#fff0f0}
    .shipping-option input[type="radio"]{margin-right:10px}
    .shipping-option .price{font-weight:700}

    /* Payment Button */
    .complete-order-btn{
      background:var(--brand-dark);color:#fff;border:none;padding:15px 20px;font-size:1.1rem;
      font-weight:600;cursor:pointer;width:100%;margin-top:20px;border-radius:3px;
    }
    .complete-order-btn:hover{background:var(--brand-accent)}
    
    /* Order Summary */
    .order-summary{background:var(--card-bg);padding:20px;border-radius:4px}
    .order-summary h2{font-size:1.5rem;margin-bottom:20px}
    
    .cart-item{display:flex;margin-bottom:15px;border-bottom:1px solid #f4f4f4;padding-bottom:15px}
    .cart-item:last-child{border-bottom:none}
    .item-img{width:60px;height:80px;overflow:hidden;margin-right:15px;border:1px solid #eee}
    .item-img img{width:100%;height:100%;object-fit:cover}
    .item-details{flex-grow:1}
    .item-details h4{font-size:1rem;font-weight:400;margin-bottom:5px}
    .item-details p{font-size:.85rem;color:var(--muted)}
    .item-price{font-weight:700;font-size:1rem}

    .summary-line{display:flex;justify-content:space-between;margin-bottom:8px;font-size:.95rem}
    .summary-line.total{font-size:1.2rem;font-weight:700;padding-top:10px;margin-top:10px;border-top:2px solid var(--brand-dark)}
    .summary-line.shipping .value{color:var(--brand-accent)}

    @media(max-width:900px){
      .checkout-layout{grid-template-columns:1fr;gap:20px}
      .order-summary{order:-1;margin-bottom:20px}
    }

    /* Footer (copied from product page) */
    .footer-bar{background:var(--brand-dark);color:#fff;padding:12px 20px;text-align:center}
    
  </style>
</head>
<body>

  <div class="promo">
    <span class="icon">←</span> Free shipping on all over the Philippines <span class="icon">→</span>
  </div>

  <header>
    <div class="container header-inner">
      <div class="logo"><a href="index.html" style="color:inherit">MAISON MUGLER</a></div>
    </div>
  </header>

  <main class="container">
    <div class="checkout-layout">

            <section class="checkout-form-section">
        <h1>Checkout</h1>

        <form id="checkoutForm">
                    <h2 class="section-title">Contact Information</h2>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required placeholder="Enter your email">
            <p style="font-size:0.8em; color:var(--muted); margin-top:5px;">This page will use client-side logic (JavaScript) for simulation only.</p>
          </div>

                    <h2 class="section-title">Shipping Address</h2>
          <div class="form-group">
            <label for="country">Country/Region</label>
            <select id="country" name="country" required>
              <option value="PH">Philippines</option>
              <option value="US">United States</option>
            </select>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="first_name">First Name</label>
              <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
              <label for="last_name">Last Name</label>
              <input type="text" id="last_name" name="last_name" required>
            </div>
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="city">City</label>
              <input type="text" id="city" name="city" required>
            </div>
            <div class="form-group">
              <label for="zip">Postal Code</label>
              <input type="text" id="zip" name="zip" required>
            </div>
          </div>

                    <h2 class="section-title">Shipping Method</h2>
          <div class="shipping-option selected">
            <label>
              <input type="radio" name="shipping" value="free" checked>
              Free Shipping (Philippines)
            </label>
            <span class="price" data-cost="0.00">FREE</span>
          </div>
          <div class="shipping-option">
            <label>
              <input type="radio" name="shipping" value="express">
              Express Shipping (Worldwide)
            </label>
            <span class="price" data-cost="25.00">$25.00</span>
          </div>

                    <h2 class="section-title">Payment Method</h2>
          <p style="margin-bottom:20px; color:var(--muted)">Simulated payment processing. Your order will be confirmed.</p>
          
          <button type="submit" class="complete-order-btn">Complete Order ($0.00)</button>
          <p style="text-align:center; margin-top:10px; font-size:.8rem; color:#888;">By clicking "Complete Order", you agree to our terms.</p>
        </form>
      </section>

            <aside class="order-summary">
        <h2>Order Summary</h2>
        <div id="cartItems">
                  </div>

        <div style="margin-top:20px;">
          <div class="summary-line">
            <span>Subtotal</span>
            <span id="subtotalValue">$0.00</span>
          </div>
          <div class="summary-line shipping">
            <span>Shipping</span>
            <span id="shippingValue" class="value">FREE</span>
          </div>
          <div class="summary-line">
            <span>Tax (Simulated)</span>
            <span id="taxValue">$0.00</span>
          </div>
          <div class="summary-line total">
            <span>Total</span>
            <span id="totalValue">$0.00</span>
          </div>
        </div>
      </aside>
    </div>
  </main>

  <div class="footer-bar">© 2025 MAISON MUGLER.</div>

  <script>
    const STORAGE_KEY = 'ddm_cart_v1';
    
    function readCart(){
      const raw = localStorage.getItem(STORAGE_KEY);
      return raw ? JSON.parse(raw) : [];
    }
    
    function formatCurrency(amount){
      return '$' + amount.toFixed(2);
    }

    function renderSummary(){
      const cart = readCart();
      const itemsContainer = document.getElementById('cartItems');
      itemsContainer.innerHTML = '';
      let subtotal = 0;

      if (cart.length === 0) {
        itemsContainer.innerHTML = '<p style="color:var(--brand-accent); font-weight:600;">Your cart is empty.</p>';
        document.getElementById('checkoutForm').style.display = 'none';
        return;
      }

      cart.forEach(item => {
        const itemTotal = item.price * item.qty;
        subtotal += itemTotal;

        const itemHtml = `
          <div class="cart-item">
            <div class="item-img"><img src="${item.image}" alt="${item.title}"></div>
            <div class="item-details">
              <h4>${item.title}</h4>
              <p>Size: ${item.size} &middot; Qty: ${item.qty}</p>
            </div>
            <span class="item-price">${formatCurrency(itemTotal)}</span>
          </div>
        `;
        itemsContainer.innerHTML += itemHtml;
      });
      
      // Calculate totals
      const shippingCost = 
        document.querySelector('input[name="shipping"]:checked').closest('.shipping-option').querySelector('.price').getAttribute('data-cost');
      const shipping = parseFloat(shippingCost);
      const taxRate = 0.05; // 5% simulated tax
      const tax = (subtotal + shipping) * taxRate;
      const total = subtotal + shipping + tax;

      // Update summary display
      document.getElementById('subtotalValue').textContent = formatCurrency(subtotal);
      document.getElementById('shippingValue').textContent = shipping === 0 ? 'FREE' : formatCurrency(shipping);
      document.getElementById('taxValue').textContent = formatCurrency(tax);
      document.getElementById('totalValue').textContent = formatCurrency(total);
      document.querySelector('.complete-order-btn').textContent = `Complete Order (${formatCurrency(total)})`;
    }

    // Shipping option selection handler
    document.querySelectorAll('.shipping-option').forEach(option => {
      option.addEventListener('click', function() {
        document.querySelectorAll('.shipping-option').forEach(el => el.classList.remove('selected'));
        this.classList.add('selected');
        this.querySelector('input[type="radio"]').checked = true;
        renderSummary(); // Re-render summary on shipping change
      });
    });

    // Form submission simulation
    document.getElementById('checkoutForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const cart = readCart();
      if (cart.length === 0) {
        alert('Your cart is empty. Please add items before completing the order.');
        return;
      }
      
      // Clear cart and redirect to a simulated thank you page
      localStorage.removeItem(STORAGE_KEY);
      alert('Order Completed Successfully! Cart has been cleared. (Simulation complete)');
      window.location.href = 'him_collection.php'; // Redirect back to the collection page
    });

    document.addEventListener('DOMContentLoaded', renderSummary);
  </script>
</body>
</html>