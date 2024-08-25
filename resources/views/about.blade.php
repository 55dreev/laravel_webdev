<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Karrera</title>
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
            <img src="assets/images/banner6.jpg" alt="Slide 1">
        </div>
        <div class="slide">
            <img src="assets/images/banner7.jpg" alt="Slide 2">
        </div>
        <div class="slide">
            <img src="assets/images/banner8.jpg" alt="Slide 3">
        </div>
        <div class="slide">
            <img src="assets/images/banner9.jpg" alt="Slide 4">
        </div>
        <div class="slide">
            <img src="assets/images/banner10.jpg" alt="Slide 5">
        </div>

        <!-- Logo -->
        <div class="logo-container">
            <img src="assets/images/logo.png" alt="Cafe Logo">
        </div>
    </div>

    <!-- About Information -->
    <div class="about-section">
        <h2>About Us</h2>
        <p>Karrera is not just a cafe; it's a destination where automotive passion meets coffee culture. Owned by Angie Mead King, Karrera combines the excitement of motorsports with the relaxing atmosphere of a cozy cafe.<br></p><br>
        <p>Our space is designed with car enthusiasts in mind, featuring unique decor and memorabilia. We host various events and gatherings, creating a community hub for those who share our love for cars and coffee.<br></p><br>
        <p>Whether you're here to enjoy a cup of freshly brewed coffee, participate in our events, or simply soak in the atmosphere, we welcome you to experience what makes Karrera a special place.</p>
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
