<?php
@session_start();

if(!isset($_SESSION['nama']))
{
    header("location:./index.php");
}

include "koneksi.php";

if($_SESSION['level'] == "A")
{
    //echo "Anda Login Sebagai ";
    //echo $_SESSION['username'];
    include "home.php";
}

else if($_SESSION['level'] == "U")
{
    //echo "Anda Login Sebagai ";
    //echo $_SESSION['username'];
    include "homeuser.php";
}
?>