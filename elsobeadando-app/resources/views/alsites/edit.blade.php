@extends('layouts.app')
@section('content')
<div class="row my-3">
    <div class="col-sm-6 d-flex align-items-stretch">
        <div class="card mx-3 my-3">
            <div class="card-body position-relative">
                <h5 class="card-title">Profilkép</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <div class="row">

                    @for ($i = 0; $i < 10; $i++)
                    <div class="col">
                        <!-- Add the 'profile-pic' class, 'data-name' attribute, and 'clicked' id -->
                        <img src="{{ asset('imgs/profilepics/' . Auth::user()->jpg) }}" class="my-2 mx-1 profile-pic" data-name="{{ Auth::user()->jpg }}" id="clicked">
                    </div>
                    @endfor

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
        cursor: pointer; /* Add cursor pointer for better UX */
    }

    img.clicked {
        border: 5px solid yellow;
    }
</style>

<!-- Add this script to your HTML file -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get all the image elements
        var images = document.querySelectorAll('.profile-pic');

        // Add a click event listener to each image
        images.forEach(function (image) {
            image.addEventListener('click', function () {
                // Remove the 'clicked' class from all images
                images.forEach(function (img) {
                    img.classList.remove('clicked');
                });

                // Get the name attribute of the clicked image
                var imageName = image.getAttribute('data-name');

                // Log the name to the console
                console.log('Clicked Image Name:', imageName);

                // Add the 'clicked' class to the clicked image
                image.classList.add('clicked');
            });
        });
    });
</script>

@endsection
