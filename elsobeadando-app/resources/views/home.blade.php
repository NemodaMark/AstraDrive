@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="font-size: 1.3rem">{{ __('Garázs') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col">
                            <h5 class="px-4 py-4">Információid</h5>
                            <table class="table table-striped ">
                                <thead>
                                    <th>Megnevezés</th>
                                    <th>Információ</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Felhasználó név</td>
                                        <td>"inform"</td>
                                    </tr>
                                    <tr>
                                        <td>Email cím</td>
                                        <td>"inform"</td>
                                    </tr>
                                    <tr>
                                        <td>Tagság kezdete</td>
                                        <td>"inform"</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Pontszám</strong></td>
                                        <td>"inform"</td>
                                    </tr>
                                    <tr>
                                        <td><strong>helyezés</strong></td>
                                        <td>"inform"</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col">
                            <div class="card mx-4 my-4" style="width:300px;">
                                <img class="card-img-top" style="max-width:300px; max-height:636px;" src="{{asset('imgs/profilepics/01.jpg')}}" alt="profilePics">
                                <div class="card-body text-center">
                                  <p class="card-text">"felhasz" profilképe</p>
                                  <a href="#" class="btn btn-warning opacity-50">csere</a>
                                </div>
                              </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h5 class="px-4 py-4">Parkolód</h5>
                            <table class="table table-striped">
                                <thead>
                                    <th>Megnevezés</th>
                                    <th>Információ</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Felhasználó név</td>
                                        <td>"inform"</td>
                                    </tr>
                                    <tr>
                                        <td>Email cím</td>
                                        <td>"inform"</td>
                                    </tr>
                                    <tr>
                                        <td>Tagság kezdete</td>
                                        <td>"inform"</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Pontszám</strong></td>
                                        <td>"inform"</td>
                                    </tr>
                                    <tr>
                                        <td><strong>helyezés</strong></td>
                                        <td>"inform"</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col">
                            <div class="card mx-4 my-4" style="width:300px;">
                                <img class="card-img-top" style="max-width:300px; max-height:636px;" src="{{asset('imgs/profilepics/01.jpg')}}" alt="profilePics">
                                <div class="card-body text-center">
                                  <p class="card-text ">"felhasz" verdája</p>
                                  <a href="#" class="btn btn-warning opacity-50">csere</a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
