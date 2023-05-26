@extends('core::layouts.master')

@section('content')
    {{-- <link rel="stylesheet" href="{{ asset('themes/Theme0/assets/css/theme0.css') }}"> --}}
    <h1>Hello World</h1>
    <p>
        This view is loaded from module: {!! config('core.name') !!}
        <br>
        
        Current theme is: {{ config('core.theme.theme_name') }}
    </p>
@endsection
