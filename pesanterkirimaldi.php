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
					<span id="tabbaca">30 Oktober 2013 puku 13:20 <br></span> 
					<span id="tabbaca"> dr. Aldi Doanta  <br></span> 
					<span id="tabbaca"> Konsultasi: Flu Berkelanjutan <br></span> <br>
					<span id="tabbaca"> ____________________________________________________________________________________________ <br></span> <br>
					<span id="tabbaca"> Selamat siang dokter Aldi <br></span> <br>
					<span id="tabbaca">Dokter, sudah seminggu ini saya terus menerus mengalami flu berat <br></span> 
					<span id="tabbaca">saya merasa sangat terganngu karena aktivitas saya sedang sangat padat. <br></span> <br> <br>
					<span id="tabbaca">Saya sangat bingung apakah saya perlu kontrol atau hanya meminum obat saja?<br></span>
					<span id="tabbaca">Saya berharap penyakit saya ini segera sembuh <br></span> <br>
					<br>
					<span id="tabbaca"> mohon bantuannya <br></span>
					<span id="tabbaca"> terimakasih <br></span>
					
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
