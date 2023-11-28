@extends('layouts.app')

@section('content')
<div class="row my-3">
    <div class="col-sm-6 d-flex align-items-stretch">
        <div class="card mx-3 my-3">
            <div class="card-body position-relative">
                <h5 class="card-title">Profilkép</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <div class="row">
                    @foreach ($pictures as $pic)
                    <div class="col">
                        <a href="{{ route('picture.change', ['jpg' => $pic->jpg]) }}" class="my-2 mx-1 profile-pic">
                            <img src="{{ asset('imgs/profilepics/' . $pic->jpg) }}" class="{{ Auth::user()->jpg == $pic->jpg ? 'clicked' : '' }}" data-name="{{ $pic->jpg }}">
                        </a>
                    </div>
                    @endforeach
                </div>
                <a href="#" class="btn btn-warning px-2 position-absolute bottom-0 start-50 translate-middle-x my-3">Profilkép cseréje</a>
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
