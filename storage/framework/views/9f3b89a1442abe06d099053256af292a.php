
<?php $__env->startSection('title', 'Services'); ?>
<?php $__env->startSection('content'); ?>
    <section id="projects" class="w-100 mt-0 p-1 overflow-hidden">
        <main class="container-fluid ps-0 pe-0">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    Services
                </h1>
                <small class="content-section__description fs-6">HOME / SERVICES</small>
            </div>
            <div style="background-color: #191919;max-width: 100% !important" id="projects-content"
                class="section-projects w-100 mt-5 pt-5 p-1 overflow-hidden">
                <div class="group m-auto w-75">
                    <h2 class="w-100 section-projects__title ui heading size-headinglg">
                        <span class="section-projects__title-span-1">S<span class="section-projects__title-span">ervices
                                Categories<br>&nbsp;</span></span>
                    </h2>
                    <div class="projects-content">
                        <ul class="nav w-100 nav-pills section-projects__content mb-3" id="pills-tab" role="tablist">
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
            </div>
        </main>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            <?php if($categories->isNotEmpty()): ?>
                loadProjects(<?php echo e($categories->first()->id); ?>);
            <?php endif; ?>
        });

        function loadProjects(categoryId, page = 1) {
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

                    let baseUrl = "<?php echo e(url('/')); ?>";
                    let counter = 0;

                    let row;

                    data.data.forEach((project, index) => {
                        if (counter % 3 === 0) {
                            row = document.createElement('div');
                            row.classList.add('row', 'w-100', 'm-auto');
                        }

                        let projectItem = `
                        <div class="col-md-4 pb-5 mt-4">
                            <div style="min-height: 300px; text-align: center; max-height: 400px; max-width: 414px" class="w-100 m-auto service">
                                <a href="/services/${project.slug}" class="cursor-pointer d-block text-decoration-none">
                                    <div class="service__image text-center">
                                        <img class="object-fit-cover" src="${baseUrl}/storage/app/${project.cover}" alt="image">
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
                                `<li class=""><a class="" href="javascript:void(0)" onclick="loadProjects(${categoryId}, ${data.current_page - 1})">←</a></li>`;
                        } else {
                            paginationHtml += `<li class="disabled"><span class="">←</span></li>`;
                        }

                        data.links.forEach(link => {
                            if (link.url) {
                                paginationHtml +=
                                    `<li class="${link.active ? 'active' : ''}"><a class="" href="javascript:void(0)" onclick="loadProjects(${categoryId}, ${link.url.split('page=')[1]})"><span>${link.label}</span></a></li>`;
                            } else {
                                paginationHtml +=
                                    `<li class="disabled"><span class="">${link.label}</span></li>`;
                            }
                        });

                        if (data.current_page < data.last_page) {
                            paginationHtml +=
                                `<li class=""><a class="" href="javascript:void(0)" onclick="loadProjects(${categoryId}, ${data.current_page + 1})">→</a></li>`;
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

        window.loadProjects = loadProjects;
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\company\backend\resources\views/front/services/index.blade.php ENDPATH**/ ?>