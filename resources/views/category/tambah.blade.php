@extends('layouts.master')
@section('title')

halaman tambah kategori
@endsection
@section('content')
<form method="post" action="/category">
    @csrf
    <div class="form-group">
      <label>Nama Kategori</label>
      <input type="text" name="name" class="form-control">
    </div>
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>kategori deskripsi</label>
     <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection