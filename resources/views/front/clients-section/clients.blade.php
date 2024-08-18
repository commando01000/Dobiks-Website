{{-- <div id="section-clients" class="section">
    <div id="tabList" role="tablist" aria-label="Clients Row" class="section__content">
        <div class="section__header">
            <div class="section__header-row">
                <p class="section__title ui text size-btn_text">Clients</p>
                <div class="section__divider"></div>
            </div>
            <h2 class="w-100 section-projects__title ui heading size-headinglg">
                Meet Our
            </h2>
            <h3 class="w-100 section-projects__title ui heading size-headinglg">
                Special Clients
            </h3>
        </div>

        <div class="clients-content">
            <ul class="nav nav-pills section-projects__content mb-3" id="pills-tab" role="tablist">
                @foreach ($clientCategory as $category)
                    <li class="nav-item" role="presentation">
                        <button
                            class="position-relative nav-link {{ $loop->first ? 'active' : '' }} text-decoration-none section__tab-item"
                            id="pills-{{ $category->id }}-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-{{ $category->id }}" type="button" role="tab"
                            aria-controls="pills-{{ $category->id }}" aria-selected="false" tabindex="0"
                            style="cursor: pointer" onclick="loadClients({{ $category->id }})">
                            <div class="circle position-absolute start-0 z-0"></div>
                            <div class="position-relative text z-1 text-white">
                                {{ $category->name }}
                            </div>
                        </button>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content mt-5" id="pills-tabContent">
                <div class="tab-pane fade show active" id="clients-list" role="tabpanel"
                    aria-labelledby="clients-list-tab">
                    <!-- Clients will be loaded here dynamically -->
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fetch data for the first category initially
            @if ($clientCategory->isNotEmpty())
                loadClients({{ $clientCategory->first()->id }});
            @endif
        });

        function loadClients(categoryId) {
            fetch(`/clients/category/${categoryId}`)
                .then(response => response.json())
                .then(data => {
                    console.log('Fetched data:', data); // Log the fetched data

                    let clientsList = document.getElementById('clients-list');
                    clientsList.innerHTML = '';

                    baseUrl = "{{ url('/') }}";
                    let row = document.createElement('div');
                    row.classList.add('row');
                    row.classList.add('overflow-hidden');
                    row.classList.add('gx-5');
                    row.classList.add('gy-5');
                    // onclick="window.location.href = '/clients/${client.id}'" //remove on click temporarily
                    data.forEach((client, index) => {
                        let clientItem = `<div class="col-lg-3 col-md-4 col-sm-6"> <!-- Adjusted column class and margin bottom -->
                            <div class="client card border-1 p-5 d-flex justify-content-center align-items-center" style="
                                        min-height: 300px;
                                        border: 1px solid var(--gray_800);
                                        background-color: #1a1a1a;
                                    " >
                                <div class="card-image w-100 h-100">
                                        <img class="w-100" src="${baseUrl}/storage/app/${client.cover}" alt="${client.name}"> <!-- Assuming client.logo is the URL -->
                                </div>
                            </div>
                        </div>`;
                        row.innerHTML += clientItem;

                        // Append row to clientsList after every 4 items (for 4 columns in a row)
                        if ((index + 1) % 4 === 0) {
                            clientsList.appendChild(row);
                            row = document.createElement('div');
                            row.classList.add('row');
                            row.classList.add('mt-1');
                            row.classList.add('overflow-hidden');
                            row.classList.add('gx-5');
                            row.classList.add('gy-5');
                        }
                    });

                    // Append the last row if it contains any items
                    if (data.length % 4 !== 0) {
                        clientsList.appendChild(row);
                    }
                })
                .catch(error => {
                    console.error('Error fetching clients:', error); // Log any errors
                });
        }

        // Ensure that loadClients is available globally
        window.loadClients = loadClients;
    </script>
@endpush --}}

