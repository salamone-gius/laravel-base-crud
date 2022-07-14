{{-- estendo il layout base --}}
@extends('layouts.base')

{{-- definisco una @section per ogni @yield in base-layout --}}
@section('page-title')
    All comics
@endsection

@section('page-content')
    <h1>All comics</h1>
    <div class="container">
        <ul>
            @foreach ($comics as $comic)
                <li>
                    <img src="{{$comic->thumb}}" alt="">
                    <a href="{{route('comics.show', $comic['id'])}}">
                        <h2>Title: {{$comic->title}}</h2>
                    </a>
                    <p>{{$comic->description}}</p>
                    <h3>Series: {{$comic->series}}</h3>
                    <h3>Type: {{$comic->type}}</h3>
                    <h3>Price: $ {{$comic->price}}</h3>
                </li>
            @endforeach
        </ul>
    </div>
@endsection