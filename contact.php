<?php

include "header.php";
?>
<section class="contact-section">
  <img src="images/logo.png" alt="webdev Logo">
  <h2>Keep in touch with us</h2>
  <p>
    We specialize in <strong>SEO, Local SEO, Social Media Marketing, Digital Advertising, Designing, and Website Designing</strong> 
    in Mumbai & Navi Mumbai, delivering sleek, innovative digital solutions. Whether you need a high-performing website or a powerful 
    marketing strategy, our cutting-edge designs and expert solutions will elevate your brand. Let’s create something amazing for you!
  </p>

  <div class="contact-boxes">
    <!-- Address Box -->
    <div class="contact-box">
      <i class="fa-solid fa-location-dot"></i>
      <h3>Address</h3>
      <p>307, 3rd Floor, Parshuram Apt, House No- 800/002, Sector 20,<br>
         <strong>Nerul, Navi Mumbai. 400706</strong>
      </p>
    </div>

    <!-- Contact Box -->
    <div class="contact-box">
      <i class="fa-solid fa-phone"></i>
      <h3>Contact</h3>
      <p>Mobile: <strong>9768864173</strong><br>
         Hotline: <strong>89283 00541</strong><br>
         E-mail: avinwebdev@gmail.com
      </p>
    </div>

    <!-- Hour of Operation Box -->
    <div class="contact-box">
      <i class="fa-solid fa-clock"></i>
      <h3>Hour of operation</h3>
      <p>Mon – Fri: 10:30 – 18:00<br>
         Sat: 10:30 – 01:00<br>
         Sun: Holiday
      </p>
    </div>
  </div>
</section>

<section style="background: #f9f9f9; padding: 40px;">
  <div style="max-width: 800px; margin: auto; background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 0 15px rgba(0,0,0,0.1); box-sizing: border-box;">
    <h2 style="text-align:center; color:#000000; margin-bottom: 25px;font-size: 35px;">Send a Massege</h2>
    <form action="contact-back.php" method="POST">
      
      <!-- First Row -->
      <div style="display: flex; flex-wrap: wrap; gap: 20px;">
        <input type="text" name="name" placeholder="Full Name" required
          style="flex: 1; padding:12px; border:1px solid #ccc; border-radius:6px; min-width: 250px; box-sizing: border-box;" />
        <input type="email" name="email" placeholder="Email Address" required
          style="flex: 1; padding:12px; border:1px solid #ccc; border-radius:6px; min-width: 250px; box-sizing: border-box;" />
      </div>

      <!-- Second Row -->
      <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-top: 15px;">
        <input type="text" name="subject" placeholder="Subject" required
          style="flex: 1; padding:12px; border:1px solid #ccc; border-radius:6px; min-width: 250px; box-sizing: border-box;" />
        <input type="tel" name="phone" placeholder="Mobile Number" required
          style="flex: 1; padding:12px; border:1px solid #ccc; border-radius:6px; min-width: 250px; box-sizing: border-box;" />
      </div>

      <!-- Message Row -->
      <div style="margin-top: 15px;">
        <textarea name="message" rows="5" placeholder="Your Message" required
          style="width: 100%; padding:12px; border:1px solid #ccc; border-radius:6px; resize: vertical; box-sizing: border-box;"></textarea>
      </div>

      <!-- Submit Button -->
      <div style="display: flex; justify-content: center; margin-top: 20px;">
  <button type="submit"
    style="background:#f47c2c; color:white; padding:16px 0; border:none; border-radius:8px; font-weight:bold; cursor:pointer; width:100%; max-width: 200px;">
    Send Message
  </button>
</div>

    </form>
  </div>
</section>


<?php

include "footer.php";
?>