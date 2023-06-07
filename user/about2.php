<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="./assets/images/icon_sifilm.png" type="image/svg+xml">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/style_about.css">
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .profile-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  max-width: 370px;
  width: 100%;
  background: #fff;
  border-radius: 24px;
  padding: 25px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  position: relative;
}
.profile-card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 36%;
  width: 100%;
  border-radius: 24px 24px 0 0;
  background-color: #4070f4;
}
.image {
  position: relative;
  height: 150px;
  width: 150px;
  border-radius: 50%;
  background-color: #4070f4;
  padding: 3px;
  margin-bottom: 10px;
}
.image .profile-img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 50%;
  border: 3px solid #fff;
}
.profile-card .text-data {
  display: flex;
  flex-direction: column;
  align-items: center;
  color: #333;
}
.text-data .name {
  font-size: 22px;
  font-weight: 500;
}
.text-data .job {
  font-size: 15px;
  font-weight: 400;
}
.profile-card .media-buttons {
  display: flex;
  align-items: center;
  margin-top: 15px;
}
.media-buttons .link {
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-size: 18px;
  height: 34px;
  width: 34px;
  border-radius: 50%;
  margin: 0 8px;
  background-color: #4070f4;
  text-decoration: none;
}
.profile-card .buttons {
  display: flex;
  align-items: center;
  margin-top: 25px;
}
.buttons .button {
  color: #fff;
  font-size: 14px;
  font-weight: 400;
  border: none;
  border-radius: 24px;
  margin: 0 10px;
  padding: 8px 24px;
  background-color: #4070f4;
  cursor: pointer;
  transition: all 0.3s ease;
}
.buttons .button:hover {
  background-color: #0e4bf1;
}
.profile-card .analytics {
  display: flex;
  align-items: center;
  margin-top: 25px;
}
.analytics .data {
  display: flex;
  align-items: center;
  color: #333;
  padding: 0 20px;
  border-right: 2px solid #e7e7e7;
}
.data i {
  font-size: 18px;
  margin-right: 6px;
}
.data:last-child {
  border-right: none;
}

    </style>
</head>
<body>
    <?php include('navbar.php');?>
    <!-- Start Product -->
    <header>
        <div class="banner">
			<img src="./assets/images/hero-bg.jpg" alt="" width="100%">
			<div class="banner-text">
                <h1>ABOUT <strong>US</strong></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero voluptatibus, eos deserunt praesentium beatae laborum quibusdam quas perferendis distinctio magni, fugit tempora non minus, voluptatem ab temporibus animi unde eligendi!  Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, neque quaerat ad illo et beatae quo quod, numquam nulla enim ipsa aliquam amet corporis voluptatum. Quasi inventore obcaecati commodi quae. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et modi, adipisci cum quidem quos consequatur recusandae amet, quis culpa officiis accusamus sint id vel beatae odio cumque aspernatur maxime est.</p>
			</div>
		</div>
	</header>
    <div class="container pt-5 mt-5 px-5 text-white">
        <div class="our_team">
            <h1>Our Team</h1>
        </div>
        <!-- <div class="row pt-2 px-5 pb-5">
            <div class="col-md-3 pt-3">
                <div class="card shadow-sm" style="width: 100%; background:#e2d703;">
                    <div class="img-container">
                        <img src="./assets/images/o2.jpg" class="card-img-top" alt="...">
                        <div class="overlays">
                            <a href="#"><i class="fa-brands fa-square-facebook fa-lg" style="color: #FFF"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter" style="color: #FFF"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin fa-lg" style="color: #FFF"></i></a>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Holid Muhamad Salman</h5>
                        <p class="card-text">STMIK Mardira Indonesia</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pt-3">
                    <div class="card shadow-sm" style="width: 100%; background:#e2d703;">
                        <div class="img-container">
                            <img src="./assets/images/o2.jpg" class="card-img-top" alt="...">
                            <div class="overlays">
                                <a href="#"><i class="fa-brands fa-square-facebook fa-lg" style="color: #FFF"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter" style="color: #FFF"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin fa-lg" style="color: #FFF"></i></a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Nur Rofiq Hidayat</h5>
                            <p class="card-text">Universitas Jember</p>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-3 pt-3">
                    <div class="card shadow-sm" style="width: 100%; background:#e2d703;">
                        <div class="img-container">
                            <img src="./assets/images/o1.png" class="card-img-top" alt="...">
                            <div class="overlays">
                                <a href="#"><i class="fa-brands fa-square-facebook fa-lg" style="color: #FFF"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter" style="color: #FFF"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin fa-lg" style="color: #FFF"></i></a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Alya Putri Yoanda</h5>
                            <p class="card-text">Universitas Sriwijaya</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pt-3">
                    <div class="card shadow-sm" style="width: 100%; background:#e2d703;">
                        <div class="img-container">
                            <img src="./assets/images/o1.png" class="card-img-top" alt="...">
                            <div class="overlays">
                                <a href="#"><i class="fa-brands fa-square-facebook fa-lg" style="color: #FFF"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter" style="color: #FFF"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin fa-lg" style="color: #FFF"></i></a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Jamiatus Sholihah</h5>
                            <p class="card-text">Universitas Trunojoyo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- card -->
        <div class="profile-card">
            <div class="image">
                <img src="./assets/images/o1.png" alt="" class="profile-img" />
            </div>
            <div class="text-data">
                <span class="name">CodingLab</span>
                <span class="job">YouTuber & Blogger</span>
            </div>
            <div class="media-buttons">
                <a href="#" style="background: #4267b2" class="link">
                <i class="bx bxl-facebook"></i>
                </a>
                <a href="#" style="background: #1da1f2" class="link">
                <i class="bx bxl-twitter"></i>
                </a>
                <a href="#" style="background: #e1306c" class="link">
                <i class="bx bxl-instagram"></i>
                </a>
                <a href="#" style="background: #ff0000" class="link">
                <i class="bx bxl-youtube"></i>
                </a>
            </div>
            <div class="buttons">
                <button class="button">Subscribe</button>
                <button class="button">Message</button>
            </div>
            <div class="analytics">
                <div class="data">
                <i class="bx bx-heart"></i>
                <span class="number">60k</span>
                </div>
                <div class="data">
                <i class="bx bx-message-rounded"></i>
                <span class="number">20k</span>
                </div>
                <div class="data">
                <i class="bx bx-share"></i>
                <span class="number">12k</span>
                </div>
            </div>
        </div>

    <!-- Footer -->
    <?php include('footer.php');?>

    <!-- custom js link -->
    <script src="./assets/js/script.js"></script>

    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>