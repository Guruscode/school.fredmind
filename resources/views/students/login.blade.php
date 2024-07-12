@include('layouts.app')
<!-- **************** MAIN CONTENT START **************** -->
<main>
   <section class="p-0 d-flex align-items-center position-relative overflow-hidden">
      <div class="container-fluid">
         <div class="row">
            <!-- left -->
            <div class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
               <div class="p-3 p-lg-5">
                  <!-- Title -->
                  <div class="text-center">
                     <h2 class="fw-bold">Welcome to our largest community</h2>
                     <p class="mb-0 h6 fw-light">Let's learn something new today!</p>
                  </div>
                  <!-- SVG Image -->
                  <img src="{{asset('assets/images/element/02.svg')}}" class="mt-5" alt="">
                  <!-- Info -->
                  <div class="d-sm-flex mt-5 align-items-center justify-content-center">
                     <!-- Avatar group -->
                     <ul class="avatar-group mb-2 mb-sm-0">
                        <li class="avatar avatar-sm">
                           <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
                        </li>
                        <li class="avatar avatar-sm">
                           <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
                        </li>
                        <li class="avatar avatar-sm">
                           <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
                        </li>
                        <li class="avatar avatar-sm">
                           <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">
                        </li>
                     </ul>
                     <!-- Content -->
                     <p class="mb-0 h6 fw-light ms-0 ms-sm-3">4k+ Students joined us, now it's your turn.</p>
                  </div>
               </div>
            </div>
            <!-- Right -->
            <div class="col-12 col-lg-6 m-auto">
               <div class="row my-5">
                  <div class="col-sm-10 col-xl-8 m-auto">
                     <!-- Title -->
                     <span class="mb-0 fs-1">👋</span>
                     <h1 class="fs-2">Register with Fredmind school!</h1>
                     <p class="lead mb-4">Join our community today!</p>
                     <!-- Registration Form START -->
                     <form method="POST" action="{{ route('student.login') }}">
                        @csrf
              
                        <!-- Password, Confirm Password -->
                        <div class="row">

                          <div class="col-md-12 mb-4">
                            <label for="exampleInputEmail1" class="form-label">Email address *</label>
                            <div class="input-group input-group-lg">
                               <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-envelope-fill"></i></span>
                               <input type="email" class="form-control border-0 bg-light rounded-end ps-1  @error('email') is-invalid @enderror" placeholder="E-mail" id="exampleInputEmail1" name="email" value="{{ old('email') }}" required>
                               @error('email')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                            </div>
                          
                           <div class="col-md-12 mb-4">
                              <label for="inputPassword" class="form-label">Password *</label>
                              <div class="input-group input-group-lg">
                                 <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
                                 <input type="password" class="form-control border-0 bg-light rounded-end ps-1  @error('how_did_you_hear') is-invalid @enderror" placeholder="Password" id="inputPassword" name="password" value="{{ old('how_did_you_hear') }}" required>
                                 @error('how_did_you_hear')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                              </div>
                           </div>
                          
                        </div>
                        <!-- Check box -->
                        <div class="mb-4 form-check">
                           <input type="checkbox" class="form-check-input" id="exampleCheck1">
                           <label class="form-check-label" for="exampleCheck1">I agree to the terms and conditions</label>
                        </div>
                        <!-- Button -->
                        <div class="align-items-center mt-0">
                           <div class="d-grid">
                              <button type="submit" class="btn btn-primary">
                              {{ __('Register') }}
                              </button>
                           </div>
                        </div>
                     </form>
                     <!-- Registration Form END -->
                     <!-- Sign in link -->
                     <div class="mt-4 text-center">
                        <span>Already have an account? <a href="{{route('student.register.form')}}">Sign in here</a></span>
                     </div>
                  </div>
               </div>
               <!-- Row END -->
            </div>
         </div>
         <!-- Row END -->
      </div>
   </section>
</main>
<!-- **************** MAIN CONTENT END **************** -->
<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>
<!-- Bootstrap JS -->
<script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- Template Functions -->
<script src="{{asset('assets/js/functions.js')}}"></script>

<script>
  $(document).ready(function() {
      @if ($errors->any())
          @foreach ($errors->all() as $error)
              $(document).Toasts('create', {
                  title: 'Error',
                  body: '{{ $error }}',
                  autohide: true,
                  delay: 5000,
                  class: 'bg-danger'
              });
          @endforeach
      @endif
  });
</script>

</body>
</html>
