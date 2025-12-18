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
            <p></p>
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
         <!-- header-area-end -->

   </header>

   <main>

      <!-- breadcrumb-area-start -->
      <div class="it-breadcrumb-area it-breadcrumb-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="it-breadcrumb-content z-index-3 text-center">
               <div class="it-breadcrumb-title-box">
                  <h3 class="it-breadcrumb-title">TESTIMONIAL</h3>
               </div>
               <div class="it-breadcrumb-list">
                  <span><a href="index.php">Home</a></span>
                  <span class="dvdr">//</span>
                  <span>Testimonial</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
      <!-- breadcrumb-area-end -->

        
      <!-- testimonial-area-start -->
      <div class="it-testimonial-5-area it-testimonial-style-2 p-relative pt-50 pb-30">
         <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-4 mb-30">
                  <div class="it-testimonial-5-item p-relative z-index">
                     <div class="it-testimonial-3-author-box d-flex align-items-center mb-20">
                        <div class="it-testimonial-3-avata">
                           <img src="https://germinationmissionschool.com/assets/female.png" alt="">
                        </div>
                        <div class="it-testimonial-3-author-info">
                           <h5>Mrs. Anjali Verma</h5>
                           
                        </div>
                     </div>
                     <div class="it-testimonial-5-content z-index-5">
                        <div class="it-testimonial-5-star pb-10">
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="it-testimonial-5-text">
                        <p>“Germination Mission School provides a safe, positive environment where children truly grow. The curriculum, discipline, and teacher support helped my son improve academically and socially. I am satisfied with regular communication and school values overall.”</p>
                        </div>
                     </div>
                     <div class="it-testimonial-5-quote d-none d-xl-block">
                        <img src="assets/img/testimonial/quote-1-2.png" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg- mb-30">
                  <div class="it-testimonial-5-item p-relative z-index">
                     <div class="it-testimonial-3-author-box d-flex align-items-center mb-20">
                        <div class="it-testimonial-3-avata">
                           <img src="https://germinationmissionschool.com/assets/male.png" alt="">
                        </div>
                        <div class="it-testimonial-3-author-info">
                           <h5>Mr. Suresh Patel</h5>
                           
                        </div>
                     </div>
                     <div class="it-testimonial-5-content z-index-5">
                        <div class="it-testimonial-5-star pb-10">
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="it-testimonial-5-text">
                         <p>“My daughter enjoys learning at Germination Mission School every day. The teachers encourage curiosity, creativity, and discipline. I have seen remarkable improvement in her confidence, communication skills, and responsibility since joining the school last year.”</p>
                        </div>
                     </div>
                     <div class="it-testimonial-5-quote d-none d-xl-block">
                        <img src="assets/img/testimonial/quote-1-2.png" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 mb-30">
                  <div class="it-testimonial-5-item p-relative z-index">
                     <div class="it-testimonial-3-author-box d-flex align-items-center mb-20">
                        <div class="it-testimonial-3-avata">
                           <img src="https://germinationmissionschool.com/assets/male.png" alt="">
                        </div>
                        <div class="it-testimonial-3-author-info">
                           <h5>Mr. Rajesh Sharma</h5>
                           
                        </div>
                     </div>
                     <div class="it-testimonial-5-content z-index-5">
                        <div class="it-testimonial-5-star pb-10">
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="it-testimonial-5-text">
                         <p>“Germination Mission School has given my child strong academic foundations, confidence, and values. Teachers are caring, disciplined, and approachable. I appreciate the balanced focus on studies, activities, and character building throughout the year consistently always.”</p>
                        </div>
                     </div>
                     <div class="it-testimonial-5-quote d-none d-xl-block">
                        <img src="assets/img/testimonial/quote-1-2.png" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 mb-30">
                  <div class="it-testimonial-5-item p-relative z-index">
                     <div class="it-testimonial-3-author-box d-flex align-items-center mb-20">
                        <div class="it-testimonial-3-avata">
                           <img src="https://germinationmissionschool.com/assets/male.png" alt="">
                        </div>
                        <div class="it-testimonial-3-author-info">
                           <h5>Mr. Amit Singh</h5>
                           
                        </div>
                     </div>
                     <div class="it-testimonial-5-content z-index-5">
                        <div class="it-testimonial-5-star pb-10">
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="it-testimonial-5-text">
                          <p>“I am impressed with Germination Mission School's teaching approach. Academics and activities are well balanced. My son has improved in discipline, communication, and confidence. Teachers guide students patiently and maintain strong moral values daily consistently.”</p>
                        </div>
                     </div>
                     <div class="it-testimonial-5-quote d-none d-xl-block">
                        <img src="assets/img/testimonial/quote-1-2.png" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 mb-30">
                  <div class="it-testimonial-5-item p-relative z-index">
                     <div class="it-testimonial-3-author-box d-flex align-items-center mb-20">
                        <div class="it-testimonial-3-avata">
                           <img src="https://germinationmissionschool.com/assets/female.png" alt="">
                        </div>
                        <div class="it-testimonial-3-author-info">
                           <h5>Mrs. Neha Gupta</h5>
                           
                        </div>
                     </div>
                     <div class="it-testimonial-5-content z-index-5">
                        <div class="it-testimonial-5-star pb-10">
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="it-testimonial-5-text">
                          <p>“Germination Mission School focuses on individual attention and values. My child feels motivated to learn daily. Teachers are supportive and disciplined. The school environment is clean, safe, and encourages positive behavior and confidence always consistently.”</p>
                        </div>
                     </div>
                     <div class="it-testimonial-5-quote d-none d-xl-block">
                        <img src="assets/img/testimonial/quote-1-2.png" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 mb-30">
                  <div class="it-testimonial-5-item p-relative z-index">
                     <div class="it-testimonial-3-author-box d-flex align-items-center mb-20">
                        <div class="it-testimonial-3-avata">
                           <img src="https://germinationmissionschool.com/assets/male.png" alt="">
                        </div>
                        <div class="it-testimonial-3-author-info">
                           <h5>Mr. Anant Singh</h5>
                           
                        </div>
                     </div>
                     <div class="it-testimonial-5-content z-index-5">
                        <div class="it-testimonial-5-star pb-10">
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                           <i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="it-testimonial-5-text">
                        <p>“I am impressed with Germination Mission School's teaching approach. Academics and activities are well balanced. My son has improved in discipline, communication, and confidence. Teachers guide students patiently and maintain strong moral values daily consistently.”</p>
                        </div>
                     </div>
                     <div class="it-testimonial-5-quote d-none d-xl-block">
                        <img src="assets/img/testimonial/quote-1-2.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- testimonial-area-end -->

      <!-- cta-area-start -->
      <div class="it-cta-area it-cta-height black-bg p-relative">
         <div class="it-cta-bg d-none d-xl-block">
            <img src="assets/img/about/cta-1.png" alt="">
         </div>
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-9 col-lg-7 col-md-7">
                  <div class="it-cta-content">
                     <h4 class="it-cta-title">"Begin Your Journey with Germination mission school "</h4>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-5 col-md-5">
                  <div class="it-cta-button text-md-end">
                     <a class="it-btn-white yellow-bg" href="contact.php">
                        <span>
                           Contact Us
                           <svg width="17" height="14" viewBox="0 0 17 14" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M11 1.24023L16 7.24023L11 13.2402" stroke="currentcolor" stroke-width="1.5"
                                 stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M1 7.24023H16" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10"
                                 stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- cta-area-end -->

      
      

      

   </main>

   <footer>
      <?php include_once('includes/footer.php'); ?>

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