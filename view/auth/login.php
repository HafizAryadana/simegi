<?php
require_once "../../api/api.php";

// apakah tombol login telah di klik
if (isset($_POST["login"])) {
    // ambil data yang diinput user
    $email = $_POST["email"];
    $password = $_POST["password"];

    // cek apakah username ada di db
    $sql = "SELECT * FROM user where email = '$email'";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) === 1) {
        $data = mysqli_fetch_assoc($query);
        // jika ada maka cek passwordnya
        if ($password == $data["password"]) {
            if (isset($_POST["cookie"])) {
                // buat cookies
                setcookie('id', $data["id"]);
                setcookie("email", $data["email"], time() + 60);
            }

            // memilih antara admin atau user
            if ($data["level"] === 'user') {
                // buat session
                $_SESSION["id"] = $data["id"];
                $_SESSION["login_user"] = true;
                $successuser = true;
            } else {
                // buat session
                $_SESSION["level"] = $data["level"];
                $_SESSION["login_admin"] = true;
                $successadmin = true;
            }
        } else {
            $failed = true;
        }
    } else {
        // jika username belum terdaftar
        $notfound = true;
    }
}

// cek tombol daftar sudah diklik atau belum
if (isset($_POST["daftar"])) {
    // jalankan function register

    if (daftar($_POST) > 0) {
        $success = true;
    }else{
        $failedRegister = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/css/login.css" />
    <title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="post" class="sign-in-form">
                    <h2 class="title">Masuk</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" name="email" placeholder="Email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required />
                    </div>
                    <input type="submit" name="login" value="Masuk" class="btn solid" />
                </form>

                <form action="" method="post" class="sign-up-form">
                    <h2 class="title">Daftar</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="nama" placeholder="Nama Perusahaan" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <input type="submit" class="btn" name="daftar" value="Daftar" />

                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <img src="../../assets/img/logo.png" class="image" alt />
                    <h3>SIMEGI</h3>
                    <p>
                        Pelayanan tera Dan Tera ulang Pemerintah Kabupaten Banyumas
                    </p>
                    <h3>Belum memiliki akun ?</h3>
                    <button class="btn transparent" id="sign-up-btn">
                        Daftar
                    </button>
                </div>

            </div>
            <div class="panel right-panel">
                <div class="content">
                    <img src="../../assets/img/logo.png" class="image" alt />
                    <p>
                        Pelayanan tera Dan Tera ulang Pemerintah Kabupaten Banyumas
                    </p>
                    <h3>Sudah memiliki akun ?</h3>
                    <button class="btn transparent" id="sign-in-btn">
                        Masuk
                    </button>
                </div>

            </div>
        </div>
    </div>

    <script src="../../assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>

<!-- notifikasi sukses registrasi -->
<?php if (isset($success)) : ?>
    <script>
        Swal.fire({
            title: "Berhasil",
            text: "Registrasi Berhasil",
            icon: "success",
            button: "OK",
        })
    </script>
<?php endif ?>

<!-- notifikasi sukses registrasi -->
<?php if (isset($failedRegister)) : ?>
    <script>
         Swal.fire({
            title: "Nama atau email sudah digunakan mohon cari yang lain",
            icon: "error",
            button: "OK",
        })
    </script>
<?php endif ?>


<!-- gagal login -->
<?php if (isset($failed)) : ?>
    <script>
        Swal.fire({
            title: "Email atau password salah",
            icon: "error",
            button: "OK",
        })
    </script>
<?php endif ?>
<!-- gagal login -->

<!-- notifikasi sukses login user -->
<?php if (isset($successuser)) : ?>
    <script>
        Swal.fire({
                title: "Login berhasil",
                icon: "success",
                button: "OK",
            })
            .then((login_user) => {
                if (login_user) {
                    location.href = "../user/reg-uttp.html"
                }
            });
    </script>
<?php endif ?>


<!-- notifikasi sukses login admin -->
<?php if (isset($successadmin)) : ?>
    <script>
        Swal.fire({
                title: "Login berhasil",
                icon: "success",
                button: "OK",
            })
            .then((login_admin) => {
                if (login_admin) {
                    location.href = "../../admin/index.html"
                }

            });
    </script>
<?php endif ?>

<!-- notifikasi username belum terdaftar -->
<?php if (isset($notfound)) : ?>
    <script>
        Swal.fire({
                title: "Email Belum Terdaftar",
                text: "Silahkan daftar terlebih dahulu",
                icon: "warning",
                buttons: {
                    cancel: "Batal",
                    Daftar: true
                }
            })
            .then((value) => {
                switch (value) {
                    case "Daftar":
                        location.href = "./login.php"
                }
            });
    </script>
<?php endif ?>