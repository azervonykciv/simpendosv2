<html>
<head>
	<title>Insert Data Mata Kuliah</title>
</head>
<body>
	<form method="POST" action="<?php echo base_url()."index.php/Jadwal/do_update"; ?>">
	<table>
		<tr>
			<td>Kode Mata Kuliah</td>
			<td><input type="text" name="ID_mk" value="<?php echo $ID_mk; ?>" readonly /></td>
		</tr>

		<tr>
			<td>Nama Mata Kuliah</td>
			<td><input type="text" name="Nama_mk" value="<?php echo $Nama_mk; ?>" /></td>
		</tr>

		<tr>
			<td>Jumlah SKS</td>
			<td><input type="text" name="Jumlah_sks" value="<?php echo $Jumlah_sks; ?>" /></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="btnSubmit" value="Simpan" /></td>
		</tr>
	</table>
	</form>
</body>
</html>