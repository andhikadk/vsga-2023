<?php

$db = new mysqli(
  "mysql_db",
  "root",
  "root",
  "pendaftaran_siswa"
);

if (!$db) {
  die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
