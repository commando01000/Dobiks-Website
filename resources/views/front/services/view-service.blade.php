@extends('layouts.front.app')

@section('content')
    <section id="services" class="w-100 mt-0 p-1 overflow-hidden">
        <main class="container-fluid ps-0 pe-0">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    {{ $service->title }}
                </h1>
                <small class="content-section__description fs-6">HOME / SERVICES DETAILS</small>
            </div>

            <div class="service-details m-5 p-5">
                <div class="container">
                    <div class="row m-auto d-flex justify-content-between">
                        <div class="col-md-6">
                            <div class="title">
                                <h1 class="content-section__title fs-4">{{ $service->category->name }}</h1>
                            </div>
                            <br>
                            <div class="description">
                                <p class="content-section__description fs-6">
                                    {{ $service->short_description }}
                                </p>
                                <br>
                                <div class="service-detail content-section__description fs-6 w-100">
                                    <?php
                                    $var = html_entity_decode($service->description);
                                    
                                    echo $var;
                                    
                                    ?>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 text-end">
                            <div class="service-image w-100">
                                <img style="width: 300px !important; height: 300px !important" class="w-100"
                                    src="{{ asset('storage/app/' . $service->cover) }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('front.services.services-section')

            </div>
        </main>
    </section>

    @include('front.clients-section.clients')

    <section id="section-contact-us" class="section p-1">
        <main class="container-fluid">
            @include('front.contact.contact-us-form')
        </main>
    </section>
@endsection


@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fetch data for the first category initially
            @if ($categories->isNotEmpty())
                loadServices({{ $categories->first()->id }});
            @endif
        });

        function loadServices(categoryId) {
            fetch(`/services/category/${categoryId}`)
                .then(response => response.json())
                .then(data => {
                    console.log('Fetched data:', data); // Log the fetched data

                    let projectsList = document.getElementById('services-list');
                    projectsList.innerHTML = '';

                    baseUrl = "{{ url('/') }}";
                    let counter = 1; // Initialize a counter
                    let row = document.createElement('div');
                    row.classList.add('row');
                    row.classList.add('w-100');
                    row.classList.add('m-auto');

                    data.forEach((project, index) => {
                        let projectItem = `
                        <div class="col-md-4 mt-4 ${index % 2 != 0 ? 'p-4' : ''}"> <!-- Adjusted column class and margin bottom -->
                            <div onclick="window.location.href = '/services/${project.slug}'" class="service">
                                <div class="service-header d-flex justify-content-between">
                                    <div class="service-number">
                                        <p>${counter}</p>
                                    </div>
                                    <div class="category-name">
                                        <p class="user-profile__role ui text size-texts ${index % 2 != 0 ? 'me-4' : ''}">
                                            ${project.title}
                                        </p>
                                    </div>
                                </div>
                                <div class="service__image ${index % 2 != 0 ? 'text-center' : ''}">
                                    <img src="${baseUrl}/storage/app/${project.cover}" alt="image"> <!-- Assuming project.cover is the URL -->
                                </div>
                                <div class="service-title mt-4">
                                    ${project.title}
                                </div>
                            </div>
                        </div>
                        `;

                        // Append projectItem to row
                        row.innerHTML += projectItem;
                        counter++; // Increment the counter

                        // Append row to projectsList after every 3 items (for 3 columns in a row)
                        if (counter % 3 === 1) {
                            projectsList.appendChild(row);
                            row = document.createElement('div');
                            row.classList.add('row');
                            row.classList.add('w-100');
                            row.classList.add('m-auto');
                        }
                    });

                    // Append the last row if it's not already added
                    if (data.length % 3 !== 0) {
                        projectsList.appendChild(row);
                    }
                })
                .catch(error => {
                    console.error('Error fetching projects:', error); // Log any errors
                });
        }

        // Ensure that loadProjects is available globally
        window.loadProjects = loadProjects;
    </script>
@endsection
