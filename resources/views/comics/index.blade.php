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
                <li class="index-li">
                    <a href="{{route('comics.show', $comic['id'])}}">
                        <h2>{{$comic->title}}</h2>
                    </a>
                    <div class="flex padding">
                        <a href="{{route('comics.edit', $comic['id'])}}">Edit</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection