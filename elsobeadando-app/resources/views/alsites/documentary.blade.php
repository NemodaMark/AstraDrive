@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="card text-center w-90 vh-100">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title">Dokumentáció és <a href="https://github.com/NemodaMark/AstraDrive" target="_blank" class="text-success" style="text-decoration: none"><b>Github</b></a></h5>
            <div class="flex-grow-1 embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item w-100 h-100" src="https://onedrive.live.com/embed?resid=CB2D7314F41A50CA%21194&amp;authkey=!AAct_gMX_ZjPtIk&amp;em=2&amp;wdStartOn=1" allowfullscreen></iframe>
            </div>
        </div>
        <div class="card-footer text-body-secondary">
        </div>
    </div>
</div>
@endsection
