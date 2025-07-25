<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>webdev</title>
  <!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/webdev.css">

</head>
<body>

  <div class="top-bar">
    <div class="left">
      <span><i class="fa fa-phone"></i> +91 9768 864 173</span>
      <span><i class="fa fa-map-marker-alt"></i> 307, 3rd Floor, Parshuram Apt, Nerul, Navi Mumbai.</span>
    </div>
    <div class="right">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
    </div>
  </div>

  <div class="navbar">
    <div class="logo">
      <img src="images/logo.png" alt="Logo">
    </div>

    <div class="hamburger" onclick="toggleMenu()">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div class="menu" id="menu">
      <a href="index" class="active">Home</a>
      <a href="#">About Us</a>
      <div class="dropdown">
        <a href="#">Services <i class="fa fa-chevron-down" style="font-size: 12px;"></i></a>
        <div class="dropdown-content">
          <a href="#">Local SEO</a>
          <a href="#">SEO</a>
          <a href="#">Social Media Marketing (SMM)</a>
          <a href="#">Digital Advertising</a>
          <a href="#">Designing</a>
          <a href="#">Website Designing</a>
        </div>
      </div>
      <a href="#">FAQs</a>
      <a href="#">Blog</a>
      <a href="contact">Contact Us</a>
    </div>

    <button class="call-now"><i class="fa fa-phone"></i> Call Now</button>
  </div>
 