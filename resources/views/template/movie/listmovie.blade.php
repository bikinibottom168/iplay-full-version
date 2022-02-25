<div class="row">
    <div class="col-lg-20 col-20 my-4">
        <h1 class="title-header text-dark">{{ $title }}</h1>
    </div>
    @forelse($movie as $k)
    <div class="col-lg-4 col-md-4 col-10 my-3 centered">
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
            <div class="sound-label text-white p-2">
                {{ $k->sound == "ST" ? "ซาวด์แทรค" : ($k->sound == "TH" || $k->sound == "Thai" ? "เสียงไทย" : ($k->sound == "TS" || $k->sound == "SoundTrack(T)+Thai" ? "ซาวด์แทรค": $k->sound)) }}
            </div>
            @endif
            <img src="{{ asset($k->image) }}" alt="{{ $k->title }}" class="item-poster img-fluid">
            <h2 class="title-poster text-dark mt-2">{{ $k->title }}</h2>
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
    .sound-label {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        position: absolute;
        text-align:center;
        font-size: 0.75rem;
        font-weight: bold;
        transition: 0.5s;
        top: 10px;
        right:20px;
        background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
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
        background-image: linear-gradient(120deg, #89f7fe 0%, #66a6ff 100%);
    }
    .resolution-fullhd {
        background-image: linear-gradient(to top, #00c6fb 0%, #005bea 100%);
    }
    .resolution-zoom {
        background-image: linear-gradient(to top, #9795f0 0%, #fbc8d4 100%);
    }
    .item-movie:hover .item-poster{
        opacity: 0.7;
    }
    .item-poster {
        opacity: 1;
        transition: 0.5s;
        width: 100%;
        max-height: 230px;
        min-height: 230px;
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

    @media screen and (max-width: 480px)
    {
        .item-poster {
            opacity: 1;
            transition: 0.5s;
            width: 100%;
            max-height: 220px;
            min-height: 220px;
        }
    }
</style>