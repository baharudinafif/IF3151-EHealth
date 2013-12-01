<?php
	include 'header.php';
	?>

<link rel="stylesheet" type="type/css" href="register.css">
<div id="ContentKalender">
	<div id="container">
	<form id="reminder" name="remform" class="rounded" method="post" action="remindersuccess.php">
		<img src='images/Register.png' width="300px">
		<p>(*) Harus diisi.</p>
		<p>Data yang Anda isi akan kami jamin keamanannya.</p>
		
		<div class="field">
			<label for="tipe">Tipe*</label>
			<select>
			  <option value="darah">Cuci Darah</option>
			  <option value="obat">Minum Obat Ace Maxs</option>
			  <option value="check-up">Medical Check Up</option>
			</select>
			<span id="tipe"></span>
			<p class="hint">Masukkan tipe data reminder.</p>
		</div>
		
		<div class="field">
			<label for="keterangan">Keterangan</label>
			<input type="text" class="input" name="keterangan"  
				onblur="valKeterangan;valid()">
			<span id="user"></span>
			<p class="hint">Masukkan keterangan tambahan yang Anda inginkan.</p>
		</div>
		
		<input type="submit" class="button" value="Daftar">
	</form>
	</div>
</div>

<?php
	include 'footer.php';
	?>
