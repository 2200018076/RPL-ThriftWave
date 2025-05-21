<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThriftWave - Shop</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-left">
            <img src="Icons/logo.png" alt="ThriftWave Logo">
        </div>
        <div class="navbar-links">
            <a href="#">Shop</a>
            <a href="#">On Sale</a>
            <a href="#">New Arrivals</a>
            <a href="#">Brands</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search for products...">
            <i class="fas fa-search"></i> <!-- Ikon kaca pembesar -->
        </div>
        <div class="navbar-right">
            <img src="Icons/cart.png" alt="Cart">
            <img src="Icons/profile.png" alt="Account">
        </div>
    </div>

    <!-- Hero Banner -->
    <div class="hero-banner">
        <div>
            <h1>Welcome to ThriftWave</h1>
            <p>Find the best deals on second-hand treasures</p>
        </div>
    </div>

    <!-- Popular Carousel -->
    <div class="popular-carousel">
        <h2>POPULAR THIS WEEK</h2>
        <div class="carousel-container">
            <button class="carousel-btn left-btn">&#8592;</button>
            <div class="carousel">
                <div class="carousel-item">
                    <img src="Produk/baju1.jpeg" alt="Carhartt">
                    <div class="item-label">CARHARTT</div>
                </div>
                <div class="carousel-item">
                    <img src="Produk/baju1.jpeg" alt="Cargos">
                    <div class="item-label">CARGOS</div>
                </div>
                <div class="carousel-item">
                    <img src="Produk/baju1.jpeg" alt="Nike">
                    <div class="item-label">NIKE</div>
                </div>
            </div>
            <button class="carousel-btn right-btn">&#8594;</button>
        </div>
    </div>

    <!-- Popular Brands -->
    <div class="brands-section">
        <h2>Top Brands</h2>
        <div class="brands">
            <div class="brand"><img src="Icons/logobrand.png" alt="Brand 1"></div>
            <div class="brand"><img src="Icons/logobrand.png" alt="Brand 2"></div>
            <div class="brand"><img src="Icons/logobrand.png" alt="Brand 3"></div>
            <div class="brand"><img src="Icons/logobrand.png" alt="Brand 4"></div>
        </div>
    </div>

    <!-- Men and Women Categories -->
    <div class="section-title">
        <h2>For Men & Women</h2>
    </div>
    <div class="men-women-products">
        <!-- Men Products -->
        <div class="product-category">
            <div class="category-image">
                <img src="Icons/men.jpg" alt="Men's Collection">
                <div class="overlay">
                    <h3>MEN'S</h3>
                    <a href="#" class="shop-now">SHOP NOW</a>
                </div>
            </div>
        </div>
        <!-- Women Products -->
        <div class="product-category">
            <div class="category-image">
                <img src="Icons/women.jpg" alt="Women's Collection">
                <div class="overlay">
                    <h3>WOMEN'S</h3>
                    <a href="#" class="shop-now">SHOP NOW</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <h3>Our Happy Customers</h3>
        <div class="customer-reviews">
            <div class="review">
                <div class="review-content">
                    <div class="review-rating">
                        <span>★★★★★</span>
                    </div>
                    <p class="customer-name">Sarah M.</p>
                    <p>"I'm blown away by the quality and style of the clothes I received from Shop.co. From casual wear
                        to elegant dresses, every piece I've bought has exceeded my expectations."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-content">
                    <div class="review-rating">
                        <span>★★★★★</span>
                    </div>
                    <p class="customer-name">Alex K.</p>
                    <p>"Finding clothes that align with my personal style used to be a challenge until I discovered
                        Shop.co. The range of options they offer is truly remarkable, catering to a variety of tastes
                        and occasions."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-content">
                    <div class="review-rating">
                        <span>★★★★★</span>
                    </div>
                    <p class="customer-name">James L.</p>
                    <p>"As someone who's always on the lookout for unique fashion pieces, I'm thrilled to have stumbled
                        upon Shop.co. The selection of clothes is not only diverse but also on-point with the latest
                        trends."</p>
                </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="newsletter">
            <p>Stay Up To Date About Our Latest Offers</p>
            <div class="newsletter-form">
                <input type="email" placeholder="Enter your email address">
                <button>Subscribe to Newsletter</button>
            </div>
        </div>

        <!-- Footer Links -->
        <div class="footer-links">
            <div>
                <h4>GUUDKAS.CO</h4>
                <p>We have clothes that suit your style and which you're proud to wear. From women to men.</p>
            </div>
            <div>
                <h4>Company</h4>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Works</a></li>
                    <li><a href="#">Career</a></li>
                </ul>
            </div>
            <div>
                <h4>Help</h4>
                <ul>
                    <li><a href="#">Customer Support</a></li>
                    <li><a href="#">Delivery Details</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div>
                <h4>Resources</h4>
                <ul>
                    <li><a href="#">Free eBooks</a></li>
                    <li><a href="#">Development Tutorial</a></li>
                    <li><a href="#">How to - Blog</a></li>
                    <li><a href="#">Youtube Playlist</a></li>
                </ul>
            </div>
        </div>

        <!-- Social Media Icons -->
        <div class="social-icons">
            <img src="facebook-icon.png" alt="Facebook">
            <img src="twitter-icon.png" alt="Twitter">
            <img src="instagram-icon.png" alt="Instagram">
        </div>

        <div style="margin-top: 20px;">
            <p>&copy; 2025 GUUDKAS.CO. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
