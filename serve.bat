@echo off
echo Ahlan wa sahlan...
echo Masukkan virtual domain dan port yang akan digunakan dalam mode development ini,
echo tuliskan dengan format berikut (tanpa menggunakan kurung siku dan spasi):
echo --------------------------------------------
echo [ xxx.xxx.xxx ][ : ][ port ]
echo ---
echo contoh:
echo 1) belajar.localhost:9000
echo 2) api.belajar.localhost:9001
echo --------------------------------------------
set /P virtual_domain_port=Silahkan ketik disamping ini (kalau udah tekan ENTER yaa!) :
echo --------------------------------------------
echo SEDANG MENCOBA MENJALANKAN SERVER DEVELOPMENT
echo --...-----...-----...-----...-----...-----...--

/php-bin/php.exe -S %virtual_domain_port% /php-bin/router.php
