# Fonnte for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nonuser/laravel-fonnte.svg?style=flat-square)](https://packagist.org/packages/nonuser/laravel-fonnte)
[![Total Downloads](https://img.shields.io/packagist/dt/nonuser/laravel-fonnte.svg?style=flat-square)](https://packagist.org/packages/nonuser/laravel-fonnte)

Unofficial Integrasi API [Fonnte](https://fonnte.com/) untuk Laravel.

---

## Requirements
The following plugin is tested under following environment:
* PHP v8.2.x or greater
* Laravel 12
  
---

## Instalasi

### 1. Install Package

```bash
composer require nonuser/laravel-fonnte
````

### 2. Konfigurasi

#### A. Publish Config

```bash
php artisan vendor:publish --provider="Fonnte\\Laravel\\FonnteServiceProvider" --tag="config"
```

#### B. Tambahkan Token Fonnte

```env
FONNTE_TOKEN=
```

---

## Cara Penggunaan

```php
use Fonnte;

$response = Fonnte::sendMessage('081234567890', 'Halo dari Laravel!');

if ($response->successful()) {
    logger('Pesan berhasil dikirim.', ['res' => $response->json()]);
} else {
    logger()->error('Gagal mengirim pesan.', ['res' => $response->body()]);
}
```

---

## 🔐 Keamanan

Kalau ada laporan keamanan, kirimkan langsung ke: **[nonuser0002@gmail.com](mailto:nonuser0002@gmail.com)**

---


## 👨‍💻 Author

**nonUser00**  
📧 Email: [nonuser0002@gmail.com](mailto:nonuser0002@gmail.com)  
💻 GitHub: [@nonUser00](https://github.com/nonUser00)

---

## 📄 License

This package is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---


<div align="center">
  
**⭐ If you find this package helpful, please consider giving it a star!**

Made with ❤️ to make sending WhatsApp messages from Laravel
</div>
