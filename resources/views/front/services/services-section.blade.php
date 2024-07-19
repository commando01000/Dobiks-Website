<div id="services-content" class="w-100 mt-5 pt-5 m-auto p-1">
    <div class="services-content">
        <h2 class="section-projects__title ui heading size-headinglg">
            <span class="section-projects__title-span-1">client <span
                    class="section-projects__title-span">Categories<br>&nbsp;</span>
            </span>
            <br>
            <p class="content-section__description pt-3">{{ Utility::getsettings('service_detail') }}</p>
        </h2>
        <!-- resources/views/projects/index.blade.php -->
        <ul class="nav nav-pills section__tabs" id="pills-tab" role="tablist">
            @foreach ($categories as $category)
                <li class="nav-item" role="presentation">
                    <button
                        class="position-relative nav-link {{ $loop->first ? 'active' : '' }} text-decoration-none section__tab-item"
                        id="pills-{{ $category->id }}-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-{{ $category->id }}" type="button" role="tab"
                        aria-controls="pills-{{ $category->id }}" aria-selected="false" tabindex="0"
                        style="cursor: pointer" onclick="loadServices({{ $category->id }})">
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

{{-- @section('js')
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
        window.loadServices = loadServices;
    </script>
@endsection --}}
