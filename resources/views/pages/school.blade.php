@include('layouts.app')
@include('layouts.components.navbar-header')

<section class="hero bg-dark text-white d-flex align-items-center" style="height: 100vh; background-image: url('{{asset('ass_asset/img/woman-2.jpg')}}'); background-size: cover; background-position: center;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 text-center text-lg-start glassmorphism">
        <h1 class="display-3 font-weight-bold">Welcome to Our Platform</h1>
        <p class="lead">Explore innovative learning solutions and expert-led courses to boost your career.</p>
        <a href="#learn-more" class="btn btn-primary btn-lg mt-4">Get Started</a>
      </div>
    </div>
    
      {{-- <div class="col-lg-6 text-center mt-5 mt-lg-0">
        <img src="your-animated-image.gif" alt="Animated Hero Image" class="img-fluid animate__animated animate__fadeInUp">
      </div> --}}
    </div>
  </div>
</section>


<section class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/osIPeQynNGU" allowfullscreen style="height: 400px; width: 100%;"></iframe>
        </div>
      </div>
      <div class="col-md-6">
        <h2 class="mbr-text mbr-fonts-style display-2">The School of Product</h2>
        <p class="mbr-cit  display-8">
          This is your gateway to mastering the realms of Product Management, Product Design, and Product Marketing! Our comprehensive technical courses are carefully designed to equip learners with the knowledge and skills essential to launch successful careers and compete with confidence on the global stage.
        </p>
        <p>
          To ensure you have all the tools you need for success, we embrace a holistic approach to learning. Our curriculum integrates active self-paced learning, live interactive classes, and enriching peer-to-peer training, creating an immersive experience that fosters your growth.
        </p>
        <div class="d-flex align-items-center mt-4">
          <img src="{{asset('ass_asset/img/woman-2.jpg')}}" alt="Micah Timileyin" class="rounded-circle me-3" style="width: 50px; height: 50px;">
          <div>
            <strong>Micah Timileyin</strong><br>
            <span class="text-muted">Program Manager</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-5">Our Programs</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="{{asset('ass_asset/img/product_management_card_dmkfa6.png')}}" class="card-img-top" alt="Product Design">
          <div class="card-body">
            <h5 class="card-title">Product Design</h5>
            <p class="card-text">
              This course will take you through the basic principles of designing products that address user needs and align with business goals.
            </p>
            <a href="#" class="btn btn-link text-decoration-none">
              Learn more <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="{{asset('ass_asset/img/product_management_card_dmkfa6.png')}}" class="card-img-top" alt="Product Marketing">
          <div class="card-body">
            <h5 class="card-title">Product Marketing</h5>
            <p class="card-text">
              This course will take you through the basic principles of marketing products that address user needs and align with business goals.
            </p>
            <a href="#" class="btn btn-link text-decoration-none">
              Learn more <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="{{asset('ass_asset/img/product_management_card_dmkfa6.png')}}" class="card-img-top" alt="Product Management">
          <div class="card-body">
            <h5 class="card-title">Product Management</h5>
            <p class="card-text">
              It is designed to provide you essential product management skills, market research, customer insights, and effective communication skills.
            </p>
            <a href="#" class="btn btn-link text-decoration-none">
              Learn more <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@include('layouts.components.footer')