<?php include("./config.php");

if(isset($_POST['simpan'])){
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jk = $_POST['jenis_kelamin'];
  $agama = $_POST['agama'];
  $asal = $_POST['sekolah_asal'];
  
  $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$asal' WHERE id=$id";
  $query = mysqli_query($db, $sql);
  
  if($query){
    header('Location:list-siswa.php?status=sukses');
  } else {
    die("Gagal menyimpan perubahan!");
  }
} else {
  die("Akses Dilarang!");
}

?>