# veritabanindan veri cekme

##Proje XXAMP ile nasıl kullanılır: ## <br/>

- İlk başta kod dosyaları indirilip  C:\xampp\htdocs klasörüne yapıştırılır.  (XXAMP bilgisayarınızda kurulu değil ise önce kurmanız lazım) <br/>
- XXAMP çalıştırılır ve APACHE ile MySql e start basılır  <br/>
-  MySql de Admin  düğmesine basarak phpMyadmin sayfasına geçip  SQL adlı sekmeye basılır.<br/>
-"CREATE DATABASE 389017" yazarak veri tabanı oluşturun. <br/>
- Oluşturulan veritabanına tıklayarak tekrar SQL sekmesine basılır ve bu sefer " CREATE TABLE kullanicilar (kullanici_id int not null auto_increment,
kullaniciadi VARCHAR (255) not null, sifre VARCHAR (255) not null, PRIMARY key(kullanici_id))" kodu yazılır  ve Git düğmesine basılır. <br/>
- Sonra randevu tablosunu oluşturmak için "CREATE TABLE musteriler (musteri_id int not null auto_increment, adsoyad VARCHAR(255) not null, 
telno VARCHAR(255) not null, il VARCHAR(255) not null, butce VARCHAR(255) not null, PRIMARY key(musteri_id))" kodu yazılır.<br/>
- tablolar oluşturulduktan sonra internet tarayıcınıza localhost/index.php yazarak ansayfaya ulaşabilirsiniz. Anasayfada her sayfaya giden linkler mevcuttur.<br/>

[site link](http://turkuy.eu5.org)
