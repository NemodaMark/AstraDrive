@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-tab="tab1" aria-current="true" href="#">Power Point Tananyag</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-tab="tab2" href="#">Az eredeti videó tanagyag</a>
                    </li>
                </ul>
            </div>

            <div class="card-body">
                <div id="tab1" class="tab-content"> <!-- Content for tab 1 -->
                    <h5 class="card-title">Special title treatment 1</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content 1.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>

                <div id="tab2" class="tab-content" style="display: none;"> <!-- Content for tab 2 -->
                    <h3 class="card-title">Az autóhoz járó gyári kazetta:</h3>
                    <iframe width="800" height="600"  src="https://www.youtube.com/embed/V3jd5Ob0KBI"></iframe>
                    <p class="card-text">OPEL ASTRA F személygépkocsi bemutatása, gyártása, kezelési és karbantartási útmutató</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

//Még át kell nézni, a "copyright" résznél sajnos buggos, szinte 100% hogy itt akad el :D

    // JavaScript to handle tab switching
    document.querySelectorAll('.nav-link').forEach(function(tabLink) {
        tabLink.addEventListener('click', function(event) {
            event.preventDefault();

            // Remove 'active' class from all tab links
            document.querySelectorAll('.nav-link').forEach(function(link) {
                link.classList.remove('active');
            });

            // Add 'active' class to the clicked tab link
            tabLink.classList.add('active');

            // Hide all tab content
            document.querySelectorAll('.tab-content').forEach(function(content) {
                content.style.display = 'none';
            });

            // Show the corresponding tab content
            const tabId = tabLink.getAttribute('data-tab');
            document.getElementById(tabId).style.display = 'block';
        });
    });
</script>
@endsection
