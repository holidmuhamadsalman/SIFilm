<?php include 'proses-login.php';?>
<?php 
    include '../config.php';
    $id_genre = $_GET['id_genre'];
    $query = mysqli_query($conn, 
    "SELECT * FROM film 
    JOIN genre ON film.id_genre = genre.id_genre 
    JOIN foto ON film.id_film = foto.id_film
    WHERE film.id_genre = $id_genre");
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
    <?php include ('./include/preloader.php');?>
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
            </div>
        </section>

        <!-- #LATEST-->
        <section class="upcoming">
            <div class="container">
                <div class="flex-wrapper">
                    <div class="title-wrapper">
                        <p class="section-subtitle">Online Streaming</p>
                        <h2 class="h2 section-title">Latest Movies</h2>
                    </div>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <?php
                    $date = date('Y');
                    $query = mysqli_query($conn, 
                    "SELECT * FROM film 
                    JOIN genre ON film.id_genre = genre.id_genre 
                    JOIN foto ON film.id_film = foto.id_film
                    WHERE film.id_genre = $id_genre AND status='cover' AND tahun_rilis=$date");
                    
                    foreach ($query as $row) :
                    ?>
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
                                            <time datetime="2022"><?php echo $row['tahun_rilis'];?></time>
                                        </div>
                                        <div class="card-meta">
                                            <!-- <div class="badge badge-outline">HD</div> -->
                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>
                                                <time datetime="PT137M"><?php echo $row['durasi'];?> min</time>
                                            </div>
                                            <div class="rating">
                                            <?php $rating = mysqli_query($conn, "SELECT avg(rating) as rata FROM rating JOIN login ON rating.username = login.username WHERE id_film='$row[id_film]'");
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
                            </div>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- #LATEST-->
        <section class="upcoming">
            <div class="container">
                <div class="flex-wrapper">
                    <div class="title-wrapper">
                        <p class="section-subtitle">Online Streaming</p>
                        <h2 class="h2 section-title">Upcoming Movies</h2>
                    </div>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <?php
                    $date = date('Y');
                    $query = mysqli_query($conn, 
                    "SELECT * FROM film 
                    JOIN genre ON film.id_genre = genre.id_genre 
                    JOIN foto ON film.id_film = foto.id_film
                    WHERE film.id_genre = $id_genre AND status='cover' AND tahun_rilis > $date");
                    
                    foreach ($query as $row) :
                    ?>
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
                                            <time datetime="2022"><?php echo $row['tahun_rilis'];?></time>
                                        </div>
                                        <div class="card-meta">
                                            <!-- <div class="badge badge-outline">HD</div> -->
                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>
                                                <time datetime="PT137M"><?php echo $row['durasi'];?> min</time>
                                            </div>
                                            <div class="rating">
                                            <?php $rating = mysqli_query($conn, "SELECT avg(rating) as rata FROM rating JOIN login ON rating.username = login.username WHERE id_film='$row[id_film]'");
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
                            </div>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- #ALL -->
        <section class="upcoming">
            <div class="container">
                <div class="flex-wrapper">
                    <div class="title-wrapper">
                        <p class="section-subtitle">Online Streaming</p>
                        <h2 class="h2 section-title">All Movies</h2>
                    </div>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <?php
                    $query = mysqli_query($conn, 
                    "SELECT * FROM film 
                    JOIN genre ON film.id_genre = genre.id_genre 
                    JOIN foto ON film.id_film = foto.id_film
                    WHERE film.id_genre = $id_genre AND status='cover'");
                    
                    foreach ($query as $row) :
                    ?>
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
                                            <time datetime="2022"><?php echo $row['tahun_rilis'];?></time>
                                        </div>
                                        <div class="card-meta">
                                            <!-- <div class="badge badge-outline">HD</div> -->
                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>
                                                <time datetime="PT137M"><?php echo $row['durasi'];?> min</time>
                                            </div>
                                            <div class="rating">
                                            <?php $rating = mysqli_query($conn, "SELECT avg(rating) as rata FROM rating JOIN login ON rating.username = login.username WHERE id_film='$row[id_film]'");
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
                            </div>
                            <?php endforeach; ?>
                            </ul>
                        </div>
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