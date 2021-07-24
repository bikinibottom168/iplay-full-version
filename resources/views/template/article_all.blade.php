@php
if(!session()->has('locale')){
    session()->put('locale', Config::get('app.locale'));
}
App::setLocale(session('locale'));
@endphp
{{-- <div class="row">
    <div class="col-lg-20">
        <div class="title-hd" style="margin-top: 10px;background-color: rgba(255,255,255,0.4);padding: 10px 20px">
            <h3 style="color:#fff"><i class="fas fa-newspaper"></i> ข่าวสารทั้งหมด</h3>
        </div>
        <div style="padding: 10px 20px">
            <div class="row">
                @foreach ($news as $key_news)
                    <div class="col-lg-6 col-md-6 col-xs-6">
                        <div class="movie-item" style="margin-top: 10px">
                            <a href="{{ route('article', ['id' => $key_news->id]) }}">
                                <div class="mv-img">
                                    <img src="{{ asset($key_news->image) }}" alt="" style="width: 100%;height:200px">
                                </div>
                                <div class="title-in">
                                    <div class="cate">
                                        @php
                                            $date = Carbon\Carbon::parse($key_news->created_at, 'UTC');
                                        @endphp
                                        <span class="orange">ข่าวสาร</span> <span class="blue">{{ $date->format('M d Y') }}</span>
                                    </div>
                                    <h6 style="color: #fff">{{ $key_news->title }}</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12 col-md-12 col-xs-12">
                    {{ $news->links() }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="row">
    <div class="col-lg-20 col-20 my-4">
        <h1 class="title-header text-dark">บทความ</h1>
    </div>
    @foreach($news as $k)
    <div class="col-lg-5 col-md-5 col-10 my-3">
        <a href="{{ route('article', ['title' => $k->slug_title]) }}" class="item-movie">
            <img src="{{ asset($k->image) }}" alt="{{ $k->title }}" class="item-poster img-fluid">
            <h3 class="title-poster text-dark mt-2">{{ $k->title }}</h3>
        </a>
    </div>
    @endforeach
</div>

<style>
    .item-movie:hover .item-poster{
        opacity: 0.7;
    }
    .item-poster {
        opacity: 1;
        transition: 0.5s;
    }

    .slide-button-play {
        transition: 0.3s;
        transform: scale(0);
        opacity: 0;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        margin: auto;
        width: 3rem;
        height: 3rem;
        /* line-height: 3rem; */
        border-radius: 50%;
        text-align: center;
        font-size: 2rem;
        z-index: 10;
    }
    .item-movie:hover .slide-button-play{
        opacity: 1;
        transform: scale(1);
    }

    .item-movie:hover {
        text-decoration: none;
    }
    .title-poster {
        font-size: .875rem;
        margin-bottom: 0;
        text-align: center;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;  
    }
    .title-header {
        font-weight: 700;
        display: inline-block;
        vertical-align: middle;
        margin-right: .5rem;
        margin-bottom: 0;
        font-size: 1.875rem;
    }
</style>