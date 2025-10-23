# KafeKita - Website Coffee
---
Website Café Sederhana adalah proyek berbasis **Laravel** yang dibuat untuk menampilkan contoh website cafe dengan desain **responsif menggunakan Tailwind CSS**.  
Website ini juga dilengkapi sistem autentikasi manual seperti **login, registrasi, dan reset password** sederhana menggunakan  **Laravel Auth**.

<img width="1351" height="604" alt="Screenshot 2025-10-23 213156" src="https://github.com/user-attachments/assets/30c46fdf-0ee9-443e-9ee6-0088ff478da2" />

---

## ✨ Fitur Utama
- 🔐 **Autentikasi Pengguna**
  - Login & Registrasi pengguna
  - Reset Password sederhana
- 🏠 **Halaman Utama Café**
  - Desain modern & responsif dengan Tailwind CSS
  - Navigasi sederhana dan mudah digunakan

---

## 🧰 Teknologi yang Digunakan
| Teknologi | Deskripsi |
|------------|------------|
| **Laravel 12** | Framework utama untuk backend dan routing |
| **Tailwind CSS** | Framework CSS untuk desain yang cepat dan responsif |
| **Laravel Spatie** | Paket untuk manajemen role dan permission |
| **MySQL** | Basis data untuk menyimpan data pengguna dan konten |
| **Blade Template** | Engine template bawaan Laravel untuk tampilan front-end |
| **Composer & NPM** | Manajemen dependensi PHP dan JavaScript |

---

## ⚙️ Cara Menjalankan Project

### 1️⃣ Clone Repository
git clone https://github.com/MunimSudrajat/website-cafe-sederhana.git
cd website-cafe-sederhana

### 2️⃣ Install Dependencies
composer install
npm install
npm run dev

### 3️⃣ Buat File .env
Salin dari contoh:
cp .env.example .env
Lalu sesuaikan konfigurasi database kamu:
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=

### 4️⃣ Generate Key Aplikasi
php artisan key:generate

### 5️⃣ Jalankan Migrasi Database
php artisan migrate --seed

### 6️⃣ Jalankan Server
php artisan serve
Buka di browser:
http://127.0.0.1:8000
