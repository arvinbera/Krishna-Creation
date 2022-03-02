@include('header');

<section class="page-title" style="background-image: url(../assets/images/banner2.jpg);">
  <div class="container">
    <div class="content-box">
      <div class="title">
        <h1>Best Sellers</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua. </p>
      </div>
    </div>
  </div>
</section>
<section class="contact-page inner-page py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="address-info">
          <h4 class="text-center">Address Information</h4>
          <ul>
            <li>
              <div class="map-icon"><i class="fas fa-phone-volume"></i></div>
              <p> <a href="tel:1234567890">123-4567-890</a>
              </p>
            </li>
            <li>
              <div class="map-icon"><i class="fa fa-map-marker-alt"></i></div>
              <p> 60-49 Road 11378 New York </p>
            </li>
            <li>
              <div class="map-icon"><i class="fa fa-envelope"></i></div>
              <p>
                <a href="mailto:shop@krishnacreation.com">
                  shop@krishnacreation.com
                </a>
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
  </div>
</section>
<section class="cotact-sec">
    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Contact Form</h3>
            <h2 class="section-title mb-3">Get In Touch</h2>
          </div>
        </div>
        <div class="row  justify-content-lg-between justify-content-center mb-3">
          <div class="col-md-6 col-12">
            <form action="#" class="p-4 bg-white">
              
              <h2 class="h4 text-black mb-3">Contact Form</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control rounded-0">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="4" class="form-control rounded-0" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-black rounded-0 py-3 px-4">
                </div>
              </div>

  
            </form>
          </div>
        <div class="col-md-6 col-12">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14731.157646944679!2d88.4500778!3d22.6243378!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1599734400947!5m2!1sen!2sin" width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
       </div>   
        </div>
      </div>
    </div>
</section>
@include('footer');