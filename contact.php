<?php 
// ======================================================
// contact.php — Contact Page for Tathagat Engineering
// SEO-friendly + accessible + mobile responsive
// ======================================================
include("header.php");
?>

<!-- ========== MAIN CONTENT ========== -->
<main>

  <!-- ===============================
       CONTACT SECTION
       =============================== -->
  <section class="contact-bg">
    <div class="contact container">
      
      <!-- LEFT SIDE - CONTACT DETAILS -->
      <div class="contact-details">
        <h1>Contact Tathagat Engineering</h1>
        <p>We’re always here to assist you with your engineering needs. Reach out to us using the details below or fill out the form to get in touch.</p>

        <p><strong>📞 Phone 1:</strong> <a href="tel:9179886916">9179886916</a></p>
        <p><strong>📞 Phone 2:</strong> <a href="tel:9229664926">9229664926</a></p>
        <p><strong>✉️ Email:</strong> <a href="mailto:tathagatengineering23@gmail.com">tathagatengineering23@gmail.com</a></p>
        <p><strong>📍 Address:</strong> Plot No.48, Ram Ratan Patel Nagar, Sector-01, Pithampur, Dhar (M.P)</p>

        <p><strong>About Us:</strong> Tathagat Engineering is a leading provider of high-quality engineering services, delivering reliable and efficient solutions for industrial clients with a focus on quality workmanship, efficiency, and long-term partnerships.</p>
      </div>

      <!-- RIGHT SIDE - CONTACT FORM -->
      <div class="contact-form-section">
        <h2>Send Us a Message</h2>
        <form action="mail.php" method="POST" class="contact-form" novalidate>
          <label for="name">Your Name</label>
          <input id="name" name="name" type="text" placeholder="Your Name" required aria-required="true">

          <label for="email">Your Email</label>
          <input id="email" name="email" type="email" placeholder="Your Email" required aria-required="true">

          <label for="message">Your Message</label>
          <textarea id="message" name="message" placeholder="Your Message" rows="6" required aria-required="true"></textarea>

          <button type="submit">Send Message</button>
        </form>
      </div>

    </div>
  </section>

  <!-- ===============================
       GOOGLE MAP LOCATION
       =============================== -->
  <section class="map-section">
    <div class="container">
      <h2>Find Us on the Map</h2>
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235734.66617403922!2d75.40766273281253!3d22.6032463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396257d8c944e515%3A0x164c3ff4bea5e3f2!2sTathagat%20Engineering%20And%20Electrical%20Works!5e0!3m2!1sen!2sin!4v1758882235646!5m2!1sen!2sin" 
        width="100%" 
        height="450" 
        style="border:0; border-radius:8px;" 
        allowfullscreen 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"
        title="Tathagat Engineering Location Map">
      </iframe>
    </div>
  </section>

</main>

<!-- ========== FOOTER ========== -->
<?php include("footer.php"); ?>
</body>
</html>
