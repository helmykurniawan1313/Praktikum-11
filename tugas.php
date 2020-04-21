<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		.warning {color: #FF0000;}
	</style>
</head>

<body>
<?php
	date_default_timezone_set('asia/jakarta');
	$tanggal = date("Y-m-d");
	$error_nama = "";
	$error_jkel = "";
	$error_nisn ="";
	$error_nik = "";
	$error_tempatlahir = "";
	$error_tanggallahir = "";
	$error_akta = "";
	$error_agama = "";
	$error_kwn = "";
	$error_negara = "";
	$error_khusus = "";
	$error_alamat = "";
	$error_rt ="";
	$error_rw = "";
	$error_dusun = "";
	$error_desa = "";
	$error_kecamatan ="";
	$error_kodepos = "";
	$error_lintang = "";
	$error_bujur = "";
	$error_tinggal = "";
	$error_transportasi = "";
	$error_kks = "";
	$error_anak_ke = "";
	$error_kps_pkh = "";
	$error_valid = "";
	
	$nama = "";
	$jkel = "";
	$nisn = "";
	$nik = "";
	$tempatlahir = "";
	$tanggallahir = "";
	$akta = "";
	$agama = "";
	$kwn = "";
	$negara = "";
	$khusus = "";
	$alamat = "";
	$rt = "";
	$rw = "";
	$dusun = "";
	$desa = "";
	$kecamatan = "";
	$kodepos = "";
	$lintang = "";
	$bujur = "";
	$tinggal = "";
	$transportasi = "";
	$kks = "";
	$anak_ke = "";
	$kps_pkh = "";
	
	
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(empty($_POST["nama"]))
	{
		$error_nama = "Nama Tidak Boleh Kosong";
		$error_valid = true;
	}
else
{
	$nama = cek_input($_POST["nama"]);
	if(!preg_match("/^[a-zA-Z\\s]*$/",$nama))
	{
		$error_nama = "Inputan Hanya Boleh Huruf dan Spasi";
		$error_valid = true;
	}
}
if(empty($_POST["jkel"]))
	{
	$error_jkel = "Jenis Kelamin Tidak Boleh Kosong";
	$error_valid = true;
	}
else 
	{
	$jkel = cek_input($_POST["jkel"]);
	}
if(empty($_POST["nisn"]))
{
	$error_nisn = "NISN Tidak Boleh Kosong";
	$error_valid = true;
}
else
{
	$nisn = cek_input($_POST["nisn"]);
	if(!is_numeric($nisn))
	{
		$error_nisn = 'NISN hanya boleh angka';
		$error_valid = true;
	}
}
if(empty($_POST["nik"]))
{
	$error_nik = "NIK/KITAS Tidak Boleh Kosong";
	$error_valid = true;
}
else
{
	$nik = cek_input($_POST["nik"]);
	if(!is_numeric($nik))
	{
		$error_nik = 'NIK/KITAS hanya boleh angka';
		$error_valid = true;
	}
}
if(empty($_POST["tempatlahir"]))
	{
		$error_tempatlahir = "Tempat Lahir Tidak Boleh Kosong";
		$error_valid = true;
	}
else
{
	$tempatlahir = cek_input($_POST["tempatlahir"]);
	if(!preg_match("/^[a-zA-Z\\s]*$/",$tempatlahir))
	{
		$error_tempatlahir = "Inputan Hanya Boleh Huruf dan Spasi";
		$error_valid = true;
	}
}
if(empty($_POST["tanggallahir"]))
	{
	$error_tanggallahir = "Tanggal Lahir Tidak Boleh Kosong";
	$error_valid = true;
	}
else 
	{
	$tanggallahir = cek_input($_POST["tanggallahir"]);
	}
if(empty($_POST["akta"]))
{
	$error_akta = "Nomor Akta Kelahiran Tidak Boleh Kosong";
	$error_valid = true;
}
else
{
	$akta = cek_input($_POST["akta"]);
	if(!is_numeric($akta))
	{
		$error_akta = 'Nomor Akta Kelahiran hanya boleh angka';
		$error_valid = true;
	}
}
if(empty($_POST["agama"]))
	{
	$error_agama= "Agama Tidak Boleh Kosong";
	$error_valid = true;
	}
else if($_POST["agama"]=="none"){
			$error_agama = "Pilih salah satu Agama";
			$error_valid = true;
}
else 
	{
	$agama = cek_input($_POST["agama"]);
	}
if(empty($_POST["kwn"]))
	{
	$error_kwn = "Kewarganegaraan Tidak Boleh Kosong";
	$error_valid = true;
	}
else 
	{
	$kwn = cek_input($_POST["kwn"]);
	}	
if(empty($_POST["khusus"]))
	{
	$error_khusus= "Pilihan Ini Tidak Boleh Kosong";
	$error_valid = true;
	}
else 
	{
	$khusus = cek_input($_POST["khusus"]);
	}
if(empty($_POST["alamat"]))
	{
	$error_alamat= "Alamat Tidak Boleh Kosong";
	$error_valid = true;
	}
else 
	{
	$alamat = cek_input($_POST["alamat"]);
	}
if(empty($_POST["rt"] && $_POST["rw"]))
{
	$error_rt = "RT / RW Tidak Boleh Kosong";
	$error_valid = true;
}
else
{
	$rt = cek_input($_POST["rt"]);
	$rw = cek_input($_POST["rw"]);
	if(!is_numeric($rt))	
	{
		$error_rt = 'RT / RW Harus Angka';
		$error_valid = true;
	}
	if(!is_numeric($rw)) 
	{
		$error_rt = 'RT / RW Harus Angka';
		$error_valid = true;
	}
}
if(empty($_POST["dusun"]))
	{
		$error_dusun = "Nama Dusun Tidak Boleh Kosong";
	$error_valid = true;
	}
else
{
	$dusun = cek_input($_POST["dusun"]);
	if(!preg_match("/^[a-zA-Z\\s]*$/",$dusun))
	{
		$error_dusun = "Inputan Hanya Boleh Huruf dan Spasi";
	$error_valid = true;
	}
}
if(empty($_POST["desa"]))
	{
		$error_desa = "Nama Desa / Kelurahan Tidak Boleh Kosong";
$error_valid = true;
	}
else
{
	$desa = cek_input($_POST["desa"]);
	if(!preg_match("/^[a-zA-Z\\s]*$/",$desa))
	{
		$error_desa = "Inputan Hanya Boleh Huruf dan Spasi";
		$error_valid = true;
	}	
}
if(empty($_POST["kecamatan"]))
	{
		$error_kecamatan = "Nama Kecamatan Tidak Boleh Kosong";
		$error_valid = true;
	}
else
{
	$kecamatan = cek_input($_POST["kecamatan"]);
	if(!preg_match("/^[a-zA-Z\\s]*$/",$kecamatan))
	{
		$error_kecamatan = "Inputan Hanya Boleh Huruf dan Spasi";
		$error_valid = true;
	}	
}
if(empty($_POST["kodepos"]))
{
	$error_kodepos = "Kode Pos Tidak Boleh Kosong";
	$error_valid = true;
}
else
{
	$kodepos = cek_input($_POST["kodepos"]);
	if(!is_numeric($kodepos))
	{
		$error_kodepos = 'Kode Pos Hanya Boleh Angka';
		$error_valid = true;
	}
}
if(empty($_POST["lintang"] && $_POST["bujur"]))
{
	$error_lintang = "Lintang / Bujur Tidak Boleh Kosong";
	$error_valid = true;
}
else
	{
	$lintang = cek_input($_POST["lintang"]);
	$bujur = cek_input($_POST["bujur"]);
}	
if(empty($_POST["tinggal"]))
	{
	$error_tinggal= "Tempat Tinggal Tidak Boleh Kosong";
	$error_valid = true;
} 
	else if($_POST["tinggal"]=="none"){
			$error_tinggal = "Pilih Salah Satu";
			$error_valid = true;
}
else 
	{
	$tinggal = cek_input($_POST["tinggal"]);
	}
if(empty($_POST["transportasi"]))
	{
	$error_transportasi= "Jenis Transportasi Tidak Boleh Kosong";
	$error_valid = true;
	}
		 else if($_POST["transportasi"]=="none"){
			$error_transportasi = "Pilih Salah Satu";
			$error_valid = true;
	}
else 
	{
	$transportasi = cek_input($_POST["transportasi"]);
	}
if(empty($_POST["kks"]))
{
	$error_kks = "Nomor KKS Tidak Boleh Kosong";
	$error_valid = true;
}
else
{
	$kks = cek_input($_POST["kks"]);
	if(!is_numeric($kks))
	{
		$error_kks = 'Nomor KKS hanya boleh angka';
	$error_valid = true;
	}
}	
if(empty($_POST["anak_ke"]))
{
	$error_anak_ke = "Tidak Boleh Kosong";
	$error_valid = true;
}
else
{
	$anak_ke = cek_input($_POST["anak_ke"]);
	if(!is_numeric($anak_ke))
	{
		$error_anak_ke = 'Isian Ini Hanya Dapat Di Isi Angka';
$error_valid = true;
	}
}
if(empty($_POST["kps_pkh"]))
	{
	$error_kps_pkh = "Nomor KPS / PKH Tidak Boleh Kosong";
	$error_valid = true;
	}
else 
	{
	$kps_pkh = cek_input($_POST["kps_pkh"]);
	}	

}

