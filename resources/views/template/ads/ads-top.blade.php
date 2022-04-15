@php 
if(option_get('banner_setting') == "1")
{
    $col = "col-lg-14 col-md-14 col-14";
}
elseif(option_get('banner_setting') == "2" || option_get('banner_setting') == false)
{
    $col = "col-lg-7 col-md-7 col-8";
}


@endphp

@if(env('SCRIPT_ADS_TOP_LEFT_RIGHT', '0') == "1")
<div class="col-lg-3 col-md-4 col-4 text-left mb-5">
    @foreach($ads_f1 as $k)
        @if($k->show_ads != $show_ads && $k->show_ads != 0)
            @php
                break;
            @endphp
        @endif
            <a href="{{ route('ads_redirect', ['id' => $k->id]) }}" target="_blank">
            @if(strrpos($k->image_ads , 'http') === false)
                <img src="{{ asset($k->image_ads) }}" alt="{{ $k->title_ads }}" class="img-fluid">
            @else
                <img src="{{ $k->image_ads }}" alt="{{ $k->title_ads }}" class="img-fluid">
            @endif
            </a>
    @endforeach
</div>
@endif
@foreach($ads_a as $k)
<div class="{{ $col }} text-center">
    @if($k->show_ads != $show_ads && $k->show_ads != 0)
        @php
            break;
        @endphp
    @endif
        @if($k->type == 1)
        {!! $k->url_ads !!}
        @elseif($k->type == 0)
            <a href="{{ route('ads_redirect', ['id' => $k->id]) }}" target="_blank">
            @if(strrpos($k->image_ads , 'http') === false)
                <img src="{{ asset($k->image_ads) }}" alt="{{ $k->title_ads }}" class="img-fluid">
            @else
                <img src="{{ $k->image_ads }}" alt="{{ $k->title_ads }}" class="img-fluid">
            @endif
            </a>
        @endif
    </div>
@endforeach

@if(count($ads_a) == 1 && option_get('banner_setting') == "2" || option_get('banner_setting'))
<div class="{{ $col }} text-center">
{{-- Blank --}}
</div>
@endif

@if(env('SCRIPT_ADS_TOP_LEFT_RIGHT', '0') == "1")
<div class="col-lg-3 col-md-4 col-4 text-right mb-5">
    @foreach($ads_r1 as $k)
        @if($k->show_ads != $show_ads && $k->show_ads != 0)
            @php
                break;
            @endphp
        @endif
            <a href="{{ route('ads_redirect', ['id' => $k->id]) }}" target="_blank">
            @if(strrpos($k->image_ads , 'http') === false)
                <img src="{{ asset($k->image_ads) }}" alt="{{ $k->title_ads }}" class="img-fluid">
            @else
                <img src="{{ $k->image_ads }}" alt="{{ $k->title_ads }}" class="img-fluid">
            @endif
            </a>
            
    @endforeach
</div>
@endif