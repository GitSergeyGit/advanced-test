@extends('layout')

@section('content')
    <h1>{{ $order->title }}</h1>
    <ul>
        <li>
            Price: {{ $order->price }}
            created: {{ $order->created_at }}
            update: {{ $order->update_at }}
        </li>
    </ul>
@endsection()