@php 
if(env('SCRIPT_ADS_TOP_LEFT_RIGHT', '0') == "1")
{
    $col = "col-lg-14 col-md-12 col-12";
}
else
{
    $col = "col-lg-20 col-md-20 col-20 mb-1";
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
                <img src="{{ asset($k->image_ads) }}" alt="banner" class="img-fluid">
            @else
                <img src="{{ $k->image_ads }}" alt="banner" class="img-fluid">
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
                <img src="{{ asset($k->image_ads) }}" alt="banner" class="img-fluid">
            @else
                <img src="{{ $k->image_ads }}" alt="banner" class="img-fluid">
            @endif
            </a>
        @endif
    </div>
@endforeach
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
                <img src="{{ asset($k->image_ads) }}" alt="banner" class="img-fluid">
            @else
                <img src="{{ $k->image_ads }}" alt="banner" class="img-fluid">
            @endif
            </a>
            
    @endforeach
</div>
@endif