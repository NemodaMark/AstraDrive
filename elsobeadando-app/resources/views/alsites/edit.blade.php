@extends('layouts.app')

@section('content')
<div class="row my-3">
    <div class="col-sm-6 d-flex align-items-stretch">
        <div class="card mx-3 my-3">
            <div class="card-body position-relative">
                <h5 class="card-title">Profilkép</h5>
                <p class="card-text">Kattints rá a kívánt képre, amint megvagy, ez lesz az új profilképed</p>
                <div class="row">
                    @foreach ($pictures as $pic)
                    <div class="col my-2 ">
                        <a href="{{ route('picture.change', ['jpg' => $pic->jpg]) }}" class="my-3 mx-2 profile-pic">
                            <img src="{{ asset('imgs/profilepics/' . $pic->jpg) }}" class="{{ Auth::user()->jpg == $pic->jpg ? 'clicked' : '' }}" data-name="{{ $pic->jpg }}">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 d-flex align-items-stretch">
        <div class="card mx-3 my-3">
            <div class="card-body">
                <h5 class="card-title">Leírás</h5>
                <p class="card-text">Itt tudod átírni a fiókodon található leírást</p>
                <div class="form-floating">
                    <textarea class="form-control my-4" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px"></textarea>
                    <label for="floatingTextarea2">Leírásod</label>
                </div>
                <a href="#" class="btn btn-warning px-2 position-absolute bottom-0 start-50 my-3">Új leírás mentése</a>
            </div>
        </div>
    </div>
</div>

<style>
    img {
        max-width: 130px;
        max-height: 130px;
        cursor: pointer;
    }

    img.clicked {
        border: 5px solid yellow;
    }
</style>

@endsection
