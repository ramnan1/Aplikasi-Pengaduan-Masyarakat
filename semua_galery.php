<?php include 'core.php';

$sql = "SELECT * FROM galery WHERE status = 'diterima'";
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from sekolah.kenzap.com/school-gallery/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Mar 2023 18:09:25 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<?php include 'layouts/header.php';

?>

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
                    <!-- Carousel wrapper -->
                    <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
                      <!-- Controls -->

                      <!-- Inner -->
                      <div class="carousel-inner ">
                        <!-- Single item -->
                        <div class="carousel-item active">
                          <div class="container">
                            <div class="row">
                              <?php while ($data = mysqli_fetch_assoc($query)) { ?>
                                <div class="col-md-4">
                                  <div class="card " style="height: 500px">
                                    <img src="img/<?= $data['foto'] ?>" class="card-img-top" alt="Waterfall" />
                                    <div class="card-body">
                                      <h5 class="card-title"><?= $data['name'] ?></h5>
                                      <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk
                                        of the card's content.
                                      </p>
                                      <a href="galery.php?id=<?= $data['id']; ?>" class="btn btn-primary">Read More</a>
                                    </div>
                                  </div>
                                </div>
                              <?php } ?>


                            </div>
                          </div>
                        </div>

                        <!-- Single item -->

                      </div>
                      <!-- Inner -->
                    </div>
                    <!-- Carousel wrapper -->
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