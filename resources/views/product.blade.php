@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <img src="{{ asset('storage/myimages/cards/' . $product->image) }}" alt="" />
                <div class="">
                <ul style="list-style-type:none;">
                    <h3>Information</h3>
                    <li>{{$product->name}}</li>
                    <li>{{$product->set}}</li>
                    <li>{{$product->description}}</li>
                    <strong class="price">€{{$product->price}}</strong>
                </ul>
                    <a href='/AddItem/category/{{$product->category_id}}/product/{{$product->id}}' class="btn btn-primary">Buy</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
