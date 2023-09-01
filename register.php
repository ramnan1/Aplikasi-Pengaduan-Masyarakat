<?php
include 'core.php';

if (isset($_SESSION['user'])) {
  if ($_SESSION['user']['level'] == "admin") {
    header("Location:petugas/index.php");
  } elseif ($_SESSION['user']['level'] == "member") {
    header("Location:member/index.php");
  }
}


if (isset($_POST['register'])) {
  $name = $_POST['name'];
  $username = $_POST['username'];
  $handphone = $_POST['handphone'];
  $password = md5($_POST['password']);

  mysqli_query($conn, "INSERT INTO user VALUES('','$name','$username','$password','$handphone','member','diproses')");
  alert('registrasi Berhasil ! Silahkan Tunggu Verifikasi Admin');
}

?>
<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from affixtheme.com/html/xmee/demo/register-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 11:04:19 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $app_name; ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="css/fontawesome-all.min.css">
  <!-- Flaticon CSS -->
  <link rel="stylesheet" href="font/flaticon.css">
  <!-- Google Web Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <div id="preloader" class="preloader">
    <div class='inner'>
      <div class='line1'></div>
      <div class='line2'></div>
      <div class='line3'></div>
    </div>
  </div>
  <section class="fxt-template-animation fxt-template-layout9" data-bg-image="img/figure/bg9-l.jpg">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-4 col-12">
          <div class="fxt-header">
            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
              SMK NEGERI 1 <br />
              <span style="color: hsl(218, 81%, 75%)">Register</span>
            </h1>

          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="fxt-content">
            <h2>Register for new account</h2>
            <div class="fxt-form">
              <form method="POST">
                <div class="form-group">
                  <div class="fxt-transformY-50 fxt-transition-delay-1">
                    <input type="text" id="name" class="form-control" name="name" placeholder="Name" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <div class="fxt-transformY-50 fxt-transition-delay-1">
                    <input type="text" id="username" class="form-control" name="username" placeholder="username" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <div class="fxt-transformY-50 fxt-transition-delay-1">
                    <input type="number" id="handphone" class="form-control" name="handphone" placeholder="handphone" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <div class="fxt-transformY-50 fxt-transition-delay-2">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required="required">
                    <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                  </div>
                </div>
                <div class="form-group">
                  <div class="fxt-transformY-50 fxt-transition-delay-4">
                    <button type="submit" class="fxt-btn-fill" name="register">Register</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="fxt-footer">
              <div class="fxt-transformY-50 fxt-transition-delay-9">
                <p>Already have an account?<a href="login.php" class="switcher-text2 inline-text">Log in</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- jquery-->
  <script src="js/jquery-3.5.0.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Imagesloaded js -->
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <!-- Validator js -->
  <script src="js/validator.min.js"></script>
  <!-- Custom Js -->
  <script src="js/main.js"></script>

</body>


<!-- Mirrored from affixtheme.com/html/xmee/demo/register-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 11:04:19 GMT -->

</html>