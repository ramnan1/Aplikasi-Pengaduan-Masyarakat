<?php include 'core.php';

$sql = "SELECT * FROM berita WHERE status = 'diterima' ORDER BY id DESC";

$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from sekolah.kenzap.com/blog/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Mar 2023 19:22:43 GMT -->
<!-- Added by HTTrack -->
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
                        <h2 class="text-regular text-uppercase">Semua Berita</h2>
                        <div class="blog-stats">

                        </div>

                      </div>
                    </div>

                    <!--Share-->
                  </div>
                </div>
                <?php while ($data = mysqli_fetch_assoc($query)) { ?>

                  <div class="post-1 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized tag-conference tag-presentation">

                    <div class="blog-post-content">
                      <!--Blog Post-->
                      <div class="blog-post post-content ">
                        <div class="area-img">
                          <a href="berita.php?id=<?= $data['id']; ?>"><img width="750" height="405" src="img/<?= $data['foto']; ?>" class="img-responsive wp-post-image" alt="" decoding="async" /></a>
                        </div>
                        <div class="area-content">
                          <h2 class="text-regular text-uppercase"><a href="berita.php?id=<?= $data['id']; ?>"><?= $data['judul']; ?></a></h2>
                          <div class="blog-stats">
                            <span class="clock">
                              <span class="fa fa-calendar stats-item"></span>
                              <span class="text-center text-dark stats-item"><?php echo date('M-d-Y', strtotime($data['created_at']));  ?></a></span>
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
                <?php } ?>
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
                  <aside id="archives-2" class="widget widget_archive">
                    <h3 class="widget-title">Archives</h3>
                    <div class="tx-div small"></div>
                    <ul>
                      <li>March 2020</li>
                      <li>February 2020</li>
                      <li>November 2019</li>
                      <li>January 2019</li>
                      <li>January 2013</li>
                      <li>March 2012</li>
                      <li>January 2012</li>
                      <li>March 2011</li>
                      <li>October 2010</li>
                      <li>September 2010</li>
                      <li>August 2010</li>
                      <li>July 2010</li>
                      <li>June 2010</li>
                      <li>May 2010</li>
                      <li>April 2010</li>
                      <li>March 2010</li>
                      <li>February 2010</li>
                      <li>January 2010</li>
                      <li>October 2009</li>
                      <li>September 2009</li>
                      <li>August 2009</li>
                      <li>July 2009</li>
                      <li>June 2009</li>
                      <li>May 2009</li>
                    </ul>

                  </aside>
                  <aside id="categories-2" class="widget widget_categories">
                    <h3 class="widget-title">Categories</h3>
                    <div class="tx-div small"></div>
                    <ul>
                      <li class="cat-item cat-item-204">>delicious
                      </li>
                      <li class="cat-item cat-item-19">Edge Case
                      </li>
                      <li class="cat-item cat-item-205">health
                      </li>
                      <li class="cat-item cat-item-29">Markup
                      </li>
                      <li class="cat-item cat-item-30">Media
                      </li>
                      <li class="cat-item cat-item-38">Post Formats
                      </li>
                      <li class="cat-item cat-item-49">Template
                      </li>
                      <li class="cat-item cat-item-1">Uncategorized
                      </li>
                      <li class="cat-item cat-item-50">Unpublished
                      </li>
                    </ul>

                  </aside>
                  <aside id="meta-2" class="widget widget_meta">
                    <h3 class="widget-title">Meta</h3>
                    <div class="tx-div small"></div>
                    <ul>
                      <li>Log in</li>
                      <li>Entries feed</li>
                      <li>Comments feed</li>

                      <li>WordPress.org</li>
                    </ul>

                  </aside>
                </aside><!-- #secondary -->
              </div>

            </div>
          </div>
        </main>
      </div>
    </div><!-- #post-## -->

  </div>

  <!--End content wrapper-->


  <div class="clearfix"></div>
  <?php include 'layouts/footer1.php';

  ?>