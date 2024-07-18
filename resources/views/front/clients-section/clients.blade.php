<div id="section-clients" class="section">
    <div id="tabList" role="tablist" aria-label="Clients Row" class="section__content">
        <div class="section__header">
            <div class="section__header-row">
                <p class="section__title ui text size-btn_text">Clients</p>
                <div class="section__divider"></div>
            </div>
            <h2 class="section__subtitle ui heading size-headings">
                Meet Our
            </h2>
            <h3 class="section__highlight ui heading size-headinglg">
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
            <div class="tab-content mt-5 pt-5" id="pills-tabContent">
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
                    let counter = 1; // Initialize a counter
                    let row = document.createElement('div');
                    row.classList.add('row');
                    row.classList.add('gx-5');
                    row.classList.add('gy-5');
                    data.forEach((client, index) => {
                        let clientItem = `<div class="col-lg-3 col-md-4 col-sm-6"> <!-- Adjusted column class and margin bottom -->
                            <div class="client card border-1 p-5 d-flex justify-content-center align-items-center" style="
                                        min-height: 300px;
                                        border: 1px solid var(--gray_800);
                                        background-color: #1a1a1a;
                                    " onclick="window.location.href = '/clients/${client.id}'">
                                <div class="card-image w-100 h-100">
                                        <img class="w-100" src="${baseUrl}/storage/app/${client.cover}" alt="client-logo"> <!-- Assuming client.logo is the URL -->
                                </div>
                            </div>
                        </div>`;
                        // Append clientItem to row
                        row.innerHTML += clientItem;
                        counter++; // Increment the counter

                        // Append row to clientsList after every 3 items (for 3 columns in a row)
                        if (counter % 4 === 1) {
                            clientsList.appendChild(row);
                            row = document.createElement('div');
                            row.classList.add('row');
                        }
                    });

                    // Append the last row if it's not already added
                    if (data.length % 3 !== 0) {
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
@endpush
