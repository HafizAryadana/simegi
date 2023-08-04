<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Reg-UTTP</title>
    <meta content name="description">
    <meta content name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/reguttp.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="header" style="display: flex;  justify-content: space-between;">
            <header>Tambah UTTP</header>
            <a href="./index.php" style="font-size: 0.9rem; color: white; padding: 10px 45px; background-color: #d62828; border: none; border-radius: 10px;">Batal</a>
        </div>


        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <div class="fields">
                        <div class="input-field">
                            <label>ID UTTP</label>
                            <input type="number" placeholder="Masukkan ID" required>
                        </div>
                    </div>
                    <div class="fields">
                        <div class="input-field">
                            <label>UTTP Besaran</label>
                            <select required>
                                <option disabled selected>Pilih Jenis</option>
                                <option>PANJANG</option>
                                <option>WAKTU</option>
                                <option>VOLUME</option>
                                <option>MASSA</option>
                                <option>KADAR AIR</option>
                                <option>ARUS</option>
                                <option>ENERGI LISTRIK</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Jenis UTTP</label>
                            <input type="text" placeholder="Jenis UTTP" required>
                        </div>
                        <div class="input-field">
                            <label>Range Kapasitas</label>
                            <input type="text" placeholder="Range Kaapasitas" required>
                        </div>

                        <div class="input-field">
                            <label>Merk</label>
                            <input type="text" placeholder="Masukkan Merk" required>
                        </div>
                        <div class="input-field">
                            <label>Type</label>
                            <input type="text" placeholder="Masukkan Type" required>
                        </div>

                        <div class="input-field">
                            <label>No Seri</label>
                            <input type="number" placeholder="Masukkan No Seri" required>
                        </div>
                        <div class="input-file">
                            <div class="mb-2"><label>Foto UTTP dan Merk/Seri yang ada pada alat ukur</label></div>
                            <input type="file" id="myFile" name="filename">
                        </div>
                    </div>
                </div>


                <button class="nextBtn">
                    <span class="btnText">Simpan</span>
                    <i class="uil uil-navigator"></i>
                </button>
            </div>
    </div>

    </form>
    </div>

    <script src="script.js"></script>
</body>

</html>