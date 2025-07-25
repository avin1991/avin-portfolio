<footer>
  <div class="footer-container">
    <!-- Company Info -->
    <div class="footer-column">
      <div class="footer-logo">
        <img src="images/logo.png" alt="Logo">
        
      </div>
      <p><strong>WHERE BRANDS THRIVE AND SURVIVE</strong></p>
      <p>Integrated Communication United is a creative design studio with diversified client portfolio. 
         It came to existence in 2010 in Navi Mumbai to provide various creative services.</p>
    </div>

    <!-- Quick Links -->
    <div class="footer-column">
      <h3>Quick Links</h3>
      <div class="footer-links">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">FAQ</a>
        <a href="#">Blog</a>
        <a href="contact.php">Contact</a>
      </div>
    </div>

    <!-- Contact -->
    <div class="footer-column">
      <h3>Connect With Us</h3>
      <div class="footer-contact">
        <p><i class="fa-solid fa-phone"></i> +91 9768 864 173</p>
        <p><i class="fa-solid fa-envelope"></i> avinwebdev@gmail.com</p>
        <p><i class="fa-solid fa-location-dot"></i>307, 3rd Floor, Parshuram Apt, House No- 800/002, Sector 20, Nerul, Navi Mumbai. 400706</p>
      </div>
      <div class="social-icons">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
      </div>
    </div>

    <!-- Map -->
    <div class="footer-column map">
      <h3>Reach Us</h3>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100735.39719928525!2d72.87055994335938!3d19.033635200000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c3001c417b8d%3A0x267c8f077d5f59ab!2sShree%20Parshuram%20Apartments!5e1!3m2!1sen!2sin!4v1753437770409!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="footer-bottom">
    All Rights Reserved 2025
  </div>

  <!-- Scroll to Top Button -->
<button onclick="scrollToTop()" id="scrollBtn" title="Go to top">
  <i class="fas fa-arrow-up"></i>
</button>
</footer>
<!-- Bootstrap 5 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QD65dUwqJqv4D6TKbQ7GPyAv+L1G5gKwKk0m0fhM26wM6AxA8YHEulxZJHzEajqD" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true,
    });
  </script>

  <script>
    const text = "Illuminate Your Brand’s Presence";
    const typingText = document.getElementById("typing-text");
    let index = 0;

    function type() {
      if (index < text.length) {
        typingText.textContent += text.charAt(index);
        index++;
        setTimeout(type, 80); // typing speed
      }
    }

    window.onload = type;
  </script>
 <script>
    function toggleMenu() {
      document.getElementById("menu").classList.toggle("active");
    }
  </script>


  <script>


  // Show/hide button on scroll
  window.onscroll = function() {
    let scrollBtn = document.getElementById("scrollBtn");
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
      scrollBtn.style.display = "block";
    } else {
      scrollBtn.style.display = "none";
    }
  };

  // Scroll to top
  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
</script>

</body>
</html>
