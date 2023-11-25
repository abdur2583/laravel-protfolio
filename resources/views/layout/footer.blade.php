		<!-- ==========================
        FOOTER SECTION
        =========================== -->
        <footer>
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center">
                  <p>All Rights Reserved. &copy; 2023 <a href="#">Abdur Rehman</a>
                </div>
              </div>
            </div>
          </footer>
          <!-- ==========================
          FOOTER SECTION END
          =========================== -->		
          
          
      <!-- jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <!-- SmoothScroll -->           
      <script type="text/javascript" src="{{ asset('assets') }}/smoothscroll/smoothscroll.js"></script>
      <!-- Bootstrap -->
      <script src="{{ asset('assets') }}/bootstrap/js/bootstrap.min.js"></script>
      <!-- Waypoints -->
      <script src="{{ asset('js') }}/waypoints.min.js"></script>
      <!-- classie.js -->
      <script src="{{ asset('js') }}/classie.js"></script>
      <!-- FlexSlider -->
      <script src="{{ asset('assets') }}/flexslider/jquery.flexslider.js"></script>
      <!-- Modernizr -->
      <script src="{{ asset('js') }}/modernizr.js"></script>
      <!-- Text Rotator -->
      <script src="{{ asset('assets') }}/textrotator/jquery.simple-text-rotator.js"></script>
      <!-- Lightbox.js -->
      <script src="{{ asset('assets') }}/lightbox/js/lightbox.min.js"></script>
      <!-- Google Maps --> 
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeKBBPJTG3v5w3cNPAgM6ZsJiPyL1mP_o&amp;sensor=false"></script>
      <!-- Theme JavaScript Core -->
      <script src="{{ asset('js') }}/main.js"></script>
      <script src="{{ asset('js') }}/script.js"></script>
  
      <!-- GOOGLE MAPS DATA -->
      <script type="text/javascript">
      // When the window has finished loading create our google map below
          google.maps.event.addDomListener(window, 'load', init);
      
          function init() {
              // Basic options for a simple Google Map
              // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
              var mapOptions = {
                  // How zoomed in you want the map to start at (always required)
                  zoom: 15,
                  
                  scrollwheel: false,
  
                  // The latitude and longitude to center the map (always required)
                  center: new google.maps.LatLng(40.68961985411178, -74.01618003845215), // New York 
  
                  // How you would like to style the map. 
                  // This is where you would paste any style found on Snazzy Maps.
                  styles: [	{		featureType:'water',		stylers:[{color:'#F2F2F2'},{visibility:'on'}]	},{		featureType:'landscape',		stylers:[{color:'#FFFFFF'}]	},{		featureType:'road',		stylers:[{saturation:-100},{lightness:45}]	},{		featureType:'road.highway',		stylers:[{visibility:'simplified'}]	},{		featureType:'road.arterial',		elementType:'labels.icon',		stylers:[{visibility:'off'}]	},{		featureType:'administrative',		elementType:'labels.text.fill',		stylers:[{color:'#ADADAD'}]	},{		featureType:'transit',		stylers:[{visibility:'off'}]	},{		featureType:'poi',		stylers:[{visibility:'off'}]	}]
              };
  
              // Get the HTML DOM element that will contain your map 
              // We are using a div with id="map" seen below in the <body>
              var mapElement = document.getElementById('googlemaps');
  
              // Create the Google Map using out element and options defined above
              var map = new google.maps.Map(mapElement, mapOptions);
          }
      
      </script>
      
      <!-- TEXT ROTATOR SETTINGS -->
      <script type="text/javascript">
      $(".rotate").textrotator({
        animation: "fade", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
        separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
        speed: 2000 // How many milliseconds until the next word show.
      });
      </script>
      
      </body>
  </html>