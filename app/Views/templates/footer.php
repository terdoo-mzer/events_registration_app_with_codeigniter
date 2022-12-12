         <!-- end request -->
         <!--  footer -->
         <footer>
            <div class="footer">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                           <div class="col-md-8 col-sm-6">
                              <div class="address">
                                 <h3>Address </h3>
                              </div>
                              <ul class="location_icon">
                                 <li>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </li>
                              </ul>
                           </div>
                           <div class="col-md-4 col-sm-6">
                              <div class="address">
                                 <h3>Links</h3>
                                 <ul class="Menu_footer">
                                    <li class="active"> <a href="#">Home</a> </li>
                                    <li><a href="#about">About </a> </li>
                                    <li><a href="#work">Work</a> </li>
                                    <li><a href="#contact">Contact </a> </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                           <div class="col-md-5 col-sm-6">
                              <div class="address">
                                 <h3>Follow Us</h3>
                              </div>
                              <ul class="social_icon">
                                 <li><a href="#">Facebook <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="#"> Twitter<i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="#"> Linkedin<i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                 <li><a href="#"> Youtube<i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                 <li><a href="#"> Instagram<i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                           <div class="col-md-7 col-sm-6">
                              <div class="address">
                                 <h3>Newsletter </h3>
                              </div>
                              <form class="bottom_form">
                                 <input class="enter" placeholder="Enter Your Email" type="text" name="Enter Your Email">
                                 <button class="sub_btn">subscribe</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="copyright">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <p>Copyright 2019 All Right Reserved By <a href="#"> Free html Templates</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- end footer -->
         </div>
         <div class="overlay"></div>
         <!-- Javascript files-->
         <script src="js/jquery.min.js"></script>
         <script src="js/popper.min.js"></script>
         <script src="js/bootstrap.bundle.min.js"></script>
         <script src="js/jquery-3.0.0.min.js"></script>
         <!-- sidebar -->
         <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
         <script src="js/custom.js"></script>
         <script src="<?= base_url()?>/js/formProcessor.js"></script>
         <script type="text/javascript">
            $(document).ready(function() {
               $("#sidebar").mCustomScrollbar({
                  theme: "minimal"
               });

               $('#dismiss, .overlay').on('click', function() {
                  $('#sidebar').removeClass('active');
                  $('.overlay').removeClass('active');
               });

               $('#sidebarCollapse').on('click', function() {
                  $('#sidebar').addClass('active');
                  $('.overlay').addClass('active');
                  $('.collapse.in').toggleClass('in');
                  $('a[aria-expanded=true]').attr('aria-expanded', 'false');
               });
            });
         </script>
         <script>
            $(document).ready(function() {
               $(".fancybox").fancybox({
                  openEffect: "none",
                  closeEffect: "none"
               });

               $(".zoom").hover(function() {

                  $(this).addClass('transition');
               }, function() {

                  $(this).removeClass('transition');
               });
            });
         </script>
         </body>

         </html>