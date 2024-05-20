@extends('templates.base')

@section('title', "$libro->title - EpiBooks")

@section('content')
    <h1>{{ $libro->title }}</h1>
    <h2>Author: {{ $libro->author }}</h2>
    
@endsection