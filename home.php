<?php
session_start();
if(!isset($_SESSION)){header('Location:login.php');}
if($_SESSION['level']=='admin' OR $_SESSION['level']=='petugas'){header('Location:admin_page.php');}
// $koneksi = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");

// $query=$koneksi->query("select * from pengaduan");
// $data =$query->fetchAll();
// var_dump($data);

$koneksi = mysqli_connect("localhost", "root", "", "pengaduanmasyarakat");
$join = "select * from pengaduan join masyarakat on masyarakat.nik = pengaduan.nik";
$select = mysqli_query($koneksi, $join);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <title>Document</title>
</head>

<body>
  <?php include "navbar.php" ?>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Nama</th>
          <th scope="col">Isi Laporan</th>
          <th scope="col">Foto</th>
          <th scope="col">Status</th>
          <th scope="col">#</th>
        </tr>
      </thead>
      <?php while ($data = mysqli_fetch_array($select)) { ?>
        <tbody>
          <td scope="row">
            <?= $data['id_pengaduan'] ?>
          </td>
          <td>
            <?= $data['tgl_pengaduan'] ?>
          </td>
          <td>
            <?= $data['nama'] ?>
          </td>
          <td>
            <?= $data['isi_laporan'] ?>
          </td>
          <td><img src="image/<?= $data['foto'] ?>" width="250px"> </td>
          <td><button type="button" class="btn btn-info mt-4 text-white" style="background-color: #fbd0d9;" disabled>
              <?php echo $data['status']; ?>
            </button></td>
          <td style="vertical-align:middle">
            <form action="proses_hapus.php?id_pengaduan=<?= $data['id_pengaduan'] ?>" method="post">
              <button type="submit" class="btn btn-danger">
                DELETE
              </button>
            </form>
          </td>
        </tbody>
      <?php } ?>
    </table>
  </div>
</body>

</html>