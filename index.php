<?php
include "konek.php";
?>
<html>
	<head>
			<title>From Pendaftaran Online</title>
			<style type="text/CSS">
					body 
							{margin: 0px;
							padding: 0px;}
					.header {
							weidth: 100%;
							height: 40px;
							background-color: blue;
							color: white;
							font-size: 24px;
							text-align: center;
							font-weight: bold;
							line-height: 40px;
							}
					.content {
							width: 100%;
							height: auto;
							border: 1px solid;
							padding-top: 50px;
							padding-bottom: 50px;
							}
					.footer {
							width: 100%;
							height: 40px;
							background-color: blue;
							color: white;
							text-align: center;
							font-size: 20px;
							line-height: 40px;
							}
			</style>
	</head>
	<body style="background-color:aqua">
			<div class="header">
				Pendaftaran Online
			</div>
			<div class="content">
  <center><b>Isi Data Anda Di Bawah Ini Dengan Lengkap!</b></center>
  <form action="" method="POST">
<table align="center" style="width: 700px;">
		<tr>
			<td>Nama Lengkap</td><td>:</td><td><input name="nama" type="txt"></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td><td>:</td><td><input name="tempat_lahir" type="txt"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td><td>:</td><td>
			<select name="tgl">
			<option>Tgl</option>
			<?php
			for($tgl=1; $tgl<=31; $tgl++){
			echo "<option value=".$tgl.">".$tgl."</option>";}
			?>
			</select>
			<select name="bln">
			<option>Bln</option>
			<?php
			$bln= array ("Januari","Februari","Maret","April","Mei","juni","Juli","Agustus","September","Oktober","November","Desember");
			foreach($bln as $no=>$array){
			echo "<option value=".($no+1).">".$array."</option>";}	
			?>
		
			</select>
			<select name="thn">
			<option>Thn</option>
			<option>2000</option>
			<option>2001</option>
			<option>2002</option>
			<option>2003</option>
			<option>2004</option>
			<option>2005</option>
			<option>2006</option>
			<option>2007</option>
			<option>2008</option>
			<option>2009</option>
			<option>2010</option>
			<option>2011</option>
			<option>2012</option>
			<option>2013</option>
			<option>2014</option>
			<option>2015</option>
			<option>2016</option>
			<option>2017</option>
			<option>2018</option>
			<option>2019</option>
			<option>2020</option>
			<option>2021</option>
			<option>2022</option>
			<option>2023</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-Laki<input value="Perempuan" type="radio" name="jenis_kelamin">Perempuan</td>
		</tr>
		<tr>
			<td>Alamat</td><td>:</td><td><input name="alamat" type="txt"></td>
		</tr>
		<tr>
			<td> &nbsp </td><td> &nbsp </td><td><input type="submit" name="submit" value="DAFTAR"> &nbsp <input type="reset" value="RESET"></td>
		</tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){
$sql = "INSERT INTO  pendaftaranonline (nama,tempat_lahir,tanggal_lahir,jenis_kelamin,alamat)
VALUES ('".$_POST['nama']."','".$_POST['tempat_lahir']."','".$_POST['thn']."-".$_POST['bln']."-".$_POST['tgl']."',
'".$_POST['jenis_kelamin']."','".$_POST['alamat']."')";
if (mysqli_query($conn,$sql)){
echo "Data Berhasil Disimpan";}
else {
echo "Data Gagal Disimpan";}}
?>
  		</div>
  		<div class="footer">
  			Sistem Informasi &copy 2023. 
  		</div>
</body>
</html>