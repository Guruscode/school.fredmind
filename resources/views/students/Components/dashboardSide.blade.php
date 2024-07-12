   <!-- Start Sidebar -->
   <nav class="sidebar fixed top-0 bottom-0 z-40 flex-none w-[212px] border-r border-black/10 dark:border-white/10 transition-all duration-300">
    <div class="bg-white dark:bg-black h-full">
        <!-- Start Logo -->
        <div class="flex p-4">
            <a class='main-logo flex-1 w-full' href='/'>
                {{-- <img src="assets/images/logo.svg" alt="logo" class="block dark:hidden" />
                <img src="assets/images/dark-logo.svg" alt="logo" class="hidden dark:block" /> --}}
                <h1  class="hidden dark:block" >Fredmind school</h1>
            </a>
        </div>
        <!-- End Logo -->
        <!-- Start Menu -->
        <ul class="relative h-[calc(100vh-58px)] flex flex-col gap-1 overflow-y-auto overflow-x-hidden p-4 py-0" x-data="{ activeMenu: 'dashboard' }">
          <br><br>
          <li class="menu nav-item">
            <a href="{{route('student.dashboard')}}" class="nav-link group">
                <div class="text-black/50 dark:text-white/20 w-4 h-4 flex items-center justify-center" :class="{'!rotate-90' : activeMenu === 'pages'}">
                  
                </div>
                <div class="flex items-center">
                   
                    <span class="pl-1 text-black dark:text-white">Dashboard</span>
                </div>
            </a>
          
        </li>
          
            <h2 class="pl-3 my-2 text-black/60 dark:text-white/40 text-sm">
                <span>User Interface</span>
            </h2>
          

            <li class="menu nav-item">
              <a href="{{route('student.course')}}" class="nav-link group">
                  <div class="text-black/50 dark:text-white/20 w-4 h-4 flex items-center justify-center" :class="{'!rotate-90' : activeMenu === 'pages'}">
                    
                  </div>
                  <div class="flex items-center">
                     
                      <span class="pl-1 text-black dark:text-white">Courses</span>
                  </div>
              </a>
            
          </li>
          
          <li class="menu nav-item">
            <a href="{{route('student.programs')}}" class="nav-link group">
                <div class="text-black/50 dark:text-white/20 w-4 h-4 flex items-center justify-center" :class="{'!rotate-90' : activeMenu === 'pages'}">
                  
                </div>
                <div class="flex items-center">
                   
                    <span class="pl-1 text-black dark:text-white">Programs</span>
                </div>
            </a>
          
        </li>
          
        <li class="menu nav-item">
          <a href="{{route('student.payment')}}" class="nav-link group">
              <div class="text-black/50 dark:text-white/20 w-4 h-4 flex items-center justify-center" :class="{'!rotate-90' : activeMenu === 'pages'}">
                
              </div>
              <div class="flex items-center">
                 
                  <span class="pl-1 text-black dark:text-white">Payment</span>
              </div>
          </a>
        
      </li>
        
         
        
        </ul>
        <!-- End Menu -->
    </div>
</nav>
<!-- End sidebar -->
