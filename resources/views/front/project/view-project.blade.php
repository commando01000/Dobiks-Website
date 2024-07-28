@extends('layouts.front.app')

@section('title', 'Project Details')

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
                <div class="row w-75 m-auto">
                    <div class="col-md-4">
                        <div class="title text-start">
                            <h1 class="content-section__title fs-4">{{ $project->title }}</h1>
                        </div>
                        <div class="description d-flex justify-content-start">
                            <div class="d-flex justify-content-center flex-column">
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
                        <div class="title text-center">
                            <h1 class="content-section__title fs-4 ">Client</h1>
                        </div>
                        <div class="description d-flex w-100 justify-content-center">
                            <div class="text-center">
                                <p class="content-section__description fs-6">
                                    {{ $project->client }}
                                </p>
                                <p class="content-section__description fs-6">{{ $project->title }}</p>
                            </div>
                        </div>
                        <div class="title text-center">
                            <h1 class="content-section__title fs-4 text-center">Date</h1>
                        </div>
                        <div class="date d-flex ms-4 justify-content-center">
                            <div>
                                <p class="content-section__description fs-6 text-center">
                                    {{ $project->created_at->format('jS F Y') }}
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="title">
                            <h1 class="content-section__title fs-4 text-center">Marketing Country</h1>
                        </div>
                        <div class="description d-flex ms-5 ps-5 justify-content-start">
                            <div>
                                <p class="content-section__description fs-6">Project Location:
                                    {{ $project->project_location }}
                                    <br> Project Time Frame: {{ $project->project_timeframe }}
                                </p>
                                <br>
                                <p class="content-section__description fs-6">Project Marketing Category: <br><br>
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

            <div id="section-projects" class="column_three">
                <div id="projects-content" class="section-projects w-100 mt-0 p-1 overflow-hidden">
                    <h2 class="w-100 section-projects__title ui heading size-headinglg">
                        <span class="section-projects__title-span-1">P<span class="section-projects__title-span">ro
                                ject<br>Features&nbsp;</span></span>
                    </h2>
                    {{-- <ul class="nav nav-pills section-projects__content mb-3" id="pills-tab" role="tablist">
                        @foreach ($categories as $category)
                            <li class="nav-item" role="presentation">
                                <button
                                    class="position-relative nav-link {{ $loop->first ? 'active' : '' }} text-decoration-none section__tab-item"
                                    id="pills-{{ $category->slug }}-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-{{ $category->slug }}" type="button" role="tab"
                                    aria-controls="pills-{{ $category->slug }}"
                                    aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                    <div class="circle position-absolute start-0 z-0"></div>
                                    <div class="position-relative text z-1 text-white">
                                        {{ $category->name }}
                                    </div>
                                </button>
                            </li>
                        @endforeach
                    </ul> --}}
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

            @include('front.leaderships.section-leadership')
        </div>
    </section>
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
            fetch(`/home/projects/category/${categoryId}`)
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
                        <div class="col-md-4 mt-4 ${(index - 1) % 3 == 0 ? 'p-4' : ''}"> <!-- Adjusted column class and margin bottom -->
                            <div onclick="window.location.href = '/projects/${project.slug}'" style="cursor: pointer" class="service">
                                <div class="service-header d-flex justify-content-between">
                                    <!-- <div class="service-number">
                                        <p>${index + 1}</p>
                                    </div> -->
                                    <div class="category-name">
                                        <p class="user-profile__role ui text size-texts ${(index - 1) % 3 == 0 ? 'me-4' : ''}">
                                            ${project.title}
                                        </p>
                                    </div>
                                </div>
                                <div class="service__image ${(index - 1) % 3 == 0 ? 'text-center' : ''}">
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
