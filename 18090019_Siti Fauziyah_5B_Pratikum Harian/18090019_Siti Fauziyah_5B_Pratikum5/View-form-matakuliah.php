<html>
<head>
	<title> form input mata kuliah </title>
</head>

<body>
	<center>
	<form action="<?= base_url('MatakuliahValidation/cetak'); ?>" method="post">

		<table>


			<tr>
				<th colspan="3">
					form input data mata kuliah
				</th>
			</tr>

			<tr>
				<th colspan="3"> 
				</th>
			</tr>

			<tr>
				<th> kode matkul </th>
				<th> : </th>
				<td>
					<input type="text" name="kode" id="kode">
				</td>
			</tr>

			<tr>
				<th>nama matkul</th>
				<th> : </th>
				<td>
					<input type="text" name="nama" id="nama">
				</td>
			</tr>

			<tr>
				<th> SKS </th>
				<td> : </td>
				<td>
					<select name="sks" id="sks">
						<option value=""> Pilih SKS </option>
						<option value="2"> 2 </option>
						<option value="3"> 3 </option>
						<option value="4"> 4 </option>	
					</select>
				</td>
			</tr>

			<tr>
				<th colspan="3" align="center">
					<input type="submit" value="submit">
				</th>
			</tr>

		</table>
	</form>
	</center>



</body>
</html>