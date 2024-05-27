<?php 
include("baglanti.php");

$username_err="";
$email_err="";
$parola_err="";
if (isset($_POST["kaydet"])) {
    // kullanıcı adı dogrulama
    if (empty($_POST["kullanicilar_ad"])) {
        $username_err="Kullanıcı adı boş geçilemez!";
    }
    else if (strlen($_POST["kullanicilar_ad"])<6) {
        $username_err="Kullanıcı adı en az 6 karakterden oluşmalıdır!";
    }
    else if (!preg_match('/^[a-z\d_]{5,20}$/i', $_POST["kullanicilar_ad"])) {
        $username_err="Kullanıcı adı büyük küçük harf ve rakamdan oluşmalıdır!";
        }
        else {
            $username=$_POST["kullanicilar_ad"];
        }

    // email dogrulama
    if (empty($_POST["kullanicilar_email"])) {
      $email_err="Email alanı boş geçilemez.";
    }
    else if (!filter_var($_POST["kullanicilar_email"], FILTER_VALIDATE_EMAIL)) {
      $email_err = "Geçersiz Email formatı!";
    }
    else {
      $email=$_POST["kullanicilar_email"];
    }
    // parola dogrulama
    if (empty($_POST["kullanicilar_parola"])) {
      $parola_err="Parola alanı boş geçilemez.";
    }
     else {
      $password=$_POST["kullanicilar_parola"];
     }

    $email=$_POST["kullanicilar_email"];
    $password=password_hash($_POST["kullanicilar_parola"], PASSWORD_DEFAULT);

    if(isset($username) && isset($email) && isset($password)){

   
    $ekle="INSERT INTO kullanicilar (kullanicilar_ad, kullanicilar_email, kullanicilar_parola) VALUES ('$username','$email','$password')";
    $calistirekle=mysqli_query($baglanti,$ekle);

    if ($calistirekle) {
        echo '<div class="alert alert-success" role="alert">
        Kayıt başarılı bir şekilde eklendi.
      </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
        Kayıt eklenirken bir prolem oluştu.
      </div>';
    }
    mysqli_close($baglanti);
} }
?>
<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-5">
        <div class="card p-5">

                <form action="giris.php"method="POST">
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kullanıcı Adı</label>
                <input type="text" class="form-control 
                <?php 
                if (!empty($username_err)) {
                  echo "is-invalid";
                }
                ?>
                " id="exampleInputEmail1" name="kullanicilar_ad">
                <div class="invalid-feedback">
                <?php 
                echo $username_err;
                ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Adresi</label>
                <input type="text" class="form-control <?php 
                if (!empty($email_err)) {
                  echo "is-invalid";
                }
                ?>" id="exampleInputEmail1" name="kullanicilar_email">
                <div class="invalid-feedback">
                <?php 
                echo $email_err;
                ?>

                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Parola</label>
                <input type="password" class="form-control <?php 
                if (!empty($parola_err)) {
                  echo "is-invalid";
                }
                ?>" id="exampleInputPassword1" name="kullanicilar_parola">
                <div class="invalid-feedback">
                Parola hata mesajı. <?php 
                echo $parola_err;
                ?>
                </div>
            </div>
            <div class="d-grid gap-2">
            <button type="submit" class="btn btn-dark" name="kaydet">KAYDET</button>
            </div>
            </form>

        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>