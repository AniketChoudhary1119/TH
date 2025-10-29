<?php 
include("header.php");?>
  <!-- ========== MAIN CONTENT ========== -->
  <main>

    <!-- ==========================================
        HERO SECTION
        -------------------------------------------------
        📍 Purpose: Top banner introducing the services page.
        📍 SEO Tip: Keep headings keyword-rich.
    =========================================== -->
    <section class="hero">
      <h1>Welcome to TATHAGAT ENGINEERING</h1>
     <!--   <p>Your trusted partner for engineering solutions.</p>
      <a href="machine.php" class="btn">Explore Services</a> -->
     </section>

    <!-- ==========================================
        META TAGS & SEO STRUCTURE
        -------------------------------------------------
        📍 Purpose: Improve search engine visibility.
        📍 Note: These tags describe this page's content.
    =========================================== -->
    <meta name="description" content="Tathagat Engineering offers precision machining, grinding, CNC batch production, and surface finishing services with high accuracy and reliability.">
    <meta name="keywords" content="Tathagat Engineering, CNC machining, surface grinding, precision milling, fabrication, welding, forming, industrial manufacturing, engineering tools, custom fixtures">
    <meta name="author" content="Tathagat Engineering">
    <meta property="og:title" content="Our Specialization | Tathagat Engineering">
    <meta property="og:description" content="Explore our expert machining, grinding, fabrication, and CNC production services trusted by industries.">
    <meta property="og:image" content="images/m7.jpg">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://tathagatengineering.in/machine.php">

    <!-- ==========================================
        INTRODUCTION SECTION
    =========================================== -->
    <section class="about">
      <h2 style="text-align:center">Our Specialization</h2> 
      <div class="bar-container">
        <div class="bar red"></div>
        <div class="bar black"></div>
      </div> <br>
      <p style="text-align:center">
        We specialize in high-quality engineering tools and solutions for industries and professionals.
      </p>
    </section>

    <!-- ==========================================
        MACHINES SECTION
        -------------------------------------------------
        📍 Each machine/service includes image, heading, and description.
        📍 SEO Tip: Keep alt text descriptive for better ranking in image search.
    =========================================== -->
    <section class="machines container">

      <!-- Machine card 1 -->
      <div class="machi">
        <div class="machi-img">
          <img src="images/m7.jpg" alt="Precision Machining Turning & Milling">
        </div>
        <div class="machi-text">
          <h3>Precision Machining (Turning & Milling)</h3>
          <p>
            Complex geometries, concentric bore, keyway and tight thread — we are where
            form and fit matter most. Whether prototype or series, tolerances down to ±0.01 mm achievable.
          </p>
        </div>
      </div>

      <!-- Machine card 2 -->
      <div class="machi">
        <div class="machi-img">
          <img src="images/m8.jpg" alt="Grinding and Surface Finishing Machine">
        </div>
        <div class="machi-text">
          <h3>Grinding & Surface Finishing</h3>
          <p>
            Cylindrical and surface grinding provide dimensional stability and surface finish to both — 
            bearing journals, hydraulic spools, sealing surfaces — ready for assembly without extra rework.
          </p>
        </div>
      </div>

      <!-- Machine card 3 -->
      <div class="machi">
        <div class="machi-img">
          <img src="images/m1.jpeg" alt="Cutting Fabrication and Welding">
        </div>
        <div class="machi-text">
          <h3>Cutting, Fabrication & Welding</h3>
          <p>
            Band-saw cutting, edge prep and skilled welding (MIG/TIG) — assemblies delivered ready for testing. 
            Joints are carefully selected for both strength and finish.
          </p>
        </div>
      </div>

      <!-- Machine card 4 -->
      <div class="machi">
        <div class="machi-img">
          <img src="images/m4.jpeg" alt="CNC Batch Production and Fixtures">
        </div>
        <div class="machi-text">
          <h3>CNC Batch Production & Fixtures</h3>
          <p>
             Create programs, jigs, and fixtures that deliver high repeatability. 
            Batch sizes from small to medium/large — on-time delivery and consistent tolerances.
          </p>
        </div>
      </div>

      <!-- Machine card 5 -->
      <div class="machi">
        <div class="machi-img">
          <img src="images/m5.jpeg" alt="Special Processes and Inspection">
        </div>
        <div class="machi-text">
          <h3>Special Processes & Inspection</h3>
          <p>
            Heat-treatment coordination, surface treatments (plating/painting) and 100% inspection 
            (Vernier, Micrometer, Surface finish tester, Roundness tester) — quality guaranteed.
          </p>
        </div>
      </div>

      <!-- Machine card 6 -->
      <div class="machi">
        <div class="machi-img">
          <img src="images/m6.jpeg" alt="Forming and Press Work">
        </div>
        <div class="machi-text">
          <h3>Forming & Press Work</h3>
          <p>
            Accurate shapes and high repeatability through sheet metal bending, punching, and pressing. 
            Components in which strength and uniformity are critical — brackets, flanges, housings — are all delivered with a consistent finish.
          </p>
        </div>
      </div>

    </section>
  </main>

<?php include("footer.php"); ?>
</body>
</html>
