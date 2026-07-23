# Invoice System Management

Sistem manajemen invoice (faktur) berbasis web yang dibangun menggunakan Laravel. Proyek ini dikembangkan sebagai bagian dari program magang (internship) di **NASHIR ID**.

🔗 **Live Demo:** [invoice-system-management-pi.vercel.app](https://invoice-system-management-pi.vercel.app)

---

## 📋 Daftar Isi

- [Tentang Proyek](#-tentang-proyek)
- [Tech Stack](#-tech-stack)
- [Prasyarat](#-prasyarat)
- [Instalasi](#-instalasi)
- [Konfigurasi Environment](#-konfigurasi-environment)
- [Menjalankan Aplikasi](#-menjalankan-aplikasi)
- [Perintah Development](#-perintah-development)
- [Struktur Proyek](#-struktur-proyek)
- [Deployment ke Vercel](#-deployment-ke-vercel)
- [Kontribusi](#-kontribusi)
- [Lisensi](#-lisensi)

---

## 📖 Tentang Proyek

**Invoice System Management** adalah aplikasi untuk mengelola pembuatan, pencatatan, dan pengelolaan invoice/faktur secara digital. Dibangun dengan framework Laravel di sisi backend dan Blade + Tailwind CSS di sisi frontend.

## 🛠 Tech Stack

| Kategori     | Teknologi                        |
|--------------|-----------------------------------|
| Backend      | Laravel (PHP)                    |
| Frontend     | Blade Templates, Tailwind CSS    |
| Build Tool   | Vite                              |
| Database     | MySQL / PostgreSQL               |
| Deployment   | Vercel                            |

## ✅ Prasyarat

Pastikan perangkat kamu sudah memiliki:

- PHP >= 8.1
- Composer
- Node.js >= 16.x
- MySQL atau PostgreSQL
- Git

Cek versi yang sudah terpasang:

```bash
php -v
composer -V
node -v
npm -v
git --version
```

## 🚀 Instalasi

### 1. Clone repository

```bash
git clone https://github.com/alkadafii1/invoice-system-management.git
cd invoice-system-management
```

### 2. Install dependensi PHP (Composer)

```bash
composer install
```

### 3. Install dependensi NPM

```bash
npm install
```

### 4. Buat file environment

```bash
cp .env.example .env
```

### 5. Generate application key

```bash
php artisan key:generate
```

## ⚙️ Konfigurasi Environment

Buka file `.env` lalu sesuaikan konfigurasi database sesuai environment lokal kamu:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Setelah itu, jalankan migrasi database:

```bash
php artisan migrate
```

Jika ada seeder dan ingin mengisi data awal (dummy data):

```bash
php artisan db:seed
```

Atau jalankan migrasi sekaligus seeding dalam satu perintah:

```bash
php artisan migrate --seed
```

## ▶️ Menjalankan Aplikasi

### 1. Build assets frontend

```bash
npm run build
```

### 2. Jalankan development server Laravel

```bash
php artisan serve
```

Aplikasi bisa diakses melalui browser di:

```
http://localhost:8000
```

## 💻 Perintah Development

Kumpulan perintah yang sering dipakai selama proses development:

```bash
# Menjalankan Vite dengan hot-reload (auto refresh saat ada perubahan)
npm run dev

# Build assets untuk production
npm run build

# Menjalankan migrasi database
php artisan migrate

# Rollback migrasi terakhir
php artisan migrate:rollback

# Reset ulang migrasi dari awal
php artisan migrate:fresh

# Reset migrasi + jalankan seeder
php artisan migrate:fresh --seed

# Menjalankan seeder database
php artisan db:seed

# Membersihkan cache konfigurasi Laravel
php artisan config:clear

# Membersihkan cache aplikasi
php artisan cache:clear

# Menjalankan test (jika ada)
php artisan test
```

## 📁 Struktur Proyek

```
invoice-system-management/
├── api/               # Endpoint/konfigurasi API
├── app/               # Application core
│   ├── Http/          # Controllers, Middleware
│   └── Models/        # Eloquent Models
├── bootstrap/         # File bootstrap Laravel
├── config/            # File konfigurasi aplikasi
├── database/
│   ├── migrations/    # Migrasi database
│   └── seeders/       # Seeder database
├── public/            # Public assets (entry point)
├── resources/
│   └── views/         # Blade templates
├── routes/
│   ├── web.php         # Route web
│   └── api.php         # Route API
├── storage/            # Logs, cache, file upload
├── tests/               # Unit & feature test
├── .env.example         # Contoh konfigurasi environment
├── composer.json        # Dependensi PHP
├── package.json          # Dependensi Node/NPM
└── vercel.json            # Konfigurasi deployment Vercel
```

## ☁️ Deployment ke Vercel

Proyek ini sudah dilengkapi dengan file `vercel.json` untuk keperluan deployment ke Vercel.

Langkah singkat:

1. Hubungkan repository GitHub ini ke akun Vercel kamu.
2. Vercel akan otomatis melakukan deployment setiap ada push ke branch `main`.
3. Pastikan environment variable (seperti koneksi database) sudah diatur di dashboard Vercel.

Jika ingin deploy manual menggunakan Vercel CLI:

```bash
npm install -g vercel
vercel login
vercel --prod
```

## 🤝 Kontribusi

Kontribusi sangat terbuka! Jika ingin berkontribusi:

```bash
# 1. Fork repository ini terlebih dahulu di GitHub

# 2. Clone hasil fork kamu
git clone https://github.com/<username-kamu>/invoice-system-management.git
cd invoice-system-management

# 3. Buat branch baru untuk fitur/perbaikan
git checkout -b fitur-baru

# 4. Lakukan perubahan, lalu commit
git add .
git commit -m "Menambahkan fitur baru"

# 5. Push ke repository fork kamu
git push origin fitur-baru

# 6. Buka Pull Request ke repository utama
```

## 📄 Lisensi

Proyek ini dibuat untuk keperluan pembelajaran/internship. Silakan tambahkan file `LICENSE` sesuai kebutuhan (misalnya MIT License) jika ingin membuka proyek ini secara open source.

---
