@extends('layouts.front.app')

@section('content')
    <section id="services" class="w-100 mt-0 p-1 overflow-hidden">
        <main class="container-fluid ps-0 pe-0">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    {{ Utility::getsettings('project_name') }}
                </h1>
                <small class="content-section__description fs-6">HOME / SERVICES</small>
            </div>



            <div id="services-content" class="w-100 mt-5 pt-5 m-auto p-1">
                <div class="services-content">
                    <h2 class="section-projects__title ui heading size-headinglg">
                        <span class="section-projects__title-span-1">Services <span
                                class="section-projects__title-span"><br>Categories&nbsp;</span>
                        </span>
                        {{-- <p class="content-section__description pt-3">{{ Utility::getsettings('service_detail') }}</p> --}}
                    </h2>
                    <ul class="nav nav-pills section__tabs" id="pills-tab" role="tablist">
                        @foreach ($categories as $category)
                            <li class="nav-item" role="presentation">
                                <button
                                    class="position-relative nav-link {{ $loop->first ? 'active' : '' }} text-decoration-none section__tab-item"
                                    id="pills-{{ $category->id }}-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-{{ $category->id }}" type="button" role="tab"
                                    aria-controls="pills-{{ $category->id }}" aria-selected="false" tabindex="0"
                                    style="cursor: pointer" onclick="loadProjects({{ $category->id }})">
                                    <div class="circle position-absolute start-0 z-0"></div>
                                    <div class="position-relative text z-1 text-white">
                                        {{ $category->name }}
                                    </div>
                                </button>
                            </li>
                        @endforeach
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="services-list" role="tabpanel"
                            aria-labelledby="services-list-tab">
                            <!-- Projects will be loaded here dynamically -->
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
    @include('front.clients-section.clients')
    {{-- @include('front.contact.contactus') --}}
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fetch data for the first category initially
            @if ($categories->isNotEmpty())
                loadProjects({{ $categories->first()->id }});
            @endif
        });

        function loadProjects(categoryId) {
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
