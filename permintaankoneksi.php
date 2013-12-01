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
							<button class="delete" onclick="#delete"></button>							
							<img src='images/4.jpg' height="100px" width="100px">
							<div id="acceptNama"> 
								<ul>
									<li>
										<button class="accept" onclick="#accept"></button>
									</li>
									<li>
										<p>Dr Fathan</p>
									</li>
								</ul>							
							</div>
						</div>						
					</li>
					
					<li><div id="boxUser2"> 
						<button class="delete" onclick="#delete"></button>
						<img src='images/5.jpg' height="100px" width="100px">	
						<div id="acceptNama"> 
							<ul>
								<li>
										<button class="accept" onclick="#accept"></button>
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
							<button class="delete" onclick="#delete"></button>
							<img src='images/6.jpg' height="100px" width="100px">	
							<div id="acceptNama"> 
								<ul>
									<li>
										<button class="accept" onclick="#accept"></button>
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
</div>
<?php
	include 'footer.php';
	?>
