<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - Karrera</title>
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
            <img src="assets/images/banner.jpg" alt="Slide 1">
        </div>
        <div class="slide">
            <img src="assets/images/banner2.jpg" alt="Slide 2">
        </div>
        <div class="slide">
            <img src="assets/images/banner3.jpg" alt="Slide 3">
        </div>
        <div class="slide">
            <img src="assets/images/banner4.jpg" alt="Slide 4">
        </div>
        <div class="slide">
            <img src="assets/images/banner5.jpg" alt="Slide 5">
        </div>

        <!-- Logo -->
        <div class="logo-container">
            <img src="assets/images/logo.png" alt="Cafe Logo">
        </div>
    </div>

    <!-- Welcome Information -->
    <div class="welcome-section">
        <h2>Welcome to Karrera</h2>
        <p>Experience great coffee and car-themed ambiance here at Karrera, a cozy spot owned by Angie Mead King. Whether you're a car enthusiast or simply looking for a relaxing cafe with a motorsport vibe, we got it.<br></p><br>
        <p>At Karrera, we take pride in our unique events, such as building cars or hosting a watch party with everyone. With a warm and inviting atmosphere, you can enjoy delicious beverages, delightful pastries, and engage in conversations about all things in automotive or motorsport. Come visit us and take a pit stop at one of the best cafe's in town.</p>
    </div>

    <!-- Gallery Highlight -->
    <div class="gallery-highlight">
        <div class="gallery-description">
            <h2>Gallery</h2>
            <p>Explore our gallery to see some of the exciting moments and unique features of Karrera. From our car-themed decor to special events, our gallery highlights what makes our cafe special.</p>
        </div>
        <div class="gallery-slideshow">
            <!-- Slideshow for Gallery -->
            <div class="slide-gallery active">
                <img src="assets/images/gallery1.jpg" alt="Gallery 1">
            </div>
            <div class="slide-gallery">
                <img src="assets/images/gallery2.jpg" alt="Gallery 2">
            </div>
            <div class="slide-gallery">
                <img src="assets/images/gallery3.jpg" alt="Gallery 3">
            </div>
            <div class="slide-gallery">
                <img src="assets/images/gallery4.jpg" alt="Gallery 4">
            </div>

            <!-- Add more slides if needed -->
        </div>
    </div>
    <!-- Newsletter Subscription -->
<div class="newsletter">
    <h2>Subscribe to Our Newsletter</h2>
    <form action="subscribe.php" method="post">
        <input type="email" name="email" placeholder="Enter your email" required>
        <button type="submit">Subscribe</button>
    </form>
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
    });

    // Gallery Slideshow Script
    document.addEventListener("DOMContentLoaded", function() {
        let gallerySlides = document.querySelectorAll('.slide-gallery');
        let currentGallerySlide = 0;
        const gallerySlideInterval = 4000; // 5 seconds

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
