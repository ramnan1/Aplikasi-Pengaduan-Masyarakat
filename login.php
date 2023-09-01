<?php
include 'core.php';
if (isset($_SESSION['user'])) {
  if ($_SESSION['user']['level'] == "admin") {
    header("Location:admin/index.php");
  } elseif ($_SESSION['user']['level'] == "member") {
    header("Location:member/index.php");
  }
}

// ambil inputan user
if (isset($_POST['button'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $query = "SELECT * FROM user WHERE username = '$username' and password = '$password'";

  $result = mysqli_query($conn, $query) or die("query gagal : " . mysqli_error($conn));
  if (mysqli_num_rows($result) > 0) {
    // jika data valid
    $user = mysqli_fetch_assoc($result);
    if ($user['level'] == 'member') {
      if ($user['status'] == 'diterima') {
        $_SESSION['has_login'] = true;
        $_SESSION['user'] = $user;
        header("Location:member/index.php");
      } else {
        alert('akun anda belum diverivikasi atau ditolak!');
      }
    } elseif ($user['level'] == 'admin') {
      $_SESSION['has_login'] = true;
      $_SESSION['user'] = $user;
      header("Location:admin/index.php");
    }

    // echo `<script>alert('anda berhasil login');
    // document.location.href= 'masyara'</script>`;

  } else {
    alert("data tidak match");
  }
}
?>

<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from affixtheme.com/html/xmee/demo/login-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 11:04:04 GMT -->

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
        <div class="col-lg-4">
          <div class="fxt-header">
            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
              SMK NEGERI 1 <br />
              <span style="color: hsl(218, 81%, 75%)">Login</span>
            </h1>

          </div>
        </div>
        <div class="col-lg-6">
          <div class="fxt-content">
            <h2>Login into your account</h2>
            <div class="fxt-form">
              <form method="POST">
                <div class="form-group">
                  <div class="fxt-transformY-50 fxt-transition-delay-1">
                    <input type="text" id="username" class="form-control" name="username" placeholder="username" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <div class="fxt-transformY-50 fxt-transition-delay-2">
                    <input id="password" type="password" class="form-control" name="password" placeholder="password" required="required">
                    <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                  </div>
                </div>
                <div class="form-group">
                  <div class="fxt-transformY-50 fxt-transition-delay-4">
                    <button type="submit" class="fxt-btn-fill" name="button">Log in</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="fxt-footer">
              <div class="fxt-transformY-50 fxt-transition-delay-9">
                <p>Don't have an account?<a href="register.php" class="switcher-text2 inline-text">Register</a></p>
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


<!-- Mirrored from affixtheme.com/html/xmee/demo/login-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 11:04:09 GMT -->

</html>