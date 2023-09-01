<?php
session_start();
$base_url = 'http://localhost:8080/ukk_test/';
$app_name = "SMK Negeri 1 Percut Sei tuan";
function alert($pesan)
{
  echo "<script>alert('$pesan')</script>";
};

$conn = mysqli_connect("localhost", "root", "", "ukk") or die('koneksi error : ' . mysqli_connect_error());


function upload()
{
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  // cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    $_SESSION['massage'] = "Silahkan Pilih gambar Terlebih dahulu";
    return false;
  }

  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    $_SESSION['massage'] = "Ekstensi Gambar Harus jpg,jpeg,png";
    return false;
  }

  // cek jika ukurannya terlalu besar
  if ($ukuranFile > 2000000) {
    $_SESSION['massage'] = "Ukuran Gambar terlalu besar";
    return false;
  }

  // lolos pengecekan, gambar siap diupload
  // generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, '../img/' . $namaFileBaru);

  return $namaFileBaru;
}

function createBerita($data)
{
  global $conn;
  $user_id =  $_SESSION['user']['id'];

  $judul = htmlspecialchars($data["judul"]);
  $isi = htmlspecialchars($data["isi"]);

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO berita(judul,isi,user_id,foto,status)VALUES('$judul','$isi','$user_id','$gambar','diterima') ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function createGalery($data)
{
  global $conn;
  $user_id =  $_SESSION['user']['id'];

  $name = htmlspecialchars($data["name"]);

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO galery(name,foto,user_id,status)VALUES('$name','$gambar','$user_id','diterima') ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function createAgenda($data)
{
  global $conn;
  $id =  $_SESSION['user']['id'];

  $date = htmlspecialchars($data["date"]);
  $selesai_acara = htmlspecialchars($data["selesai_acara"]);
  $acara = htmlspecialchars($data["acara"]);
  $isi_acara = htmlspecialchars($data["isi_acara"]);

  $query = "INSERT INTO agenda(jadwal,acara,isi_acara,user_id,status ,selesai_acara)VALUES('$date','$isi_acara','$acara','$id','diterima','$selesai_acara')  ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function createPengumuman($data)
{
  global $conn;
  $id =  $_SESSION['user']['id'];

  $date = htmlspecialchars($data["date"]);
  $isi = htmlspecialchars($data["isi"]);
  $judul = htmlspecialchars($data["judul"]);
  $date = htmlspecialchars($data["date"]);

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO pengumuman(judul,isi_pengumuman,tgl,user_id,foto,status)VALUES('$judul','$isi','$date','$id','$gambar','diterima') ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function updateProfile($data)
{
  global $conn;
  $id =  $_SESSION['user']['id'];

  $name = htmlspecialchars($data["name"]);
  $deskripsi = htmlspecialchars($data["deskripsi"]);
  $name_kepsek = htmlspecialchars($data["name_kepsek"]);
  $jlh_siswa = htmlspecialchars($data["jlh_siswa"]);
  $jlh_guru = htmlspecialchars($data["jlh_guru"]);
  $jlh_mapel = htmlspecialchars($data["jlh_mapel"]);

  // hapus foto lama

  $query1 = mysqli_query($conn, "SELECT * FROM profile WHERE id = '1'");
  $data = mysqli_fetch_assoc($query1);
  if (is_file('../img/' . $data["foto"])) {
    unlink('../img/' . $data["foto"]);
  }

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "UPDATE profile SET name = '$name',deskripsi = '$deskripsi',
  kepala_sekolah = '$name_kepsek',
  foto = '$gambar',
  jlh_siswa = '$jlh_siswa',
  jlh_guru = '$jlh_guru',
  jlh_mapel = '$jlh_mapel' WHERE id = '1'";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function updatePengumuman($data)
{
  global $conn;
  $id = $data['id'];

  $judul = htmlspecialchars($data["judul"]);
  $isi_pengumuman = htmlspecialchars($data["isi"]);
  $tgl = htmlspecialchars($data["tgl"]);

  // hapus foto lama


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    $query2 = mysqli_query($conn, "SELECT * FROM pengumuman WHERE id = '$id'");
    $data5 = mysqli_fetch_assoc($query2);
    $gambar = $data5['foto'];
  }
  if ($gambar) {
    $query1 = mysqli_query($conn, "SELECT * FROM pengumuman WHERE id = '$id'");
    $data = mysqli_fetch_assoc($query1);
    if (is_file('../img/' . $data["foto"])) {
      unlink('../img/' . $data["foto"]);
    }
  }

  $query = "UPDATE pengumuman SET judul = '$judul',isi_pengumuman = '$isi_pengumuman',
  tgl = '$tgl' WHERE id = '$id'";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
