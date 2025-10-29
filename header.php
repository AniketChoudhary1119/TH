<!DOCTYPE html>
<html lang="en">
<head>
  <!-- ===================== BASIC META TAGS ===================== -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- ===================== DYNAMIC SEO TAGS ===================== -->
  <?php
    if (!isset($pageTitle))  $pageTitle = "Tathagat Engineering - Machines and Tools";
    if (!isset($pageDesc))   $pageDesc  = "Tathagat Engineering provides high-quality machines, tools, and engineering services.";
    if (!isset($canonical))  $canonical = "https://yourdomain.com" . $_SERVER['REQUEST_URI'];
  ?>

  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
  <meta property="og:image" content="https://yourdomain.com/images/logo.jpeg">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta name="twitter:image" content="https://yourdomain.com/images/logo.jpeg">

  <!-- ===================== SITE STYLES ===================== -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- ========== HEADER & NAVIGATION ========== -->
  <header>
    <div class="site-header">
      <!-- LOGO + BRAND NAME -->
      <div class="logo-container">
        <a class="logo" href="index.php">
          <img src="images/logo.jpeg" alt="Tathagat Engineering Logo" />
        </a>
        <h4>Tathagat Engineering</h4>
      </div>

      <!-- ======= MOBILE MENU BUTTON ======= -->
      <button class="menu-toggle" aria-label="Toggle menu">☰</button>

      <!-- ======= MAIN NAVIGATION ======= -->
      <nav class="main-nav" aria-label="Main navigation">
        <ul class="nav-list">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="machine.php">Services</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- ====== SCRIPT FOR MOBILE MENU ====== -->
  <script>
  /* =========================================================
     📱 MOBILE MENU TOGGLE SCRIPT
     ---------------------------------------------------------
     - Toggles menu visibility on hamburger click
     - Adds 'open' state for button styling
     ========================================================= */
  document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.querySelector(".menu-toggle");
    const nav = document.querySelector(".main-nav");

    if (toggleBtn && nav) {
      toggleBtn.addEventListener("click", function () {
        nav.classList.toggle("active");
        toggleBtn.classList.toggle("open");
      });
    }
  });
  </script>