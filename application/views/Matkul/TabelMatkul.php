<html>
<head>
	<title>Data Matakuliah</title>
</head>
<body>
	<?php echo "<h2>".$this->session->flashdata('pesan')."</h2>"?>
	<table border="1" style="border-collapse:collapse; width:50%;">
		<tr style="background:gray;">
			<th>Kode Mata Kuliah</th>
			<th>Nama Mata Kuliah</th>
			<th>Jumlah SKS</th>
			<th>Action</th>
		</tr>
	<?php foreach($data as $d){ ?>
		<tr>
			<td><?php echo $d ['ID_mk'] ?></td>
			<td><?php echo $d ['Nama_mk'] ?></td>
			<td><?php echo $d ['Jumlah_sks'] ?></td>
			<td>
				<a href="<?php echo base_url()."/Jadwal/update/".$d['ID_mk']; ?>">Edit</a> ||
				<a href="<?php echo base_url()."/Jadwal/delete/".$d['ID_mk']; ?>">Delete</a>
			</td>
		</tr>
	<?php } ?>
	</table>
	<a href="<?php echo base_url()."index.php/Jadwal/insert";?>">Tambah Data</a>
</body>
</html>