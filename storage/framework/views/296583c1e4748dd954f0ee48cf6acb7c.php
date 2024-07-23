

<?php $__env->startSection('content'); ?>
    <section id="project-details" class="w-100 mt-0 p-1">
        <div class="container-fluid">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    <?php echo e($project->client); ?>

                </h1>
                <small class="content-section__description fs-6">HOME / PROJECT DETAILS</small>
            </div>

            <div class="project-content mt-5 pt-5 w-100">
                <div class="row w-75 m-auto">
                    <div class="col-md-4">
                        <div class="title text-start">
                            <h1 class="content-section__title fs-4"><?php echo e($project->title); ?></h1>
                        </div>
                        <br>
                        <div class="description d-flex justify-content-start">
                            <div class="d-flex justify-content-center flex-column">
                                <p class="content-section__description fs-6">
                                    <?php echo e($project->description); ?>

                                </p>
                                <br>
                                <p class="content-section__description fs-6">Project Location:
                                    <?php echo e($project->project_location); ?>

                                    <br> Project Time Frame: <?php echo e($project->project_timeframe); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="title text-center">
                            <h1 class="content-section__title fs-4 ">Client</h1>
                        </div>
                        <div class="description d-flex me-5 justify-content-end">
                            <div>
                                <p class="content-section__description fs-6">
                                    <?php echo e($project->client); ?>

                                </p>
                                <p class="content-section__description fs-6"><?php echo e($project->title); ?></p>
                            </div>
                        </div>
                        <div class="title text-center">
                            <h1 class="content-section__title fs-4 text-center">Date</h1>
                        </div>
                        <div class="date d-flex ms-4 justify-content-center">
                            <div>
                                <p class="content-section__description fs-6 text-center">
                                    <?php echo e($project->created_at->format('jS F Y')); ?>

                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="title">
                            <h1 class="content-section__title fs-4 text-center">Marketing Country</h1>
                        </div>
                        <br>
                        <div class="description d-flex ms-5 ps-5 justify-content-start">
                            <div>
                                <p class="content-section__description fs-6">
                                    <?php echo e($project->description); ?>

                                </p>
                                <br>
                                <p class="content-section__description fs-6">Project Marketing Category: <br>
                                    <?php echo e($project->category->name); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-projects w-100 mt-0 p-1 overflow-hidden">
                <h2 class="section-projects__title ui heading size-headinglg">
                    <span class="section-projects__title-span-1">P<span
                            class="section-projects__title-span">roject<br>Features&nbsp;</span></span>
                </h2>
                <ul class="nav nav-pills section-projects__content mb-3" id="pills-tab" role="tablist">
                    <?php $__currentLoopData = $categories_projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

                <div class="section-projects__actions w-100">
                    <div class="section-projects__action-row">
                        <div class="section__call-to-action-row">
                            
                            <p class="section__call-to-action-text ui text-white text size-btn_text">
                                <a href="<?php echo e(route('see.all.projects')); ?>" class="section__feature-bg text-white">
                                    view all projects
                                </a>
                            </p>

                            <img src="<?php echo e(asset('assets/front_assets/images/img_arrow.svg')); ?>" alt="arrow image"
                                class="section__call-to-action-icon" />
                        </div>
                    </div>
                </div>
            </div>

            <?php echo $__env->make('front.services.services-section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="meet-our-leadership w-100 mt-5 p-1 pt-5">
                <div class="container">
                    <div class="content-leadership d-flex flex-wrap justify-content-between align-items-center">
                        <div class="team-section__header-content">
                            <div class="team-section__title-row">
                                <p class="section__title ui text size-btn_text">Our Team</p>
                                <div class="team-section__divider"></div>
                            </div>
                            <div class="section__header">
                                <h2 class="team-section__subtitle ui heading size-headings">
                                    Meet Our
                                </h2>
                                <h3 class="section__highlight ui heading size-headinglg">
                                    Leadership
                                </h3>
                            </div>
                            <div>
                                <div class="team-section__action-row">
                                    <div class="section__feature-bg"></div>
                                    <div class="team-section__action-content">
                                        <p class="section__call-to-action-text ui text size-btn_text">
                                            <a href="<?php echo e(route('about-us')); ?>"> view all Leadership<a>
                                        </p>
                                        <img src="<?php echo e(asset('assets/front_assets/images/img_arrow.svg')); ?>"
                                            alt="arrow image" class="section__call-to-action-icon" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-section__members d-flex flex-wrap">
                            <?php $__currentLoopData = $leaderships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leadership): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="user-profile">
                                    <img src="<?php echo e(Storage::url($leadership->photo)); ?>" alt="profile image"
                                        class="user-profile__image <?php if($loop->index % 2 != 0): ?> pt-4 <?php endif; ?>">
                                    <p class="user-profile__name ui text size-textxl">
                                        <?php echo e($leadership->name); ?>

                                    </p>
                                    <p class="user-profile__role ui text size-texts">
                                        <?php echo e($leadership->position); ?>

                                    </p>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fetch data for the first category initially
            <?php if($categories_projects->isNotEmpty()): ?>
                loadProjects(<?php echo e($categories_projects->first()->id); ?>);
            <?php endif; ?>
            <?php if($categories->isNotEmpty()): ?>
                loadServices(<?php echo e($categories->first()->id); ?>);
            <?php endif; ?>
        });

        function loadProjects(categoryId) {
            fetch(`/projects/category/${categoryId}`)
                .then(response => response.json())
                .then(data => {
                    console.log('Fetched data:', data); // Log the fetched data

                    let projectsList = document.getElementById('projects-list');
                    projectsList.innerHTML = '';

                    baseUrl = "<?php echo e(url('/')); ?>";
                    let counter = 1; // Initialize a counter
                    let row = document.createElement('div');
                    row.classList.add('row');
                    row.classList.add('w-100');
                    row.classList.add('m-auto');

                    data.forEach((project, index) => {
                        let projectItem = `
                        <div class="col-md-4 mt-4 ${index % 2 != 0 ? 'p-4' : ''}"> <!-- Adjusted column class and margin bottom -->
                            <div onclick="window.location.href = '/projects/${project.slug}'" class="service">
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
        function loadServices(categoryId) {
            fetch(`/services/category/${categoryId}`)
                .then(response => response.json())
                .then(data => {
                    console.log('Fetched data:', data); // Log the fetched data

                    let projectsList = document.getElementById('services-list');
                    projectsList.innerHTML = '';

                    baseUrl = "<?php echo e(url('/')); ?>";
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
        window.loadProjects = loadProjects;
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/front/project/view-project.blade.php ENDPATH**/ ?>