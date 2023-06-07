<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">    
  <title>Free Guy 2021</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <!-- custom css link -->
  <link rel="stylesheet" href="./assets/css/style-detail.css">
  <!-- google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- swiper -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
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
</head>

<body id="#top">
  <!-- #HEADER -->
  <?php include('navbar.php');?>
  <!-- preloader -->
  <?php include ('./include/preloader.php');?>
  <main>
    <article>
      <!-- #MOVIE DETAIL-->
      <section class="movie-detail">
        <div class="container">
          <div class="details-actions">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/Re-SZOiZy0w" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="movie-detail-content">
            <p class="detail-subtitle">New Episodes</p>
            <h1 class="h1 detail-title">
              Free <strong>Guy</strong>
            </h1>
            <div class="meta-wrapper">
              <div class="badge-wrapper">
                <div class="badge badge-fill">PG 13</div>
                <div class="badge badge-outline">HD</div>
              </div>
              <div class="ganre-wrapper">
                <a href="#">Comedy,</a>
                <a href="#">Action,</a>
                <a href="#">Adventure,</a>
                <a href="#">Science Fiction</a>
              </div>
              <div class="date-time">
                <div>
                  <ion-icon name="calendar-outline"></ion-icon>
                  <time datetime="2021">2021</time>
                </div>
                <div>
                  <ion-icon name="time-outline"></ion-icon>
                  <time datetime="PT115M">115 min</time>
                </div>
              </div>
            </div>
            <p class="storyline">
              Actor : <br>Synopsis :<br>A bank teller called Guy realizes he is a background character in an open world video game called Free
              City that will
              soon go offline.
            </p>
          
          </div>
        </div>
      </section>
      <section>
        <section>
        <div class="container">
              <h2 class="h2 detail-title">
               <strong>Rating</strong>
            </h2>
              </div>
        </section>
        <div class="container">
          <div class="comment-form">
            <div class="rating">
            <div class="badge badge-outline"><h1>4.9</h1></div>
              <div class="stars">
                <input type="radio" name="rating" id="star5" value="5">
                <label for="star5"></label>
                <input type="radio" name="rating" id="star4" value="4">
                <label for="star4"></label>
                <input type="radio" name="rating" id="star3" value="3">
                <label for="star3"></label>
                <input type="radio" name="rating" id="star2" value="2">
                <label for="star2"></label>
                <input type="radio" name="rating" id="star1" value="1">
                <label for="star1"></label>
              </div>
            </div>      
      <div class="row my-2">
      <div class="col-lg-6 my-2">
        <h3>Comments</h3>
        <form method="post">
          <input type="hidden" name="id_film" value="<?= $id_film; ?>">
          <div class="form-group">
            <label for="nama_komentar">Nama Komentar</label>
            <input type="text" name="nama_komentar" class="form-control" id="nama_komentar" required placeholder="Anonymous">
          </div>
          <div class="form-group">
            <label for="isi_komentar">Isi Komentar</label>
            <textarea name="isi_komentar" id="isi_komentar" class="form-control" name="isi_komentar" required placeholder="Something great"></textarea>
          </div>
          <div class="form-group">
            <button type="submit-btn" name="btnTambahKomentar" class="btn btn-primary">Send</button>
          </div>
        </form>
      </div>
      <div style="max-height: 275px; overflow-y: auto;" class="col-lg-6 my-2 text-dark">
        <?php 
        include ('../config.php');
        $komentar = mysqli_query($conn, "SELECT * FROM komentar");
        foreach ($komentar as $dk): 
        ?>
          <?php if ($komentar == NULL): ?>
            <h3 class="text-white">There are no comments yet</h3>
          <?php endif ?>
          <div class="card">
            <div class="card-body">
              <h5><?= $dk['nama_komentar']; ?></h5>
              <p class="card-text"><?= $dk['isi_komentar']; ?></p>
              <small class="text-muted float-right"><?= date("d-m-Y, H:i:s", $dk['tanggal_komentar']); ?></small>
              <small class="text-muted float-right"><?= $dk['id_film']; ?></small>
              <small class="text-muted float-right"><?= $dk['id_user']; ?></small>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>

          </div>
        </div>
      </section>
      <!-- END MOVIE DETAIL -->

      <!-- Foto -->
      <section class="upcoming">
        <div class="container">
          <!-- <p class="section-subtitle">More like this</p> -->
          <h2 class="h2 section-title">Photos</h2>
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <!-- <ul> -->
                  <li>
                    <div class="photo-card">
                      <a href="./assets/images/series-2.png">
                        <figure class="card-banner">
                          <img src="./assets/images/series-1.png" alt="Moon Knight movie poster">
                        </figure>
                      </a>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide">
                  <li>
                    <div class="photo-card">
                      <a href="./assets/images/series-2.png">
                        <figure class="card-banner">
                          <img src="./assets/images/series-2.png" alt="Halo movie poster">
                        </figure>
                      </a>
                    </div>
                  </li>                
                </div>
                <div class="swiper-slide">
                  <li>
                    <div class="photo-card">
                      <a href="./assets/images/series-3.png">
                        <figure class="card-banner">
                          <img src="./assets/images/series-3.png" alt="Vikings: Valhalla movie poster">
                        </figure>
                      </a>
                    </div>
                  </li>                
                </div>
                <div class="swiper-slide">
                  <li>
                    <div class="photo-card">
                      <a href="./assets/images/series-2.png">
                        <figure class="card-banner">
                          <img src="./assets/images/series-2.png" alt="Halo movie poster">
                        </figure>
                      </a>
                    </div>
                  </li>                
                </div>
                <div class="swiper-slide">
                  <li>
                    <div class="photo-card">
                      <a href="./assets/images/series-3.png">
                        <figure class="card-banner">
                          <img src="./assets/images/series-3.png" alt="Vikings: Valhalla movie poster">
                        </figure>
                      </a>
                    </div>
                  </li>                
                </div>
                <!-- </ul> -->
              </div>
          </div>
        </div>
      </section>
      
      <section class="upcoming">
        <div class="container">
          <p class="section-subtitle">More like this</p>
          <h2 class="h2 section-title">Recommended for You</h2>
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <!-- <ul> -->
                  <li>
                    <div class="movie-card">
                      <a href="./movie-details.php">
                        <figure class="card-banner">
                          <img src="./assets/images/series-1.png" alt="Moon Knight movie poster">
                        </figure>
                      </a>
                      <div class="title-wrapper">
                        <a href="./movie-details.php">
                          <h3 class="card-title">Moon Knight</h3>
                        </a>
                        <time datetime="2022">2022</time>
                      </div>
                      <div class="card-meta">
                        <div class="badge badge-outline">2K</div>
                        <div class="duration">
                          <ion-icon name="time-outline"></ion-icon>
                          <time datetime="PT47M">47 min</time>
                        </div>
                        <div class="rating">
                          <ion-icon name="star"></ion-icon>
                          <data>8.6</data>
                        </div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide">
                  <li>
                    <div class="movie-card">
                      <a href="./movie-details.php">
                        <figure class="card-banner">
                          <img src="./assets/images/series-2.png" alt="Halo movie poster">
                        </figure>
                      </a>
                      <div class="title-wrapper">
                        <a href="./movie-details.php">
                          <h3 class="card-title">Halo</h3>
                        </a>
                        <time datetime="2022">2022</time>
                      </div>
                      <div class="card-meta">
                        <div class="badge badge-outline">2K</div>
                        <div class="duration">
                          <ion-icon name="time-outline"></ion-icon>
                          <time datetime="PT59M">59 min</time>
                        </div>
                        <div class="rating">
                          <ion-icon name="star"></ion-icon>
                          <data>8.8</data>
                        </div>
                      </div>
                    </div>
                  </li>                
                </div>
                <div class="swiper-slide">
                  <li>
                    <div class="movie-card">
                      <a href="./movie-details.php">
                        <figure class="card-banner">
                          <img src="./assets/images/series-3.png" alt="Vikings: Valhalla movie poster">
                        </figure>
                      </a>
                      <div class="title-wrapper">
                        <a href="./movie-details.php">
                          <h3 class="card-title">Vikings: Valhalla</h3>
                        </a>
                        <time datetime="2022">2022</time>
                      </div>
                      <div class="card-meta">
                        <div class="badge badge-outline">2K</div>
                        <div class="duration">
                          <ion-icon name="time-outline"></ion-icon>
                          <time datetime="PT51M">51 min</time>
                        </div>
                        <div class="rating">
                          <ion-icon name="star"></ion-icon>
                          <data>8.3</data>
                        </div>
                      </div>
                    </div>
                  </li>                
                </div>
                <div class="swiper-slide">
                  <li>
                    <div class="movie-card">
                      <a href="./movie-details.php">
                        <figure class="card-banner">
                          <img src="./assets/images/series-4.png" alt="Money Heist movie poster">
                        </figure>
                      </a>
                      <div class="title-wrapper">
                        <a href="./movie-details.php">
                          <h3 class="card-title">Money Heist</h3>
                        </a>
                        <time datetime="2017">2017</time>
                      </div>
                      <div class="card-meta">
                        <div class="badge badge-outline">4K</div>
                        <div class="duration">
                          <ion-icon name="time-outline"></ion-icon>
                          <time datetime="PT70M">70 min</time>
                        </div>
                        <div class="rating">
                          <ion-icon name="star"></ion-icon>
                          <data>8.3</data>
                        </div>
                      </div>
                    </div>
                  </li>
                  </div>
                <div class="swiper-slide">
                  <li>
                    <div class="movie-card">
                      <a href="./movie-details.php">
                        <figure class="card-banner">
                          <img src="./assets/images/series-4.png" alt="Money Heist movie poster">
                        </figure>
                      </a>
                      <div class="title-wrapper">
                        <a href="./movie-details.php">
                          <h3 class="card-title">Money Heist</h3>
                        </a>
                        <time datetime="2017">2017</time>
                      </div>
                      <div class="card-meta">
                        <div class="badge badge-outline">4K</div>
                        <div class="duration">
                          <ion-icon name="time-outline"></ion-icon>
                          <time datetime="PT70M">70 min</time>
                        </div>
                        <div class="rating">
                          <ion-icon name="star"></ion-icon>
                          <data>8.3</data>
                        </div>
                      </div>
                    </div>
                  </li>
                <!-- </ul> -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </article>
  </main>

  <!-- #FOOTER -->
  <?php include('footer.php');?>

  <!-- #GO TO TOP -->
  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up"></ion-icon>
  </a>

  <!-- custom js link -->
  <script src="./assets/js/script.js"></script>
  <script src="./assets/js/script-swiper.js"></script>
  <script src="./assets/js/komentar.js"></script>

  <!-- ionicon link-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
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