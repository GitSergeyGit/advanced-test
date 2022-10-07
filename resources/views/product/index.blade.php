@extends('layout')

@section('content')
    @isset($_SESSION['success'])
        <div class="alert alert-success" role="alert">
            {{ $_SESSION['success'] }}
        </div>
    @endisset
    @php
        unset($_SESSION['success']);
    @endphp
    <a href="/product/create" class="btn btn-primary">Add Product</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Products</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{!! $product->orders->pluck('title')->join('<br>') !!}</td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->udpdated_at }}</td>
                <td>
                    <a href="/product/{{ $product->id }}/edit">Update</a>
                    <a href="/product/{{ $product->id }}/delete">Delete</a>
                    <a href="/product/{{ $product->id }}">Show</a>
                </td>
            </tr>
        @empty
            <p>Empty</p>
        @endforelse
        </tbody>
    </table>
@endsection()