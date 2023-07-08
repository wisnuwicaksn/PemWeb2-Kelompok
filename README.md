# PEMROGRAMAN WEB 2 - KELOMPOK
## TUGAS AKHIR UAS
Anggota Kelompok :


                1. Wisnu Adi W.              (312110037)
                2. Widayanti                 (312110026)
                3. Rizki Berkah S            (312110032)
                4. Indri Lestari             (312110282)
                5. Dwi Aditya Budi L.        (312110003)


![Screenshot_2023-07-01_165356-removebg-preview](https://github.com/adityabudi09/PemWeb2-Kelompok/assets/115923969/9fd381f4-091c-4e28-b447-e86ed08db53c)
# KAS RT
Program Sederhana Aplikasi Administrasi [KAS RT](http://wisnuwicaksn.byethost12.com/pengelolaanKasFree)


## Diagram ERD Diagram


![Entity Relationship Diagram](https://github.com/Indri211/PemWeb2-Kelompok/assets/116372279/fc1446e6-fc84-44f9-8253-51cc39987808)



# Installation

### Clone the repository:

```
https://github.com/wisnuwicaksn/PemWeb2-Kelompok
```
Instalasi:
1. Download repository sebagai file zip di https://github.com/wisnuwicaksn/PemWeb2-Kelompok
2. extract zip file di webroot, rename folder hasil extract dengan nama rtrw
3. buat database baru dengan nama rt_rw
4. import file manajemen-rt-rw.sql ke database tersebut
5. edit file protected/config/main.php, sesuaikan user dan password database
   'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=rt_rw',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
6. akses aplikasi melalui browser http://localhost/rtrw
7. Login dengan menggunakan user admin dengan passdword admin


## Demo Aplikasi
### 1. Login


![image](https://github.com/wisnuwicaksn/PemWeb2-Kelompok/assets/116352745/1481dfdd-3c88-4cc5-813e-8666780d6c40)

### 2. Tampilan Home


![image](https://github.com/wisnuwicaksn/PemWeb2-Kelompok/assets/116352745/712f3363-2a12-43f3-b08b-c06e61d3c9de)

### Link Demo Apliasi [KAS RT](http://wisnuwicaksn.byethost12.com/pengelolaanKasFree)
