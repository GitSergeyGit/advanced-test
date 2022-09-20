@extends('layout')

@section('title', 'Home page')

{{--@section('content')--}}
{{--    <p>{{ $title }}</p>--}}
{{--    <ul>--}}
{{--        @foreach($orders as $order)--}}
{{--            <li>Title: {{ $order->title }} => Price: {{ $order->price }}</li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
{{--@endsection--}}

@push('customScript')
    <script src="/example.js"></script>
@endpush

@section('breadcrumbs')
    @include('partials.breadcrumbs', [
        'links' => [
            [
                'link' => '/',
                'name' => 'Home',
            ]
        ]
    ])
@endsection

@section('content')
    <p>{{ $title }}</p>

    <ul>
        @forelse($orders as $order)
            @if($loop->first)
                <hr>
            @endif

            <p>remaining: {{ $loop->remaining }}</p>
            <li>Title: {{ $order->title }} => Price: {{ $order->price }}</li>

            @if($loop->last)
                <hr>
            @endif
        @empty
            <p>Empty!!!!!</p>
        @endforelse

        @isset($text)
            {{ $text }}
        @endisset

    </ul>
@endsection

@section('footer')
    @parent
    child footer
@endsection
