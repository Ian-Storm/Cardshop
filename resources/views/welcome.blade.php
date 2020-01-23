@extends('layouts.app')

@section('content')
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <div class="title m-b-md">
                    Trading Cardshop Ian
                </div><br>

                <h1>
                    <a href="{{ route('categories') }}">Start Shopping -></a>
                </h1><br>

                <div class="links">
                    <a href="https://en.wikipedia.org/wiki/Pok%C3%A9mon">Pokémon</a>
                    <a href="https://en.wikipedia.org/wiki/Yu-Gi-Oh!">Yu-Gi-Oh!</a>
                    <a href="https://en.wikipedia.org/wiki/Magic:_The_Gathering">Magic the Gathering</a>
                    <a href="https://en.wikipedia.org/wiki/My_Little_Pony_Collectible_Card_Game">My Little Pony</a>
                    <a href="https://en.wikipedia.org/wiki/Star_Wars:_The_Card_Game">Star Wars</a><br>
                    <a href="https://en.wikipedia.org/wiki/Digimon_Digital_Card_Battle">Digimon</a>
                    <a href="https://dragonball.fandom.com/wiki/Dragon_Ball_Super_Card_Game_(2017)">Dragon Ball Super</a>
                    <a href="https://en.wikipedia.org/wiki/Harry_Potter_Trading_Card_Game">Harry Potter</a>
                    <a href="https://en.wikipedia.org/wiki/Beyblade_Trading_Card_Game">Beyblade</a>
                    <a href="https://en.wikipedia.org/wiki/Card_Wars">Adventure Time Card Wars</a>
                </div>
            </div>
        </div>
@endsection
