@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Igazold az Email címed!') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Egy friss megerősítő emailt küldtünk részedre!') }}
                        </div>
                    @endif

                    {{ __('Mielött továbbhaladnál, igazolnod kell,hogy a megadott adatok helyesek. Ehhez egy emailt küldtünk részedre. Kattints az ebben szereplő linkre, és máris böngészheted oldalunkat!') }}
                    {{ __('Amennyiben nem kaptál emailt') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Kattints ide') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
