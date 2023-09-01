<?php
include '../core.php';

if ($_SESSION['has_login'] == false) {
  header("Location: {$base_url}login.php");
}

if (isset($_POST['btn_pengumuman'])) {
  if (createPengumuman($_POST) > 0) {
    $_SESSION['massage'] = 'Pengumuman Berhasil Ditambahkan';
    $_SESSION['icon'] = 'success';
  } else {
    $_SESSION['icon'] = 'error';
  }
}


?>
<?php include '../layouts/header_admin.php'; ?>

<link rel="shortcut icon" href="../img/logo.png" type="image/png" sizes="20x20">

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Home</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-user"></i>
          <span>Profile</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="edit_profile.php">Edit Profile</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="tambah_berita.php">
          <i class="fas fa-newspaper fa-chart-area"></i>
          <span>Tambah Berita</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tambah_galery.php">
          <i class="fas fa-galery fa-chart-area"></i>
          <span>Tambah Galery</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pengumuman.php">
          <i class="fas fa-news fa-chart-area"></i>
          <span>Pengumuman</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tambah_agenda.php">
          <i class="fas fa-news fa-chart-area"></i>
          <span>Tambah Agenda</span></a>
      </li>


      <!-- Nav Item - Utilities Collapse Menu -->


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

      <!-- Sidebar Message -->

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->


            <!-- Nav Item - Alerts -->


            <!-- Nav Item - Messages -->


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['user']['name']; ?></span>
                <img class="img-profile rounded-circle" src="../assets/img/undraw_profile.svg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><button class="btn btn-primary"><a href="tambah_pengumuman.php" class="text-decoration-none text-white">Tambah Pengumuman</a></button></h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Member</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="member" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Isi Pengumuman</th>
                      <th>Tgl</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody class="table-grup-divider">
                    <?php

                    $sql = "SELECT *FROM pengumuman";
                    $query = mysqli_query($conn, $sql);
                    $no = 1;
                    while ($result = mysqli_fetch_assoc($query)) : ?>
                      <tr>
                        <td class="text-center"><?= $no; ?></td>
                        <td><?= $result['judul']; ?></td>
                        <td><?= $result['isi_pengumuman']; ?></td>
                        <td><?= $result['tgl']; ?></td>
                        <td>

                          <input type="hidden" name="id" value="<?= $result['id']; ?>">
                          <a href="edit_pengumuman.php?id=<?= $result['id']; ?>" name="verifikasi" class="btn btn-success">Edit</a>

                          <a id="hps_pengumuman" class="btn btn-danger " href="hapus_pengumuman.php?id=<?= $result['id']; ?>">Delete</a>

                        </td>
                      </tr>

                    <?php $no++;
                    endwhile ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Paly Ramnan 2023</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->


  <?php include '../layouts/footer_admin.php'; ?>

  <script>
    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    });

    function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }
  </script>