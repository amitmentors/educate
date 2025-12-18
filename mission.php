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
                  <h3 class="it-breadcrumb-title">MISSION & VISION </h3>
               </div>
               <div class="it-breadcrumb-list">
                  <span><a href="index.php">Home</a></span>
                  <span class="dvdr">//</span>
                  <span>Mission & Vision</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
      <!-- breadcrumb-area-end -->

        
      <!--about-area-start -->
      
        <div id="about" class="it-about-2-area p-relative pt-50 pb-50">
         <div class="it-about-2-shape-2 d-none d-xxl-block">
            
         </div>
         
         <div class="container">
            <div class="row align-items-end justify-content-center">
               <div class="col-md-4 ">
                  <div class="it-about-2-thumb-wrap d-flex justify-content-between">
                     <div class="it-about-2-thumb p-relative ">
                        <img src="assets/img/mission.jpg" alt="" style="width:100%; height:300px; ">
                
                           <div class="it-about-2-shape-1 d-none d-xxl-block">
                           
                        </div>
                     </div>
                     
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="it-about-3-title-box">
                     <span class="it-section-subtitle-3">
                        
                     <h2 class="it-section-title-3 pb-10">OUR MISSION:
                     </h2>
                     
                  </div>
                  <div class="it-about-3-mv-box">
                     <div class="row">
                        <div class="col-xl-12 col-md-12">
                           <div class="it-about-3-mv-item">
                              
                              <p>Our mission is to deliver reliable, innovative, and high-quality solutions that help our clients achieve sustainable growth. We are committed to excellence, integrity, and continuous improvement, ensuring that every product and service we provide creates real value and long-term impact.</p>
                           </div>
                        </div>
                        
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
   <!-- about-area-end -->
   

<div id="about" class="it-about-2-area p-relative pt-20 pb-50">
   <div class="container">
      <div class="row align-items-end justify-content-center">

         <!-- CONTENT LEFT -->
         <div class="col-xl-6 col-lg-6">
            <div class="it-about-3-title-box">
               <span class="it-section-subtitle-3"></span>

               <h2 class="it-section-title-3 pb-10">
                  OUR VISION:
               </h2>

              
            </div>

            <div class="it-about-3-mv-box">
               <div class="row">
                  <div class="col-md-12">
                     <div class="it-about-3-mv-item">
                        
                        <p>Our vision is to be a trusted leader in our industry, recognized for innovation, quality, and integrity. We aim to create lasting value for our customers, partners, and communities by delivering solutions that drive progress and sustainable success.</p>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>

         <!-- IMAGE RIGHT -->
         <div class="col-md-4">
            <div class="it-about-2-thumb-wrap d-flex justify-content-end">
               <div class="it-about-2-thumb p-relative">
                  <img src="assets/img/ourvision.jpg"
                       alt=""
                       style="width:100%; height:300px;">
               </div>
            </div>
         </div>

      </div>
   </div>
</div>


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


<!-- Mirrored from ordainit.com/html/educate/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Dec 2025 06:27:22 GMT -->
</html>