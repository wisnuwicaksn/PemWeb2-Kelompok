<?php
include 'koneksi.php';

error_reporting(0);
session_start();

if(isset($_SESSION['username'])) {
    header("Location: home.php");
    die();
}

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
$hasil = mysqli_query($koneksi, $query);

// $kode = mysqli_fetch_array($hasil);
// $cek = mysqli_num_rows($hasil);

// if ($cek==1){
// $_SESSION['username']=$kode['username'];
// // $_SESSION['password']=$kode['password'];

//     if ($kode) {
//         header("Location: home.php");
//     }    
// } 

if ($hasil->num_rows > 0) {
	$row = mysqli_fetch_assoc($hasil);
	$_SESSION['username'] = $row['username'];
	header("Location: home.php");
}
else { 
	?>
		<script>
		alert('Username atau Password Salah !!');
		document.location.href = 'login.php';
		</script>
	<?php 
}

?>

