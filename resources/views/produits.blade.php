@extends('layouts.base')

@section('content')
    <h1>salut {{$name}} vous êtes dans la page produits 👾</h1>
    
    <ul>
    @foreach ($numbers as $number)
      <li>{{$number}}</li>
    @endforeach
    </ul>
@endsection