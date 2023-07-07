@extends('layouts.app')

@section('page-title', 'Modifica fumetto')

@section('content')

    <div class="container">

        <form class="py-2rem" action="{{ route('comics.update', $comic) }}" method="post">
        
            @csrf

            @method('PUT')
        
            <label for="title">TITOLO</label>
            <input class="w-100 border-black h-2rem" type="text" name="title" value="{{$comic->title}}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="description">DESCRIZIONE</label>
            <input class="w-100 border-black h-2rem" type="text" name="description" value="{{$comic->description}}">
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="thumb">IMMAGINE</label>
            <input class="w-100 border-black h-2rem" type="text" name="thumb" value="{{$comic->thumb}}">
            @error('thumb')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="price">PREZZO</label>
            <input class="w-100 border-black h-2rem" type="text" name="price" value="{{$comic->price}}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="series">SERIES</label>
            <input class="w-100 border-black h-2rem" type="text" name="series" value="{{$comic->series}}">
            @error('series')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="sale_date">DATA VENDITA</label>
            <input class="w-100 border-black h-2rem" type="date" name="sale_date" value="{{$comic->sale_date}}">
            @error('sale_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="type">TIPO</label>
            <input class="w-100 border-black h-2rem" type="text" name="type" value="{{$comic->type}}">
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <input class="w-100 border-black h-2rem mt-1rem" type="submit" value="INVIA">

        </form>

    </div>
    
@endsection