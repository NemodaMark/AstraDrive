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
                    <li class="nav-item">
                        <a class="nav-link" data-tab="tab3" href="#">Gyártás</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-tab="tab4" href="#">Opel Kupa</a>
                    </li>

                </ul>
            </div>

            <div class="card-body">
                <div id="tab1" class="tab-content"> <!-- Content for tab 1 -->
                    <h5 class="card-title">Interaktív tananyag</h5>
                    <iframe src="https://onedrive.live.com/embed?resid=4ABE77F844B529FD%2160416&amp;authkey=!ANR4SIuNq_LllSQ&amp;em=2&amp;wdAr=1.7777777777777777" width="476px" height="288px" frameborder="0">Ez egy beágyazott <a target="_blank" href="https://office.com">Microsoft Office</a>-bemutató, amelynek szolgáltatója a(z) <a target="_blank" href="https://office.com/webapps">Office</a>.</iframe>
                </div>

                <div id="tab2" class="tab-content" style="display: none;"> <!-- Content for tab 2 -->
                    <h3 class="card-title">Az autóhoz járó gyári kazetta:</h3>
                    <iframe width="800" height="600"  src="https://www.youtube.com/embed/V3jd5Ob0KBI"></iframe>
                    <p class="card-text">OPEL ASTRA F személygépkocsi bemutatása, gyártása, kezelési és karbantartási útmutató</p>
                </div>
                <div id="tab3" class="tab-content" style="display: none;"> <!-- Content for tab 3 -->
                    <h3 class="card-title">Opel Astra F gyártása Magyarországon</h3>
                    <iframe width="800" height="600"  src="https://www.youtube.com/embed/vvGJZKavU0o?si=uaFd6RDWo8sZv-9Y"></iframe>
                    <p class="card-text">Gyártásbemutató kisfilm a '90-es évek elejéről.</p>
                </div>
                <div id="tab4" class="tab-content" style="display: none;"> <!-- Content for tab 4 -->
                    <h3 class="card-title">2002-es Opel Kupa (Rábaring)</h3>
                    <iframe width="800" height="600"  src="https://www.youtube.com/embed/g-ypPq5wxa4?si=LbAqCMxm1kOWWjlM"></iframe>
                    <p class="card-text">2005-ig éves rendszerességű eseményként tartották meg Magyarországon.</p>
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
