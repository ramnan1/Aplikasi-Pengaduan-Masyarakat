<?php include 'core.php';
include 'layouts/header.php';

$id = $_GET['id'];
if (isset($_POST['coment'])) {
  if (isset($_SESSION['has_login'])) {
    $user_id = $_SESSION['user']['id'];
    $tgl = date("Y-m-d");
    $isi_coment = $_POST['isi_coment'];
    $galery_id = $_POST['galery_id'];
    $sql = "INSERT INTO coment_galery(coment,tgl_coment,galery_id,user_id)VALUES('$isi_coment','$tgl','$galery_id','$user_id')";
    mysqli_query($conn, $sql);
    echo "<script>alert('Coment berhasil');</script> ";
  } else {
    echo "<script>alert('Anda Harus Login');
      document.location.href = 'login.php';</script> ";
  }
}
$user = "SELECT user.username, coment_galery.tgl_coment, coment_galery.coment FROM user JOIN coment_galery ON user.id = coment_galery.user_id WHERE galery_id = '$id';";
$result2 = mysqli_query($conn, $user);

$sql = "SELECT * FROM galery WHERE id = '$id'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from sekolah.kenzap.com/school-gallery/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Mar 2023 18:09:25 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<style>
  .widget .panel-body {
    padding: 0px;
  }

  .widget .list-group {
    margin-bottom: 0;
  }

  .widget .panel-title {
    display: inline
  }

  .widget .label-info {
    float: right;
  }

  .widget li.list-group-item {
    border-radius: 0;
    border: 0;
    border-top: 1px solid #ddd;
  }

  .widget li.list-group-item:hover {
    background-color: rgba(86, 61, 124, .1);
  }

  .widget .mic-info {
    color: #666666;
    font-size: 11px;
  }

  .widget .action {
    margin-top: 5px;
  }

  .widget .comment-text {
    font-size: 12px;
  }

  .widget .btn-block {
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
  }
</style>

<body class="page-template-default page page-id-2607 siteorigin-panels siteorigin-panels-before-js">


  <!--Begin content wrapper-->
  <div id="content" class="site-content content-wrapper page-content">

    <div id="post-2607" class="post-2607 page type-page status-publish hentry">


      <div class="page-content-body">
        <div id="pl-2607" class="panel-layout">
          <div id="pg-2607-0" class="panel-grid panel-no-style">
            <div id="pgc-2607-0-0" class="panel-grid-cell">
              <div id="panel-2607-0-0-0" class="so-panel widget_sekolah_gallery_widget panel-first-child panel-last-child" data-index="0">
                <div class="so-widget-sekolah_gallery_widget so-widget-sekolah_gallery_widget-default-d75171398898-2607">

                  <section class="gallery-hero" style="background-image: url(https://sekolah.kenzap.com/wp-content/uploads/2011/07/dsc04563.jpg);">
                    <div class="container">
                      <div class="hero-content">
                        <div class="hero-caption">
                          <h2>Gallery Sekolah</h2>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, <br /> sed diam nonummy nibh euismod</p>
                        </div>
                      </div>
                    </div>
                  </section>

                  <section>
                    <div class="container">
                      <div class="" data-mdb-zoom-effect="true" data-mdb-auto-height="true">

                        <div class="row shadow-5">
                          <div class="col-md-8 mb-1">
                            <div class="lightbox">
                              <img src="img/<?= $data['foto']; ?>" alt="Gallery image 1" class="img-fluid active w-100" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- Carousel wrapper -->
                  </section>
                  <section>

                    <div class="container mt-3">
                      <div class="row shadow-5">
                        <div class="col-md-8">

                          <div class="post-comments">

                            <form action="" method="post">
                              <div class="form-group">
                                <input type="hidden" name="galery_id" value="<?= $_GET['id']; ?>">
                                <label for="coment" style="font-size: 20px;">Your Comment</label>
                                <textarea name="isi_coment" class="form-control" rows="3"></textarea>
                              </div>
                              <button type="submit" name="coment" class="btn btn-primary">Send</button>
                            </form>
                          </div>

                        </div>
                      </div>

                    </div>

                  </section>
                  <section style="background-color: #f7f6f6;">
                    <div class="container">

                      <div class="row mt-3">
                        <div class="panel panel-default widget">
                          <div class="panel-heading">
                            <span class="glyphicon glyphicon-comment"></span>
                            <h3 class="panel-title">
                              Recent Comments</h3>

                          </div>
                          <div class="panel-body">
                            <ul class="list-group">
                              <li class="list-group-item">
                                <?php

                                while ($data2 = mysqli_fetch_assoc($result2)) {

                                ?>
                                  <div class="row mb-3">
                                    <div class="col-xs-2 col-md-1">
                                      <img src="img/unnamed.jpg" class="img-circle img-responsive" alt="" />
                                    </div>
                                    <div class="col-xs-10 col-md-11">
                                      <div>
                                        <span class="text-primary fw-bold mb-0">
                                          <?= $data2['username']; ?></span>
                                        <div class="mic-info">
                                          on <?= $data2['tgl_coment']; ?>
                                        </div>
                                      </div>
                                      <div class="comment-text">
                                        <?= $data2['coment']; ?>
                                      </div>
                                    </div>
                                  </div>
                                  <hr>
                                <?php } ?>
                              </li>
                            </ul>

                          </div>
                        </div>
                      </div>
                      <div class="row d-flex justify-content-center">
                        <?php

                        while ($data2 = mysqli_fetch_assoc($result2)) {

                        ?>
                          <div class="col-md-10 ">
                            <div class="card mb-3">
                              <div class="card-body">
                                <div class="d-flex flex-start">
                                  <div class="w-100">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <h6 class="text-primary fw-bold mb-0"><?= $data2['username']; ?>
                                        <span class="text-dark ms-2"><?= $data2['coment']; ?></span>
                                      </h6>
                                      <p class="mb-0"><?= $data2['tgl_coment']; ?></p>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>

                        <?php } ?>
                      </div>
                    </div>
                </div>
                </section>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div><!-- #post-## -->

  </div><!-- #primary -->



  <div class="clearfix"></div>
  <?php include 'layouts/footer1.php';

  ?>