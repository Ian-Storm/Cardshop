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
                        @foreach($orders as $order)
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        Id Order {{ $order['id'] }}
                                        <span style="float:right;">
                                        Total: &euro;{{ $order['totalPrice'] }},-
                                        </span>
                                    </div>
                                    @foreach($order['products'] as $data)
                                    <div class="card-body">
                                        <p class="description">
                                            {{ $data['name'] }}
                                        </p>
                                        <p class="description">
                                            {{ $data['set'] }}
                                        </p>
                                        <p class="description">
                                            {{ $data['description'] }}
                                        </p>
                                        <p class="description">
                                            Amount: {{ $data['amount'] }}
                                        </p>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        @endforeach
                    @endif
                    
                    @if (count($orders) <= 0)
                    You have no orders yet!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
