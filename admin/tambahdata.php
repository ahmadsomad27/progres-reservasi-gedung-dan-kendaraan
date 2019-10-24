<?php
include "koneksi.php";
if(isset($_POST['simpan'])){
	$id = $_POST['id'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$user_name = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$telepon = $_POST['telp'];
$level = $_POST['level'];

$data = mysqli_query($mysqli,"INSERT INTO user SET id='$id', nama='$nama', jurusan='$jurusan', username='$username', password = '$password', email = '$email', telepon = '$telp', level = '$level'") or die ("Data Salah : ".mysqli_error($mysqli));
 
if ($data) {
echo "<br><br><br><br><br><br><br><br><br><br><br><br><h1><center>Data Berhasil Disimpan !";
echo "<br><a href='tampilin.php'>Kembali</a>";
echo "<br><a href='tambah.php'>Tambahkan Data Lagi</a>";
} else {
echo "<br><br><br><br><br><br><br><br><br><br><br><br><h1><center>Data Gagal Disimpan !";
echo "<br><a href='tambah.php'>Kembali</a>";
echo "<br><a href='tambah.php'>Tambahkan Data Lagi</a>";
}
} 