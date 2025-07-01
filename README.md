# 🌐 Web Gereja - GPdI House of Worship

Ini adalah aplikasi website untuk gereja GPdI House of Worship. Website ini dikembangkan menggunakan **Laravel** sebagai backend dan **Blade Template** sebagai frontend.

## 🚀 Fitur Utama

- 📰 CRUD Banner (Halaman Utama)
- 📅 Jadwal Ibadah
- 📖 Renungan Harian (oleh admin)
- 🧑‍💼 Manajemen User (Admin & User)
- 📱 Responsif di Mobile & Desktop

## ⚙️ Teknologi

- PHP 8.x + Laravel 10
- Blade Template Engine
- Bootstrap 
- MySQL 
## 📦 Instalasi Lokal

```bash
git clone https://github.com/yonathanop/webGereja.git
cd webGereja
composer install
cp .env.example .env
php artisan key:generate
# Edit .env untuk koneksi database
php artisan migrate
php artisan serve

# webGereja
Website untuk GPdI House of Worship
>>>>>>> d6b05ace853f873beb453af7a2250f5b142f2bf4
