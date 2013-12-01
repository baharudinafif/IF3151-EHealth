<?php
	include 'header.php';
	?>
<link rel="stylesheet" type="text/css" href="css/jadwal.css">
 <link rel="stylesheet" href="datepicker/themes/base/jquery-ui.css">
<script src="datepicker/jquery-1.9.1.js"></script>
<script src="datepicker/ui/jquery-ui.js"></script>

 <script>
 $(function()
 {
	var opts = 
	{
		showOn : "button",
		buttonText: "Lihat/Sembunyikan Datepicker"
	};
	$( ".tgl" ).datepicker(opts);
});
</script>

<div id="Content">
	<ul>		
		<li id="side_bar" style="width:30%">
			<ul>
			<li>
				<img src = "images/ico_jadwal.png" alt="" height="100%" width="100%">
			</li>
			</ul>
		</li>
		
		<li id="container_bar">
			<form method="post" action="index.php">
			<table>
				<tr>
					<td> Pilih dokter dari koneksi </td>
					<td>
					<select id="dropdown">
						<option value="0">PIlih dokter</option>
						<option value="1">Dr.1</option>
						<option value="2">Dr.2</option>
						<option value="3">Dr.3</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td>Subjek perjanjian</td>
					<td><input type="text" name="Subjek" id="IDUser"></td>
				</tr>
				
				<tr>
					<td>Tanggal</td>
					<td><input type="date" name="Tanggal" id="IDUser" class="tgl"></td>
				</tr>
				
				<tr>
					<td>Lokasi</td>
					<td><input type="text" name="Lokasi" id="IDUser"></td>
				</tr>
				
				<tr>
					<td>Catatan</td>
					<td><textarea rows="4" cols="50" id="textarea"></textarea></td>
				</tr>
				
				<tr>
					<td><input id="butOK" type="submit" value="Kirim"></input></td>
				</tr>
			</table>
			
			</form>
		</li>
	</ul>
</div>
<?php
	include 'footer.php';
	?>
