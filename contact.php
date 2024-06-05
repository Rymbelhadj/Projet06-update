<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>contact@example.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form><!--End Contact Form -->
        <style>
            
            #contact {
  background-color: #f8f9fa;
  padding: 80px 0;
}

.contact .container {
  position: relative;
  background-color: #fff;
  border-radius: 4px;
  box-shadow: 0 2px 35px 0 rgba(0, 0, 0, 0.07);
  padding: 50px;
}

.contact .section-header h2 {
  color: #333;
  font-weight: 700;
  font-size: 36px;
  margin-bottom: 20px;
}

.contact .section-header p {
  color: #777;
}

.contact .section-header span {
  color: #04abf2;
}

.contact .info-item {
  margin-bottom: 20px;
}

.contact .info-item i {
  color: #04abf2;
  font-size: 32px;
  margin-right: 15px;
}

.contact .info-item h3 {
  color: #333;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 10px;
}

.contact .info-item p {
  color: #777;
  margin-bottom: 0;
}

.contact form {
  margin-top: 30px;
}

.contact form .form-control {
  background-color: #f8f9fa;
  border: 1px solid #ced4da;
  border-radius: 4px;
  padding: 12px 20px;
  font-size: 14px;
  line-height: 1.5;
  color: #495057;
  width: 100%;
  margin-bottom: 20px;
}

.contact form textarea.form-control {
  resize: none;
}

.contact form .loading,
.contact form .error-message,
.contact form .sent-message {
  font-size: 14px;
  color: #fff;
  background: rgba(40, 167, 69, 0.8);
  border-radius: 4px;
  padding: 10px 15px;
  display: none;
}

.contact form .error-message {
  background: #dc3545;
}

.contact form .sent-message {
  background: #28a745;
}

.contact form button[type="submit"] {
  background: #04abf2;
  color: #fff;
  border: 0;
  padding: 10px 30px;
  margin-top: 15px;
  font-size: 14px;
  font-weight: 500;
  border-radius: 4px;
  transition: 0.3s;
  cursor: pointer;
}

.contact form button[type="submit"]:hover {
  background: #018fe1;
}
