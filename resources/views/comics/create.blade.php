@extends('layouts.base')

@section('page-title')
    New Comic
@endsection

@section('page-content')
    <h1>Create New Comic</h1>
    <div class="container">
        <div class="flex padding">
            <form action="{{route('comics.store')}}" method="POST" @csrf>
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
 
                  {{-- <label for="new-price">Price:</label><br>
                  <input type="number" id="new-price" name="price"><br><br> --}}
  
                <input  class="margin-top" type="submit" value="Submit">
            </form>
        </div>
        <h2 class="margin-top">
            <a href="{{route('comics.index')}}">return to all comics</a>
        </h2>
    </div>
@endsection