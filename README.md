![Screenshot (8)](https://github.com/user-attachments/assets/68e2a049-52ca-41e3-86fd-d1748c0198e1)
![Screenshot (9)](https://github.com/user-attachments/assets/09d0d8d0-e477-43e0-926c-df1fc376e346)

# 1. Prasyarat 
### Pastikan perangkat Anda telah memenuhi prasyarat berikut sebelum menginstal Repository ini:

- PHP: Versi 8.1 atau lebih baru.
- Composer: Dependency Manager untuk PHP.
- MySQL/SQLite: Untuk database.
- Node.js & NPM: Untuk pengelolaan dependensi front-end.

# 2. Langkah Instalasi  

### Langkah 1: Clone Repository 

git clone https://github.com/Anzarhorison/jehpdam

### Langkah 2: Pindah ke Direktori Proyek 


cd jehpdam

- Setelah Itu Masuk Ke dalam Visual Studio Code


code .

### Langkah 3: Instal Dependensi Backend

composer install

### Langkah 4: Copy atau Salin File Konfigurasi (.env)

##### Salin file .env.example menjadi .env untuk mengatur variabel lingkungan atau Mengunkan Code berikut:


cp .env.example .env


### Langkah 5: Atur Konfigurasi .env


 DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=jehh_pdam
 DB_USERNAME=root
 DB_PASSWORD=
 DB_COLLATION=utf8mb4_unicode_ci 

### Langkah 6: Migrasi Database

- Buat sebuah Databases Di xampp Terlebih Dahulu


php artisan migrate


### Langkah 7: Buat Storage Untuk Menyimpan Foto Yang di buat di Crud

php artisan storage:link


### Langkah 8: Generate Application Key

- Langkah ini sangat penting untuk setiap aplikasi Laravel, karena tanpa kunci ini, beberapa fitur tidak akan berjalan sebagaimana mestinya jadi harus di jalankan ya perintanya kalo mau menggunakan Source Code ini ya semoga berhasil :blush: :


php artisan key:generate


### Langkah 9: Jalankan Server Pengembang


php artisan serve



<p align="center">
⚠️ <strong>Peringatan:</strong> Pastikan untuk menjalankan semua sesuai dengan urutan agar berjalan lancar.⚠️
</p>
<h1 align="center">Semoga Beruntung :blush:</h1>
