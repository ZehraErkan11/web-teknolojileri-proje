<?php
$hata_mesaji = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $email = strtolower($_POST["email"]); // Gelen maili küçük harfe zorla
   $sifre = strtolower($_POST["sifre"]);
    $beklenen_mail = $sifre . "@sakarya.edu.tr";

    if ($email === $beklenen_mail) {
        header("Location: basarili.php?ogr=" . $sifre);
        exit();
    } else {
        $hata_mesaji = "Hatalı giriş! Kullanıcı adınız ile şifreniz eşleşmiyor.";
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap | Zehra Erkan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
    <script>
        function dogrula() {
            // Formdaki değerleri alıyoruz
            var email = document.forms["loginForm"]["email"].value;
            var sifre = document.forms["loginForm"]["sifre"].value;

            // 1. Boş alan kontrolü
            if (email == "" || sifre == "") {
                alert("E-posta ve şifre alanları boş bırakılamaz!");
                return false; 
            }

            // 2. Mail formatı kontrolü 
            // İçinde @ ve . sakarya.edu.tr geçiyor mu diye bakıyoruz
            if (!email.includes("@sakarya.edu.tr")) {
                alert("Lütfen geçerli bir Sakarya Üniversitesi mail adresi giriniz!");
                return false;
            }

            // 3. Şifre formatı kontrolü (b + 9 rakam)
            if (sifre.length !== 10 || sifre.charAt(0).toLowerCase() !== 'b') {
                alert("Şifreniz 'b' ile başlamalı ve toplam 10 karakter olmalıdır!");
                return false;
            }

            return true; // Her şey tamamsa form gönderilir
        }
    </script>
</head>
<body>

<div class="ust-banner"></div>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">
        <!-- Logo / İsim -->
        <a class="navbar-brand" href="#">Zehra Erkan</a>

        <!-- Hamburger Menü Butonu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarZehra" aria-controls="navbarZehra" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menü İçeriği  -->
        <div class="collapse navbar-collapse" id="navbarZehra">
            <div class="navbar-nav ms-auto"> <!-- ms-auto linkleri sağa yaslar -->
                <a class="nav-link" href="index.html">Hakkında</a>
                <a class="nav-link" href="sehrim.html">Şehrim</a>
                <a class="nav-link" href="takimimiz.html">Takımımız</a>
                <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                <a class="nav-link" href="ilgi-alanlarim.html">İlgi Alanlarım</a>
                <a class="nav-link" href="iletisim.php">İletişim</a>
                <a class="nav-link active" href="login.php">Giriş Yap</a>
            </div>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="yazi-alani shadow-lg mx-auto p-5" style="max-width: 500px; border-radius: 20px;">
        <h2 class="text-center el-yazisi mb-4" style="color: #5d6841;">Giriş Paneli</h2>

        <?php if ($hata_mesaji != ""): ?>
            <div class="alert alert-danger text-center small"><?php echo $hata_mesaji; ?></div>
        <?php endif; ?>

        <!-- onsubmit özelliği JS fonksiyonunu tetikler -->
        <form name="loginForm" action="login.php" method="POST" onsubmit="return dogrula()">
            <div class="mb-3">
                <label class="form-label fw-bold">E-posta</label>
                <input type="text" class="form-control" name="email" placeholder="b241210001@sakarya.edu.tr">
            </div>
            <div class="mb-4">
                <label class="form-label fw-bold">Şifre</label>
                <input type="password" class="form-control" name="sifre" placeholder="b241210001">
            </div>
            <button type="submit" class="buton-basit w-100 border-0 p-2" style="background-color: #8a966a; color: white;">
                Giriş Yap
            </button>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>