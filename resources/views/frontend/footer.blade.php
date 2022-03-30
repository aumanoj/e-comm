   <section id="contactRow" class="row contentRowPad">
       <div class="container">
           <div class="row">
               <div class="col-sm-6">
                   <div class="row m0">
                       <h4 class="contactHeading heading">contact form style</h4>
                   </div>
                   <div class="row m0 contactForm">
                       <form class="row m0" id="contactForm" method="post" name="contact" action="#">
                           <div class="row">
                               <div class="col-sm-6">
                                   <label for="name">Name *</label>
                                   <input type="text" class="form-control" name="name" id="name">
                               </div>
                               <div class="col-sm-6">
                                   <label for="email">Email *</label>
                                   <input type="email" class="form-control" name="email" id="email">
                               </div>
                           </div>
                           <div class="row m0">
                               <label for="subject">subject *</label>
                               <input type="text" class="form-control" name="subject" id="subject">
                           </div>
                           <div class="row m0">
                               <label for="message">your message</label>
                               <textarea name="message" id="message" class="form-control"></textarea>
                           </div>
                           <div class="row m0 captchaRow">
                               <img src="{{asset('assets/images/captcha.png')}}" alt=""><br>
                               <label for="captcha">Enter the above text</label>
                               <input type="text" class="form-control" name="captcha" id="captcha">
                           </div>
                           <button class="btn btn-primary btn-lg filled" type="submit">send message</button>
                       </form>
                       <div id="success">
                           <span class="green textcenter">
                               Your message was sent successfully! I will be in touch as soon as I can.
                           </span>
                       </div>
                       <div id="error">
                           <span>
                               Something went wrong, try refreshing and submitting the form again.
                           </span>
                       </div>
                   </div>
               </div>
               <div class="col-sm-6">
                   <div class="row m0">
                       <h4 class="contactHeading heading">contact info style</h4>
                   </div>
                   <div class="media contactInfo">
                       <div class="media-left">
                           <i class="fas fa-map-marker"></i>
                       </div>
                       <div class="media-body">
                           <h5 class="heading">where to reach us</h5>
                           <p>You can reach us at the following address:</p>
                           <h5>1167, LIFT WALI BUILDING, 3RD FLOOR, KUCHA MAHAJANI
                               <br>CHANDNI CHOWK, DELHI-06
                           </h5>
                       </div>
                   </div>
                   <!--contactInfo-->
                   <div class="media contactInfo">
                       <div class="media-left">
                           <i class="fas fa-envelope"></i>
                       </div>
                       <div class="media-body">
                           <h5 class="heading">Email us @</h5>
                           <p>Email your issues and suggestion for the following email addresses: </p>
                           <h5> info@bansalandsonsjewellers.com</h5>
                       </div>
                   </div>
                   <!--contactInfo-->
                   <div class="media contactInfo">
                       <div class="media-left">
                           <i class="fas fa-phone"></i>
                       </div>
                       <div class="media-body">
                           <h5 class="heading">need to call us?</h5>
                           <p>From Monday to Friday,10:00 AM - 8:00 PM, call us at:</p>
                           <h5>+91-9810080068</h5>
                       </div>
                   </div>
                   <!--contactInfo-->
                   <div class="media contactInfo">
                       <div class="media-left">
                           <i class="fas fa-question"></i>
                       </div>
                       <div class="media-body">
                           <h5 class="heading">we have great support</h5>
                           <p>We provide the best Quality of products to you.We are always here to help our lovely
                               customers.We ship our products anywhere with more secure. We provide the best Quality of
                               products to you.</p>
                       </div>
                   </div>
                   <!--contactInfo-->
               </div>
           </div>
       </div>
   </section>
   <footer class="row">
       <div class="row m0 topFooter">
           <div class="container line1">
               <div class="row footFeatures">
                   <div class="col-sm-4 footFeature">
                       <div class="media m0">
                           <div class="media-left icon"><img src="{{asset('assets/images/icons/tel24-7_2.png')}}"
                                   alt=""></div>
                           <div class="media-body texts">
                               <h4>E-mail</h4>
                               <h2 class="footer-info-h2" style="font-size: initial;">info@bansalandsonsjewellers.com
                               </h2>
                               <h2 class="footer-info-h2" style="font-size: initial;">sales@bansalandsonsjewellers.com
                               </h2>
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-4 footFeature">
                       <div class="media m0">
                           <div class="media-left icon"><img src="{{asset('assets/images/icons/tel24-7_2.png')}}"
                                   alt=""></div>
                           <div class="media-body texts">
                               <h4>Bansal and Sons Jewellers</h4>
                               <h2 class="footer-info-h2" style="font-size: initial;">Bansal and Sons Jewellers Prop.
                               </h2>
                               <h2 class="footer-info-h2" style="font-size: initial;">Tin: <br> GST: </h2>
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-4 footFeature">
                       <div class="media m0">
                           <div class="media-left icon"><img src="{{asset('assets/images/icons/shopping-bag2.png')}}"
                                   alt=""></div>
                           <div class="media-body texts">
                               <h4>Regd. Office</h4>
                               <h2 class="footer-info-h2" style="font-size: initial;">1167, Lift Wali Building, 3rd
                                   floor, Kucha Mahajani<br>Chandni Chowk, Delhi-06</h2>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="container line2">
               <div class="row">
                   <div class="col-sm-3 widget">
                       <div class="row m0">
                           <h4>About Bansal and Sons Jewellers</h4>
                           <p>We provide the best Quality of products to you.We are always here to help our lovely
                               customers.</p>
                           <ul class="list-inline">
                               <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                               <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                               <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                               <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                               <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-sm-3 widget">
                       <div class="row m0">
                           <h4>information</h4>
                           <ul class="nav">
                               <li><a href="about.php">About Us</a></li>
                               <li><a href="blog.php">Blog</a></li>
                               <li><a href="#">Careers</a></li>
                               <li><a href="#">Top Brands</a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-sm-3 widget">
                       <div class="row m0">
                           <h4>24*7 Hour support helpline</h4>
                           <ul class="nav">
                               <li><a href="#">+91-9810080068</a></li>
                               <li><a href="#">+91-9818386380</a></li>
                               <li><a href="#">+91-9999992117</a></li>
                               <li><a href="#">+91-8802878783</a></li>
                               <li><a href="#">+91-7982031621</a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-sm-3 widget">
                       <div class="row m0">
                           <h4>subscribe to our latest news</h4>
                           <form action="#" method="post" role="form">
                               <div class="input-group">
                                   <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
                                   <input type="email" class="form-control" id="subscribeEmail" name="subscribeEmail"
                                       placeholder="EMAIL ADDRESS">
                               </div>
                               <input type="submit" class="form-control" value="Subscribe" id="submit" name="submit">
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="row m0 copyRight">
           <div class="container">
               <div class="row">
                   <div class="fleft">&copy; 2021 <a href="index.php">Bansal and Sons Jewellers</a> All Rights Reserved.
                       Developed & Managed By <a href="#">JavaTpoint</a> </div>
                   <ul class="nav nav-pills fright">
                       <li><a href="index.php">Home</a></li>
                       <li><a href="about.php">about</a></li>
                       <li><a href="blog.php">blog</a></li>
                       <li><a href="contact.php">contact</a></li>
                   </ul>
               </div>
           </div>
       </div>
   </footer>
   <!--jQuery, Bootstrap and other vendor JS-->
   <!--jQuery-->
   <script src="{{URL::asset('assets/js/jquery-2.1.3.min.js')}}?t=<?=time();?>"></script>
   <!--Google Maps-->
   <script src="https://maps.googleapis.com/maps/api/js')}}?t=<?=time();?>"></script>
   <!--Bootstrap JS-->
   <script src="{{URL::asset('assets/js/bootstrap.min.js')}}?t=<?=time();?>"></script>

   <!--Owl Carousel-->
   <script src="{{URL::asset('assets/vendors/owl.carousel/js/owl.carousel.min.js')}}?t=<?=time();?>"></script>
   <!--Isotope-->
   <script src="{{URL::asset('assets/vendors/isotope/isotope-custom.js')}}?t=<?=time();?>"></script>
   <!--FlexSlider-->
   <script src="{{URL::asset('assets/vendors/flexslider/jquery.flexslider-min.js')}}?t=<?=time();?>"></script>
   <!--D-shine JS-->