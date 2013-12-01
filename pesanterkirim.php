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
			</ul>
			<ul align="center" id="submenu_koneksi">
				<li><a href="kotakmasuk.php">Jawaban Dokter</a></li>
				<li> <a href="draf.php"> Draf </a></li>
				<li> <a href="pesanterkirim.php"> Konsultasi Lama</a></li>		
			</ul>
		</li>
		
		<li id="container_bar">
		<?php

	
			echo '<div id="listpesand">
				<form id="listpesanf" name="formregistrasi" >
				<a href="pesanterkirimaldi.php" >
				<div id="image_icon1" > 
				
					<span id="tab1"> 30 Oktober 2013 &nbsp; </span> 
					<span id="tab2"> dr. Aldi Doanta </span> 
					<span id="tab3"> &nbsp; &nbsp; &nbsp; &nbsp;  Konsultasi: Flu Berkelanjutan  </span> 
				</div> 
				</a>
				</form>
				
				</div><br><br>';
				
			echo '<div id="listpesand">
			<form id="listpesanf2" name="formregistrasi" > 
			<a href="pesanterkirimaldi.php" >
			<div id="image_icon5"> 
				<span id="tab1"> 15 Oktober 2013 &nbsp;</span> 
				<span id="tab2"> dr. Salvian Reynaldi</span> 
				<span id="tab3"> Konsultasi: Gatal-Gatal, Disebabkan ...  </span> 
			</div>
			</a>
			</form>
			
			</div><br><br>';

		
		
			echo '<div id="listpesand">
						<form id="listpesanf" name="formregistrasi" > 
						<a href="pesanterkirimaldi.php" >
						<div id="image_icon3">
							<span id="tab1"> 7 Sptember 2013 &nbsp;</span> 
							<span id="tab2"> dr. Rifki Afina </span> 
							<span id="tab3"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Konsultasi: Batuk Berdahak  </span> 
						</div>
						</a>
						</form>
						
						</div><br><br>';
			
			echo '<div id="listpesand">
						<form id="listpesanf2" name="formregistrasi" > 
						<a href="pesanterkirimaldi.php" >
						<div id="image_icon4"> 
							<span id="tab1"> 10 April 2013 &nbsp; &nbsp; &nbsp; &nbsp; </span> 
							<span id="tab2">  dr. Fathan Adi P. </span> 
							<span id="tab3"> &nbsp; &nbsp;  Konsultasi: Mata Berair Seitap Malam  </span> 
						
						</div>
						</a>
						</form>
						
						</div><br><br>';
						
			
						
			?>
			
		
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
