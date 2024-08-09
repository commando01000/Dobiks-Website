<?php $__env->startSection('title', 'Project Details'); ?>

<?php $__env->startSection('content'); ?>
    <section id="project-details" class="w-100 mt-0 p-1">
        <div class="container-fluid">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    <?php echo e($project->client); ?>

                </h1>
                <small class="content-section__description fs-6">HOME / PROJECT DETAILS</small>
            </div>

            <div class="project-content mt-5 pt-md-5 pt-3 w-100">
                <div class="row w-75 m-auto align-items-start text-md-start text-center">
                    <div class="col-md-4">
                        <div class="title">
                            <h1 class="content-section__title fs-4"><?php echo e($project->title); ?></h1>
                        </div>
                        <div class="description d-flex">
                            <div class="d-flex flex-column text-center text-md-start">
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
                        <div class="title">
                            <h1 class="content-section__title fs-4 ">Client</h1>
                        </div>
                        <div class="description d-flex w-100">
                            <div>
                                <p class="content-section__description fs-6">
                                    <?php echo e($project->client); ?>

                                </p>
                                <p class="content-section__description fs-6"><?php echo e($project->title); ?></p>
                            </div>
                        </div>
                        <div class="title">
                            <h1 class="content-section__title fs-4">Date</h1>
                        </div>
                        <div class="date d-flex justify-content-center justify-content-md-start">
                            <div>
                                <p class="content-section__description fs-6">
                                    <?php echo e($project->created_at->format('jS F Y')); ?>

                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex flex-column">
                            <div class="title">
                                <h1 class="content-section__title fs-4">Marketing Country</h1>
                            </div>
                            <div class="description d-flex">
                                <div>
                                    <p class="content-section__description fs-6 text-center text-md-start">Project Location:
                                        <?php echo e($project->project_location); ?>

                                        <br> Project Time Frame: <?php echo e($project->project_timeframe); ?>

                                    </p>
                                    <br>
                                    <p class="content-section__description fs-6 text-center text-md-start">Project Marketing Category: <br><br>
                                        <label tabindex="0" class="flex-row-center-center footer__social-chip--creative">
                                            <input type="checkbox" name="selectedChipOptions" value="1" hidden="true">
                                            <span> <?php echo e($project->category->name); ?></span>
                                            <template hidden="">
                                                <label unselected-styles="" class="dhi-group">
                                                </label>
                                                <label selected-styles="" class="dhi-group-1">
                                                </label>
                                            </template>
                                        </label>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="section-projects" class="column_three">
                <div id="projects-content" class="section-projects w-100 mt-0 p-1 overflow-hidden">
                    <h2 class="w-100 section-projects__title ui heading size-headinglg">
                        <span class="section-projects__title-span-1">P<span
                                class="section-projects__title-span">roject<br>Features&nbsp;</span></span>
                    </h2>
                    <div class="projects-content">
                        <ul class="nav nav-pills section-projects__content mb-3" id="pills-tab" role="tablist">
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
                        <div class="tab-content w-100" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="projects-list" role="tabpanel"
                                aria-labelledby="projects-list-tab">
                                <!-- Projects will be loaded here dynamically -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            <?php echo $__env->make('front.leaderships.section-leadership', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
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
            fetch(`/home/projects/category/${categoryId}`)
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
                        <div class="col-md-4 mt-4 ${(index - 1) % 3 == 0 ? 'p-4' : ''}"> <!-- Adjusted column class and margin bottom -->
                            <div onclick="window.location.href = '/projects/${project.slug}'" style="cursor: pointer" class="service">
                                <div class="service-header d-flex justify-content-between">
                                    <!-- <div class="service-number">
                                        <p>${index + 1}</p>
                                    </div> -->
                                    <div class="category-name">
                                        <p class="user-profile__role ui text size-texts ${(index - 1) % 3 == 0 ? 'me-4' : ''}">
                                            ${project.title}
                                        </p>
                                    </div>
                                </div>
                                <div class="service__image ${(index - 1) % 3 == 0 ? 'text-center' : ''}">
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
        window.loadProjects = loadProjects;
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <style>
        .project-content .title {
            margin-bottom: 20px;
        }

        .project-content .description {
            margin-bottom: 20px;
        }

        .project-content .buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .project-content .buttons .btn {
            border: 1px solid #fff;
            color: #fff;
            background: transparent;
            padding: 10px 20px;
            cursor: pointer;
        }

        .project-content .buttons .btn-primary {
            border-color: #3498db;
            color: #3498db;
        }

        .project-content .buttons .btn-secondary {
            border-color: #2ecc71;
            color: #2ecc71;
        }

        .project-content .buttons .btn-tertiary {
            border-color: #e74c3c;
            color: #e74c3c;
        }

        .project-content .col-md-4 {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .text-center {
            text-align: center;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 992px) {
            .project-content .col-md-4 {
                margin-bottom: 20px;
            }
        }

        @media (max-width: 768px) {
            .project-content .row {
                flex-direction: column;
                align-items: center;
                justify-content: center
            }

            .project-content .col-md-4 {
                width: 100%;
                text-align: center;
            }

            #project-details .project-content .description {
                justify-content: center !important;
                text-align: center !important;
            }

            .project-content .buttons {
                justify-content: center;
            }
        }

        @media (max-width: 576px) {
            .project-content .buttons .btn {
                padding: 5px 10px;
                margin: 5px 0;
            }
        }

        @media (max-width: 1400px) {
            .project-content .description {
                margin: 0px !important;
                padding: 0px !important;
                justify-content: start !important;
                text-align: center !important;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\al shrouk academy\radwa\furniture project\Dashboard\resources\views/front/project/view-project.blade.php ENDPATH**/ ?>