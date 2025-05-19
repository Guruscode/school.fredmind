@include('layouts.app')
@include('layouts.components.navbar-header')

<!-- =========================
    INTRO SECTION   
============================== -->

<section id="intro" class="parallax-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">
        <h1 class="wow fadeInUp" data-wow-delay="1.6s">
          Acquire Tech Skill Here
        </h1>
        <h3 class="wow bounceIn" data-wow-delay="0.9s">
          Purely Practical & Access to Jobs. Build a Globally Lucrative Tech Career
        </h3>

        <a href="#overview" class="btn btn-lg btn-default smoothScroll wow fadeInUp d-none d-sm-inline-block" data-wow-delay="2.3s">
          Select Course
        </a>
        <a href="#register" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="2.3s">
          Start Learning
        </a>
      </div>
    </div>
  </div>
</section>


<!-- =========================
    OVERVIEW SECTION   
============================== -->
<section id="overview" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.6s">
				<h1>For Individuals</h1>
				<p>Earn a Tech Diploma and master the skills that will help you achieve a career change, workplace promotion, or even international job opportunities.
                </p>
				<a href="#register" class="btn btn-lg btn-primary smoothScroll wow fadeInUp" data-wow-delay="2.3s">Start Learning Today</a>
			</div>
            
					
			<div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.9s">
				<img src="{{asset('newasset/images/image19.jpg')}}" class="img-responsive" alt="Overview">
			</div>

		</div>
	</div>
</section>


<!-- =========================
    DETAIL SECTION   
============================== -->
<section id="detail" class="parallax-section">
	<div class="container">
      
		<div class="row">
         

			<div class="wow fadeInLeft col-md-4 col-sm-4" data-wow-delay="0.3s">
				<i class="fa fa-group"></i>
				<h3>Updated Curriculum</h3>
				<p>Our modules are well-structured with up-to-date information, and relevant course content to align with your learning goals.  </p>
			</div>

			<div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
				<i class="fa fa-clock-o"></i>
				<h3>Stellar User Experience </h3>
				<p>The functionality of our learning platform helps you learn from anywhere. We offer a virtual-first, self paced program that runs in cohorts. 
                </p>
			</div>

			<div class="wow fadeInRight col-md-4 col-sm-4" data-wow-delay="0.9s">
				<i class="fa fa-microphone"></i>
				<h3>Expert Tutors</h3>
				<p>Our instructors/facilitators are seasoned industry leaders with relevant industry experience, academic credentials, and a strong track record in teaching the subject matter. </p>
			</div>
            <div class="wow fadeInRight col-md-4 col-sm-4" data-wow-delay="0.9s">
				<i class="fa fa-microphone"></i>
				<h3>Progress Tracking</h3>
				<p>Our course helps you assess your progress and provides you with real-time feedback through quizzes, assignments, or projects to gauge your understanding.</p>
			</div>
            <div class="wow fadeInRight col-md-4 col-sm-4" data-wow-delay="0.9s">
				<i class="fa fa-microphone"></i>
				<h3>Support & Community</h3>
				<p>You get to connect with fellow learners through discussion forums, group projects, networking events to foster collaboration.
                </p>
			</div>

		</div>
	</div>
</section>


<!-- =========================
    VIDEO SECTION   
============================== -->
<section id="video" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="1.3s">
				<h2>Go from CLUELESS to TECH BRO!!!
                </h2>
				<h3>Hear what our students have to say from their learning experience</h3>
				
			</div>
			<div class="wow fadeInUp col-md-6 col-sm-10" data-wow-delay="1.6s">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rrHzvqY7YpU" allowfullscreen></iframe>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- =========================
    SPEAKERS SECTION   
