<div id="section-clients" class="section">
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
            <div class="tab-content mt-5 pt-5" id="pills-tabContent">
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
<?php $__env->stopPush(); ?>
<?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/front/clients-section/clients.blade.php ENDPATH**/ ?>