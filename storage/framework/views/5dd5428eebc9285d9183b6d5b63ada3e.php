

<!-- start projects -->
<section class="bg-dark-black">
    <div class="container">
        <h2 class="main-head">Our Latest <span>Projects</span></h2>
        <div id="secondary-nav" class="d-flex flex-wrap align-items-center my-5 gap-5">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button onclick="loadProjects(<?php echo e($category->id); ?>)"
                    class="main-btn-nav btn main-btn <?php echo e($loop->first ? 'active' : ''); ?>"><?php echo e($category->name); ?></button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="row projects">
            <!-- Projects will be loaded here dynamically -->
        </div>
        
    </div>
</section>
<!-- end projects -->

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
                    let projectsSection = document.querySelector('.projects');
                    projectsSection.innerHTML = ''; // Clear previous projects

                    baseUrl = "<?php echo e(url('/')); ?>";
                    let counter = 1; // Initialize a counter
                    let row = document.createElement('div');
                    row.classList.add('row');

                    data.forEach((project, index) => {
                        let projectItem = `
                    <div class="col-6 col-md-4 mb-4">
                        <a href="/projects/${project.slug}">
                            <img class="img-fluid w-100" src="${baseUrl}/storage/app/${project.cover}" alt="${project.title}">
                        </a>
                    </div>
                    `;

                        // Append projectItem to row
                        row.innerHTML += projectItem;
                        counter++; // Increment the counter

                        // Append row to projectsSection after every 3 items (for 3 columns in a row)
                        if (counter % 3 === 1) {
                            projectsSection.appendChild(row);
                            row = document.createElement('div');
                            row.classList.add('row');
                        }
                    });

                    // Append the last row if it's not already added
                    if (data.length % 3 !== 0) {
                        projectsSection.appendChild(row);
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
<?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/front/projects-section/projects.blade.php ENDPATH**/ ?>