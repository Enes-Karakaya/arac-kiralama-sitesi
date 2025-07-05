# Araç Kiralama Sistemi

## Proje Hakkında
Bu proje, Laravel ve MySQL kullanılarak geliştirilmiş bir web tabanlı araç kiralama sistemidir. Kullanıcılar araçları listeleyebilir, kiralama yapabilir, rezervasyonlarını yönetebilir ve admin paneli üzerinden araç ile kullanıcı yönetimi gerçekleştirebilir.

## Özellikler
- **Kullanıcı Yönetimi**: Kullanıcı kaydı, girişi ve profil yönetimi.
- **Araç Listeleme**: Mevcut araçların listelenmesi ve detaylarının görüntülenmesi.
- **Kiralama İşlemleri**: Araç kiralama, tarih seçimi ve ödeme işlemleri.
- **Admin Paneli**: Araç ekleme/silme, kiralama yönetimi ve kullanıcı yönetimi.
- **Rezervasyon Durumu**: Kullanıcıların rezervasyonlarını görüntülemesi ve iptal etmesi.
- **Filtreleme ve Arama**: Araçları marka, model veya fiyat aralığına göre filtreleme.

## Teknolojiler
- **Backend**: Laravel 10.x
- **Frontend**: Blade Templating, Bootstrap 5
- **Veritabanı**: MySQL
- **Diğer**: Laravel Authentication, Eloquent ORM, REST API

## Gereksinimler
- PHP 8.1+
- Composer
- MySQL 8.0+
- Node.js ve npm (frontend varlıkları için)
- Git

## Kurulum

### Adım Adım Kurulum
1. **Depoyu Klonlayın**:
   ```bash
   git clone https://github.com/kullanici_adi/rent-a-car.git
   cd rent-a-car
   ```

2. **Bağımlılıkları Yükleyin**:
   - Composer ile PHP bağımlılıklarını yükleyin:
     ```bash
     composer install
     ```
   - Frontend varlıklarını derlemek için:
     ```bash
     npm install
     npm run dev
     ```

3. **Çevresel Ayarları Yapılandırın**:
   - `.env` dosyasını oluşturun:
     ```bash
     cp .env.example .env
     ```
   - `.env` dosyasını düzenleyerek MySQL bağlantı ayarlarını güncelleyin:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=rentacar
     DB_USERNAME=kullanici
     DB_PASSWORD=sifre
     ```
   - Laravel uygulama anahtarını oluşturun:
     ```bash
     php artisan key:generate
     ```

4. **Veritabanını Yapılandırın**:
   - MySQL'de bir veritabanı oluşturun:
     ```sql
     CREATE DATABASE rentacar;
     ```
   - Veritabanı migrasyonlarını çalıştırın:
     ```bash
     php artisan migrate
     ```
   - İsteğe bağlı: Örnek verileri yüklemek için:
     ```bash
     php artisan db:seed
     ```

5. **Sunucuyu Başlatın**:
   - Laravel geliştirme sunucusunu başlatın:
     ```bash
     php artisan serve
     ```
   - Uygulama genellikle `http://localhost:8000` adresinde çalışır.

## Kullanım
1. **Ana Sayfa**: Tarayıcınızda `http://localhost:8000` adresine gidin.
2. **Kayıt/Giriş**: Kullanıcı kaydı yapın veya mevcut bir hesapla giriş yapın.
3. **Araç Kiralama**:
   - Araç listeleme sayfasından istediğiniz aracı seçin.
   - Kiralama tarihlerini ve ödeme yöntemini belirleyin.
   - Rezervasyonu onaylayın.
4. **Admin Paneli**: `http://localhost:8000/admin` adresinden admin paneline erişin (Giriş yaptıktan sonra yetkilendirme gerekebilir).

## API Dokümantasyonu
- **GET /api/vehicles**: Tüm araçları listeler.
- **POST /api/rent**: Yeni bir kiralama oluşturur.
- **GET /api/user/reservations**: Kullanıcının rezervasyonlarını listeler.
- API detayları için: [API Dokümantasyonu](docs/api.md)

## Katkıda Bulunma
1. Depoyu fork edin.
2. Yeni bir özellik dalı oluşturun: `git checkout -b ozellik-adi`
3. Değişikliklerinizi yapın ve commit edin: `git commit -m "Özellik açıklaması"`
4. Değişiklikleri push edin: `git push origin ozellik-adi`
5. Pull Request oluşturun.

## Lisans
Bu proje MIT Lisansı altında lisanslanmıştır. Detaylar için [LICENSE](LICENSE) dosyasına bakın.

## İletişim
Sorularınız için: [email@example.com](mailto:email@example.com)  
GitHub: [kullanici_adi](https://github.com/kullanici_adi)