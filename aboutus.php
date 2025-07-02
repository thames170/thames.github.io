<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADPA Chemical Products | About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            color: #333;
        }

        header {
            background-color: #FFA500;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        header .main-title {
            font-size: 1.8em;
            margin: 0;
            flex: 1;
            text-align: left;
        }

        nav {
            display: flex;
            gap: 20px;
            justify-content: flex-end;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 0 10px;
        }

        nav a:hover {
            color: #fff6e0;
            text-decoration: underline;
        }

        .full-height-section {
            margin-top: 20px;
            height: 100vh;
            background-image: url('image/chemic1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2rem;
            background-color: rgba(0, 0, 0, 0.5);
            background-blend-mode: overlay;
        }

        .content-box {
            max-width: 800px;
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 12px;
            font-size: 1.2rem;
            line-height: 1.6;
            color: #333;
        }

        .content-box strong {
            color: #FFA500;
        }

        footer {
            background-color: #FFA500;
            color: white;
            padding: 15px 20px;
            text-align: center;
        }
    </style>
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
    <nav>
        <a href="index.php">Home</a>
        <a href="aboutus.php">About Us</a>
        <a href="#">Products</a>
        <a href="contactus.php">Contact Us</a>
    </nav>
</header>

<section class="full-height-section">
    <div class="content-box">
        <p>
            <strong>Thames Coatings International</strong> is a 100% leading Sri Lankan company with 28 years of proud history.
            We manufacture various kinds of paints and other construction materials. The most famous one is
            <strong>Thames Aquaseal</strong>, made using German Nano Technology and high-quality German ingredients.
        </p>
    </div>
</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?> ADPA Chemical Solutions. All rights reserved.</p>
</footer>

</body>
</html>
