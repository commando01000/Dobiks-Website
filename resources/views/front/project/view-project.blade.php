@extends('layouts.front.app')

@section('title', 'Project Details')

@section('content')
    {{-- <section id="project-details" class="w-100 mt-0 p-1">
        <div class="container-fluid">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    {{ $project->client }}
                </h1>
                <small class="content-section__description fs-6">HOME / PROJECT DETAILS</small>
            </div>

            <div class="project-content mt-5 pt-md-5 pt-3 w-100">
                <div class="row w-75 m-auto align-items-start text-md-start text-center">
                    <div class="col-md-4">
                        <div class="title">
                            <h1 class="content-section__title fs-4">{{ $project->title }}</h1>
                        </div>
                        <div class="description d-flex">
                            <div class="d-flex flex-column text-center text-md-start">
                                <p class="content-section__description fs-6">
                                    {{ $project->description }}
                                </p>
                                <br>
                                <p class="content-section__description fs-6">Project Location:
                                    {{ $project->project_location }}
                                    <br> Project Time Frame: {{ $project->project_timeframe }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="title">
                            <h1 class="content-section__title fs-4 ">Client</h1>
                        </div>
                        <div class="description d-flex w-100">
                            <div>
                                <p class="content-section__description fs-6">
                                    {{ $project->client }}
                                </p>
                                <p class="content-section__description fs-6">{{ $project->title }}</p>
                            </div>
                        </div>
                        <div class="title">
                            <h1 class="content-section__title fs-4">Date</h1>
                        </div>
                        <div class="date d-flex justify-content-center justify-content-md-start">
                            <div>
                                <p class="content-section__description fs-6">
                                    {{ $project->created_at->format('jS F Y') }}
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex flex-column">
                            <div class="title">
                                <h1 class="content-section__title fs-4">Marketing Country</h1>
                            </div>
                            <div class="description d-flex">
                                <div>
                                    <p class="content-section__description fs-6 text-center text-md-start">Project Location:
                                        {{ $project->project_location }}
                                        <br> Project Time Frame: {{ $project->project_timeframe }}
                                    </p>
                                    <br>
                                    <p class="content-section__description fs-6 text-center text-md-start">Project Marketing
                                        Category: <br><br>
                                        <label tabindex="0" class="flex-row-center-center footer__social-chip--creative">
                                            <input type="checkbox" name="selectedChipOptions" value="1" hidden="true">
                                            <span> {{ $project->category->name }}</span>
                                            <template hidden="">
                                                <label unselected-styles="" class="dhi-group">
                                                </label>
                                                <label selected-styles="" class="dhi-group-1">
                                                </label>
                                            </template>
                                        </label>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="section-projects" class="column_three">
                <div id="projects-content" class="section-projects w-100 mt-0 p-1 overflow-hidden">
                    <h2 class="w-100 section-projects__title ui heading size-headinglg">
                        <span class="section-projects__title-span-1">P<span
                                class="section-projects__title-span">roject<br>Features&nbsp;</span></span>
                    </h2>
                    <div class="projects-content">
                        <ul class="nav nav-pills section-projects__content mb-3" id="pills-tab" role="tablist">
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
                        <div class="tab-content w-100" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="projects-list" role="tabpanel"
                                aria-labelledby="projects-list-tab">
                                <!-- Projects will be loaded here dynamically -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- @include('front.services.services-section') --}}

    {{-- @include('front.leaderships.section-leadership') --}}
    {{-- </div> --}}
    {{-- </section> --}}

    <!-- start title -->
    <section>
        <div class="container">
            <div class="main-title">
                <h1>{{ $project->client }}</h1>
                <div>
                    <a href="">Home</a>
                    <span class="slash">/</span>
                    <a href="">Projects</a>
                    <span class="slash">/</span>
                    <a href="">project details</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end title -->

    <!-- start project description -->
    @include('front.projects-section.projects')
    <!-- end project description -->

    <!-- start other projects -->
    <section>
        <div class="container">

            <h2 class="main-head">other <span>pr</span>ojects</h2>
            <div class="row projects">
                <!-- Projects will be loaded here dynamically -->

            </div>

            <a href="{{ route('see.all.projects') }}" class="main-btn btn">view all projects</a>

        </div>
    </section>
    <!-- end other projects -->

    <!-- start team section -->
    <section class="bg-dark-black">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="big-head">
                        <span>our team</span>
                        <p>meet our</p>
                        <h2>leadership</h2>
                    </div>
                    <div class="btn main-btn mx-0">
                        <span>view all leadership</span>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img class="img-fluid w-100" src="assets/leadership1.png" alt="leadership">
                            <div class="text-center mt-3">
                                <p class="fs-5">Ahmed bakry</p>
                                <span class="text-small text-light-gray">Managing Director</span>
                            </div>
                        </div>
                        <div class="col-4 mt-5">
                            <img class="img-fluid w-100" src="assets/leadership2.png" alt="leadership">
                            <div class="text-center mt-3">
                                <p class="fs-5">Ahmed bakry</p>
                                <span class="text-small text-light-gray">Managing Director</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <img class="img-fluid w-100" src="assets/leadership3.png" alt="leadership">
                            <div class="text-center mt-3">
                                <p class="fs-5">Ahmed bakry</p>
                                <span class="text-small text-light-gray">Managing Director</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end team section -->
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fetch data for the first category initially
            @if ($categories->isNotEmpty())
                loadProjects({{ $categories->first()->id }});
            @endif
        });

        function loadProjects(categoryId, page = 1) {
            fetch(`/projects/category/${categoryId}?page=${page}`)
                .then(response => response.json())
                .then(data => {
                    console.log('Fetched data:', data); // Log the fetched data
                    let projectsSection = document.querySelector('.projects');
                    projectsSection.innerHTML = ''; // Clear previous projects

                    baseUrl = "{{ url('/') }}";
                    let counter = 1; // Initialize a counter
                    let row = document.createElement('div');
                    row.classList.add('row');
                    let projects = data.data;
                    projects.forEach((project, index) => {
                        let projectItem = `
                            <div class="col-6 col-md-4 mb-4">
                                <a href="/projects/${project.slug}" class="${(index - 1) % 3 == 0 ? 'pt-md-4 d-block' : ''}">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="number">${counter}</span>
                                        <p class="text-light-gray">${project.title}</p>
                                    </div>
                                    <img class="img-fluid w-100" src="${baseUrl}/storage/app/${project.cover}" alt="${project.title}">
                                    <p class="my-2 fs-5"> ${project.client }</p>
                                </a>
                            </div>
                    `;

                        // Append projectItem to row
                        row.innerHTML += projectItem;
                        counter++; // Increment the counter

                        // Append row to projectsSection after every 3 items (for 3 columns in a row)
                        if (counter % 3 === 1) {
                            projectsSection.appendChild(row);
                            row = document.createElement('div');
                            row.classList.add('row');
                        }
                    });

                    // Append the last row if it's not already added
                    if (data.length % 3 !== 0) {
                        projectsSection.appendChild(row);
                    }

                    // Update pagination links
                    let paginationLinks = document.getElementById('pagination-links');
                    paginationLinks.innerHTML = ''; // Clear existing pagination

                    if (data.links && data.links.length > 0) {
                        let paginationHtml = '';

                        // Previous Page Link
                        if (data.current_page > 1) {
                            paginationHtml +=
                                `<li class=""><a class="" href="javascript:void(0)" onclick="loadProjects(${categoryId}, ${data.current_page - 1})">←</a></li>`;
                        } else {
                            paginationHtml += `<li class="disabled"><span class="">←</span></li>`;
                        }

                        // Pagination Elements
                        data.links.forEach(link => {
                            if (link.url) {
                                paginationHtml +=
                                    `<li class="${link.active ? 'active' : ''}"><a class="" href="javascript:void(0)" onclick="loadProjects(${categoryId}, ${link.url.split('page=')[1]})"><span>${link.label}</span></a></li>`;
                            } else {
                                paginationHtml +=
                                    `<li class="disabled"><span class="">${link.label}</span></li>`;
                            }
                        });

                        // Next Page Link
                        if (data.current_page < data.last_page) {
                            paginationHtml +=
                                `<li class=""><a class="" href="javascript:void(0)" onclick="loadProjects(${categoryId}, ${data.current_page + 1})">→</a></li>`;
                        } else {
                            paginationHtml += `<li class="disabled"><span class="">→</span></li>`;
                        }

                        paginationLinks.innerHTML = paginationHtml;
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
