# ProgWebProject

## Sistem Manajemen Kerusakan Inventaris Kamar

Kelompok 1:
* Alya Aiman Salsabila Arif (1817101379)
* Muhammad Hadi             (1817101436)
* Salsa Alma’ariz           (1817101458)

## Daftar Isi

* [Gambaran Umum Sistem](#GambaranUmumSistem)
* [Manfaat](#Manfaat)
* [Fitur Keamanan](#FiturKeamanan)
* [Prasyarat](#Prasyarat)
* [Tata Cara Instalasi](#TataCaraInstalasi)
* [Manual Penggunaan](#ManualPenggunaan)

## Gambaran Umum Sistem

Aplikasi ini adalah aplikasi berbasis web yang dapat menyimpan daftar kerusakan inventaris kamar taruna sesuai dengan kamar milik taruna itu sendiri. Aplikasi ini juga dapat melakukan ekspor data dalam bentuk copy, CSV, Excel, PDF dan print.

## Manfaat

* Aplikasi ini mempermudah taruna-taruni untuk memasukkan kerusakan inventaris kamar yang rutin dilakukan setiap minggu dengan dilakukan secara langsung oleh taruna pemilik kamar tanpa perlu pendataan oleh taruna jaga
* Aplikasi ini dapat mengurangi penggunaan kertas

## Fitur Keamanan

Aplikasi ini menggunakan pengenkripsian MD5 pada password saat login

## Prasyarat

*  PHP versi 5.6 atau yang lebih baru
*  MySQL versi 5.6 atau yang lebih baru
*  Apache
*  Google Chrome

## Tata Cara Instalasi

1. Unduh terlebih dahulu file zip source code\
 \
![instal1](https://user-images.githubusercontent.com/61957837/108297987-bfccbe00-71ce-11eb-93ea-f06f66660379.PNG)

2. Ekstrak file source code

3. Salin folder source code ke dalam folder htdocs (untuk penggunaan xampp)

4. Buatlah database baru pada localhost/phpmyadmin\
 \
![instal4](https://user-images.githubusercontent.com/61957837/108299944-f9eb8f00-71d1-11eb-9546-674bdf7ee484.PNG)

5. Import database dalam folder source code\
 \
![instal5](https://user-images.githubusercontent.com/61957837/108299949-fbb55280-71d1-11eb-8620-6c251d39ad6f.PNG)

6. Atur koneksi database pada file ProgWebProject-main/dbconnect.php\
 \
![instal6](https://user-images.githubusercontent.com/61957837/108299950-fc4de900-71d1-11eb-81a7-aee52a86611a.PNG)

7. Buka aplikasi di browser dengan nama yang sama dengan nama folder pada htdocs (localhost/ProgWebProject-main)\
 \
![instal6](https://user-images.githubusercontent.com/61957837/108298357-64e79680-71cf-11eb-978c-a77b10c87b49.PNG)

## Manual Penggunaan

1. Buka aplikasi di browser dengan nama yang sama dengan nama folder pada htdocs\
 \
![instal6](https://user-images.githubusercontent.com/61957837/108298357-64e79680-71cf-11eb-978c-a77b10c87b49.PNG)

2. Masukkan NPM dan password pada halaman login\
*Login Credentials*\
NPM    : 1817101379\
Password  : 1817101379\
 \
NPM    : 1817101436\
Password  : 1817101436\
 \
NPM    : 1817101458\
Password  : 1817101458\
 \
![man1](https://user-images.githubusercontent.com/61957837/108301514-bf372600-71d4-11eb-8304-37cb7cc1dcbf.PNG)

3.Pada menu pengumuman, taruna dapat memasukkan pengumuman dalam kotak yang tersedia kemudian menekan tombol “Tambah”.\
 \
![man8](https://user-images.githubusercontent.com/61957837/108301527-c5c59d80-71d4-11eb-9bc4-307a0b6a921b.PNG)

4. Untuk menghapus pengumuman dapat dengan menekan tombol “hapus”\
 \
![man4](https://user-images.githubusercontent.com/61957837/108301522-c4947080-71d4-11eb-856b-d97807e4b17f.PNG)

5. Pada menu kerusakan inventaris kamar, taruna dapat memasukkan kerusakan inventaris kamar. Taruna hanya perlu memasukkan kerusakan inventaris kamar. Aplikasi akan memasukkan data kode kamar sesuai kamar milik taruna tersebut dan status "diusulkan"\
 \
![man5](https://user-images.githubusercontent.com/61957837/108301526-c52d0700-71d4-11eb-9107-bae648ae5153.PNG)\
 \
![man51](https://user-images.githubusercontent.com/61957837/108301530-c6f6ca80-71d4-11eb-8673-00f7ce4e8194.PNG)

6. Untuk mengedit kerusakan inventaris kamar yang sudah dimasukkan dapat dengan menekan tombol “tambah”. Taruna hanya perlu memasukkan kerusakan inventaris kamar dan status\
 \
![man67](https://user-images.githubusercontent.com/61957837/108301532-c827f780-71d4-11eb-91b7-9a4a705da809.PNG)\
 \
![man62](https://user-images.githubusercontent.com/61957837/108301531-c78f6100-71d4-11eb-98ba-5a397c4374f7.PNG)

7. Untuk menghapus kerusakan inventaris kamar dapat dengan menekan tombol “hapus”\
 \
![man67](https://user-images.githubusercontent.com/61957837/108301532-c827f780-71d4-11eb-91b7-9a4a705da809.PNG)\
 \
![man72](https://user-images.githubusercontent.com/61957837/108301533-c8c08e00-71d4-11eb-8f74-b82f2949b481.PNG)

8. Untuk mengeskpor data dapat dengan menekan tombol “Ekspor Data”. Kemudian akan tampil pilihan tipe data ekspor yang diinginkan\
 \
![man8](https://user-images.githubusercontent.com/61957837/108301527-c5c59d80-71d4-11eb-9bc4-307a0b6a921b.PNG)\
 \
![man82](https://user-images.githubusercontent.com/61957837/108301536-c9f1bb00-71d4-11eb-8e46-6610d8573f09.PNG)

9. Pada menu log out, taruna akan dialihkan menuju halaman login\
 \
![man9](https://user-images.githubusercontent.com/61957837/108301537-c9f1bb00-71d4-11eb-8e57-91ac911749f5.PNG)\
 \
![instal6](https://user-images.githubusercontent.com/61957837/108298357-64e79680-71cf-11eb-978c-a77b10c87b49.PNG)
