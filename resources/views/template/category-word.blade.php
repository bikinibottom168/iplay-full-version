@php
    // ปิดเมนูด้านขวา
    $disable_right = 0;
@endphp
<div class="col-lg-20 col-20">
    <ul class="text-center" style="width: 100%; margin-block-start: 0px; padding-inline-start: 0px;">
        <li class="letters d-inline-block">
            <a href="{{ route('letters_number') }}" class='list-button-category'>#</a> 
        </li>
        @foreach(range('A', 'Z') as $key)
        <li class="letters d-inline-block">
            <a href="{{ route('letters', ['letters' => $key]) }}" class='list-button-category'>{{ $key }}</a> 
        </li>
        @endforeach
    </ul>
</div>
<style>
    a.list-button-category {
        border-radius: 20px;
        padding: 6px 12px;
        color:  #fff;
        background-color: {{ env('SCRIPT_PRIMARY_COLOR', '') }};
        text-decoration: none;
        transition: 0.3s;
        width: 3rem;
        height: 3rem;
        line-height: 3rem;
    }
    a.list-button-category:hover {
        opacity: 0.5;
    }
</style>