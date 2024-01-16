@extends('layouts.main')

@section('container')
    <h4> {{ $nama }} </h4>
    <h4> {{ $email }} </h4>
    <h4> <img src="assets/{{ $gambar }}" alt="" style="width: 100px; height: 100px"> </h4>
@endsection
