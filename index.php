<?php
// =================== SEO VARIABLES ===================
// These variables will be used by header.php (dynamic meta tags)
$pageTitle = "Tathagat Engineering | Quality Machines and Engineering Solutions";
$pageDesc  = "Welcome to Tathagat Engineering — your trusted partner for high-quality machines, industrial tools, and engineering solutions in Pithampur, Madhya Pradesh.";
$canonical = "https://yourdomain.com/index.php"; // replace with your domain

// Include header file
include("header.php");
?>

<!-- ========== MAIN CONTENT ========== -->
<main>

  <!-- ========== HERO SECTION ========== -->
  <section class="hero">
    <h1>Welcome to <strong>Tathagat Engineering</strong></h1>
    <p>Your trusted partner for engineering solutions.</p>
    <a href="machine.php" class="btn">Explore Services</a>
  </section>

  <!-- ========== PRODUCT INTRO SECTION ========== -->
  <section class="product-intro container">
    <center><h2>Product Categories</h2></center>
    <div class="bar-container">
      <div class="bar red"></div>
      <div class="bar black"></div>
    </div> <br>
    <p class="tagline">
      Focused on Integration, Inspired by Innovation, Committed to Quality — Always for Your Growth.
    </p>
  </section>

  <!-- ========== MACHINES SECTION ========== -->
  <section class="machines container">
    <article class="mac">
      <img src="images/lathe.webp" alt="High precision Lathe machine">
    </article>

    <article class="mac">
      <img src="images/universal-cylindrical-grinder.webp" alt="Universal Cylindrical Grinder Machine">
    </article>

    <article class="mac">
      <img src="images/Surface Grinding.jpg" alt="Surface Grinding Machine">
    </article>

    <!-- CTA button -->
    <a href="machine.php" class="btn">
      Explore Services
      <img src="images/arrow.webp" alt="Explore More" class="btn-icon">
    </a>
  </section>

  <!-- ========== CUSTOMER SECTION ========== -->
  <section class="container">
    <article>
      <img style="width:100%;" src="images/feature.png" alt="Customer satisfaction and quality assurance">
    </article>
  </section>

  <!-- ========== SUCCESS COUNTER SECTION ========== -->
  <section class="counter-section">
    <div class="counter-box">
      <div class="counter-icon"><i class="fas fa-history"></i></div>
      <div class="counter-number" data-target="3">0</div>
      <div class="counter-text">Years of Trusted Service</div>
    </div>

    <div class="counter-box">
      <div class="counter-icon"><i class="fas fa-cogs"></i></div>
      <div class="counter-number" data-target="250">0</div>
      <div class="counter-text">Products Delivered</div>
    </div>

    <div class="counter-box">
      <div class="counter-icon"><i class="fas fa-users"></i></div>
      <div class="counter-number" data-target="50">0</div>
      <div class="counter-text">Satisfied Clients & Partners</div>
    </div>

    <div class="counter-box">
      <div class="counter-icon"><i class="fas fa-headset"></i></div>
      <div class="counter-number" data-target="24">0</div>
      <div class="counter-text">Customer Support Availability</div>
    </div>
  </section>

  <!-- ========== CLIENT SECTION ========== -->
  <section class="product-intro container">
    <center><h2>Clientele</h2></center>
    <div class="bar-container">
      <div class="bar red"></div>
      <div class="bar black"></div>
    </div>
    <p class="tagline">
      “Where Trust Creates Partnerships, and Partnerships Drive Success”
    </p>
  </section>

  <!-- ========== CLIENT LOGO MARQUEE ========== -->
  <div class="logo-marquee">
    <div class="logo-track">
      <div class="logo-item"><img src="images/alimco.webp" alt="Client: Alimco"></div>
      <div class="logo-item"><img src="images/commercial Syn Bags Ltd.png" alt="Client: Commercial Syn Bags Ltd"></div>
      <div class="logo-item"><img src="images/Innoweave Global Packaging Solutions.jpeg" alt="Client: Innoweave Global Packaging Solutions"></div>
      <div class="logo-item"><img src="images/Kratos.png" alt="Client: Kratos"></div>
      <div class="logo-item"><img src="images/porwal.jpeg" alt="Client: Porwal Group"></div>
      <div class="logo-item"><img src="images/Supertex Woven Industries.png" alt="Client: Supertex Woven Industries"></div>
      <div class="logo-item"><img src="images/S.K Steel Industries.png" alt="Client: S.K Steel Industries"></div>
    </div>
  </div>
</main>

<!-- ========== JAVASCRIPT ========== -->
<script src="script.js"></script>

<?php include("footer.php"); ?>

<!-- ========== STRUCTURED DATA (SCHEMA MARKUP) ========== -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Tathagat Engineering - Machines and Tools",
  "description": "Trusted engineering solutions and quality machines by Tathagat Engineering in Pithampur, Madhya Pradesh.",
  "publisher": {
    "@type": "Organization",
    "name": "Tathagat Engineering",
    "logo": "https://yourdomain.com/images/logo.jpeg"
  },
  "url": "https://yourdomain.com/"
}
</script>
</body>
</html>
