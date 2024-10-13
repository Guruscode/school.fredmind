@include('layouts.app')
@include('layouts.components.navbar-header')

<!-- =========================
    INTRO SECTION   
============================== -->

<section id="intro" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
                <h1 class="wow fadeInUp" data-wow-delay="1.6s">ACQUIRE TECH SKILLS HERE
                </h1>
				<h3 class="wow bounceIn" data-wow-delay="0.9s">PURELY PRACTICAL & ACCESS TO JOBS.
                    BUILD A GLOBALLY LUCRATIVE TECH CAREER
                    </h3>
				
				<a href="#overview" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="2.3s">Select Course</a>
				<a href="#register" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="2.3s">Start Learning</a>
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
            <a href="#" class="btn btn-warning" style="color: white; background-color:rgb(242, 84, 95) !important; border:rgb(242, 84, 95) !important">Start Learning</a>
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



@include('layouts.components.footer')