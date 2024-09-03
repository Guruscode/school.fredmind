
<section data-bs-version="5.1" class="footer1 careerm5 cid-tvKZRxLLhs" once="footers" id="footer1-9">

    

    
    

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-3 col-md-6">
                <div class="title-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style display-5">Fredmind<br> School<br> </h3>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6">
                
            </div>
            <div class="col-12 col-lg-3 col-md-6">
                <div class="list-wrapper">
                    <h4 class="mbr-section-subtitle mbr-fonts-style display-7">
                        Our program
                    </h4>
                    <ul class="list mbr-fonts-style display-4">
                        <li class="item-wrap">Engineering School</li>
                        <li class="item-wrap">Marketing School</li>
                        <li class="item-wrap">Data School </li>
                        <li class="item-wrap">Design School </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6">
                <div class="soc-wrapper">
                    <h4 class="mbr-section-subtitle mbr-fonts-style display-7">
                        Social
                    </h4>
                    <ul class="list mbr-fonts-style display-4">
                        <li class="item-wrap">Twitter</li>
                        <li class="item-wrap">Facebook</li>
                        <li class="item-wrap">Instagram</li>
                        <li class="item-wrap">Linkedin</li>
                    </ul>
                </div>
            </div>
            <div class="col-12">
                <p class="copyright mbr-fonts-style display-4">
                    © Copyright 2024 Fredmindschool - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


<script src="{{asset('ass_asset/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('ass_asset/js/smooth-scroll.js')}}"></script>
  <script src="{{asset('ass_asset/js/index.js')}}"></script>
  <script src="{{asset('ass_asset/js/navbar-dropdown.js')}}"></script>
  <script src="{{asset('ass_asset/js/embla.min.js')}}"></script>
  <script src="{{asset('ass_asset/js/script.js')}}"></script>
  <script src="{{asset('ass_asset/js/scripts.js')}}"></script>
  <script src="{{asset('ass_asset/js/formoid.min.js')}}"></script>
  <!-- Bootstrap Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
    gsap.from("#title", { duration: 1, y: -50, opacity: 0 });
    gsap.from("#subtitle", { duration: 1, y: 50, opacity: 0, delay: 0.5 });
    gsap.from("#description", { duration: 1, y: 50, opacity: 0, delay: 1 });
    gsap.from("#cta-btn", { duration: 1, scale: 0.5, opacity: 0, delay: 1.5 });
    gsap.from(".image", { duration: 1, x: 100, opacity: 0, stagger: 0.5, delay: 2 });
     gsap.from("#headline", { duration: 1.2, y: -50, opacity: 0 });
    gsap.from("#subheading", { duration: 1, y: 50, opacity: 0, delay: 0.4 });
    gsap.from("#description", { duration: 1, x: -100, opacity: 0, delay: 0.8 });
    gsap.from("#cta-button", { duration: 1, scale: 0.8, opacity: 0, delay: 1.2 });
    gsap.from(".image", { duration: 1, x: 100, opacity: 0, stagger: 0.5, delay: 1.6 }); // Animate Corporate Section
    gsap.from("#corporate-title", { duration: 1, x: -100, opacity: 0 });
    gsap.from("#corporate-description", { duration: 1, x: 100, opacity: 0, delay: 0.4 });
    gsap.from("#corporate-button", { duration: 1, scale: 0.8, opacity: 0, delay: 0.8 });

    // Animate Impact Section
    gsap.from("#impact-title", { duration: 1, x: -100, opacity: 0, delay: 1.2 });
    gsap.from("#impact-description", { duration: 1, x: 100, opacity: 0, delay: 1.6 });
    gsap.from("#impact-button", { duration: 1, scale: 0.8, opacity: 0, delay: 2.0 });
    gsap.from("#impact-images .image", { duration: 1, x: 100, opacity: 0, stagger: 0.5, delay: 2.4 });

    // Animate Learning Features Section
    gsap.from("#learning-image", { duration: 1, x: -100, opacity: 0, delay: 2.8 });
    gsap.from("#module-1", { duration: 1, y: 50, opacity: 0, delay: 3.2 });
    gsap.from("#module-2", { duration: 1, y: 50, opacity: 0, delay: 3.6 });
    gsap.from("#module-3", { duration: 1, y: 50, opacity: 0, delay: 4.0 });
    gsap.from("#module-4", { duration: 1, y: 50, opacity: 0, delay: 4.4 });

});

  </script>
</body>
</html>