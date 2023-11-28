@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    {{-- @for ($i = 0; $i < 16; $i++)
    <div class="col-3 my-2 mx-3">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('imgs/profilepics/06.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="col">
                    <a href="#" class="btn btn-warning mx-2">Szerkesztés</a>
                    <a href="#" class="btn btn-danger mx-2">Autó Törlése</a>
                </div>
            </div>
        </div>
    </div>
    @endfor --}}
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Prompt user for input
        var userInput = prompt('Please enter a number:');

        // Check if userInput is a number and greater than 0
        if (!isNaN(userInput) && parseInt(userInput) > 0) {
            // Display cards based on the user's input
            for (var i = 0; i < parseInt(userInput); i++) {
                // You can modify this part to display the cards dynamically
                var newCard = document.createElement('div');
                newCard.classList.add('col-3', 'my-2', 'mx-3');
                newCard.innerHTML = `
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('imgs/profilepics/06.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="col">
                                <a href="#" class="btn btn-warning mx-2">Szerkesztés</a>
                                <a href="#" class="btn btn-danger mx-2">Autó Törlése</a>
                            </div>
                        </div>
                    </div>
                `;
                document.querySelector('.row.justify-content-center').appendChild(newCard);
            }
        } else if (parseInt(userInput) === 0) {
            // Do nothing if the input is 0
            console.log('User entered 0. Nothing happens.');
        } else {
            // Handle invalid input
            alert('Please enter a valid number greater than 0.');
        }
    });
</script>

@endsection
