<?php
$db = new mysqli("127.0.0.1", "root", "admin", "pendaftaran_siswa");
if(!$db){
  echo "Connect to database failed!";
}
?>
