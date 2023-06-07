<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIFilm - Best movie collections</title>
    <!-- FA -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- favicon -->
    <link rel="shortcut icon" href="user/favicon.svg" type="image/svg+xml">
    <!-- custom css link -->
    <link rel="stylesheet" href="user/assets/css/style.css">
    <link rel="stylesheet" href="src/styles.css" />
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="app/dist/css/adminlte.min.css">
</head>

<body id="top">
    <!-- HEADER -->
    <?php include('/navbar.php');?>
    <main>
        <article>
        <!-- #HERO -->
        <section class="hero2" id="mulai">
            <div class="container col-5">
                <div class="">
                    <p class="hero-subtitle">SIFilm</p>
                    <h1 class="h1 hero-title">Unlimited <strong>Movie</strong>, TVs Shows, & More.</h1>
                </div>
            </div>
            <div class="col-5">
            <div class="register-box dark-mode">
              <div class="card card-outline">
                <div class="card-header text-center">
                  <a href="" class="h1"><b>SIF</b>ilm</a>
                </div>
                <div class="card-body">
                  <p class="login-box-msg">Register a new account</p>

                  <form action="auth.php" method="post">
                    <div class="input-group mb-3">
                      <input type="text" name="username" class="form-control" placeholder="Username">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="email" name="email" class="form-control" placeholder="Email">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="password" name="password" class="form-control" placeholder="Password">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="password" class="form-control" placeholder="Retype password">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <!-- /.col -->
                      <div class="col-4">
                        <button type="submit" class="btn btn-outline">Register</button>
                      </div>
                      <!-- /.col -->
                    </div>
                  </form>

                  <a href="index.php" class="text-center">I already have a account</a>
                </div>
                <!-- /.form-box -->
              </div><!-- /.card -->
            </div>
          <!-- /.register-box -->
          </div>
        </section>
        <div class="feature">
          <div class="feature-details">
            <h3 class="feature-heading" style="color: white;">Tonton dimanapun</h3>
            <h5 class="feature-sub-heading" style="color: white;">
            Streaming film dan acara TV tak terbatas di ponsel, tablet, laptop, dan TV-mu.
            </h5>
          </div>
          <div class="feature-image-container feature-3-image-container">
            <img
              src="resources/tv-2.png"
              alt="Feature image"
              class="feature-image feature-3-image"
            />
            <div
              class="feature-bg-video-container feature-3-bg-video-container"
            >
              <video
                autoplay=""
                loop=""
                muted=""
                class="feature-bg-video feature-3-bg-video"
              >
                <source src="resources/video-2.m4v" type="video/mp4" />
              </video>
            </div>
          </div>
        </div>
    </main>

    <!--  #FOOTER -->
    <?php include('footer.php');?>

    <!--  #GO TO TOP -->
    <a href="#top" class="go-top" data-go-top>
        <ion-icon name="chevron-up"></ion-icon>
    </a>

    <!-- custom js link -->
    <script src="user/assets/js/script.js"></script>
    <script src="user/assets/js/script-swiper.js"></script>
    

    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="src/index.js"></script>

    <!-- jQuery -->
    <script src="app/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="app/dist/js/adminlte.min.js"></script>

</body>
</html>