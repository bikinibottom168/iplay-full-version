<div class="col-lg-20 col-20 text-center">
    {{-- <nav aria-label="..." class="text-center"> --}}
        <ul class="movie-paginate justify-content-center">
            @foreach ($elements  as $element)
                @if (is_string($element))
                        <li>
                            <a href="javascript:void()" class="">{{ $element }}</a>
                        </li>
                    @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active">
                                <a href="javascript:void()" class="">{{ $page }}</a>
                            </li>
                        @else
                            <li >
                                <a href="{{ $url }}" class="">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
                {{-- <!-- Next Page Link -->
                @if ($paginator->hasMorePages())
                <li >
                    <a class="page-link" href="#">Next</a>
                </li>
                @endif --}}
            @endforeach
        </ul>
    {{-- </nav> --}}
</div>

<style>
    /* Custom Pagination */
    ul.movie-paginate {
        list-style: none;
    }
    ul.movie-paginate li {
        background-color: {{ env("SCRIPT_SECONDARY_COLOR") }};
        display: inline-block;
        border-radius: 30px;
        padding: 10px;
        transition: 0.5s;
    }
    ul.movie-paginate li a{
        color: #fff;
        padding: 10px;
        width: 3rem;
        height: 3rem;
        text-decoration: none;
    }

    ul.movie-paginate li:hover {
        background-color: #FF4343;
    }

    ul.movie-paginate li.active {
        background-color: {{ env('SCRIPT_PRIMARY_COLOR', '') }};
        
    }

    .page-item a{
        border-radius: 20px;
        font-size: 1.25rem;
    }
    .page-item:first-child .page-link {
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
    }
    .page-item:last-child .page-link {
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
    }

    .page-item:hover .page-link {
        background-color: #000;
    }

</style>