============================== -->
{{-- <section id="speakers" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12 wow bounceIn">
				<div class="section-title">
					<h2>Creative Speakers</h2>
					<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
				</div>
			</div>

			<!-- Testimonial Owl Carousel section
			================================================== -->
			<div id="owl-speakers" class="owl-carousel">

				<div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s">
					<div class="speakers-wrapper">
						<img src="{{asset('newasset/images/speakers-img1.jpg')}}" class="img-responsive" alt="speakers">
							<div class="speakers-thumb">
								<h3>Jenny Green</h3>
								<h6>UI Designer</h6>
							</div>
					</div>
				</div>

				<div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.6s">
					<div class="speakers-wrapper">
						<img src="{{asset('newasset/images/speakers-img2.jpg')}}" class="img-responsive" alt="speakers">
							<div class="speakers-thumb">
								<h3>David Yoon</h3>
								<h6>Creative Director</h6>
							</div>
					</div>
				</div>

				<div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s">
					<div class="speakers-wrapper">
						<img src="{{asset('newasset/images/speakers-img3.jpg')}}" class="img-responsive" alt="speakers">
							<div class="speakers-thumb">
								<h3>Je Mary Lee</h3>
								<h6>Web Specialist</h6>
							</div>
					</div>
				</div>

				<div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.6s">
					<div class="speakers-wrapper">
						<img src="{{asset('newasset/images/speakers-img4.jpg')}}" class="img-responsive" alt="speakers">
							<div class="speakers-thumb">
								<h3>Johnathan Doe</h3>
								<h6>Frontend Dev</h6>
							</div>
					</div>
				</div>

				<div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.6s">
					<div class="speakers-wrapper">
						<img src="{{asset('newasset/images/speakers-img5.jpg')}}" class="img-responsive" alt="speakers">
							<div class="speakers-thumb">
								<h3>Elite Hamilton</h3>
								<h6>Marketing Guru</h6>
							</div>
					</div>
				</div>
				
			</div>

		</div>
	</div>
</section> --}}


<!-- =========================
    Course SECTION   
============================== -->
<section id="courses" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.6s">
				<div class="section-title">
					<h2>Our Courses</h2>
					<p>Explore our range of courses designed to help you master skills in marketing, web development, cloud computing, and mobile app development. More exciting courses are coming soon!</p>
				</div>
			</div>

			<div class="wow fadeInUp col-md-10 col-sm-10" data-wow-delay="0.9s">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#marketing" aria-controls="marketing" role="tab" data-toggle="tab">Marketing</a></li>
					<li><a href="#webdev" aria-controls="webdev" role="tab" data-toggle="tab">Web Development</a></li>
					<li><a href="#cloud" aria-controls="cloud" role="tab" data-toggle="tab">Cloud Computing</a></li>
					<li><a href="#mobile" aria-controls="mobile" role="tab" data-toggle="tab">Mobile Development</a></li>
				</ul>
				<!-- tab panes -->
				<div class="tab-content">

					<div role="tabpanel" class="tab-pane active" id="marketing">
						<div class="col-md-12 col-sm-12">
							<h3>Marketing</h3>
							<p>Coming Soon. Stay tuned for our comprehensive marketing course covering social media, digital strategies, and more!</p>
						</div>
					</div>

					<div role="tabpanel" class="tab-pane" id="webdev">
						<div class="col-md-12 col-sm-12">
							<h3>Web Development</h3>
							<p>Coming Soon. Learn about front-end, back-end, and full-stack web development with hands-on projects and tutorials!</p>
						</div>
					</div>

					<div role="tabpanel" class="tab-pane" id="cloud">
						<div class="col-md-12 col-sm-12">
							<h3>Cloud Computing</h3>
							<p>Coming Soon. Dive into the world of cloud infrastructure, platforms, and services with this upcoming course!</p>
						</div>
					</div>

					<div role="tabpanel" class="tab-pane" id="mobile">
						<div class="col-md-12 col-sm-12">
							<h3>Mobile Development</h3>
							<p>Coming Soon. Build your own mobile apps for Android and iOS with our in-depth mobile development course!</p>
						</div>
					</div>

				</div>

		</div>
	</div>
</section>



<!-- =========================
   LEARNING OPTIONS SECTION   
