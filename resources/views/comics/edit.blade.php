@extends('layouts.app')

@section('content')

    <div class="container">

        @if ($errors->any())

            <div>
                <ul class="error-list">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach

                </ul>
            </div>
            
        @endif

        <form class="py-2rem" action="{{ route('comics.update', $comic) }}" method="post">
        
            @csrf

            @method('PUT')
        
            <label for="title">TITOLO</label>
            <input class="w-100 border-black h-2rem" type="text" name="title" value="{{$comic->title}}">

            <label for="description">DESCRIZIONE</label>
            <input class="w-100 border-black h-2rem" type="text" name="description" value="{{$comic->description}}">

            <label for="thumb">IMMAGINE</label>
            <input class="w-100 border-black h-2rem" type="text" name="thumb" value="{{$comic->thumb}}">
            
            <label for="price">PREZZO</label>
            <input class="w-100 border-black h-2rem" type="text" name="price" value="{{$comic->price}}">
            
            <label for="series">SERIES</label>
            <input class="w-100 border-black h-2rem" type="text" name="series" value="{{$comic->series}}">

            <label for="sale_date">DATA VENDITA</label>
            <input class="w-100 border-black h-2rem" type="date" name="sale_date" value="{{$comic->sale_date}}">

            <label for="type">TIPO</label>
            <input class="w-100 border-black h-2rem" type="text" name="type" value="{{$comic->type}}">

            <input class="w-100 border-black h-2rem" type="submit" value="INVIA">

        </form>

    </div>
    
@endsection