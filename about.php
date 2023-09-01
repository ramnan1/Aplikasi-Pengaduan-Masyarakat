<?php include 'core.php'; ?>

<?php include 'layouts/header.php';
$sql = "SELECT * FROM profile";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query); ?>
<!--Begin content wrapper-->
<div id="content" class="site-content content-wrapper page-content">





  <div id="post-2371" class="post-2371 page type-page status-publish has-post-thumbnail hentry">


    <div class="page-content-body">
      <div id="pl-2371" class="panel-layout">
        <div id="pg-2371-0" class="panel-grid panel-no-style">
          <div id="pgc-2371-0-0" class="panel-grid-cell">
            <div id="panel-2371-0-0-0" class="so-panel widget_sekolah_aboutus_widget panel-first-child" data-index="0">
              <div class="so-widget-sekolah_aboutus_widget so-widget-sekolah_aboutus_widget-default-d75171398898-2371">
                <section class="about-us-hero" style="background: url(https://sekolah.kenzap.com/wp-content/uploads/2016/11/about-us-bg.jpg) no-repeat center center;">
                  <div class="container">
                    <div class="hero-content">
                      <div class="hero-caption">
                        <h2><img src="img/<?= $data['foto']; ?>" alt="SMK NEGERI 1"></h2>
                        <p>SMK NEGERI 1 PERCUT SEI TUAN</p>
                      </div>
                    </div>
                  </div>
                </section>


                <section class="about-us-achievements ">
                  <div class="container">
                    <div class="row">
                      <div class="section-content clearfix">
                        <div class="col-sm-3">
                          <h3 class="about-count"><?= $data['jlh_siswa']; ?></h3>
                          <p>Jumlah Siswa</p>
                        </div>
                        <div class="col-sm-3">
                          <h3 class="about-count"><?= $data['jlh_guru']; ?></h3>
                          <p>Jumlah Guru</p>
                        </div>
                        <div class="col-sm-3">
                          <h3 class="about-count"><?= $data['jlh_mapel']; ?></h3>
                          <p>Jumlah Mapel</p>
                        </div>
                        <div class="col-sm-3">
                          <h3 class="about-count">345</h3>
                          <p>AWARDS WINNER</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>





                <section class="about-us-content">
                  <div class="container">
                    <div class="row">
                      <div class="section-content">
                        <h2>Bidang Keahlian</h2>
                        <p>Sekolah Menengah Kejuruan (SMK) adalah salah satu bentuk satuan pendidikan formal yang menyelenggarakan pendidikan kejuruan pada jenjang pendidikan menengah yang mempersiapkan peserta didik terutama untuk bekerja di bidang tertentu. Siswa dapat melanjutkan pendidikan SMK setelah menyelesaikan pendidikan di tingkat Sekolah Menengah Pertama atau sederajat.</p>
                      </div>
                      <div class="section-content-icons">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="col-sm-3">
                              <img src="img/rpl.png" class="img-fluid" alt="Empower">
                            </div>
                            <div class="col-sm-9">
                              <h3>Rekayasa Perangkat Lunak</h3>
                              <p>Program Keahlian Rekayasa Perangkat Lunak (RPL) adalah salah satu kompetensi keahlian dalam bidang Teknologi Komputer dan Informatika yang secara khusus mempelajari tentang pemrograman komputer.</p>
                            </div>
                          </div>

                          <div class="col-sm-6">
                            <div class="col-sm-3">
                              <img src="img/tkj.png" class="img-fluid" alt="Engage">
                            </div>
                            <div class="col-sm-9">
                              <h3>Teknik Komputer Dan Jaringan</h3>
                              <p>Teknik Komputer dan Jaringan atau yang biasa disebut TKJ adalah teknik yang mempelajari tentang cara instalasi PC, instalasi LAN, memperbaiki PC dan mempelajari program-program PC.</p>
                            </div>
                          </div>

                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="col-sm-3">
                              <img src="img/tptu.png" class="img-fluid" alt="Graduation">
                            </div>
                            <div class="col-sm-9">
                              <h3>TPTU</h3>
                              <p>Teknik Pendinginan dan Tata Udara (TPTU) merupakan salah satu Kompetensi Keahlian dari Program Keahlian: Teknik Ketenagalistrikan dan Bidang Keahlian: Teknologi dan Rekayasa,</p>
                            </div>
                          </div>

                          <div class="col-sm-6">
                            <div class="col-sm-3">
                              <img src="img/dpib.png" class="img-fluid rounded-circle" alt="Awarding">
                            </div>
                            <div class="col-sm-9">
                              <h3>DPIB</h3>
                              <p>Arsitektur (DPIB) | SMK Negeri 1 Pajangan. Arsitektur (Desain Pemodelan dan Informasi Bangunan) adalah jurusan yang mempelajari tentang perencanaan bangunan, pelaksanaan pembuatan gedung, dan perbaikan gedung.</p>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="container">
                    <!-- Gallery -->
                    <div class="row">
                      <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="img/taman_kolam.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
                      </div>

                      <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="img/wastafel.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                        <img src="img/6410acaa4bdcbRuang_meeting.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                      </div>

                      <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="img/ruang_tunggu.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                      </div>
                    </div>
                    <!-- Gallery -->
                  </div>



                </section>
              </div>
            </div>
            <div id="panel-2371-0-0-2" class="so-panel widget_sekolah_partner_widget panel-last-child" data-index="2">
              <div class="so-widget-sekolah_partner_widget so-widget-sekolah_partner_widget-default-d75171398898-2371">
                <section class="page-sponsor" style="background-color: #fafafa">
                  <div class="container">
                    <div class="row">
                      <div class="sponsor-logo">
                        <div class="col-sm-3">
                          <img src="https://sekolah.kenzap.com/wp-content/uploads/2017/03/sponsor-logo-1.png" alt="Sponsor logo">
                        </div>
                        <div class="col-sm-3">
                          <img src="https://sekolah.kenzap.com/wp-content/uploads/2017/03/sponsor-logo-2.png" alt="Sponsor logo">
                        </div>
                        <div class="col-sm-3">
                          <img src="https://sekolah.kenzap.com/wp-content/uploads/2017/03/sponsor-logo-3.png" alt="Sponsor logo">
                        </div>
                        <div class="col-sm-3">
                          <img src="https://sekolah.kenzap.com/wp-content/uploads/2017/03/sponsor-logo-4.png" alt="Sponsor logo">
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

</div><!-- #primary -->



<div class="clearfix"></div>
<?php include 'layouts/footer1.php'; ?>