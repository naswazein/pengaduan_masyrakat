<?php
    $koneksi = mysqli_connect("localhost", "root", "", "pengaduanmasyarakat");
    
    $isi = $_POST['isi_laporan'];
    $tanggal = date('Y-m-d');
    $nama_foto = $_FILES['foto']['name'];
    $asal_foto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($asal_foto, "image/$nama_foto");

    $koneksi->query("INSERT INTO `pengaduan` VALUES ('','$tanggal','02','$isi','$nama_foto','0')");
    header("location:home.php");
?>