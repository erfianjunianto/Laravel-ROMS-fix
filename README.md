# Laravel-ROMS-fix

1. Ubah konfigurasi database:
   - buka: config->database.php
   - ubah pada bagian DATABASE_CONNECTION
   - defaultnya adalah "sqlite", ubah sesuai kebutuhan misal "mysql"

2. Jika "mysql" ubah juga pada bagian 
   DATABASE_NAME
   DATABASE_USERNAME
   DATABASE_PASSWORD

3. Kemudian buat databasenya, misal di mysql, buat database di mysql nya

4. Jalankan composer
   php artisan migrate

5. Selamat mencoba

#########################
CP: Erfian Junianto
Telegram: telegram.me/erfianjunianto
#########################

