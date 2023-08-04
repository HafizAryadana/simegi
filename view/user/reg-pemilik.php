<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Reg-Pemilik</title>
    <meta content name="description">
    <meta content name="keywords">

    <!-- Favicons -->
    <link href="../../assets/img/logo.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/register.css" rel="stylesheet">

</head>

<body>

    <div class="container">

        <div class="header" style="display: flex;  justify-content: space-between;">
            <header>Registrasi Pemilik UTTP</header>
            <a href="./index.php" style="font-size: 0.9rem; color: white; padding: 10px 45px; background-color: #d62828; border: none; border-radius: 10px;">Batal</a>
        </div>

        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Identitas</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Jenis Pemilik</label>
                            <select required>
                                <option disabled selected>Pilih Jenis
                                    Pemilik</option>
                                <option>Tangan Pertama</option>
                                <option>Tangan Kedua</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>No Identitas</label>
                            <input type="number" placeholder="Masukkan No Identitas" required>
                        </div>
                        <div class="input-field">
                            <label>Jenis Identitas</label>
                            <select required>
                                <option disabled selected>Pilih Jenis
                                    Identitas</option>
                                <option>KTP</option>
                                <option>SIUP</option>
                                <option>NPWP</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Nama</label>
                            <input type="text" placeholder="Masukkan Nama Anda" required>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Masukkan Email" required>
                        </div>

                        <div class="input-field">
                            <label>No Hp</label>
                            <input type="number" placeholder="Masukkan No Hp" required>
                        </div>
                        <div class="input-file">
                            <label>Upload Berkas (KTP/SIUP/NPWP)</label>
                            <input type="file" id="myFile" name="filename">
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Alamat</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Alamat</label>
                            <input type="text" placeholder="Masukkan Alamat" required>
                        </div>

                        <div class="input-field">
                            <label>RT/RW</label>
                            <input type="text" placeholder="RT/RW" required>
                        </div>

                        <div class="input-field">
                            <label>Provinsi</label>
                            <input type="text" placeholder="Masukkan Provinsi" required>
                        </div>

                        <div class="input-field">
                            <label>Kabupaten</label>
                            <input type="text" placeholder="Masukkan Kabupaten" required>
                        </div>

                        <div class="input-field">
                            <label>Kecamatan</label>
                            <input type="text" placeholder="Masukkan Kecamatan" required>
                        </div>

                        <div class="input-field">
                            <label>Kelurahan/Desa</label>
                            <input type="text" placeholder="Masukkan Kecamatan" required>
                        </div>
                    </div>

                    <div class="button-footer">
                        <button class="nextBtn" style="margin-right: 50px;">
                            <span class="btnText">Simpan</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div>
            </div>

        </form>
    </div>

    <script src="script.js"></script>
</body>

</html>