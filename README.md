# ebilet-web

## Genel Bakış

Bu, e-bilet yönetimi için bir web uygulamasıdır. Laravel ile oluşturulmuş bu proje, bilet yönetimi için kapsamlı bir çözüm sunmayı amaçlamaktadır.

## Özellikler

- Kullanıcı Kimlik Doğrulama
- Bilet Rezervasyonu
- Etkinlik Yönetimi
- Ödeme Geçidi Entegrasyonu

## Gereksinimler

- PHP >= 7.4
- Composer
- MySQL

## Kurulum

```bash
# Depoyu klonlayın
git clone https://github.com/expixer/ebilet-web.git

# Proje dizinine gidin
cd ebilet-web

# PHP bağımlılıklarını yükleyin
composer install

# JavaScript bağımlılıklarını yükleyin
npm install

# Örnek env dosyasını kopyalayın
cp .env.example .env

# Uygulama anahtarını oluşturun
php artisan key:generate

# Veritabanı göçlerini çalıştırın
php artisan migrate

# Geliştirme sunucusunu başlatın
php artisan serve
```

## Kullanım

Web tarayıcınızda http://localhost:8000 adresini ziyaret edin.

## Lisans

Bu proje MIT lisansı ile lisanslanmıştır. Daha fazla bilgi için [LISANS](LICENSE.txt) dosyasına bakın.

## İletişim

Sorularınız ve geri bildirimleriniz için [GitHub Issues](https://github.com/expixer/SeriPortProgrami/issues) kısmını kullanabilirsiniz.

