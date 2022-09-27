@extends('layout')

@section('content')
    <h1>{{ $product->name }}</h1>
    <ul>
        <li>
            created: {{ $order->created_at }}
            update: {{ $order->update_at }}
        </li>
    </ul>
@endsection()