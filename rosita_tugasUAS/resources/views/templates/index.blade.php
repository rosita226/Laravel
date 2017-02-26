<!DOCTYPE html>
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
	background-color:#20B2AA;
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
	<div>
	<header>
		@include('templates.header')
	</header>
	<article>
		@yield('content')
	</article>
	<footer>
		@include('templates.footer')
	</footer>
	</div>
</body>
</html>