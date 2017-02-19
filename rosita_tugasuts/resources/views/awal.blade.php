@extends('tamplates.index')
@section('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Operasi CRUD</title>
<style>
div.container {
	width:100px;
	border: 1px solid gray;
}
header, footer {
	padding: 1em;
	color:#FFFFFF;
	background-color:#12c8ef;
	clear:left;
	text-align :center;
}
nav {
	float:left; 
	max-width: 160px;
	margin:0;
	padding:1em;
}
nav ul {
	list-style-type:none;
	padding:0;
}
nav ul a{
	text-decoration:none;
}
artitle {
	margin-left:170px;
	border-left:1px solid gray;
	padding:1em;
	overflow:hidden;
}
</style>
<script>
	function edit_id(id){
		if(confirm('sure to edit ?')){
			window.location.href='simpan.php?edit_id='+id;
			}
		}
		
		function edit_id(id){
			if(confirm('sure to edit ?')){
				window.location.href='index.php?delete_id='+id;
				}
			}
			</script>	
</head>
<body>
<div class="Container">
 <!--Start Bagian Header-->
  <header>
    <h1>Operasi CRUD on LARAVEL</h1>
  </header>
  		<!--End bagian header-->
		<!--start bagian sideNav-->
  <nav>
    <ul>
      <li><b>MENU</b></li>
      <li><a href="#">Menu 1</a></li>
      <li><a href="#">Menu 2</a></li>
      <li><a href="#">Menu 3</a></li>
    </ul>
  </nav>
  <article>
    <table border = "1" width="75%" height="0" border="1" align="center">
      
      <tr><td colspan="5" align="center"><input type="button" value="tambah" /></td></tr> </tr>
      <br></br>
      <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Nim</td>
        <td>Alamat</td>
        <td>Aksi</td>
      </tr>
      <tr>
      	<td>	</td>
      	<td>	</td>
      	<td>	</td>
      	<td>	</td>
      	<td>	</td>
      </tr>
		</table>	
  </article>
  <footer>Rosita_14.111.226</footer>
</div>
</body>
</html>
@stop