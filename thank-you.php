  <?php require ("./partials/header.php"); ?>

  <!-- Main Content -->
  <main class="home-page">
    <!-- Hero Section -->
    <section class="hero-section position-relative text-center text-white section-padding thankYouSection">
      <!-- Background Video -->
      <video autoplay muted loop playsinline class="hero-video">
        <source src="./assets/images/banner.webm" type="video/mp4" />
      </video>

      <!-- Overlay -->
      <div class="hero-overlay"></div>

      <!-- Content -->
      <div class="hero-content">
        <div class="container"  >
          <!-- Badge -->
          

          <!-- Main Heading -->
          <h1 class="heading mb-0">
            <span>THANK YOU </span> FOR REACHING OUT!
          </h1>
          <div class="d-flex justify-content-center">
            <p class="mt-3 mb-4 para-content text-center">
              Your submission has been received successfully.
              <br>
              Our team will review your request and get back to you shortly.
            </p>
          </div>


        </div>
        <!-- CTA Buttons -->
        <!-- <div class="d-block d-lg-flex justify-content-center gap-3 flex-wrap">
          <a href="https://leocybsec.com/book-a-demo/" target="_blank" class="btn btn-secondary w-100 w-lg-fit mb-3 mb-lg-0">BOOK A DEMO</a>
          <a href="#contact-us" class="btn btn-primary w-100 w-lg-fit">ENQUIRE NOW</a>
        </div> -->

       
      </div>
      </div>
    </section>


  </main>

  <!-- sidebar -->
  <div class="sidebar offcanvas offcanvas-end d-lg-none" tabindex="-1" id="demoOffcanvas">
    <div class="offcanvas-header">
      <img src="assets/images/logo.png" alt="Tech Prodigy Logo" class="logo" />
      <button type="button" class="btn-close text-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <a href="#" class="btn btn-primary w-100 mb-3">START FREE TRIAL</a>
      <a href="#contact-us" class="btn btn-primary w-100">ENQUIRE NOW</a>
    </div>
  </div>

  <?php require ("./partials/footer.php"); ?>
