<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Navbar with Scroll and Toggle</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Condiment&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Condiment&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playwrite+AU+NSW:wght@100..400&display=swap"
    rel="stylesheet">

  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <style>

  </style>
</head>

<body>

  <!-- Navbar -->

  <!-- Navbar -->
  <!-- <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-custom">
    <div class="container"> <a class="navbar-brand" href="#"><img src="assets/images/logo.png.jpg" class="logo"
          alt=""></a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span
          class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav> -->
  <?php include 'navbar.php'; ?>


  <!-- Hero Section (Inline CSS + Class for Media Query) -->
  <section class="hero-section-inline" style="background: url('assets/images/herohome.jpg') no-repeat center center/cover;
         height: 100vh;
         position: relative;
         display: flex;
         align-items: center;
         justify-content: center;
         color: white;">

    <!-- Overlay -->
    <div style="position: absolute; inset: 0; background-color: rgba(0,0,0,0.6); z-index: 1;"></div>

    <!-- Content -->
    <div style="position: relative; z-index: 2; text-align: center;">
      <h1 style="font-family: 'Condiment', cursive !important;" class="display-4 fw-bold">
        Book Cabs & Taxis Anywhere in India – 24/7 Service
      </h1>
      <p class="lead" style="font-weight: 400; font-size: 20px; font-style: italic;">Fast, safe and affordable rides
        anywhere, anytime in India.</p>

      <!-- Outline Button -->
      <a href="#booking" class="btn btn-outline-light btn-lg mt-3"
        style="border-width: 2px; border-radius: 10px; padding: 6px 25px;">
        Book A Now
      </a>
    </div>

  </section>


  <!-- shape design -->
  <!-- Shape Section -->



  <!-- Footer placeholder -->
  <?php include 'footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery (necessary for Owl Carousel) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- Script -->
  <script>
    $(document).ready(function () {
      // Initialize Owl Carousel
      var owl = $(".owl-carousel").owlCarousel({
        loop: true,           // Enable loop for infinite scrolling
        margin: 10,           // Space between each item
        nav: false,           // Disable default navigation buttons to use custom buttons
        items: 3,             // Display 3 images at a time
        responsive: {         // Responsive behavior for different screen sizes
          0: {
            items: 1      // Show 1 image for screens 0px and up
          },
          600: {
            items: 2      // Show 2 images for screens 600px and up
          },
          1000: {
            items: 3      // Show 3 images for screens 1000px and up
          }
        }
      });

      // Custom Navigation Events
      $('.owl-prev').click(function () {
        owl.trigger('prev.owl.carousel');
      });

      $('.owl-next').click(function () {
        owl.trigger('next.owl.carousel');
      });
    });
  </script>
<script></script>
  <script src="mainscript.js"></script>
  <!-- JS File Include -->
</body>

</html>