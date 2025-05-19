@include('students.Components.dashboardHead')
 @include('students.Components.dashboardSide')    
        <!-- Start Content Area -->
        <div class="main-content flex-1">
@include('students.Components.dashboardNav')       
            <!-- Start Content -->
           <!-- Start Content -->
           <div class="h-[calc(100vh-73px)] overflow-y-auto overflow-x-hidden">
            <div x-data="sales" class="p-4 sm:p-7 min-h-[calc(100vh-145px)]">
              
                <div class="flex flex-col gap-7">
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-7">
                        <div class="bg-lightblue-100 rounded-2xl p-6">
                            <p class="text-sm font-semibold text-black mb-2">Total Courses</p>
                            <div class="flex items-center justify-between">
                                <h2 class="text-2xl leading-9 font-semibold text-black">721K</h2>
                                <div class="flex items-center gap-1">
                                    <p class="text-xs leading-[18px] text-black">+11.01%</p>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.45488 5.60777L14 4L12.6198 9.6061L10.898 7.9532L8.12069 10.8463C8.02641 10.9445 7.89615 11 7.76 11C7.62385 11 7.49359 10.9445 7.39931 10.8463L5.36 8.72199L2.36069 11.8463C2.16946 12.0455 1.85294 12.0519 1.65373 11.8607C1.45453 11.6695 1.44807 11.3529 1.63931 11.1537L4.99931 7.65373C5.09359 7.55552 5.22385 7.5 5.36 7.5C5.49615 7.5 5.62641 7.55552 5.72069 7.65373L7.76 9.77801L10.1766 7.26067L8.45488 5.60777Z" fill="#1C1C1C" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="bg-lightpurple-100 rounded-2xl p-6">
                            <p class="text-sm font-semibold text-black mb-2">Completed Courses</p>
                            <div class="flex items-center justify-between">
                                <h2 class="text-2xl leading-9 font-semibold text-black">367K</h2>
                                <div class="flex items-center gap-1">
                                    <p class="text-xs leading-[18px] text-black">+9.15%</p>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.45488 5.60777L14 4L12.6198 9.6061L10.898 7.9532L8.12069 10.8463C8.02641 10.9445 7.89615 11 7.76 11C7.62385 11 7.49359 10.9445 7.39931 10.8463L5.36 8.72199L2.36069 11.8463C2.16946 12.0455 1.85294 12.0519 1.65373 11.8607C1.45453 11.6695 1.44807 11.3529 1.63931 11.1537L4.99931 7.65373C5.09359 7.55552 5.22385 7.5 5.36 7.5C5.49615 7.5 5.62641 7.55552 5.72069 7.65373L7.76 9.77801L10.1766 7.26067L8.45488 5.60777Z" fill="#1C1C1C" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="bg-lightblue-100 rounded-2xl p-6">
                            <p class="text-sm font-semibold text-black mb-2">Certificate</p>
                            <div class="flex items-center justify-between">
                                <h2 class="text-2xl leading-9 font-semibold text-black">1,156</h2>
                                <div class="flex items-center gap-1">
                                    <p class="text-xs leading-[18px] text-black">-0.56%</p>
                                    <svg width="16" height="16" class="rotate-180" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.45488 5.60777L14 4L12.6198 9.6061L10.898 7.9532L8.12069 10.8463C8.02641 10.9445 7.89615 11 7.76 11C7.62385 11 7.49359 10.9445 7.39931 10.8463L5.36 8.72199L2.36069 11.8463C2.16946 12.0455 1.85294 12.0519 1.65373 11.8607C1.45453 11.6695 1.44807 11.3529 1.63931 11.1537L4.99931 7.65373C5.09359 7.55552 5.22385 7.5 5.36 7.5C5.49615 7.5 5.62641 7.55552 5.72069 7.65373L7.76 9.77801L10.1766 7.26067L8.45488 5.60777Z" fill="#1C1C1C" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="bg-lightpurple-100 rounded-2xl p-6">
                            <p class="text-sm font-semibold text-black mb-2">Total Payment</p>
                            <div class="flex items-center justify-between">
                                <h2 class="text-2xl leading-9 font-semibold text-black">239K</h2>
                                <div class="flex items-center gap-1">
                                    <p class="text-xs leading-[18px] text-black">-1.48%</p>
                                    <svg width="16" height="16" class="rotate-180" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.45488 5.60777L14 4L12.6198 9.6061L10.898 7.9532L8.12069 10.8463C8.02641 10.9445 7.89615 11 7.76 11C7.62385 11 7.49359 10.9445 7.39931 10.8463L5.36 8.72199L2.36069 11.8463C2.16946 12.0455 1.85294 12.0519 1.65373 11.8607C1.45453 11.6695 1.44807 11.3529 1.63931 11.1537L4.99931 7.65373C5.09359 7.55552 5.22385 7.5 5.36 7.5C5.49615 7.5 5.62641 7.55552 5.72069 7.65373L7.76 9.77801L10.1766 7.26067L8.45488 5.60777Z" fill="#1C1C1C" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                </div>
            </div>
@include('students.Components.dashboardFooter') 
                