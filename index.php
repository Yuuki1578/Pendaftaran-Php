<!DOCTYPE html>
<html lang="id"
      style="color-scheme: light dark;">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Siswa Baru</title>
  </head>
  
  <body>
    <header>
      <h3>Pendaftaran Siswa Baru</h3>
      <h1>SMK Coding</h1>
      <hr>
    </header>
    
    <h4>Menu</h4>
    <nav>
      <?php if(isset($_GET['status'])): ?>
      <p>
        <?php
        if($_GET['status'] == 'sukses'){
          echo "Pendaftaran Siswa Sukses!";
        } else {
          echo "Pendaftaran Siswa Gagal!";
        }
        ?>
      </p>
      <?php endif; ?>
      <ul>
        <li><a href="form-daftar.php">Daftar</a></li>
        <li><a href="list-siswa.php">List Peserta</a></li>
      </ul>
    </nav>
    <hr>
  </body>
</html>
