<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="id"
      style="color-scheme: light dark;">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>List Peserta</title>
  <style>
    table, tr, th, td {
      border: 1px solid whitesmoke;
      border-collapse: collapse;
    }
  </style>
</head>
<body>
  <header>
    <h3>Siswa yang sudah mendaftar</h3>
  </header>
  
  <nav>
    <a href="form-daftar.php">Tambah Baru</a>
  </nav>
  <br>
  
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Sekolah Asal</th>
        <th>Tindakan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM calon_siswa";
      $query = mysqli_query($db, $sql);
      while($siswa = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>". $siswa['id']. "</td>";
        echo "<td>". $siswa['nama']. "</td>";
        echo "<td>". $siswa['alamat']. "</td>";
        echo "<td>". $siswa['jenis_kelamin']. "</td>";
        echo "<td>". $siswa['agama']. "</td>";
        echo "<td>". $siswa['sekolah_asal']. "</td>";
        echo "<td>";
        echo "<a href='form-edit.php?id=". $siswa['id']. "'>Edit</a> | ";
        echo "<a href='hapus.php?id=". $siswa['id']. "'>Hapus</a>";
        echo "</td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
  <p>
    <?php if(isset($_GET['status'])): ?>
    <p>
      <?php if($_GET['status'] == 'sukses'){
        echo "Edit data berhasil!";
      }
      ?>
    </p>
    <?php endif; ?>
  </p>
  <p style="text-align: center"><b>Total : </b><?php echo mysqli_num_rows($query); ?></p>
  <hr>
</body>
</html>