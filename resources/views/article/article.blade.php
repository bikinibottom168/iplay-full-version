@extends('master')

@section('content-top')
    
@endsection

@section('content')
    @include('template.article', ['news' => $news])
@endsection

@section('content-right')
    {{-- @include('template.movie.random', ['movie_respon' => $movie, 'random_movie' => $random_movie]) --}}
    @include('template.content-right')
    @include('template.ads.ads-right')
@endsection

