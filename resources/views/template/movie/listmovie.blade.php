<div class="row">
    <div class="col-lg-20 col-20 my-4">
        <h1 class="title-header text-dark">{{ $title }}</h1>
    </div>
    @forelse($movie as $k)
    <div class="col-lg-4 col-md-5 col-10 my-3">
        <a href="{{ route('movie', ['title' => $k->slug_title]) }}" class="item-movie">
            <div class="slide-button-play">
                <i class="far fa-play-circle" style="color: #FFBB00"></i>
            </div>
            @if(env('SCRIPT_TYPE', 'movie') == "movie")
            <div class="imdb-score text-white bg-dark p-1">
                <i class="fas fa-star text-warning"></i> {{ $k->score }}
            </div>
            <div class="resolution resolution-{{ strtolower($k->resolution) }} text-white p-2">
                {{ $k->resolution }}
            </div>
            @endif
            <img src="{{ asset($k->image) }}" alt="{{ $k->title }}" class="item-poster img-fluid">
            <h3 class="title-poster text-dark mt-2">{{ $k->title }}</h3>
        </a>
    </div>
    @empty
        <div class="col-lg-20 col-20 my-4 text-center">
            <h1 class="title-header text-secondary">--ไม่พบหนัง--</h1>
        </div>
    @endforelse
</div>

<style>
    .imdb-score {
        position: absolute;
        text-align:center; 
        border-top-left-radius: 10px;
        border-bottom-right-radius: 10px;
        font-size: 0.75rem;
        font-weight: bold;
        transition: 0.5s;
    }
    .resolution {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        position: absolute;
        text-align:center;
        font-size: 0.75rem;
        font-weight: bold;
        transition: 0.5s;
        top: 30px;
    }
    .resolution-hd {
        background-color: #ff7c3e;
    }
    .resolution-fullhd {
        background-color: #00a400;
    }
    .resolution-zoom {
        background-color: #d20000;
    }
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