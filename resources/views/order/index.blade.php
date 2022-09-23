@extends('layout')

@section('content')
    <a href="/order/create" class="btn btn-primary">Add Order</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->title }}</td>
                <td>{{ $order->price }}</td>
                <td>{{ $order->created_at }}</td>
                <td>{{ $order->udpdated_at }}</td>
                <td>
                    <a href="/order/{{ $order->id }}/edit">Update</a>
                    <a href="/order/{{ $order->id }}/delete">Delete</a>
                    <a href="/order/{{ $order->id }}/show">Show</a>
                </td>
            </tr>
        @empty
            <p>Empty</p>
        @endforelse
        </tbody>
    </table>
@endsection()