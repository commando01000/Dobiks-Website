<div id="section-clients" class="section">
    <div id="tabList" role="tablist" aria-label="Services Row" class="section__content">
        <div class="section__header">
            <div class="section__header-row">
                <p class="section__title ui text size-btn_text">Clients</p>
                <div class="section__divider"></div>
            </div>
            <h2 class="section__subtitle ui heading size-headings">
                Meet Our
            </h2>
            <h3 class="section__highlight ui heading size-headinglg">
                Special Client’s
            </h3>
        </div>

        <ul class="nav nav-pills section__tabs" id="pills-tab" role="tablist">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
            <div class="tab-pane fade show active" id="clients-list" role="tabpanel" aria-labelledby="clients-list-tab">
                <!-- Clients will be loaded here dynamically -->
            </div>
        </div>

        

        <div class="section-projects__actions w-100">
            <div class="section-projects__action-row">
                <div class="section__call-to-action-row">
                    <p class="section__call-to-action-text ui text-white text size-btn_text">
                        <!-- Wrap "vie" for individual styling -->
                        <span class="section__feature-bg">view</span> &nbsp; all
                        clients
                    </p>
                    <img src="<?php echo e(asset('assets/front_assets/images/img_arrow.svg')); ?>" alt="arrow image"
                        class="section__call-to-action-icon" />
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startSection('js'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fetch data for the first category initially
            <?php if($categories->isNotEmpty()): ?>
                loadClients(<?php echo e($categories->first()->id); ?>);
            <?php endif; ?>
        });

        function loadClients(categoryId) {
            fetch(`/clients/category/${categoryId}`)
                .then(response => response.json())
                .then(data => {
                    console.log('Fetched data Clients:', data); // Log the fetched data

                    let clientsList = document.getElementById('clients-list');
                    clientsList.innerHTML = '';

                    baseUrl = "<?php echo e(url('/')); ?>";
                    let counter = 1; // Initialize a counter
                    let row = document.createElement('div');
                    row.classList.add('row');
                    row.classList.add('w-100');
                    row.classList.add('gx-5');
                    row.classList.add('gy-5');

                    data.forEach((client, index) => {
                        let clientItem = `
                        <div class="col-lg-3 col-md-4 col-sm-6"> <!-- Adjusted column class and margin bottom -->
                            <div onclick="window.location.href = '/clients/${client.id}'" class="service">
                                <div class="card border-1 p-5 d-flex justify-content-center align-items-center"
                                    style="
                                        min-height: 300px;
                                        border: 1px solid var(--gray_800);
                                        background-color: #1a1a1a;
                                    ">
                                    <div class="card-image w-100 h-100">
                                        <img src="${baseUrl}/storage/app/${client.cover}" class="w-100" alt="item" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        `;

                        // Append projectItem to row
                        row.innerHTML += clientItem;
                        counter++; // Increment the counter

                        // Append row to projectsList after every 3 items (for 3 columns in a row)
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
                    console.error('Error fetching projects:', error); // Log any errors
                });
        }

        // Ensure that loadProjects is available globally
        window.loadClients = loadClients;
    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/front/clients-section/clients.blade.php ENDPATH**/ ?>