@extends('layouts.master')
@section('title')

halaman detail kategori
@endsection
@section('content')

<h1>{{$category->name}}</h1>

<p>{{$category->description}}</p>
@endsection