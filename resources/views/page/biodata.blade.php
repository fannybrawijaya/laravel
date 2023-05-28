@extends('layouts.master')
@section('title')

halaman biodata
@endsection
@section('content')
 
<form action="/kirim" method="POST">
    @csrf
    <label>nama depan</label> <br>
    <input type="text" name="Fname" > <br>
    <label>nama belakang</label> <br>
    <input type="text" name="Lname" id="">

    <input type="submit" value="kirim">
</form>   
@endsection
