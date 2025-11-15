<?php
// Check if user is logged in
$isLoggedIn = isset($_SESSION["user_id"]);
// New variable to safely hold and display the username/first name
$displayName = $isLoggedIn && isset($_SESSION["name"]) ? htmlspecialchars($_SESSION["name"]) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' : ''; ?>MAISON MUGLER</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../components/component.css">
    <link rel="stylesheet" href="<?php echo isset($cssFile) ? $cssFile : '../homepage/homepage.css'; ?>">
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
</head>
<body>
    <div class="promo-bar">
        <span class="icon">←</span> Free shipping on all over the Philippines <span class="icon">→</span>
    </div>

    <header class="header-main">
        <div class="container header-content">
            <nav class="nav-left">
                <a href="/search" class="icon-anchor search-icon">
                    <img src="../icons/search.png" alt="Search">
                </a>
            </nav>
            
            <a href="../homepage/homepage.php" class="logo-link">
                <div class="logo">MAISON MUGLER</div>
            </a>
            
            <div class="nav-right utility-icons">
                <?php if ($isLoggedIn): ?>
                    <a href="../profile/profile.php" class="username-display"><?php echo $displayName; ?></a>
                    <a href="../profile/profile.php" class="icon-anchor">
                        <img src="../icons/profile.png" alt="Profile">
                    </a>
                <?php else: ?>
                    <a href="../signup/signup.php" class="signup-btn">Sign Up</a>
                <?php endif; ?>
                <a href="/cart" class="icon-anchor">
                    <img src="../icons/cart.png" alt="Cart">
                </a>
            </div>
        </div>
        
        <nav class="nav-links container" style="text-align:center; padding-top: 15px;">
            <a href="../him_collection/him_collection.php">Him</a>
            <a href="../her_collection/her_collection.php">Her</a>
            <a href="../newarrivals/newarrivals.php">New Arrivals</a>
            <a href="../about_us/about_us.php">About Us</a>
            <a href="../concierge/concierge.php">Concierge</a>
        </nav>
    </header>