<?php include 'core.php';
$id = $_GET['id'];
if (isset($_POST['coment'])) {
  if (isset($_SESSION['has_login'])) {
    $user_id = $_SESSION['user']['id'];

    $isi_coment = $_POST['isi_coment'];
    $berita_id = $_POST['berita_id'];
    $sql = "INSERT INTO coment(isi_coment,berita_id,user_id)VALUES('$isi_coment','$berita_id','$user_id')";
    mysqli_query($conn, $sql);
    echo "<script>alert('Coment berhasil');</script> ";
  } else {
    echo "<script>alert('Anda Harus Login');
      document.location.href = 'login.php';</script> ";
  }
}
$berita = "SELECT * FROM berita WHERE id = $id";
$result = mysqli_query($conn, $berita);
$data = mysqli_fetch_assoc($result);

$user = "SELECT user.username, coment.tgl, coment.isi_coment FROM user JOIN coment ON user.id = coment.user_id WHERE berita_id = '$id';";
$result2 = mysqli_query($conn, $user);



// echo "Waktu terakhir: " . $waktu_sebelumnya->format('Y-m-d H:i:s') . "<br>";
// echo "Waktu berlalu: " . $selisih_waktu->format('%h jam') . "<br>";


?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from sekolah.kenzap.com/blog/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Mar 2023 19:22:43 GMT -->
<!-- Added by HTTrack -->
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

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<?php include 'layouts/header.php';

?>

<body class="blog hfeed">






  <section class="default-hero">
    <div class="container">
      <div class="hero-content">

      </div>
    </div>
  </section>


  <!--Begin content wrapper-->
  <div id="content" class="site-content content-wrapper">

    <div id="post-1241">
      <div class="blog-content">
        <main>
          <div class="container">
            <div class="row">

              <!--Col Main-->
              <div class="col-main col-lg-8 col-md-7 col-xs-12">

                <div class="post-1241 post type-post status-publish format-standard sticky hentry category-uncategorized tag-sticky-2 tag-template">

                  <div class="blog-post-content">
                    <!--Blog Post-->
                    <div class="blog-post post-content ">
                      <div class="area-content">
                        <h2 class="text-regular text-uppercase">Berita</h2>
                        <div class="blog-stats">

                        </div>

                      </div>
                    </div>

                    <!--Share-->
                  </div>
                </div>


                <div class="post-1 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized tag-conference tag-presentation">

                  <div class="blog-post-content">
                    <!--Blog Post-->
                    <div class="blog-post post-content ">
                      <div class="area-img">
                        <img width="750" height="405" src="img/<?= $data['foto']; ?>" class="img-responsive wp-post-image" alt="" decoding="async" />
                      </div>
                      <div class="area-content">
                        <h2 class="text-regular text-uppercase"><?= $data['judul']; ?></h2>
                        <div class="blog-stats">
                          <span class="clock">
                            <span class="fa fa-calendar stats-item"></span>
                            <span class="text-center text-dark stats-item"><?php echo date('M-d-Y', strtotime($data['created_at']));  ?>
                            </span>
                            <span class="comment">
                              <span class="fa fa-comment stats-item"></span>
                              <span class="text-center text-dark stats-item">
                                one
                              </span>
                            </span>
                            <span class="user">
                              <span class="fa fa-user stats-item"></span>
                              <span class="text-content text-dark stats-item">admin</span>
                            </span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="post-content-body">
                          <p><?= $data['isi']; ?></p>
                        </div>

                      </div>
                    </div>

                    <!--Share-->
                  </div>
                </div>
              </div>
              <!--Sidrbar Right-->
              <div class="sidebar blog-right col-lg-4 col-md-5 hidden-sm hidden-xs">

                <aside id="secondary" class="widget-area">
                  <aside id="search-2" class="widget widget_search">
                    <form role="search" method="get" class="search-form" action="https://sekolah.kenzap.com/">
                      <fieldset class="search-form-group">
                        <input type="text" class="search-form-text" value="" placeholder="New search" name="s" id="s" />
                        <button type="submit" class="search-form-button"><i class="fa fa-search"></i></button>
                      </fieldset>
                    </form>
                  </aside>
                  <aside id="recent-posts-2" class="widget widget_recent_entries">
                    <h3 class="widget-title">Recent Posts</h3>
                    <div class="tx-div small"></div>
                    <ul>
                      <li>
                        Jobs, Career Presentation to Coincide with Conferences
                      </li>
                      <li>
                        5 Simple &#038; Easy Steps To Choose Future Career
                      </li>
                      <li>
                        Apply for Community Scholarships
                      </li>
                      <li>
                        Fall Sports Practices, Meeting in August Dmz
                      </li>
                      <li>
                        Scheduled
                      </li>
                    </ul>

                  </aside>
                  <aside id="recent-comments-2" class="widget widget_recent_comments">
                    <h3 class="widget-title">Recent Comments</h3>
                    <div class="tx-div small"></div>
                    <ul id="recentcomments">
                      <li class="recentcomments"><span class="comment-author-link" rel='external nofollow ugc' class='url'> A WordPress Commenter</span> on Jobs, Career Presentation to Coincide with Conferences</li>
                      <li class="recentcomments"><span class="comment-author-link" rel='external nofollow ugc' class='url'>John Doe</span> on Edge Case: No Content</li>
                      <li class="recentcomments"><span class="comment-author-link" rel='external nofollow ugc' class='url'>Jane Doe</span> on >Protected: Template: Password Protected (the password is &#8220;enter&#8221;)</li>
                      <li class="recentcomments"><span class="comment-author-link" rel='external nofollow ugc' class='url'>Jane Doe</span> on Template: Comments</li>
                      <li class="recentcomments"><span class="comment-author-link" rel='external nofollow ugc' class='url'>Jane Doe</span> on >Template: Comments</li>
                    </ul>
                  </aside>

                </aside><!-- #secondary -->
              </div>

            </div>
          </div>
          <section>

            <div class="container mt-3">
              <div class="row shadow-5">
                <div class="col-md-8">

                  <div class="post-comments">

                    <form action="" method="post">
                      <div class="form-group">
                        <input type="hidden" name="berita_id" value="<?= $_GET['id']; ?>">
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
                                <span class="text-primary fw-bold mb-3">
                                  <?= $data2['username']; ?></span>
                                <div class="mic-info">
                                  on <? echo date('Y-m-d', strtotime($data2['tgl'])); ?>
                                </div>
                              </div>
                              <div class="comment-text">
                                <?= $data2['isi_coment']; ?>
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
            </div>
          </section>
        </main>
      </div>
    </div><!-- #post-## -->

  </div>

  <!--End content wrapper-->


  <div class="clearfix"></div>
  <?php include 'layouts/footer1.php';

  ?>