@extends('layout.app')
@section('title', 'Lista de Produtos')
@section('content')
    <h1>Produtos </h1>
    <ul>
        @foreach ($produtos as $produto)
        <li><a href="{{URL::to('produtos/')}}/{{$produto->id}}">{{$produto->titulo}}<a/></li>
        @endforeach
     </ul>
@endsection
