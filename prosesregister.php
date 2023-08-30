<?php
session_start();
include "koneksi2.php";
$nik = $_POST['nik'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$phonenumber = $_POST['phonenumber'];
$query = $koneksi->query("INSERT INTO masyarakat VALUES ('$nik','$name','$username','$password','$phonenumber')");

if ($query) {

    $_SESSION['nik'] = $nik;
    $_SESSION['level'] = 'masyarakat';

    header("location:home.php");
} else {
    var_dump($koneksi->errorInfo());
}
