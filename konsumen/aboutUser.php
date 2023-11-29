<?php
session_start();

// Cek apakah user telah login
if (isset($_SESSION['user_id'])) {
    // Mengambil nilai session
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $nama = $_SESSION['nama'];
    $profile_picture = $_SESSION['profile_picture'];
    $email = $_SESSION['email'];
    $nomor_hp = $_SESSION['nomor_hp'];
    $usia = $_SESSION['usia'];
    $jenis_kelamin = $_SESSION['jenis_kelamin'];
    $tinggi_badan = $_SESSION['tinggi_badan'];
    $berat_badan = $_SESSION['berat_badan'];
    $status_kehamilan = $_SESSION['status_kehamilan'];
    $riwayat_penyakit = $_SESSION['riwayat_penyakit'];
    $batas_konsumsi_kafein = $_SESSION['batas_konsumsi_kafein'];
    $batas_konsumsi_glukosa = $_SESSION['batas_konsumsi_glukosa'];
} else {
    // Redirect atau tindakan lain jika user belum login
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/caffe-ind.png" type="image/x-icon" />
    <title>Caffe-Ind</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/aboutUser.css">
    <!-- Library AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Javascript -->
    <script src="js/script.js"></script>
    <script src="js/aos.js"></script>
</head>

<body>
    <!-- Nav Start -->
    <nav class="navbar sticky-top navbar-expand-lg custom-navbar-bg">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#">
                <img src="assets/logo airin nav.png" alt="" class="regular-logo">
            </a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item my-auto">
                        <a class="nav-link" href="userpage.php">Home</a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link" href="menuUser.php">Menu</a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link" href="input.php">Caffe-Tracker</a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link" href="topik.php">Caffe-nChat</a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link active" aria-current="page" href="aboutUser.php">About</a>
                    </li>
                    <li class="nav-item my-auto dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/<?php echo $_SESSION['profile_picture']; ?>" alt="" class="profile-picture">
                        </a>
                        <ul class="dropdown-menu px-4 py-1 dropdown-menu-end">
                            <li>
                                <img src="assets/lihatProfil.png" alt="">
                                <a class="dropdown-item" href="lihatProfil.php">Lihat Profil</a>
                            </li>
                            <li>
                                <img src="assets/editProfil.png" alt="">
                                <a class="dropdown-item" href="editProfil.php?id=<?php echo $user_id; ?>">Edit Profil</a>
                            </li>
                            <li>
                                <img src="assets/lupaPassword.png" alt="">
                                <a class="dropdown-item" href="settingVerifikasiLlupaPassword.php?id=<?php echo $user_id; ?>">Lupa Password</a>
                            </li>
                            <li>
                                <img src="assets/gantiPassword.png" alt="">
                                <a class="dropdown-item" href="gantiPasswordSignPasswordLama.php">Ganti Password</a>
                            </li>
                            <li>
                                <img src="assets/hapusAkun.png" alt="">
                                <a class="dropdown-item" href="hapusKonsumen.php?id=<?php echo $user_id; ?>">Hapus Akun</a>
                            </li>
                            <li class="logout"><a class="dropdown-item logout-link" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Nav End -->

    <!-- Landing Page Start -->
    <div class="landing-page">
        <div class="container">
            <div class="background">
                <img src="assets/background.png" alt="">
            </div>
            <div class="content" data-aos="zoom-in-up">
                <img src="assets/caffe-ind x kopintouch.png" alt="caffe-ind x kopintouch">
                <div class="teks">
                    <div class="heading">
                        <h1>Kenali kami lebih dekat</h1>
                    </div>
                    <div class="subheading">
                        <h2>Caffe-Ind x KopInTouch: Memantau & Mencintai Kopi Bersama.</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Landing Page End -->

    <div class="overlaybot-landingpage">
        <img src="assets/tekstur kertas.png" alt="" class="overlay-bot">
    </div>

    <hr class="line-after-landingpage">

    <!-- About AIRIN Start -->
    <div class="airin">
        <div class="container">
            <div class="about-airin" data-aos="fade-right">
                <div class="header-airin">
                    <h4>ABOUT</h4>
                    <h2>AIRIN</h2>
                </div>
                <p>AIRIN adalah kelompok yang terdiri dari 5 mahasiswa semester 3 Program Studi Teknologi Rekayasa Perangkat Lunak Sekolah Vokasi IPB University yang sedang mejalankan project. Dalam mengerjakan project ini AIRIN bermitra dengan KOPinTOUCH. </p>
            </div>
            <img src="assets/AIRIN.jpg" alt="" data-aos="fade-left">
        </div>
    </div>
    <!-- About AIRIN End -->

    <hr class="line-after-airin">

    <!-- About KOPinTOUCH Start -->
    <div class="kopintouch">
        <div class="container">
            <img src="assets/Cafe KOPinTOUCH.jpg" alt="" data-aos="fade-right">
            <div class="about-kopintouch" data-aos="fade-left">
                <div class="header-kopintouch">
                    <h4>ABOUT</h4>
                    <h2>KOPinTOUCH</h2>
                </div>
                <p>KOPinTOUCH terletak di Jl. Lodaya I No.4, Bogor Tengah, Bogor. Ini adalah restoran cafe di tengah Kota Bogor. Minum kopi disini sangat cocok untuk menemani makan siang atau makan malammu.</p>
            </div>
        </div>
    </div>
    <!-- About KOPinTOUCH End -->

    <hr class="line-after-kopintouch">

    <!-- About Caffe-Ind Start -->
    <div class="caffeind">
        <div class="container">
            <div class="header-caffeind" data-aos="zoom-in-up">
                <h4>ABOUT</h4>
                <img src="assets/Logo Caffe-Ind Merah.png" alt="">
            </div>
            <div class="about-right" id="about-caffeind">
                <img src="assets/Mockup Caffe-Ind.png" alt="" data-aos="fade-right">
                <div class="teks-about-caffeind" data-aos="fade-left">
                    <h2 class="header-right">Caffe-Ind</h2>
                    <p>Caffe-Ind adalah aplikasi monitoring konsumsi kopi yang memungkinkan pengguna untuk mencatat menu kopi yang mereka konsumsi. Aplikasi ini mengumpulkan data konsumsi dan memberikan informasi tentang kafein, gula, serta efek kesehatan dari pola konsumsi kopi pengguna. Selain itu, Caffe-Ind juga menjadi platform untuk berinteraksi dan berbagi informasi seputar kopi antara konsumen.</p>
                </div>
            </div>
            <div class="about-left" id="about-caffetracker">
                <div class="teks-about-caffeind" data-aos="fade-right">
                    <h2 class="header-left">Caffe-Tracker</h2>
                    <p>Caffe-Tracker adalah salah satu fitur utama yang akan memberikan ringkasan harian dan mingguan tentang konsumsi KOPinTOUCH kamu, sehingga kamu dapat membuat keputusan yang lebih bijak tentang pola konsumsi kopi anda dan kesehatan kamu.</p>
                </div>
                <img src="assets/Mockup Caffe-Tracker.png" alt="" data-aos="fade-left">
            </div>
            <div class="about-right" id="about-caffenchat">
                <img src="assets/Mockup Caffe-nChat.png" alt="" data-aos="fade-right">
                <div class="teks-about-caffeind" data-aos="fade-left">
                    <h2 class="header-right">Caffe-nChat</h2>
                    <p>Pengalaman positif akan terjadi disini! Caffe-nChat akan menjadi tempat yang sempurna untuk membuka topik bahasan menarik mengenai kopi, mendapatkan saran, saling berkomunikasi, dan mendapatkan informasi terkini seputar kopi.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About Caffe-Ind End -->

    <div class="overlaytop-footer">
        <img src="assets/tekstur kertas.png" alt="" class="overlay-top">
    </div>

    <!-- Footer Start -->
    <footer>
        <div class="container">
            <div class="row1">
                <div class="col" id="col1">
                    <h4>GET IN TOUCH</h4>
                    <div class="row-icon" id="location">
                        <img src="assets/Location white.png" alt="location">
                        <p>SCBD</p>
                    </div>
                    <div class="row-icon">
                        <img src="assets/Phone white.png" alt="phone">
                        <p>+62 8123 4567 890</p>
                    </div>
                    <div class="row-icon">
                        <img src="assets/mail white.png" alt="">
                        <p>airin.jaya14@gmail.com</p>
                    </div>
                </div>
                <div class="col" id="col2">
                    <h4>FOLLOW US</h4>
                    <p>YUK! Kenali Caffe-Ind lebih dekat</p>
                    <div class="socialmedia">
                        <img src="assets/facebook.png" alt="facebook">
                        <img src="assets/instagram.png" alt="instagram">
                        <img src="assets/tiktok.png" alt="tiktok">
                        <img src="assets/twitter.png" alt="twitter">
                    </div>
                </div>
                <div class="col" id="col3">
                    <img src="assets/kopintouch.png" alt="Kop In Touch" id="KopInTouch">
                    <div class="open-hours" id="open-hours">
                        <h5>OPEN HOURS</h5>
                        <div class="row-icon">
                            <img src="assets/Calendar 19.png" alt="day">
                            <p>EVERY DAY</p>
                        </div>
                        <div class="row-icon">
                            <img src="assets/Clock.png" alt="hours">
                            <p>12 .00 PM - 12.00 AM</p>
                        </div>
                    </div>
                    <div class="location" id="location">
                        <h5>LOCATION</h5>
                        <div class="row-icon">
                            <img src="assets/Location white.png" alt="location">
                            <p>Jl. Lodaya I No. 04
                                Babakan, Kota Bogor, Jawa Barat 16128</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row2">
            <hr>
            <p>Copyright © <span>www.caffe-ind.com</span> All Rights Reserved</p>
            <p id="airin">Designed by <span>AIRIN</span></p>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>