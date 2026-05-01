<?php
$hata_mesaji = "";

// Form gönderildi mi kontrol et (POST işlemi)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"] ?? "");
    $sifre = trim($_POST["sifre"] ?? "");

    // Boş alan kontrolü
    if (empty($email) || empty($sifre)) {
        $hata_mesaji = "Kullanıcı adı ve şifre alanları boş bırakılamaz!";
    } 
    else {
        // DİNAMİK KONTROL: Senin yazdığın o güzel mantığı koruyoruz.
        $beklenen_mail_1 = $sifre . "@sakarya.edu.tr";
        $beklenen_mail_2 = $sifre . "@ogr.sakarya.edu.tr";

        if ($email === $beklenen_mail_1 || $email === $beklenen_mail_2) {
            // Başarılı giriş: Kullanıcı numarasını basarili.php'ye gönderiyoruz
            header("Location: basarili.php?ogr=" . urlencode($sifre));
            exit();
        } else {
            $hata_mesaji = "Hatalı giriş! Kullanıcı adınız ile şifreniz eşleşmiyor.";
        }
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
</head>
<body>

    <div class="ust-banner"></div>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">Zehra Erkan</a>
            <div class="navbar-nav">
                <a class="nav-link" href="index.html">Hakkında</a>
                <a class="nav-link" href="sehrim.html">Şehrim</a>
                <a class="nav-link" href="takimimiz.html">Takımımız</a>
                <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                <a class="nav-link" href="ilgi-alanlarim.html">İlgi Alanlarım</a>
                <a class="nav-link" href="iletisim.php">İletişim</a>
                <a class="nav-link active" href="login.php">Giriş Yap</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="yazi-alani login-kutusu">
            
            <h1 class="el-yazisi mt-2 mb-4">Sisteme Giriş</h1>

            <?php if (!empty($hata_mesaji)): ?>
                <div class="alert alert-danger py-2" role="alert" style="border-radius: 15px;">
                    <?php echo htmlspecialchars($hata_mesaji); ?>
                </div>
            <?php endif; ?>

            <form action="login.php" method="POST" class="text-start mt-4">
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold ana-baslik">Kullanıcı Adı (E-posta)</label>
                    <input type="email" class="form-control" id="email" name="email" 
                           placeholder="b2412100001@sakarya.edu.tr" required>
                </div>

                <div class="mb-4">
                    <label for="sifre" class="form-label fw-bold ana-baslik">Şifre (Öğrenci No)</label>
                    <input type="password" class="form-control" id="sifre" name="sifre" 
                           placeholder="Örn: b251210002" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="buton-basit border-0">Giriş Yap</button>
                </div>
            </form>

            <p class="mt-4 text-muted small">
                <em>Denemek için:<br>
                Kullanıcı: b2412100001@sakarya.edu.tr<br>
                Şifre: b2412100001</em>
            </p>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>