function cek_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<div class="row">
<div class="col-md-8">
<div class="card">
	<div class="card-header">
	Contoh Validasi Form Dengan PHP
	</div>
	<div class="card-body">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> <div class="form-group row">
	<label for="nama" class="col-sm-2 col-form-label">Nama</label>
	<div class="col-sm-10">
		<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span>
																			
	</div>
	</div>
<div class="form-group row">
	<label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
<div class="custom-control custom-radio custom-control-inline">
	<input type="radio" id="laki" name="jkel" class="custom-control-input" value="Laki - Laki" >
  <label class="custom-control-label" for="laki">Laki -Laki </label>
</div> 
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="perempuan" name="jkel" class="custom-control-input" value="Perempuan"> 
  <label class="custom-control-label" for="perempuan">Perempuan</label>
	<?php echo ($error_jkel !="" ? "" : "");?>
						</div>
						<span class="warning"><?php echo $error_jkel;?></span>
			
		
</div>
	
<div class="form-group row">
	<label for="nisn" class="col-sm-2 col-form-label">NISN</label>
	<div class="col-sm-10">
		<input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
	</div>	
	</div>
<div class="form-group row">
	<label for="nik" class="col-sm-2 col-form-label">NIK/KITAS</label>
	<div class="col-sm-10">
		<input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="NIK/KITAS" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
	</div>	
	</div>
