<?php
$url = "../";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>AI Software Development Services | DitsTek</title>
  <?php include_once '../common/common-css.php'; ?>
  <link rel="stylesheet" href="<?php echo $url; ?>assets/css/ai-agent-development.css" type="text/css" />
</head>

<body class="page-ai-services">
  <?php include_once '../common/header.php'; ?>

  <section class="hero-section position-relative overflow-hidden">

    <video class="hero-video-bg position-absolute top-0 start-0 w-100 h-100" autoplay muted loop playsinline
      style="object-fit: cover;" poster="<?php echo $url; ?>assets/images/ai-software/banner-image.webp">
      <source src="<?php echo $url; ?>assets/images/ai-software/banner-video.mp4" type="video/mp4" />
    </video>

    <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100"></div>

    <div class="container position-relative">
      <div class="row align-items-center g-5">

        <div class="col-lg-6 col-12">
          <div class="hero-content">

            <h1 class="fw-bold text-white">
              AI Software Development Services
            </h1>

            <p class="text-white">
              Build smart, automated, and data-based applications with our
              AI
              app development services. As a reliable custom AI development
              company, we assist enterprises in designing, developing,
              and deploying software that improves decision-making,
              reduces costs, and optimizes business processes.
            </p>

            <a href="../pages/contact.html" class="btn hero-btn d-inline-flex align-items-center gap-2">
              Get AI Consultation
              <i class="fa fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-6 col-12 d-none d-lg-block">
          <div class="hero-visual">
            <img src="<?php echo $url; ?>assets/images/ai-software/banner-image.webp"
              alt="AI Software Development Services" title="AI Software Development Services" class="img-fluid" />
          </div>
        </div>

      </div>
    </div>

  </section>

 

  <?php include_once '../common/footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="<?php echo $url; ?>assets/js/bootstrap.bundle.js"></script>
  <script src="<?php echo $url; ?>assets/js/common.js"></script>
</body>

</html>