<!-- start clients -->
<section class="bg-dark-black">
    <div class="container">
        <div class="big-head">
            <span>Clients</span>
            <p>Meet Our</p>
            <h2>special client's</h2>
        </div>
        <div id="secondary-nav" class="d-flex flex-wrap align-items-center my-5 gap-4">
            @foreach ($clientCategory as $category)
                <button onclick="loadClients({{ $category->id }})"
                    class="main-btn-nav btn main-btn {{ $loop->first ? 'active' : '' }}">{{ $category->name }}</button>
            @endforeach
        </div>
        <div class="row clients">
            <!-- Clients will be loaded here dynamically -->
        </div>
        @if (Route::currentRouteName() != 'see.all.clients')
            <a href="{{ route('see.all.clients') }}" class="btn main-btn">
                <span>View All Clients</span>
            </a>
        @else
            <div class="w-100 paginatior mt-3">
                <nav>
                    <ul class="pagination justify-content-center" id="pagination-links">
                        <!-- Pagination links will be dynamically inserted here -->
                    </ul>
                </nav>
            </div>
        @endif
    </div>
</section>
<!-- end clients -->

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fetch data for the first category initially
            @if ($clientCategory->isNotEmpty())
                loadClients({{ $clientCategory->first()->id }});
            @endif
        });

        function loadClients(categoryId, page = 1) {
            fetch(`/clients/category/${categoryId} ?page=${page}`)
                .then(response => response.json())
                .then(data => {

                    let clientsSection = document.querySelector('.clients');
                    clientsSection.innerHTML = ''; // Clear previous clients

                    baseUrl = "{{ url('/') }}";
                    let row = document.createElement('div');
                    row.classList.add('row');
                    row.classList.add('overflow-hidden');
                    row.classList.add('gx-5');
                    row.classList.add('gy-5');
                    let clients = data.data;
                    clients.forEach((client, index) => {
                        let clientItem = `
                    <div class="col-6 col-md-3">
                        <div class="img-box d-flex justify-content-center align-items-center border p-5 w-100">
                            <img class="img-fluid w-100" src="${baseUrl}/storage/app/${client.cover}" alt="${client.name}">
                        </div>
                        <p class="text-light-gray py-4 text-center fs-5">${client.name}</p>
                    </div>
                    `;

                        // Append clientItem to row
                        row.innerHTML += clientItem;

                        // Append row to clientsSection after every 4 items (for 4 columns in a row)
                        if ((index + 1) % 4 === 0) {
                            clientsSection.appendChild(row);
                            row = document.createElement('div');
                            row.classList.add('row');
                            row.classList.add('overflow-hidden');
                            row.classList.add('gx-5');
                            row.classList.add('gy-5');
                        }
                    });

                    // Append the last row if it contains any items
                    if (data.length % 4 !== 0) {
                        clientsSection.appendChild(row);
                    }

                    // Update pagination links
                    let paginationLinks = document.getElementById('pagination-links');
                    paginationLinks.innerHTML = ''; // Clear existing pagination

                    if (data.links && data.links.length > 0) {
                        let paginationHtml = '';

                        // Previous Page Link
                        if (data.current_page > 1) {
                            paginationHtml +=
                                `<li class=""><a class="" href="javascript:void(0)" onclick="loadClients(${categoryId}, ${data.current_page - 1})">←</a></li>`;
                        } else {
                            paginationHtml += `<li class="disabled"><span class="">←</span></li>`;
                        }

                        // Pagination Elements
                        data.links.forEach(link => {
                            if (link.url) {
                                paginationHtml +=
                                    `<li class="${link.active ? 'active' : ''}"><a class="" href="javascript:void(0)" onclick="loadClients(${categoryId}, ${link.url.split('page=')[1]})"><span>${link.label}</span></a></li>`;
                            } else {
                                paginationHtml +=
                                    `<li class="disabled"><span class="">${link.label}</span></li>`;
                            }
                        });

                        // Next Page Link
                        if (data.current_page < data.last_page) {
                            paginationHtml +=
                                `<li class=""><a class="" href="javascript:void(0)" onclick="loadClients(${categoryId}, ${data.current_page + 1})">→</a></li>`;
                        } else {
                            paginationHtml += `<li class="disabled"><span class="">→</span></li>`;
                        }

                        paginationLinks.innerHTML = paginationHtml;
                    }
                })
                .catch(error => {
                    console.error('Error fetching clients:', error); // Log any errors
                });
        }

        // Ensure that loadClients is available globally
        window.loadClients = loadClients;
    </script>
@endpush
