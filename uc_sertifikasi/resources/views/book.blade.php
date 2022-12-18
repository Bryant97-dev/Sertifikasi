
@extends('layouts.app')
@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Katalog <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="/loan">Peminjaman</a>

    </div>
  </div>
</nav>


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
