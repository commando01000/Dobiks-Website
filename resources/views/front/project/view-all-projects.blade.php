@extends('layouts.front.app')

@section('title', 'Projects')

@section('content')
    <section id="projects">
        <div class="container-fluid ps-0 pe-0">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    Projects
                </h1>
                <small class="content-section__description fs-6">HOME / PROJECTS</small>
            </div>
            <div style="background-color: #191919;max-width: 100% !important" id="projects-content"
                class="section-projects w-100 mt-5 pt-5 pb-5 p-1 overflow-hidden">

                <div class="m-auto">
                    <h2 class="w-100 section-projects__title ui heading size-headinglg">
                        <span class="section-projects__title-span-1">D<span class="section-projects__title-span">opiks
                                Projects<br>Page&nbsp;</span></span>
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
                        <div class="w-100 paginatior mt-3">
                            <nav>
                                <ul class="pagination justify-content-center" id="pagination-links">
                                    <!-- Pagination links will be dynamically inserted here -->
                                </ul>
                            </nav>
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
            @if ($categories->isNotEmpty())
                loadProjects({{ $categories->first()->id }});
            @endif
        });

        function loadProjects(categoryId, page = 1) {
            fetch(`/projects/category/${categoryId}?page=${page}`)
                .then(response => response.json())
                .then(data => {
                    console.log('Fetched data:', data); // Log the fetched data

                    let projectsList = document.getElementById('projects-list');
                    projectsList.innerHTML = '';

                    let baseUrl = "{{ url('/') }}";
                    let counter = 0; // Initialize a counter

                    let row; // Declare row variable outside the loop

                    data.data.forEach((project, index) => {
                        // Create a new row for the first item or after every 3 items
                        if (counter % 3 === 0) {
                            row = document.createElement('div');
                            row.classList.add('row', 'w-100', 'm-auto');
                        }

                        let projectItem = `
                        <div class="col-md-4 mt-4 ${(index - 1) % 3 == 0 ? 'p-4' : ''}"> <!-- Adjusted column class and margin bottom -->
                            <a href="/projects/${project.slug}" class="service">
                                <div class="service-header d-flex justify-content-between">
                                    <div class="category-name">
                                        <p class="user-profile__role ui text size-texts ${(index - 1) % 3 == 0 ? 'me-4' : ''}">
                                            ${project.title}
                                        </p>
                                    </div>
                                </div>
                                <div class="service__image ${(index - 1) % 3 == 0 ? 'text-center' : ''}">
                                    <img src="${baseUrl}/storage/app/${project.cover}" alt="${project.title}"> <!-- Assuming project.cover is the URL -->
                                </div>
                                <div class="service-title text-white mt-4">
                                    ${project.client}
                                </div>
                            </a>
                        </div>
                    `;

                        row.innerHTML += projectItem;
                        counter++; // Increment the counter

                        // Append row to projectsList after every 3 items (for 3 columns in a row)
                        if (counter % 3 === 0 || counter === data.data.length) {
                            projectsList.appendChild(row);
                        }
                    });

                    // Append the last row if it contains any columns and hasn't been appended yet
                    if (counter % 3 !== 0) {
                        projectsList.appendChild(row);
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
