<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Data Mahasiswa</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
	font-family : "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: white;
		background-color: Navy;
		border-bottom: 1px solid #D0D0D0;
		font-size: 25px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	.tombol{
		background: #2C97DF;
		color : white;
		border-top: 0;
		border-right: 0;
		border-left: 0;
		padding: 10px 20px;
		border-bottom : 5px solid #2A80B9;
		text-decoration: none;
		font-family : sans-serif;
		font-size: 11pt;
	}
	form{
		font-size :20px;
		font-weight : bold;
	}

	input[type=text]{
		font-size: 17px;
		padding: 5px 15px;
	}


	input[type=submit]:hover{
			cursor :pointer;
			}
	input[type=submit]:active{
			cursor :#0044cc;
			}
	</style>
</head>
<body>

<div id="container">
	<h1>Form Edit</h1>

	<div id="body">
		<a href="<?php echo site_url('welcome/index') ?>" class="tombol"> Back </a> <br><br><br>
		<?php if($dataEdit){
			$id = $dataEdit->NIM;
			$nama = $dataEdit->Nama;
			$nohp = $dataEdit->No_HP;
			$ttl = $dataEdit->Tanggal_Lahir;
			$alamat = $dataEdit->Alamat;

		} else{
			$id = "";
			$nama = "";
			$nohp = "";
			$ttl = "";
			$alamat = "";
		}?>
		<form action="<?php echo site_url('welcome/update/'.$id)?>" method="POST">
			NIM <br>
			<input type="text" name="NIM" value="<?php echo $id?>"/> <br>
			Nama Lengkap <br>
			<input type="text" name="Nama" value="<?php echo $nama?>"/> <br>
			Nomor Handphone <br>
			<input type="text" name="HP" value="<?php echo $nohp?>"/> <br>
			Tanggal Lahir (YYYY-MM-DD) <br>
			<input type="text" name="Tanggal_Lahir" value="<?php echo $ttl?>"/> <br>
			Alamat <br>
			<input type="text" name="Alamat" value="<?php echo $alamat?>"/> <br><br>
			<input type="submit" name="Simpan" value="Simpan" class="tombol"/>
		</form>
		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>