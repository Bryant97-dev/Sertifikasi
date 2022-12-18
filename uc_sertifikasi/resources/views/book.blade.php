
@extends('layouts.app')
@section('content')


<!DOCTYPE html>

<html>
<head>
	<title>Katalog Buku</title>
</head>
<body>
 

	<h3>Katalog Buku</h3>
 
	<a href="/book/addbook"> + Tambah Buku Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Title</th>
			<th>Author</th>
			<th>Page</th>
			<th>Publication Year</th>
			<th>Opsi</th>
		</tr>
		@foreach($book as $p)
        
		<tr>
			<td>{{ $p->title }}</td>
			<td>{{ $p->author }}</td>
			<td>{{ $p->page }}</td>
			<td>{{ $p->publication_year }}</td>
			<td>
				<a href="/book/edit/{{ $p->book_id }}">Edit</a>
				|
				<a href="/book/delete/{{ $p->book_id }}">Hapus</a>
			</td>
		</tr>
        
		@endforeach
	</table>
 
 
</body>


@endsection
