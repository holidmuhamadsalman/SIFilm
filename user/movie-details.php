<?php 
  include ('../config.php');
  include "proses-login.php";

  $username = $_SESSION['username'];
  $sql = mysqli_query($conn,"SELECT * FROM login WHERE username = '$username'") or die(mysqli_error($con));
  $data = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">    
  <title>SFilm - Best movie collections</title>
  <!-- icon sifilm -->
  <link rel="shortcut icon" href="assets/images/ic_sifilm.png">
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id="#top">
  <!-- #HEADER -->
  <?php include('./include/navbar.php');?>
  <!-- preloader -->
  <!-- <?php include ('./include/preloader.php');?> -->
  <main>
    <article>
      <!-- #MOVIE DETAIL-->
      <?php
        include "../config.php";
        $id_film = $_GET['id_film'];
        $query = mysqli_query($conn, 
        "SELECT * FROM film 
        JOIN genre ON film.id_genre = genre.id_genre 
        JOIN detail_aktor ON film.id_film = detail_aktor.id_film 
        JOIN aktor ON aktor.id_aktor = detail_aktor.id_aktor
        WHERE film.id_film = $id_film");

        $query1 = mysqli_query($conn, 
        "SELECT * FROM film
        JOIN detail_sutradara ON film.id_film = detail_sutradara.id_film 
        JOIN sutradara ON sutradara.id_sutradara = detail_sutradara.id_sutradara
        WHERE film.id_film = $id_film");

        $query2 = mysqli_query($conn, 
        "SELECT * FROM film 
        JOIN foto ON film.id_film = foto.id_film
        WHERE film.id_film = $id_film AND status='sub_foto'");
      ?>

      <?php foreach ($query as $row) : ?>
      <section class="movie-detail">
        <div class="container">
          <div class="details-actions">
            <h3>The Trailer</h3>
            <iframe width="560" height="315" src="<?php echo $row['link_trailer'];?>" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="movie-detail-content">
            <h1 class="h1 detail-title">
              <strong><?= $row ['judul_film'];?></strong>
            </h1>
            <div class="meta-wrapper">
              <div class="ganre-wrapper">
                <a href="#"><?php echo $row['nama_genre'];?></a>
              </div>
              <div class="date-time">
                <div>
                  <ion-icon name="calendar-outline"></ion-icon>
                  <time datetime="<?=$row['tahun_rilis'];?>"><?=$row['tahun_rilis'];?></time>
                </div>
                <div>
                  <ion-icon name="time-outline"></ion-icon>
                  <time datetime="<?=$row['durasi'];?>"><?=$row['durasi'];?> min</time>
                </div>
              </div>
            </div>
            <p class="storyline"><strong style="color:#e2d703">Aktor : </strong>
              <?php 
                $aktor = '';
                foreach ($query as $row1) {
                  $aktor .= $row1['nama_aktor'].', ';
                }
                echo substr($aktor, 0, -2);
              ?>
              <br><strong style="color:#e2d703">Sutradara : </strong>
              <?php 
                $sutradara = '';
                foreach ($query1 as $row1) {
                  $sutradara .= $row1['nama_sutradara'].', ';
                }
                echo substr($sutradara, 0, -2);
              ?>
              <br><strong style="color:#e2d703">Sinopsis : </strong><br>
              <?php echo $row['sinopsis'];?>
            </p>
          </div>
        </div>
      </section>
      <?php endforeach; ?>

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
            <?php 
              $rating = mysqli_query($conn, 
              "SELECT avg(rating) as rata FROM rating 
              JOIN login ON rating.username = login.username 
              WHERE id_film='$id_film'");
              foreach ($rating as $dk): 
            ?>
            <div class="badge badge-outline"><h2><?=round($dk['rata'],1);?> / 5</h2></div>
            <?php endforeach ;?>
            <form action="code.php" method="POST">
              <fieldset class="stars">
                <input type="radio" name="rating" id="star5" value="5" required>
                <label for="star5"></label>
                <input type="radio" name="rating" id="star4" value="4" required>
                <label for="star4"></label>
                <input type="radio" name="rating" id="star3" value="3" required>
                <label for="star3"></label>
                <input type="radio" name="rating" id="star2" value="2" required>
                <label for="star2"></label>
                <input type="radio" name="rating" id="star1" value="1" required>
                <label for="star1"></label>
              </fieldset>
              </div>      
              <div class="row my-2">
                <div class="col-lg-6 my-2">
                  <h3>Comments</h3>
                    <input type="hidden" name="id_film" value="<?= $id_film; ?>">
                    <div class="form-group">
                      <label for="username">Nama Pengguna</label>
                      <input type="text" name="username" class="form-control" disabled id="username" required placeholder="Anonymous" value="<?=$data['nama']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="komentar">Isi Komentar</label>
                      <textarea name="komentar" id="komentar" class="form-control" name="komentar" required placeholder="Something great"></textarea>
                    </div>
                    <div class="form-group">
                      <button type="submit-btn" name="send" class="btn btn-outline">Send</button>
                    </div>
            </form>
                </div>
                <div style="max-height: 275px; overflow-y: auto;" class="col-lg-6 my-2 text-dark">
                  <?php 
                    $rating = mysqli_query($conn, 
                    "SELECT * FROM rating 
                    JOIN login ON rating.username = login.username 
                    WHERE id_film='$id_film'");
                    foreach ($rating as $dk): 
                  ?>
                  <?php if ($rating == NULL): ?>
                    <h3 class="text-white">There are no comments yet</h3>
                  <?php endif ?>
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-text text-dark"><?= $dk['nama']; ?></h5>
                      <?php
                        $start = 1;
                        while ($start <= 5){
                          if ($dk['rating'] < $start){
                      ?>
                            <li class="list-inline-item"><i class="fas fa-star text-black-50"></i></li>
                      <?php } else { ?>
                            <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                      <?php
                            }
                            $start++;
                          }
                      ?>
                      </p>
                      <p class="card-text"><?= $dk['komentar']; ?></p>
                        <small class="text-muted float-right">
                          <?= date("d-m-Y H:i:s", strtotime($dk['tgl_add'])); ?>
                        </small>
                      </div>
                    </div>
                  <?php endforeach ;?>
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
            <?php foreach ($query2 as $row):?>
              <div class="swiper-slide">
                <!-- <ul> -->
                  <li>
                    
                    <div class="photo-card">
                      <a href="../include/img-db/<?= $row['foto']; ?>">
                        <figure class="card-banner">
                          <img src="../include/img-db/<?= $row['foto']; ?>">
                        </figure>
                      </a>
                    </div>
                  
                  </li>
                </div>
                <!-- </ul> -->
                <?php endforeach ;?>
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
              <?php 
                $id_genre = $row['id_genre'];
                $query3 = mysqli_query($conn, 
                "SELECT * FROM film 
                JOIN foto ON film.id_film = foto.id_film 
                JOIN genre ON film.id_genre = genre.id_genre 
                WHERE film.id_genre = $id_genre AND status='cover' AND NOT film.id_film=$id_film");

                foreach ($query3 as $row1) :
              ?>
              <div class="swiper-slide">
                <!-- <ul> -->
                  <li>
                    <div class="movie-card">
                      <a href="./movie-details.php?id_film=<?= $row1["id_film"]; ?>">
                        <figure class="card-banner">
                          <img src="../include/img-db/<?php echo $row1['foto'];?>">
                        </figure>
                      </a>
                      <div class="title-wrapper">
                        <a href="./movie-details.php?id_film=<?= $row1["id_film"]; ?>">
                          <h3 class="card-title"><?=$row1['judul_film'];?></h3>
                        </a>
                        <time datetime="<?=$row1['tahun_rilis'];?>"><?=$row1['tahun_rilis'];?></time>
                      </div>
                      <div class="card-meta">
                        <!-- <div class="badge badge-outline">2K</div> -->
                        <div class="duration">
                          <ion-icon name="time-outline"></ion-icon>
                          <time datetime="<?=$row1['durasi'];?>"><?=$row1['durasi'];?></time>
                        </div>
                        <div class="rating mt-2">
                          <?php 
                          $id_film = $row1['id_film'];
                          $rate = mysqli_query($conn, "SELECT avg(rating) as rata FROM rating JOIN login ON rating.username = login.username WHERE id_film='$id_film'");
                          foreach ($rate as $dk): 
                          ?>
                          <ion-icon name="star"></ion-icon>
                          <data>
                            <?php 
                            if ($dk['rata']==0){
                              echo "NR";
                            }else{
                              echo round($dk['rata'],1);}
                            ?>
                            / 5
                          </data>
                          <?php endforeach ;?>
                        </div>
                      </div>
                    </div>
                  </li>
                </div>
              <?php endforeach ;?>
              <!-- </ul> -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </article>
  </main>

  <!-- #FOOTER -->
  <?php include('./include/footer.php');?>

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
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
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