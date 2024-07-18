@extends('layouts.app')

@section('main-content')
    <h1 class="text-center">
        Qui vedrai i treni in partenza
    </h1>

    <section>
        <h4>
            Treni in arrivo
        </h4>

        <ul>
            @foreach ( $trains as $train )
            <li>
                {{$train->azienda;}}
            </li>
            @endforeach
        </ul>
    </section>
@endsection
