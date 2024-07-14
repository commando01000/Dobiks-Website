
      <!--scripts start here-->
      <script src="<?php echo e(asset('vendor/landing-page2/js/jquery.min.js')); ?>"></script>
      <script src="<?php echo e(asset('vendor/landing-page2/js/slick.min.js')); ?>"></script>
      <script src="<?php echo e(asset('vendor/landing-page2/js/custom.js')); ?>"></script>
      <!--scripts end here-->

      <script>
          function myFunction() {
              const element = document.body;
              element.classList.toggle("dark-mode");
              const isDarkMode = element.classList.contains("dark-mode");
              const expirationDate = new Date();
              expirationDate.setDate(expirationDate.getDate() + 30);
              document.cookie = `mode=${isDarkMode ? "dark" : "light"}; expires=${expirationDate.toUTCString()}; path=/`;
              if (isDarkMode) {
                  $('.switch-toggle').find('.switch-moon').addClass('d-none');
                  $('.switch-toggle').find('.switch-sun').removeClass('d-none');
              } else {
                  $('.switch-toggle').find('.switch-sun').addClass('d-none');
                  $('.switch-toggle').find('.switch-moon').removeClass('d-none');
              }
          }
          window.addEventListener("DOMContentLoaded", () => {
              const modeCookie = document.cookie.split(";").find(cookie => cookie.includes("mode="));
              if (modeCookie) {
                  const mode = modeCookie.split("=")[1];
                  if (mode === "dark") {
                      $('.switch-toggle').find('.switch-moon').addClass('d-none');
                      $('.switch-toggle').find('.switch-sun').removeClass('d-none');
                      document.body.classList.add("dark-mode");
                  } else {
                      $('.switch-toggle').find('.switch-sun').addClass('d-none');
                      $('.switch-toggle').find('.switch-moon').removeClass('d-none');
                  }
              }
          });
      </script>
      <?php echo $__env->yieldPushContent('script'); ?>

      <?php if(Utility::getsettings('cookie_setting_enable') == 'on'): ?>
          <?php echo $__env->make('layouts.cookie-consent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
      </body>

      </html>
<?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/layouts/login/app-footer.blade.php ENDPATH**/ ?>