![Screenshot_2023-07-01_165356-removebg-preview](https://github.com/adityabudi09/PemWeb2-Kelompok/assets/115923969/9fd381f4-091c-4e28-b447-e86ed08db53c)
# KAS RT
Program Sederhana Aplikasi Administrasi [KAS RT](http://wisnuwicaksn.byethost12.com/pengelolaanKasFree)

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
#### [KAS RT](http://wisnuwicaksn.byethost12.com/pengelolaanKasFree)