<div class="form-group row">
	<label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
	<div class="col-sm-10">
		<input type="text" name="tempatlahir" class="form-control <?php echo ($error_tempatlahir !="" ? "is-invalid" : ""); ?>" id="tempatlahir" placeholder="Tempat Lahir" value="<?php echo $tempatlahir; ?>"><span class="warning"><?php echo $error_tempatlahir; ?></span>				
	</div>
	</div>
<div class="form-group row">
	<label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
	<div class="col-sm-10">
		<input type="date" name="tanggallahir" class="form-control <?php echo ($error_tanggallahir !="" ? "is-invalid" : ""); ?>" id="tanggallahir" placeholder="Tanggal Lahir" value="<?php echo $tanggallahir; ?>"><span class="warning"><?php echo $error_tanggallahir; ?></span>				
	</div>
	</div>
<div class="form-group row">
	<label for="akta" class="col-sm-2 col-form-label">No. Reg Akta</label>
	<div class="col-sm-10">
		<input type="text" name="akta" class="form-control <?php echo ($error_akta !="" ? "is-invalid" : ""); ?>" id="akta" placeholder="No. Regristrasi Akta Kelahiran" value="<?php echo $akta; ?>"><span class="warning"><?php echo $error_akta; ?></span>
	</div>	
	</div>
<div class="form-group row">
	<label for="akta" class="col-sm-2 col-form-label">Agama</label>
 <div class="form-group col-md-4">
	 <select id="agama" name="agama" class="form-control">
		  <option value="none" selected>Pilih Agama</option>
        <option value="Islam">Islam</option>
		<option value="Kristen">Kristen</option>
		<option value="Katholik">Khatolik</option>
		<option value="Hindu">Hindu</option>
		<option value="Budha">Budha</option>
		<option value="Konghucu">Konghucu</option>
      </select><span class="warning"><?php echo $error_agama; ?></span>
    </div>
	</div>
