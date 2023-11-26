@extends('layouts.app')
@section('content')
<style>
    .youtube-video {
        aspect-ratio: 16 / 9;
        width: 100%;
    }
</style>
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
                    <iframe class="youtube-video" width="100%" height="100%" src="https://onedrive.live.com/embed?resid=4ABE77F844B529FD%2160416&amp;authkey=!ANR4SIuNq_LllSQ&amp;em=2&amp;wdAr=1.7777777777777777" frameborder="0">Ez egy beágyazott <a target="_blank" href="https://office.com">Microsoft Office</a>-bemutató, amelynek szolgáltatója a(z) <a target="_blank" href="https://office.com/webapps">Office</a>.</iframe>
                </div>

                <div id="tab2" class="tab-content" style="display: none;"> <!-- Content for tab 2 -->
                    <h3 class="card-title">Az autóhoz járó gyári kazetta:</h3>
                    <iframe class="youtube-video" src="https://www.youtube.com/embed/V3jd5Ob0KBI?si=p8gUyouqeuMTIeBv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p class="card-text">OPEL ASTRA F személygépkocsi bemutatása, gyártása, kezelési és karbantartási útmutató</p>
                </div>
                <div id="tab3" class="tab-content" style="display: none;"> <!-- Content for tab 3 -->
                    <h3 class="card-title">Opel Astra F gyártása Magyarországon</h3>
                    <iframe class="youtube-video" src="https://www.youtube.com/embed/vvGJZKavU0o?si=uaFd6RDWo8sZv-9Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p class="card-text">Gyártásbemutató kisfilm a '90-es évek elejéről.</p>
                </div>
                <div id="tab4" class="tab-content" style="display: none;"> <!-- Content for tab 4 -->
                    <h3 class="card-title">2002-es Opel Kupa (Rábaring)</h3>
                    <iframe class="youtube-video" src="https://www.youtube.com/embed/g-ypPq5wxa4?si=LbAqCMxm1kOWWjlM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p class="card-text">2005-ig éves rendszerességű eseményként tartották meg Magyarországon.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // JavaScript to handle tab switching
        const tabs = document.querySelectorAll('.nav-link');
        const tabContents = document.querySelectorAll('.tab-content');

        // Function to show the corresponding tab content
        const showTabContent = (tabId) => {
            tabContents.forEach(content => {
                content.style.display = 'none';
            });

            const tabContent = document.getElementById(tabId);
            if (tabContent) {
                tabContent.style.display = 'block';
            }
        };

        // Event listener for tab clicks
        tabs.forEach(tab => {
            tab.addEventListener('click', function (event) {
                event.preventDefault();

                // Remove 'active' class from all tab links
                tabs.forEach(link => {
                    link.classList.remove('active');
                });

                // Add 'active' class to the clicked tab link
                tab.classList.add('active');

                // Show the corresponding tab content
                const tabId = tab.getAttribute('data-tab');
                showTabContent(tabId);

                // Save the active tab to a cookie
                Cookies.set('activeTab', tabId);
            });
        });

        // Check if a cookie exists for the active tab and set it
        const savedActiveTab = Cookies.get('activeTab');
        if (savedActiveTab) {
            tabs.forEach(tab => {
                tab.classList.remove('active');
            });

            const savedTab = document.querySelector(`[data-tab="${savedActiveTab}"]`);
            if (savedTab) {
                savedTab.classList.add('active');
                showTabContent(savedActiveTab);
            }
        }
    });
</script>
@endsection
