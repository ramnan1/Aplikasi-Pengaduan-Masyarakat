<?php
include '../core.php';

if ($_SESSION['has_login'] == false) {
  header("Location: {$base_url}login.php");
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  mysqli_query($conn, "DELETE FROM user WHERE id = '$id' ");
  $_SESSION['massage'] = 'Member Berhasil DiHapus';
  $_SESSION['icon'] = 'success';
  header("Location: verifikasi_member.php");
}
