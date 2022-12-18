@extends('layouts.app')
@section('content')






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
@endsection