@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if (count($products) >= 1)
        	@foreach($products as $product)
          <ul>
              <h3>{{$product ['product']['name']}}</h3>
              <strong class="price">€{{$product ['product']['price']}}</strong>
             <h3><a href="/DeleteAmount/category/{{$product['product']['category_id']}}/product/{{$product['product']['id']}}" type="button" class="btn btn-light">-</a>
              {{$product ['amount']}}
              <a href="/AddAmount/category/{{$product['product']['category_id']}}/product/{{$product['product']['id']}}" type="button" class="btn btn-light">+</a></h3>
            </a>
          </ul>
        	@endforeach
        </div>
            <a href="/SaveOrder/category/{{$product['product']['category_id']}}/product/{{$product['product']['id']}}" class="btn btn-primary">Complete order</a>
    </div>
        @else
    		<h1>No products are in the shopping cart!<h1>
		@endif
</div>
@endsection
