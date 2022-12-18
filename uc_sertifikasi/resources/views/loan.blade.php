@extends('layouts.app')
@section('content')


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Peminjaman <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="/book">Katalog</a>

    </div>
  </div>
</nav>



<!DOCTYPE html>
<html>
<head>
	<title>Peminjam</title>
</head>
<body>
 
	<h3>Data Peminjam</h3>
 
	<a href="/loan/addloan"> + Tambah Peminjam Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Title</th>
			<th>Member</th>
			<th>Borrow Date</th>
			<th>Return Date</th>
			<th>Option</th>
		</tr>
		@foreach($loan as $p)
        
		<tr>
			<td>{{ $p->title }}</td>
			<td>{{ $p->member}}</td>
			<td>{{ $p->borrow_date }}</td>
			<td>{{ $p->return_date }}</td>
			<td>
				<a href="/loan/edit/{{ $p->loan_id }}">Edit</a>
				|
				<a href="/loan/delete/{{ $p->loan_id }}">Hapus</a>
			</td>
		</tr>
        
		@endforeach
	</table>
 
 
</body>