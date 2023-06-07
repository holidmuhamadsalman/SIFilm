<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SFilm - Best movie collections</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <!-- custom css link -->
    <link rel="stylesheet" href="./assets/css/style-movie.css">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
    
</head>

<body id="top">
    <!-- #HEADER -->
    <?php include('navbar.php');?>
    <!-- preloader -->
    <?php include ('./include/preloader.php');?>
    <main>
        <article>
        <!-- #HERO-->
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <p class="hero-subtitle">SIFilm</p>
                    <h1 class="h1 hero-title">Unlimited <strong>Movie</strong>, TVs Shows, & More.</h1>
                    <div class="meta-wrapper">
                        <div class="badge-wrapper">
                            <div class="badge badge-fill">PG 18</div>
                            <div class="badge badge-outline">HD</div>
                        </div>
                        <div class="ganre-wrapper">
                            <a href="#">Romance,</a>
                            <a href="#">Drama</a>
                        </div>
                        <div class="date-time">
                            <div>
                                <ion-icon name="calendar-outline"></ion-icon>
                                <time datetime="2022">2022</time>
                            </div>
                            <div>
                                <ion-icon name="time-outline"></ion-icon>
                                <time datetime="PT128M">128 min</time>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary">
                        <ion-icon name="play"></ion-icon>
                        <span>Watch now</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- #UPCOMING -->
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
                        <div class="swiper-slide">
                            <ul>
                                <li>
                                    <div class="movie-card">
                                        <a href="./movie-details.php">
                                            <figure class="card-banner">
                                                <img src="./assets/images/upcoming-1.png" alt="The Northman movie poster">
                                            </figure>
                                        </a>
                                        <div class="title-wrapper">
                                            <a href="./movie-details.php">
                                                <h3 class="card-title">The Northman</h3>
                                            </a>
                                            <time datetime="2022">2022</time>
                                        </div>
                                        <div class="card-meta">
                                            <div class="badge badge-outline">HD</div>
                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>
                                                <time datetime="PT137M">137 min</time>
                                            </div>
                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>
                                                <data>8.5</data>
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
                                                <img src="./assets/images/upcoming-2.png"
                                                alt="Doctor Strange in the Multiverse of Madness movie poster">
                                            </figure>
                                        </a>
                                        <div class="title-wrapper">
                                            <a href="./movie-details.php">
                                                <h3 class="card-title">Doctor Strange in the Multiverse of Madness</h3>
                                            </a>
                                            <time datetime="2022">2022</time>
                                        </div>
                                        <div class="card-meta">
                                            <div class="badge badge-outline">4K</div>
                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>
                                                <time datetime="PT126M">126 min</time>
                                            </div>
                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>
                                                <data>NR</data>
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
                                                <img src="./assets/images/upcoming-3.png" alt="Memory movie poster">
                                            </figure>
                                        </a>
                                        <div class="title-wrapper">
                                            <a href="./movie-details.php">
                                                <h3 class="card-title">Memory</h3>
                                            </a>
                                            <time datetime="2022">2022</time>
                                        </div>
                                        <div class="card-meta">
                                            <div class="badge badge-outline">2K</div>
                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>
                                                <time datetime="">N/A</time>
                                            </div>
                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>
                                                <data>NR</data>
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
                                                <img src="./assets/images/upcoming-4.png"
                                                alt="The Unbearable Weight of Massive Talent movie poster">
                                            </figure>
                                        </a>
                                        <div class="title-wrapper">
                                            <a href="./movie-details.php">
                                                <h3 class="card-title">The Unbearable Weight of Massive Talent</h3>
                                            </a>
                                            <time datetime="2022">2022</time>
                                        </div>
                                        <div class="card-meta">
                                            <div class="badge badge-outline">HD</div>
                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>
                                                <time datetime="PT107M">107 min</time>
                                            </div>
                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>
                                                <data>NR</data>
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
                                                <img src="./assets/images/upcoming-2.png"
                                                alt="Doctor Strange in the Multiverse of Madness movie poster">
                                            </figure>
                                        </a>
                                        <div class="title-wrapper">
                                            <a href="./movie-details.php">
                                                <h3 class="card-title">Doctor Strange in the Multiverse of Madness</h3>
                                            </a>
                                            <time datetime="2022">2022</time>
                                        </div>

                                        <div class="card-meta">
                                            <div class="badge badge-outline">4K</div>
                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>
                                                <time datetime="PT126M">126 min</time>
                                            </div>
                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>
                                                <data>NR</data>
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
                                                <img src="./assets/images/upcoming-3.png" alt="Memory movie poster">
                                            </figure>
                                        </a>
                                        <div class="title-wrapper">
                                            <a href="./movie-details.php">
                                                <h3 class="card-title">Memory</h3>
                                            </a>
                                            <time datetime="2022">2022</time>
                                        </div>
                                        <div class="card-meta">
                                            <div class="badge badge-outline">2K</div>
                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>
                                                <time datetime="">N/A</time>
                                            </div>
                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>
                                                <data>NR</data>
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
                                                <img src="./assets/images/upcoming-4.png"
                                                alt="The Unbearable Weight of Massive Talent movie poster">
                                            </figure>
                                        </a>
                                        <div class="title-wrapper">
                                            <a href="./movie-details.php">
                                                <h3 class="card-title">The Unbearable Weight of Massive Talent</h3>
                                            </a>
                                            <time datetime="2022">2022</time>
                                        </div>
                                        <div class="card-meta">
                                            <div class="badge badge-outline">HD</div>
                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>
                                                <time datetime="PT107M">107 min</time>
                                            </div>
                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>
                                                <data>NR</data>
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
                                                <img src="./assets/images/upcoming-4.png"
                                                alt="The Unbearable Weight of Massive Talent movie poster">
                                            </figure>
                                        </a>
                                        <div class="title-wrapper">
                                            <a href="./movie-details.php">
                                                <h3 class="card-title">The Unbearable Weight of Massive Talent</h3>
                                            </a>
                                            <time datetime="2022">2022</time>
                                        </div>
                                        <div class="card-meta">
                                            <div class="badge badge-outline">HD</div>
                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>
                                                <time datetime="PT107M">107 min</time>
                                            </div>
                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>
                                                <data>NR</data>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="item__next swiper-button-next"></div>
                    <div class="item__prev swiper-button-prev"></div>
                </div>
                <div class="item_pagination swiper-pagination"></div>
            </div>
        </section>

        <!-- #CTA -->
        <section class="cta">
            <div class="container">
                <div class="title-wrapper">
                    <h2 class="cta-title">Trial start first 30 days.</h2>
                    <p class="cta-text">
                    Enter your email to create or restart your membership.
                    </p>
                </div>
                <form action="" class="cta-form">
                    <input type="email" name="email" required placeholder="Enter your email" class="email-field">
                    <button type="submit" class="cta-form-btn">Get started</button>
                </form>
            </div>
        </section>
        </article>
    </main>

    <!-- #FOOTER -->
    <?php include('footer.php');?>

    <!-- #GO TO TOP-->
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