<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "metrologi");

// jika database error
if (!$conn) {

  header('location:../../api/error.html');
  return false;
}


// Registrasi
function daftar($data)
{

  global $conn;

  // ambil data yg di input user
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $password = htmlspecialchars($data["password"]);

  // username harus lowercase dan tidak boleh ada tanda aneh
  $nama = strtolower(stripslashes(str_replace("'", '', $nama)));

  // username tidak boleh sama dengan orang lain
  $sql = "SELECT * FROM user where nama = '$nama' OR email='$email'";

  // jika sama, maka buat error
  $query = mysqli_query($conn, $sql);
  if (mysqli_num_rows($query)) {
    return false;
  }

  // masukan data ke database
  $sqll =  "INSERT INTO user
                VALUES
                ('', '$nama', '$email', '$password', 'user')

    ";

  // melakukan query
  mysqli_query($conn, $sqll);

  return mysqli_affected_rows($conn);
}
