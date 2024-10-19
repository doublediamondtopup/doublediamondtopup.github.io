<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Contact Form</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <meta name="author" content="Shreethemes" />
          <link rel="stylesheet" href="bootstrap.css">
      <meta name="Version" content="v3.0.0" />
      <!-- favicon -->
      <link rel="shortcut icon" href="img/poup.jpg">
      <!-- Bootstrap -->
      <link href="theme/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <!-- Icons -->
      <link href="theme/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
      <!-- Slider -->
      <link rel="stylesheet" href="theme/css/tiny-slider.css" />
      <!-- Main Css -->
      <link href="theme/css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />
      <link href="theme/css/colors/default.css" rel="stylesheet" id="color-opt">
      <style>
         .fea.icon-ex-md {
         height: 49px;
         width: 54px;
         }
      </style>
      
   </head>
   <body>
      <!-- Navbar STart -->
      <header id="topnav" class="defaultscroll sticky">
         <div class="container">
            <!-- Logo container-->
            <div>
               <a class="logo" href="/">
               <img src="img/fff.png" height="60" alt="">
               </a>
            </div>
            <div class="buy-button">
               <a href="javascript:void(0)"data-bs-toggle="modal" data-bs-target="#login" class="btn btn-primary" >Log-In</a>
            </div>
            <!--end login button-->
            <!-- End Logo container-->
            
             
         <!--end container-->
      </header>
      <!--end header-->
</head>
<body>
<br/><br/><br/>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2"> Contact Us </h2>
                        <hr>
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="UName" placeholder="User Name" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
      <!-- Footer Start -->
      <footer class="footer">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                  <a href="#" class="logo-footer">
                  <img src="img/fff.png" height="60" alt="">
                  </a>
                  <p class="mt-4">TRADEMARKS: All trademarks and other identifying marks are owned by their respective owners. Please visit the company's website for more details.</p>
                  <br/>
               </div>
               <!--end col-->
               <div class="col-lg-3 col-md-4 col-12  mt-sm-0 pt-2 pt-sm-0">
               </div>
               <!--end col-->
               <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                  <h5 class="text-light footer-head">Useful Links</h5>
                  <ul class="list-unstyled footer-list mt-4">
                     <li><a href="refund.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Refund</a></li>
                     <li><a href="terms-conditions.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Terms and Conditions</a></li>
                     <li><a href="privacy-policy.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                    <li><a href="contact.php" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Contact Us</a></li>
                  </ul>
               </div>
               <!--end col-->
            </div>
            <!--end row-->
         </div>
         <!--end container-->
      </footer>
      <!--end footer-->
      <footer class="footer footer-bar">
         <div class="container text-center">
            <div class="row align-items-center">
               <div class="col-sm-6">
                  <div class="text-sm-start">
                     <p class="mb-0">
                
 © <script>
                           document.write(new Date().getFullYear())
                        </script> Gameskharido - Design by <a href="http://www.sikarinfotech.com/ target="_blank" class="text-reset">Free Fire </a>

                     </p>
                  </div>
               </div>
               <!--end col-->
            </div>
            <!--end row-->
         </div>
         <!--end container-->
      </footer>
      <!--end footer-->
      <!-- Back to top -->
      <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i
         data-feather="arrow-up" class="icons"></i></a>
      <!-- Back to top -->
      </body>
</html>
