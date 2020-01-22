@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="product-info">
                    <h3>{{$product->name}}</h3>
                <div class="product-desc">
                    <h4>{{$product->set}}</h4>
                    <p>{{$product->description}}</p>
                    <strong class="price">€{{$product->price}}</strong>
                </div>
                <submit type="button">Buy</submit> 
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
