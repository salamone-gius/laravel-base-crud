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

                {{-- aggiungo l'attributo value se voglio far comparire all'utente i valori originali prima della modifica--}}
                <label for="new-title">Title:</label><br>
                <input type="text" id="new-title" name="title" value="{{$comic->title}}"><br><br>

                <label for="new-series">Series:</label><br>
                <input type="text" id="new-series" name="series" value="{{$comic->series}}"><br><br>

                <label for="new-thumb">Thumb:</label><br>
                <input type="text" id="new-thumb" name="thumb" value="{{$comic->thumb}}"><br><br>

                {{-- nel tag select, avendo già il value pieno, faccio un controllo dentro il tag option--}}
                <label for="new-type">Choose a type:</label><br>
                <select name="type" id="new-type">
                    <option disabled {{$comic->type == '' ? 'selected' : ''}}></option>
                    <option value="comic book" {{$comic->type == 'comic book' ? 'selected' : ''}}>Comic book</option>
                    <option value="graphic novel" {{$comic->type == 'graphic novel' ? 'selected' : ''}}>Graphic novel</option>
                </select><br><br>

                {{-- il tag textarea non prevede value, si mette dentro --}}
                <label for="new-description">Description:</label><br>
                <textarea id="new-description" name="description">{{$comic->description}}</textarea><br><br>
 
                <label for="new-price">Price:</label><br>
                <input type="number" id="new-price" required name="price" min="0" value="{{$comic->price}}" step="any"><br><br>

                <label for="new-sale-date">Sale date:</label><br>
                <input type="date" id="new-sale-date" name="sale_date" value="{{$comic->sale_date}}"><br><br>

                <div>
                    <input class="margin-top" type="submit" value="Edit">
                </div>
            </form>
        </div>
        <h2 class="margin-top">
            <a href="{{route('comics.index')}}">return to all comics</a>
        </h2>
    </div>
@endsection