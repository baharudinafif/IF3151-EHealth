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
							<a class="delete" href="#delete"></a>
							<img src='images/1.jpg' height="100px" width="100px">
							<p align="center">Dr Aldi</p>
						</div>						
					</li>
					<li><div id="boxUser1"> 
						<a class="delete" href="#delete"></a>
						<img src='images/2.jpg' height="100px" width="100px">	
							<p align="center">Dr Alifa</p>
					</div>					
					</li>
					<li><div id="boxUser1"> 
						<a class="delete" href="#delete"></a>
						<img src='images/3.jpg' height="100px" width="100px">	
							<p align="center">Dr Rifki</p>					
					</div>
					
					</li>
				</ul>
			</div>
		</li>
	</ul>
	
        <a href="#x" class="overlay" id="delete"></a>
			<div class="popup">
		        <h3>Apakah anda yakin akan menghapus User ini ?</h3>
		        <form name="delete" action="index.php">			               
			        <input type="submit" value="Hapus" id="but1"/>
			    </form>
		        <a class="close" href="#close"></a>
		    </div>
	
</div>
<?php
	include 'footer.php';
	?>
