@extends('master')

@section('content-top')
        @if(env('SCRIPT_TYPE', 'movie') != "movie")
        @include('template.category-word')
        @endif
        @include('template.slide')
@endsection

@section('content')
        @include('template.content-main', ['title' => (!empty($category_select->title_category_eng) ? $category_select->title_category_eng : $title_category_eng)." ".(!empty($category_select->title_category) ? $category_select->title_category : '')])
@endsection

@section('content-right')
        @include('template.content-right')
        @include('template.ads.ads-right')
@endsection
