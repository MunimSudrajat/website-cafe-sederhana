# KafeKita - Website Coffee
Website KafeKita adalah website sederhana dengan proyek berbasis Laravel yang dibuat untuk menampilkan contoh website cafe dengan desain responsif menggunakan Tailwind CSS.  
Website ini juga dilengkapi sistem autentikasi manual seperti login, registrasi, dan reset password sederhana menggunakan Laravel Auth.

<img width="1351" height="604" alt="Screenshot 2025-10-23 213156" src="https://github.com/user-attachments/assets/30c46fdf-0ee9-443e-9ee6-0088ff478da2" />
<img width="1366" height="605" alt="image" src="https://github.com/user-attachments/assets/b6937635-8780-4cac-84f1-ed90b052dc7d" />
<img width="1366" height="529" alt="image" src="https://github.com/user-attachments/assets/3a22df2f-3fb2-4730-b92f-40d3ef410d6c" />
<img width="1366" height="531" alt="image" src="https://github.com/user-attachments/assets/d1e75c10-9fd8-4fb2-a4c2-7faaf5c6b17c" />
<img width="1366" height="600" alt="image" src="https://github.com/user-attachments/assets/2aed06e6-3062-4e67-a1a2-9378e524ece1" />





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
git clone https://github.com/MunimSudrajat/website-cafe-sederhana.git<br>
cd website-cafe-sederhana

### 2️⃣ Install Dependencies
composer install<br>
npm install<br>
npm run dev

### 3️⃣ Buat File .env
Salin dari contoh: <br>
cp .env.example .env <br>
Lalu sesuaikan konfigurasi database kamu: <br>
DB_DATABASE=nama_database<br>
DB_USERNAME=root<br>
DB_PASSWORD=

### 4️⃣ Generate Key Aplikasi
php artisan key:generate

### 5️⃣ Jalankan Migrasi Database
php artisan migrate --seed

### 6️⃣ Jalankan Server
php artisan serve
Buka di browser: <br>
http://127.0.0.1:8000
