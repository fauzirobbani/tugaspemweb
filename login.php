<?php 
session_start();
include "koneksi.php";
$username=$_POST['username'];
$password=md5($_POST['password']);
$sql=mysql_query("SELECT * FROM tabel_user WHERE username='$username' and password='$password'");
$data=mysql_fetch_object($sql);
if ($data) { 
	# code...
	$_SESSION['username']=$username;
	if ($data->hak_akses=='user') {
		# code...
		echo "<script> 
			alert('Login Berhasil');
			window.location.assign('user-page.php');
			</script>";
	}
	elseif ($data->hak_akses=='Administrator') {
		# code...
		echo "<script> 
			alert('Login Berhasil');
			window.location.assign('admin-page.php');
			</script>";
	}			
	?> 
	<?php
}
else{
	?>
	<?php
	echo "<script>
		alert('Gagal Login,Anda Belum Terdaftar');
		window.location.assign('login.html');
	</script>";
}?>