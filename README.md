# 🌐 Portfolio Website - Angga Aditya Nugraha

| **Nama** | Angga Aditya Nugraha |
|----------|---------------|
| **NIM** | 20240801165 |
| **Mata Kuliah** | Pemrograman Web (CR002) |
| **Dosen Pengampu** | Jefry Sunupurwa Asri, S.Kom., M.Kom |
| **Program Studi** | Teknik Informatika |
| **Universitas** | Universitas Esa Unggul |

---

## 📌 Deskripsi Proyek

Website portfolio personal ini dibuat sebagai tugas UTS mata kuliah **Pemrograman Web (CR002)**. Website ini dirancang untuk memperkenalkan diri sebagai **Junior Laravel Developer** sekaligus menampilkan portofolio proyek yang telah dikerjakan. Aplikasi ini dibangun dengan teknologi modern menggunakan Laravel 12, Filament Admin Panel v3, dan Docker untuk deployment.

---

## 📸 Screenshot

### 🏠 Home Page
![Home Page](docs/screenshots/home.png)

### 📂 Projects Page
![Projects Page](docs/screenshots/projects.png)

### 📬 Contact Page
![Contact Page](docs/screenshots/contact.png)

### 🔧 Admin Panel
![Admin Panel](docs/screenshots/admin.png)

---

## 🎯 Tujuan Pembuatan

1. ✅ Memenuhi UTS Pemrograman Web CR002
2. 🎨 Membangun personal branding sebagai Junior Developer
3. 📂 Menampilkan portofolio proyek yang telah dikerjakan
4. 📧 Menyediakan informasi kontak untuk kolaborasi
5. 🚀 Menerapkan best practices web development modern

---

## 👤 Profil Pengembang

| **Nama Lengkap** | Angga Aditya Nugraha |
|-----------------|---------------|
| **Panggilan** | Angga |
| **NIM** | 20240801165 |
| **Role** | Junior Laravel Developer |
| **Universitas** | Universitas Esa Unggul |
| **Program Studi** | Teknik Informatika |
| **Semester** | 4 |

### 📍 Kontak

| Platform | Informasi |
|----------|-----------|
| 📧 **Email** | anggaadityanu@student.esaunggul.ac.id |
| 📱 **Telepon** | 082114981216 |

---

## 🛠️ Tech Stack

### Backend
- **PHP 8.3** dengan Laravel 12
- **Database**: MariaDB
- **Admin Panel**: Filament v3
- **ORM**: Eloquent
- **Authorization**: Filament Shield & Spatie Permissions

### Frontend
- **Tailwind CSS** — Styling utility framework
- **Vite** — Build tool & bundler
- **Livewire** — Interactive components
- **Blade Template Engine**

### DevOps & Infrastructure
- **Docker** & Docker Compose
- **Nginx** — Web server
- **SSL/TLS** — Support untuk HTTPS

### Testing & Quality
- **Pest PHP** — Testing framework
- **Laravel Pint** — Code style fixer

---

## 📋 Kebutuhan Sistem

Untuk menjalankan proyek ini, pastikan sudah terinstall:
- **Docker** (versi 20.10+)
- **Docker Compose** (versi 1.29+)
- **Git**

---

## 🚀 Panduan Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/username/uts-pemweb.git
cd uts-pemweb
```

### 2. Setup Environment
```bash
cp src/.env.example src/.env
```

### 3. Jalankan Docker
```bash
docker compose up -d
```

### 4. Masuk ke Container & Setup Laravel
```bash
docker exec -it uts bash
composer install
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
exit
```

### 5. Build Assets
```bash
cd src
npm install && npm run build
```

### 6. Akses Aplikasi

| URL | Keterangan |
|-----|-----------|
| `https://uts.test` | Website utama |
| `https://uts.test/admin` | Admin panel |

---

## 🔑 Login Admin

| Field | Value |
|-------|-------|
| Email | `admin@admin.com` |
| Password | `password` |

---

## 📖 Cara Penggunaan

### Kelola Profile
1. Login ke `/admin`
2. Klik menu **Profiles**
3. Klik **Edit** pada profile yang ada
4. Update nama, tagline, bio, skills, avatar
5. Klik **Save** — perubahan langsung tampil di frontend

