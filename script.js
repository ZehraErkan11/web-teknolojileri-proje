/* ============================================================
   1. VUE.JS KONTROLÜ
   ============================================================ */
const { createApp } = Vue;

createApp({
    data() {
        return {
            formVerisi: {
                ad: '',
                email: '',
                telefon: '',
                sehir: '',
                cinsiyet: '',
                mesaj: '',
                onay: false
            },
            vueHatalari: [] 
        }
    },
    methods: {
        vueJSkontrol() {
           
            this.vueHatalari = [];
            const f = this.formVerisi;

          
            const isimKurali = /^[a-zA-ZçÇğĞıİöÖşŞüÜ\s]+$/; // Sayı ve sembol yasak
            const mailKurali = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Standart mail formatı

           
            if (f.ad.trim().length < 3) {
                this.vueHatalari.push("Ad Soyad en az 3 karakter olmalıdır.");
            } else if (!isimKurali.test(f.ad)) {
                this.vueHatalari.push("Ad Soyad alanında sayı kullanılamaz!");
            }

            // 4. E-posta Kontrolü
            if (!mailKurali.test(f.email)) {
                this.vueHatalari.push("Geçerli bir e-posta adresi giriniz.");
            }

            // 5. Telefon Kontrolü
            if (f.telefon.length !== 11 || isNaN(f.telefon)) {
                this.vueHatalari.push("Telefon numarası tam 11 haneli bir sayı olmalıdır.");
            }

            // 6. Boşluk ve Onay Kontrolü
            if (!f.sehir || !f.cinsiyet || f.mesaj.trim() === "" || !f.onay) {
                this.vueHatalari.push("Lütfen tüm alanları doldurun ve kullanım koşullarını onaylayın.");
            }

           
            if (this.vueHatalari.length > 0) {
              
                return; 
            }

          
            alert("Doğrulama Başarılı! Bilgileriniz sunucuya iletiliyor...");
            document.getElementById('iletisimFormu').submit();
        }
    }
}).mount('#vue-app');

function klasikJSKontrol() {
   
    const ad = document.getElementById('ad').value.trim();
    const email = document.getElementById('email').value.trim();
    const telefon = document.getElementById('telefon').value.trim();
    const sehir = document.getElementById('sehir').value;
    const cinsiyet = document.querySelector('input[name="cinsiyet"]:checked');
    const onay = document.getElementById('onay').checked;
    const mesaj = document.getElementById('mesaj').value.trim();


   
    const isimKurali = /^[a-zA-ZçÇğĞıİöÖşŞüÜ\s]+$/; // SADECE HARF kuralı
    const mailKurali = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Standart mail kuralı

    
    
    
    if (ad.length < 3) {
        alert("Ad Soyad en az 3 karakter olmalıdır.");
        return; // Durdur!
    }
    if (!isimKurali.test(ad)) {
        alert("Ad Soyad alanında sayı veya özel karakter kullanılamaz!");
        return; 
    }

    // E-POSTA
    if (!mailKurali.test(email)) {
        alert("Lütfen geçerli bir e-posta adresi yazın.");
        return; 
    }

    
    if (telefon.length !== 11 || isNaN(telefon)) {
        alert("Telefon numarası tam 11 haneli bir sayı olmalıdır.");
        return; 
    }
    if (mesaj === "") {
        alert("Lütfen iletmek istediğiniz mesajı yazın.");
        return;
    }
    // SEÇİMLER
    if (sehir === "" || !cinsiyet || !onay) {
        alert("Lütfen tüm seçimleri yapın ve kutucuğu onaylayın.");
        return;
    }
    // MESAJ KONTROLÜ 
   

    // 4. EĞER BURAYA KADAR DURMADIYSA:
    alert("Başarılı! Form gönderiliyor.");
    document.getElementById('iletisimFormu').submit();
}
/* ============================================================
   3. API VERİ ÇEKME (Chicago Sanat Enstitüsü)
   ============================================================ */

// Sayfada 'galeri-alani' kimliğine sahip bir div olup olmadığını kontrol ediyoruz
if (document.getElementById('galeri-alani')) {

    var galeriAlani = document.getElementById('galeri-alani'); 

    var apiUrl = 'https://api.artic.edu/api/v1/artworks/search?q=Vincent%20van%20Gogh&limit=6&fields=id,title,artist_display,image_id,date_display';

    fetch(apiUrl)

        .then(function(response) { return response.json(); })
        .then(function(data) {

            if (data.data && data.data.length > 0) {
                // Verileri döngüyle tek tek işleme

                for (var i = 0; i < data.data.length; i++) {
                    var eser = data.data[i];

                  if (eser.image_id) {

                        var resimUrl = 'https://www.artic.edu/iiif/2/' + eser.image_id + '/full/843,/0/default.jpg';

                       

                        var kartHTML = '<div class="col-md-4 mb-4">' +
                                          '<div class="card h-100 shadow-sm">' +
                                            '<img src="' + resimUrl + '" class="card-img-top" style="height:250px; object-fit:cover;">' +
                                            '<div class="card-body">' +
                                              '<h6 class="fw-bold">' + eser.title + '</h6>' +
                                              '<p class="small text-muted">' + eser.date_display + '</p>' +
                                            '</div>' +
                                          '</div>' +
                                       '</div>';

                        // Oluşturulan içeriği sayfaya ekleme

                        galeriAlani.innerHTML = galeriAlani.innerHTML + kartHTML;
                    }
                }
            }
        })

        .catch(function(err) {
            console.log("Hata oluştu: " + err);
            var hataKutusu = document.getElementById('hata-alani');

            if(hataKutusu) {
                hataKutusu.innerHTML = "Veriler şu an yüklenemiyor.";
                hataKutusu.style.display = 'block';
            }
        });
}