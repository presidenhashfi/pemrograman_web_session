<?php 
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "latihan_web_session";
   $databaseport = 8111;

   $koneksi = mysqli_connect($host, $user, $pass, $db, $databaseport);
   // Check connection

   if(!$koneksi) {
      die("Koneksi gagal : ".mysql_connect_error());
   }
?>