
    <!-- =======================
Footer START -->
<footer class="pt-5">
  <div class="container">
      <!-- Row START -->
      <div class="row g-4">

          <!-- Widget 1 START -->
          <div class="col-lg-3">
              <!-- logo -->
              <a class="me-0" href="index.html">
    {{-- <img class="light-mode-item h-40px" src="assets/images/logo.svg" alt="logo">
    <img class="dark-mode-item h-40px" src="assets/images/logo-light.svg" alt="logo"> --}}
  </a>
              <p class="my-3">Equip yourself for a World of Opportunities</p>
              <!-- Social media icon -->
              <ul class="list-inline mb-0 mt-3">
                  <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-facebook" href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
                  <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-instagram" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
                  <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-twitter" href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
                  <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
              </ul>
          </div>
          <!-- Widget 1 END -->

          <!-- Widget 2 START -->
          <div class="col-lg-6">
              <div class="row g-4">
                  <!-- Link block -->
                  <div class="col-6 col-md-4">
                      <h5 class="mb-2 mb-md-4">Company</h5>
                      <ul class="nav flex-column">
                          <li class="nav-item"><a class="nav-link" href="#">Hire our Grads</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Collaborate with us</a></li>
                       
                      </ul>
                  </div>

                  <!-- Link block -->
                  <div class="col-6 col-md-4">
                      <h5 class="mb-2 mb-md-4">School</h5>
                      <ul class="nav flex-column">
                          <li class="nav-item"><a class="nav-link" href="#">School of Engineering</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">School of Product</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">School of Data</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">School of Business</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">School of Creative Economy</a></li>
                      </ul>
                  </div>

                  <!-- Link block -->
                  <div class="col-6 col-md-4">
                      <h5 class="mb-2 mb-md-4">About us</h5>
                      <ul class="nav flex-column">
                          <li class="nav-item"><a class="nav-link" href="#">Our Story</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Terms &amp; Conditions</a></li>
                      </ul>
                  </div>
              </div>
          </div>
          <!-- Widget 2 END -->

          <!-- Widget 3 START -->
          <div class="col-lg-3">
              <h5 class="mb-2 mb-md-4">Contact</h5>
              <!-- Time -->
              <p class="mb-2">
                Tel: <span class="h6 fw-light ms-2">080000000000</span>
                  <span class="d-block small">(9:AM to 6:PM WAT)</span>
              </p>

              <p class="mb-0">Email:<span class="h6 fw-light ms-2">info@fredmindschool.com</span></p>

              <div class="row g-2 mt-2">
                  <!-- Google play store button -->
                  <div class="col-6 col-sm-4 col-md-3 col-lg-6">
                      <a href="#"> <img src="assets/images/client/google-play.svg" alt=""> </a>
                  </div>
                  <!-- App store button -->
                  <div class="col-6 col-sm-4 col-md-3 col-lg-6">
                      <a href="#"> <img src="assets/images/client/app-store.svg" alt="app-store"> </a>
                  </div>
              </div>
              <!-- Row END -->
          </div>
          <!-- Widget 3 END -->
      </div>
      <!-- Row END -->

      <!-- Divider -->
      <hr class="mt-4 mb-0">

      <!-- Bottom footer -->
      <div class="py-3">
          <div class="container px-0">
              <div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-md-left">
                  <!-- copyright text -->
                  <div class="text-body text-primary-hover"> © 2024 Fredmindschool. All rights reserved</div>
                  <!-- copyright links-->
                  <div class="justify-content-center mt-3 mt-lg-0">
                      <ul class="nav list-inline justify-content-center mb-0">
                        
                          <li class="list-inline-item"><a class="nav-link" href="{{route('index.term')}}">Terms of use</a></li>
                          <li class="list-inline-item"><a class="nav-link pe-0" href="{{route('index.privacy')}}">Privacy policy</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<!-- Vendors -->
<script src="{{asset('assets/vendor/tiny-slider/tiny-slider.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.js')}}"></script>
<script src="{{asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js')}}"></script>

<!-- Template Functions -->
<script src="{{asset('assets/js/functions.js')}}"></script>

</body>

</html>