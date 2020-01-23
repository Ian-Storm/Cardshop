@extends('layouts.app')

@section('content')
<!-- Shell -->
<div class="shell">
  <!-- Header -->
  <div id="header">
  </div>
  <!-- End Header -->
  <!-- Main -->
  <div id="main">
    <div class="cl">&nbsp;</div>
    <!-- Content -->
    <div id="content">
      <!-- Products -->
      <div class="products">
        <div class="cl">&nbsp;</div>
        <ul>
          @foreach($products as $product)
          <li> <a href="{{route('productview', [$product->category_id, $product->id])}}"><img src="{{ asset('images/'. $product->image) }}" alt="" />
            <div class="product-info">
              <h3>{{$product->name}}</h3>
              <div class="product-desc">
                <h4>{{$product->set}}</h4>
                <p>{{$product->description}}</p>
                <strong class="price">€{{$product->price}}</strong> </div>
            </div>
            </a>
          </li>
          @endforeach
        </ul>
        <div class="cl">&nbsp;</div>
      </div>
      <!-- End Products -->
    </div>
    <!-- End Content -->
    <!-- Sidebar -->
    <div id="sidebar">
      <!-- Categories -->
      <div class="box categories">
        <h2>Categories <span></span></h2>
        <div class="box-content">
          <ul>
          @foreach($categories as $category)
            <li @if($loop->last) class="last" @endif><a href="{{route('categories', $category->id)}}">{{$category->name}}</a></li>
          @endforeach
          </ul>
        </div>
      </div>
      <!-- End Categories -->
    </div>
    <!-- End Sidebar -->
    <div class="cl">&nbsp;</div>
  </div>
  <!-- End Main -->
</div>
<!-- End Shell -->
@endsection
