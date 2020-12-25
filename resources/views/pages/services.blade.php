@extends('layouts.app')

@section('title')
     Services
@endsection

@section('content')

        <h1>Welcome to the services page</h1>
        @foreach($products as $product)
                <div class="well">
                        <h2><a href="/show/{{$product ->id}}">{{$product->product_name}}</h2>
                        <h5>{{$product ->price}}</h5>
                     {{--   <p>{{$product->product_description}}</p>
                        <h4>{{$product->created_at}}</h4>  --}}
                   
                </div>

        @endforeach
        {{$products->links()}} 
@endsection   