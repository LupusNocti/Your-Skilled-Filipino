<!DOCTYPE html>
<html>
<head>
    <title>Your Skilled Filipino</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/app.css">
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni&display=swap" rel="stylesheet">
    <style>
        /* Add custom styles here */
        /* For example, you can add padding or margins to elements to adjust the spacing in mobile view */
        /* You can also use media queries to apply different styles based on the screen size */
    </style>
</head>
<body>

<nav class="navbar-scroll">
    <ul class="navbar-menu">
        <li><a class="active" href="#section1">Home</a></li>
        <li><a class="active" href="#section2">Join us</a></li>
        <li><a class="active" href="#section3">About</a></li>
        <li><a class="active" href="#section4">Socials</a></li>
        <!-- Add more navigation items for other sections -->
    </ul>
</nav>

    <section id="section1" class="large-section">
    <div class="logo-container logo text-center">
    <img src="css/images/aa_logo.png" alt="Logo" class="img-fluid logo-img">
    <span class="slogan" style="font-size: 2rem;">Your Skilled Filipino</span>
</div>
        <h2 class="animate hme_header">Your Skilled Filipino</h2>
        <!-- Your content for Section 1 goes here -->
    </section>

    <div class="container col-lg-12 col-md-12">
    <section id="section2" class="pt-5 pb-5">
        <div class="row">
            <div class="col-md-6">
                <!-- Image (replace the image path with your actual image) -->
                <img src="css/images/Smplimg.JPG" alt="Your Image" class="img-fluid">
            </div>
            <div class="col-md-6 mt-3 mt-md-0">
                <!-- Short message -->
                <p style="font-weight: bold; color:#544EC6;">
                    Invest in your business by hiring a top-notch outsourcing team!</p> 
                    
                <p style="font-size: 1.4rem;">
                    Working with us will allow you to get away from your busy day-to-day time-consuming tasks. By easing your workload, you can 
                    focus on what's important and propel your business to new heights.
                </p><br>
                <!-- Button with target="_blank" attribute to open in a new tab -->
                <a href="https://calendly.com/april-ysf/30min?month=2023-07" class="buttn col-sm-6" target="_blank">Join us!</a>
            </div>
        </div>
    </section>

    <section id="section3">
        <h2>About</h2>
    </section>
</div>
<!-- Add more sections as needed -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to trigger the animation
        function triggerAnimation() {
            const myWebsiteHeading = document.querySelector('#section1 h2');
            myWebsiteHeading.classList.add('animate');
        }

        // Function to check if an element is in the viewport
        function isElementInViewport(el) {
            const rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Smooth scroll to the section when a navigation link is clicked
        const navLinks = document.querySelectorAll('nav a[href^="#"]');
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(link.getAttribute('href'));
                const headerOffset = 80; // Adjust this if you have a fixed header height
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition - headerOffset;

                window.scrollBy({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            });
        });

        // Function to scroll to the top of the page on load or refresh
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Trigger the animation when the website loads and when the section comes into view
        document.addEventListener('scroll', function() {
            const section1 = document.getElementById('section1');
            if (isElementInViewport(section1)) {
                triggerAnimation();
            }
        });

        // Scroll to the top on page load or refresh
        scrollToTop();
    });

    // JavaScript to add a scroll event listener to the window
    window.addEventListener('scroll', function() {
        // Select the navbar
        const navbar = document.querySelector('nav.navbar-scroll');

        // Check if the user has scrolled down
        if (window.scrollY > 0) {
            // Add a class "navbar-scrolled" to make the navbar smaller
            navbar.classList.add('navbar-scrolled');
        } else {
            // Remove the class "navbar-scrolled" to revert the navbar to its original size
            navbar.classList.remove('navbar-scrolled');
        }
    });
</script>
</body>
</html>
