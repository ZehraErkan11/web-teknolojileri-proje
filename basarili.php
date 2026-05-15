<?php
// 1. KONTROL MEKANİZMASI: Sayfa daha yüklenmeden en üstte çalışır
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // strtolower() ile gelen verileri tamamen küçük harfe çeviriyoruz
    $email = strtolower(trim($_POST["email"]));
    $sifre = strtolower(trim($_POST["sifre"]));

    
    // Bunları da küçük harf olarak tanımlıyoruz ki eşleşme tam olsun
    $dogru_email = "b251210002@sakarya.edu.tr";
    $dogru_sifre = "b251210002";

    // Karşılaştırma yapıyoruz
    if ($email !== $dogru_email || $sifre !== $dogru_sifre) {
        // Bilgiler HATALIYSA: Kullanıcıyı login sayfasına geri gönder
        header("Location: login.html?hata=1");
        exit();
    }
} else {
    // Sayfaya formsuz (direkt linkle) girmeye çalışanları geri yolla
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Başarılı Giriş | Zehra Erkan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="ust-banner"></div>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">Zehra Erkan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarZehra" aria-controls="navbarZehra" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarZehra">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="index.html">Hakkında</a>
                    <a class="nav-link" href="sehrim.html">Şehrim</a>
                    <a class="nav-link" href="takimimiz.html">Takımımız</a>
                    <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                    <a class="nav-link" href="ilgi-alanlarim.html">İlgi Alanlarım</a>
                    <a class="nav-link" href="iletisim.html">İletişim</a>
                    <a class="nav-link" href="login.html">Giriş Yap</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="yazi-alani text-center" style="max-width: 600px; margin-left: auto; margin-right: auto; padding: 50px 20px;">
            <h1 class="el-yazisi" style="font-size: 3rem; color: #5d6841;">
                Hoşgeldiniz <?php echo htmlspecialchars($_POST["sifre"]); ?>
            </h1>
            <p class="text-muted mt-3 fs-5">Giriş işleminiz başarıyla tamamlandı.</p>
            <br>
            <a href="index.html" class="buton-basit text-decoration-none" style="background-color: #8a966a; color: white;">Ana Sayfaya Dön</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>