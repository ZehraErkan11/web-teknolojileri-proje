<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Mesaj Sonucu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="ust-banner"></div>
    <div class="container mt-5">
        <div class="yazi-alani p-5 shadow" style="max-width: 600px; margin: auto; border-radius: 20px;">
            <h2 class="el-yazisi text-center mb-4" style="color: #5d6841;">Mesajınız Alındı</h2>
            
            <div class="alert alert-success">
                <p>Sunucuya (PHP) ulaşan bilgileriniz aşağıdadır:</p>
                <hr>
                <ul class="list-unstyled text-start">
                    <li><strong>Ad Soyad:</strong> <?php echo isset($_POST["ad"]) ? htmlspecialchars($_POST["ad"]) : "Girilmedi"; ?></li>
                    <li><strong>E-posta:</strong> <?php echo isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "Girilmedi"; ?></li>
                    <li><strong>Telefon:</strong> <?php echo isset($_POST["telefon"]) ? htmlspecialchars($_POST["telefon"]) : "Girilmedi"; ?></li>
                    <li><strong>Şehir:</strong> <?php echo isset($_POST["sehir"]) ? htmlspecialchars($_POST["sehir"]) : "Girilmedi"; ?></li>
                    <li><strong>Cinsiyet:</strong> <?php echo isset($_POST["cinsiyet"]) ? htmlspecialchars($_POST["cinsiyet"]) : "Girilmedi"; ?></li>
                    <li><strong>Mesaj:</strong> <?php echo isset($_POST["mesaj"]) ? htmlspecialchars($_POST["mesaj"]) : "Girilmedi"; ?></li>
                </ul>
            </div>
            
            <div class="text-center mt-4">
                <a href="iletisim.php" class="buton-basit text-decoration-none">Geri Dön</a>
            </div>
        </div>
    </div>
</body>
</html>