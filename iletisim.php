<?php 
session_start();
include("baglanti.php");
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
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <div class="container" style="margin-top: 100px;">
        <div class="bg-dark text-white text-center py-2 mt-5">
             <h2>İletişim Sayfası</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385396.3211659783!2d28.6825179770093!3d41.00537019816266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1716769979300!5m2!1str!2str"  width="100%" height="435" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <form action="" method="">
                    <div class="card mt-4">
                        <div class="card-body p-3">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-user text-dark"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="" placeholder="Ad Soyad" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-envelope text-dark"></i>
                                        </div>
                                    </div>
                                    <input type="email" class="form-control" name="" placeholder="E-Posta" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-tag text-dark"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="" placeholder="Konu" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-comment text-dark"></i>
                                        </div>
                                    </div>
                                    <textarea class="form-control" placeholder="Lütfen Mesajınızı Buraya Yazın.." rows="6" required></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="GÖNDER" class="btn btn-dark btn-block">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
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
    <a class="nav-link " style="color: black; " href="iletisim.php">İletişim</a>
  
  </div>
</div></div>
<!-- footer bitis -->

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>