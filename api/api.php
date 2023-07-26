<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "metrologi");

// jika database error
if (!$conn) {

  header('location:../../api/error.html');
  return false;
}