<div class="form-group row">
	<label for="akta" class="col-sm-2 col-form-label">Kewarganegaraan</label>
	<div class="custom-control custom-radio custom-control-inline">
	<input onclick="document.getElementById('negara').disabled = true; document.getElementById('charstype').disabled = true;" type="radio" id="wni" name="kwn" class="custom-control-input" value="INDONESIA">
  <label class="custom-control-label" for="wni">Warga Negara Indonesia </label>
</div> 
<div class="custom-control custom-radio custom-control-inline">
  <input  onclick="document.getElementById('negara').disabled = false; document.getElementById('charstype').disabled = false;" type="radio" id="wna" name="kwn" class="custom-control-input" value="<?php echo $_REQUEST["kwn"]; ?>">
  <label class="custom-control-label" for="wna">Warga Negara Asing </label>
	<?php ($error_kwn !="" ? "" : "");?>
						</div>
						<span class="warning"><?php echo $error_kwn;?></span>
</div>
	<div class="form-group row">
	<label for="nama" class="col-sm-2 col-form-label"></label>
	<div class="col-sm-3">
	<input type="text" name="kwn" id="negara" class="form-control " placeholder="Nama Negara Asal" > 
	</div>
	</div>
	<div class="form-group row">
	<label for="khusus" class="col-sm-2 col-form-label">Kebutuhan Khusus</label>
	<div class="custom-control custom-radio custom-control-inline">
	<input onclick="document.getElementById('khusus').disabled = true; document.getElementById('charstype').disabled = true;" type="radio" id="tidak" name="khusus" class="custom-control-input" value="Tidak Berkebutuhan Khusus">
  <label class="custom-control-label" for="tidak">Tidak </label>
</div> 
<div class="custom-control custom-radio custom-control-inline">
  <input  onclick="document.getElementById('khusus').disabled = false; document.getElementById('charstype').disabled = false;" type="radio" id="ya" name="khusus" class="custom-control-input" value="<?php echo $_REQUEST["khusus"]; ?>">
  <label class="custom-control-label" for="ya">Iya </label>
	<?php ($error_khusus !="" ? "" : "");?>
						</div>
						<span class="warning"><?php echo $error_khusus;?></span>
</div>
	<div class="form-group row">
	<label for="khusus" class="col-sm-2 col-form-label"></label>
	<div class="col-sm-3">
	<input type="text" name="khusus" id="khusus" class="form-control " placeholder="Jenis Kebutuhan Khusus" > 
	</div>
	</div>
<div class="form-group row">
<label for="nama" class="col-sm-2 col-form-label">Alamat</label>
	<div class="col-sm-10">
	<input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" id="alamat" placeholder="Alamat Jalan" value="<?php echo $alamat; ?>"><span class="warning"><?php echo $error_alamat; ?></span>												
	</div>
	</div>
	<div class="form row">
	<label for="rt" class="col-sm-2 col-form-label">RT / RW</label>
	 <div class="col-md-3 mb-3">
	<input type="text" name="rt" id="rt" class="form-control <?php echo ($error_rt!="" ? "is-invalid" : ""); ?>" placeholder="RT" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
		</div>
	<div class="col-md-3 mb-3"> 
	<input type="text" name="rw" id="rw" class="form-control" placeholder="RW" value="<?php echo $rw; ?>">
	</div>
	</div> 
<div class="form-group row">
	<label for="dusun" class="col-sm-2 col-form-label">Dusun</label>
	<div class="col-sm-10">
		<input type="text" name="dusun" class="form-control <?php echo ($error_dusun!="" ? "is-invalid" : ""); ?>" id="dusun" placeholder="Nama Dusun" value="<?php echo $dusun; ?>"><span class="warning"><?php echo $error_dusun; ?></span>
	</div>	
	</div>
<div class="form-group row">
	<label for="desa" class="col-sm-2 col-form-label">Desa / Kelurahan</label>
	<div class="col-sm-10">
		<input type="text" name="desa" class="form-control <?php echo ($error_desa !="" ? "is-invalid" : ""); ?>" id="desa" placeholder="Nama Desa / Kelurahan" value="<?php echo $desa; ?>"><span class="warning"><?php echo $error_desa; ?></span>
	</div>	
	</div>
