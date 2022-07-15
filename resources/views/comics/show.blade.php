@extends('layouts.base')

@section('page-title')
    {{$comic->title}}
@endsection

@section('page-content')
    <h1>{{$comic->title}}</h1>
    <div class="container">
        <ul>
            <li>
                <div class="flex">
                    <div class="padding">
                        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                    </div>
                    <div class="padding">
                        <p>{{$comic->description}}</p>
                        <h3>Series: {{$comic->series}}</h3>
                        <h3>Type: {{$comic->type}}</h3>
                        <h3>Price: {{$comic->price}} $</h3>
                    </div>
                </div>
            </li>
        </ul>
        <h2 class="margin-top">
            <a href="{{route('comics.index')}}">return to all comics</a>
        </h2>
    </div>
@endsection

{{-- <a href="{{route('comics.show', $comic['id'])}}">
    <h2>Title: {{$comic->title}}</h2>
</a> --}}
