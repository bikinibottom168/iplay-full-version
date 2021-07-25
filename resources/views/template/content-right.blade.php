<div class="row">
    <div class="col-lg-20 col-20">
        <div class="widget" style="background-color: #f2f4f5">
            <div class="widget-title text-dark">
                <p><span>ค้นหา</span></p>
            </div>
            <hr>
            <form action="{{ route('search') }}" method="get" class="form-row">
                <div class="col">
                    <input type="text" name="title" class="form-control border-radius-2" placeholder="Search ...">
                </div>
                <div class="col">
                    <button type="submit" class="btn {{ env('SCRIPT_BUTTON_COLOR') }} btn-block border-radius-2">Search</button>
                </div>
            </form>
          </div>
    </div>
    @if(count($ads_r2) > 0)
    <div class="col-lg-20 col-20 mt-1">
        <div class="widget" style="background-color: #f2f4f5">
            @foreach ($ads_r2 as $k)
                <a href="{{ $k->url_ads }}" target="_blank" >
                    <img src="{{ asset($k->image_ads) }}" alt="{{ asset($k->title_ads) }}" style="width: 100%">
                </a>
            @endforeach
        </div>
    </div>
    @endif
    <div class="col-lg-20 col-20 mt-4">
        <div class="widget" style="background-color: #f2f4f5">
            <div class="widget-title text-dark">
                <p><span>หมวดหมู่</span></p>
            </div>
            <hr>
            <ul class="categorys" style="overflow: auto; max-height: 300px; padding-right: 5px">
                @foreach ($category as $k)
                <li class="category-item border-radius-2 text-dark">
                    <a class="text-dark d-block" href="{{ route('category', ['title' => str_replace(' ','-', $k->title_category)]) }}" title="{{ $k->title_category }} {{ $k->title_category }}">
                        {{ $k->title_category_eng }} {{ $k->title_category }}
                        <small class="float-right text-secondary">
                            ({{ $k->total }})
                        </small>
                    </a>
                </li>
                @endforeach
		    </ul>
        </div>
    </div>
    @if(env('SCRIPT_TYPE', '') == "movie" || env('SCRIPT_TYPE', '') == "anime")
        @if(count($playlist) != 0)
            <div class="col-lg-20 col-20 mt-4">
                <div class="widget" style="background-color: #f2f4f5">
                    <div class="widget-title text-dark">
                        <p><span>หนังไตรภาค</span></p>
                    </div>
                    <hr>
                    <ul class="categorys" style="overflow: auto; max-height: 300px; padding-right: 5px">
                        @foreach ($playlist as $k)
                        <li class="category-item border-radius-2 text-dark">
                            <a class="text-dark d-block" href="{{ route('playlist', ['title' => $k->slug_title]) }}" title="{{ $k->title }}">
                                {{ $k->title }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    @endif
    <div class="col-lg-20 col-20 mt-4">
        <div class="widget" style="background-color: #f2f4f5">
            <div class="widget-title text-dark">
                <p><span>ปีหนัง</span></p>
            </div>
            <hr>
            <ul class="categorys" style="overflow: auto; max-height: 300px; padding-right: 5px">
                @php $years = (int)date('Y'); @endphp
                    @for($i = $years; $i >= 1948; $i--)
                    <li class="category-item border-radius-2 text-dark" style="display: inline-block;width:45%;text-align: center">
                        <a class="text-dark d-block" href="{{ route('year',['year' => $i]) }}" >
                            {{ $i }}
                        </a>
                    </li>
                @endfor
		    </ul>
        </div>
    </div>
</div>
<style>
    .category-item a {
        text-decoration: none;
        font-size: 0.95rem;
    }
    .category-item {
        background-color: #fff;
        color: #000;
        padding: 4px 10px;
        list-style-type: none;
        margin-bottom: 10px;
    }
    .categorys {
        padding: 0;
    }

    .widget {
        padding: 10px;
        border-radius: 10px;
    }
    .widget .widget-title {
        font-size: 0.75rem;
    }
    .widget-title p {
        width: 100%; 
        text-align: center; 
        /* border-bottom: 1px solid #afc7c6;  */
        line-height: 0.1em;
        margin: 10px 0 20px; 
    } 

    .widget-title p span { 
        background:#f2f4f5; 
        padding:0 10px; 
        font-size: 0.85rem;
    }

    hr {
        border-color: {{ env('SCRIPT_PRIMARY_COLOR') }};
        opacity: 0.4;
    }

</style>
