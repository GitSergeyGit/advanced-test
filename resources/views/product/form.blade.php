@extends('layout')
@section('content')
{{ $isCreate }}
    <form action="@if($isCreate) /product/store @else /product/update @endif" method="post">
        <div class="mb-3">
            @if(!$isCreate)
                <input type="hidden" id="id" name="id" value="{{ $product->id }}">
            @endif

            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $_SESSION['data']['name'] ?? $product->name }}">

            @isset($_SESSION['errors']['title'])
                @foreach($_SESSION['errors']['title'] as $error)
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