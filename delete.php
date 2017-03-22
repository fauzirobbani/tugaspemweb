<?php
include "koneksi.php";
$kunci=$_GET['id'];
$query=mysql_query("DELETE FROM tebel_user WHERE id='$id'");
echo "<script>
		alert('Berhasil delete data');
		window.location.assign('admin-page.php');
	</script>";
?>