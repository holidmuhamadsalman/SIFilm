<!-- <?php include 'proses-login.php';?> -->
<?php
  $username = $_SESSION['username'];
  $sql = mysqli_query($conn,"SELECT * FROM login WHERE username = '$username'");
  $data = mysqli_fetch_array($sql);
?>

<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SFilm - Best movie collections</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- icon sifilm -->
    <link rel="shortcut icon" href="assets/images/ic_sifilm.png">
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<!-- CSS here -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assetscss/animate.min.css">
    <link rel="stylesheet" href="./assets/css/magnific-popup.css">
    <link rel="stylesheet" href="./assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/flaticon.css">
    <link rel="stylesheet" href="./assets/css/odometer.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link rel="stylesheet" href="./assets/css/slick.css">
    <link rel="stylesheet" href="./assets/css/default.css">
    <link rel="stylesheet" href="./assets/css/style1.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/style-set-acc.css">
  </head>

  <body id="top">
    <!-- preloader -->
    <?php include ('./include/preloader.php');?>
    <!-- header-area -->
    <?php include('./include/navbar.php');?>
    <!-- main-area -->
    <main>
      <!-- contact-area -->
      <section class="contact-area contact-bg" data-background="./assets/images/contact_bg.jpg">
        <div class="container">
          <!-- <h1 class="title text-center">ACCOUNT SETTING</h1> -->
          <form action="proses-set-acc.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="username" value="<?=$data['username']?>">
              <div class="row">
                <div class="col-xl-3 col-lg-4">
                  <div class="contact-form-wrap">
                    <div class="widget-title mb-50">
                      <!-- <h5 class="title">Location</h5> -->
                    </div>
                    <div class="contact-info-wrap">
                    <!-- <p><span>User</span></p> -->
                      <?php 
                        if(($data['foto_user'])==null){
                          echo "<center><img src=../include/img-user/user.png width=70%></center>";?>
                          <div class="row px-2 pt-3">
                            <div class="col-md-12">
                              <div class="form-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="foto_user" name="foto_user">
                                  <label class="custom-file-label" for="foto_user">Choose file</label>
                                </div>
                              </div>
                              <i style="float: left;font-size: 11px;color: yellow;">*Abaikan jika tidak mengubah foto</i>
                            </div>
                          </div>
                        </div>
                      <?php } else {
                      echo "<center><img src=../include/img-user/$data[foto_user] width=70%></center> ";?>
                      <div class="row px-2 pt-3">
                        <div class="col-md-12">
                          <div class="form-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="foto_user" name="foto_user">
                              <label class="custom-file-label" for="foto_user">Choose file</label>
                            </div>
                          </div>
                          <i style="float: left;font-size: 11px;color: yellow;">*Abaikan jika tidak mengubah foto</i>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                  <div class="widget-title mb-50">
                    <!-- <h5 class="title">Contact Form</h5> -->
                  </div>
                  <div class="contact-form">
                    <div class="row">
                      <div class="col-md-6">
                        <label for="username" class="col-form-label text-white ml-1 font-weight-bold font-lg">
                          <h6>Username:</h6>
                        </label>
                        <input disabled type="text" class="form-control py-4 text-dark bg-secondary" name="username" value="<?= $data['username']; ?>" required>
                      </div>
                    <div class="col-md-6">
                      <label for="email" class="col-form-label text-white ml-1 font-weight-bold font-lg">
                        <h6>Email:</h6>
                      </label>
                      <input type="text" class="form-control py-4" name="email" value="<?= $data['email']; ?>" required>
                    </div>
                    <div class="col-md-12">
                      <label for="nama" class="col-form-label text-white ml-1 font-weight-bold font-lg">
                        <h6>Nama Lengkap:</h6>
                      </label>
                      <input type="text" class="form-control py-4" name="nama" value="<?= $data['nama']; ?>" required>
                    </div>
                  </div>
                  <button type="submit" class="btn">Save Change</button>
                  <div class="loader ease-linear mt-5 rounded-full border-4 border-t-4 border-gray-200 h-6 w-6 mx-auto"></div>
                </div>
              </div>
            </div>
          </form>
        </div> 
      </section>
    </main>

    <!-- footer-area -->
    <?php include('./include/footer.php');?>

    <!--  #GO TO TOP -->
    <a href="#top" class="go-top" data-go-top>
        <ion-icon name="chevron-up"></ion-icon>
    </a>

    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../src/index.js"></script>
    
		<!-- JS here -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/isotope.pkgd.min.js"></script>
    <script src="./assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="./assets/js/jquery.magnific-popup.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/jquery.odometer.min.js"></script>
    <script src="./assets/js/jquery.appear.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/ajax-form.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/aos.js"></script>
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/script-contact.js"></script>
    <script>
      $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });
    </script>
  </body>
</html>