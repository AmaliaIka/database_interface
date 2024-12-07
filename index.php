<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Target E-Commerce</title>
    <!--Linking Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">
    <link rel="stylesheet" href="style_index.css">
</head>
<body>
    <!-- Header / Navbar -->
    <header>
        <nav class="navbar section-content">
            <a href="#" class="nav-logo">
                <h2 class="logo-text">🎯Target</h2>
            </a>
            <ul class="nav-menu">
                <button id="menu-close-button" class="fas fa-times"></button>

                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#beranda" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="#account" class="nav-link">Account</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>

            <button id="menu-open-button" class="fas fa-bars"></button>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="section-content">
                <div class="hero-details">
                    <h2 class="title">Aplikasi E-Commerce Target</h2>
                    <h3 class="subtitle">Oleh Kelompok 1</h3>
                    <p class="description">Welcome to Our Website for Database Project</p>
                    
                    <div class="buttons">
                        <a href="#" class="button search">Search</a>
                        <a href="#" class="button contact-us">Contact Us</a>
                    </div>
                </div>
                <!-- Hero Image -->
                <div class="hero-image-wrapper">
                    <img src="picture/shopping.jpg" alt="Hero" class="hero-image">
                </div>
            </div>
        </section>

        <!-- Beranda Section -->
         <section class="Beranda" id="beranda">
            <h2 class="section-title">Beranda</h2>
            <div class="section-content">
                <ul class="category">
                    <li class="category-item">
                        <img src="picture/perfumery.png" alt="Perfumery" class="category-image">
                        <div class="category-details">
                            <h3 class="name">Perfumery</h3>
                            <p class="text">blablabla</p>
                        </div>
                    </li>
                    <li class="category-item">
                        <img src="picture/art.png" alt="Art" class="category-image">
                        <div class="category-details">
                            <h3 class="name">Art</h3>
                            <p class="text">blablabla</p>
                        </div>
                    </li>
                    <li class="category-item">
                        <img src="picture/sport-leisure.png" alt="Sport Leisure" class="category-image">
                        <div class="category-details">
                            <h3 class="name">Sport Leisure</h3>
                            <p class="text">blablabla</p>
                        </div>
                    </li>
                    <li class="category-item">
                        <img src="picture/babies.png" alt="Babies" class="category-image">
                        <div class="category-details">
                            <h3 class="name">Babies</h3>
                            <p class="text">blablabla</p>
                        </div>
                    </li>
                    <li class="category-item">
                        <img src="picture/housewears.png" alt="Housewears" class="category-image">
                        <div class="category-details">
                            <h3 class="name">Housewears</h3>
                            <p class="text">blablabla</p>
                        </div>
                    </li>
                    <li class="category-item">
                        <img src="picture/musical-inst.png" alt="Musical Instrument" class="category-image">
                        <div class="category-details">
                            <h3 class="name">Musical Instrument</h3>
                            <p class="text">blablabla</p>
                        </div>
                    </li>
                    <li class="category-item">
                        <img src="picture/cool-stuff.png" alt="Cool Stuff" class="category-image">
                        <div class="category-details">
                            <h3 class="name">Cool Stuff</h3>
                            <p class="text">blablabla</p>
                        </div>
                    </li>
                    <li class="category-item">
                        <img src="picture/furniture-decor.png" alt="Furniture Decoration" class="category-image">
                        <div class="category-details">
                            <h3 class="name">Furniture Decoration</h3>
                            <p class="text">blablabla</p>
                        </div>
                    </li>
                    <li class="category-item">
                        <img src="picture/home-appliance.png" alt="Home Appliances" class="category-image">
                        <div class="category-details">
                            <h3 class="name">Home Appliances</h3>
                            <p class="text">blablabla</p>
                        </div>
                    </li>
                </ul>
            </div>
         </section>

        <!-- Contact Section -->
          <section class="contact-section" id="contact">
            <h2 class="section-title">Contact Us</h2>
            <div class="section-content">
                <ul class="contact-info-list">
                    <li class="contact-info">
                        <i class="fa-solid fa-location-crosshairs"></i>
                        <p>Minneapolis, 1000 Nicollet Mall, United States<p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-regular fa-envelope"></i>
                        <p>info@targete-commercewebsite.com<p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-solid fa-phone"></i>
                        <p>08000000000<p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-regular fa-clock"></i>
                        <p>Monday - Friday: 8:00 AM - 5.00 PM<p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-regular fa-clock"></i>
                        <p>Saturday: 10:00 AM - 3.00 PM<p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-regular fa-clock"></i>
                        <p>Sunday: Closed<p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-solid fa-globe"></i>
                        <p>www.targete-commerce.com<p>
                    </li>
                </ul>

                <form action="#" class="contact-form">
                    <input type="text" placeholder="Your Name" class="form-input" required>
                    <input type="email" placeholder="Your Email" class="form-input" required>
                    <textarea placeholder="Your messages" class="form-input" required></textarea>
                    <button class="submit-button">Submit</button>
                </form>
            </div>
          </section>

        <!-- Footer Section -->
        <footer class="footer-section">
            <div class="section-content">
                <p class="copyright-text">© 2024 Target E-Commerce</p>

                <div class="social-link-list">
                    <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
                </div>

                <p class="policy-text">
                    <a href="#" class="policy-link">Privacy policy</a>
                    <span class="separator">o</span>
                    <a href="#" class="policy-link">Refund policy</a>
                </p>
            </div>
        <footer>
    </main>

    <script src="script.js"></script>
</body>
</html>
