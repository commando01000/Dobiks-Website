

<?php $__env->startSection('content'); ?>
    <section id="projects" class="w-100 mt-0 p-1 overflow-hidden">
        <main class="container-fluid ps-0 pe-0">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    <?php echo e(Utility::getsettings('project_name')); ?>

                </h1>
                <small class="content-section__description fs-6">HOME / PROJECTS</small>
            </div>
            <div id="projects-content" class="w-100 mt-5 pt-5 pb-5 m-auto p-1">
                <div class="projects-content">
                    <h2 class="section-projects__title ui heading size-headinglg">
                        <span class="section-projects__title-span-1">D<span
                                class="section-projects__title-span">opiks<br>Services Page&nbsp;</span>
                        </span>
                        <br>
                        <p class="content-section__description pt-3"><?php echo e(Utility::getsettings('project_detail')); ?></p>
                    </h2>
                    <!-- resources/views/projects/index.blade.php -->
                    <ul class="nav nav-pills section__tabs" id="pills-tab" role="tablist">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="position-relative nav-link <?php echo e($loop->first ? 'active' : ''); ?> text-decoration-none section__tab-item"
                                    id="pills-<?php echo e($category->id); ?>-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-<?php echo e($category->id); ?>" type="button" role="tab"
                                    aria-controls="pills-<?php echo e($category->id); ?>" aria-selected="false" tabindex="0"
                                    style="cursor: pointer" onclick="loadProjects(<?php echo e($category->id); ?>)">
                                    <div class="circle position-absolute start-0 z-0"></div>
                                    <div class="position-relative text z-1 text-white">
                                        <?php echo e($category->name); ?>

                                    </div>
                                </button>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="projects-list" role="tabpanel"
                            aria-labelledby="projects-list-tab">
                            <!-- Projects will be loaded here dynamically -->
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fetch data for the first category initially
            <?php if($categories->isNotEmpty()): ?>
                loadProjects(<?php echo e($categories->first()->id); ?>);
            <?php endif; ?>
        });

        function loadProjects(categoryId) {
            fetch(`/projects/category/${categoryId}`)
                .then(response => response.json())
                .then(data => {
                    console.log('Fetched data:', data); // Log the fetched data

                    let projectsList = document.getElementById('projects-list');
                    projectsList.innerHTML = '';

                    let baseUrl = "<?php echo e(url('/')); ?>";
                    let counter = 0; // Initialize a counter

                    let row; // Declare row variable outside the loop

                    data.forEach((project, index) => {
                        // Create a new row for the first item or after every 3 items
                        if (counter % 3 === 0) {
                            row = document.createElement('div');
                            row.classList.add('row', 'w-100', 'm-auto');
                        }

                        let projectItem = `
                    <div class="col-md-4 mt-4 ${index % 2 != 0 ? 'p-4' : ''}"> <!-- Adjusted column class and margin bottom -->
                        <div onclick="window.location.href = '/projects/${project.slug}'" class="service">
                            <div class="service-header d-flex justify-content-between">
                                <div class="service-number">
                                    <p>${counter + 1}</p>
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
                                ${project.client}
                            </div>
                        </div>
                    </div>
                    `;

                        row.innerHTML += projectItem;
                        counter++; // Increment the counter

                        // Append row to projectsList after every 3 items (for 3 columns in a row)
                        if (counter % 3 === 0 || counter === data.length) {
                            projectsList.appendChild(row);
                        }
                    });

                    // Append the last row if it contains any columns and hasn't been appended yet
                    if (counter % 3 !== 0) {
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/front/project/view-all-projects.blade.php ENDPATH**/ ?>