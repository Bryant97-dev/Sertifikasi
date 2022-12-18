@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title>AddLoan</title>
</head>
<body>
 
	<h2>AddLoan</h2>
 
	<a href="/loan"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/loan/store" method="post">
		{{ csrf_field() }}
		Title <select name = "title" id="title" >
            @foreach($list as $s)
            <option value = "{{$s-> title}}" selected>{{ $s->title }}</option>
            @endforeach
        </select><br/>
		Member <input type="text" name="member" required="required"> <br/>
		Borrow Date <input type="date" id="borrow_date" name="borrow_date" value="{{ $borrow_date }}"> <br/>
		Return Date <input type="date" id="return_date" name="return_date" value="{{ $return_date }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>