@include('students.Components.dashboardHead')
@include('students.Components.dashboardSide')    
<!-- Start Content Area -->
<div class="main-content flex-1">
@include('students.Components.dashboardNav')       
<!-- Start Content -->
<div class="h-[calc(100vh-73px)] overflow-y-auto overflow-x-hidden">
<div x-data="sales" class="p-4 sm:p-7 min-h-[calc(100vh-145px)]">
   <div class="grid grid-cols-1 2xl:grid-cols-12 gap-7">
      <div class="border border-black/10 dark:border-white/10 p-5 rounded-md">
         <div class="mb-5">
            <p class="text-sm font-semibold">All Schools</p>
         </div>
         <div x-data="{activeDefTab:'profile'}">
            <ul class="flex flex-wrap text-sm text-center text-black/50 dark:text-white/50 border-b border-lightblue-100">
               <li class="mr-2">
                  <a href="javaScript:;" @click="activeDefTab = 'profile'" :class="activeDefTab === 'profile' ? 'bg-lightblue-100 text-black' : 'bg-transparent font-normal text-black/40 dark:text-white/40 hover:bg-lightblue-100 hover:text-black dark:hover:text-black'" class="inline-block p-4 rounded-t-lg">
                  School of engineering
                  </a>
               </li>
               <li class="mr-2">
                  <a href="javaScript:;" @click="activeDefTab = 'dashboard'" :class="activeDefTab === 'dashboard' ? 'bg-lightblue-100 text-black' : 'bg-transparent font-normal text-black/40 dark:text-white/40 hover:bg-lightblue-100 hover:text-black dark:hover:text-black'" class="inline-block p-4 rounded-t-lg">
                  School of product
                  </a>
               </li>
               <li class="mr-2">
                  <a href="javaScript:;" @click="activeDefTab = 'settings'" :class="activeDefTab === 'settings' ? 'bg-lightblue-100 text-black ' : 'bg-transparent font-normal text-black/40 dark:text-white/40 hover:bg-lightblue-100 hover:text-black dark:hover:text-black'" class="inline-block p-4 rounded-t-lg">
                  School of Data
                  </a>
               </li>
               <li class="mr-2">
                  <a href="javaScript:;" @click="activeDefTab = 'contacts'" :class="activeDefTab === 'contacts' ? 'bg-lightblue-100 text-black' : 'bg-transparent font-normal text-black/40 dark:text-white/40 hover:bg-lightblue-100 hover:text-black dark:hover:text-black'" class="inline-block p-4 rounded-t-lg">
                  School of Business
                  </a>
               </li>
               <li>
               </li>
            </ul>
            <div class="tab-content mt-3 text-[13px]">
               <div x-show="activeDefTab === 'profile'" class="">
                  <!-- Start Content -->
                  <div class="h-[calc(100vh-73px)] overflow-y-auto overflow-x-hidden">
                     <div class="p-4 sm:p-7 min-h-[calc(100vh-145px)]">
                        <div class="px-2 py-1 mb-4">
                           <h2 class="text-lg font-semibold">Courses</h2>
                        </div>
                        <div class="grid grid-cols-1 gap-7">
                           <div class="border border-black/10 dark:border-white/10 p-5 rounded-md">
                              <div class="mb-5">
                                 <p class="text-sm font-semibold">Sortable</p>
                              </div>
                              <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                                 <ul id="sortableleft">
                                    <li class="mb-3 cursor-grab">
                                      <a href="{{route('student.course.details')}}">
                                       <div class="bg-lightwhite dark:bg-white/5 rounded-2xl p-6">
                                          <div class="flex gap-4 mb-4">
                                             <div class="flex-1">
                                                <p class="mb-1 text-sm font-semibold">Poster illustation design</p>
                                                <p class="text-xs text-black/40 dark:text-white/40">Due Date: Nov 10, 2022</p>
                                             </div>
                                             <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover" src="{{asset('admin/img/blogger.png')}}" alt="" />
                                          </div>
                                          <div class="flex items-center justify-between gap-2 text-xs mb-3">
                                             <img class="w-6 h-6 flex-none rounded-full overflow-hidden object-cover" src="{{asset('admin/img/avatar-21.png')}}" alt="" />
                                             <div class="flex items-center text-xs text-[#8A8CD9]">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor" />
                                                </svg>
                                                <p>In Progress</p>
                                             </div>
                                          </div>
                                          <div class="mt-1 mb-2 h-1 relative w-full rounded-full overflow-hidden">
                                             <div class="w-full h-full bg-lightblue-300/20 absolute"></div>
                                             <div class="h-full bg-[#8A8CD9] absolute" style="width: 75%;"></div>
                                          </div>
                                          <div class="flex items-center gap-4 justify-between text-xs">
                                             <p>13 <span class="text-black/40 dark:text-white/40">/</span> 49 <span class="text-black/40 dark:text-white/40">Total Tasks</span></p>
                                             <p>75%</p>
                                          </div>
                                       </div>
                                      </a>
                                    </li>

                                    <li class="mb-3 cursor-grab">
                                       <div class="bg-lightwhite  dark:bg-white/5 rounded-2xl p-6">
                                          <div class="flex gap-4 mb-4">
                                             <div class="flex-1">
                                                <p class="mb-1 text-sm font-semibold">Coffee detail page - Main Page</p>
                                                <p class="text-xs text-black/40 dark:text-white/40">Due Date: Jun 20, 2022</p>
                                             </div>
                                             <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover" src="{{asset('admin/img/blogger.png')}}" alt="" />
                                          </div>
                                          <div class="flex items-center justify-between gap-2 text-xs mb-3">
                                             <img class="w-6 h-6 flex-none rounded-full overflow-hidden object-cover" src="{{asset('admin/img/avatar-21.png')}}" alt="" />
                                             <div class="flex items-center text-xs text-[#4AA785]">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor" />
                                                </svg>
                                                <p>Competed</p>
                                             </div>
                                          </div>
                                          <div class="mt-1 mb-2 h-1 relative w-full rounded-full overflow-hidden">
                                             <div class="w-full h-full bg-lightblue-300/20 absolute"></div>
                                             <div class="h-full bg-lightgreen-200 absolute" style="width: 100%;"></div>
                                          </div>
                                          <div class="flex items-center gap-4 justify-between text-xs">
                                             <p>56 <span class="text-black/40 dark:text-white/40">/</span> 56 <span class="text-black/40 dark:text-white/40">Total Tasks</span></p>
                                             <p>100%</p>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="mb-3 cursor-grab">
                                       <div class="bg-lightwhite dark:bg-white/5 rounded-2xl p-6">
                                          <div class="flex gap-4 mb-4">
                                             <div class="flex-1">
                                                <p class="mb-1 text-sm font-semibold">Drinking bottle graphics</p>
                                                <p class="text-xs text-black/40 dark:text-white/40">Due Date: Nov 10, 2022</p>
                                             </div>
                                             <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover" src="{{asset('admin/img/blogger.png')}}" alt="" />
                                          </div>
                                          <div class="flex items-center justify-between gap-2 text-xs mb-3">
                                             <img class="w-6 h-6 flex-none rounded-full overflow-hidden object-cover" src="{{asset('admin/img/avatar-21.png')}}" alt="" />
                                             <div class="flex items-center text-xs text-black/40 dark:text-white/40">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor" />
                                                </svg>
                                                <p>Rejected</p>
                                             </div>
                                          </div>
                                          <div class="mt-1 mb-2 h-1 relative w-full rounded-full overflow-hidden">
                                             <div class="w-full h-full bg-lightblue-300/20 absolute"></div>
                                             <div class="h-full bg-black/40 dark:bg-white/40 absolute" style="width: 45%;"></div>
                                          </div>
                                          <div class="flex items-center gap-4 justify-between text-xs">
                                             <p>16 <span class="text-black/40 dark:text-white/40">/</span> 65 <span class="text-black/40 dark:text-white/40">Total Tasks</span></p>
                                             <p>45%</p>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                                 <ul id="sortableright">
                                    <li class="mb-3 cursor-grab">
                                       <div class="bg-lightwhite dark:bg-white/5 rounded-2xl p-6">
                                          <div class="flex gap-4 mb-4">
                                             <div class="flex-1">
                                                <p class="mb-1 text-sm font-semibold">Company logo design</p>
                                                <p class="text-xs text-black/40 dark:text-white/40">Due Date: Feb 21, 2022</p>
                                             </div>
                                             <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover" src="{{asset('admin/img/blogger.png')}}" alt="" />
                                          </div>
                                          <div class="flex items-center justify-between gap-2 text-xs mb-3">
                                             <img class="w-6 h-6 flex-none rounded-full overflow-hidden object-cover" src="{{asset('admin/img/avatar-21.png')}}" alt="" />
                                             <div class="flex items-center text-xs text-[#4AA785]">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor" />
                                                </svg>
                                                <p>Competed</p>
                                             </div>
                                          </div>
                                          <div class="mt-1 mb-2 h-1 relative w-full rounded-full overflow-hidden">
                                             <div class="w-full h-full bg-lightblue-300/20 absolute"></div>
                                             <div class="h-full bg-lightgreen-200 absolute" style="width: 100%;"></div>
                                          </div>
                                          <div class="flex items-center gap-4 justify-between text-xs">
                                             <p>20 <span class="text-black/40 dark:text-white/40">/</span> 20 <span class="text-black/40 dark:text-white/40">Total Tasks</span></p>
                                             <p>100%</p>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="mb-3 cursor-grab">
                                       <div class="bg-lightwhite dark:bg-white/5 rounded-2xl p-6">
                                          <div class="flex gap-4 mb-4">
                                             <div class="flex-1">
                                                <p class="mb-1 text-sm font-semibold">Landing page design</p>
                                                <p class="text-xs text-black/40 dark:text-white/40">Due Date: Jun 20, 2022</p>
                                             </div>
                                             <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover" src="{{asset('admin/img/blogger.png')}}" alt="" />
                                          </div>
                                          <div class="flex items-center justify-between gap-2 text-xs mb-3">
                                             <div class="flex items-center justify-start -space-x-1.5 text-black">
                                                <img class="w-6 h-6 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-black" src="{{asset('admin/img/avatar-21.png')}}" alt="" />
                                                <img class="w-6 h-6 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-black" src="{{asset('admin/img/avatar-21.png')}}" alt="" />
                                                <span class="flex justify-center items-center w-6 h-6 text-center rounded-full object-cover bg-lightpurple-100 text-xs ring-2 ring-white dark:ring-black">+3</span>
                                             </div>
                                             <div class="flex items-center text-xs text-[#59A8D4]">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor" />
                                                </svg>
                                                <p>Pending</p>
                                             </div>
                                          </div>
                                          <div class="mt-1 mb-2 h-1 relative w-full rounded-full overflow-hidden">
                                             <div class="w-full h-full bg-lightblue-300/20 absolute"></div>
                                             <div class="h-full bg-lightblue-200 absolute" style="width: 36%;"></div>
                                          </div>
                                          <div class="flex items-center gap-4 justify-between text-xs">
                                             <p>5 <span class="text-black/40  dark:text-white/40">/</span> 23 <span class="text-black/40 dark:text-white/40">Total Tasks</span></p>
                                             <p>36%</p>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="mb-3 cursor-grab">
                                       <div class="bg-lightwhite dark:bg-white/5 rounded-2xl p-6">
                                          <div class="flex gap-4 mb-4">
                                             <div class="flex-1">
                                                <p class="mb-1 text-sm font-semibold">Product page redesign</p>
                                                <p class="text-xs text-black/40 dark:text-white/40">Due Date: Jun 20, 2022</p>
                                             </div>
                                             <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover" src="{{asset('admin/img/blogger.png')}}" alt="" />
                                          </div>
                                          <div class="flex items-center justify-between gap-2 text-xs mb-3">
                                             <img class="w-6 h-6 flex-none rounded-full overflow-hidden object-cover" src="{{asset('admin/img/avatar-21.png')}}" alt="" />
                                             <div class="flex items-center text-xs text-[#8A8CD9]">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor" />
                                                </svg>
                                                <p>In Progress</p>
                                             </div>
                                          </div>
                                          <div class="mt-1 mb-2 h-1 relative w-full rounded-full overflow-hidden">
                                             <div class="w-full h-full bg-lightblue-300/20 absolute"></div>
                                             <div class="h-full bg-[#8A8CD9] absolute" style="width: 38%;"></div>
                                          </div>
                                          <div class="flex items-center gap-4 justify-between text-xs">
                                             <p>12 <span class="text-black/40 dark:text-white/40">/</span> 49 <span class="text-black/40 dark:text-white/40">Total Tasks</span></p>
                                             <p>38%</p>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('students.Components.dashboardFooter')