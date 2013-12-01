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
					<span id="tabbaca">28 Oktober 2013 puku 09:20 <br></span> 
					<span id="tabbaca"> dr. Rifki Afina <br></span> 
					<span id="tabbaca"> Konsultasi: Pengelihatan Kabur Setiap Malam <br></span> <br>
					<span id="tabbaca"> ____________________________________________________________________________________________ <br></span> <br>
					<span id="tabbaca"> Selamat siang dokter Rifki <br></span> <br>
					<span id="tabbaca"> Saya merasa terganggu dengan pengelihatan saya setiap malam,  <br></span> 
					<span id="tabbaca"> mata saya tidak jelas/kabur walaupun saya sudah memakai kacamata <br></span> 
					
					
					
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
