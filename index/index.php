<?php
  session_start();
  require '../config.php';

  if (!isset($_SESSION['user'])) {
    header("Location: ../login.php");
    exit;
  }

  if (isset($_POST['send-mess'])){
    // if($_GET['id']){

    // }
    $id_user = $GLOBALS['id'];
    var_dump($id_user); die;
    $kritik = $_POST['kritik'];
    $saran = $_POST['saran'];
    $query = "INSERT INTO kritik_saran (id, kritik,	saran)
    VALUES ('$id_user', '$kritik',	'$saran')";
    mysqli_query($db, $query);
    if($query){
      echo "Update gagal";
    }
  }
?>

  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Taurinesia Villa </title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    <script src="script.js" defer> </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>

  <body>
    <header>

      <div id="menu-bar" class="fas fa-bars"></div>
      <img src="images/logo.png" alt="" width="80px"></a>
      <nav class="navbar">
        <a href="#home">home</a>
        <a href="book.php">book</a>
        <a href="#services">services</a>
        <a href="gallery.html">gallery</a>
        <a href="#contact">about</a>
      </nav>

      <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
      </div>

      <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
      </form>

    </header>


    <div id="darkmode" class="text-box"> </div>

    <script>
      $(document).ready(function() {
        $("#text").on({
          mouseenter: function() {
            $(this).css("color", "#ecc100");
          }
        })
      });
      $("#text").on({
        mouseout: function() {
          $(this).css("color", "white");
        }
      });
    </script>

    <!-- header section ends -->

    <!-- login form container  -->

    <!-- <div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
      <h3>login</h3>
      <input type="email" class="box" placeholder="enter your email">
      <input type="password" class="box" placeholder="enter your password">
      <input type="submit" value="login now" class="btn">
      <input type="checkbox" id="remember">
      <label for="remember">remember me</label>
      <p>forget password? <a href="register.php">click here</a></p>
      <p>don't have and account? <a href="../register.php">register now</a></p>
    </form>

  </div> -->

    <div class="login-form-container">

      <i class="fas fa-times" id="form-close"></i>

      <form action="">
        <br>
        <h3>LOGOUT <br></h3><br><br><br>
        <h2 align="center">Yakin Untuk keluar website?</h2>
        <input type="submit" value="Batal Logout" class="btn">
        <a href="../logout.php" class="btn">Logout Now</a>

      </form>

    </div>

    <!-- home section starts  -->

    <section class="home" id="home">

      <div class="content">
        <h3>Welcome to Taurinesia Villa Website</h3>
        <p>The luxuries of a Resort with the Intimacy of Home</p>
        <a href="#" class="btn">visit us for more info </a>
      </div>

      <div class="controls">
        <span class="vid-btn active" data-src="images/vid1.mp4"></span>
        <span class="vid-btn" data-src="images/vid2.mp4"></span>
        <span class="vid-btn" data-src="images/vid3.mp4"></span>
        <span class="vid-btn" data-src="images/vid4.mp4"></span>
        <span class="vid-btn" data-src="images/vid5.mp4"></span>
      </div>

      <div class="video-container">
        <video src="images/vid1.mp4" id="video-slider" loop autoplay muted></video>
      </div>

    </section>

    <!-- home section ends -->

    <!-- packages section starts  -->

    <section class="packages" id="packages">
      <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
      </h1>

      <a href="book.php" class="btn">See More >></a><br><br>

      <div class="box-container">
        <?php
        require "../config.php";
        $query = mysqli_query($db, "SELECT * FROM data_villa"); //099
        $i = 1;
        while ($row = mysqli_fetch_assoc($query)) {
        ?>
          <div class="box">
            <img src="../img/<?= $row['gambar_villa'] ?>" alt="">
            <div class="content">
              <h3> <i class="fas fa-map-marker-alt"></i><?= $row['nama_villa'] ?></h3>
              <p><?= $row['deskripsi_villa'] ?></p>
              <p><?= $row['alamat_villa'] ?></p>
              <div class="price">Rp<?= $row['harga_villa'] ?></div>
              <a href="booking.php?id_villa=<?= $row['id_villa'] ?>" class="btn">book now</a>
            </div>
          </div>
        <?php
          if ($i == 3) {
            break;
          }
          $i++;
        }
        ?>
      </div>

    </section>

    <!-- packages section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

      <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
      </h1>

      <div class="box-container">

        <div class="box">
          <i class="fas fa-hotel"></i>
          <h3>affordable hotels</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
          <i class="fas fa-utensils"></i>
          <h3>food and drinks</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
          <i class="fas fa-bullhorn"></i>
          <h3>safty guide</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
          <i class="fas fa-globe-asia"></i>
          <h3>around the world</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
          <i class="fas fa-plane"></i>
          <h3>fastest travel</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
          <i class="fas fa-hiking"></i>
          <h3>adventures</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>

      </div>

    </section>

    <!-- services section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">

      <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
      </h1>

      <div class="box-container">

        <div class="box">
          <img src="images/g-1.jpg" alt="">
          <div class="content">
            <h3>amazing places</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-2.jpg" alt="">
          <div class="content">
            <h3>amazing places</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-3.jpg" alt="">
          <div class="content">
            <h3>amazing places</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-4.jpg" alt="">
          <div class="content">
            <h3>amazing places</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-5.jpg" alt="">
          <div class="content">
            <h3>amazing places</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-6.jpg" alt="">
          <div class="content">
            <h3>amazing places</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-7.jpg" alt="">
          <div class="content">
            <h3>amazing places</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-8.jpg" alt="">
          <div class="content">
            <h3>amazing places</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-9.jpg" alt="">
          <div class="content">
            <h3>amazing places</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>

      </div>

    </section>

    <!-- gallery section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

      <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
      </h1>

      <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="box">
              <img src="images/pic1.png" alt="">
              <h3>john deo</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="box">
              <img src="images/pic2.png" alt="">
              <h3>john deo</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="box">
              <img src="images/pic3.png" alt="">
              <h3>john deo</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="box">
              <img src="images/pic4.png" alt="">
              <h3>john deo</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">
      <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
      </h1>
      <div class="row">
        <div class="image">
          <img src="images/contact-img.svg" alt="">
        </div>
          <form action="" method="post">
            <textarea name="kritik" placeholder="Kritik" cols="30" rows="10"></textarea>
            <textarea name="saran" placeholder="Saran" cols="30" rows="10"></textarea>
            <input type="submit" name="send-mess" class="btn" value="send message">
            <p style='color: red;margin-top:5px;'>* pesan berhasil terkirim</p>
          </form>
      </div>
    </section>
    <!-- contact section ends -->

    <!-- brand section  -->
    <section class="brand-container">

      <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
          <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
          <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
          <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
          <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
          <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
        </div>
      </div>

    </section>

    <!-- footer section  -->

    <section class="footer">

      <div class="box-container">

        <div class="box">
          <h3>about us</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
        </div>
        <div class="box">
          <h3>branch locations</h3>
          <a href="#">india</a>
          <a href="#">USA</a>
          <a href="#">japan</a>
          <a href="#">france</a>
        </div>
        <div class="box">
          <h3>quick links</h3>
          <a href="#">home</a>
          <a href="#">book</a>
          <a href="#">packages</a>
          <a href="#">services</a>
          <a href="#">gallery</a>
          <a href="#">review</a>
          <a href="#">contact</a>
        </div>
        <div class="box">
          <h3>follow us</h3>
          <a href="#">facebook</a>
          <a href="#">instagram</a>
          <a href="#">twitter</a>
          <a href="#">linkedin</a>
        </div>

      </div>

      <h1 class="credit"> created by <span> kelmpok 2</span> | all rights reserved! </h1>

    </section>
















    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>

  </html>