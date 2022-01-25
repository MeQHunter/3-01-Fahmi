@extends('layouts.main')

@section('container')
    <h1>Halaman Home </h1>
    <h3> {{ $nama }} </h3>
    <p> {{ $email }}
    <img src="image/{{ $gambar }}" alt="{{ $nama }}" width="200px">    
@endsection