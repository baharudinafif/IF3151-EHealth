<?php
	include 'header.php';
	?>

<div id="Content">
	<ul>		
		<li id="side_bar">
			<ul>
				<li>
					<div id="image_relation"></div>
				</li>
			</ul>
			<ul align="center" id="submenu_koneksi">
				<li><a href="daftarkoneksi.php">Daftar Koneksi</a></li>
				<li> <a href="#"> Tambah Koneksi </a></li>
				<li> <a href="permintaankoneksi.php"> Permintaan Koneksi </a></li>		
			</ul>
		</li>
		
		<li id="container_bar">
			<ul>
				<li class="NamaSubMenu">PERMINTAAN KONEKSI</li>
			</ul>
			<div id="main1">
				<form method="get" action="index.php">
					<ul> 
					
						<li align="center"> 
							Masukkan ID User 
							<input type="text" name="IDUser" id="IDUser">
						</li>														
					</ul>														
					<ul align="right">
						<li align="right"><input id="butOK" type="submit" value="OK"></input></li>
					</ul>									
				</form>
			</div>
		</li>
	</ul>
</div>
<?php
	include 'footer.php';
	?>
