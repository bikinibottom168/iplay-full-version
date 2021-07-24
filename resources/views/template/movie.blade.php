<div class="row">
    @include('template.ads.ads-mt')
    <div class="col-lg-20 col-20">
        <div class="movie-card border-radius-1">
            <div class="row">
                <div class="col-lg-5 col-6">
                    <img src="{{ $movie->image ? asset($movie->image) : '' }}" alt="{{ $movie->title }}" class="img-fluid">
                </div>
                <div class="col-lg-15 col-14">
                    <h1 class="movie-title">{{ trim($seo->front_seo) }} {{ $movie->title }}</h1>
                    <div id="share-movie"></div>
                    <div class="movie-description text-white">
                        <p style="display: -webkit-box;
                        -webkit-line-clamp: 4;
                        -webkit-box-orient: vertical;  
                        overflow: hidden;">{{ $movie->subtitle }}</p>
                    </div>
                    <div class="movie-description text-secondary">
                        <p style="display: -webkit-box;
                        -webkit-line-clamp: 4;
                        -webkit-box-orient: vertical;  
                        overflow: hidden;">{{ $movie->description }}</p>
                    </div>
                    <hr>
                    <div class="movie-description text-white">
                        <p><i class="far fa-clock"></i> {{ $movie->runtime }} <i class="far fa-eye"></i> {{ number_format($movie->view) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-20 col-20 my-3">
        {{-- Ads On Top Movie --}}
        @include('template.movie.ads_on_movie_top')
        
        @if(env('STREAMING_TYPE', 'proxy') == "streaming")
            @if($movie->file_main != "" || $movie->file_openload != "" || $movie->file_streamango != "" || $movie->file_main_2 != "" || $movie->file_openload_2 != "" || $movie->file_streamango_2 != "" || $movie->file_main_3 != "" || $movie->file_openload_3 != "" || $movie->file_streamango_3 != "")
                <button class="btn btn-warning" type="button" data-sound="sound_th" class="sound_path btn btn-primary" data-href="{{ $movie->file_main != "" ? $movie->file_main : ($movie->file_main_2 != "" ? $movie->file_main_2 : ($movie->file_main_3 != "" ? $movie->file_main_3 : '' )) }}">
                    <i class="fas fa-play"></i>
                    เซิฟเวอร์หลัก
                </button>
            @endif
            @if($movie->file_main_sub != "" || $movie->file_openload_sub != "" || $movie->file_streamango_sub != "" || $movie->file_main_sub_2 != "" || $movie->file_openload_sub_2 != "" || $movie->file_streamango_sub_2 != "" || $movie->file_main_sub_3 != "" || $movie->file_openload_sub_3 != "" || $movie->file_streamango_sub_3 != "")
                <button class="btn btn-warning" type="button" data-sound="sound_th" class="sound_path btn btn-primary" data-href="{{ $movie->file_main != "" ? $movie->file_main : ($movie->file_main_2 != "" ? $movie->file_main_2 : ($movie->file_main_3 != "" ? $movie->file_main_3 : '' )) }}">
                    <i class="far fa-closed-captioning"></i>
                    เซิฟเวอร์หลัก
                </button>
            @endif
        @else
            @if($movie->file_main != "" || $movie->file_openload != "" || $movie->file_streamango != "" || $movie->file_main_2 != "" || $movie->file_openload_2 != "" || $movie->file_streamango_2 != "" || $movie->file_main_3 != "" || $movie->file_openload_3 != "" || $movie->file_streamango_3 != "")
                <button class="btn btn-warning" type="button" data-sound="sound_th" class="sound_path btn btn-primary" data-href="{{ $movie->file_main != "" ? $movie->file_main : ($movie->file_main_2 != "" ? $movie->file_main_2 : ($movie->file_main_3 != "" ? $movie->file_main_3 : '' )) }}">
                    เซิฟเวอร์หลัก
                </button>
            @endif
            @if($movie->file_main_sub != "" || $movie->file_openload_sub != "" || $movie->file_streamango_sub != "" || $movie->file_main_sub_2 != "" || $movie->file_openload_sub_2 != "" || $movie->file_streamango_sub_2 != "" || $movie->file_main_sub_3 != "" || $movie->file_openload_sub_3 != "" || $movie->file_streamango_sub_3 != "")
                <button class="btn btn-warning" type="button" data-sound="sound_th" class="sound_path btn btn-primary" data-href="{{ $movie->file_main != "" ? $movie->file_main : ($movie->file_main_2 != "" ? $movie->file_main_2 : ($movie->file_main_3 != "" ? $movie->file_main_3 : '' )) }}">
                    <i class="far fa-closed-captioning"></i>
                    เซิฟเวอร์หลัก
                </button>
            @endif
        @endif

        {{-- Player --}}
        @include('template.movie.player')
        {{-- Ads On Bottom Movie --}}
        @include('template.movie.ads_on_movie_bottom')
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#share-movie").jsSocials({
            showLabel: false,
            showCount: false,
            shares: ["facebook","twitter"]
        });
    });
</script>

<style>
    .movie-card {
        background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.7)) 0% 0% / cover, url({{ asset($movie->image) }}) no-repeat center center;
        background-size: cover;
        padding: 20px;
    }
    .movie-title {
        color: #ffc107;
        line-height: 36px;
        padding: 7px 0;
        margin-bottom: 0;
        max-height: none;
        font-weight: 300;
        font-size: 1.875rem;
    }
    .movie-description {
        font-size: 0.95rem;
        
    }
</style>