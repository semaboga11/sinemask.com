<?php 
session_start();
include("baglanti.php");
require_once('baglanti.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sinema Sevenler Kulübü</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    .body{
        font-family: Arial, Helvetica, sans-serif;
    };
    .ul{
        font-family: Arial, Helvetica, sans-serif;
    };
    </style>
  </head>
  <body>
    <div class="container" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; color: black;  margin-top:10px; margin-bottom:0px;">
  
    <!-- nav basla -->
  <ul class="nav nav-underline bg-white fixed-top container"><a class="navbar-brand" href="index.php">
      <img src="img/SSK.png"  width="70" height="50">
    </a>
  <li class="nav-item">
    <a class="nav-link " style="color: black; margin-top:10px;"  href="index.php">Anasayfa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " style="color: black; margin-top:10px;" href="filmler.php">Filmer</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " style="color: black; margin-top:10px;" href="listem.php">Listem</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " style="color: black; margin-top:10px;" href="yorumlar.php">Yorumlar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " style="color: black; margin-top:10px;"href="iletisim.php">İletişim</a>
  </li>
  
  <a class="navbar-brand float-end   ms-auto mb-2 mb-lg-0" href="login.php"  style="float:left; margin-top: 5px;">
      <img src="img/login.png"  width="40" height="40">
    </a>
</ul>
<!-- nav bitis -->
<div style="padding: 10px;">
<div class="container p-5">
        <div class="card p-5">

            <form action="yorumlar.php" method="post" > 
                <div style="text-align:center;"><textarea name="yorumlar_yorum" placeholder="Yorumunuz" ></textarea> </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-secondary" type="submit" name="yorumlar_kaydet">Ekle</button>
                    <button class="btn btn-outline-secondary" type="reset">Sil</button>
                    </div>
                    <button class="btn btn-secondary" type="submit" name="yorumlar_guncelle">Güncelle</button>

            </form> 
            <table class="table table-bordered border-black">
        <tr>
            <th>Yorumlar</th>
        </tr>
                  <?php 
                  $listesorgu=$db->prepare("SELECT * FROM yorumlar");
                  $listesorgu->execute();
                //   $veriListele=$veri->fetchAll();
                  while ($yorumlardizisi=$listesorgu->fetch(PDO::FETCH_ASSOC)){ ?>
                    <tr>
                        <td><?php echo $yorumlardizisi['yorumlar_yorum'];?></td>
                    </tr>
                  <?php } ?>  
            </table>
        </div>
        
    </div>



<!-- footer basla -->
<div style="margin-bottom: 0px; margin-top: 50px;">
<div class="row g-0 p-50 " style="margin-left: 200px; margin-bottom: 0px;">
  <div class=" col-sm-2"><img src="img/SSK.png" alt=""  width="70" height="50" style="margin-bottom: 20px;"></div>
  <div class=" col-sm-2">
    <p>© Copyright 2023</p>
</div>
<div class="col-sm-2">
    <a class="nav-link " style="color: black;"  href="index.php">Anasayfa</a>
  </div>
  <div class="col-sm-2">
    <a class="nav-link " style="color: black;" href="filmler.php">Filmer</a>
  </div>
  <div class="col-sm-2">
    <a class="nav-link " style="color: black; " href="yorumlar.php">Yorumlar</a>
  </div>
  <div class="col-sm-2">
    <a class="nav-link " style="color: black; "href="iletisim.php">İletişim</a>
  
  </div>
</div></div>
<!-- footer bitis -->

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>