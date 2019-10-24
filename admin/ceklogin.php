<?php
@session_start();
include "koneksi.php";

$nama = $_POST['nama'];
$password = $_POST['password'];

$q = "SELECT * FROM log WHERE nama = '$nama'";
$result = mysqli_query($mysqli, $q);
$data = mysqli_fetch_array($result);

if($password == $data['password'])
{
    $_SESSION['level'] = $data['level'];
    $_SESSION['nama'] = $data['nama'];
    include "kategori.php";
}

else{
    $warning = "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><center><h1>Username / Password Salah";
    echo $warning;
}

?>