<div class="form-group row">
	<label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
	<div class="col-sm-10">
		<input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan !="" ? "is-invalid" : ""); ?>" id="kecamatan" placeholder="Nama Kecamatan" value="<?php echo $kecamatan; ?>"><span class="warning"><?php echo $error_kecamatan; ?></span>
	</div>	
	</div>
<div class="form-group row">
	<label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
	<div class="col-sm-10">
		<input type="text" name="kodepos" class="form-control <?php echo ($error_kodepos !="" ? "is-invalid" : ""); ?>" id="kodepos" placeholder="Kode Pos" value="<?php echo $kodepos; ?>"><span class="warning"><?php echo $error_kodepos; ?></span>
	</div>	
	</div>	
<div class="form row">
	<label for="lintang" class="col-sm-2 col-form-label">Lintang / Bujur</label>
	 <div class="col-md-3 mb-3">
	<input type="text" name="lintang" id="lintang" class="form-control <?php echo ($error_lintang!="" ? "is-invalid" : ""); ?>" placeholder="Lintang" value="<?php echo $lintang; ?>"><span class="warning"><?php echo $error_lintang; ?></span>
		</div>
	<div class="col-md-3 mb-3"> 
	<input type="text" name="bujur" id="bujur" class="form-control" placeholder="Bujur" value="<?php echo $bujur; ?>">
	</div>
	</div> 
<div class="form-group row">
	<label for="tinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label>
 <div class="form-group col-md-4">
	 <select id="tinggal" name="tinggal" class="form-control">
        <option value="none" selected>Pilih Jenis Tinggal</option>
		<option value="Rumah Pribadi">Rumah Pribadi</option>
		<option value="Kontrak">Kontrak/Sewa</option>
		<option value="Kost">Kost</option>
      </select><span class="warning"><?php echo $error_tinggal; ?></span>
    </div>
	</div>
<div class="form-group row">
	<label for="transportasi" class="col-sm-2 col-form-label">Transportasi</label>
 <div class="form-group col-md-4">
	 <select id="transportasi" name="transportasi" class="form-control">
        <option value="none" selected>Pilih Jenis Transportasi</option>
		<option value="Jalan Kaki">Jalan Kaki</option>
		<option value="Sepeda">Sepeda</option>
		<option value="Sepeda Motor">Sepeda Motor</option>
		<option value="Mobil">Mobil</option>
		 <option value="Angkutan Umum">Angkutan Umum</option>
      </select><span class="warning"><?php echo $error_transportasi; ?></span>
    </div>
	</div>
<div class="form-group row">
	<label for="kks" class="col-sm-2 col-form-label">Nomor KKS</label>
	<div class="col-sm-10">
		<input type="text" name="kks" class="form-control <?php echo ($error_kks !="" ? "is-invalid" : ""); ?>" id="kks" placeholder="No. Kartu Keluarga Sejahtera" value="<?php echo $kks; ?>"><span class="warning"><?php echo $error_kks; ?></span>
	</div>	
	</div>
<div class="form-group row">
	<label for="anak_ke" class="col-sm-2 col-form-label">Anak Ke</label>
	<div class="col-sm-10">
		<input type="text" name="anak_ke" class="form-control <?php echo ($error_anak_ke !="" ? "is-invalid" : ""); ?>" id="anak_ke" placeholder="Anak Ke" value="<?php echo $anak_ke; ?>"><span class="warning"><?php echo $error_anak_ke; ?></span>
	</div>	
	</div>

<div class="form-group row">
	<label for="akta" class="col-sm-2 col-form-label">No. KPS / PKH</label>
	<div class="custom-control custom-radio custom-control-inline">
	<input onclick="document.getElementById('ini').disabled = true; document.getElementById('charstype').disabled = true;" type="radio" id="kps" name="kps_pkh" class="custom-control-input" value="Tidak Punya">
  <label class="custom-control-label" for="kps">Tidak Punya KPS / PKH </label>
