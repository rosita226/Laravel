@extends('Project.index')
@section('content')
<!DOCTYPE html>
<html>
<html>
<title>Operasi Crud on LARAVEL</TITLE>
</head>
<body>

<div class-"container">
<header> 
<h1>Operasi CRUD on LARAVEL</h1>
</header>

<nav>
	<ul>
	<li><b>MENU</b></li>
	<li><a href ="#">Menu 1</a></li>
	<li><a href ="#">Menu 2</a></li>
	<li><a href ="#">Menu 3</a></li>

	</ul>
</nav>

	</nav>
	<article>
		<table border="1" width="75%" align="center">
			<tr>
				<th>Tambah Data</th>
			</tr>
			<tr>
				<td align=center>No</td>
				<td>:</td>
				<td><input type="text" name="no" size="70"></input></td>
			</tr>
			<tr>
				<td align=center>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="70"></input></td>
			</tr>
			<tr>
				<td align=center>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" size="70"></input></td>
			</tr>
			<tr>
				<td align=center>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" size="70"></input></td>
			</tr>
			<tr>
				<td align=center>Aksi</td>
				<td>:</td>
				<td><input type="text" name="aksi" size="70"></input></td>
			</tr>
			<tr>

				<td colspan="3"><input type="button" value="UPDATE"></input><input type="button" value="BATAL"></input><a href="index.php"><button type="submit">KEMBALI</button></a></td>
			</tr>
		</table>
	</article>


<footer>
<h2>Rosita_14.111.226</h2>
</footer>
</div>
</body>
</html>