<?php
include '../core.php';

if ($_SESSION['has_login'] == false) {
  header("Location: {$base_url}login.php");
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query1 = mysqli_query($conn, "SELECT * FROM pengumuman WHERE id = '$id'");
  $data = mysqli_fetch_assoc($query1);
  if (is_file('../img/' . $data["foto"])) {
    unlink('../img/' . $data["foto"]);
  }
  mysqli_query($conn, "DELETE FROM pengumuman WHERE id = '$id' ");
  $_SESSION['massage'] = 'Pengumuman Berhasil DiHapus';
  $_SESSION['icon'] = 'success';
  header("Location: pengumuman.php");
}
