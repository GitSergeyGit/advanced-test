@extends('layout')

@section('content')
    <form action="/order/store" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title"
                   value="{{ $_SESSION['data']['title'] ?? '' }}">

            @isset($_SESSION['errors']['title'])
                @foreach($_SESSION['errors']['title'] as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endisset
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price"
                   value="{{ $_SESSION['data']['price'] ?? '' }}">

            @isset($_SESSION['errors']['price'])
                @foreach($_SESSION['errors']['price'] as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endisset
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">User</label>
            <select name="user_id" id="user_id">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->username }} ({{ $user->email }})</option>
                @endforeach
            </select>

            @isset($_SESSION['errors']['user_id'])
                @foreach($_SESSION['errors']['user_id'] as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endisset
        </div>

        <div class="mb-3">
            <label for="products" class="form-label">Products</label>
            <select name="products[]" id="products" multiple>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>

            @isset($_SESSION['errors']['products'])
                @foreach($_SESSION['errors']['products'] as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endisset
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @php
        unset($_SESSION['errors']);
        unset($_SESSION['data']);
    @endphp
@endsection()