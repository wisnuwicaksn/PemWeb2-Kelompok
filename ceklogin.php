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

	$query = "SELECT * FROM tb_warga WHERE nama='$username' AND password='$password'";
	$hasil = mysqli_query($koneksi, $query);

	if ($hasil->num_rows > 0) {
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION['username'] = $row['nama'];
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

