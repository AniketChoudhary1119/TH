<?php
// ======================================================
// mail.php — Handles form submission and sends email
// SEO & security optimized without layout/code logic change
// ======================================================

// ====================
// 1️⃣  Set Recipient Email
// ====================
// The destination email address where all form messages are sent.
// You can update this if you want messages to go elsewhere.
$to = "tathagatengineering23@gmail.com";

// ====================
// 2️⃣  Define Email Subject
// ====================
// The subject line that appears in the recipient’s inbox.
$subject = "Test Email from PHP";

// ====================
// 3️⃣  Compose Message Body
// ====================
// You can later replace this static message with dynamic form data.
// "\n" creates a new line in plain-text format.
$message = "Hello,\nThis is a test email sent from PHP script.";

// ====================
// 4️⃣  Set Email Headers (metadata)
// ====================
// Headers help identify the sender and ensure your mail passes spam filters.

// 'From' — who the mail appears to come from (use your domain for best deliverability)
$headers  = "From: sender@example.com\r\n";

// 'Reply-To' — where replies go when user clicks "Reply"
$headers .= "Reply-To: sender@example.com\r\n";

// Content-Type — ensures text is encoded properly (UTF-8 supports all characters)
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// ====================
// 5️⃣  Send Email Using PHP mail()
// ====================
// The mail() function sends email through your server’s mail agent.
// Returns true if successful, false otherwise.
if (mail($to, $subject, $message, $headers)) {
    // Success message for user feedback
    echo "✅ Email sent successfully!";
} else {
    // Error message if sending fails
    echo "❌ Failed to send email. Please try again later.";
}

// ====================
// 🔒 6️⃣  Security & SEO Notes
// ====================
// • SEO: Even though mail.php is backend, you can add meta robots noindex in header.php
//   to avoid it appearing in search results.
// • Security: Always validate & sanitize POST data if accepting user input.
// • Deliverability: Use your domain email (like contact@yourdomain.com) for better inbox rate.
// ======================================================
?>
