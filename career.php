<?php
session_start();
include_once('includes/config.php');
?>

<!doctype html>
<html class="no-js" lang="zxx">


<head>
   <?php include_once('includes/header.php'); ?>

   <style>
      .job-box{
  border: 2px dotted #28a745;
  padding: 20px;
  border-radius: 10px;
  background: #fffafa;
}

      </style>

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
                  <h3 class="it-breadcrumb-title">CAREER</h3>
               </div>
               <div class="it-breadcrumb-list">
                  <span><a href="index.php">Home</a></span>
                  <span class="dvdr">//</span>
                  <span>Career</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
      <!-- breadcrumb-area-end -->

        
      

      <!-- contact-area-start -->
      <div id="contact" class="it-contact-area it-contact-style-2 it-contact-bg p-relative pt-50 pb-20"
         data-background="assets/img/contact/bg-1-2.jpg">
         <div class="it-contact-shape-1 d-none d-xxl-block">
            <!-- <img src="assets/img/contact/shape-1-1.png" alt=""> -->
         </div>
         <div class="it-contact-shape-3 z-index-5 d-none d-xxl-block">
            <!-- <img src="assets/img/contact/shape-1-6.png" alt=""> -->
         </div>
         <div class="it-contact-shape-4 d-none d-xxl-block">
            <!-- <img src="assets/img/contact/shape-1-4.png" alt=""> -->
         </div>
         <div class="it-contact-shape-5 d-none d-xxl-block">
            <!-- <img src="assets/img/contact/shape-1-7.png" alt=""> -->
         </div>
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-12 col-lg-6">
                  <div class="it-contact-left">
                     <div class="it-contact-title-box pb-20">
                        
                        <h2 class="it-section-title-3">WE ARE HIRING !!!</h2>
                     </div>
                     <div class="container mb-4">
                        <div class="row align-items-center job-box">

                          <!-- LEFT : JOB DETAILS -->
                       <div class="col-lg-4 col-md-6">
                           <h5 class="text-primary">English Teacher</h5>
                           <h6 class="fw-bold">Germination Mission School</h6>

                            <ul class="mt-2">
                            <li><b>Salary:</b> 10000 Rs. Per Month</li>
                            <li><b>Openings:</b> 4 Openings</li>
                            <li><b>Work Type:</b> School</li>
                           </ul>
                           </div>

                          <!-- MIDDLE : CONTACT DETAILS -->
                          <div class="col-lg-5 col-md-6">
                          <h6 class="fw-bold">Contact Details :</h6>
                          <p>
                         <b>Address:</b> 2nd Floor, Opposite Side Of Petrol Pump,  
                            Aurangabad, Bihar
                        </p>
                        <p><b>Contact Person:</b> Amitabh Kumar</p>
                        </div>

                     <!-- RIGHT : BUTTON -->
                     <div class="col-lg-3 text-lg-end text-md-start">
                      <a href="#" class="btn btn-primary px-4">
                         MORE DETAILS
                        </a>
                      </div>

                         </div>
                        </div>

                    
                     
                  </div>
               </div>
               <!-- <div class="col-xl-5 col-lg-6">
                  <div class="it-contact-wrap" data-background="assets/img/contact/bg-5.jpg">
                     <h4 class="it-contact-title text-black">Apply Online</h4>
                     
                     <form action="#">
                        <div class="row">
                           <div class="col-12 mb-15">
                              <div class="it-contact-input-box">
                                 <input type="text" placeholder="Your Name">
                              </div>
                           </div>
                           <div class="col-12 mb-15">
                              <div class="it-contact-input-box">
                                 <input type="email" placeholder="Your Email">
                              </div>
                           </div>
                           <div class="col-md-6 col-12 mb-15">
                              <div class="it-contact-select mb-30">
                                 <select>
                                    <option>Instructor</option>
                                    <option>01 Year</option>
                                    <option>02 Year</option>
                                    <option>03 Year</option>
                                    <option>04 Year</option>
                                    <option>05 Year</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6 col-12 mb-15">
                              <div class="it-contact-select mb-30">
                                 <select>
                                    <option>Department</option>
                                    <option>01 Year</option>
                                    <option>02 Year</option>
                                    <option>03 Year</option>
                                    <option>04 Year</option>
                                    <option>05 Year</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6 col-12 mb-15">
                              <div class="it-contact-select mb-30">
                                 <select>
                                    <option>Campus</option>
                                    <option>01 Year</option>
                                    <option>02 Year</option>
                                    <option>03 Year</option>
                                    <option>04 Year</option>
                                    <option>05 Year</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6 col-12 mb-15">
                              <div class="it-contact-select mb-30">
                                 <select>
                                    <option>Level</option>
                                    <option>01 Year</option>
                                    <option>02 Year</option>
                                    <option>03 Year</option>
                                    <option>04 Year</option>
                                    <option>05 Year</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </form>
                     <button type="submit" class="it-btn black-bg">
                        <span>
                           submit now
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
               </div>-->
            </div>
         </div>
      </div> 
      <!-- contact-area-end -->
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


<!-- Mirrored from ordainit.com/html/educate/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Dec 2025 06:27:22 GMT -->
</html>