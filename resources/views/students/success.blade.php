@include('layouts.app')
@include('layouts.components.navbar-header')


<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card text-center">
              <div class="card-body">
                  <h3 class="card-title">Registration Successful</h3>
                  <p class="card-text">Your registration was successful!</p>
                  <a href="{{ route('student.login.form') }}" class="btn btn-primary">Login</a>
              </div>
          </div>
      </div>
  </div>
</div>

@include('layouts.components.footer') 
