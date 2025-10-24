<?php
// Set base path for assets
$base_path = '/'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'MAISON MUGLER'; ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo $base_path; ?>components/components.css">
    
    <?php if (isset($page_css)): ?>
        <link rel="stylesheet" href="<?php echo htmlspecialchars($page_css); ?>">
    <?php endif; ?>
</head>
<body>

    <div class="promo-bar">
        <span class="icon">←</span> Free shipping on all over the Philippines <span class="icon">→</span>
    </div>

    <header class="header-main">
        <div class="container header-content">
            <nav class="nav-left">
              <a href="/search" class="icon search-icon">🔍</a>
            </nav>
            <a href="index.html" class="logo">MAISON MUGLER</a>
            <div class="nav-right utility-icons">
                <a href="login.html" class="icon">👤</a>
                <a href="/cart" class="icon">👜</a>
            </div>
        </div>
        <nav class="nav-links container" style="text-align:center; padding-top: 15px;">
            <a href="him_collection.html" class="active">Him</a>
            <a href="her_collection.html">Her</a>
            <a href="/sale">New Arrivals</a>
            <a href="/blog">Institute of Leisure</a>
            <a href="/contact">Concierge</a>
        </nav>
    </header>