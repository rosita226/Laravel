@extends('Project.index')
@section('content')
{{ $showcontent }}
<html>
	<head><title></title>
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