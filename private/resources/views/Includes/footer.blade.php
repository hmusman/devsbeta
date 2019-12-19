  <!-- Footer-->
    <footer class="pt-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 pb-4 mb-2"><a class="navbar-brand d-inline-block mb-4" href="index.html"><img src="{{url('assets/img/logo/DevsBeta.png')}}" alt="CreateX"></a>
            <p class="text-sm text-muted">We provide the best solutions in the dimensions of Web Devlopment all over the globe. </p>
            <ul class="list-icon text-sm pb-2">
              <li><i class="fe-icon-map-pin text-muted"></i><a class="navi-link" href="https://www.google.com/maps/place/Mediacom+Trade+City./@31.4133092,73.1118226,17z/data=!3m1!4b1!4m5!3m4!1s0x392268728e4191ed:0xbe1ab0c837486dae!8m2!3d31.4133046!4d73.1140113?hl=en">&nbsp;MediaCom Plaza ,Kohenoor City Faisalabad Pakistan</a></li>
              <li><i class="fe-icon-phone text-muted"></i><a class="navi-link" href="tel:+1212477690000">&nbsp;+92 333 994 1145</a></li>
              <li><i class="fe-icon-mail text-muted"></i><a class="navi-link" href="mailto:info@devsbeta.com">&nbsp;info@devsbeta.com</a></li>
            </ul>
            <a class="social-btn sb-style-6 sb-facebook" href="https://www.facebook.com/devsbeta/"><i class="socicon-facebook"></i>
            </a>
            <a class="social-btn sb-style-6 sb-twitter" href="https://www.twitter.com/devsbeta/?hl=en"><i class="socicon-twitter"></i>
            <!--</a>-->
            <a class="social-btn sb-style-6 sb-linkedin" href="https://www.linkedin.com/company/devsbeta/"><i class="socicon-linkedin"></i>
            </a>
            <a class="social-btn sb-style-6 sb-instagram" href="https://www.instagram.com/devsbeta/?hl=en"><i class="socicon-instagram"></i>
            </a>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-0">
              <h4 class="widget-title">Useful Links</h4>
            </div>
                <div class="widget widget-categories">
                  <ul>
                    <li><a href="{{url('about')}}">About Us</a></li>
                    <li><a href="{{url('services')}}">Services We Provide</a></li>
                    <li><a href="{{url('news')}}">Latest News</a></li>
                    <li><a href="{{url('help-center')}}">Help Center</a></li>
                    <li><a href="{{url('terms-and-conditions')}}">Terms &amp; Conditions</a></li>
                  </ul>
                </div>
          </div>
          <div class="col-lg-3">
                 <div class="widget">
              <h4 class="widget-title">Contact</h4>
              <div class="widget widget-categories">
                  <ul>
                    <li><a href="">DevsBeta Software House </a></li>
                    <li><a href="https://wa.me/923339941145">One click Whatsapp<br><img src="https://img.icons8.com/small/24/1aa687/whatsapp.png">+92 333 99441145</a></li>
                  </ul>
                </div>
            </div>
              </div>
          <div class="col-lg-3">
            <div class="widget">
              <h4 class="widget-title">Our Offices</h4>
           <div class="map-img-wrapper">
             <img src="{{url('assets/img/logo/Map1-footer.jpg')}}" style="300x165">
           </div>
         </div>
          </div>
        </div>
        <hr>
        <div class="container pt-5">
         
          <div class="d-md-flex justify-content-between align-items-center py-4 text-center text-md-left">
            <div class="order-2">
              <a class="footer-link text-success " href="{{url('about')}}">About</a><a class="footer-link ml-3 text-success" href="{{url('contactus')}}">Contact us</a><a class="footer-link ml-3 text-success" href="{{url('privacy-policy')}}">Privacy Policy</a></div>
            <p class="m-0 text-sm order-1"><span class='text-muted'>© All rights reserved</span> 
              <a href='{{url('/')}}' class='d-inline-block navi-link'>by DEVSBETA</a></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href=""><i class="fe-icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script type="text/javascript" src="{{url('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('assets/js/vendor.min.js')}}"></script>
    <script src="{{url('assets/js/theme.min.js')}}"></script>
   @yield('script')
  </body>
</html>