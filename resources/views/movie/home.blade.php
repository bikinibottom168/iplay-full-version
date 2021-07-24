@extends('master')

@section('content-top')
        @if(env('SCRIPT_TYPE', 'movie') != "movie")
        @include('template.category-word')
        @endif
        @include('template.slide')
@endsection

@section('content')
        @include('template.content-main', ['title' => env('SCRIPT_TYPE', '')  == "av" ? "หนังโป๊" : (env('SCRIPT_TYPE', '')  == "anime" ? "อนิเมะ" : env('SCRIPT_TYPE', '')  == "movie" ? "หนังออนไลน์" : "" )])
@endsection

@section('content-right')
        @include('template.content-right')
        @include('template.ads.ads-right')
@endsection
