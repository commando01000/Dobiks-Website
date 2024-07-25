@extends('layouts.front.app')

@section('content')
    <sec id="section-projects" class="column_three">
        <div id="projects-content" class="section-projects w-100 mt-0 p-1 overflow-hidden">
            <h2 class="w-100 section-projects__title ui heading size-headinglg">
                <span class="section-projects__title-span-1">D<span class="section-projects__title-span">opiks
                        Projects<br>Page&nbsp;</span></span>
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
                <nav>
                    <ul class="pagination justify-content-center" id="pagination-links">
                        <!-- Pagination links will be dynamically inserted here -->
                    </ul>
                </nav>
            </div>
        </div>
    </sec>
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
                    <div onclick="window.location.href = '/projects/${project.slug}'" class="service">
                        <div class="service-header d-flex justify-content-between">
                            <div class="service-number">
                                <p>${counter + 1}</p>
                            </div>
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

                    data.links.forEach(link => {
                        if (link.url) {
                            paginationLinks.innerHTML +=
                                `<li class="page-item ${link.active ? 'active' : ''}"><a class="page-link" href="javascript:void(0)" onclick="loadProjects(${categoryId}, ${link.url.split('page=')[1]})">${link.label}</a></li>`;
                        } else {
                            paginationLinks.innerHTML +=
                                `<li class="page-item disabled"><span class="page-link">${link.label}</span></li>`;
                        }
                    });
                })
                .catch(error => {
                    console.error('Error fetching projects:', error); // Log any errors
                });
        }

        // Ensure that loadProjects is available globally
        window.loadProjects = loadProjects;
    </script>
@endsection
