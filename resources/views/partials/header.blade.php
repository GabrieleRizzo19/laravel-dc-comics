
<header>
    <div class="header-wrapper container d-flex justify-content-between align-items-center">
        <div>
            <a href="{{route('home')}}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="HEADER LOGO">
            </a>
        </div>
        <ul class="d-flex justify-content-between">
            <li>
                @foreach ($headerLinks as $link)
                    <li>
                        <button>
                            {{ $link }}
                        </button>
                    </li>
                @endforeach
            </li>
        </ul>
        
    </div>
</header>