@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title>AddBook</title>
</head>
<body>
 
	<h2>AddBook</h2>
 
	<a href="/book"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/book/store" method="post">
		{{ csrf_field() }}
		title <input type="text" name="title" required="required"> <br/>
		Author <input type="text" name="author" required="required"> <br/>
		Page <input type="number" name="page" required="required"> <br/>
		Publication Year <textarea name="publication_year" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>
@endsection