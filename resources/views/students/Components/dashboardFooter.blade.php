    <!-- Start Footer -->
    <footer class="p-7 bg-white dark:bg-black flex flex-wrap items-center justify-center sm:justify-between gap-3">
      <p class="text-xs text-black/40 dark:text-white/40">&copy; 2024 Snow</p>
      <ul class="flex items-center text-black/40 dark:text-white/40 text-xs">
          <li><a href="javascirpt:;" class="px-2 py-1 hover:text-black dark:hover:text-white transition-all duration-300">About</a></li>
          <li><a href="javascirpt:;" class="px-2 py-1 hover:text-black dark:hover:text-white transition-all duration-300">Support</a></li>
          <li><a href="javascirpt:;" class="px-2 py-1 hover:text-black dark:hover:text-white transition-all duration-300">Contact Us</a></li>
      </ul>
  </footer>
  <!-- End Footer -->
</div>
<!-- End Content -->
</div>
<!-- End Content Area -->

<!-- Start Right Sidebar -->
<div class="right-sidebar fixed right-0 bg-white dark:bg-black bottom-0 z-50 w-[280px] border-l border-black/10 dark:border-white/10 transition-all duration-300">
<div class="flex flex-col gap-9 px-6 py-[22px] h-screen overflow-y-auto overflow-x-hidden">
  <div>
      <h4 class="font-semibold text-black dark:text-white mb-5">Notifications</h4>
     
  </div>
 
</div>
</div>
<!-- End Right Sidebar -->
</div>
<!-- End Main Content -->
<!-- Toast Container -->
<div aria-live="polite" aria-atomic="true" class="position-relative">
  <div class="toast-container position-fixed bottom-0 end-0 p-3">
      @if(session('success'))
      <div class="toast align-items-center text-bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="d-flex">
              <div class="toast-body">
                  {{ session('success') }}
              </div>
              <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
      </div>
      @endif @if($errors->any())
      <div class="toast align-items-center text-bg-danger border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="d-flex">
              <div class="toast-body">
                  <ul>
                      @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
      </div>
      @endif
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>+
<!-- All javascirpt -->
<!-- Alpine js -->
<script src="{{asset('admin/assets/js/alpine-collaspe.min.js')}}"></script>
<script src="{{asset('admin/assets/js/alpine-persist.min.js')}}"></script>
<script src="{{asset('admin/assets/js/alpine.min.js')}}" defer></script>

<!-- ApexCharts js -->
<script src="{{asset('admin/assets/js/apexcharts.js')}}"></script>
<script src="{{asset('admin/assets/js/apexcharts-main.js')}}"></script>

<!-- Custom js -->
<script src="{{asset('admin/assets/js/custom.js')}}"></script>
<script>
  document.addEventListener('DOMContentLoaded', (event) => {
      let toastElList = [].slice.call(document.querySelectorAll('.toast'))
      let toastList = toastElList.map(function (toastEl) {
          return new bootstrap.Toast(toastEl, { autohide: true, delay: 5000 })
      })
      toastList.forEach(toast => toast.show());
  });
        document.getElementById('logout-link').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default link behavior

            // Show confirmation popup
            var confirmLogout = confirm("Are you sure you want to logout?");
            if (confirmLogout) {
                // Redirect to the logout route if confirmed
                window.location.href = this.href;
            }
        });
</script>
</body>

</html>