</div> 
<div class="custom-control custom-radio custom-control-inline">
  <input  onclick="document.getElementById('ini').disabled = false; document.getElementById('charstype').disabled = false;" type="radio" id="pkh" name="kps_pkh" class="custom-control-input" value="<?php echo $_REQUEST["kps_pkh"]; ?>">
  <label class="custom-control-label" for="pkh">Memiliki KPS / PKH </label>
	<?php ($error_kps_pkh !="" ? "" : "");?>
						</div>
						<span class="warning"><?php echo $error_kps_pkh;?></span>
</div>
	<div class="form-group row">
	<label for="nama" class="col-sm-2 col-form-label"></label>
	<div class="col-sm-3">
	<input type="text" name="kps_pkh" id="ini" class="form-control " placeholder="Nomor KPS / PKH" > 
	</div>
	</div>
	
	<div class="form-group row">
		<div class="col-sm-10">
		<button type="submit" class="btn btn-primary">Sign In</button>
		<a href="reportexcel.php"><button type="button" class="btn btn-primary" >Excel File</button></a>
		</div>
	</div>
		</form>
	</div>
	</div>
	</div>
	</div>
	
<?php
	echo "<h2> Your Input : </h2>";
	echo "Nama = ".$nama;
	echo "<br>";
	echo "Jenis Kelamin = ".$jkel;
	echo "<br>";
	echo "NISN = ".$nisn;
	echo "<br>";
	echo "NIK/KITAS = ".$nik;
	echo "<br>";
	echo "Tempat Lahir = ".$tempatlahir;
	echo "<br>";
	echo "Tanggal Lahir = ".$tanggallahir;
	echo "<br>";
	echo "No. Regristrasi Akta Kelahiran = ".$akta;
	echo "<br>";
	echo "Agama = ".$agama;
	echo "<br>";
	echo "Kewarganegaraan = ".$kwn;
	echo "<br>";
	echo "Kebutuhan Khusus = ".$khusus;
	echo "<br>";
	echo "Alamat Jalan = ".$alamat;
	echo "<br>";
	echo "RT = ".$rt;
	echo "<br>";
	echo "Rw = ".$rw;
	echo "<br>";
	echo "Dusun = ".$dusun;
	echo "<br>";
	echo "Desa = ".$desa;
	echo "<br>";
	echo "Kecamatan = ".$kecamatan;
	echo "<br>";
	echo "Kode Pos = ".$kodepos;
	echo "<br>";
	echo "Lintang = ".$lintang;
	echo "<br>";
	echo "Bujur = ".$bujur;
	echo "<br>";
	echo "Tempat Tinggal = ".$tinggal;
	echo "<br>";
	echo "Transportasi = ".$transportasi;
	echo "<br>";
	echo "Tempat Tinggal = ".$kks;
	echo "<br>";
	echo "Anak Ke = ".$anak_ke;
	echo "<br>";
	echo "Nomor KPS / PKH = ".$kps_pkh;
	
	

$host="localhost";
$username="root";
$password="";
$dbname="praktikum10";
if(($error_valid)==true){
die("Connection Failed : ".mysqli_connect_error());
}
$conn = mysqli_connect($host, $username,$password,$dbname);

if(!$conn) {
	die("Connection Failed : ".mysqli_connect_error());
}

$sql = "INSERT INTO `data`(`tanggal`, `nama`, `jenis_kelamin`, `NISN`, `NIK`, `Tempat_Lahir`, `Tanggal_Lahir`, `No_Akta`, `Agama`, `Kewarganegaraan`, `Kebutuhan_Khusus`, `Alamat`, `RT`, `RW`, `Dusun`, `Desa`, `Kecamatan`, `Kode_Pos`, `Lintang`, `Bujur`, `Tempat_Tinggal`, `Transportasi`, `KKS`, `Anak_Ke`, `KPS`) VALUES ('$tanggal','$nama','$jkel','$nisn','$nik','$tempatlahir','$tanggallahir','$akta','$agama','$kwn','$khusus','$alamat','$rt','$rw','$dusun','$desa','$kecamatan','$kodepos','$lintang','$bujur','$tinggal','$transportasi','$kks','$anak_ke','$kps_pkh')";

if (mysqli_query($conn, $sql)) {
	echo "<br>succes";
}
	else {
	echo "<br>Data Telah Ada Pada Database";
}


?>
	
</body>

</html>