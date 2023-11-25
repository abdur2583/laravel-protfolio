@extends('layout.app')

@section('content')
		<!-- ==========================
        CONTACT SECTION
        =========================== -->
        <section class="text-center section-padding contact-wrap" id="contact">
            <!-- To Top Button -->
            <a href="index.html#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
            <div class="container">
              <!-- Headline -->
              <div class="row">
                <div class="col-md-12">
                  <h1 class="arrow">Drop <span>me</span> a line</h1>
                </div>
              </div>
              <div class="row contact-details">
                <!-- Adress Box -->
                <div class="col-md-4">
                  <div class="dark-box box-hover">
                    <h2><i class="fa fa-map-marker"></i><span>Address</span></h2>
                    <p>23 Ipsum street, New York</p>
                  </div>
                </div>
                <!-- Phone Number Box -->
                <div class="col-md-4">
                  <div class="dark-box box-hover">
                    <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                    <p>+12 345 6789</p>
                  </div>
                </div>
                <!-- E-Mail Box -->
                <div class="col-md-4">
                  <div class="dark-box box-hover">
                    <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
                    <p><a href="index.html#">info@themewagon.com</a></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- Google Maps (Change your Settings below) -->
                <div class="col-md-6">
                  <div id="googlemaps"></div>
                </div>
                <!-- Contact Form -->
                <div class="col-md-6 contact">
                   <form role="form">
                              <!-- Name -->
                              <div class="row">
                                  <div class="col-md-6">
                                      <!-- E-Mail -->
                                      <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Your name">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <!-- Phone Number -->
                                      <div class="form-group">
                                          <input type="email" class="form-control" placeholder="Email address">
                                      </div>
                                  </div>
                              </div>
                              <!-- Message Area -->
                              <div class="form-group">
                                  <textarea class="form-control" placeholder="Write you message here..." style="height:232px;"></textarea>
                              </div>
                              <!-- Subtmit Button -->
                              <button type="submit" class="btn btn-send">
                                  Send message
                              </button>
                          </form>
                </div>
              </div>
              <br>
              <!-- Social Buttons - use font-awesome, past in what you want -->
              <div class="row">
                <div class="col-md-12">
                  <ul class="social-buttons">
                    <li><a href="index.html#" class="social-btn"><i class="fa fa-dribbble"></i></a></li><!-- dribble -->
                    <li><a href="index.html#" class="social-btn"><i class="fa fa-twitter"></i></a></li><!-- twitter -->
                    <li><a href="index.html#" class="social-btn"><i class="fa fa-facebook"></i></a></li><!-- facebook -->
                    <li><a href="index.html#" class="social-btn"><i class="fa fa-deviantart"></i></a></li><!-- deviantart -->
                    <li><a href="index.html#" class="social-btn"><i class="fa fa-youtube"></i></a></li><!-- youtube -->
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <!-- ==========================
          CONTACT SECTION END
          =========================== -->
@endsection