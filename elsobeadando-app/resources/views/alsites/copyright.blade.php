@extends('layouts.app')
@section('content')
<style>
    .card-body {
  display: flex;
  flex-direction: column;
}

button.btn {
  margin-top: auto;
}

</style>
<div class="row justify-content-center">
    <div class="col-md-8">

<div class= "row">
    <div class="col-4 d-flex" >

            <div class="card"style="width: 18rem;">
            <div class="card-header">
            GM - Opel Astra F
            </div>
            <div class="card-body">
                <h5 class="card-title">Opel Astra F személygépkocsi bemutatása, gyártása, kezelési és karbantartási útmutató <br></h5>
                <p class="card-text">
                    <a href="https://www.youtube.com/watch?v=V3jd5Ob0KBI" target="_Blank" class="align-self-end btn-block btn btn-warning">megtekintés</a>
            </div>
            </div>
    </div>

<div class="col-4 d-flex" >
    <div class="card">
        <div class="card-header">
        Asztali háttérvideó
        </div>
        <div class="card-body">
            <h5 class="card-title">Arno Opel Astra F GSI 2.0 16V | Cinematic Video <br></h5>
            <p class="card-text">
                <a href="https://www.youtube.com/watch?v=3qJdC78QPNc" target="_Blank" class="btn-lg btn-block mt-auto btn btn-warning">megtekintés</a>
        </div>
    </div>
</div>    

<div class="col-4 d-flex" >
    <div class="card">
    <div class="card-header">
    Jármű gyártása
    </div>
    <div class="card-body">
        <h5 class="card-title">Opel Astra F gyártása Magyarországon<br></h5>
        <p class="card-text">
        <div style=" text-align: center;">
            <a href="https://www.youtube.com/watch?v=vvGJZKavU0o" target="_Blank" class="btn btn-warning">megtekintés</a>
        </div>
    </div>
    </div>
</div>    

<div class="col-4 d-flex" >
    <div class="card">
    <div class="card-header">
    GM - Opel Astra F
    </div>
    <div class="card-body">
        <h5 class="card-title">Opel Astra F személygépkocsi bemutatása, gyártása, kezelési és karbantartási útmutató <br></h5>
        <p class="card-text">
        <div style=" text-align: center;">
            <a href="https://www.youtube.com/watch?v=V3jd5Ob0KBI" target="_Blank" class="btn btn-warning">megtekintés</a>
        </div>
    </div>
    </div>
</div>    

<div class="col-4 d-flex" >
    <div class="card">
    <div class="card-header">
    AstraKupa
    </div>
    <div class="card-body">
        <h5 class="card-title">Opel Astra Kupa Rábaring 2002<br></h5>
        <p class="card-text">
        <div style=" text-align: center;">
            <a href="https://www.youtube.com/watch?v=g-ypPq5wxa4" target="_Blank" class="btn btn-warning">megtekintés</a>
        </div>
    </div>
    </div>
</div>

</div>


        <div class="card">
            <div class="card-header">{{ __('Felhasznált tartalmak') }}</div>
            <div class="card-body">           
                <h4>Hang-és videóanyag</h4>                
                <a href="https://onedrive.live.com/embed?resid=4ABE77F844B529FD%2160416&amp;authkey=!ANR4SIuNq_LllSQ&amp;em=2&amp;wdAr=1.7777777777777777" target="_Blank">Astra Interaktív tananyag</a> - Szerző : <a href="https://github.com/NemodaMark/opel" target="_Blank">Réz Levente László & Nemoda Márk Levente</a>
                
                <hr>
                <h4>Szakirodalom</h4>
                <a href="https://hu.wikipedia.org/wiki/Opel_Astra_F" target="_Blank">Opel Astra F </a> - Szerző : <a href="https://hu.wikipedia.org/wiki/Kezd%C5%91lap" target="_Blank">Wikipedia</a> <br>
        </div>
    </div>
</div>
@endsection
