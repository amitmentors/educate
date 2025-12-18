<?php
session_start();
include_once('includes/config.php');
?>

<!doctype html>
<html class="no-js" lang="zxx">


<head>
  <?php include_once('includes/header.php'); ?>

  <style>
      .it-breadcrumb-bg {
    background-image: url("assets/img/school.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 20%;  /* 👈 fine-tuned */
    height: 250px;                 /* fixed height */
    display: flex;
    align-items: center;
    position: relative;
}

@media (max-width: 768px) {
    .it-breadcrumb-bg {
        min-height: 150px;
        background-position: top center;
    }
}


      </style>
</head>

<body>

   <!-- preloader -->
   <div id="preloader">
      <div class="preloader">
         <span></span>
         <span></span>
      </div>
   </div>
   <!-- preloader end  -->

   <!-- back-to-top-start  -->
   <button class="scroll-top scroll-to-target" data-target="html">
      <i class="far fa-angle-double-up"></i>
   </button>
   <!-- back-to-top-end  -->

   <!-- it-offcanvus-area-start -->
   <div class="it-offcanvas-area">
      <div class="itoffcanvas">
         <div class="it-offcanva-bottom-shape d-none d-xxl-block">
         </div>
         <div class="itoffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
         </div>
         <div class="itoffcanvas__logo">
            <a href="index.php">
               <img src="assets/img/logo.png" alt="">
            </a>
         </div>
         <div class="itoffcanvas__text">
            
         </div>
         <div class="it-menu-mobile"></div>
         <div class="itoffcanvas__info d-none">
            <h3 class="offcanva-title">Get In Touch</h3>
            <div class="it-info-wrapper mb-20 d-flex align-items-center">
               <div class="itoffcanvas__info-icon">
                  <a href="#"><i class="fal fa-envelope"></i></a>
               </div>
               <div class="itoffcanvas__info-address">
                  <span>Email</span>
                  <a href="maito:info@germinationmissionschool.com">info@germinationmi<br>ssionschool.com</a>
               </div>
            </div>
            <div class="it-info-wrapper mb-20 d-flex align-items-center">
               <div class="itoffcanvas__info-icon">
                  <a href="#"><i class="fal fa-phone-alt"></i></a>
               </div>
               <div class="itoffcanvas__info-address">
                  <span>Phone</span>
                  <a href="">+91 87091 87574 ,+91 79032 13204</a>
               </div>
            </div>
            <div class="it-info-wrapper mb-20 d-flex align-items-center">
               <div class="itoffcanvas__info-icon">
                  <a href="#"><i class="fas fa-map-marker-alt"></i></a>
               </div>
               <div class="itoffcanvas__info-address">
                  <span>Location</span>
                  <a href="" target="_blank">Germination mission school ,
                     Deohara, BIHAR </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- it-offcanvus-area-end -->

   <header class="it-header-height">

   <?php include_once('includes/navbar.php'); ?>

   </header>

   

   <main>

      <!-- breadcrumb-area-start -->
      <div class="it-breadcrumb-area it-breadcrumb-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="it-breadcrumb-content z-index-3 text-center">
               <div class="it-breadcrumb-title-box">
                  <h3 class="it-breadcrumb-title">CONTACT</h3>
               </div>
               <div class="it-breadcrumb-list">
                  <span><a href="index.php">Home</a></span>
                  <span class="dvdr">//</span>
                  <span>Contact</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
      <!-- breadcrumb-area-end -->

      <!-- contact-area-start -->
      <div class="it-contact__area pt-50 pb-40">
         <div class="container">
            <div class="it-contact__wrap fix z-index-3 p-relative">
               <div class="it-contact__shape-1 d-none d-xl-block">
                  <img src="assets/img/contact/shape-2-1.png" alt="">
               </div>
               <div class="row align-items-end">
                  <div class="col-xl-7">
                     <div class="it-contact__right-box">
                        <div class="it-contact__section-box pb-20">
                           <h4 class="it-contact__title pb-15">Get in Touch</h4>
                           
                        </div>
                        <div class="it-contact__content mb-55">
                           <ul>
                              <li>
                                 <div class="it-contact__list d-flex align-items-start">
                                    <div class="it-contact__icon">
                                       <span><i class="fa-solid fa-location-dot"></i></span>
                                    </div>
                                    <div class="it-contact__text">
                                       <span>Our Address</span>
                                       <a href="#">Germination mission school , Deohara (oposite side of petrol pump) , PS :Goh , Dist:Aurangabad,<br>
                                          State:Bihar , 824114</a> 
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="it-contact__list d-flex align-items-start">
                                    <div class="it-contact__icon">
                                       <span><i class="fa-solid fa-clock"></i></span>
                                    </div>
                                    <div class="it-contact__text">
                                       <span>Hours of Operation</span>
                                       <a href="#">Mon - Fri: 9.00am to 5.00pm</a>
                                       <span>[2nd sat Holiday]</span>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="it-contact__list d-flex align-items-start">
                                    <div class="it-contact__icon">
                                       <span><i class="fa-solid fa-phone phone"></i></span>
                                    </div>
                                    <div class="it-contact__text">
                                       <span>contact</span>
                                       <a href="">+91 87091 875774 , 79032 13204</a>
                                       <a href="mail to:info@germinationmissionschool.com">info@germinationmissionschool.com</a>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="it-contact__bottom-box d-flex align-items-center justify-content-between">
                           <div class="it-contact__scrool smooth">
                              <a href="#it-newsletter"><i class="fa-solid fa-arrow-down"></i>Customer Care</a>
                           </div>
                           <div class="it-footer-social">
                              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                              <a href="#"><i class="fa-brands fa-instagram"></i></a>
                              <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                              <a href="#"><i class="fa-brands fa-twitter"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-5">
                     <div class="it-contact__form-box">
                        <form action="#">
                           <div class="row">
                              <div class="col-12 mb-25">
                                 <div class="it-contact-input-box">
                                    <label>Name*</label>
                                    <input type="text" placeholder="Name">
                                 </div>
                              </div>
                              <div class="col-12 mb-25">
                                 <div class="it-contact-input-box">
                                    <label>Email Address*</label>
                                    <input type="email" placeholder="Email">
                                 </div>
                              </div>
                              <div class="col-12 mb-25">
                                 <div class="it-contact-input-box">
                                    <label>Phone*</label>
                                    <input type="text" placeholder="Phone">
                                 </div>
                              </div>
                              <div class="col-12 mb-25">
                                 <div class="it-contact-input-box">
                                    <label>Subject*</label>
                                    <input type="text" placeholder="Subject">
                                 </div>
                              </div>
                              <div class="col-12 mb-25">
                                 <div class="it-contact-textarea-box">
                                    <label>Message</label>
                                    <textarea placeholder="Message"></textarea>
                                 </div>
                              </div>
                           </div>
                        </form>
                        <button type="submit" class="it-btn">
                           <span>
                           Send Message
                              <svg width="17" height="14" viewBox="0 0 17 14" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M11 1.24023L16 7.24023L11 13.2402" stroke="currentcolor" stroke-width="1.5"
                                 stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M1 7.24023H16" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10"
                                 stroke-linecap="round" stroke-linejoin="round" />
                             </svg>
                        </span>
                     </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact-area-end -->

      
   </main>

   <footer>
      <footer>

      <?php include_once('includes/footer.php'); ?>

   </footer>

   </footer>


   <!-- JS here -->
   <script src="assets/js/jquery.js"></script>
   <script src="assets/js/waypoints.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/slick.min.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/purecounter.js"></script>
   <script src="assets/js/wow.js"></script>
   <script src="assets/js/nice-select.js"></script>
   <script src="assets/js/swiper-bundle.js"></script>
   <script src="assets/js/isotope-pkgd.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/main.js"></script>



</body>


</html>