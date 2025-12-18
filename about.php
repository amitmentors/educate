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
         <div class="itoffcanvas__info d-none" >
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
      <!-- <div class="it-breadcrumb-area it-breadcrumb-bg" data-background="assets/img/school.png">
         <div class="container">
            <div class="row ">
               <div class="col-md-12">
                  <div class="it-breadcrumb-content z-index-3 text-center">
                     <div class="it-breadcrumb-title-box">
                        <h3 class="it-breadcrumb-title">about us</h3>
                     </div>
                     <div class="it-breadcrumb-list-wrap">
                        <div class="it-breadcrumb-list">
                           <span><a href="index.html">home</a></span> 
                           <span class="dvdr">//</span>
                           <span>about us</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
<div class="it-breadcrumb-area it-breadcrumb-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="it-breadcrumb-content z-index-3 text-center">
               <div class="it-breadcrumb-title-box">
                  <h3 class="it-breadcrumb-title">About Our School</h3>
               </div>
               <div class="it-breadcrumb-list">
                  <span><a href="index.php">Home</a></span>
                  <span class="dvdr">//</span>
                  <span>About Our School</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

      <!-- breadcrumb-area-end -->

       <!-- about-area-start -->
      <div id="about" class="it-about-2-area p-relative pt-30 pb-30">
         <div class="it-about-2-shape-2 d-none d-xxl-block">
            <!-- <img src="assets/img/about/shape-2-2.png" alt=""> -->
         </div>
         
         <div class="container">
            <div class="row align-items-end">
               <div class="col-xl-4 col-lg-4 order-1 order-lg-0 d-flex justify-content-end ">
                  <div class="it-about-2-thumb-wrap d-flex justify-content-between mx-auto">
                     <div class="it-about-2-thumb p-relative mt-20">
                        <!-- <img src="assets/img/about/thumb-sm-7.jpg" alt="" style="width:100%; max-width:520px; height:420px; transform: scale(1.3);"> -->

                        <img src="assets/img/img1.jpg" alt="" width="100%">


                        <div class="it-about-2-shape-1 d-none d-xxl-block">
                           <!-- <img src="assets/img/about/shape-2-1.png" alt="" > -->
                        </div>
                     </div>
                     <!-- <div class="it-about-2-thumb">
                        <img src="assets/img/about/thumb-2-2.jpg" alt="">
                     </div> -->
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 order-0 order-lg-1">
                  <div class="it-about-2-right">
                     <div class="it-about-2-title-box pb-25">
                        <!-- <span class="it-section-subtitle-2">our about us</span> -->
                        <h4 class="it-section-title">We Are a High School With <br>
                           5 Years Of Experience.
                        </h4>
                     </div>
                     <div class="it-about-2-text pb-5">
                        <p>We are a high school with 4 years of experience in providing quality education. 
                           Our school focuses on the overall development of students through good teaching, discipline, and a supportive learning environment. 
                           We believe in building strong academic foundations along with moral values to help students grow confidently and responsibly</p>
                     </div>
                     <!-- <div class="it-about-2-text-2 mb-30">
                        <span>Standard dummy text ever since the unknown
                           scramble make a type specimen book</span>
                     </div> -->
                     <div class="it-about-2-bottom d-flex justify-content-between align-items-end">
                        <div class="it-about-2-icon-wrap">
                           <div class="it-about-2-icon mb-25 d-flex align-items-center">
                              <img src="assets/img/about/icon-1-1.png" alt="">
                              <span>Flexible Classes</span>
                           </div>
                           <div class="it-about-2-icon mb-35 d-flex align-items-center">
                              <img src="assets/img/about/icon-1-2.png" alt="">
                              <span>Digital & Smart Classrooms</span>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about-area-end -->

      <!-- funfact-area-start -->
      <div class="it-funfact-area z-index-5 pt-10 pb-40">
         <div class="container">
            <div class="it-funfact-bg-wrap theme-bg" data-background="assets/img/funfact/funfact-bg.png">
               <div class="row gx-0">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="it-funfact-item d-flex align-items-center">
                        <div class="it-funfact-icon">
                           <span><i class="flaticon-teacher"></i></span>
                        </div>
                        <div class="it-funfact-content">
                           <h6><i class="purecounter" data-purecounter-duration="1"
                        data-purecounter-end="5">0</i></h6>
                           <span>Years of Excellence</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="it-funfact-item d-flex align-items-center">
                        <div class="it-funfact-icon">
                           <span><i class="flaticon-completed-task"></i></span>
                        </div>
                        <div class="it-funfact-content">
                           <h6><i class="purecounter" data-purecounter-duration="1"
                        data-purecounter-end="1000">0</i></h6>
                           <span>Happy Parents</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="it-funfact-item d-flex align-items-center">
                        <div class="it-funfact-icon">
                           <span><i class="flaticon-customer-review"></i></span>
                        </div>
                        <div class="it-funfact-content">
                           <h6><i class="purecounter" data-purecounter-duration="1"
                        data-purecounter-end="20"></i></h6>
                           <span>Total Class Room</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="it-funfact-item d-flex align-items-center">
                        <div class="it-funfact-icon">
                           <span><i class="flaticon-customer-review"></i></span>
                        </div>
                        <div class="it-funfact-content">
                           <h6><i class="purecounter" data-purecounter-duration="1"
                        data-purecounter-end="16"></i></h6>
                           <span>Qualified Teachers</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- funfact-area-end -->

    <!-- cta-area-start -->
      <div class="it-cta-area it-cta-height black-bg p-relative pt-30 pb-30">
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