@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Garázs
            </div>
            <div class="card-body">
                <h5 class="card-title">Jármű hozzáadása</h5>
                <p class="card-text">Ha nincs járműved, itt hozzáadhatsz új járművet!</p>
                <a href="{{ route('addCar') }}" class="btn btn-success">Jármű hozzáadása</a>
            </div>
        </div>
    </div>

    @if (!empty($userCar))
    <div class="row justify-content-center">
        @foreach ($userCar as $car)
            <div class="col-3 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('imgs/profilepics/' . Auth::user()->jpg) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Opel {{ $car->name }}</h5>
                        <p class="card-text text-secondary mx-2">
                            Kivitel: {{ $car->type ?? 'N/A' }} <br>
                            Üzemanyag: {{ $car->fuel_name ?? 'N/A' }}
                        </p>
                        <div class="col">
                            @if (property_exists($car, 'id'))
                                <a href="{{ route('editCar', ['carID' => $car->id]) }}" class="btn btn-warning mx-2">Szerkesztés</a>
                                <a href="{{ route('deleteCar', ['carID' => $car->id]) }}" class="btn btn-danger mx-2">Törlése</a>
                            @else
                                <p class="text-danger">Error: Missing car ID</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @else
        <h3 class="my-5" style="text-align: center;"><b>Jelenleg nincs autó hozzáadva a fiókodhoz</b></h3>
    @endif
</div>
</div>
@endsection
