{{-- estendo il layout base --}}
@extends('layouts.base')

{{-- definisco una @section per ogni @yield in base-layout --}}
@section('page-title')
    All comics
@endsection

@section('page-content')
    <h1>All comics</h1>
    @dump($comics)
@endsection