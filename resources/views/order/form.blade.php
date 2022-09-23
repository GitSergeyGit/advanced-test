@extends('layout')

@section('content')
    <form action="/order/store" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $order->title }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $order->price }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection()