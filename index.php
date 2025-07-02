<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orange & White Theme Preview</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <a href="index.php" class="logo-link">
        <img src="image/logo.png" alt="ADPA Logo" class="logo">
        <div class="logo-text">
            <span class="logo-main">ADPA</span><br>
            <span class="logo-sub">Chemical Plant</span>
        </div>
    </a>


    <!-- Navigation Menu -->
    <nav id="navLinks">
        <a href="index.php">Home</a>
        <a href="aboutus.php">About Us</a>
        <a href="#">Products</a>
        <a href="contactus.php">Contact Us</a>
    </nav>

     <div class="hamburger" onclick="toggleMenu()">☰</div>

</header>

<section class="hero">
    <h1>Welcome to Our Chemical Plant</h1>
    <p>Innovation. Precision. Safety.</p>
</section>

<section class="welcome">
    <h2>Welcome</h2>
    <p>We are a leading provider of chemical processing solutions. Our mission is to deliver quality and innovation to industries around the globe.</p>
</section>

<section class="products">
    <div class="product-container">
        <div class="product">
            <img src="image/sample.jpg" alt="Product 1">
            <h3>Product 1</h3>
            <p>High quality chemical for industrial use.</p>
        </div>
        <div class="product">
            <img src="image/sample.jpg" alt="Product 2">
            <h3>Product 2</h3>
            <p>Eco-friendly and efficient formulation.</p>
        </div>
        <div class="product">
            <img src="image/sample.jpg" alt="Product 3">
            <h3>Product 3</h3>
            <p>Eco-friendly and efficient formulation.</p>
        </div>
    </div>
</section>

<section class="hero1"></section>

<footer>
    <p>&copy; 2025 Your Company. All rights reserved.</p>
</footer>

<!-- JavaScript -->
<script>
    function toggleMenu() {
        document.getElementById("navLinks").classList.toggle("show");
    }
</script>

</body>
</html>
