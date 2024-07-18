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
            <ul class="nav nav-pills section-clients__content mb-3" id="pills-tab" role="tablist">
                <?php $__currentLoopData = $clientCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item" role="presentation">
                        <button
                            class="position-relative nav-link <?php echo e($loop->first ? 'active' : ''); ?> text-decoration-none section__tab-item"
                            id="pills-<?php echo e($category->id); ?>-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-<?php echo e($category->id); ?>" type="button" role="tab"
                            aria-controls="pills-<?php echo e($category->id); ?>" aria-selected="false" tabindex="0"
                            style="cursor: pointer" onclick="loadClients(<?php echo e($category->id); ?>)">
                            <div class="circle position-absolute start-0 z-0"></div>
                            <div class="position-relative text z-1 text-white">
                                <?php echo e($category->name); ?>

                            </div>
                        </button>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="clients-list" role="tabpanel"
                    aria-labelledby="clients-list-tab">
                    <!-- Clients will be loaded here dynamically -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fetch data for the first category initially
            <?php if($clientCategory->isNotEmpty()): ?>
                loadClients(<?php echo e($clientCategory->first()->id); ?>);
            <?php endif; ?>
        });

        function loadClients(categoryId) {
            fetch(`/clients/category/${categoryId}`)
                .then(response => response.json())
                .then(data => {
                    console.log('Fetched data:', data); // Log the fetched data

                    let clientsList = document.getElementById('clients-list');
                    clientsList.innerHTML = '';

                    baseUrl = "<?php echo e(url('/')); ?>";
                    let counter = 1; // Initialize a counter
                    let row = document.createElement('div');
                    row.classList.add('row');
                    row.classList.add('w-100');
                    row.classList.add('m-auto');

                    data.forEach((client, index) => {
                        let clientItem = `<div class="col-md-4 mt-4 ${index % 2 != 0 ? 'p-4' : ''}"> <!-- Adjusted column class and margin bottom -->
                            <div class="client" onclick="window.location.href = '/clients/${client.id}'">
                                <div class="client-header d-flex justify-content-between">
                                    <div class="client-number">
                                        <p>${counter}</p>
                                    </div>
                                    <div class="client-name">
                                        <p class="user-profile__role ui text size-texts ${index % 2 != 0 ? 'me-4' : ''}">
                                            ${client.name}
                                        </p>
                                    </div>
                                </div>
                                <div class="client__image ${index % 2 != 0 ? 'text-center' : ''}">
                                    <img src="${baseUrl}/storage/app/${client.cover}" alt="client-logo"> <!-- Assuming client.logo is the URL -->
                                </div>
                               
                            </div>
                        </div>`;

                        // Append clientItem to row
                        row.innerHTML += clientItem;
                        counter++; // Increment the counter

                        // Append row to clientsList after every 3 items (for 3 columns in a row)
                        if (counter % 3 === 1) {
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
<?php $__env->stopPush(); ?>
<?php /**PATH D:\company\backend\resources\views/front/clients-section/clients.blade.php ENDPATH**/ ?>