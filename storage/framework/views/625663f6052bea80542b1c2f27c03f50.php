

<!-- start clients -->
<section class="bg-dark-black">
    <div class="container">
        <div class="big-head">
            <span>Clients</span>
            <p>Meet Our</p>
            <h2>special client's</h2>
        </div>
        <div id="secondary-nav" class="d-flex flex-wrap align-items-center my-5 gap-4">
            <?php $__currentLoopData = $clientCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button onclick="loadClients(<?php echo e($category->id); ?>)"
                    class="main-btn-nav btn main-btn <?php echo e($loop->first ? 'active' : ''); ?>"><?php echo e($category->name); ?></button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="row clients">
            <!-- Clients will be loaded here dynamically -->
        </div>
        <button class="btn main-btn">
            <span>View All Clients</span>
        </button>
    </div>
</section>
<!-- end clients -->

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

                    let clientsSection = document.querySelector('.clients');
                    clientsSection.innerHTML = ''; // Clear previous clients

                    baseUrl = "<?php echo e(url('/')); ?>";
                    let row = document.createElement('div');
                    row.classList.add('row');
                    row.classList.add('overflow-hidden');
                    row.classList.add('gx-5');
                    row.classList.add('gy-5');

                    data.forEach((client, index) => {
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