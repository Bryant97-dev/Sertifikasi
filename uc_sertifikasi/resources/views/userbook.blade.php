@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title>Katalog Buku</title>
</head>
<body>
 
	<h3>Katalog</h3>

	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Title</th>
			<th>Author</th>
			<th>Page</th>
			<th>Publication Year</th>
		</tr>
		@foreach($book as $p)
        
		<tr>
			<td>{{ $p->title }}</td>
			<td>{{ $p->author }}</td>
			<td>{{ $p->page }}</td>
			<td>{{ $p->publication_year }}</td>
		</tr>
        
		@endforeach
	</table>
 
 
</body>