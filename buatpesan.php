<?php
	include 'header.php';
	?>
	
<link rel="stylesheet" type="type/css" href="register.css">
<link rel="stylesheet" type="type/css" href="konsultasi.css">


<div id="Content">
	<ul>		
		
		<li id="side_bar">
			<ul>
				<li>
					<div id="image_konsultasi"></div> 			
				</li>
			</ul>
			<ul align="center" id="submenu_koneksi2">
				<form method="get" name="buatbaru">
				<li2><a href="buatpesan.php" > Simpan ke Draf, Buat Baru </a></li2><br><br>
				</li2>
				</form>
			</ul> <br>
			<ul align="center" id="submenu_koneksi">
				<li><a href="kotakmasuk.php">Jawaban Dokter</a></li>
				<li> <a href="tambahkoneksi.php"> Draf </a></li>
				<li> <a href="pesanterkirim.php"> Konsultasi Lama</a></li>		
			</ul>
		</li>
		
		<li id="container_bar1">
		
			<label>
			   <select id="dokter" placeholder="Pilih Dokter dari Koneksi" value="harga" name="harga">
					<option >Pilih Dokter dari Koneksi</option>
					<option >dr. Rifki  Afina</option>
					<option >dr. Alifa Nurani</option>
					<option >dr. Salvian Reynaldi</option>
					<option >dr. Fathan Adi P.</option>
					<option >dr. Aldi Doanta</option>
				</select> 
			</label><br>
				<input id="form" placeholder="Judul Konsultasi" type="text" name="almt"/><br />
				<textarea cols="40" rows="5" id="pesan" type="text" name="kab"/> </textarea>
			<li>
			<li id="container_bar">	
				<form method="get"> <input id="tombolkartu" name="simpan" type="submit" value="simpan"   /> 
				<form method="get"> <input id="tombolskip" name="kirim" type="submit" value="kirim" onclick="window.location='pesanterkirim.php'; return false; "   />
		
		</li>
	</ul>
</div>

<?php
	include 'footer.php';
	
	if (isSet($_GET['simpan'])) {
		echo'<script type="text/javascript">
				alert("Pesan Berhasil Didimpan !");
				history.back();
			 </script>';
	}
	
	if (isSet($_GET['buatbaru'])) {
		echo'<script type="text/javascript">
				alert("Pesan Berhasil Didimpan !");
				history.back();
			 </script>';
	}
	
	if (isSet($_GET['kirim'])) {
		echo'<script type="text/javascript">
				alert("Pesan Berhasil Didimpan !");
				history.back();
			 </script>';
	}
	?>
