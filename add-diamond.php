<?php
if(@$_POST['buySubmit']){
  $amount=@$_REQUEST['amt'];
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Check Out | Free Fire </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Shreethemes" />
    <meta name="Version" content="v3.0.0" />
    <link rel="shortcut icon" href="img/android-chrome-512x512.png">
    <link href="theme/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="theme/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="theme/css/tiny-slider.css" />
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
    <header id="topnav" class="defaultscroll sticky">
      <div class="container">
        <div>
          <a class="logo" href="index.php">
            <img src="img/fff.png" height="60" alt="">
          </a>
        </div>
        <div class="buy-button">
          <a href="index.php"class="btn btn-danger" >Logout</a>
        </div>
      </header>
      <section class="section">
        <div class="container">
          <div class="row">
            <div class="col-sm-8"></div>        
            <br><br><br><br>
            <div class="col-sm-4">
              <div class="rounded shadow-lg p-4">
                <div class="d-flex mb-4 justify-content-between">
                 <img src="img/diamondmax.png" class="me-3" height="50" alt="">
                 <h5>1 Items</h5>
               </div>
               <div class="table-responsive">
                <table class="table table-center table-padding mb-0">
                  <tbody>
                    <tr>
                      <td class="h6 border-0">Diamond</td>
                      <td class="text-end fw-bold border-0"><?php echo @$_REQUEST['diamonds'];?></td>
                    </tr>
                    <tr>
                      <td class="h6">Bonus</td>
                      <td class="text-end fw-bold">+<?php echo @$_REQUEST['bonus'];?></td>
                    </tr>
                    <tr>
                      <td class="h6">Total Diamond</td>
                      <td class="text-end fw-bold"><font color=""><?php echo @$_REQUEST['total_diamonds'];?></font></td>
                    </tr>

                    <tr>
                      <td class="h6">Price</td>
                      <td class="text-end fw-bold">₹<?php echo @$_REQUEST['price_amt'];?></td>
                    </tr>
                    <tr class="bg-light">
                      <td class="h5 fw-bold">Sub Total</td>
                      <td class="text-end text-primary h4 fw-bold">₹ <?php echo @$_REQUEST['price_amt'];?></td>
                    </tr>
                  </tbody>
                </table>
                <form method="post" action="diamond-checkout.php">
                  <input type="hidden" name="amt" value="<?php echo @$_REQUEST['price_amt'];?>">
                  <div class="mt-4 pt-2">
                    <div align="center" class="d-grid">
                      <input type="submit" class="btn btn-primary" name="submit" value="Place Order">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-8 mt-4 mt-sm-0 pt-2 pt-sm-0"></div>
          </div>
        </div>
      </section>
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
              <a href="#" class="logo-footer">
                <img src="img/fff.png" height="60" alt="">
              </a>
              <p class="mt-4">TRADEMARKS: All trademarks and other identifying marks are owned by their respective owners. Please visit the company's website for more details.</p>
            </div>
            <div class="col-lg-3 col-md-4 col-12  mt-sm-0 pt-2 pt-sm-0"></div>
            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
              <h5 class="text-light footer-head">Usefull Links</h5>
              <ul class="list-unstyled footer-list mt-4">
                <li><a href="refund.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Refund</a></li>
                <li><a href="terms-conditions.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Terms and Conditions</a></li>
                <li><a href="privacy-policy.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
      <footer class="footer footer-bar">
        <div class="container text-center">
          <div class="row align-items-center">
            <div class="col-sm-6">
              <div class="text-sm-start">
                <p class="mb-0">© <script>
                  document.write(new Date().getFullYear())
                </script> Gameskharido - Design by <a href="#" target="_blank" class="text-reset">Gameskharido </a>.</p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
      <script src="theme/js/bootstrap.bundle.min.js"></script>
      <script src="theme/js/tiny-slider.js"></script>
      <script src="theme/js/tiny-slider-init.js"></script>
      <script src="theme/js/parallax.js"></script>
      <script src="theme/js/typed.js"></script>
      <script src="theme/js/typed.init.js"></script>
      <script src="theme/js/feather.min.js"></script>
      <script src="theme/js/app.js"></script>
      <script>
        $(document).bind("contextmenu",function(e) {
         e.preventDefault();
       });
     </script>
   </body>
   </html>
   <?php
 }else{
  header("Location: diamonds.php");
} 
?> 
