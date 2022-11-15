<?php
require "../config.php";
require "../admin/fungtion.php";
if(isset($_GET['id_villa'])){
  $query = mysqli_query($db,"SELECT * FROM data_villa WHERE id_villa=$_GET[id_villa]");
  $result = mysqli_fetch_assoc($query);
  $nama_villa = $result['nama_villa'];
  $gambar_villa = $result['gambar_villa'];
  $deskripsi_villa = $result['deskripsi_villa'];
  $harga_villa = $result['harga_villa'];
  $alamat_villa = $result['alamat_villa'];
}
if(isset($_POST['booking'])){
  $nama_penyewa = $_POST['nama_penyewa'];
  $no_telp = $_POST['no_telp'];
  $tanggal_datang = $_POST['tanggal_datang'];
  $tanggal_pergi = $_POST['tanggal_pergi'];
}
?>

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
    <img src="images/logo.png" alt="" width="80px">

  </header>

  <br>
  <br>
  <br>
  <br>

  <section class="book" id="book">

    <h1 class="heading">
      <span>b</span>
      <span>o</span>
      <span>o</span>
      <span>k</span>
      <span class="space"></span>
      <span>n</span>
      <span>o</span>
      <span>w</span>
    </h1>
    <div class="row">
      <div class="image">
        <!-- <img src="images/b1.png" alt=""> -->
        <section class="packages" id="packages" >
          <div class="box-container">
            <div class="box">
              <img src="../img/<?= $gambar_villa?>" alt="">
              <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i><?= $nama_villa?></h3>
                <p><?= $deskripsi_villa?></p>
                <p><?= $alamat_villa?></p>
                <div class="price">Rp<?= $harga_villa?></div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <form action="">
        <div class="inputBox">
          <h3>Nama</h3>
          <input type="text" name="nama_penyewa" placeholder="Nama Penyewa">
        </div>
        <div class="inputBox">
          <h3>No. Telpon</h3>
          <input type="number" name="no_telp" placeholder="Nomor telpon penyewa">
        </div>
        <div class="inputBox">
          <h3>Tanggal Datang</h3>
          <input type="date" name="tanggal_datang">
        </div>
        <div class="inputBox">
          <h3>tanggal Pergi</h3>
          <input type="date" name="tanggal_pergi">
        </div>
        <div class="inputBox">
          <h3>Total Dibayar</h3>
          <input type="text" name="total_pembayaran" value='Rp<?=$harga_villa?>' disabled>
        </div>
        <input type="submit" name="booking" class="btn" value="booking">
      </form>

    </div>

  </section>
</body>