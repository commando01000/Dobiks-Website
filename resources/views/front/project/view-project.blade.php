@extends('layouts.front.app')

@section('content')
    <section id="project-details" class="w-100 mt-0 p-1">
        <div class="container-fluid">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    {{ $project->client }}
                </h1>
                <small class="content-section__description fs-6">HOME / PROJECT DETAILS</small>
            </div>

            <div class="project-content mt-5 pt-5 w-100">
                <div class="row w-75 text-center m-auto">
                    <div class="col-md-4">
                        <div class="title">
                            <h1 class="content-section__title fs-4">{{ $project->title }}</h1>
                        </div>
                        <br>
                        <div class="description">
                            <p class="content-section__description fs-6">
                                {{ $project->description }}
                            </p>
                            <br>
                            <p class="content-section__description fs-6">Project Location: {{ $project->project_location }}
                                <br> Prject Time Frame: {{ $project->project_timeframe }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="title">
                            <h1 class="content-section__title fs-4">Client</h1>
                        </div>
                        <div class="description">
                            <p class="content-section__description fs-6">
                                {{ $project->client }}
                            </p>
                            <p class="content-section__description fs-6">{{ $project->title }}</p>
                        </div>
                        <div class="title">
                            <h1 class="content-section__title fs-4">Date</h1>
                        </div>
                        <div class="date">
                            <p class="content-section__description fs-6">
                                {{ $project->created_at->format('jS F Y') }}
                            </p>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="title">
                            <h1 class="content-section__title fs-4">Marketing Country</h1>
                        </div>
                        <br>
                        <div class="description">
                            <p class="content-section__description fs-6">
                                {{ $project->description }}
                            </p>
                            <br>
                            <p class="content-section__description fs-6">Project Marketing Category: <br>
                                {{ $project->category->name }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-projects w-100 mt-0 p-1 overflow-hidden">
                <h2 class="section-projects__title ui heading size-headinglg">
                    <span class="section-projects__title-span-1">P<span
                            class="section-projects__title-span">roject<br>Features&nbsp;</span></span>
                </h2>
                <ul class="nav nav-pills section-projects__content mb-3" id="pills-tab" role="tablist">
                    @foreach ($categories_projects as $category)
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
                    <div class="tab-pane fade show active" id="projects-list" role="tabpanel"
                        aria-labelledby="projects-list-tab">
                        <!-- Projects will be loaded here dynamically -->
                    </div>
                </div>

                <div class="section-projects__actions w-100">
                    <div class="section-projects__action-row">
                        <div class="section__call-to-action-row">
                            {{-- <p class="section__call-to-action-text ui text-white text size-btn_text">
                                <span class="section__feature-bg">view</span> &nbsp; all
                                projects
                            </p> --}}
                            <p class="section__call-to-action-text ui text-white text size-btn_text">
                                <a href="{{ route('see.all.projects') }}" class="section__feature-bg text-white">
                                    view all projects
                                </a>
                            </p>

                            <img src="{{ asset('assets/front_assets/images/img_arrow.svg') }}" alt="arrow image"
                                class="section__call-to-action-icon" />
                        </div>
                    </div>
                </div>
            </div>

            @include('front.services.services-section')

            <div class="meet-our-leadership w-100 mt-5 p-1 pt-5">
                <div class="container">
                    <div class="content-leadership d-flex flex-wrap justify-content-between align-items-center">
                        <div class="team-section__header-content">
                            <div class="team-section__title-row">
                                <p class="section__title ui text size-btn_text">Our Team</p>
                                <div class="team-section__divider"></div>
                            </div>
                            <div class="section__header">
                                <h2 class="team-section__subtitle ui heading size-headings">
                                    Meet Our
                                </h2>
                                <h3 class="section__highlight ui heading size-headinglg">
                                    Leadership
                                </h3>
                            </div>
                            <div>
                                <div class="team-section__action-row">
                                    <div class="section__feature-bg"></div>
                                    <div class="team-section__action-content">
                                        <p class="section__call-to-action-text ui text size-btn_text">
                                            <a href="{{ route('about-us') }}"> view all Leadership<a>
                                        </p>
                                        <img src="{{ asset('assets/front_assets/images/img_arrow.svg') }}"
                                            alt="arrow image" class="section__call-to-action-icon" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-section__members d-flex flex-wrap">
                            @foreach ($leaderships as $leadership)
                                <div class="user-profile">
                                    <img src="{{ Storage::url($leadership->photo) }}" alt="profile image"
                                        class="user-profile__image @if ($loop->index % 2 != 0) pt-4 @endif">
                                    <p class="user-profile__name ui text size-textxl">
                                        {{ $leadership->name }}
                                    </p>
                                    <p class="user-profile__role ui text size-texts">
                                        {{ $leadership->position }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fetch data for the first category initially
            @if ($categories_projects->isNotEmpty())
                loadProjects({{ $categories_projects->first()->id }});
            @endif
            @if ($categories->isNotEmpty())
                loadServices({{ $categories->first()->id }});
            @endif
        });

        function loadProjects(categoryId) {
            fetch(`/projects/category/${categoryId}`)
                .then(response => response.json())
                .then(data => {
                    console.log('Fetched data:', data); // Log the fetched data

                    let projectsList = document.getElementById('projects-list');
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
                            <div onclick="window.location.href = '/projects/${project.slug}'" class="service">
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
                                    ${project.client}
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
        window.loadServices = loadServices;
        window.loadProjects = loadProjects;
    </script>
@endsection
