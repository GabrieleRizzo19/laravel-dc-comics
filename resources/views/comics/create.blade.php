@extends('layouts.app');

@section('page-title', 'Nuovo fumetto')

@section('content')

    <div class="container py-2rem">

        <h1 class="text-center">
            AGGIUNGI NUOVO FUMETTO
        </h1>

        <form action="{{ route('comics.store') }}" method="post">
        
            @csrf
        
            <label for="title">TITOLO</label>
            <input class="w-100 border-black h-2rem" type="text" name="title">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            
            <label for="description">DESCRIZIONE</label>
            <input class="w-100 border-black h-2rem" type="text" name="description">
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            
            <label for="thumb">IMMAGINE</label>
            <input class="w-100 border-black h-2rem" type="text" name="thumb">
            @error('thumb')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            
            <label for="price">PREZZO</label>
            <input class="w-100 border-black h-2rem" type="text" name="price">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            
            <label for="series">SERIES</label>
            <input class="w-100 border-black h-2rem" type="text" name="series">
            @error('series')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        
            <label for="sale_date">DATA VENDITA</label>
            <input class="w-100 border-black h-2rem" type="date" name="sale_date">
            @error('sale_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            
            <label for="type">TIPO</label>
            <input class="w-100 border-black h-2rem" type="text" name="type">
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            
            <input class="w-100 border-black h-2rem mt-1rem" type="submit" value="INVIA">

        </form>

    </div>
    
@endsection