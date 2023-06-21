<!-- <?php include 'proses-login.php';?> -->
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
  <link rel="stylesheet" href="./assets/css/style.css">
  <!-- google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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

<body id="top">
  <!-- HEADER -->
  <?php include('./include/navbar.php');?>
  <!-- preloader -->
  <?php //include ('./include/preloader.php');?>
  <main>
      <article>
      <!-- #HERO -->
      <section class="hero">
        <div class="container">
          <div class="hero-content">
            <p class="hero-subtitle">Welcome to SIFilm</p>
            <h1 class="h1 hero-title">Unlimited <strong>Film</strong><br>For you</h1>
            <div class="meta-wrapper">
              <div class="badge-wrapper">
                <div class="badge badge-outline">Happy watching guys!</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- #TOP TRENDING-->
      <section class="upcoming">
        <div class="container">
          <p class="section-subtitle">Online Streaming</p>
          <h2 class="h2 section-title">Top 10 Trending 2023</h2>
          <div class="swiper-container">
            <div class="swiper-wrapper">
            <?php
            $query = mysqli_query($conn, "SELECT * FROM film JOIN foto ON film.id_film=foto.id_film JOIN rating ON rating.id_film=film.id_film GROUP BY film.id_film HAVING status='cover' ORDER BY avg(rating) DESC LIMIT 10");?>
            <?php while($row = mysqli_fetch_array($query)):?>
              <div class="swiper-slide">
                  <li>
                    <div class="movie-card">
                      <a href="./movie-details.php?id_film=<?= $row["id_film"]; ?>">
                        <figure class="card-banner">
                          <img src="../include/img-db/<?php echo $row['foto'];?>">
                        </figure>
                      </a>
                      <div class="title-wrapper">
                        <a href="./movie-details.php?id_film=<?= $row["id_film"]; ?>">
                          <h3 class="card-title"><?php echo $row['judul_film'];?></h3>
                        </a>
                        <time datetime="2023"><?php echo $row['tahun_rilis'];?></time>
                      </div>
                      <div class="card-meta">
                        <!-- <div class="badge badge-outline">2K</div> -->
                        <div class="duration">
                          <ion-icon name="time-outline"></ion-icon>
                          <time><?php echo $row['durasi'];?> min</time>
                        </div>
                        <div class="rating">
                            <?php
                            $rating = mysqli_query($conn, "SELECT avg(rating) as rata FROM rating JOIN login ON rating.username = login.username WHERE id_film='$row[id_film]' GROUP BY id_film ORDER BY avg(rating) ASC");
                            foreach ($rating as $dk): 
                            ?>
                            <ion-icon name="star"></ion-icon>
                            <data><?=round($dk['rata'],1);?>/5</data>
                            <?php endforeach ;?>
                        </div>
                      </div>
                    </div>
                  </li>
              </div>
            <?php endwhile;?>
            </div>
          </div>
        </div>
      </section>
        
      <!-- #TOP RATED GENRE-->
      <section class="top-rated">
        <div class="container">
          <p class="section-subtitle">Online Streaming</p>
          <h2 class="h2 section-title">Top Genres Film</h2>
          <ul class="filter-list">
            <li>
              <form action="" method="POST">
                <?php $query = mysqli_query($conn, "SELECT * FROM genre "); ?>
                <?php foreach ($query as $row) : ?>
                <button class="filter-btn" id="select" name="select" onchange="this.form.submit()" value="<?php echo $row['id_genre'];?>">
                    <?php echo $row['nama_genre'];?>
                </button>
            </li>
                <?php endforeach;?>
              </form>
          </ul>
          <?php
            if(isset($_POST['select'])){
              $id_genre = $_POST['select'];
              $query = mysqli_query($conn, 
              "SELECT * FROM film JOIN genre 
              ON film.id_genre=genre.id_genre 
              WHERE film.id_genre=$id_genre");
              
              $row = mysqli_fetch_assoc($query);?>
              
              <div class="kategori" style="overflow:hidden;">
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <?php
                      $query = mysqli_query($conn, 
                      "SELECT * FROM film 
                      JOIN foto ON film.id_film=foto.id_film 
                      JOIN rating ON rating.id_film=film.id_film 
                      GROUP BY film.id_film HAVING film.id_genre=$id_genre
                      ORDER BY avg(rating) DESC LIMIT 10");?>
                      <?php while($row = mysqli_fetch_array($query)):?>
                        <div class="swiper-slide">
                          <ul>
                            <li>
                              <div class="movie-card">
                                <a href="./movie-details.php?id_film=<?= $row["id_film"]; ?>">
                                  <figure class="card-banner">
                                    <img src="../include/img-db/<?php echo $row['foto'];?>">
                                  </figure>
                                </a>
                                <div class="title-wrapper">
                                  <a href="./movie-details.php?id_film=<?= $row["id_film"]; ?>">
                                    <h3 class="card-title"><?php echo $row['judul_film'];?></h3>
                                  </a>
                                  <time datetime="2023"><?php echo $row['tahun_rilis'];?></time>
                                </div>
                                <div class="card-meta">
                                  <div class="duration">
                                    <ion-icon name="time-outline"></ion-icon>
                                    <time><?php echo $row['durasi'];?> min</time>
                                  </div>
                                  <div class="rating">
                                      <?php
                                      $rating = mysqli_query($conn, "SELECT avg(rating) as rata FROM rating JOIN login ON rating.username = login.username WHERE id_film='$row[id_film]' GROUP BY id_film ORDER BY avg(rating) ASC");
                                      foreach ($rating as $dk): 
                                      ?>
                                      <ion-icon name="star"></ion-icon>
                                      <data>
                                        <?php 
                                        if ($dk['rata']==0){
                                          echo "NR";
                                        }else{
                                          echo round($dk['rata'],1);}
                                        ?>
                                        /5
                                      </data>
                                      <?php endforeach ;?>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      <?php endwhile;?>
                  </div>
                    <?php } ?> 
                </div>
              </div>
        </div>
      </section>
    </article>
  </main>

    <!--  #FOOTER -->
    <?php include('./include/footer.php');?>

    <!--  #GO TO TOP -->
    <a href="#top" class="go-top" data-go-top>
        <ion-icon name="chevron-up"></ion-icon>
    </a>

    <!-- custom js link -->
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/script-swiper.js"></script>

    <!-- ionicon link -->
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