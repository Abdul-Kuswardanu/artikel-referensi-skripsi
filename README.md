# Referensi Skripsi Web Application

## Deskripsi
Aplikasi web **Referensi Skripsi** adalah sebuah sistem sederhana berbasis **PHP**, **SQLite3**, dan **CSS** yang bertujuan untuk menampilkan dan mengelola referensi skripsi. Pengguna dapat melihat referensi skripsi yang tersimpan di database dan juga mengirimkan email mereka melalui form di footer untuk didaftarkan ke dalam database.

### Fitur Utama
- **Menampilkan Referensi Skripsi**: Data referensi skripsi yang disimpan dalam database ditampilkan kepada pengguna.
- **Input Email**: Pengguna dapat menginputkan email mereka ke dalam form, dan email tersebut akan disimpan ke dalam database.
- **Desain Responsif**: Menggunakan CSS Flexbox untuk membuat tata letak yang rapi dan responsif.

## Teknologi yang Digunakan
- **PHP**: Digunakan untuk berinteraksi dengan database SQLite dan menghasilkan halaman web secara dinamis.
- **SQLite3**: Digunakan sebagai database untuk menyimpan referensi skripsi dan email pengguna.
- **HTML & CSS**: Untuk menampilkan antarmuka pengguna dan memberikan tampilan yang menarik.

## Instalasi

### Persyaratan
- Server yang mendukung **PHP** (minimal PHP 7.0).
- **SQLite3** diaktifkan pada server PHP.
- Server web seperti **Apache** atau **Nginx**.

### Langkah Instalasi
1. Clone atau download repository ini ke server web Anda.
   ```bash
   git clone https://github.com/user/referensi-skripsi-web.git
2. Pastikan file PHP memiliki izin yang tepat dan dapat diakses oleh server.
3. Buat database SQLite (your_database_name.db) dan pastikan database tersebut bisa diakses oleh script PHP.
4. Jalankan server web dan akses aplikasi di browser Anda.

### Struktur Folder 
├── index.php           # Halaman utama yang menampilkan referensi skripsi
├── save_email.php      # Script untuk menyimpan email pengguna ke dalam database
├── style.css           # File CSS untuk mengatur tampilan halaman
├── your_database_name.db # File database SQLite (setelah dibuat)
└── README.md           # Dokumentasi aplikasi

### Cara Kerja 
1. Menampilkan Referensi Skripsi
Referensi skripsi diambil dari database SQLite dengan query SQL. PHP kemudian menampilkan data tersebut di halaman utama dalam bentuk daftar referensi. Setiap referensi terdiri dari judul dan konten, dan ditampilkan dalam bentuk loop menggunakan fetchArray().

2. Input Email
Pengguna dapat memasukkan email mereka melalui form di footer. Email ini dikirimkan melalui metode POST ke file save_email.php, di mana email akan disimpan ke tabel emails di database SQLite. Berikut adalah proses singkatnya:

Email divalidasi dengan filter_var() untuk memastikan format yang valid.
Jika valid, email disimpan ke database menggunakan prepared statement untuk mencegah SQL Injection.
3. CSS dan Tampilan
Flexbox digunakan untuk membuat tata letak yang responsif.
Footer diatur agar memiliki email di bagian kiri, informasi di tengah, dan kontak di sebelah kanan. Footer juga memiliki garis pemisah di bagian atas dan latar belakang hitam untuk estetika yang lebih profesional.

### Kontribusi
Jika Anda ingin berkontribusi, silakan lakukan pull request atau ajukan masalah melalui issue tracker di repo GitHub ini.

### Lisensi
Proyek ini dilisensikan di bawah MIT License.

Silakan copy seluruh isi `README.md` di atas ke file di proyek Anda.
