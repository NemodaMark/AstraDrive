@extends('layouts.app')

@section('content')



    <div class="row d-flex justify-content-center align-middle my-5">
        <div class="col-md-8">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container d-flex justify-content-center my-5" style="background-color:">
                        <div class="card p-3 py-4" id="profile">
                            <div class="text-center">
                                <img src="{{ asset('imgs/profilepics/' . Auth::user()->jpg) }}" width="180" class="rounded-circle">
                                <h3 class="mt-2">{{ Auth::user()->name }}</h3>
                                <span class="mt-1 clearfix">{{ Auth::user()->email }}</span>

                                <div class="row mt-3 mb-3">

                                  <div class="col-md-4">
                                    <h5>Saját járművek</h5>
                                    <span class="num">10</span>
                                  </div>
                                  <div class="col-md-4">
                                  <h5></h5>
                                    <span class="num"></span>
                                  </div>
                                  <div class="col-md-4">
                                  <h5>Pontszám</h5>
                                    <span class="num">10</span>
                                  </div>

                                </div>

                                <hr class="line">

                                <small class="mt-4">Leírás</small>
                                  <div class="social-buttons mt-5">
                                   <button class="neo-button">
                                    <a href="{{ route('edit') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                      </svg>
                                    </a>
                                   </button>

                                   <button class="neo-button" >
                                    <a href="{{ route('parkinglot') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16" href="{{ route('parkinglot') }}">
                                        <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
                                      </svg>
                                    </a>
                                   </button>

                                   <button class="neo-button">
                                    <a href="{{ route('logout') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                        </svg>
                                    </a>
                                </button>

                                  </div>

                                 <div class="profile mt-5">

                                 {{-- <button class="profile_button px-5">View profile</button> --}}

                            </div>

                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>

    #profile {
        width: 350px;
        border-radius: 10px;
    box-shadow: 9px 9px 18px , /*Dark mode:#181818, Light mode: #484b6a*/
                 -5px -5px 18px ;/*Dark mode:#b3b3b3 Light mode: #fafafa*/
        border: none
    }
    .neo-button {
        width: 40px;
        height: 40px;
        outline: 0 !important;
        cursor: pointer;
        font-size: 15px;
        border: none;
        margin-right: 10px;
        border-radius: 50%;
    /* background: linear-gradient(145deg, #F7B538, #033F63); */
    box-shadow:  2px 2px 12px , /*Dark mode:#181818, Light mode:#484b6a */
                 -2px -2px 12px ;/*Dark mode:#b3b3b3 Light mode: #fafafa*/

    }
    .neo-button:active {
       border-radius: 50%;
    /* background: #48A9A6; */
    box-shadow: 6px 6px 27px , /*Dark mode:#181818, Light mode:#484b6a */
                 -6px -6px 27px ;/*Dark mode:#b3b3b3 Light mode:#fafafa*/
    }

    .neo-button a {
        color: inherit;
        text-decoration: none; /* Optional: Remove underline */
    }

    </style>

@endsection
