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

1. Unduh terlebih dahulu file zip source code
![instal1](https://user-images.githubusercontent.com/61957837/108297987-bfccbe00-71ce-11eb-93ea-f06f66660379.PNG)

2. Ekstrak file source code

3. Salin folder source code ke dalam folder htdocs (untuk penggunaan xampp)

4. Buatlah database baru pada localhost/phpmyadmin

5. import database dalam folder source code

6. Atur koneksi database pada file ProgWebProject-main/dbconnect.php

7. Buka aplikasi di browser dengan nama yang sama dengan nama folder pada htdocs (localhost/ProgWebProject-main)
![instal6](https://user-images.githubusercontent.com/61957837/108298357-64e79680-71cf-11eb-978c-a77b10c87b49.PNG)

## Manual Penggunaan
