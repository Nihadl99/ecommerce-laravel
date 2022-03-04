@extends('layouts.base')
@section('content')
  <a href="/test/product/creer">ajouter un produit</a>
  <div>
      @foreach ($collection as $item)
           <h1>{{product->title}}</h1>
            <a href="/test/product/{{$product->id}}">Voir</a>
      @endforeach

  </div>
    
@endsection