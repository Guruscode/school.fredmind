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
                     <form method="POST" action="{{ route('student.register') }}">
                        @csrf




                        <!-- First Name -->
                        <div class="row">
                           <div class="col-md-6 mb-4">
                              <label for="inputFirstName" class="form-label">First Name *</label>
                              <input type="text" class="form-control form-control-lg bg-light border-0 @error('first_name') is-invalid @enderror" id="inputFirstName" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required autofocus>
                              @error('first_name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                           </div>



                           <div class="col-md-6 mb-4">
                              <label for="inputLastName" class="form-label">Last Name *</label>
                              <input type="text" class="form-control form-control-lg bg-light border-0 @error('last_name') is-invalid @enderror" id="inputLastName" placeholder="Last Name" name="last_name"  value="{{ old('last_name') }}" required>
                              @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                        </div>
                        <!-- Gender, Date of Birth -->

                        <div class="row">
                           <div class="col-md-6 mb-4">
                              <label for="inputGender" class="form-label @error('gender') is-invalid @enderror">Gender *</label>
                              <select class="form-select form-select-lg bg-light border-0 @error('gender') is-invalid @enderror" id="inputGender" name="gender" required>
                                 <option selected>Select Gender</option>
                                 <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                 <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                 <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                              </select>
                              @error('gender')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                           </div>

                           <div class="col-md-6 mb-4">
                              <label for="inputDOB" class="form-label">Date of Birth *</label>
                              <input type="date" class="form-control form-control-lg bg-light border-0 @error('date_of_birth') is-invalid @enderror" id="inputDOB" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
                              @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                        </div>



                        <!-- Email, Phone Number -->
                        <div class="row">
                           <div class="col-md-6 mb-4">
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
                           </div>

                           <div class="col-md-6 mb-4">
                              <label for="inputPhoneNumber" class="form-label">Phone Number *</label>
                              <input type="tel" class="form-control form-control-lg bg-light border-0 @error('phone_number') is-invalid @enderror" id="inputPhoneNumber" placeholder="Phone Number" name="phone_number"  value="{{ old('phone_number') }}" required>
                              @error('phone_number')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                           </div>
                        </div>
                        <!-- Country, State/City -->
                        <div class="row">
                           <div class="col-md-6 mb-4">
                              <label for="inputCountry" class="form-label">Country *</label>
                              <select class="form-select form-select-lg bg-light border-0" id="inputCountry" name="country">
                                 <option value="" selected>Select Country</option>
                                 @foreach($countries as $country)
                                 <option value="{{ $country->id }}">{{ $country->name }}</option>
                                 @endforeach
                              </select>
                           </div>
                           <div class="col-md-6 mb-4">
                              <label for="inputStateCity" class="form-label">State/City *</label>
                              <input type="text" class="form-control form-control-lg bg-light border-0" id="inputStateCity" placeholder="State/City" name="state_city">
                           </div>
                        </div>


                        <!-- How did you hear about us? -->
                        <div class="mb-4">
                           <label for="inputHowDidYouHear" class="form-label">How did you hear about us? *</label>
                           <input type="text" class="form-control form-control-lg bg-light border-0 @error('state_city') is-invalid @enderror" id="inputHowDidYouHear" placeholder="How did you hear about us?" name="how_did_you_hear" alue="{{ old('state_city') }}" required>
                           @error('state_city')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>


                        <!-- Password, Confirm Password -->
                        <div class="row">
                           <div class="col-md-6 mb-4">
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
                           <div class="col-md-6 mb-4">
                              <label for="inputConfirmPassword" class="form-label">Confirm Password *</label>
                              <div class="input-group input-group-lg">
                                 <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
                                 <input type="password" class="form-control border-0 bg-light rounded-end ps-1 @error('password') is-invalid @enderror" placeholder="Confirm Password" id="inputConfirmPassword" name="password_confirmation" required>
                                 @error('password')
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
                        <span>Already have an account? <a href="{{route('student.login.form')}}">Sign in here</a></span>
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
