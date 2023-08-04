<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "metrologi");

// jika database error
if (!$conn) {

  header('location:../../api/error.html');
  return false;
}

// read data
function tampil($sql)
{
  global $conn;

  $query = mysqli_query($conn, $sql);
  $rows = [];
  while ($row = mysqli_fetch_assoc($query)) {
    $rows[] = $row;
  }
  return $rows;
}


// Registrasi user
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

// registrasi pemilik UTTP
function registrasiPemilikUTTP($data, $userID)
{
  global $conn;

  $jenisPemilik = $data["jenis_pemilik"];
  $noIdentitas = $data["no_identitas"];
  $jenisIdentitas = $data["jenis_identitas"];
  $nama = $data["nama"];
  $email = $data["email"];
  $no_hp = $data["no_hp"];

  $pathDestination = '../../assets/img/berkas/pemilik-uttp/';
  $berkas = uploadFile($pathDestination);
  // jika tidak upload berkas
  if (!$berkas) {
    return false;
  }

  $alamat = $data["alamat"];
  $RTRW = $data["rt/rw"];
  $provinsi = $data["provinsi"];
  $kabupaten = $data["kabupaten"];
  $kecamatan = $data["kecamatan"];
  $kelurahan = $data["kelurahan"];

  $sql = "INSERT INTO pemilik 
  VALUES
  (
    '',
    $userID,
    '$jenisPemilik',
    '$noIdentitas',
    '$jenisIdentitas',
    '$nama',
    '$email',
    '$no_hp',
    '$alamat',
    '$RTRW',
    '$provinsi',
    '$kabupaten',
    '$kecamatan',
    '$kelurahan',
    '$berkas'
  )";

  mysqli_query($conn, $sql);
  return mysqli_affected_rows($conn);
}

// mengambil data pemilik UTTP berasarkan user id
function getPemilikUTTP($userID) {
    $sql = "
    SELECT * from pemilik where user_id = '$userID'";

    return tampil($sql);
}

// registrasi UTTP
function registrasiUTTP($data, $userID)
{
  global $conn;

  $idUTTP = $data["id_uttp"];
  $idUTTP = $data["id_uttp"];
  $besaranUTTP = $data["besaran_uttp"];
  $jenisUTTP = $data["jenis_uttp"];
  $rangeKapasitas = $data["range_kapasitas"];
  $merk = $data["merk"];
  $tipe = $data["tipe"];
  $noSeri = $data["no_seri"];

  $pathDestination = "../../assets/img/berkas/uttp/";
  $berkas = uploadFile($pathDestination);
  // jika tidak upload berkas
  if (!$berkas) {
    return false;
  }

  $idPemilik = getPemilikUTTP($userID)[0]["id"];
  $sql = "INSERT INTO uttp 
  VALUES
  (
    '',
    '$idPemilik',
    '$idUTTP',
    '$besaranUTTP',
    '$jenisUTTP',
    '$rangeKapasitas',
    '$merk',
    '$tipe',
    '$noSeri',
    '$berkas'
  )";

  mysqli_query($conn, $sql);
  return mysqli_affected_rows($conn);
}

// handle upload file
function uploadFile($destinationPath)
{
  $nama_berkas = $_FILES["berkas"]["name"];
  $tmpfile = $_FILES["berkas"]["tmp_name"];
  $size_berkas = $_FILES["berkas"]["size"];


  // cek apakah ekstensi file adalah file gambar
  $ekstensivalid = ["jpg", "png", "jpeg"];
  $ekstensiRaw = explode('.', $nama_berkas);
  $ekstensifinal = end($ekstensiRaw);

  if (!in_array($ekstensifinal, $ekstensivalid)) {
    echo "
            <script>
                alert('Masukan ekstensi file jpg,png atau jpeg')
            </script>
       ";

    return false;
  }

  // cek apakah size gambar sesuai
  if ($size_berkas > 9000000) {
    echo "
        <script>
            alert('Ukuran file maksimal 2MB')
        </script>
        ";

    return false;
  }


  // ubah nama file yang akan di upload ke database
  $namaberkasbaru = uniqid();
  $namaberkasbaru .= '.';
  $namaberkasbaru .= $ekstensifinal;

  // jika sudah benar semua maka upload

  move_uploaded_file($tmpfile, $destinationPath . $namaberkasbaru);

  return $namaberkasbaru;
}
