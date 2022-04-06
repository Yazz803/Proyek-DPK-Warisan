<?php

	$JenisKelamin = $Menikah = $harta = $totalharta = $pasanganHidup = $pasanganBercerai = $AnakPewaris = $anakpewarisL = $anakpewarisP = $CucuPewaris = $cucupewarisL = $cucupewarisP = $ortuPewaris = $NenekDariSisiIbu = $saudarapewarisL = $saudarapewarisP = $kakeknenekPewaris = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$JenisKelamin = $_POST ['JenisKelamin'];
		$Menikah = $_POST ['Menikah'];
		$harta = $_POST ['harta'];
		$totalharta = $_POST ['totalharta'];
		$pasanganHidup = $_POST ['pasanganHidup'];
		$pasanganBercerai = $_POST ['pasanganBercerai'];
		$AnakPewaris = $_POST ['AnakPewaris'];
		$anakpewarisL = $_POST ['anakpewarisL'];
		$anakpewarisP = $_POST ['anakpewarisP'];
		$CucuPewaris = $_POST ['CucuPewaris'];
		$cucupewarisL = $_POST ['cucupewarisL'];
		$cucupewarisP = $_POST ['cucupewarisP'];
		$ortuPewaris = $_POST ['ortuPewaris'];
		$NenekDariSisiIbu = $_POST ['NenekDariSisiIbu'];
		$saudarapewarisL = $_POST ['saudarapewarisL'];
		$saudarapewarisP = $_POST ['saudarapewarisP'];
		$kakeknenekPewaris = $_POST ['kakeknenekPewaris'];
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Kalkulator Waris</title>
</head>
<body>
	
	<header class="judul">
		<h1>Kalkulator Waris</h1>
	</header>

	<div class="form1">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<h2>Informasi Umum Pewaris</h2>
			<hr>
			<p>Jenis Kelamin Pewaris</p>
			<p class="keterangan">Jenis kelamin pihak yang meninggalkan harta</p>
			<select name="JenisKelamin" id="JenisKelamin">
				<option value="default" selected></option>
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select><br><br>
			<p>Apakah pewaris telah menikah secara sah?</p>
			<p class="keterangan">Hanya perkawinan legal yang diakui negara</p>
			<select name="Menikah" id="Menikah">
				<option value="default"></option>
				<option value="Ya, Pewaris telah menikah">Ya, Pewaris telah menikah</option>
				<option value="Tidak, Pewaris belum menikah">Tidak, Pewaris belum menikah</option>
			</select>
			<br><br><br>

			<!-- Informasi harta pewaris -->
			<h2>Informasi Harta Pewaris</h2>
			<hr>
			<p>Jenis harta yang ditinggalkan pewaris</p>
			<p class="keterangan">Pilih semua yang sesuai dengan keadaan Anda</p>
			<input type="checkbox" name="harta" value="Rumah">
			<label for="harta">Rumah</label><br><br>
			<input type="checkbox" name="harta" id="harta" value="Tanah">
			<label for="harta">Tanah</label><br><br>
			<input type="checkbox" name="harta" id="harta">
			<label for="harta">Perhiasan</label><br><br>
			<input type="checkbox" name="harta" id="harta">
			<label for="harta">Uang/Tabungan</label><br><br>
			<input type="checkbox" name="harta" id="harta">
			<label for="harta">saham</label><br><br>
			<input type="checkbox" name="harta" id="harta">
			<label for="harta">Perusahaan</label><br><br>
			<input type="checkbox" name="harta" id="harta">
			<label for="harta">Kendaraan</label><br><br>
			<p>Perkiraan total harta yang akan diwariskan</p>
			<p class="keterangan">Harta yang dibagikan oleh pihak yang meninggal</p>
			<input type="text" name="totalharta" id="totalharta" placeholder="Rp." style="color: black; font-weight: bold;" class="totalHarta">
			<br><br><br>

			<!-- informasi keluarga inti pewaris -->
			<h2>Informasi Keluarga Inti Pewaris</h2>
			<hr>
			<p>Apakah pasangan sah pewaris masih hidup?</p>
			<p class="keterangan">Hanya untuk pasangan suami-istri yang sah</p>
			<input type="radio" name="pasanganHidup" id="pasanganHidup">
			<label for="pasanganHidup">Ya</label><br><br>
			<input type="radio" name="pasanganHidup" id="pasanganHidup">
			<label for="pasanganHidup">Tidak</label><br><br>

			<p>Apakah pewaris dan pasangan telah bercerai?</p>
			<p class="keterangan">Hanya untuk pasangan suami-istri yang sah</p>
			<input type="radio" name="pasanganBercerai" id="pasanganBercerai">
			<label for="pasanganBercerai">Ya</label><br><br>
			<input type="radio" name="pasanganBercerai" id="pasanganBercerai">
			<label for="pasanganBercerai">Tidak</label><br><br>

			<p>Apakah pewaris memiliki anak dari pasangan yang sah?</p>
			<p class="keterangan">Jika tidak ada, lewati form setelah ini.</p>
			<input type="radio" name="AnakPewaris" id="AnakPewaris">
			<label for="AnakPewaris">Ya</label><br><br>
			<input type="radio" name="AnakPewaris" id="AnakPewaris">
			<label for="AnakPewaris">Tidak</label><br><br>

			<p>Jumlah Anak pewaris yang masih hidup saat pewaris baru saja meninggal</p>
			<p class="keterangan">Hanya hitung jumlah anak yang beragama Islam</p>
			<label for="anakpewarisL">Anak Laki-Laki</label><br>
			<input type="number" name="anakpewarisL" id="anakpewarisL" placeholder="0" style="color: black; font-weight: bold;" class="anakpewaris"><br><br>
			<label for="anakpewarisP">Anak Perempuan</label><br>
			<input type="number" name="anakpewarisP" id="anakpewarisP" placeholder="0" style="color: black; font-weight: bold;" class="anakpewaris"><br><br>

			<p>Apakah pewaris memiliki cucu dari anak laki-lakinya?</p>
			<p class="keterangan">Jika tidak ada, lewati form setelah ini.</p>
			<input type="radio" name="CucuPewaris" id="CucuPewaris">
			<label for="CucuPewaris">Ya</label><br><br>
			<input type="radio" name="CucuPewaris" id="CucuPewaris">
			<label for="CucuPewaris">Tidak</label><br><br>

			<p>Jumlah Anak pewaris yang masih hidup saat pewaris baru saja meninggal</p>
			<p class="keterangan">Hanya hitung jumlah anak yang beragama Islam</p>
			<label for="cucupewarisL">Cucu Laki-Laki</label><br>
			<input type="number" name="cucupewarisL" id="cucupewarisL" placeholder="0" style="color: black; font-weight: bold;" class="anakpewaris"><br><br>
			<label for="cucupewarisP">Cucu Perempuan</label><br>
			<input type="number" name="cucupewarisP" id="cucupewarisP" placeholder="0" style="color: black; font-weight: bold;" class="anakpewaris"><br><br>

			<!-- Informasi keluarga pewaris -->
			<h2>Informasi keluarga Pewaris</h2>
			<hr>
			<p>Apakah orang tua pewaris masih hidup?</p>
			<p class="keterangan">pilih kondisi orang tua kandung pewaris</p>
			<select name="ortuPewaris" id="ortuPewaris">
				<option value="Bapak masih hidup, ibu sudah meninggal" selected>Bapak masih hidup, ibu sudah meninggal</option>
				<option value="Ibu masih hidup, Bapak sudah meninggal">Ibu masih hidup, Bapak sudah meninggal</option>
				<option value="Bapak dan Ibu sudah meninggal">Bapak dan Ibu sudah meninggal</option>
				<option value="Bapak dan Ibu masih hidup">Bapak dan Ibu masih hidup</option>
			</select>
			<br><br>

			<p>ketika pewaris meninggal, apakah nenek dari sisi Ibu masih hidup?</p><br>
			<input type="radio" name="NenekDariSisiIbu" id="NenekDariSisiIbu">
			<label for="NenekDariSisiIbu">Ya</label><br><br>
			<input type="radio" name="NenekDariSisiIbu" id="NenekDariSisiIbu">
			<label for="NenekDariSisiIbu">Tidak</label><br><br>

			<p>Jumlah saudara pewaris yang masih hidup saat pewaris baru saja meninggal</p>
			<p class="keterangan">Hanya hitung jumlah anak yang beragama islam</p>
			<label for="saudarapewarisL">Saudara Laki-Laki</label><br>
			<input type="number" name="saudarapewarisL" id="saudarapewarisL" placeholder="0" style="color: black; font-weight: bold;" class="anakpewaris"><br><br>
			<label for="saudarapewarisP">Saudara Perempuan</label><br>
			<input type="number" name="saudarapewarisP" id="saudarapewarisP" placeholder="0" style="color: black; font-weight: bold;" class="anakpewaris"><br><br>

			<p>Apakah Kakek-nenek pewaris masih hidup saat pewaris baru saja meninggal?</p>
			<p class="keterangan">pilih kondisi kakek-nenek pewaris dari sisi ayah saja</p>
			<select name="kakeknenekPewaris" id="kakeknenekPewaris">
				<option value="Kakek masih hidup, Nenek sudah meninggal" selected>Kakek masih hidup, Nenek sudah meninggal</option>
				<option value="Nenek masih hidup, Kakek sudah meninggal">Nenek masih hidup, Kakek sudah meninggal</option>
				<option value="Kakek dan Nenek sudah meninggal">Kakek dan Nenek sudah meninggal</option>
				<option value="Kakek dan Nenek masih hidup">Kakek dan Nenek masih hidup</option>
			</select>
			<br><br>
			<input type="submit" value="Input Data" name="kirim" class="catat">
		</form>
	</div>

	<div class="detailKeluargaPewaris">
		<form action="">
			<h2>Detail Keluarga Pewaris</h2><br>
			<h3>
			<?php
				echo "Jenis Kelamin : ". $JenisKelamin. "<br>";
				echo "Menikah : ". $Menikah. "<br>";
				echo "Harta : ". $harta. "<br>";
				echo "Total Harta : ". $totalharta. "<br>";
				echo "Pasangan Hidup : ". $pasanganHidup. "<br>";
				echo "Pasangan Bercerai : ". $pasanganBercerai. "<br>";
				echo "Anak Pewaris : ". $AnakPewaris. "<br>";
				echo "Anak Pewaris Laki-Laki : ". $anakpewarisL. "<br>";
				echo "Anak Pewaris Perempuan : ". $anakpewarisP. "<br>";
				echo "Cucu Pewaris : ". $CucuPewaris. "<br>";
				echo "Cucu Pewaris Laki-Laki : ". $cucupewarisL. "<br>";
				echo "Cucu Pewaris Perempuan : ". $cucupewarisP. "<br>";
				echo "Orang Tua Pewaris : ". $ortuPewaris. "<br>";
				echo "Nenek dari sisi Ibu : ". $NenekDariSisiIbu. "<br>";
				echo "Saudara Pewaris Laki-Laki : ". $saudarapewarisL. "<br>";
				echo "Saudara Pewaris Perempuan : ". $saudarapewarisP. "<br>";
				echo "Kaken Nenek Pewaris : ". $kakeknenekPewaris. "<br>";
        	?>
			</h3>
			<br>
			<h2>Detail Harta Pewaris</h2>
			<hr><br><br><br><br><br><br><br><br><br><br><br><br>

			<input type="submit" value="Hitung" class="hitung">
		</form>
	</div>

</body>
</html>