============================== -->
<section id="register" class="parallax-section" style="padding: 50px 0; background-color: #f8f9fa;">
  <div class="container">
    <div class="row">

      <!-- Section Title -->
      <div class="wow fadeInUp col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 text-center" data-wow-delay="0.4s">
        <div class="section-title" style="margin-bottom: 40px;">
          <h2 style="color: rgb(242, 84, 95); font-weight: bold;">Learning <span style="color: #ffffff;">Options</span></h2>
          <p style="color: #fffffff; font-size: 1.2em;">Choose the learning option that best suits you from the formats below.</p>
        </div>
      </div>

      <!-- Learning Option: Live Classes -->
      <div class="col-md-6 col-sm-6">
        <div class="card learning-option-card wow fadeInUp" data-wow-delay="0.6s" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: none; margin-bottom: 30px;">
          <div class="card-body" style="padding: 20px;">
            <img src="{{asset('newasset/images/p2.png')}}" alt="Live Classes" style="width: 100%; border-radius: 10px; margin-bottom: 15px;">
            <h3 class="card-title" style="color: rgb(242, 84, 95); font-weight: bold;">Live Classes</h3>
            <p style="color: #ffffff;">Take advantage of instructor-led, live classes with onsite and virtual options. Share a hands-on classroom with students in a cohort-based training.</p>
            <a href="{{route('student.register.form')}}" class="btn btn-warning" style="color: white; background-color:rgb(242, 84, 95) !important; border:rgb(242, 84, 95) !important">Start Learning</a>
          </div>
        </div>
      </div>

      <!-- Learning Option: Self-Paced Learning (LooP) -->
      <div class="col-md-6 col-sm-6">
        <div class="card learning-option-card wow fadeInUp" data-wow-delay="0.8s" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: none;">
          <div class="card-body" style="padding: 20px;">
            <img src="{{asset('newasset/images/p1.png')}}" alt="Self-Paced Learning" style="width: 100%; border-radius: 10px; margin-bottom: 15px;">
            <h3 class="card-title" style="color: rgb(242, 84, 95); font-weight: bold;">Self-Paced Learning (LooP)</h3>
            <p style="color: #ffffff;">Ideal for you if you prefer to learn at your own time. Pluralcode’s LMS & bite-sized topics, assessments, and projects allow you to earn your Diploma without stress.</p>
            <span class="badge badge-secondary" style="background-color: rgb(242, 84, 95); color: white;">Coming Soon</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- =========================
    FAQ SECTION   
============================== -->
<section id="faq" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title -->
			<div class="wow bounceIn col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 text-center">
				<div class="section-title">
					<h2>Do you have Questions?</h2>
					<p>Here are some frequently asked questions to help you understand more about our courses.</p>
				</div>
			</div>

			<div class="wow fadeInUp col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10" data-wow-delay="0.9s">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

					<!-- Question 1: How can I enroll? -->
  					<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingOne">
      						<h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          							How can I enroll?
        						</a>
      						</h4>
    					</div>
   						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      						<div class="panel-body">
        						<p>All you have to do is sign up <a href="#school-page-link">here</a> and follow the instructions!</p>
      						</div>
   						 </div>
 					</div>

					<!-- Question 2: I’m not sure what course to take, what do I do? -->
    				<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingTwo">
      						<h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          							I’m not sure what course to take, what do I do?
        						</a>
      						</h4>
    					</div>
   						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      						<div class="panel-body">
                            	<p>We have created this guide to help you through this process. If you’re still unsure, you can reach out to us at <a href="mailto:info@fredmindschool.com">info@fredmindschool.com</a>.</p>
      						</div>
   						 </div>
 					</div>

					<!-- Question 3: What qualification do I need to get accepted? -->
 					<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingThree">
      						<h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          							What qualification do I need to get accepted?
        						</a>
      						</h4>
    					</div>
   						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      						<div class="panel-body">
                            	<p>No qualification is needed at all. Come as you are!</p>
      						</div>
   						 </div>
 					 </div>

					 <!-- Question 4: How much is tuition? -->
 					<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingFour">
      						<h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          							How much is tuition?
        						</a>
      						</h4>
    					</div>
   						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      						<div class="panel-body">
                            	<p>Tuition varies by course. Check out the pricing <a href="#tuition-page-link">here</a>.</p>
      						</div>
   						 </div>
 					 </div>

					 <!-- Question 5: Can I start classes immediately after I enroll? -->
 					<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingFive">
      						<h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          							Can I start classes immediately after I enroll?
        						</a>
      						</h4>
    					</div>
   						<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      						<div class="panel-body">
                            	<p>We run a cohort-based program, which means you can sign up, but classes will only start with the next cohort.</p>
      						</div>
   						 </div>
 					 </div>

					 <!-- Question 6: Can I get a refund of my tuition fee? -->
 					<div class="panel panel-default">
   						<div class="panel-heading" role="tab" id="headingSix">
      						<h4 class="panel-title">
        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          							Can I get a refund of my tuition fee?
        						</a>
      						</h4>
    					</div>
   						<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      						<div class="panel-body">
                            	<p>No, you can’t get a refund, but you can transfer your enrollment to another course within the school.</p>
      						</div>
   						 </div>
 					 </div>

 				 </div>
			</div>

		</div>
	</div>
</section>

<!-- =========================
    VENUE SECTION   
============================== -->
<section id="venue" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInLeft col-md-offset-1 col-md-5 col-sm-8" data-wow-delay="0.9s">
				<h2>Venue</h2>
				<p>Join us at our on-site venue for an immersive experience, where you can engage with the courses and instructors directly.</p>
				<h4>Zone 5, Novare Central Office</h4>
  				<h4>Wuse, Abuja</h4>
  				<h4>+234 810 931 4651</h4>
			</div>

		</div>
	</div>
