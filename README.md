# 📦 Aplikasi Manajemen Pengiriman Barang

Aplikasi web untuk mengelola pengiriman barang dengan fitur pelacakan real-time, manajemen rute, integrasi pembayaran, dan notifikasi pelanggan.

## 🎯 Fitur Utama

- ✅ **Dashboard Admin** - Monitoring pengiriman dan statistik
- ✅ **Pelacakan Paket Real-time** - Lacak posisi paket dengan Maps
- ✅ **Manajemen Rute Pengiriman** - Optimasi rute otomatis
- ✅ **Integrasi Payment Gateway** - Midtrans/Xendit
- ✅ **Notifikasi Pelanggan** - Email & SMS
- ✅ **Manajemen User** - Admin, Kurir, Pelanggan
- ✅ **Laporan & Analytics** - Data pengiriman lengkap

## 🛠️ Tech Stack

- **Backend**: PHP 7.4+
- **Database**: MySQL 5.7+
- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap 5
- **Real-time**: AJAX & WebSocket
- **Maps**: Leaflet.js / Google Maps API

## 📋 Requirement

- PHP 7.4 atau lebih tinggi
- MySQL 5.7 atau lebih tinggi
- Composer
- Web Server (Apache/Nginx)

## 🚀 Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/deniningsih69-afk/delivery-management-app.git
cd delivery-management-app
```

### 2. Setup Database
```bash
mysql -u root -p < database/schema.sql
```

### 3. Konfigurasi Database
Edit file `config/database.php`:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'password');
define('DB_NAME', 'delivery_app');
```

### 4. Install Dependencies
```bash
composer install
```

### 5. Jalankan Server
```bash
php -S localhost:8000
```

Akses aplikasi di: `http://localhost:8000`

## 📁 Struktur Folder

```
delivery-management-app/
├── config/              # Konfigurasi database & constant
├── controllers/         # Business logic
├── models/              # Database models
├── views/               # Template views
├── public/              # Static files (CSS, JS, Images)
├── api/                 # API endpoints
├── database/            # Database schema
├── vendor/              # Composer dependencies
├── index.php            # Entry point
└── README.md            # Dokumentasi
```

## 👥 Default User untuk Testing

| Role | Email | Password |
|------|-------|----------|
| Admin | admin@delivery.app | admin123 |
| Kurir | kurir@delivery.app | kurir123 |
| Pelanggan | pelanggan@delivery.app | pelanggan123 |

## 🔌 API Endpoints

### Authentication
- `POST /api/auth/login` - Login
- `POST /api/auth/logout` - Logout
- `POST /api/auth/register` - Register

### Tracking
- `GET /api/tracking/shipment/:id` - Ambil detail paket
- `GET /api/tracking/live/:id` - Tracking real-time

### Admin
- `GET /api/admin/dashboard` - Dashboard data
- `GET /api/admin/shipments` - Daftar pengiriman
- `POST /api/admin/shipments` - Buat pengiriman baru

### Pembayaran
- `POST /api/payment/create` - Buat transaksi
- `GET /api/payment/status/:id` - Status pembayaran

### Notifikasi
- `POST /api/notification/send-sms` - Kirim SMS
- `POST /api/notification/send-email` - Kirim Email

## 📞 Support

Untuk bantuan, silakan buat issue di repository ini.

## 📄 License

MIT License

---

**Dibuat dengan ❤️ untuk memudahkan manajemen pengiriman barang**
