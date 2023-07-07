<?php
	include 'koneksi.php';

	error_reporting(0);
	session_start();

	if(isset($_SESSION['nik'])) {
		header("Location: home.php");
		die();
	}

	$nik = $_POST['nik'];
	$password = md5($_POST['password']);

	$query = "SELECT * FROM tb_warga WHERE nik='$nik' AND password='$password'";
	$hasil = mysqli_query($koneksi, $query);

	if ($hasil->num_rows > 0) {
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION['nik'] = $row['nik'];
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

<?php
	include 'koneksi.php';

	error_reporting(0);
	session_start();

	if(isset($_SESSION['nik'])) {
		header("Location: home.php");
		die();
	}

	$nik = $_POST['nik'];
	$password = md5($_POST['password']);

	$query = "SELECT * FROM tb_warga WHERE nik='$nik' AND password='$password'";
	$hasil = mysqli_query($koneksi, $query);

	if ($hasil->num_rows > 0) {
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION['nik'] = $row['nik'];
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

<?php
	include 'koneksi.php';

	error_reporting(0);
	session_start();

	if(isset($_SESSION['nik'])) {
		header("Location: home.php");
		die();
	}

	$nik = $_POST['nik'];
	$password = md5($_POST['password']);

	$query = "SELECT * FROM tb_warga WHERE nik='$nik' AND password='$password'";
	$hasil = mysqli_query($koneksi, $query);

	if ($hasil->num_rows > 0) {
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION['nik'] = $row['nik'];
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

<?php
	include 'koneksi.php';

	error_reporting(0);
	session_start();

	if(isset($_SESSION['nik'])) {
		header("Location: home.php");
		die();
	}

	$nik = $_POST['nik'];
	$password = md5($_POST['password']);

	$query = "SELECT * FROM tb_warga WHERE nik='$nik' AND password='$password'";
	$hasil = mysqli_query($koneksi, $query);

	if ($hasil->num_rows > 0) {
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION['nik'] = $row['nik'];
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

