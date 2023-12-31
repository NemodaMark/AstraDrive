@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-horizontal">
                            <div class="img-square-wrapper">
                                <img class="" src="{{ asset('imgs/addCar.jpg')}}" width="80%" height="100%" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title mb-5">Új autó hozzáadása a garázsba</h4>
                                <form action="{{ route('addCarToUser') }}" method="post">
                                    @csrf

                                    <select name="car_type" class="form-select my-3 mx-1" aria-label="Default select example">
                                        <option selected disabled>Típus</option>
                                        @foreach ( $cars as $car)
                                            <option value="{{$car->id}}">{{$car->name}}</option>
                                        @endforeach
                                    </select>

                                    <select name="car_fuel" class="form-select my-3 mx-1" aria-label="Default select example">
                                        <option selected disabled>Karosszéria</option>
                                        @foreach ( $fuels as $fuel)
                                            <option value="{{$fuel->id}}">{{$fuel->fuel_name}}</option>
                                        @endforeach
                                    </select>

                                    <select name="car_chassis" class="form-select my-3 mx-1" aria-label="Default select example">
                                        <option selected disabled>Üzemanyag típus</option>
                                        @foreach ( $types as $type)
                                            <option value="{{$type->id}}">{{$type->type}}</option>
                                        @endforeach
                                    </select>

                                    <button type="submit" class="btn btn-success my-3 mx-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                                        </svg>
                                        Autó hozzáadása
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card-horizontal {
    display: flex;
}
</style>

@endsection
