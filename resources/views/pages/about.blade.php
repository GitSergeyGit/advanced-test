@extends('layout')

@section('title', 'About page')

@section('breadcrumbs')
    @include('partials.breadcrumbs', [
        'links' => [
            [
                'link' => '/',
                'name' => 'Home',
            ], [
                'link' => 'about.php',
                'name' => 'About',
            ]
        ]
    ])
@endsection

@section('content')
    <p>{{ $title }}</p>
@endsection