### Tambah Project Baru
1. Login ke `/admin` → klik **Projects**
2. Klik **New Project**
3. Isi judul, deskripsi singkat, pilih status
4. Upload thumbnail (opsional)
5. Isi link GitHub/Demo (opsional)
6. Klik **Save**

### Input Laporan Project Akhir
1. Login ke `/admin` → klik **Projects**
2. Klik **New Project** atau **Edit** project yang ada
3. Centang toggle **"Ini adalah Project Akhir (Laporan)?"**
4. Bagian **Detail Laporan Akhir** akan muncul otomatis
5. Isi:
   - Analisis Masalah & Kebutuhan Sistem
   - Kebutuhan Sistem & Fitur Utama
   - Arsitektur & Tech Stack
   - Upload ERD Diagram & Flowchart
6. Klik **Save** — tampil otomatis di `/projects/{slug}`

### Update Status Project
1. Login ke `/admin` → **Projects**
2. Klik **Edit** pada project
3. Ubah field **Status**:
   - `Planning` → belum dimulai
   - `On Progress` → sedang dikerjakan
   - `Completed` → selesai
4. Klik **Save** — badge status di frontend berubah otomatis

### Lihat Pesan Masuk
1. Login ke `/admin`
2. Klik menu **Pesan Masuk**
3. Semua pesan dari form `/contact` tampil di sini
4. Klik **View** untuk baca detail pesan
5. Tandai **Sudah Dibaca** jika perlu

---

## 📁 Struktur Proyek

```
uts-pemweb/
├── docker-compose.yml              # Docker configuration
├── README.md                       # Dokumentasi proyek
├── docs/
│   └── screenshots/                # Screenshot aplikasi
├── nginx/                          # Nginx web server config
│   ├── Dockerfile
│   └── default.conf
├── php/                            # PHP-FPM configuration
│   ├── Dockerfile
│   └── local.ini
└── src/                            # Laravel application
    ├── app/
    │   ├── Filament/Admin/         # Filament resources & pages
    │   ├── Http/Controllers/       # Controllers
    │   └── Models/                 # Eloquent models
    ├── database/
    │   ├── migrations/             # Database migrations
    │   └── seeders/                # Database seeders
    └── resources/views/
        ├── layouts/                # Layout templates
        └── portfolio/              # Portfolio page views
```

---

## 🔑 Fitur Utama

- ✅ **Responsive Design** — Mobile-friendly interface
- ✅ **Admin Panel** — Filament v3 dashboard
- ✅ **Dynamic Portfolio** — Data dari database, kelola via admin
- ✅ **Laporan Project Akhir** — Halaman detail dengan ERD & Flowchart
- ✅ **Contact Form** — Pesan tersimpan ke database
- ✅ **Role & Permission** — Filament Shield
- ✅ **Docker Ready** — Siap dijalankan dengan Docker Compose

---

## 📊 Perintah Database

```bash
# Jalankan migrasi
php artisan migrate

# Migrasi + isi data awal
php artisan migrate --seed

# Reset database
php artisan migrate:fresh --seed

# Rollback
php artisan migrate:rollback
```

---

## 🐛 Troubleshooting

**Port sudah digunakan:**
```bash
docker compose down
docker compose up -d
```

**Permission storage:**
```bash
docker exec -it uts bash
chown -R www-data:www-data storage bootstrap/cache
```

**Cache issue:**
```bash
php artisan optimize:clear
```

**CSS tidak tampil:**
```bash
cd src && npm run build
```

---

## 📚 Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Filament Documentation](https://filamentphp.com/docs)
- [Tailwind CSS](https://tailwindcss.com)
- [Docker Documentation](https://docs.docker.com)

---

## 🤝 Kontribusi

1. Fork repository ini
2. Buat branch baru: `git checkout -b feat/nama-fitur`
3. Commit perubahan: `git commit -m "feat: tambah fitur X"`
4. Push ke branch: `git push origin feat/nama-fitur`
5. Buat Pull Request

---

## 📄 Lisensi

Proyek ini dibuat untuk keperluan akademis sebagai tugas UTS Mata Kuliah Pemrograman Web (CR002) Universitas Esa Unggul. Lisensi [MIT](LICENSE).

---

## 👨‍💻 Author

**Angga Aditya Nugraha**
- 📧 Email: anggaadityanu@student.esaunggul.ac.id
- 📱 Phone: 082114981216
- 🏫 NIM: 20240801165

---

