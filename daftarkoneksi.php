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
				<li><a href="#">Daftar Koneksi</a></li>
				<li> <a href="tambahkoneksi.php"> Tambah Koneksi </a></li>
				<li> <a href="permintaankoneksi.php"> Permintaan Koneksi </a></li>		
			</ul>
		</li>
		
		<li id="container_bar">
			<div id="main2">
				<ul>
					<li class="NamaSubMenu">DAFTAR KONEKSI</li>
				</ul>

				<ul>
					<li>
						<div id="boxUser1">
							<button class="delete" onclick="#delete"></button>
							<img src='images/1.jpg' height="100px" width="100px">
							<p align="center">Dr Aldi</p>
						</div>						
					</li>
					<li><div id="boxUser1"> 
						<button class="delete" onclick="#delete"></button>
						<img src='images/2.jpg' height="100px" width="100px">	
							<p align="center">Dr Alifa</p>
					</div>					
					</li>
					<li><div id="boxUser1"> 
						<button class="delete" onclick="#delete"></button>
						<img src='images/3.jpg' height="100px" width="100px">	
							<p align="center">Dr Rifki</p>					
					</div>
					
					</li>
				</ul>
			</div>
		</li>
	</ul>
</div>
<?php
	include 'footer.php';
	?>
