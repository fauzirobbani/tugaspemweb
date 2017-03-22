<?php
include "koneksi.php";
$nama=$_POST['nama'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$alamat=$_POST['alamat'];
$usia=$_POST['usia'];
$hobi=$_POST['hobi'];
$pekerjaan=$_POST['pekerjaan'];
$gol_darah=$_POST['gol_darah'];
$status=$_POST['status'];
$gender=$_POST['gender'];
$hak_akses=$_POST['hak_akses'];
$query=mysql_query("insert into tabel_user (nama,username,email,password,alamat,usia,hobi,pekerjaan,gol_darah,status,gender,hak_akses) 
	values('$nama','$username','$email',md5('$password'),'$alamat','$usia','$hobi','$pekerjaan','$gol_darah','$status','$gender','$hak_akses')");
echo "<script>
		alert('Berhasil menambahkan data');
		window.location.assign('admin-page.php');
	</script>";
?>