<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Şehrim - Sakarya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Zehra Erkan</a>
            <div class="navbar-nav">
                <a class="nav-link" href="index.php">Hakkında</a>
                <a class="nav-link active" href="sehrim.php">Şehrim</a>
                <a class="nav-link" href="mirasimiz.php">Mirasımız</a>
                <a class="nav-link" href="ozgecmis.php">Özgeçmiş</a>
                <a class="nav-link" href="iletisim.php">İletişim</a>
                <a class="nav-link" href="login.php">Giriş Yap</a>
            </div>
        </div>
    </nav>

    <div class="icerik-kutusu">
        <div class="yazi-alani">
            <h1>Şehrim: Sakarya</h1>
            
            <p class="tanitim-metni">
                Sakarya, Marmara Bölgesi'nin en büyük beşinci ilidir ve ismini topraklarından geçen Sakarya Nehri'nden alır. 
                2021 yılında kazandığı <b>"Bisiklet Şehri"</b> unvanı ile öne çıkan şehrimiz, güncel 1.110.735 nüfusuyla 
                sürekli gelişen bir yapıya sahiptir. Kuzeyinde Karadeniz, batısında ise Kocaeli ve Bursa ile komşudur.
            </p>

            <div id="sakaryaSlider" class="carousel slide shadow mb-5" data-bs-ride="carousel">
                <div class="carousel-inner" style="border-radius: 20px;">
                    <div class="carousel-item active">
                        <img src="img/sapanca.jpg" class="d-block w-100" alt="Sapanca" style="height: 400px; object-fit: cover;">
                        <div class="carousel-caption"><h5>Sapanca Gölü</h5></div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/tarakli.jpg" class="d-block w-100" alt="Taraklı" style="height: 400px; object-fit: cover;">
                        <div class="carousel-caption"><h5>Taraklı Tarihi Evleri</h5></div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/poyrazlar.jpg" class="d-block w-100" alt="Poyrazlar" style="height: 400px; object-fit: cover;">
                        <div class="carousel-caption"><h5>Poyrazlar Gölü</h5></div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/kopru.jpg" class="d-block w-100" alt="Köprü" style="height: 400px; object-fit: cover;">
                        <div class="carousel-caption"><h5>Justinianus Köprüsü</h5></div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#sakaryaSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#sakaryaSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

            <div class="ilgi-alanlari-kutusu mt-4">
                <h4>Ekonomi ve Coğrafya</h4>
                <p>🚜 <b>Tarım:</b> Hendek, Karasu ve Kocaali ilçelerinde fındık; merkezde ise mısır tarımı ön plandadır.</p>
                <p>🏗️ <b>Sanayi:</b> Sakarya ekonomisinde sanayi kuruluşları Adapazarı çevresinde yoğunlaşmış durumdadır.</p>
                <p>⛰️ <b>Coğrafya:</b> Deniz seviyesinden 31 metre yükseklikte yer alan şehir, zengin su kaynaklarına sahiptir.</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>