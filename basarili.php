<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Başarılı Giriş</title>
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
            <div class="navbar-nav ms-auto"> <!-- ms-auto linkleri sağa yaslar -->
                <a class="nav-link" href="index.html">Hakkında</a>
                <a class="nav-link" href="sehrim.html">Şehrim</a>
                <a class="nav-link" href="takimimiz.html">Takımımız</a>
                <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                <a class="nav-link" href="ilgi-alanlarim.html">İlgi Alanlarım</a>
                <a class="nav-link" href="iletisim.php">İletişim</a>
                <a class="nav-link" href="login.php">Giriş Yap</a>
            </div>
        </div>
    </div>
</nav>

    <div class="container">
        <div class="yazi-alani text-center" style="max-width: 600px; margin-left: auto; margin-right: auto; padding: 50px 20px;">
            <h1 class="el-yazisi" style="font-size: 3rem; color: #5d6841;">
                Hoşgeldiniz <?php echo isset($_GET['ogr']) ? htmlspecialchars($_GET['ogr']) : 'Öğrenci'; ?>
            </h1>
            <p class="text-muted mt-3 fs-5">Giriş işleminiz başarıyla tamamlandı.</p>
            <br>
            <a href="index.html" class="buton-basit text-decoration-none" style="background-color: #8a966a; color: white;">Ana Sayfaya Dön</a>
        </div>
    </div>

</body>
</html>
