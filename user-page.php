<?php
session_start();
if (isset($_SESSION['username'])) 
	{
		include "koneksi.php";
		$query = "SELECT * FROM tabel_user";
		$sql = mysql_query($query, $koneksi);
		$jumlah_baris = mysql_num_rows($sql);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="dist/semantic.min.js"></script>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Halaman User</title>

  <link rel="stylesheet" type="text/css" href="dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="dist/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="dist/components/icon.css">

  <style type="text/css">
  body {
    background-color: #FFFFFF;
  }
  .ui.menu .item img.logo {
    margin-right: 1.5em;
  }
  .main.container {
    margin-top: 7em;
  }
  .wireframe {
    margin-top: 2em;
  }
  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
  </style>

</head>
<body>

  <div class="ui fixed inverted menu" style="background-color: rgb(0,0,0)">
    <div class="ui container">
    <a href="" class="header item">
         <img src="logo/nzlfnl.png" style="margin-left: 41px;margin-right: 5px; width: 40px; height: 40px" class="image">
          <?php echo "".$_SESSION['username'];?><br>
      </a>
    </div>
    <div class="ui container" style="color: white;margin-top: 15px"><h3><?php echo "Jumlah Data : ".$jumlah_baris;?></h3></div>

    <div class="ui simple dropdown item">
         <i class="database icon"></i>
        <div class="menu">
          <a href="" class="item">Data Sekolah</a>         
        </div>
      </div>

    <div class="ui simple dropdown item">
         <i class="setting icon" style="margin-right: 50px"></i>
        <div class="menu">
          <a href="logout.php" class="item">Log Out</a>         
        </div>
      </div>
  </div>

<!-- Tabel Data -->
<br><br>
<table class="ui selectable celled table">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Username</th>
      <th>Email</th>
      <th>Alamat</th>
      <th>Usia</th>
      <th>Hobi</th>
      <th>Pekerjaan</th>
      <th>Gol Darah</th>
      <th>Status</th>
      <th>Gender</th>
      <th>Hak Akses</th>
    </tr>
  </thead>
  <tbody>

  <?php if($jumlah_baris==0): ?>
	<tr><td colspan=3>Tidak ada Pesan</td></tr>
	<?php else: ?>
  <?php while($data = mysql_fetch_object($sql)): ?>
	<tr>	
		<td><?php echo $data->nama;?></td>
    <td><?php echo $data->username;?></td>
    <td><?php echo $data->email;?></td>
		<td><?php echo $data->alamat;?></td>
    <td><?php echo $data->usia;?></td>
		<td><?php echo $data->hobi;?></td>
		<td><?php echo $data->pekerjaan;?></td>
    <td><?php echo $data->gol_darah;?></td>
		<td><?php echo $data->status;?></td>
		<td><?php echo $data->gender;?></td>
		<td><?php echo $data->hak_akses;?></td>
	</tr>
		<?php endwhile;?>
		<?php endif; ?>
  </tbody>
</table>
</body>
</html>
<?php
	}else
		{
			?>Anda tidak boleh mengakses halaman ini!<a href="login.html">Login Dulu Gan</a><?php
		}
?>