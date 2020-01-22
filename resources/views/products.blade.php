<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cardshop Ian</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<!-- Shell -->
<div class="shell">
  <!-- Header -->
  <div id="header">
    <h1 id="logo"><a href="#">Cardshop Ian</a></h1>
    <!-- Cart -->
    <div id="cart"> <a href="#" class="cart-link">Your Shopping Cart</a>
      <div class="cl">&nbsp;</div>
      <span>Articles: <strong>0</strong></span> &nbsp;&nbsp; <span>Cost: <strong>€00.00</strong></span> </div>
    <!-- End Cart -->
    <!-- Navigation -->
    <div id="navigation">
      <ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">My Account</a></li>
      </ul>
    </div>
    <!-- End Navigation -->
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
          <li> <a href="{{route('productview', $product->id)}}"><img src="{{ asset('images/'. $product->image) }}" alt="" />
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
            <li @if($loop->last) class="last" @endif><a href="#">{{$category->name}}</a></li>
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
  <!-- Side Full -->
  <div class="side-full">
    
  </div>
  <!-- End Side Full -->
  <!-- Footer -->
  <div id="footer">
    <p class="left"> <a href="#">Home</a> <span>|</span> <a href="#">My Account</a> <span>|</span> <a href="https://www.youtube.com/channel/UCTVyzYP9_fkc_KxrezbIF-A">Contact</a> <p class="right">  @Adrelian </p>
    
  </div>
  <!-- End Footer -->
</div>
<!-- End Shell -->
</body>
</html>
