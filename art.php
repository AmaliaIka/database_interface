<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style_product.css">
</head>
<body>
<header>
    <nav class="navbar section-content">
        <a href="index.php" class="nav-logo">
            <div class="logo-container">
                <h2 class="logo-text">🎯Target</h2>
                <div class="hr1"></div>
                <h2 class="logo-text">Art</h2>
            </div>
        </a>
        <ul class="nav-menu">
                <button id="menu-close-button" class="fas fa-times"></button>

                <li class="nav-item">
                    <a href="#" class="nav-link">Search</a>
                </li>
                <li class="nav-item">
                    <a href="#beranda" class="nav-link">Cart</a>
                </li>
                <li class="nav-item">
                    <a href="#account" class="nav-link">Account</a>
                </li>
        </ul>

                <button id="menu-open-button" class="fas fa-bars"></button>
    </nav>
</header>
<main>
    <div class="product-grid">
        <?php
        $products = array(
            array('name' => 'Product Name 1', 'price' => 'Rp 150.000', 'image' => 'picture/14.png'),
            array('name' => 'Product Name 2', 'price' => 'Rp 200.000', 'image' => 'picture/14.png'),
            array('name' => 'Product Name 3', 'price' => 'Rp 250.000', 'image' => 'picture/14.png'),
            array('name' => 'Product Name 4', 'price' => 'Rp 300.000', 'image' => 'picture/14.png'),
            array('name' => 'Product Name 5', 'price' => 'Rp 300.000', 'image' => 'picture/14.png'),
            array('name' => 'Product Name 6', 'price' => 'Rp 300.000', 'image' => 'picture/14.png'),
            array('name' => 'Product Name 7', 'price' => 'Rp 300.000', 'image' => 'picture/14.png'),
            array('name' => 'Product Name 8', 'price' => 'Rp 300.000', 'image' => 'picture/14.png'),
            array('name' => 'Product Name 9', 'price' => 'Rp 300.000', 'image' => 'picture/14.png'),
            array('name' => 'Product Name 10', 'price' => 'Rp 300.000', 'image' => 'picture/14.png'),
        );

        foreach ($products as $product) {
            ?>
            <div class="product-card">
                <div class="product-image">
                    <img src="<?php echo $product['image']; ?>" alt="Product Image">
                </div>
                <h2 class="product-title"><?php echo $product['name']; ?></h2>
                <p class="product-price"><?php echo $product['price']; ?></p>
                <a href="#" class="btn">Add to Cart</a>
            </div>
            <?php
        }
        ?>
    </div>
</main>
</body>
</html>