<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Orange & White Theme Preview</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    .map-section {
      padding: 40px 20px;
        background-color: #fff7e6;
      text-align: center;
    }

    .map-container {
      max-width: 1500px;
      margin: 0 auto;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .contact-section {
      background-color: #fff7e6;
      padding: 40px 20px;
      text-align: center;
    }

    .contact-form {
      max-width: 600px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .contact-form input,
    .contact-form textarea {
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 1rem;
      width: 100%;
    }

    .contact-form textarea {
      height: 150px;
      resize: vertical;
    }

    .contact-form button {
      background-color: #FFA500;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
      width: 100%;
    }

    .contact-form button:hover {
      background-color: #e69500;
    }

    .section-title {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 20px;
      font-size: 1.8em;
      font-weight: bold;
      color: #FFA500;
      margin: 40px 0 20px;
    }

    .section-title::before,
    .section-title::after {
      content: "";
      flex: 1;
      height: 2px;
      background-color: #FFA500;
    }
.contact-details-section {
    background-color: #fff7e6;
    padding: 0; /* Remove extra vertical space */
    display: flex;
    justify-content: center;
    align-items: center;
}

.contact-info {
    display: flex;
    flex-direction: column;
    align-items: center; /* Center horizontally */
    justify-content: center;
    font-size: 0.95em;
    color: black;
    padding: 20px;
    background-color: #fff7e6;
    gap: 10px;
}


    footer {
       background-color: #FFA500;
      text-align: center;
      padding: 20px;
      font-size: 0.9em;
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

<section class="hero">
  <h1>Contact Us</h1>
  <p>Innovation. Precision. Safety.</p>
</section>

<section class="contact-section">
  <h2 class="section-title">Contact Us</h2>
  <form action="sendmail.php" method="POST" class="contact-form">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Your Message" required></textarea>
    <button type="submit">Send Message</button>
  </form>
</section>

<section class="contact-details-section">
  <div class="contact-info">
    <div><i class="fas fa-map-marker-alt"></i> Colombo, Sri Lanka</div>
    <div><i class="fas fa-phone-alt"></i> +94 77 123 4567</div>
  </div>
</section>

<section class="map-section">
  <h2 class="section-title">Our Location</h2>
  <div class="map-container">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31690.083307645117!2d79.86753465!3d6.9270785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2595e1e12a9f5%3A0xd5f243f58c20d90d!2sColombo%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus"
      width="100%"
      height="400"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</section>

<footer>
  <p>&copy; 2025 Your Company. All rights reserved.</p>
</footer>

</body>
</html>
