@extends('layouts.base')

@section('page-title')
    Modify Comic
@endsection

@section('page-content')
    <h1>Edit {{$comic->title}}</h1>
    <div class="container">
        <div class="flex padding">
            {{-- modifico la rotta nell'action (.update) e gli passo il singolo comic da modificare--}}
            <form action="{{route('comics.update', $comic->id)}}" method="POST">
                @csrf
                {{-- passo il metodo PUT (per fare un aggiornamento TOTALE (PATCH -> aggiornamento PARZIALE) del comic in tutti i suoi campi) attraverso blade con @method --}}
                @method('PUT')

                <label for="new-title">Title:</label><br>
                <input type="text" id="new-title" name="title"><br><br>

                <label for="new-series">Series:</label><br>
                <input type="text" id="new-series" name="series"><br><br>

                <label for="new-thumb">Thumb:</label><br>
                <input type="text" id="new-thumb" name="thumb"><br><br>

                <label for="new-type">Choose a type:</label><br>
                <select name="type" id="new-type">
                    <option disabled selected></option>
                    <option value="comic book">Comic book</option>
                    <option value="graphic novel">Graphic novel</option>
                </select><br><br>

                <label for="new-description">Description:</label><br>
                <textarea id="new-description" name="description"></textarea><br><br>
 
                <label for="new-price">Price:</label><br>
                <input type="number" id="new-price" required name="price" min="0" value="0" step="any"><br><br>

                <label for="new-sale-date">Sale date:</label><br>
                <input type="date" id="new-sale-date" name="sale_date"><br><br>

                <div>
                    <input class="margin-top" type="submit" value="Submit">
                </div>
            </form>
        </div>
        <h2 class="margin-top">
            <a href="{{route('comics.index')}}">return to all comics</a>
        </h2>
    </div>
@endsection