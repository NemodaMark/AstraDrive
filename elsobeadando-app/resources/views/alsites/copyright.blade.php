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
                            <a name="" id="" class="btn btn-warning px-4 position-absolute bottom-0 start-50 my-3" href="#" role="button">21Rose instagrammja</a>
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
                    <a name="" id="" class="btn btn-warning px-4 position-absolute bottom-0 start-50 my-3" href="https://www.youtube.com/watch?v=V3jd5Ob0KBI" target="blank" role="button">Vajda Balázs videója</a>
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
                    <a name="" id="" class="btn btn-warning px-4 position-absolute bottom-0 start-50 my-3" href="https://www.youtube.com/watch?v=3qJdC78QPNc" target="blank" role="button">YOKA MEDIA videója</a>
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
                  <a name="" id="" class="btn btn-warning px-4 position-absolute bottom-0 start-50 my-3" href="https://www.tiktok.com/@seckinzilayas?_t=8hiW0qxxdoH&_r=1" target="blank" role="button">Seckin Zilayas tiktokja</a>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3 mx-3 my-3" style="max-width: 500px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('imgs/copyrights/kupa.png')}}" class="img-fluid rounded my-4" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">"Astra-lógia" - Opel Astra Kupa Rábaring 2002</h5>
                  <p class="card-text">A 2002-ben megrendezett Astra Kupa.</p>
                  <a name="" id="" class="btn btn-warning px-4 position-absolute bottom-0 start-50 my-3" href="#" role="button">Autosportfan videója</a>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3 mx-3 my-3" style="max-width: 500px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('imgs/copyrights/gyartas.png')}}" class="img-fluid rounded my-4" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">"Astra-lógia" - Opel Astra F gyártása Magyarországon</h5>
                  <p class="card-text">Az F Astra gyártásának bemutatásárol készült videó</p>
                  <a name="" id="" class="btn btn-warning px-4 position-absolute bottom-0 start-50 my-3" href="https://www.youtube.com/watch?v=vvGJZKavU0o" target="blank" role="button">yeahsplungeformetoo videója</a>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3 mx-3 my-3" style="max-width: 500px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('imgs/copyrights/wiki.jpg')}}" class="img-fluid rounded my-4" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">"Astra-lógia" - Saját tartalom</h5>
                  <p class="card-text">A saját tananyagunkat és a tesztet is a wikipédián található információk alapján készítettük</p>
                  <a name="" id="" class="btn btn-warning px-4 position-absolute bottom-0 start-50 my-3" href="https://hu.wikipedia.org/wiki/Opel_Astra_F" target="blank" role="button">Wikipédia megtekintése</a>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3 mx-3 my-3" style="max-width: 500px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('imgs/copyrights/madness.jpg')}}" class="img-fluid rounded my-4" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Profilképek</h5>
                  <p class="card-text">A vauxhallmadnessuk instagramm profiljáról szereztük az alap képeket</p>
                  <a name="" id="" class="btn btn-warning px-4 position-absolute bottom-0 start-50 my-3" href="https://www.instagram.com/vauxhallmadnessuk/" target="blank" role="button">instagram elérhetőségeük</a>
                </div>
              </div>
            </div>
          </div>
   </div>
</div>

@endsection
