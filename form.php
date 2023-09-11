<html> 
<head>
	<title>Formulir</title>
</head> 
<body>
	<h2>BIODATA</h2>
	
<form method="post" action="proses.php">
	<table>
		<tr>
			<td>Nama</td> 
			<td>:</td> 
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td> 
			<td><input type="text" name="nim"></td> 
			<td>Jenis Kelamin</td> 
			<td>:</td> 
			<td>
				<input type="radio" name="jenkel" value="p"> Pria
				<input type="radio" name="jenkel" value="w"> Wanita
			</td>
		</tr> 
		<tr>
			<td>Agama</td> 
			<td>:</td> 
			<td>
				<select name="agama"> 
					<option value="islam">Islam</option> 
					<option value="kristen">Kristen</option> 
					<option value="budha">budha</option>
				</select>
			</td>
		</tr>
	</table>
</form>
</body>
</html>