</section>


<!-- =========================
    SPONSORS SECTION   
============================== -->
<section id="sponsors" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow bounceIn col-md-12 col-sm-12">
				<div class="section-title">
					<h2>Our Sponsors</h2>
					{{-- <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p> --}}
				</div>
			</div>

			<div class="wow fadeInUp col-md-3 col-sm-6 col-xs-6" data-wow-delay="0.3s">
				<img src="{{asset('newasset/images/sponsor-img1.jpg')}}" class="img-responsive" alt="sponsors">	
			</div>

			<div class="wow fadeInUp col-md-3 col-sm-6 col-xs-6" data-wow-delay="0.6s">
				<img src="{{asset('newasset/images/sponsor-img2.jpg')}}" class="img-responsive" alt="sponsors">	
			</div>

			<div class="wow fadeInUp col-md-3 col-sm-6 col-xs-6" data-wow-delay="0.9s">
				<img src="{{asset('newasset/images/sponsor-img3.jpg')}}" class="img-responsive" alt="sponsors">	
			</div>

			<div class="wow fadeInUp col-md-3 col-sm-6 col-xs-6" data-wow-delay="1s">
				<img src="{{asset('newasset/images/sponsor-img4.jpg')}}" class="img-responsive" alt="sponsors">	
			</div>

		</div>
	</div>
</section>


<!-- =========================
    CONTACT SECTION   
============================== -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-offset-1 col-md-5 col-sm-6" data-wow-delay="0.6s">
				<div class="contact_des">
					<h3>Become a Tutor</h3>
<p>Are you passionate about teaching and eager to share your knowledge? Join our team of expert tutors and inspire the next generation of learners. you can make a real impact by becoming a tutor with us.</p>

<h4>Why Become a Tutor with Us?</h4>
<ul>
  <li><strong>1. Flexible Schedule:</strong> Teach at your convenience with flexible hours that fit your lifestyle.</li>
  <li><strong>2. Competitive Pay:</strong> Earn competitive compensation for your expertise and time.</li>
  <li><strong>3. Global Community:</strong> Connect with a diverse group of learners from around the world and expand your professional network.</li>

</ul>

<p>Ready to make a difference? Click the link below to learn more and start your journey as a tutor today.</p>

<a href="link_to_become_tutor_page" class="btn btn-danger">Learn More</a>

				</div>
			</div>
<br><br><br><br>
				<div class="wow fadeInUp col-md-5 col-sm-6" data-wow-delay="0.9s">
					<div class="contact_detail">
						<div class="section-title">
							<h2>Become a Tutor</h2>
						</div>
						<p>If you're passionate about teaching and want to share your knowledge with eager students, apply to become a tutor with us today! You can help shape future minds.</p>
						<a href="link_to_become_tutor_page" class="btn btn-danger">Apply Now</a>
					</div>
				</div>
		</div>
	</div>
</section>



@include('layouts.components.footer')<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fredmind School - Admission Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('prod/cssFile.css') }}">
</head>

