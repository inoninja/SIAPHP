<?php $page_title = "Secure Checkout | MAISON MUGLER"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title><?php echo $page_title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* All CSS from the original request, plus checkout-specific styles */
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
        .utility-icons { display: flex; justify-content: flex-end; align-items: center; }
        .utility-icons a { margin-left: 20px; display: inline-flex; align-items: center; justify-content: center; }
        .cart-count { background: #222; color: #fff; border-radius: 50%; width: 22px; height: 22px; display: inline-flex; align-items: center; justify-content: center; font-size: 0.8rem; margin-left: 6px }
        .icon-anchor img { width: 22px; height: 22px; filter: brightness(0); }

        /* Checkout Styles */
        .checkout-layout {
            display: grid;
            grid-template-columns: 2fr 1fr; /* Form on left, Summary on right */
            gap: 60px;
            padding: 50px 0;
            background-color: white;
            min-height: 80vh;
        }
        .checkout-form-section {
            padding-right: 40px;
            border-right: 1px solid #eee;
        }
        .checkout-form-section h1 {
            font-family: var(--primary-font);
            font-size: 2.5em;
            margin-bottom: 30px;
        }
        .order-summary {
            background-color: var(--subtle-gray);
            padding: 20px;
            border-radius: 4px;
            height: fit-content;
        }
        .order-summary h2 {
            font-family: var(--secondary-font);
            font-size: 1.5em;
            font-weight: 600;
            margin-bottom: 25px;
        }
        .order-item {
            display: flex;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px dashed #ddd;
        }
        .item-img { width: 60px; height: 80px; overflow: hidden; margin-right: 15px; }
        .item-img img { width: 100%; height: 100%; object-fit: cover; }
        .item-details { flex-grow: 1; }
        .item-details p { margin: 0; font-size: 0.9em; }
        .item-details .price { font-weight: 700; color: var(--brand-dark); }
        .summary-line { display: flex; justify-content: space-between; font-size: 0.95em; margin-bottom: 8px; }
        .summary-total { font-size: 1.2em; font-weight: 700; padding-top: 15px; border-top: 1px solid #ccc; margin-top: 15px; }
        .form-group { margin-bottom: 20px; }
        .form-group input, .form-group select {
            width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; font-size: 1em; box-sizing: border-box;
        }
        .complete-order-btn {
            width: 100%; background-color: var(--brand-accent); color: white; border: none; padding: 15px; font-size: 1.1em; font-weight: 600; cursor: pointer; margin-top: 30px; transition: background-color 0.2s;
        }
        .complete-order-btn:hover { background-color: #a00000; }

        /* Footer Styles (Mini version on checkout) */
        .footer-bar { background: var(--brand-dark); color: white; text-align: left; padding: 15px 20px; font-size: 0.75em; margin-top: auto;}

        @media (max-width: 900px) {
            .checkout-layout { grid-template-columns: 1fr; gap: 30px; }
            .checkout-form-section { border-right: none; padding-right: 0; }
            .order-summary { order: -1; }
        }
    </style>
</head>
<body style="display: flex; flex-direction: column; min-height: 100vh;">

    <div class="promo-bar">
        <span class="icon">←</span> Free shipping on all over the Philippines <span class="icon">→</span>
    </div>

    <header class="header-main">
        <div class="container header-content">
            <nav class="nav-left">
                <a href="/search" class="icon-anchor search-icon" aria-label="Search">
                    <span class="icon">🔍</span>
                </a>
            </nav>
            <a href="him_collection.php" class="logo">MAISON MUGLER</a>
            <div class="nav-right utility-icons">
                <a href="login.php" class="icon-anchor" aria-label="Profile">
                    <span class="icon">👤</span>
                </a>
                <a href="checkout.php" id="cartLink" class="icon-anchor" aria-label="Cart">
                    <span class="icon">👜</span> <span id="cartCount" class="cart-count">0</span>
                </a>
            </div>
        </div>
        <nav class="nav-links container" style="text-align:center; padding-top: 15px;">
            <a href="him_collection.php">Him</a>
            <a href="her_collection.php">Her</a>
            <a href="new_arrivals.php">New Arrivals</a>
            <a href="about_us.php">About Us</a>
            <a href="concierge.php">Concierge</a>
        </nav>
    </header>

    <main class="container">
        <div class="checkout-layout">

            <section class="checkout-form-section">
                <h1>Checkout</h1>
                <form id="checkoutForm">
                    
                    <h2>Contact Information</h2>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required value="guest@example.com">
                    </div>
                    
                    <h2>Shipping Address</h2>
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required value="John Doe">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" required value="123 Leisure Blvd">
                    </div>
                    <div class="form-group" style="display:flex; gap: 20px;">
                        <div style="flex:1;">
                            <label for="city">City</label>
                            <input type="text" id="city" name="city" required value="Miami">
                        </div>
                        <div style="flex:1;">
                            <label for="zip">Zip/Postal Code</label>
                            <input type="text" id="zip" name="zip" required value="33139">
                        </div>
                    </div>

                    <h2>Payment (Simulation)</h2>
                    <p style="margin-bottom: 20px; font-size: 0.9em; color: #8b0000; font-weight: 600;">Payment processing is simulated. No actual transaction will occur.</p>
                    <div class="form-group">
                        <label for="card">Card Number</label>
                        <input type="text" id="card" name="card" placeholder="XXXX XXXX XXXX XXXX" required value="1234 5678 9012 3456">
                    </div>

                    <button type="submit" class="complete-order-btn" id="completeOrderButton">Complete Order ($0.00)</button>
                </form>
            </section>

            <aside class="order-summary">
                <h2>Order Summary</h2>
                <div id="cartItems">
                    </div>

                <div style="margin-top: 25px;">
                    <div class="summary-line"><span>Subtotal:</span> <span id="subtotalAmount">$0.00</span></div>
                    <div class="summary-line"><span>Shipping:</span> <span id="shippingCost">FREE</span></div>
                    <div class="summary-line summary-total"><span>Total:</span> <span id="totalAmount">$0.00</span></div>
                </div>
            </aside>
        </div>
    </main>

    <div class="footer-bar">
      <div class="container">
        © 2025 MAISON MUGLER.
      </div>
    </div>

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

        function formatCurrency(amount) {
            return '$' + amount.toFixed(2);
        }

        function calculateSummary(cart) {
            const subtotal = cart.reduce((sum, item) => sum + (item.price * item.qty), 0);
            const shipping = 0; 
            const total = subtotal + shipping;
            return { subtotal, shipping, total };
        }

        function renderSummary() {
            const cart = readCart();
            const itemsContainer = document.getElementById('cartItems');
            const summary = calculateSummary(cart);

            itemsContainer.innerHTML = '';
            if (cart.length === 0) {
                itemsContainer.innerHTML = '<p style="text-align: center; color: #888;">Your cart is empty.</p>';
                document.getElementById('completeOrderButton').disabled = true;
            } else {
                cart.forEach(item => {
                    const itemHtml = `
                        <div class="order-item">
                            <div class="item-img"><img src="${item.image}" alt="${item.title}"></div>
                            <div class="item-details">
                                <p><strong>${item.title}</strong></p>
                                <p>Size: ${item.size}</p>
                                <p>Qty: ${item.qty}</p>
                                <p class="price">${formatCurrency(item.price * item.qty)}</p>
                            </div>
                        </div>
                    `;
                    itemsContainer.insertAdjacentHTML('beforeend', itemHtml);
                });
                document.getElementById('completeOrderButton').disabled = false;
            }

            document.getElementById('subtotalAmount').textContent = formatCurrency(summary.subtotal);
            document.getElementById('totalAmount').textContent = formatCurrency(summary.total);
            document.getElementById('completeOrderButton').textContent = `Complete Order (${formatCurrency(summary.total)})`;
        }

        // Form submission (SIMULATION)
        document.getElementById('checkoutForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (readCart().length === 0) {
                alert('Your cart is empty. Please add items before completing the order.');
                return;
            }
            
            // Final action: Simulate order completion and clear cart
            localStorage.removeItem(STORAGE_KEY);
            
            alert('Order Successfully Placed!\n\n(This was a hardcoded simulation. Cart has been cleared.)');
            
            // Redirect back to the collection page
            window.location.href = 'him_collection.php'; 
        });

        document.addEventListener('DOMContentLoaded', () => {
            updateCartCount();
            renderSummary();
        });

    </script>
</body>
</html>