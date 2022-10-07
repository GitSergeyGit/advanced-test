@extends('layout')

@section('content')
    <h1>{{ $product->name }}</h1>
    <ul>
        <li>
            created: {{ $product->created_at }}
        </li>
        <li>
            update: {{ $product->update_at }}
        </li>
    </ul>
@endsection()