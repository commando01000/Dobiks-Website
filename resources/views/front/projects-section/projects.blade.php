<div id="section-projects" class="column_three">
    <div class="section-projects w-100 mt-0 p-1 overflow-hidden">
        <h2 class="section-projects__title ui heading size-headinglg">
            <span class="section-projects__title-span-1">S<span
                    class="section-projects__title-span">ervices<br>CATEGORIES&nbsp;</span></span>
        </h2>
        <ul class="nav nav-pills section__tabs" id="pills-tab" role="tablist">
            @foreach ($categories as $category)
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-decoration-none section__tab-item" id="pills-{{ $category->id }}-tab"
                        data-bs-toggle="pill" data-bs-target="#pills-{{ $category->id }}" type="button" role="tab"
                        aria-controls="pills-{{ $category->id }}" aria-selected="false" tabindex="0"
                        style="cursor: pointer" onclick="loadProjects({{ $category->id }})">
                        {{ $category->name }}
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

    </div>
</div>
<div class="section-projects__actions w-100">
    <div class="section-projects__action-row">
        <div class="section__call-to-action-row">
            <p class="section__call-to-action-text ui text-white text size-btn_text">
                <!-- Wrap "vie" for individual styling -->
                <span class="section__feature-bg">view</span> &nbsp; all
                projects
            </p>
            <img src="{{ asset('assets/front_assets/images/img_arrow.svg') }}" alt="arrow image"
                class="section__call-to-action-icon" />
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

                    data.forEach(project => {
                        let projectItem = `
<div class="col-md-4 mb-4"> <!-- Adjusted column class and margin bottom -->
    <div class="service">
        <div class="service-header d-flex justify-content-between">
            <div class="service-number">
                <p>${counter}</p>
            </div>
            <div class="category-name">
                <p class="user-profile__role ui text size-texts">
                    ${project.title}
                </p>
            </div>
        </div>
        <div class="service__image">
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
        window.loadProjects = loadProjects;
    </script>
@endsection
