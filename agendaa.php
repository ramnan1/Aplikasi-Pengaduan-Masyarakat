<?php include 'core.php';

$id = $_GET['id'];
$sql = "SELECT * FROM agenda WHERE status = 'diterima' AND id = $id";
$query = mysqli_query($conn, $sql);
$current_time = time();
?>

<!DOCTYPE html>
<html lang="en-US">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<!-- Mirrored from sekolah.kenzap.com/school-gallery/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Mar 2023 18:09:25 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<?php include 'layouts/header.php';

?>
<style>
  .row-striped:nth-of-type(odd) {
    background-color: #efefef;
    border-left: 4px #000000 solid;
  }

  .row-striped:nth-of-type(even) {
    background-color: #ffffff;
    border-left: 4px #efefef solid;
  }

  .row-striped {
    padding: 15px 0;
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
                          <h2>Agenda Sekolah</h2>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, <br /> sed diam nonummy nibh euismod</p>
                        </div>
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
  <div class="page-content-body">
    <div id="pl-2607" class="panel-layout">
      <div id="pg-2607-0" class="panel-grid panel-no-style">
        <div id="pgc-2607-0-0" class="panel-grid-cell">
          <div id="panel-2607-0-0-0" class="so-panel widget_sekolah_gallery_widget panel-first-child panel-last-child" data-index="0">
            <div class="so-widget-sekolah_gallery_widget so-widget-sekolah_gallery_widget-default-d75171398898-2607">
              <section style="background-color: #f7f6f6;">

                <div class="container">
                  <?php while ($data = mysqli_fetch_assoc($query)) {;
                    $tgl = $data['jadwal'];
                    $target_time = strtotime($tgl); ?>
                    <div class="row row-striped text-danger text-dark m-4">
                      <div class="col-md-2 text-right">
                        <h1 class="display-4 "><span class="btn btn-secondary"><?php echo date('d', strtotime($data['jadwal']));  ?></span></h1>
                        <h2 class="text-bold text-dark"><?php echo date('M', strtotime($data['jadwal']));  ?></h2>
                      </div>

                      <div class="col-md-10">

                        <h3 class="text-uppercase"><strong class="text-dark text-bold"><?= $data['acara']; ?></strong></h3>

                        <ul class="list-inline">
                          <li class="list-inline-item"> Post : <i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo date('Y,m,d', strtotime($data['created_at']));  ?></li>
                          <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date('H:i:s', strtotime($data['created_at']));  ?></li>
                          <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> SMK Negeri 1 percut sei Tuan</li>
                        </ul>
                        <ul class="list-inline">
                          <li class="list-inline-item"> Mulai : <i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo date('Y,m,d', strtotime($data['jadwal']));  ?></li>
                          <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date('H:i:s', strtotime($data['jadwal']));  ?></li>
                          <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> SMK Negeri 1 percut sei Tuan</li>
                        </ul>
                        <ul class="list-inline">
                          <li class="list-inline-item"> Selesai : <i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo date('Y,m,d', strtotime($data['selesai_acara']));  ?></li>
                          <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date('H:i:s', strtotime($data['selesai_acara']));  ?></li>
                          <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> SMK Negeri 1 percut sei Tuan</li>
                        </ul>
                        <?php if ($current_time > $target_time) { ?>
                          <p class="text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                            </svg> Waktu Sudah Berlalu</p>
                        <?php } else { ?>
                          <p class="text-primary" style="color: blue;"><span class="text-primary" style="color: blue;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                              </svg> Waktu Masih Berlaku</span></p>
                        <?php } ?>
                        <p><a href="agendaa.php?id=<?= $data['id']; ?>">Read More</a><?= $data['isi_acara']; ?></p>

                      </div>
                    </div>

                  <?php } ?>
                </div>


              </section>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
  </div>

  </div><!-- #post-## -->



  </div><!-- #primary -->

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <div class="clearfix"></div>
  <?php include 'layouts/footer1.php';

  ?>