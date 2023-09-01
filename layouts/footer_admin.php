<!-- Bootstrap core JavaScript-->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="../assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="../assets/js/demo/chart-area-demo.js"></script>
<script src="../assets/js/demo/chart-pie-demo.js"></script>
<script src="../assets/vendor/fontawesome-free/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if (isset($_SESSION['massage'])) { ?>
  <script>
    Swal.fire(
      'Good job!',
      '<?= $_SESSION["massage"]; ?>',
      '<?= $_SESSION["icon"]; ?>'
    )
  </script>
<?php unset($_SESSION['massage']);
  unset($_SESSION['icon']);
} ?>
<script>
  $(document).on('click', '#hps_member', function(e) {
    e.preventDefault()
    const link = $(this).attr('href')
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = link
      }
    })
  })

  $(document).on('click', '#hps_pengumuman', function(e) {
    e.preventDefault()
    const link = $(this).attr('href')
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = link
      }
    })
  })
</script>
</body>


</html>