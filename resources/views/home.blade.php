@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Orders</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @else
                    @endif

                    @foreach($orders as $order)
                        Order: {{$order->id}}</br>
                        Ordered at: {{$order->created_at}}</br>
                        Total price: &euro;{{$order->total}}</br></br>
                        <ul>
                            @foreach($order->orderDetails as $orderDetail)
                                <span>Product name: {{$orderDetail->product->name}}</br></span>
                                <span>Product price: &euro;{{$orderDetail->product->price}}</br></span>
                                <span>Product amount: {{$orderDetail->amount}}</br></span></br>
                            @endforeach
                            <hr>
                        </ul>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
