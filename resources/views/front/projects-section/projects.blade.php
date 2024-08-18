{{-- <div id="section-projects" class="column_three">
    <div id="projects-content" class="section-projects w-100 mt-0 p-1 overflow-hidden">
        <h2 class="w-100 section-projects__title ui heading size-headinglg">
            <span class="section-projects__title-span-1">O<span class="section-projects__title-span">ur
                    Latest<br>Projects&nbsp;</span></span>
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
                                    <img src="${baseUrl}/storage/app/${project.cover}" alt="${project.title}"}"> <!-- Assuming project.cover is the URL -->
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
@endsection --}}

<!-- start projects -->
<section class="bg-dark-black">
    <div class="container">
        @if (Route::currentRouteName() == 'view.project')
            @include('front.projects-section.projects-section-details-title')
        @else
            @include('front.projects-section.projects-section-home-title')
        @endif

        @if (Route::currentRouteName() != 'view.project')
            <div id="secondary-nav" class="d-flex flex-wrap align-items-center my-5 gap-5">
                @foreach ($categories as $category)
                    <button onclick="loadProjects({{ $category->id }})"
                        class="main-btn-nav btn main-btn {{ $loop->first ? 'active' : '' }}">{{ $category->name }}</button>
                @endforeach
            </div>
        @endif
        <div class="row projects">
            <!-- Projects will be loaded here dynamically -->
        </div>
        {{-- <div data-count="3" class="pagination number" id="pagination">
            <button class="btn" id="prev"><a href="#">&lt;&lt; Previous</a></button>
            <a href="#" class="page-link" data-page="1">1</a>
            <a href="#" class="page-link" data-page="2">2</a>
            <a href="#" class="page-link" data-page="3">3</a>
            <button class="btn" id="next"><a href="#">Next &gt;&gt;</a></button>
        </div> --}}
    </div>
</section>
<!-- end projects -->

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
                    let projectsSection = document.querySelector('.projects');
                    projectsSection.innerHTML = ''; // Clear previous projects

                    baseUrl = "{{ url('/') }}";
                    let counter = 1; // Initialize a counter
                    let row = document.createElement('div');
                    row.classList.add('row');

                    data.forEach((project, index) => {
                        let projectItem = `
                    <div class="col-6 col-md-4 mb-4">
                        <a href="/projects/${project.slug}">
                            <img class="img-fluid w-100" src="${baseUrl}/storage/app/${project.cover}" alt="${project.title}">
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
                })
                .catch(error => {
                    console.error('Error fetching projects:', error); // Log any errors
                });
        }

        // Ensure that loadProjects is available globally
        window.loadProjects = loadProjects;
    </script>
@endsection
