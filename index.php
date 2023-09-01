<?php include 'core.php';
$sql = "SELECT * FROM profile";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

$query2 = "SELECT * FROM galery";
$result = mysqli_query($conn, $query2);
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from sekolah.kenzap.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 06:54:40 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->


<body class="home page-template-default page page-id-2446 siteorigin-panels siteorigin-panels-before-js siteorigin-panels-home">


  <?php include 'layouts/header.php'; ?>




  <!--Begin content wrapper-->
  <div id="content" class="site-content content-wrapper page-content">





    <div id="post-2446" class="post-2446 page type-page status-publish hentry">


      <div class="page-content-body">
        <div id="pl-2446" class="panel-layout">
          <div id="pg-2446-0" class="panel-grid panel-no-style">
            <div id="pgc-2446-0-0" class="panel-grid-cell">
              <div id="panel-2446-0-0-0" class="so-panel widget_sekolah_banner_widget panel-first-child" data-index="0">
                <div class="so-widget-sekolah_banner_widget so-widget-sekolah_banner_widget-default-d75171398898-2446">
                  <section class="hero-1" style="background-image: url(https://sekolah.kenzap.com/wp-content/uploads/2016/11/hero-1-bg.jpg);">
                    <div class="container">
                      <div class="row mb-5 mt-0">
                        <div class="hero-content">
                          <div class="hero-img col-sm-5 col-md-5">
                            <img src="img/<?= $data['foto']; ?>" alt="Welcome to &lt;span&gt;sekolah&lt;/span&gt;">
                          </div>

                          <div class="hero-caption col-sm-7 col-md-7">
                            <h2>Welcome to <span><?= $data['name']; ?></span></h2>
                            <p>Sekolah Menengah Kejuruan (SMK) merupakan pendidikan pada jenjang menengah yang mengutamakan pengembangan keterampilan siswa. Keterampilan yang dimiliki merupakan hasil dari pembelajaran di sekolah maupun di industri.</p>
                            <a href="#" class="action-btn hvr-push">TAKE A TOUR</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
              <div id="panel-2446-0-0-1" class="so-panel widget_sekolah_feature_widget" data-index="1">
                <div class="so-widget-sekolah_feature_widget so-widget-sekolah_feature_widget-default-d75171398898-2446">
                  <section class="featured-box">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-4 col-md-4">
                          <div class="box box-1" style="background-image: url(https://sekolah.kenzap.com/wp-content/uploads/2017/06/how-to-choose-a-guitar-playing-style-388x370.jpg);">
                            <a style="background:rgba(235,35,88,0.9)" href="#">
                              STUDENT <span>EVENTS</span>
                            </a>
                          </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                          <div class="box box-2" style="background-image: url(https://sekolah.kenzap.com/wp-content/uploads/2017/06/shutterstock_84924781-388x370.jpg);">
                            <a style="background:rgba(245,140,4,0.9)" href="#">
                              CLASSROOM <span>STORIES</span>
                            </a>
                          </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                          <div class="box box-3" style="background-image: url(https://sekolah.kenzap.com/wp-content/uploads/2016/11/about-us-img-388x370.jpg);">
                            <a style="background:rgba(74,217,217,0.9)" href="#">
                              TEACHERS <span>PROFILE</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>




                </div>
              </div>
              <div id="panel-2446-0-0-2" class="so-panel widget_sekolah_welcome_widget" data-index="2">
                <div class="so-widget-sekolah_welcome_widget so-widget-sekolah_welcome_widget-default-d75171398898-2446">
                  <section class="welcome">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-7 col-md-7">
                          <div class="welcome-content">
                            <h3>Sejarah</h3>
                            <p>Sekolah Menengah Kejuruan (SMK) Negeri 1 Percut Sei Tuan Kabupaten Deli Serdang berdiri pada tahun 1955.Jl. Pada Awalnya Bernama SGPT (Sekolah Guru Pendidikan Teknik ) Tahun (1955 - 1964) di Jl. STM Kampung Baru Medan,Kemudian Berganti menjadi STM Instruktor Tahun(1964 - 1976), kemudian Berganti menjadi STM Negeri 4 Medan Tahun(1976 - 1997), dan sekarang menjadi SMK Negeri 1 Percut Sei Tuan Tahun (1997 - sekarang)
                            </p>
                            <p>Pada awalnya SMK Negeri 1 Percut Sei Tuan beralokasi di Jalan Kampung Baru Medan (Sekarang Bengkel Praktek SMKN 2 Medan ), dan pada tahun 1992 pemerintah Indonesia bekerjasama dengan Loand ADB dan Federal Jerman mengembangkan sekolah ini baik dari segi fasilitas praktek maupun gedung sekolah. Karena lokasi sekolah dan luas area tidak memenuhi standar yang telah ditetapkan, maka lokasi sekolah ini dipindahkan ke jalan kolam no. 3 Medan Estate yang luas area sekolah ± 4,8 Ha</p>

                          </div>
                        </div>

                        <div class="col-sm-5 col-md-5">
                          <div class="welcome-img">
                            <img src="img/gedung_administrasi.jpg" alt="Grandmaster Talk">
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section class="welcome">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-6 col-md-6">
                          <div class="welcome-content">
                            <h3>Visi</h3>
                            <p>Berkomitmen tinggi dalam menyelenggarakan pendidikan dan latihan untuk menghasilkan sumber daya manusia (SDM) yang menguasai ilmu Pengetahuan dan Teknologi (IPTEK) serta berakhlak mulia dan mampu bersaing mengisi pasar kerja secara global.
                            </p>
                            <p>
                            <h2>Tujuan</h2>
                            <ol>
                              <li>Memberi arah dan landasan kerja bagi semua warga sekolah</li>
                              <li>Memberi dorongan /motivasi pelaksanaan kerja yang lebih baik dalam rangka peningkatan profesionalisme dan efektifitas serta efisiensi</li>
                            </ol>
                            </p>
                            <p>
                            <h2>Sasaran</h2>
                            <ol>
                              <li>Meningkatkan dan mengembangkan sumber daya manusia</li>
                              <li>Meningkatkan dan mengembangkan sarana dan prasarana</li>

                            </ol>
                            </p>


                          </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                          <div class="welcome-content">
                            <h2>Misi</h2>
                            <ol>
                              <li>Melaksanakan kebijakan pemerintah untuk mewujudkan SMK yang mempunyai nilai-nilai karakter bangsa guna menghasilkan tamatan yang memiliki kemampuan : <ol>
                                  a. Kompetensi sesuai pasar kerja <br>
                                  b. Penguasaan Bahasa Inggris dengan pola TOEIC ≥300 <br>
                                  c. Berdisiplin, jujur, loyal, patuh dan mempunyai etos kerja yang baik serta berjiwa wirausaha <br>
                                  d .Menjadi warga Negara yang produktif, adaptif, kreatif, dan inovatif
                                  Mendapatkan sertifikat kompetensi berstandar nasional dan industri
                                </ol>
                              </li>
                              <li>Peningkatan kompetensi tenaga pendidik dan tenaga kependidikan</li>
                              <li>Peningkatan pelayanan prima terhadap pelanggan</li>
                              <li>Peningkatan hubungan kerja sama dengan Dunia Usaha / Dunia Industri dalam melaksanakan praktek industri dan pemasaran tamatan</li>
                              <li>Mewujudkan lingkungan sekolah yang bersih, hijau, tertib, aman dan kondusif</li>
                              <li>Memaksimalkan pemanfaatan fasilitas praktek untuk kegiatan unit produksi dan pelatihan siswa dan mahasiswa</li>
                              <li>Peningkatan pembinaan siswa dalam kegiatan Lomba Keterampilan Siswa tingkat Kabupaten, Provinsi, Nasional dan Internasional</li>
                              <li>Peningkatan pembinaan siswa dalam kegiatan ekstra kurikuler, paskibra, palang merah dll</li>
                            </ol>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
              <div id="panel-2446-0-0-4" class="so-panel widget_sekolah_cta_widget" data-index="4">
                <div class="so-widget-sekolah_cta_widget so-widget-sekolah_cta_widget-default-d75171398898-2446">
                </div>
              </div>
              <div id="panel-2446-0-0-5" class="so-panel widget_sekolah_calendar_widget" data-index="5">
                <div class="so-widget-sekolah_calendar_widget so-widget-sekolah_calendar_widget-default-d75171398898-2446">


                  <section class="academic-calendar">
                    <div class="container text-start">
                      <div class="row">
                        <div class="col-md-12">

                          <div class="academic-calendar-header ">
                            <h2>Profile Sekolah </h2>
                            <p>
                              <span class="text-bold"><?= $data['name']; ?></span> : SMK NEGERI 1 PERCUT SEI TUAN
                            </p>
                            <p>
                              <span class="text-bold">ALAMAT</span> : Jl. Kolam No. 3 Medan Estate Kecamatan Percut Sei Tuan Kabupaten
                              Deli Serdang Provinsi Sumatera Utara
                            </p>
                            <p>
                              <span class="text-bold">T E L P</span> : (061) 7357932
                            </p>
                            <p>
                              <span class="text-bold">EMAIL</span> : smkn1.percutsei tuan@gmail.com
                            </p>
                            <p>

                              <span class="text-bold">NAME KEPSEK</span> : <?= $data['kepala_sekolah']; ?>

                            </p>
                          </div>
                        </div>
                      </div>


                    </div>
                  </section>

                </div>
              </div>
              <div id="panel-2446-0-0-6" class="so-panel widget_sekolah_counters_widget" data-index="6">
                <div class="so-widget-sekolah_counters_widget so-widget-sekolah_counters_widget-default-d75171398898-3033">
                  <section class="achievements" style="background-image: url(https://sekolah.kenzap.com/wp-content/uploads/2017/03/achievements-bg.jpg);">
                    <div class="container">
                      <div class="row">
                        <div class="section-header">
                          <h2>OUR TEACHERS AND STUDENTS ACHIEVEMENTS</h2>
                        </div>
                      </div>
                      <div class="row">
                        <div class="section-content">
                          <div class="col-sm-3">
                            <h3 class="home-count"><?= $data['jlh_siswa']; ?></h3>
                            <p>Jumlah Murid</p>
                          </div>
                          <div class="col-sm-3">
                            <h3 class="home-count"><?= $data['jlh_guru']; ?></h3>
                            <p>Jumlah TEACHERS</p>
                          </div>
                          <div class="col-sm-3">
                            <h3 class="home-count"><?= $data['jlh_mapel']; ?></h3>
                            <p>Jumlah Pelajaran</p>
                          </div>
                          <div class="col-sm-3">
                            <h3 class="home-count">289</h3>
                            <p>AWARDS WINNER</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
              <div id="panel-2446-0-0-8" class="so-panel widget_sekolah_gallery_widget" data-index="8">
                <div class="so-widget-sekolah_gallery_widget so-widget-sekolah_gallery_widget-default-d75171398898-2446">

                  <section class="featured-gallery">
                    <div class="row">


                      <div class="col-sm-6">
                        <a href="#" data-featherlight="#content-1">
                          <img width="767" height="481" src="img/<?= $rows[0]['foto']; ?>" class="img-responsive wp-post-image" alt="" decoding="async" loading="lazy" /> </a>
                        <div id="content-1" class="gallery-lightbox">
                          <img width="1539" height="481" src="img/<?= $rows[0]['foto']; ?>" class="img-responsive wp-post-image" alt="" decoding="async" loading="lazy" />
                          <div class="gallery-lightbox-content">
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio.</p>
                          </div>
                        </div>
                      </div>













                      <div class="col-sm-3">
                        <a href="#" data-featherlight="#content-2">
                          <img width="767" height="500" src="img/<?= $rows[1]['foto']; ?>" class="img-responsive wp-post-image" alt="" decoding="async" loading="lazy" /> </a>
                        <div id="content-2" class="gallery-lightbox">
                          <img width="1539" height="549" src="img/<?= $rows[1]['foto']; ?>" class="img-responsive wp-post-image" alt="" decoding="async" loading="lazy" />
                          <div class="gallery-lightbox-content">
                            <p>Nam liber tempor csoluta nobis eleifnd option congue nihil imperdiet doming iquod mazim placerat facer possim assum lorem ipsum dolor possim assum lorem ipsum dolor.</p>
                          </div>
                        </div>













                        <a href="#" data-featherlight="#content-3">
                          <img width="767" height="500" src="img/<?= $rows[2]['foto']; ?>" class="img-responsive wp-post-image" alt="" decoding="async" loading="lazy" /> </a>
                        <div id="content-3" class="gallery-lightbox">
                          <img width="1539" height="779" src="img/<?= $rows[2]['foto']; ?>" class="img-responsive wp-post-image" alt="" decoding="async" loading="lazy" />
                          <div class="gallery-lightbox-content">
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio.</p>
                          </div>
                        </div>
                      </div>













                      <div class="col-sm-3">
                        <a href="#" data-featherlight="#content-4">
                          <img width="767" height="500" src="img/<?= $rows[3]['foto']; ?>" class="img-responsive wp-post-image" alt="" decoding="async" loading="lazy" /> </a>
                        <div id="content-4" class="gallery-lightbox">
                          <img width="1400" height="933" src="img/<?= $rows[3]['foto']; ?>" class="img-responsive wp-post-image" alt="" decoding="async" loading="lazy" />
                          <div class="gallery-lightbox-content">
                            <p>Nam liber tempor csoluta nobis eleifnd option congue nihil imperdiet doming iquod mazim placerat facer possim assum lorem ipsum dolor possim assum lorem ipsum dolor.</p>
                          </div>
                        </div>













                        <a href="#" data-featherlight="#content-5">
                          <img width="767" height="500" src="img/<?= $rows[4]['foto']; ?>" class="img-responsive wp-post-image" alt="" decoding="async" loading="lazy" /> </a>
                        <div id="content-5" class="gallery-lightbox">
                          <img width="1539" height="549" src="img/<?= $rows[4]['foto']; ?>" class="img-responsive wp-post-image" alt="" decoding="async" loading="lazy" sizes="(max-width: 1539px) 100vw, 1539px" />
                          <div class="gallery-lightbox-content">
                            <p>With tofu or soybean curd</p>
                          </div>
                        </div>
                      </div>


                    </div>
                  </section>



                </div>
              </div>
              <div id="panel-2446-0-0-11" class="so-panel widget_sekolah_partner_widget" data-index="11">
                <div class="so-widget-sekolah_partner_widget so-widget-sekolah_partner_widget-default-d75171398898-2446">
                  <section class="page-sponsor" style="background-color: #ffffff">
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
              <div id="panel-2446-0-0-12" class="so-panel widget_sekolah_newsletter_widget panel-last-child" data-index="12">
                <div class="so-widget-sekolah_newsletter_widget so-widget-sekolah_newsletter_widget-default-d75171398898-2446">


                  <div class="clearfix"></div>

                  <?php include 'layouts/footer1.php'; ?>