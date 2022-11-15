
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Taurinesia Villa </title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styleland.css">
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
    
        <img src="images/logo.png" alt="" width="100px"></a>
    
        <nav class="navbar">
            <a href="login.php">home</a>
            <a href="login.php">packages</a>
            <a href="login.php">gallery</a>
            <a href="login.php">about</a>
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

    <div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
        <h3>login</h3>
        <input type="email" class="box" placeholder="enter your email">
        <input type="password" class="box" placeholder="enter your password">
        <input type="submit" value="login now" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password? <a href="register.php">click here</a></p>
        <p>don't have and account? <a href="#">register now</a></p>
    </form>

</div>

<section class="home" id="home">

  <div class="content">
      <h3>Welcome to Taurinesia Villa Website</h3>
      <p>The luxuries of a Resort with the Intimacy of Home</p>
      <a href="login.php" class="btn">visit us for more info </a>
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



<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Taurinesia Villa merupakan villa terbaik di Samarinda dengan segala keindahan panrai dan puncak, dengan full services, siap menjadi tempat liburan mu berbeda ! </p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#login.php">juanda Villa</a>
            <a href="#login.php"> Antasari Villa</a>
            <a href="#login.php">Pramuka Villa</a>
            <a href="login.php">Perjuangan Villa</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
                <a href="login.php">home</a>
                <a href="login.php">packages</a>
                <a href="login.php">gallery</a>
                <a href="login.php">about</a>
            </nav>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="login.php">facebook</a>
            <a href="login.php">instagram</a>
            <a href="login.php">twitter</a>
            <a href="login.php">linkedin</a>
        </div>

    </div>

    <h1 class="credit"> created by <span> Kelompok 2 </span> | The luxuries of a Resort with the Intimacy of Home ! </h1>

</section>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>