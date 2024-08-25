<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content - Karrera</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <div class="navbar">
        <img src="assets/images/logo.png" alt="Cafe Logo">
        <a href="{{ route('homepage') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('content') }}">Content</a>
    </div>

    <!-- Banner Section with Slideshow -->
    <div class="banner">
        <!-- Slideshow -->
        <div class="slide active">
            <img src="assets/images/banner11.jpg" alt="Slide 1">
        </div>
        <div class="slide">
            <img src="assets/images/banner12.jpg" alt="Slide 2">
        </div>
        <div class="slide">
            <img src="assets/images/banner13.Jpg" alt="Slide 3">
        </div>
        <div class="slide">
            <img src="assets/images/banner14.jpg" alt="Slide 4">
        </div>
        <div class="slide">
            <img src="assets/images/banner15.jpg" alt="Slide 5">
        </div>

        <!-- Logo -->
        <div class="logo-container">
            <img src="assets/images/logo.png" alt="Cafe Logo">
        </div>
    </div>

    <!-- Menu Section -->
    <div class="menu-section">
    <h2>Menu</h2>
    <div class="menu-items">
        <!-- Menu Item 1 -->
        <div class="menu-item">
            <img src="assets/images/espresso.jpg" alt="Drink">
            <h3>Espresso</h3>
            <p>Strong and bold espresso shot. <span class="note">(Available hot or cold)</span></p>
            <span>₱100</span>
        </div>

        <!-- Menu Item 2 -->
        <div class="menu-item">
            <img src="assets/images/cappuccino.jpg" alt="Drink">
            <h3>Iced Cappuccino</h3>
            <p>Rich espresso with frothed milk. <span class="note">(Available hot or cold)</span></p>
            <span>₱150</span>
        </div>

        <!-- Menu Item 3 -->
        <div class="menu-item">
            <img src="assets/images/gcs.jpg" alt="Dish">
            <h3>Grilled Chicken Sandwich</h3>
            <p>Juicy grilled chicken with fresh veggies.</p>
            <span>₱250</span>
        </div>

        <!-- Menu Item 4 -->
        <div class="menu-item">
            <img src="assets/images/caesar.jpg" alt="Dish">
            <h3>Caesar Salad</h3>
            <p>Crisp romaine lettuce with Caesar dressing.</p>
            <span>₱200</span>
        </div>

        <!-- Menu Item 5 -->
        <div class="menu-item">
            <img src="assets/images/icedlatte.jpeg" alt="Drink">
            <h3>Iced Latte</h3>
            <p>Smooth espresso with steamed milk and a light foam. <span class="note">(Available hot or cold)</span></p>
            <span>₱120</span>
        </div>

        <!-- Menu Item 6 -->
        <div class="menu-item">
            <img src="assets/images/mocha.jpg" alt="Drink">
            <h3>Mocha</h3>
            <p>Chocolate-flavored coffee with whipped cream. <span class="note">(Available hot or cold)</span></p>
            <span>₱180</span>
        </div>

        <!-- Menu Item 7 -->
        <div class="menu-item">
            <img src="assets/images/bb.jpg" alt="Dish">
            <h3>Beef Burger</h3>
            <p>Juicy beef patty with cheese and special sauce.</p>
            <span>₱280</span>
        </div>

        <!-- Menu Item 8 -->
        <div class="menu-item">
            <img src="assets/images/pc.jpg" alt="Dish">
            <h3>Pasta Carbonara</h3>
            <p>Creamy pasta with pancetta and Parmesan cheese.</p>
            <span>₱220</span>
        </div>

        <!-- Menu Item 9 -->
        <div class="menu-item">
            <img src="assets/images/ic.jpg" alt="Drink">
            <h3>Iced Tea</h3>
            <p>Refreshing cold brewed iced tea with lemon.</p>
            <span>₱80</span>
        </div>

        <!-- Menu Item 10 -->
        <div class="menu-item">
            <img src="assets/images/hc.jpg" alt="Drink">
            <h3>Hot Chocolate</h3>
            <p>Rich and creamy hot chocolate with marshmallows. <span class="note">(Available hot only)</span></p>
            <span>₱130</span>
        </div>

        <!-- Menu Item 11 -->
        <div class="menu-item">
            <img src="assets/images/vw.jpg" alt="Dish">
            <h3>Veggie Wrap</h3>
            <p>Healthy wrap with assorted fresh vegetables.</p>
            <span>₱150</span>
        </div>

        <!-- Menu Item 12 -->
        <div class="menu-item">
            <img src="assets/images/ccw.jpg" alt="Dish">
            <h3>Chicken Caesar Wrap</h3>
            <p>Grilled chicken wrapped with Caesar salad ingredients.</p>
            <span>₱180</span>
        </div>
    </div>
</div>


    <!-- Event Details Section -->
    <div class="event-section">
        <h2>Events</h2>
        <div class="event-content">
            <!-- Event Description -->
            <div class="event-details">
                <h3>Akira Nakai Live Event</h3>
                <p>Join us for an exciting event where Akira Nakai, renowned for his work with RWB Porsche, will be live at Karrera. Witness the magic as he customizes a Porsche right before your eyes. Don't miss this unique opportunity to see a master at work!</p>
            </div>

            <!-- Gallery Slideshow -->
            <div class="event-gallery">
                <div class="slide-gallery active">
                    <img src="assets/images/event1.jpg" alt="Event Image 1">
                </div>
                <div class="slide-gallery">
                    <img src="assets/images/event2.jpg" alt="Event Image 2">
                </div>
                <div class="slide-gallery">
                    <img src="assets/images/event3.jpg" alt="Event Image 3">
                </div>
                <div class="slide-gallery">
                    <img src="assets/images/event4.jpg" alt="Event Image 4">
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Information -->
    <div class="contact-info">
        <h2>Contact Us</h2>
        <p>Address: Bloc 10 Filinvest Alabang, Muntinlupa City, Philippines</p>
        <p>Phone: 0960 589 2885</p>
        <p>Email: drivekarrera@gmail.com</p>
    </div>

    <!-- Social Media Icons -->
    <div class="social-media">
        <a href="https://www.facebook.com/karrerashowroom/" target="_blank" class="social-icon">
            <img src="assets/images/fb.png" alt="Facebook">
        </a>
        <a href="https://www.instagram.com/karrera.showroom/" target="_blank" class="social-icon">
            <img src="assets/images/ig.png" alt="Instagram">
        </a>
        <!-- Add more social icons here if needed -->
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        let slides = document.querySelectorAll('.slide');
        let currentSlide = 0;
        const slideInterval = 5000; // 5 seconds

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                if (i === index) {
                    slide.classList.add('active');
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        showSlide(currentSlide); // Show the first slide
        
        setInterval(nextSlide, slideInterval); // Change slide every 5 seconds

        // Gallery Slideshow JavaScript
        let gallerySlides = document.querySelectorAll('.slide-gallery');
        let currentGallerySlide = 0;
        const gallerySlideInterval = 5000; // 5 seconds

        function showGallerySlide(index) {
            gallerySlides.forEach((slide, i) => {
                slide.classList.remove('active');
                if (i === index) {
                    slide.classList.add('active');
                }
            });
        }

        function nextGallerySlide() {
            currentGallerySlide = (currentGallerySlide + 1) % gallerySlides.length;
            showGallerySlide(currentGallerySlide);
        }

        showGallerySlide(currentGallerySlide); // Show the first slide
        setInterval(nextGallerySlide, gallerySlideInterval); // Change slide every 5 seconds
    });
    </script>
</body>
</html>
