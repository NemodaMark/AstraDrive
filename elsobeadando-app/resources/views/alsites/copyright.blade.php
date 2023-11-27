@extends('layouts.app')
@section('content')
<style>
    .card-body {
  display: flex;
  flex-direction: column;
}

img {
    max-width: 710px;
    max-height: 635px;
}

button.btn {
  margin-top: auto;
}

#SpotyLink{
    color: #1DB954;
    font-weight: bold;
    text-decoration: none;
}

</style>
<div class="row justify-content-center">

    <div class="card mb-3 mx-3 my-3" style="max-width: 500px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('imgs/copyrights/21.png') }}" class="img-fluid rounded my-4" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Háttér zene</h5>
                    <p class="card-text">Köszönjük a segítséget 21Rosenak, a főoldalon található beatért. <br> <a href="https://open.spotify.com/artist/6R7hXUj62hvuQXiSX1z3e1" target="blank" id="SpotyLink">Halgassátok Spotyfin</a></p>
                    <div class="d-grid gap-2 col-10 mx-auto">
                        <a name="" id="" class="btn btn-warning px-5 position-absolute bottom-0 start-30 my-3" href="#" role="button">21Rose instagrammja</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



          <div class="card mb-3 mx-3 my-3" style="max-width: 500px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('imgs/copyrights/szentgothard.jpeg')}}" class="img-fluid rounded my-4" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">"Astra-lógia" - Az eredeti videó tanagyag</h5>
                  <p class="card-text">Opel Astra F személygépkocsi bemutatása, gyártása, kezelési és karbantartási útmutató.</p>
                  <div class="d-grid gap-2 col-10 mx-auto">
                    <a name="" id="" class="btn btn-warning px-5 position-absolute bottom-0 start-30 my-3" href="https://www.youtube.com/watch?v=V3jd5Ob0KBI" target="blank" role="button">Vajda Balázs videója</a>
                </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3 mx-3 my-3" style="max-width: 500px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('imgs/copyrights/YOKA.png')}}" class="img-fluid rounded my-4" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Főoldal videó (1)</h5>
                  <p class="card-text">A YOKA MEDIA által forgatott videó, amely a "Arno Opel Astra F GSI 2.0 16V | Cinematic Video" címet viseli, ez a főoldalunkon megtalálható egyik videó</p>
                  <div class="d-grid gap-2 col-10 mx-auto">
                    <a name="" id="" class="btn btn-warning px-5 position-absolute bottom-0 start-30 my-3" href="https://www.youtube.com/watch?v=3qJdC78QPNc" target="blank" role="button">YOKA MEDIA videója</a>
                </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3 mx-3 my-3" style="max-width: 500px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('imgs/profilepics/03.png')}}" class="img-fluid rounded my-4" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Főoldal videó (2)</h5>
                  <p class="card-text">Seckin Zilayas gyönyörű Opel Astra G-je, amelyet az egyik profilképnek is be lehet állítani, és a főoldalon látható videók is tőle származnak</p>
                  <a name="" id="" class="btn btn-warning px-5 position-absolute bottom-0 start-30 my-3" href="https://www.tiktok.com/@seckinzilayas?_t=8hiW0qxxdoH&_r=1" target="blank" role="button">Seckin Zilayas tiktok fiókja</a>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3 mx-3 my-3" style="max-width: 500px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('imgs/profilepics/03.png')}}" class="img-fluid rounded my-4" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <a name="" id="" class="btn btn-warning px-5 position-absolute bottom-0 start-30 my-3" href="#" role="button">Button</a>
                </div>
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
