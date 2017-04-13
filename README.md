# Laravel-ROMS-fix

1. Ubah konfigurasi database:
   - buka: config->database.php
   - ubah pada bagian DATABASE_CONNECTION
   - defaultnya adalah "sqlite", ubah sesuai kebutuhan misal "mysql"

2. Jika "mysql" ubah juga pada bagian 
   - DATABASE_NAME
   - DATABASE_USERNAME
   - DATABASE_PASSWORD

3. Kemudian buat databasenya, misal di mysql, buat database di mysql nya

4. buat file .env di dalam root

5. Jalankan composer
   - composer update
   - php artisan migrate
   - php artisan key:generate
   - php artisan chace:clear

6. Selamat mencoba

# Sumber File dari:
# https://github.com/inzamul36/Laravel-ROMS.git

# CP: Erfian Junianto
# Telegram: telegram.me/erfianjunianto
