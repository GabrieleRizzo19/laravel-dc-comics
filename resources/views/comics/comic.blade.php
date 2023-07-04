@extends('layouts.app')
@section('page-title', 'Action Comics #1000: The Deluxe Edition')
@section('content')

    <div class="blue-bar">
        <div class="comic-details-container pos-relative">
            <img src="{{ $comic['thumb'] }}" class="comic-details-image pos-absolute" alt="{{ $comic['title'] }}">
        </div>
    </div>
    <div class="comic-top-info">
        <div class="comic-details-container">
            <div class="d-flex">
                <div class="comic-main-info w-70">
                    <h1 class="uppercase">{{ $comic['title'] }}</h1>
                    <div class="price-availability-box d-flex align-items-center">
                        <div class="price-box w-70 d-flex justify-content-between">
                            <span>
                                U.S. Price: <strong>{{ $comic['price'] }}</strong>
                            </span>
                            <span>
                                AVAILABLE
                            </span>
                        </div>
                        <div class="w-30 text-end">
                            <span>
                                Check availability
                            </span>
                        </div>
                    </div>
                    <p class="comic-description">{{ $comic['description'] }}</p>
                </div>
                <div class="rightside-adv w-30 text-end">
                    <span>ADVERTISEMENT</span>
                    <img class="w-100" src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="comic-bottom-info">
        <div class="comic-details-container d-flex">
            <div class="w-50">
                <h2>Talent</h2>
                <table>
                    <tbody>
                        <tr>
                            <td class="w-20">Art by:</td>
                            <td>
                                PLACEHOLDER
                            </td>
                        </tr>
                        <tr>
                            <td class="w-20">Written by:</td>
                            <td>
                                PLACEHOLDER
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <div class="w-50">
                <h2>Specs</h2>
                <table>
                    <tbody>
                        <tr>
                            <td>Series:</td>
                            <td class="uppercase">
                                <strong>
                                    <a>{{ $comic['series'] }}</a> 
                                </strong>
                            </td>
                        </tr>
                        <tr>
                            <td>U.S. Price::</td>
                            <td>{{ $comic['price'] }}</td>
                        </tr>
                        <tr>
                            <td>On Sale date</td>
                            <td>{{ $comic['sale_date'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div>
        <a class="to-home-link" href="/">
            TORNA ALLA HOME
        </a>
    </div>

    


@endsection