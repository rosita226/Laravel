@extends('tamplates.index')
@section('content')

<html>
	<head><title></title>
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
	</head>
		<body>
	<header>
    <h1>Operasi CRUD on LARAVEL</h1>
  </header>
  <nav>
	</nav>
	<article>
	<form method = "post"
		<table weidht = "60" align = "center">
		<tr>
		<th align = "center" colspan = "2">Login<a href = "daftar.php"> daftar </a> </th>
		</tr>
		<tr> <br></br>
			<td> username </td>
			<td> <input type = "text" name = "username" size = "80"></td>
		</tr>
		<tr>
			<td> <br></br>password </td>
			<td> <input type = "text" name = "password" size = "80"></td>
		</tr>
		<tr>
			<a href="{{URL::to('/add')}}"><td colspan = "2" align = "right"> <br></br><input type = "submit" value = "login" name = "login"> <input type = "submit" value = "batal" name = "batal"></td>
		</tr>
		</table>
		</form>
	</article>
	
<footer>
<h2>Rosita_14.111.226</h2>
<h3> "14 TIF RM" </h3>
</footer>
</body>
</html>
@stop