<body>
    <div class="container my-4">
        <!-- Header Section -->
        <div class="header rounded-3">
            <div class="header-content">
                <h1>Join Fredmind School</h1>
                <p>Complete your admission form to start your journey with us. It only takes a few minutes!</p>
            </div>
        </div>

        <!-- Progress Indicator -->
        <div class="progress-steps">
            <div class="step active">
                <i class="fas fa-user"></i> Personal Info
            </div>
            <div class="step">
                <i class="fas fa-book"></i> Course Selection
            </div>
            <div class="step">
                <i class="fas fa-file-invoice"></i> Summary
            </div>
        </div>

        <!-- 1. Personal Information Section -->
        <div class="form-container fade-in" id="personalInfoSection">
            <div class="form-section">
                <h3>
                    <i class="fas fa-user-edit me-2"></i>
                    Personal Information
                </h3>
                <form id="personalInfoForm">
									@csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="first_name" placeholder="Enter first name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Enter last name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phoneNumber" name="phone_number" placeholder="Enter phone number" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="gender" required>
                                <option value="" selected disabled>Select gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="dateOfBirth" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dateOfBirth" name="date_of_birth" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" id="country" name="country" required>
                                <option value="" selected disabled>Select country</option>
                                <!-- Populate dynamically from backend or hardcode -->
                                <option value="1">Nigeria</option>
                                <option value="2">Ghana</option>
                                <option value="3">South Africa</option>
                                <option value="4">Kenya</option>
                                <option value="5">Other</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="stateCity" class="form-label">State/City</label>
                            <input type="text" class="form-control" id="stateCity" name="state_city" placeholder="Enter state or city" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="howDidYouHear" class="form-label">How Did You Hear About Us?</label>
                            <select class="form-select" id="howDidYouHear" name="how_did_you_hear" required>
                                <option value="" selected disabled>Select option</option>
                                <option value="Social Media">Social Media</option>
                                <option value="Friend Referral">Friend Referral</option>
                                <option value="Online Ad">Online Ad</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="advisorId" class="form-label">Advisor ID (Optional)</label>
                            <input type="text" class="form-control" id="advisorId" name="advisor_id" placeholder="Enter Advisor ID">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <button class="btn btn-primary" id="nextToCourseSelection">
                            Next: Course Selection <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- 2. Course Selection and Payment Section -->
        <div class="form-container fade-in" id="courseSelectionSection" style="display: none;">
            <div class="form-section">
                <h3>
                    <i class="fas fa-book me-2"></i>
                    Course Selection
                </h3>
                <form id="courseSelectionForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="course" class="form-label">Choose Your Course</label>
                            <select class="form-select" id="course" name="course" required>
                                <option value="" selected disabled>Select course</option>
                                <option value="Frontend Engineering">Frontend Engineering</option>
                                <option value="Backend Engineering">Backend Engineering</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Data Analysis">Data Analysis</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cohort" class="form-label">Cohort (Start Month)</label>
                            <select class="form-select" id="cohort" name="cohort" required>
                                <option value="" selected disabled>Select your Cohort</option>
                                <option value="January 2025">January 2025</option>
                                <option value="April 2025">April 2025</option>
                                <option value="July 2025">July 2025</option>
                                <option value="October 2025">October 2025</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Class Format</label>
                            <div class="d-flex gap-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="class_format" id="virtualClass"
                                        value="Virtual Class" checked required>
                                    <label class="form-check-label" for="virtualClass">
                                        <i class="fas fa-laptop me-1"></i> Virtual Class
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="class_format" id="physicalClass"
                                        value="Physical Class">
                                    <label class="form-check-label" for="physicalClass">
                                        <i class="fas fa-school me-1"></i> Physical Class
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Payment Plan</label>
                            <div class="d-flex gap-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_plan" id="fullPayment"
                                        value="Full Payment" checked required>
                                    <label class="form-check-label" for="fullPayment">
                                        <i class="fas fa-money-bill-wave me-1"></i> Full Payment
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_plan" id="partPayment"
                                        value="Part Payment">
                                    <label class="form-check-label" for="partPayment">
                                        <i class="fas fa-calendar-alt me-1"></i> Installments
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Payment Currency</label>
                            <div class="d-flex gap-4 flex-wrap">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="currency" id="ngn" value="NGN" checked required>
                                    <label class="form-check-label" for="ngn">
                                        <i class="fas fa-naira-sign me-1"></i> NGN
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="currency" id="usd" value="USD">
                                    <label class="form-check-label" for="usd">
                                        <i class="fas fa-dollar-sign me-1"></i> USD
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="currency" id="crypto" value="USDT/USDC">
                                    <label class="form-check-label" for="crypto">
                                        <i class="fab fa-bitcoin me-1"></i> Crypto
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="voucher-container mb-3">
                        <label for="voucher" class="form-label">Have a discount voucher?</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="voucher" name="voucher" placeholder="Enter voucher code">
                            <button class="btn btn-accent" type="button" id="redeemVoucherButton">
                                <i class="fas fa-ticket-alt me-1"></i> Apply
                            </button>
                        </div>
                    </div>
                    <div class="form-check student-policy-text mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="studentPolicyCheckbox" required>
                        <label class="form-check-label" for="studentPolicyCheckbox">
                            I agree to Fredmind School's <a href="#" class="student-policy-link">Terms of Service</a> and <a href="#" class="student-policy-link">Privacy Policy</a>.
                        </label>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <button class="btn btn-outline-primary" id="backToPersonalInfo">
                            <i class="fas fa-arrow-left me-2"></i> Back
                        </button>
                        <button class="btn btn-primary" id="nextToSummary">
                            Continue to Summary <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- 3. Summary Section -->
        <div class="form-container fade-in" id="summarySection" style="display: none;">
            <div class="row">
                <div class="col-lg-7">
                    <div class="form-section">
                        <h3>
                            <i class="fas fa-user me-2"></i>
                            Personal Information
                        </h3>
                        <div class="summary-item">
                            <label>Full Name:</label>
                            <span id="summaryFullName" class="summary-value">Not provided</span>
                        </div>
                        <div class="summary-item">
                            <label>Email:</label>
                            <span id="summaryEmail" class="summary-value">Not provided</span>
                        </div>
                        <div class="summary-item">
                            <label>Phone Number:</label>
                            <span id="summaryPhone" class="summary-value">Not provided</span>
                        </div>
                        <div class="summary-item">
                            <label>Gender:</label>
                            <span id="summaryGender" class="summary-value">Not provided</span>
                        </div>
                        <div class="summary-item">
                            <label>Date of Birth:</label>
                            <span id="summaryDateOfBirth" class="summary-value">Not provided</span>
                        </div>
                        <div class="summary-item">
                            <label>Location:</label>
                            <span id="summaryLocation" class="summary-value">Not provided</span>
                        </div>
                        <div class="summary-item">
                            <label>How Did You Hear:</label>
                            <span id="summaryHowDidYouHear" class="summary-value">Not provided</span>
                        </div>
                        <div class="summary-item">
                            <label>Advisor ID:</label>
                            <span id="summaryAdvisor" class="summary-value">Not provided</span>
                        </div>
                        <h3 class="mt-4">
                            <i class="fas fa-book me-2"></i>
                            Course Selection
                        </h3>
                        <div class="summary-item">
                            <label>Course:</label>
                            <span id="summaryCourse" class="summary-value">Not selected</span>
                        </div>
                        <div class="summary-item">
                            <label>Cohort:</label>
                            <span id="summaryCohort" class="summary-value">Not selected</span>
                        </div>
                        <div class="summary-item">
                            <label>Class Format:</label>
                            <span id="summaryClassFormat" class="summary-value">Not selected</span>
                        </div>
                        <div class="summary-item">
                            <label>Payment Plan:</label>
                            <span id="summaryPaymentPlan" class="summary-value">Not selected</span>
                        </div>
                        <div class="summary-item">
                            <label>Currency:</label>
                            <span id="summaryCurrency" class="summary-value">Not selected</span>
                        </div>
                        <div class="summary-item">
                            <label>Voucher Code:</label>
                            <span id="summaryVoucher" class="summary-value">Not applied</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="summary-section">
                        <h3>
                            <i class="fas fa-file-invoice me-2"></i>
                            Payment Summary
                        </h3>
                        <div class="highlight-item">
                            <div class="label">Course Fee</div>
                            <div id="courseFee" class="value">₦ 0</div>
                        </div>
                        <div class="summary-item">
                            <label>Amount to Pay:</label>
                            <span id="amountToPay" class="summary-value">₦ 0</span>
                        </div>
                        <div class="summary-item">
                            <label>Balance to Pay:</label>
                            <span id="balanceToPay" class="summary-value">₦ 0</span>
                        </div>
                        <div class="highlight-item mt-4">
                            <div class="label">Amount Payable Now</div>
                            <div id="amountPayableNow" class="value" style="color: var(--accent-color);">₦ 0</div>
                        </div>
                        <div class="summary-item">
                            <label>Transaction Fee:</label>
                            <span id="transactionFee" class="summary-value">₦ 0</span>
                        </div>
                        <div class="highlight-item">
                            <div class="label">Total Amount Due</div>
                            <div id="totalAmountDue" class="value">₦ 0</div>
                        </div>
                        <button class="btn btn-primary w-100 mb-3 mt-3" id="payButton">
                            <i class="fas fa-lock me-2"></i>
                            Pay ₦ 0
                        </button>
                        <button class="btn btn-outline-primary w-100" id="contactSupportButton">
                            <i class="fas fa-headset me-2"></i>
                            Need Help?
                        </button>
                        <div class="d-flex justify-content-between mt-4 flex-wrap">
                            <button class="btn btn-outline-primary mb-2" id="backToCourseSelection">
                                <i class="fas fa-arrow-left me-2"></i> Back
                            </button>
                            <button class="btn btn-outline-primary mb-2" id="editPersonalInfo">
                                <i class="fas fa-edit me-2"></i> Edit Info
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Paystack JS -->
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Navigation between sections
            document.getElementById('nextToCourseSelection').addEventListener('click', function(e) {
                e.preventDefault();
                const form = document.getElementById('personalInfoForm');
                if (!form.checkValidity()) {
                    form.classList.add('was-validated');
                    return;
                }
                document.getElementById('personalInfoSection').style.display = 'none';
                document.getElementById('courseSelectionSection').style.display = 'block';
                updateProgressSteps(2);
            });

            document.getElementById('backToPersonalInfo').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('courseSelectionSection').style.display = 'none';
                document.getElementById('personalInfoSection').style.display = 'block';
                updateProgressSteps(1);
            });

            document.getElementById('nextToSummary').addEventListener('click', function(e) {
                e.preventDefault();
                const form = document.getElementById('courseSelectionForm');
                if (!form.checkValidity()) {
                    form.classList.add('was-validated');
                    return;
                }
                document.getElementById('courseSelectionSection').style.display = 'none';
                document.getElementById('summarySection').style.display = 'block';
                updateSummaryDetails();
                updateProgressSteps(3);
            });

            document.getElementById('backToCourseSelection').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('summarySection').style.display = 'none';
                document.getElementById('courseSelectionSection').style.display = 'block';
                updateProgressSteps(2);
            });

            document.getElementById('editPersonalInfo').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('summarySection').style.display = 'none';
                document.getElementById('personalInfoSection').style.display = 'block';
                updateProgressSteps(1);
            });

            function updateProgressSteps(activeStep) {
                const steps = document.querySelectorAll('.step');
                steps.forEach((step, index) => {
                    if (index < activeStep) {
                        step.classList.add('active');
                    } else {
                        step.classList.remove('active');
                    }
                });
            }

            // Currency and payment calculations
            const currencyRadios = document.querySelectorAll('input[name="currency"]');
            let currentCurrency = '₦';

            // Currency symbols mapping
            const currencySymbols = {
                'NGN': '₦',
                'USD': '$',
                'USDT/USDC': 'USDT '
            };

            // Course fees in different currencies
            const courseFees = {
                'Frontend Engineering': {
                    'NGN': 400000,
                    'USD': 650,
                    'USDT/USDC': 650
                },
                'Backend Engineering': {
                    'NGN': 450000,
                    'USD': 700,
                    'USDT/USDC': 700
                },
                'Digital Marketing': {
                    'NGN': 300000,
                    'USD': 500,
                    'USDT/USDC': 500
                },
                'Data Analysis': {
                    'NGN': 350000,
                    'USD': 600,
                    'USDT/USDC': 600
                }
            };

            document.getElementById('courseSelectionForm').addEventListener('change', function() {
                updatePaymentSummary();
            });

            currencyRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    currentCurrency = currencySymbols[this.value];
                    updatePaymentSummary();
                });
            });

            function updatePaymentSummary() {
                const selectedCourse = document.getElementById('course').value;
                const selectedCohort = document.getElementById('cohort').value;
                const classFormat = document.querySelector('input[name="class_format"]:checked').value;
                const paymentPlan = document.querySelector('input[name="payment_plan"]:checked').value;
                const currency = document.querySelector('input[name="currency"]:checked').value;

                let courseFee = selectedCourse ? courseFees[selectedCourse][currency] : 0;
                courseFee = classFormat === 'Virtual Class' ? courseFee * 0.9 : courseFee;
                let amountToPay = paymentPlan === 'Full Payment' ? courseFee : courseFee * 0.5;
                let balanceToPay = paymentPlan === 'Full Payment' ? 0 : courseFee * 0.5;
                let transactionFee = currency === 'USDT/USDC' ? 0 : courseFee * 0.015;
                let totalAmountDue = amountToPay + transactionFee;

                document.getElementById('courseFee').textContent = `${currentCurrency}${numberWithCommas(Math.round(courseFee))}`;
                document.getElementById('amountToPay').textContent = `${currentCurrency}${numberWithCommas(Math.round(amountToPay))}`;
                document.getElementById('balanceToPay').textContent = `${currentCurrency}${numberWithCommas(Math.round(balanceToPay))}`;
                document.getElementById('amountPayableNow').textContent = `${currentCurrency}${numberWithCommas(Math.round(amountToPay))}`;
                document.getElementById('transactionFee').textContent = `${currentCurrency}${numberWithCommas(Math.round(transactionFee))}`;
                document.getElementById('totalAmountDue').textContent = `${currentCurrency}${numberWithCommas(Math.round(totalAmountDue))}`;
                document.getElementById('payButton').innerHTML = `<i class="fas fa-lock me-2"></i> Pay ${currentCurrency}${numberWithCommas(Math.round(totalAmountDue))}`;
            }

            function numberWithCommas(x) {
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }

            // Update summary details
            function updateSummaryDetails() {
                document.getElementById('summaryFullName').textContent = `${document.getElementById('firstName').value} ${document.getElementById('lastName').value}` || 'Not provided';
                document.getElementById('summaryEmail').textContent = document.getElementById('email').value || 'Not provided';
                document.getElementById('summaryPhone').textContent = document.getElementById('phoneNumber').value || 'Not provided';
                document.getElementById('summaryGender').textContent = document.getElementById('gender').value || 'Not provided';
                document.getElementById('summaryDateOfBirth').textContent = document.getElementById('dateOfBirth').value || 'Not provided';
                const country = document.getElementById('country').options[document.getElementById('country').selectedIndex].text;
                const stateCity = document.getElementById('stateCity').value;
                document.getElementById('summaryLocation').textContent = `${stateCity ? stateCity + ', ' : ''}${country || 'Not provided'}`;
                document.getElementById('summaryHowDidYouHear').textContent = document.getElementById('howDidYouHear').value || 'Not provided';
                document.getElementById('summaryAdvisor').textContent = document.getElementById('advisorId').value || 'Not provided';
                document.getElementById('summaryCourse').textContent = document.getElementById('course').value || 'Not selected';
                document.getElementById('summaryCohort').textContent = document.getElementById('cohort').value || 'Not selected';
                document.getElementById('summaryClassFormat').textContent = document.querySelector('input[name="class_format"]:checked').value || 'Not selected';
                document.getElementById('summaryPaymentPlan').textContent = document.querySelector('input[name="payment_plan"]:checked').value || 'Not selected';
                document.getElementById('summaryCurrency').textContent = document.querySelector('input[name="currency"]:checked').value || 'Not selected';
                document.getElementById('summaryVoucher').textContent = document.getElementById('voucher').value || 'Not applied';
                updatePaymentSummary();
            }

            // Voucher redemption
            document.getElementById('redeemVoucherButton').addEventListener('click', function() {
                const voucherCode = document.getElementById('voucher').value;
                if (voucherCode) {
                    alert(`Voucher "${voucherCode}" applied successfully!`);
                } else {
                    alert('Please enter a voucher code');
                }
            });

            // Contact support button
            document.getElementById('contactSupportButton').addEventListener('click', function() {
                alert('Our support team will contact you shortly. For immediate assistance, please call +234 123 456 7890');
            });

            // Pay button
						document.getElementById('payButton').addEventListener('click', async function(e) {
							e.preventDefault();
						const personalForm = document.getElementById('personalInfoForm');
						const courseForm = document.getElementById('courseSelectionForm');
						if (!personalForm.checkValidity() || !courseForm.checkValidity()) {
								personalForm.classList.add('was-validated');
								courseForm.classList.add('was-validated');
								return;
						}

						const formData = new FormData();
						formData.append('first_name', document.getElementById('firstName').value);
						formData.append('last_name', document.getElementById('lastName').value);
						formData.append('email', document.getElementById('email').value);
						formData.append('phone_number', document.getElementById('phoneNumber').value);
						formData.append('gender', document.getElementById('gender').value);
						formData.append('date_of_birth', document.getElementById('dateOfBirth').value);
						formData.append('country', document.getElementById('country').value);
						formData.append('state_city', document.getElementById('stateCity').value);
						formData.append('how_did_you_hear', document.getElementById('howDidYouHear').value);
						formData.append('advisor_id', document.getElementById('advisorId').value);
						formData.append('course', document.getElementById('course').value);
						formData.append('cohort', document.getElementById('cohort').value);
						formData.append('class_format', document.querySelector('input[name="class_format"]:checked').value);
						formData.append('payment_plan', document.querySelector('input[name="payment_plan"]:checked').value);
						formData.append('currency', document.querySelector('input[name="currency"]:checked').value);
						formData.append('_token', '{{ csrf_token() }}');

						try {
							const response = await fetch('/register', {
									method: 'POST',
									headers: {
											'Content-Type': 'application/json',
											'Accept': 'application/json'
									},
									body: JSON.stringify(formData)
							});

								const result = await response.json();
								if (result.redirect_url) {
										window.location.href = result.redirect_url;
								} else {
										alert(result.message || 'Payment initialization failed. Please try again.');
								}
						} catch (error) {
								console.error('Error:', error);
								alert('An error occurred. Please try again.');
						}
				});
        });
    </script>
</body>

</html>