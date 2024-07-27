<div id="services-content" class="w-100 mt-5 pt-5 m-auto p-1">
    <div class="services-content">
        <h2 class="section-projects__title ui heading size-headinglg">
            <span class="section-projects__title-span-1">client <span
                    class="section-projects__title-span">Categories&nbsp;</span>
            </span>
            {{-- <p class="content-section__description pt-3">{{ Utility::getsettings('service_detail') }}</p> --}}
        </h2>
        <!-- resources/views/projects/index.blade.php -->
        <ul class="nav w-75 nav-pills section-projects__content mb-3" id="pills-tab" role="tablist">
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

        <div class="tab-content w-100" id="pills-tabContent">
            <div class="tab-pane fade show active" id="services-list" role="tabpanel"
                aria-labelledby="services-list-tab">
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

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if ($categories->isNotEmpty())
                loadServices({{ $categories->first()->id }});
            @endif
        });

        function loadServices(categoryId, page = 1) {
            fetch(`/services/category/${categoryId}?page=${page}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Fetched data:', data);

                    let projectsList = document.getElementById('services-list');
                    if (!projectsList) {
                        console.error('Element "services-list" not found');
                        return;
                    }
                    projectsList.innerHTML = '';

                    let baseUrl = "{{ url('/') }}";
                    let counter = 0;

                    let row;

                    data.data.forEach((project, index) => {
                        if (counter % 3 === 0) {
                            row = document.createElement('div');
                            row.classList.add('row', 'w-100', 'm-auto');
                        }

                        let projectItem = `
                        <div class="col-md-4 pb-5 mt-4">
                            <div style="min-height: 300px; text-align: center; max-height: 400px; max-width: 414px" onclick="window.location.href = '/services/${project.slug}'" class="w-100 m-auto service">
                                <a href="/services/${project.slug}" class="d-block text-decoration-none">
                                    <div class="service__image text-center">
                                        <img class="object-fit-cover" src="${baseUrl}/storage/app/${project.cover}" alt="${project.title}">
                                    </div>
                                </a>
                            </div>
                        </div>
                        `;

                        row.innerHTML += projectItem;
                        counter++;

                        if (counter % 3 === 0 || counter === data.data.length) {
                            projectsList.appendChild(row);
                        }
                    });

                    if (counter % 3 !== 0) {
                        projectsList.appendChild(row);
                    }

                    let paginationLinks = document.getElementById('pagination-links');
                    paginationLinks.innerHTML = '';

                    if (data.links && data.links.length > 0) {
                        let paginationHtml = '';

                        if (data.current_page > 1) {
                            paginationHtml +=
                                `<li class=""><a class="" href="javascript:void(0)" onclick="loadServices(${categoryId}, ${data.current_page - 1})">←</a></li>`;
                        } else {
                            paginationHtml += `<li class="disabled"><span class="">←</span></li>`;
                        }

                        data.links.forEach(link => {
                            if (link.url) {
                                paginationHtml +=
                                    `<li class="${link.active ? 'active' : ''}"><a class="" href="javascript:void(0)" onclick="loadServices(${categoryId}, ${link.url.split('page=')[1]})"><span>${link.label}</span></a></li>`;
                            } else {
                                paginationHtml +=
                                    `<li class="disabled"><span class="">${link.label}</span></li>`;
                            }
                        });

                        if (data.current_page < data.last_page) {
                            paginationHtml +=
                                `<li class=""><a class="" href="javascript:void(0)" onclick="loadServices(${categoryId}, ${data.current_page + 1})">→</a></li>`;
                        } else {
                            paginationHtml += `<li class="disabled"><span class="">→</span></li>`;
                        }

                        paginationLinks.innerHTML = paginationHtml;
                    }
                })
                .catch(error => {
                    console.error('Error fetching Services:', error);
                });
        }

        window.loadServices = loadServices;
    </script>
@endsection
