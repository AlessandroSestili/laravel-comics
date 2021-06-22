{{-- Estendo il Layout "Default" in questo file --}}
@extends('layouts.default')


{{-- Creo il titolo per la "home page" di Laravel Comix --}}
@section('page_title', 'Laravel-Comix')


{{-- Creo il contenuto da iniettare nel layout di default --}}
@section('content')

    <section class="main-section">
        <div class="container">
            <div class="card-container flex">
                @foreach($comicsList as $comic)
                <div class="card">
                    <div class="img-container">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </div>
                    <h4><a href="{{ route('singolo-comic') }}">{{ $comic['title'] }}</a></h4>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection










