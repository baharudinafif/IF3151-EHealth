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
				<li> <a href="tambahkoneksi.php"> Tambah Koneksi </a></li>
				<li> <a href="#"> Permintaan Koneksi </a></li>		
			</ul>
		</li>
		
		<li id="container_bar">
			<div id="main3">
				<ul>
					<li class="NamaSubMenu">PERMINTAAN KONEKSI</li>
				</ul>
				
				<ul>
					<li>
						<div id="boxUser2">
							<a class="delete" href="#delete"></a>
							<img src='images/4.jpg' height="100px" width="100px">
							<div id="acceptNama"> 
								<ul>
									<li>										
										<a class="accBut" href="#accept"></a>
									</li>
									<li>
										<p>Dr Fathan</p>
									</li>
								</ul>							
							</div>
						</div>						
					</li>
					
					<li><div id="boxUser2"> 
							<a class="delete" href="#delete"></a>
							<img src='images/5.jpg' height="100px" width="100px">	
						<div id="acceptNama"> 
							<ul>
								<li>
										<a class="accBut" href="#accept"></a>
								</li>
								<li>
									<p>Dr Salvian</p>
								</li>
							</ul>							
						</div>
					</div>					
					</li>
					
					<li>
						<div id="boxUser2"> 
							<a class="delete" href="#delete"></a>
							<img src='images/6.jpg' height="100px" width="100px">	
							<div id="acceptNama"> 
								<ul>
									<li>
										<a class="accBut" href="#accept"></a>
									</li>
									<li>
										<p>Dr Alif</p>
									</li>
								</ul>							
							</div>
						</div>
					</li>
			</div>
		</li>
	</ul>
	
	        <a href="#x" class="overlay" id="delete"></a>
			<div class="popup">
		        <h3>Apakah anda yakin akan menghapus permintaan relasi dari User ini ?</h3>
		        <form name="delete" action="index.php">			               
			        <input type="submit" value="Hapus" id="but1"/>
			    </form>
		        <a class="close" href="#close"></a>
		    </div>
		    
		    <a href="#x" class="overlay" id="accept"></a>
			<div class="popup">
		        <h3>Apakah anda yakin akan menerima permintaan relasi dari User ini ?</h3>
		        <form name="delete" action="index.php">			               
			        <input type="submit" value="Terima" id="but1"/>
			    </form>
		        <a class="close" href="#close"></a>
		    </div>
	
</div>
<?php
	include 'footer.php';
	?>
