@extends('layouts.app')

@section('title')
     Services
@endsection

@section('content')

        <h1>Welcome to the services page</h1>
                <div class="well">
                        <h2>{{$product->product_name}}</h2>
                        <h3>{{$product ->price}}</h3>
                     <p>{{$product->product_description}}</p>
                     <hr>
                        <h6>{{$product->created_at}}</h6>
                   
                </div>

       
       
@endsection   