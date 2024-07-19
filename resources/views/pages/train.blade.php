@extends('layouts.app')

@section('main-content')
    <section>
        <h2 class="text-center">
            Treni in arrivo
        </h2>

        <ul class="d-flex justify-content-center flex-wrap">
            @foreach ($trains as $train)
            <div class="card me-3 p-5" style="width: 18rem;">
                <div class="card-body">
                    <li class="card-text">{{ $train->azienda }}</li>
                    <li class="card-text">Stazione di partenza : {{ $train->stazione_di_partenza }}</li>
                    <li class="card-text">Stazione di arrivo : {{ $train->stazione_di_arrivo }}</li>
                    <li class="card-text"> Orario di partenza : {{ $train->orario_di_partenza }}</li>
                    <li class="card-text">Orario di arrivo : {{ $train->orario_di_arrivo }}</li>
                    <li class="card-text">Codice treno : {{ $train->codice_treno }}</li>
                    <li class="card-text">Numero carrozza : {{ $train->numer_carrozze }}</li>
                </div>
            </div>
            @endforeach
        </ul>


    </section>
@endsection
