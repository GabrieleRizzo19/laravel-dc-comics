@extends('layouts.app')

@section('page-title', 'DC COMICS')

@section('content')

    <div class="main-wrapper">

        <div class="main-content-wrapper">
            <div class="container">
    
                <div class="cards-container d-flex flex-wrap justify-content-center pos-relative">
                    <span class="cards-container-tag pos-absolute">CURRENT SERIES</span>
                    
                        @foreach ($comicsArray as $comic)
                        <a href="{{ route('comics.show', $comic->id) }}">
                            <div class="card">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                                <figcaption>{{ $comic['title'] }}</figcaption>
                            </div>
                        </a>
                        
                        @endforeach
                </div>
            
                <button>
                    <a class="reset-a" href="{{ route('comics.create') }}">
                        AGGIUNGI FUMETTO
                    </a>
                </button>
    
            </div>
        </div>

        <div class="main-icon-bar-wrapper">
            <div class="container d-flex align-items-center">
                <ul class="d-flex justify-content-between">
                    @foreach ($iconBarItems as $item)
                        <li class="d-flex align-items-center">
                            <img src="{{ $item['img'] }}" alt="{{ $item['text'] }}">
                            {{ $item['text'] }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>

    


@endsection