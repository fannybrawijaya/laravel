@extends('layouts.master')
@section('title')

halaman tampil kategori
@endsection
@section('content')

<a href="/category/create" class="btn btn-primary btn-sm my-2">tambah</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">no</th>
        <th scope="col">nama</th>
        <th scope="col">aksi</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($categories as $key => $item)
            <tr>
                <td>{{$key +1}}</td>
                <td>{{$item->name}}</td>
                <td>
                  <form action="/category/{{$item->id}}" method="post">
                    @csrf
                    @method('delete')
                    <a href="/category/{{$item->id}}" class="btn btn-info btn-sm">detail</a>
                    <a href="/category/{{$item->id}}/edit" class="btn btn-warning btn-sm">edit</a>
                      <input type="submit" value="hapus" class="btn btn-danger btn-sm">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
              <td>Data kategori kosong</td>
            </tr>
            
        @endforelse
     
    </tbody>
  </table>

@endsection