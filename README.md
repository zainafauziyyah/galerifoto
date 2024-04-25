Nama : Zaina Fauziyyah

Kelas : XII PPL 2

WEBSITE GALERI FOTO (GALERYOUS)

This is a photo website that can capture precious moments or store photos of loved ones. Capture your moment here!

1. Tools yang digunakan
   - xampp 8.2.12
   - visual studio code
   - composer
   - framework laravel
   - github

2. Installation
   
a). instalasi laravel awal via composer

- setelah composer terinstall, pastikan project yg akan di buat di simpan di folder C, direktori C:\xampp\htdocs
  
- pastikan juga untuk memindahkan direktori saat sudah di cmd ke C:\xampp\htdocs
  
- setelahnya ketik perintah composer create-project laravel/laravel nama-project

C:\xampp\htdocs: composer create-project laravel/laravel galeri-foto

- setelah instalasi selesai, ketik perintah cd nama-project

C:\xampp\htdocs: cd galeri-foto

- setelahnya direktori nya akan menjadi C:\xampp\htdocs\galeri-foto
  
- lalu ketik perintah php artisan serve
  
C:\xampp\htdocs\galeri-foto: php artisan serve

- maka akan keluar link port yang bisa di klik dan membuka nya di browser, port nya:
http://127.0.0.1:8000

- jika sudah di klik dan di yang tampil adalah tulisan Laravel, maka menandakan laravel sudah terinstall dan dapat digunakan

b). clone repository from github

- pastikan untuk membuat repository terlebih dahulu dan sudah commit untuk pertama kali nya di github, metode ini memudahkan disaat kita berganti di pc yang berbeda dari yang sebelumnya kita gunakan untuk ngoding

- buka visual studio code, di halaman awal terdapat beberapa opsi, pilih opsi clone repository from github

- sebelumnya copy terlebih dahulu link github yang akan dipilih, lalu masukan link tersebut ke kolom seperti pencarian yang terletak dibagian tengah paling atas

- lalu klik dan setelahnya buat nama folder untuk menyimpan project nya, klik select as repository destination

- jika sudah buka project tersebut dan pilih terminal

- klik composer update

- klik php artisan migrate:fresh

untuk memasukan migration kembali ke dalam database, pastikan juga di env database yg digunakan sesuai dengan yang telah di buat

- klik php artisan serve

- program akan siap ditampilkan
   
3. UML/Usecase
   ![alt text](https://github.com/zainafauziyyah/galerifoto/blob/main/Screenshot%20(2).png?raw=true)

4. ERD
   ![alt text](https://github.com/zainafauziyyah/galerifoto/blob/main/public/Screenshot%20(1).png?raw=true)

   5. Untuk menjalankan

``` php artisan serve


