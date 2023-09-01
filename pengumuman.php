<?php include 'core.php';
include 'layouts/header.php';
$sql = "SELECT * FROM pengumuman WHERE status = 'diterima'";
$query = mysqli_query($conn, $sql);

$current_time = time();
?>


<body class="page-template-default page page-id-2731 siteorigin-panels siteorigin-panels-before-js">


  <!--Begin content wrapper-->
  <div id="content" class="site-content content-wrapper page-content">





    <div id="post-2731" class="post-2731 page type-page status-publish hentry">


      <div class="page-content-body">
        <div id="pl-2731" class="panel-layout">
          <div id="pg-2731-0" class="panel-grid panel-no-style">
            <div id="pgc-2731-0-0" class="panel-grid-cell">
              <div id="panel-2731-0-0-0" class="so-panel widget_sekolah_events_widget panel-first-child" data-index="0">
                <div class="so-widget-sekolah_events_widget so-widget-sekolah_events_widget-default-d75171398898-2731">
                  <section class="events-hero" style="background: url(https://sekolah.kenzap.com/wp-content/uploads/2016/11/events-bg.jpg) no-repeat center center;">
                    <div class="container">
                      <div class="hero-content">
                        <div class="hero-caption">
                          <h2>Pengumuman</h2>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section class="events-list">
                    <div class="container">
                      <div class="row">
                        <?php while ($data = mysqli_fetch_assoc($query)) {
                          $tgl = $data['tgl'];
                          $target_time = strtotime($tgl); // waktu target yang ingin dicek
                        ?>

                          <div class="col-xs-6 col-lg-3">
                            <div class="events-item">
                              <a href="pengumumann.php?id=<?= $data['id']; ?>">

                                <div class="events-item-img">

                                  <img width="268" height="163" src="img/<?= $data['foto']; ?>" class="img-responsive wp-post-image" alt="" decoding="async" loading="lazy" />
                                </div>
                              </a>
                              <div class="events-item-info">
                                <h3><?= $data['judul']; ?></h3>
                                <ul class="event-meta">
                                  <li>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <?php echo date('l , Y-M-d', $target_time);  ?>
                                  </li>
                                  <li>
                                    <?php if ($current_time > $target_time) { ?>
                                      <p class="text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                        </svg> Waktu Sudah Berlalu</p>
                                    <?php } else { ?>
                                      <p class="text-primary" style="color: blue;"><span class="text-primary" style="color: blue;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                          </svg> Waktu Masih Berlaku</span></p>
                                    <?php } ?>

                                  </li>
                                </ul>
                                <p><?= $data['isi_pengumuman']; ?></p>
                              </div>

                            </div>
                          </div>

                        <?php } ?>

                      </div>
                    </div>
                  </section>
                </div>
              </div>
              <div id="panel-2731-0-0-1" class="so-panel widget_sekolah_newsletter_widget panel-last-child" data-index="1">
                <div class="so-widget-sekolah_newsletter_widget so-widget-sekolah_newsletter_widget-default-d75171398898-2741">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- #post-## -->

  </div><!-- #primary -->



  <div class="clearfix"></div>
  <?php include 'layouts/footer1.php' ?>