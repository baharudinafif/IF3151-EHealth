<?php
	include 'header.php';
	?>

<link rel="stylesheet" type="type/css" href="css/register.css">
<div id="ContentRegister">
	<div id="container">
	<form id="registerform" name="regform" class="rounded" method="post" action="registersuccess.php">
		<img src='images/Register.png' width="300px">
		<p>(*) Harus diisi.</p>
		<p>Data yang Anda isi akan kami jamin keamanannya.</p>
		
		<div class="field">
			<label for="nama">Nama Lengkap*</label>
			<input type="text" class="input" name="nama" 
				onblur="valNama();valid()">
			<span id="nama"></span>
			<p class="hint">Masukkan nama lengkap Anda.</p>
		</div>
		
		<div class="field">
			<label for="username">Username*</label>
			<input type="text" class="input" name="username"  
				onblur="valPassword();valUsername();valid()">
			<span id="user"></span>
			<p class="hint">Masukkan username yang Anda inginkan.</p>
		</div>
		
		<div class="field">
			<label for="password">Password*</label>
			<input type="password" class="input" name="password"  
				onblur="valPassword();valUsername();valEmail();valid()">
			<span id="pass"></span>
			<p class="hint">Masukkan password Anda inginkan.</p>
		</div>
		
		<div class="field">
			<label for="password2">Confirm Password*</label>
			<input type="password" class="input" name="confirm" 
				onblur="valConfirm();valid()">
			<span id="conf"></span>
			<p class="hint">Konfirmasi password.</p>
		</div>
		
		<div class="field">
			<label for="nohp">Nomor HP</label>
			<input type="text" class="input" name="hp"
				onblur="valHP();valid()">
			<span id="hp"></span>
			<p class="hint">Masukkan nomor HP Anda.</p>
		</div>
		
		<div class="field">
			<label for="alamat">Alamat</label>
			<input type="text" class="input" name="alamat"
				onblur="valAlamat();valid()">
			<span id="alamat"></span>
			<p class="hint">Masukkan alamat Anda.</p>
		</div>
		
		<div class="field">
			<label for="provinsi">Provinsi</label>
			<input type="text" class="input" name="provinsi"
				onblur="valProvinsi();valid()">
			<span id="provinsi"></span>
			<p class="hint">Masukkan provinsi tempat Anda tinggal.</p>
		</div>
		
		<div class="field">
			<label for="kota">Kota</label>
			<input type="text" class="input" name="kota"
				onblur="valKota();valid()">
			<span id="kota"></span>
			<p class="hint">Masukkan kota tempat Anda tinggal.</p>
		</div>
		
		<div class="field">
			<label for="kodepos">Kode Pos</label>
			<input type="text" class="input" name="kodepos"
				onblur="valKodepos();valid()">
			<span id="kodepos"></span>
			<p class="hint">Masukkan kode pos tempat Anda tinggal.</p>
		</div>
		
		<div class="field">
			<label for="email">Email*</label>
			<input type="text" class="input" name="email" 
				onblur="valEmail();valEmail2();valPassword();valid()">
			<span id="email"></span>
			<p class="hint">Masukkan email Anda.</p>
		</div>
		
		<input type="submit" class="button" value="Daftar">
	</form>
	</div>
</div>

<?php
	include 'footer.php';
	?>
