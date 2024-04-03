# MertNews Haber Sitesi

MertNews, haberlerinizi güncel ve tarafsız bir şekilde sunmak için tasarlanmış bir web uygulamasıdır. Bu proje PHP dilinde Laravel framework'ü kullanılarak geliştirilmiştir.

## Özellikler

- Anasayfa: Son dakika haberlerine, öne çıkan haberlere ve kategorilere erişim imkanı sağlar.
- Hakkımızda: Kuruluş hakkında bilgi veren sayfa.
- Haber Detayları: Her bir haberin ayrıntılarını içeren sayfa.
- Gezi Rehberi: Seyahat tutkunları için gezi rehberi içeren sayfa.
- İletişim: Kullanıcıların bizimle iletişime geçebileceği iletişim formu.

## Gereksinimler

- PHP 7.x
- Composer
- Laravel 8.x
- MySQL veya diğer desteklenen veritabanı

## Kurulum

1. Projeyi klonlayın veya ZIP dosyası olarak indirin.
2. Terminali açın ve projenin bulunduğu dizine gidin.
3. composer install komutunu kullanarak gerekli bağımlılıkları yükleyin.
4. '.env.example' dosyasını '.env' olarak kopyalayın ve veritabanı bilgilerinizi düzenleyin.
5. 'php artisan key:generate' komutunu kullanarak uygulama anahtarını oluşturun.
6. 'php artisan migrate' komutunu kullanarak veritabanını oluşturun.
7. 'php artisan serve' komutunu kullanarak yerel sunucuyu başlatın.
   
## Kullanım

- Projeyi başlattıktan sonra tarayıcınızda http://localhost:8000 adresine gidin.
- Ana sayfadan haberlere göz atabilir veya kategorilere göre filtreleyebilirsiniz.
- Haber detaylarına tıklayarak haberin tamamını okuyabilirsiniz.
- Diğer sayfalara da menüden erişebilirsiniz.

## Katkıda Bulunma
- Projeye katkıda bulunmak için bir fork oluşturun.
- Yeni özellikler veya düzeltmeler ekleyin.
- Değişikliklerinizi bir pull isteği olarak gönderin.
