<?php
// pages/concierge/concierge.php
session_start();
// Assuming database connection is required for consistency with other pages
require_once __DIR__ . '/../../../database/db.php'; 

// Define page variables for header.php
$pageTitle = "Concierge | MAISON MUGLER";
// Sets the specific CSS file to be linked in the header component
$cssFile = "concierge.css"; 

// Include header
require_once __DIR__ . '/../../components/header.php';
?>

<!-- Concierge Page Content -->
<main>
  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>CONCIERGE</h1>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section container">
    <div class="contact-grid">
      <div class="contact-info">
        <h2>How Can We Help?</h2>
        <p>For questions regarding orders, product information, or assistance with your shopping experience, please reach out to our Concierge team. We’re happy to help you find the perfect fit or provide more details about our collections.</p>
        
        <p><strong>Email:</strong> <a href="mailto:info@maisonmugler.com">info@maisonmugler.com</a></p>
        
        <p><strong>Business Hours:</strong><br> Monday – Friday, 9AM to 5PM PST</p>
        
        <p>Our team strives to respond to all inquiries within 1–2 business days.</p>
      </div>

      <!-- Contact Form - This would require a form submission handler in a real application -->
      <form class="contact-form">
        <label for="name">Name</label>
        <input type="text" id="name" placeholder="Your Name" required>
        
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="you@example.com" required>
        
        <label for="message">Message</label>
        <textarea id="message" placeholder="Type your message here..." required></textarea>
        
        <button type="submit">Submit</button>
      </form>
    </div>
  </section>
</main>

<?php
// Include footer
require_once __DIR__ . '/../../components/footer.php';
?>