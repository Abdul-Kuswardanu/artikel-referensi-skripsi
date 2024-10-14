# Aplikasi kumpulan artikel referensi skripsi

Web ini tampaknya merupakan sebuah aplikasi berbasis PHP, SQLite3, dan CSS yang digunakan untuk mengelola referensi skripsi atau informasi terkait dokumen akademik, seperti skripsi, jurnal ilmiah, dan sumber lainnya. Di bawah ini adalah penjelasan dari masing-masing bagian dan fungsinya:

1. HTML dan CSS:
HTML digunakan untuk mendefinisikan struktur konten web, seperti header, form, div, dan footer.
CSS digunakan untuk mengatur penataan dan penampilan web, seperti tata letak, warna, margin, padding, dan perataan elemen.
Flexbox dan grid digunakan untuk layout yang responsif dan mengatur elemen dalam formasi kiri-tengah-kanan.

2. Struktur Website:
Header: Biasanya berisi logo, judul web, dan navigasi.
Konten Utama (Section): Menampilkan referensi skripsi, yang diambil dari database SQLite3, ditampilkan dalam bentuk loop untuk setiap baris data yang ditemukan.
Footer: Menyediakan informasi tambahan seperti kontak dan email, dan juga form untuk pengumpulan data (seperti input email).

3. Menampilkan Referensi Skripsi:

Data yang disimpan dalam tabel skripsi ditampilkan di antarmuka dengan cara melakukan query ke database, mengambil data, dan menampilkannya dalam loop menggunakan PHP.
Di dalam loop, setiap referensi menampilkan judul skripsi dan konten. Link untuk mengunduh file dan mengirimkan email dapat diaktifkan dengan menambahkan logika yang sesuai dalam bagian PHP atau menggunakan email API.


4. Form Input:

Form email pada footer memungkinkan pengguna mengirimkan email atau mendaftar untuk mendapatkan informasi terkait web.
Input email di footer dirancang agar pengguna bisa memberikan alamat email mereka yang bisa digunakan untuk komunikasi lebih lanjut.