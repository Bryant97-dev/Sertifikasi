
@extends('layouts.app')
@section('content')


<html>
<head>
	<title>EditBook</title>
</head>
<body>
 
	<h2>EditBook</h2>
 
	<a href="/book"> Kembali</a>
	
	<br/>
	<br/>
    
    @foreach($book as $p)
	<form action="/book/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->book_id }}"> <br/>
		Title <input type="text" required="required" name="title" value="{{ $p->title }}"> <br/>
		Author <input type="text" required="required" name="author" value="{{ $p->author }}"> <br/>
		Page <input type="number" required="required" name="page" value="{{ $p->page }}"> <br/>
		Publication Year <textarea required="required" name="publication_year">{{ $p->publication_year }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
        
	</form>
    @endforeach
    




 
</body>
</html>
@endsection