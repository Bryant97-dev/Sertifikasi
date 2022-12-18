@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title>EditLoan</title>
</head>
<body>
 
	<h2>EditLoan</h2>
 
	<a href="/loan"> Kembali</a>
	
	<br/>
	<br/>
 
    @foreach($loan as $p)
	<form action="/loan/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->loan_id }}"> <br/>
		Title <select name = "title" id="title" >
            @foreach($list as $s)
            <option value = "{{$s-> title}}" selected>{{ $s->title }}</option>
            @endforeach
        </select><br/>
		Member <input type="text" name="member" value="{{ $p->member}}" required="required"> <br/>
		Borrow Date <input type="date" id="borrow_date" name="borrow_date" value="{{ $p->borrow_date }}"> <br/>
		Return Date <input type="date" id="return_date" name="return_date" value="{{ $p->return_date }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
    @endforeach
 
</body>
</html>
@endsection