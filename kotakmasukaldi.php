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
				<li2><a href="buatpesan.php">Buat Konsultasi Baru</a></li2><br><br>
				</li2>
			</ul> <br>
			<ul align="center" id="submenu_koneksi">
				<li><a href="kotakmasuk.php">Jawaban Dokter</a></li>
				<li> <a href="draf.php"> Draf </a></li>
				<li> <a href="pesanterkirim.php"> Konsultasi Lama</a></li>		
			</ul>
		</li>
		
		<li id="container_bar">
		
			<div id="listbaca">
				
				<a href="kotakmasukaldi.php" >
				<div id="image_baca1" > 
					<br>
					<span id="tabbaca">30 Oktober 2013 puku 22:59 <br></span> 
					<span id="tabbaca"> dr. Aldi Doanta  <br></span> 
					<span id="tabbaca">(jawab) Konsultasi: Flu Berkelanjutan <br></span> <br>
					<span id="tabbaca"> ____________________________________________________________________________________________ <br></span> <br>
					<span id="tabbaca">Untuk Penyakit flu berkepanjangan seperti itu mungkin disebabkan karena minimnya waktu <br></span> 
					<span id="tabbaca">istirahat dan seringnya beraktivitas di luar ruangan yang berdebu <br></span> <br>
					<span id="tabbaca">Untuk obat, gunakan dahulu obat flu yang dijual bebas di apotek. Jika dalam seminggu <br></span>
					<span id="tabbaca">belum pulih, coba kontrol ke saya <br></span> <br>
					<br>
					<span id="tabbaca">lekas sembuh <br></span>
					<span id="tabbaca">------- <br></span> <br>					
					<span id="tabbaca"> dr. Aldi Doanta  <br></span> 
					<span id="tabbaca"> dokter umum RUmah Sakit D-RABA <br></span> 
					
				</div> 
				</a>
			
				
				</div><br><br>
		
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
	
	if (isSet($_GET['kirim'])) {
		echo'<script type="text/javascript">
				alert("Pesan Berhasil Didimpan !");
				history.back();
			 </script>';
	}
	?>
