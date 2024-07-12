@include('students.Components.dashboardHead')
@include('students.Components.dashboardSide')    
        <!-- Start Content Area -->
<div class="main-content flex-1">
@include('students.Components.dashboardNav')       
           <!-- Start Content -->
           <div class="h-[calc(100vh-73px)] overflow-y-auto overflow-x-hidden">
            <div class="p-7 min-h-[calc(100vh-145px)]">
                <div x-data="{activeTab:'overview'}" class="tabs flex flex-col">
                
                    <div class="tab-content">
                        <div x-show="activeTab === 'overview'" class="flex flex-col gap-7">
                            <div class="bg-lightwhite dark:bg-white/5 rounded-2xl p-6">
                                <div class="flex items-start justify-between gap-4 mb-[2px]">
                                    <h2 class="text-lg font-semibold">Course detail page</h2>
                                    <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover" src="assets/images/marvel.png" alt="" />
                                </div>
                                <div class="flex items-end gap-4 justify-between">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 lg:gap-0 lg:flex lg:divide-x divide-[#000000]/10 dark:divide-white/10">
                                        <div class="lg:pr-7 shrink-0">
                                            <p class="mb-1">Staus</p>
                                            <div class="w-full bg-[#000]/5 dark:bg-white/20 rounded-lg overflow-hidden">
                                                <div class="bg-lightpurple-200 whitespace-nowrap text-center px-1.5 text-lg font-semibold text-black" style="width: 51%;">
                                                    In Progress / 51%
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-7">
                                <div class="p-6 bg-lightwhite dark:bg-white/5 rounded-2xl">
                                    <h2 class="text-sm font-semibold mb-4">Description</h2>
                                    <div class="flex flex-nowrap justify-between overflow-auto gap-8 mb-5">
                                        <div class="cursor-pointer group hover:bg-black dark:hover:bg-lightpurple-200 p-1.5 duration-150 rounded-md text-center">
                                            <p class="text-black/40 group-hover:text-white dark:text-white/40 dark:group-hover:text-black text-xs">Su</p>
                                            <p class="font-semibold group-hover:text-white dark:group-hover:text-black">01</p>
                                        </div>
                                        <div class="cursor-pointer bg-black dark:bg-lightpurple-200 p-1.5 duration-150 rounded-md text-center">
                                            <p class="text-white dark:text-black text-xs">Mo</p>
                                            <p class="font-semibold text-white dark:text-black">02</p>
                                        </div>
                                        <div class="cursor-pointer group hover:bg-black dark:hover:bg-lightpurple-200 p-1.5 duration-150 rounded-md text-center">
                                            <p class="text-black/40 group-hover:text-white dark:text-white/40 dark:group-hover:text-black text-xs">Tu</p>
                                            <p class="font-semibold group-hover:text-white dark:group-hover:text-black">03</p>
                                        </div>
                                        <div class="cursor-pointer group hover:bg-black dark:hover:bg-lightpurple-200 p-1.5 duration-150 rounded-md text-center">
                                            <p class="text-black/40 group-hover:text-white dark:text-white/40 dark:group-hover:text-black text-xs">We</p>
                                            <p class="font-semibold group-hover:text-white dark:group-hover:text-black">04</p>
                                        </div>
                                        <div class="cursor-pointer group hover:bg-black dark:hover:bg-lightpurple-200 p-1.5 duration-150 rounded-md text-center">
                                            <p class="text-black/40 group-hover:text-white dark:text-white/40 dark:group-hover:text-black text-xs">Th</p>
                                            <p class="font-semibold group-hover:text-white dark:group-hover:text-black">05</p>
                                        </div>
                                        <div class="cursor-pointer group hover:bg-black dark:hover:bg-lightpurple-200 p-1.5 duration-150 rounded-md text-center">
                                            <p class="text-black/40 group-hover:text-white dark:text-white/40 dark:group-hover:text-black text-xs">Fr</p>
                                            <p class="font-semibold group-hover:text-white dark:group-hover:text-black">06</p>
                                        </div>
                                        <div class="cursor-pointer group hover:bg-black dark:hover:bg-lightpurple-200 p-1.5 duration-150 rounded-md text-center">
                                            <p class="text-black/40 group-hover:text-white dark:text-white/40 dark:group-hover:text-black text-xs">Sa</p>
                                            <p class="font-semibold group-hover:text-white dark:group-hover:text-black">07</p>
                                        </div>
                                    </div>
                                    <ol class="relative border-l border-black/10 dark:border-white/10 ml-3">
                                        <li class="mb-4 ml-6">
                                            <img class="absolute flex items-center justify-center w-6 h-6 rounded-full overflow-hidden object-cover -left-3 ring-8 ring-lightwhite dark:ring-[#282828]" src="assets/images/avatar-22.png" alt="" />
                                            <h3 class="flex items-center">Edited the details of Project X</h3>
                                            <p class="mb-4 text-xs leading-[18px] text-black/40 dark:text-white/40">Email@gmail.com</p>
                                        </li>
                                        <li class="mb-4 ml-6">
                                            <img class="absolute flex items-center justify-center w-6 h-6 rounded-full overflow-hidden object-cover -left-3 ring-8 ring-lightwhite dark:ring-[#282828]" src="assets/images/avatar-2.png" alt="" />
                                            <h3 class="flex items-center">Stevens</h3>
                                            <p class="mb-4 text-xs leading-[18px] text-black/40 dark:text-white/40">1:32 AM</p>
                                        </li>
                                        <li class="mb-4 ml-6">
                                            <img class="absolute flex items-center justify-center w-6 h-6 rounded-full overflow-hidden object-cover -left-3 ring-8 ring-lightwhite dark:ring-[#282828]" src="assets/images/avatar-14.png" alt="" />
                                            <h3 class="flex items-center">Submitted a bug</h3>
                                            <p class="mb-4 text-xs leading-[18px] text-black/40 dark:text-white/40">Yesterday 12:39 AM</p>
                                        </li>
                                        <li class="mb-4 ml-6">
                                            <img class="absolute flex items-center justify-center w-6 h-6 rounded-full overflow-hidden object-cover -left-3 ring-8 ring-lightwhite dark:ring-[#282828]" src="assets/images/avatar-10.png" alt="" />
                                            <h3 class="flex items-center">Modified A data in Page X</h3>
                                            <p class="mb-4 text-xs leading-[18px] text-black/40 dark:text-white/40">Last Thursday 3:34 AM</p>
                                        </li>
                                        <li class="mb-4 ml-6">
                                            <img class="absolute flex items-center justify-center w-6 h-6 rounded-full overflow-hidden object-cover -left-3 ring-8 ring-lightwhite dark:ring-[#282828]" src="assets/images/avatar-15.png" alt="" />
                                            <h3 class="flex items-center">Deleted a page in Project X</h3>
                                            <p class="mb-4 text-xs leading-[18px] text-black/40 dark:text-white/40">Aug 11</p>
                                        </li>
                                    </ol>
                                </div>
                                <div class="p-6 bg-lightwhite dark:bg-white/5 rounded-2xl">
                                    <h2 class="text-sm font-semibold mb-4">Lessons</h2>
                                    <div class="flex flex-col gap-4 mb-4">
                                        <div class="flex items-start gap-2 cursor-pointer group">
                                            <div class="w-6 h-6 p-1 bg-lightpurple-100 flex-none rounded-lg">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.5 2V5.5H13L9.5 2Z" fill="#1C1C1C" />
                                                    <path d="M12.5 5.70711V8C12.5 8.27614 12.7239 8.5 13 8.5C13.2761 8.5 13.5 8.27614 13.5 8V5.5C13.5 5.36739 13.4473 5.24021 13.3536 5.14645L9.85355 1.64645C9.75979 1.55268 9.63261 1.5 9.5 1.5L3.5 1.5C3.08579 1.5 2.79289 1.79289 2.79289 1.79289C2.5 2.08579 2.5 2.5 2.5 2.5V8C2.5 8.27614 2.72386 8.5 3 8.5C3.27614 8.5 3.5 8.27614 3.5 8V2.5H9.29289L12.5 5.70711Z" fill="#1C1C1C" />
                                                    <path d="M9.5 6H13C13.2761 6 13.5 5.77614 13.5 5.5C13.5 5.22386 13.2761 5 13 5H10V2C10 1.72386 9.77614 1.5 9.5 1.5C9.22386 1.5 9 1.72386 9 2V5.5C9 5.77614 9.22386 6 9.5 6Z" fill="#1C1C1C" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 13.5V10.5C2.5 10.2239 2.72386 10 3 10H4C4 10 4.62132 10 5.06066 10.4393C5.06066 10.4393 5.5 10.8787 5.5 11.5C5.5 11.5 5.5 12.1213 5.06066 12.5607C5.06066 12.5607 4.62132 13 4 13H3.5V13.5C3.5 13.7761 3.27614 14 3 14C2.72386 14 2.5 13.7761 2.5 13.5ZM4 12H3.5V11H4C4 11 4.20711 11 4.35355 11.1464C4.35355 11.1464 4.5 11.2929 4.5 11.5C4.5 11.5 4.5 11.7071 4.35355 11.8536C4.35355 11.8536 4.20711 12 4 12Z" fill="#1C1C1C" />
                                                    <path d="M11.25 10.5V13.5C11.25 13.7761 11.4739 14 11.75 14C12.0261 14 12.25 13.7761 12.25 13.5V11H13.5C13.7761 11 14 10.7761 14 10.5C14 10.2239 13.7761 10 13.5 10H11.75C11.4739 10 11.25 10.2239 11.25 10.5Z" fill="#1C1C1C" />
                                                    <path d="M13.25 11.75H11.75C11.4739 11.75 11.25 11.9739 11.25 12.25C11.25 12.5261 11.4739 12.75 11.75 12.75H13.25C13.5261 12.75 13.75 12.5261 13.75 12.25C13.75 11.9739 13.5261 11.75 13.25 11.75Z" fill="#1C1C1C" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.125 14C6.84886 14 6.625 13.7761 6.625 13.5V10.5C6.625 10.2239 6.84886 10 7.125 10H8C8 10 8.82843 10 9.41421 10.5858C9.41421 10.5858 10 11.1716 10 12C10 12 10 12.8284 9.41421 13.4142C9.41421 13.4142 8.82843 14 8 14H7.125ZM8 13H7.625V11H8C8 11 8.41421 11 8.70711 11.2929C8.70711 11.2929 9 11.5858 9 12C9 12 9 12.4142 8.70711 12.7071C8.70711 12.7071 8.41421 13 8 13Z" fill="#1C1C1C" />
                                                </svg>
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-sm">Project tech requirements.pdf</p>
                                                <p class="text-xs text-black/40 dark:text-white/40">5.6 MB / 2 days ago Karina Clark</p>
                                            </div>
                                            <button class="p-1 flex-none hidden group-hover:block" type="button">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.9784 7.22874L10.9786 7.22855C11.0723 7.13479 11.125 7.00761 11.125 6.875C11.125 6.74239 11.0723 6.61521 10.9786 6.52145C10.8848 6.42768 10.7576 6.375 10.625 6.375C10.4924 6.375 10.3652 6.42768 10.2714 6.52145L10.2713 6.52163L8 8.79289L5.72861 6.52151C5.63479 6.42768 5.50761 6.375 5.375 6.375C5.24239 6.375 5.11521 6.42768 5.02145 6.52145C4.92768 6.61521 4.875 6.74239 4.875 6.875C4.875 7.00761 4.92768 7.13479 5.02145 7.22855L7.64645 9.85355C7.74021 9.94732 7.86739 10 8 10C8.13261 10 8.25978 9.94732 8.35355 9.85355L10.9784 7.22874Z" fill="currentColor" />
                                                    <path d="M7.5 2.5V9.5C7.5 9.77614 7.72386 10 8 10C8.27614 10 8.5 9.77614 8.5 9.5V2.5C8.5 2.22386 8.27614 2 8 2C7.72386 2 7.5 2.22386 7.5 2.5Z" fill="currentColor" />
                                                    <path d="M3 13V9.5C3 9.22386 2.77614 9 2.5 9C2.22386 9 2 9.22386 2 9.5V13C2 13.4142 2.29289 13.7071 2.29289 13.7071C2.58579 14 3 14 3 14H13C13.4142 14 13.7071 13.7071 13.7071 13.7071C14 13.4142 14 13 14 13V9.5C14 9.22386 13.7761 9 13.5 9C13.2239 9 13 9.22386 13 9.5V13H3Z" fill="currentColor" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex items-start gap-2 cursor-pointer group">
                                            <div class="w-6 h-6 p-1 bg-lightpurple-100 flex-none rounded-lg">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.5 2V5.5H13L9.5 2Z" fill="#1C1C1C" />
                                                    <path d="M12.5 5.70711V8C12.5 8.27614 12.7239 8.5 13 8.5C13.2761 8.5 13.5 8.27614 13.5 8V5.5C13.5 5.36739 13.4473 5.24021 13.3536 5.14645L9.85355 1.64645C9.75979 1.55268 9.63261 1.5 9.5 1.5L3.5 1.5C3.08579 1.5 2.79289 1.79289 2.79289 1.79289C2.5 2.08579 2.5 2.5 2.5 2.5V8C2.5 8.27614 2.72386 8.5 3 8.5C3.27614 8.5 3.5 8.27614 3.5 8V2.5H9.29289L12.5 5.70711Z" fill="#1C1C1C" />
                                                    <path d="M9.5 6H13C13.2761 6 13.5 5.77614 13.5 5.5C13.5 5.22386 13.2761 5 13 5H10V2C10 1.72386 9.77614 1.5 9.5 1.5C9.22386 1.5 9 1.72386 9 2V5.5C9 5.77614 9.22386 6 9.5 6Z" fill="#1C1C1C" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 13.5V10.5C6 10.2239 6.22386 10 6.5 10H7.5C7.5 10 8.12132 10 8.56066 10.4393C8.56066 10.4393 9 10.8787 9 11.5C9 11.5 9 12.1213 8.56066 12.5607C8.56066 12.5607 8.12132 13 7.5 13H7V13.5C7 13.7761 6.77614 14 6.5 14C6.22386 14 6 13.7761 6 13.5ZM7.5 12H7V11H7.5C7.5 11 7.70711 11 7.85355 11.1464C7.85355 11.1464 8 11.2929 8 11.5C8 11.5 8 11.7071 7.85355 11.8536C7.85355 11.8536 7.70711 12 7.5 12Z" fill="#1C1C1C" />
                                                    <path d="M3.14645 12.8536C3 12.7071 3 12.5 3 12.5C3 12.2239 2.77614 12 2.5 12C2.22386 12 2 12.2239 2 12.5C2 13.1213 2.43934 13.5607 2.43934 13.5607C2.87868 14 3.5 14 3.5 14C4.12132 14 4.56066 13.5607 4.56066 13.5607C5 13.1213 5 12.5 5 12.5V10.5C5 10.2239 4.77614 10 4.5 10C4.22386 10 4 10.2239 4 10.5V12.5C4 12.7071 3.85355 12.8536 3.85355 12.8536C3.70711 13 3.5 13 3.5 13C3.29289 13 3.14645 12.8536 3.14645 12.8536Z" fill="#1C1C1C" />
                                                    <path d="M11.3759 11C11.6273 10.9996 11.8303 11.1477 11.8303 11.1477C11.9159 11.2101 12.0191 11.2438 12.125 11.2438C12.1336 11.2438 12.1422 11.2435 12.1508 11.2431C12.3013 11.2353 12.4402 11.1601 12.5289 11.0384C12.5914 10.9529 12.625 10.8497 12.625 10.7438L12.625 10.7388C12.6247 10.7146 12.6227 10.6904 12.619 10.6665C12.5985 10.5355 12.5268 10.418 12.4197 10.3398C11.9524 9.99897 11.3741 10 11.3741 10C10.5832 10 10.0329 10.6005 10.0329 10.6005C9.5 11.182 9.5 12 9.5 12C9.5 12.818 10.0329 13.3995 10.0329 13.3995C10.5832 14 11.375 14 11.375 14C11.8545 13.9935 12.2657 13.7605 12.2657 13.7605C12.677 13.5274 12.9254 13.1252 12.9254 13.1252C12.9742 13.0463 13 12.9553 13 12.8625V12.125C13 11.8489 12.7761 11.625 12.5 11.625H11.75C11.4739 11.625 11.25 11.8489 11.25 12.125C11.25 12.4011 11.4739 12.625 11.75 12.625H12V12.7028C11.9047 12.8157 11.7727 12.8905 11.7727 12.8905C11.5845 12.9971 11.375 13 11.375 13C11.0232 13 10.7702 12.7239 10.7702 12.7239C10.5 12.4291 10.5 12 10.5 12C10.5 11.5709 10.7702 11.2761 10.7702 11.2761C11.0232 11 11.3759 11 11.3759 11Z" fill="#1C1C1C" />
                                                </svg>
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-sm">Dashboard-design.jpg</p>
                                                <p class="text-xs text-black/40 dark:text-white/40">2.3 MB / Due in 1 day Marcus Blake</p>
                                            </div>
                                            <button class="p-1 flex-none hidden group-hover:block" type="button">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.9784 7.22874L10.9786 7.22855C11.0723 7.13479 11.125 7.00761 11.125 6.875C11.125 6.74239 11.0723 6.61521 10.9786 6.52145C10.8848 6.42768 10.7576 6.375 10.625 6.375C10.4924 6.375 10.3652 6.42768 10.2714 6.52145L10.2713 6.52163L8 8.79289L5.72861 6.52151C5.63479 6.42768 5.50761 6.375 5.375 6.375C5.24239 6.375 5.11521 6.42768 5.02145 6.52145C4.92768 6.61521 4.875 6.74239 4.875 6.875C4.875 7.00761 4.92768 7.13479 5.02145 7.22855L7.64645 9.85355C7.74021 9.94732 7.86739 10 8 10C8.13261 10 8.25978 9.94732 8.35355 9.85355L10.9784 7.22874Z" fill="currentColor" />
                                                    <path d="M7.5 2.5V9.5C7.5 9.77614 7.72386 10 8 10C8.27614 10 8.5 9.77614 8.5 9.5V2.5C8.5 2.22386 8.27614 2 8 2C7.72386 2 7.5 2.22386 7.5 2.5Z" fill="currentColor" />
                                                    <path d="M3 13V9.5C3 9.22386 2.77614 9 2.5 9C2.22386 9 2 9.22386 2 9.5V13C2 13.4142 2.29289 13.7071 2.29289 13.7071C2.58579 14 3 14 3 14H13C13.4142 14 13.7071 13.7071 13.7071 13.7071C14 13.4142 14 13 14 13V9.5C14 9.22386 13.7761 9 13.5 9C13.2239 9 13 9.22386 13 9.5V13H3Z" fill="currentColor" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex items-start gap-2 cursor-pointer group">
                                            <div class="w-6 h-6 p-1 bg-lightpurple-100 flex-none rounded-lg">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.5 5.70711V8C12.5 8.27614 12.7239 8.5 13 8.5C13.2761 8.5 13.5 8.27614 13.5 8V5.5C13.5 5.36739 13.4473 5.24021 13.3536 5.14645L9.85355 1.64645C9.75979 1.55268 9.63261 1.5 9.5 1.5L3.5 1.5C3.08579 1.5 2.79289 1.79289 2.79289 1.79289C2.5 2.08579 2.5 2.5 2.5 2.5V8C2.5 8.27614 2.72386 8.5 3 8.5C3.27614 8.5 3.5 8.27614 3.5 8V2.5H9.29289L12.5 5.70711Z" fill="#1C1C1C" />
                                                    <path d="M9.5 6H13C13.2761 6 13.5 5.77614 13.5 5.5C13.5 5.22386 13.2761 5 13 5H10V2C10 1.72386 9.77614 1.5 9.5 1.5C9.22386 1.5 9 1.72386 9 2V5.5C9 5.77614 9.22386 6 9.5 6Z" fill="#1C1C1C" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 13.5V10.5C10 10.2239 10.2239 10 10.5 10H11.5C11.5 10 12.1213 10 12.5607 10.4393C12.5607 10.4393 13 10.8787 13 11.5C13 11.5 13 12.1213 12.5607 12.5607C12.5607 12.5607 12.1213 13 11.5 13H11V13.5C11 13.7761 10.7761 14 10.5 14C10.2239 14 10 13.7761 10 13.5ZM11.5 12H11V11H11.5C11.5 11 11.7071 11 11.8536 11.1464C11.8536 11.1464 12 11.2929 12 11.5C12 11.5 12 11.7071 11.8536 11.8536C11.8536 11.8536 11.7071 12 11.5 12Z" fill="#1C1C1C" />
                                                    <path d="M7.5 10.5V13.5C7.5 13.7761 7.72386 14 8 14C8.27614 14 8.5 13.7761 8.5 13.5V10.5C8.5 10.2239 8.27614 10 8 10C7.72386 10 7.5 10.2239 7.5 10.5Z" fill="#1C1C1C" />
                                                    <path d="M3.5 14H5.5C5.77614 14 6 13.7761 6 13.5C6 13.2239 5.77614 13 5.5 13H4.43426L5.91603 10.7774C6.0692 10.5476 6.00711 10.2372 5.77735 10.084C5.69522 10.0292 5.59871 10 5.5 10H3.5C3.22386 10 3 10.2239 3 10.5C3 10.7761 3.22386 11 3.5 11H4.56574L3.08397 13.2226C3.02922 13.3048 3 13.4013 3 13.5C3 13.7761 3.22386 14 3.5 14Z" fill="#1C1C1C" />
                                                </svg>
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-sm">Create FureStibe branding proposal.zip</p>
                                                <p class="text-xs text-black/40 dark:text-white/40">4.6 MB / Due in 1 day Terry Barry</p>
                                            </div>
                                            <button class="p-1 flex-none hidden group-hover:block" type="button">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.9784 7.22874L10.9786 7.22855C11.0723 7.13479 11.125 7.00761 11.125 6.875C11.125 6.74239 11.0723 6.61521 10.9786 6.52145C10.8848 6.42768 10.7576 6.375 10.625 6.375C10.4924 6.375 10.3652 6.42768 10.2714 6.52145L10.2713 6.52163L8 8.79289L5.72861 6.52151C5.63479 6.42768 5.50761 6.375 5.375 6.375C5.24239 6.375 5.11521 6.42768 5.02145 6.52145C4.92768 6.61521 4.875 6.74239 4.875 6.875C4.875 7.00761 4.92768 7.13479 5.02145 7.22855L7.64645 9.85355C7.74021 9.94732 7.86739 10 8 10C8.13261 10 8.25978 9.94732 8.35355 9.85355L10.9784 7.22874Z" fill="currentColor" />
                                                    <path d="M7.5 2.5V9.5C7.5 9.77614 7.72386 10 8 10C8.27614 10 8.5 9.77614 8.5 9.5V2.5C8.5 2.22386 8.27614 2 8 2C7.72386 2 7.5 2.22386 7.5 2.5Z" fill="currentColor" />
                                                    <path d="M3 13V9.5C3 9.22386 2.77614 9 2.5 9C2.22386 9 2 9.22386 2 9.5V13C2 13.4142 2.29289 13.7071 2.29289 13.7071C2.58579 14 3 14 3 14H13C13.4142 14 13.7071 13.7071 13.7071 13.7071C14 13.4142 14 13 14 13V9.5C14 9.22386 13.7761 9 13.5 9C13.2239 9 13 9.22386 13 9.5V13H3Z" fill="currentColor" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex items-start gap-2 cursor-pointer group">
                                            <div class="w-6 h-6 p-1 bg-lightpurple-100 flex-none rounded-lg">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.5 2V5.5H13L9.5 2Z" fill="#1C1C1C" />
                                                    <path d="M12.5 5.70711V8C12.5 8.27614 12.7239 8.5 13 8.5C13.2761 8.5 13.5 8.27614 13.5 8V5.5C13.5 5.36739 13.4473 5.24021 13.3536 5.14645L9.85355 1.64645C9.75979 1.55268 9.63261 1.5 9.5 1.5L3.5 1.5C3.08579 1.5 2.79289 1.79289 2.79289 1.79289C2.5 2.08579 2.5 2.5 2.5 2.5V8C2.5 8.27614 2.72386 8.5 3 8.5C3.27614 8.5 3.5 8.27614 3.5 8V2.5H9.29289L12.5 5.70711Z" fill="#1C1C1C" />
                                                    <path d="M9.5 6H13C13.2761 6 13.5 5.77614 13.5 5.5C13.5 5.22386 13.2761 5 13 5H10V2C10 1.72386 9.77614 1.5 9.5 1.5C9.22386 1.5 9 1.72386 9 2V5.5C9 5.77614 9.22386 6 9.5 6Z" fill="#1C1C1C" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 13.5V10.5C2.5 10.2239 2.72386 10 3 10H4C4 10 4.62132 10 5.06066 10.4393C5.06066 10.4393 5.5 10.8787 5.5 11.5C5.5 11.5 5.5 12.1213 5.06066 12.5607C5.06066 12.5607 4.62132 13 4 13H3.5V13.5C3.5 13.7761 3.27614 14 3 14C2.72386 14 2.5 13.7761 2.5 13.5ZM4 12H3.5V11H4C4 11 4.20711 11 4.35355 11.1464C4.35355 11.1464 4.5 11.2929 4.5 11.5C4.5 11.5 4.5 11.7071 4.35355 11.8536C4.35355 11.8536 4.20711 12 4 12Z" fill="#1C1C1C" />
                                                    <path d="M11.25 10.5V13.5C11.25 13.7761 11.4739 14 11.75 14C12.0261 14 12.25 13.7761 12.25 13.5V11H13.5C13.7761 11 14 10.7761 14 10.5C14 10.2239 13.7761 10 13.5 10H11.75C11.4739 10 11.25 10.2239 11.25 10.5Z" fill="#1C1C1C" />
                                                    <path d="M13.25 11.75H11.75C11.4739 11.75 11.25 11.9739 11.25 12.25C11.25 12.5261 11.4739 12.75 11.75 12.75H13.25C13.5261 12.75 13.75 12.5261 13.75 12.25C13.75 11.9739 13.5261 11.75 13.25 11.75Z" fill="#1C1C1C" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.125 14C6.84886 14 6.625 13.7761 6.625 13.5V10.5C6.625 10.2239 6.84886 10 7.125 10H8C8 10 8.82843 10 9.41421 10.5858C9.41421 10.5858 10 11.1716 10 12C10 12 10 12.8284 9.41421 13.4142C9.41421 13.4142 8.82843 14 8 14H7.125ZM8 13H7.625V11H8C8 11 8.41421 11 8.70711 11.2929C8.70711 11.2929 9 11.5858 9 12C9 12 9 12.4142 8.70711 12.7071C8.70711 12.7071 8.41421 13 8 13Z" fill="#1C1C1C" />
                                                </svg>
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-sm">Completed Project Stylings.pdf</p>
                                                <p class="text-xs text-black/40 dark:text-white/40">1.2 MB / Due in 3 days Roth Bloom</p>
                                            </div>
                                            <button class="p-1 flex-none hidden group-hover:block" type="button">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.9784 7.22874L10.9786 7.22855C11.0723 7.13479 11.125 7.00761 11.125 6.875C11.125 6.74239 11.0723 6.61521 10.9786 6.52145C10.8848 6.42768 10.7576 6.375 10.625 6.375C10.4924 6.375 10.3652 6.42768 10.2714 6.52145L10.2713 6.52163L8 8.79289L5.72861 6.52151C5.63479 6.42768 5.50761 6.375 5.375 6.375C5.24239 6.375 5.11521 6.42768 5.02145 6.52145C4.92768 6.61521 4.875 6.74239 4.875 6.875C4.875 7.00761 4.92768 7.13479 5.02145 7.22855L7.64645 9.85355C7.74021 9.94732 7.86739 10 8 10C8.13261 10 8.25978 9.94732 8.35355 9.85355L10.9784 7.22874Z" fill="currentColor" />
                                                    <path d="M7.5 2.5V9.5C7.5 9.77614 7.72386 10 8 10C8.27614 10 8.5 9.77614 8.5 9.5V2.5C8.5 2.22386 8.27614 2 8 2C7.72386 2 7.5 2.22386 7.5 2.5Z" fill="currentColor" />
                                                    <path d="M3 13V9.5C3 9.22386 2.77614 9 2.5 9C2.22386 9 2 9.22386 2 9.5V13C2 13.4142 2.29289 13.7071 2.29289 13.7071C2.58579 14 3 14 3 14H13C13.4142 14 13.7071 13.7071 13.7071 13.7071C14 13.4142 14 13 14 13V9.5C14 9.22386 13.7761 9 13.5 9C13.2239 9 13 9.22386 13 9.5V13H3Z" fill="currentColor" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex items-start gap-2 cursor-pointer group">
                                            <div class="w-6 h-6 p-1 bg-lightpurple-100 flex-none rounded-lg">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.5 14H9.25C9.52614 14 9.75 13.7761 9.75 13.5C9.75 13.2239 9.52614 13 9.25 13H8V10.5C8 10.2239 7.77614 10 7.5 10C7.22386 10 7 10.2239 7 10.5V13.5C7 13.7761 7.22386 14 7.5 14Z" fill="#1C1C1C" />
                                                    <path d="M5.09987 13.7998C5.17944 13.9059 5.29801 13.9762 5.42929 13.995C5.45271 13.9983 5.47634 14 5.5 14L5.50172 14C5.60931 13.9996 5.71392 13.9646 5.8 13.9C5.9259 13.8056 6 13.6574 6 13.5L5.99996 13.4934C5.99857 13.3875 5.96357 13.2848 5.9 13.2L3.65 10.2C3.57044 10.0939 3.45199 10.0238 3.32071 10.005C3.29729 10.0017 3.27366 10 3.25 10L3.24828 10C3.14069 10.0004 3.03608 10.0354 2.95 10.1C2.84391 10.1796 2.77378 10.298 2.75503 10.4293C2.75168 10.4527 2.75 10.4763 2.75 10.5L2.75 10.5017C2.75037 10.6093 2.78544 10.7139 2.85 10.8L5.09987 13.7998Z" fill="#1C1C1C" />
                                                    <path d="M2.85 13.2C2.78509 13.2865 2.75 13.3918 2.75 13.5L2.75002 13.5044C2.75021 13.5266 2.75189 13.5487 2.75503 13.5707C2.77378 13.702 2.84391 13.8204 2.95 13.9C3.03655 13.9649 3.14181 14 3.25 14L3.2544 14C3.27659 13.9998 3.29874 13.9981 3.32071 13.995C3.45199 13.9762 3.57044 13.9061 3.65 13.8L5.9 10.8C5.96491 10.7135 6 10.6082 6 10.5L5.99998 10.4956C5.99979 10.4734 5.99811 10.4513 5.99497 10.4293C5.97622 10.298 5.90609 10.1796 5.8 10.1C5.71345 10.0351 5.60819 10 5.5 10L5.4956 10C5.47341 10.0002 5.45126 10.0019 5.42929 10.005C5.29801 10.0238 5.17956 10.0939 5.1 10.2L2.85 13.2Z" fill="#1C1C1C" />
                                                    <path d="M11.9362 10.9375C12.2914 10.9384 12.5761 11.1508 12.5761 11.1508C12.6624 11.2152 12.7673 11.25 12.875 11.25C12.8818 11.25 12.8887 11.2499 12.8955 11.2496C13.046 11.2434 13.1857 11.1697 13.2758 11.0489C13.3402 10.9626 13.375 10.8577 13.375 10.75L13.375 10.7443C13.3747 10.7221 13.373 10.6999 13.3698 10.678C13.3507 10.5468 13.2802 10.4285 13.1739 10.3492C12.6244 9.93931 11.9388 9.9375 11.9388 9.9375C11.3281 9.9375 10.9324 10.2766 10.9324 10.2766C10.5 10.6473 10.5 11.25 10.5 11.25C10.5 11.8454 11.0522 12.1663 11.0522 12.1663C11.2928 12.3062 11.8476 12.4534 11.8476 12.4534C12.5 12.6266 12.5 12.75 12.5 12.75C12.5 12.912 12.4102 12.9695 12.4102 12.9695C12.2648 13.0625 11.9375 13.0625 11.9375 13.0625C11.5838 13.0616 11.2993 12.8494 11.2993 12.8494C11.2129 12.785 11.1077 12.75 11 12.75C10.9932 12.75 10.9863 12.7501 10.9795 12.7504C10.829 12.7566 10.6893 12.8303 10.5992 12.9511C10.5348 13.0374 10.5 13.1423 10.5 13.25L10.5 13.2557C10.5003 13.2779 10.502 13.3001 10.5052 13.322C10.5243 13.4532 10.5948 13.5715 10.7011 13.6508C11.2505 14.0604 11.9375 14.0625 11.9375 14.0625C12.5574 14.0625 12.9492 13.8118 12.9492 13.8118C13.5 13.4593 13.5 12.75 13.5 12.75C13.5 12.1272 12.9341 11.7904 12.9341 11.7904C12.6815 11.6401 12.104 11.4869 12.104 11.4869C11.5 11.3266 11.5 11.25 11.5 11.25C11.5 10.9375 11.9362 10.9375 11.9362 10.9375Z" fill="#1C1C1C" />
                                                    <path d="M12.5 5.70711V8C12.5 8.27614 12.7239 8.5 13 8.5C13.2761 8.5 13.5 8.27614 13.5 8V5.5C13.5 5.36739 13.4473 5.24021 13.3536 5.14645L9.85355 1.64645C9.75979 1.55268 9.63261 1.5 9.5 1.5L3.5 1.5C3.08579 1.5 2.79289 1.79289 2.79289 1.79289C2.5 2.08579 2.5 2.5 2.5 2.5V8C2.5 8.27614 2.72386 8.5 3 8.5C3.27614 8.5 3.5 8.27614 3.5 8V2.5H9.29289L12.5 5.70711Z" fill="#1C1C1C" />
                                                    <path d="M9.5 6H13C13.2761 6 13.5 5.77614 13.5 5.5C13.5 5.22386 13.2761 5 13 5H10V2C10 1.72386 9.77614 1.5 9.5 1.5C9.22386 1.5 9 1.72386 9 2V5.5C9 5.77614 9.22386 6 9.5 6Z" fill="#1C1C1C" />
                                                </svg>
                                            </div>
                                            <div class="flex-1">
                                                <p class="text-sm">Create Project Wireframes.xls</p>
                                                <p class="text-xs text-black/40 dark:text-white/40">2.8 MB / Due in 3 days Natali Craig</p>
                                            </div>
                                            <button class="p-1 flex-none hidden group-hover:block" type="button">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.9784 7.22874L10.9786 7.22855C11.0723 7.13479 11.125 7.00761 11.125 6.875C11.125 6.74239 11.0723 6.61521 10.9786 6.52145C10.8848 6.42768 10.7576 6.375 10.625 6.375C10.4924 6.375 10.3652 6.42768 10.2714 6.52145L10.2713 6.52163L8 8.79289L5.72861 6.52151C5.63479 6.42768 5.50761 6.375 5.375 6.375C5.24239 6.375 5.11521 6.42768 5.02145 6.52145C4.92768 6.61521 4.875 6.74239 4.875 6.875C4.875 7.00761 4.92768 7.13479 5.02145 7.22855L7.64645 9.85355C7.74021 9.94732 7.86739 10 8 10C8.13261 10 8.25978 9.94732 8.35355 9.85355L10.9784 7.22874Z" fill="currentColor" />
                                                    <path d="M7.5 2.5V9.5C7.5 9.77614 7.72386 10 8 10C8.27614 10 8.5 9.77614 8.5 9.5V2.5C8.5 2.22386 8.27614 2 8 2C7.72386 2 7.5 2.22386 7.5 2.5Z" fill="currentColor" />
                                                    <path d="M3 13V9.5C3 9.22386 2.77614 9 2.5 9C2.22386 9 2 9.22386 2 9.5V13C2 13.4142 2.29289 13.7071 2.29289 13.7071C2.58579 14 3 14 3 14H13C13.4142 14 13.7071 13.7071 13.7071 13.7071C14 13.4142 14 13 14 13V9.5C14 9.22386 13.7761 9 13.5 9C13.2239 9 13 9.22386 13 9.5V13H3Z" fill="currentColor" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mt-2 flex justify-center rounded-lg bg-lightpurple/50 dark:bg-white/5 px-6 pt-5 pb-6">
                                        <div class="space-y-1 text-center">
                                            <div class="flex text-sm text-gray-600">
                                                <p class="pr-4 pt-1 text-black/40 dark:text-white/40">Drop files here or upload files</p>
                                                <label for="file-upload" class="relative cursor-pointer rounded-lg bg-black/5 dark:bg-white/5 py-1.5 px-2 text-xs text-black dark:text-white focus-within:outline-none focus-within:ring-0 focus-within:ring-offset-0">
                                                    <span>Upload a file</span>
                                                    <input id="file-upload" name="file-upload" type="file" class="sr-only" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 bg-lightwhite dark:bg-white/5 rounded-2xl">
                                <div class="flex items-center justify-between gap-4">
                                    <h2 class="text-sm font-semibold mb-4">Project Spendings</h2>
                                </div>
                                <div class="grid grid-cols-1">
                                    <div class="table-responsive">
                                        <table class="table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Manager</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="whitespace-nowrap min-w-[150px]">
                                                        <div class="flex items-center gap-2">
                                                            <img class="w-6 h-6 flex-none rounded-full overflow-hidden object-cover ring-2 ring-white" src="assets/images/avatar-11.png" alt="" />
                                                            <p class="flex-1">Koray Okumus</p>
                                                        </div>
                                                    </td>
                                                    <td class="whitespace-nowrap">Jun 24, 2022</td>
                                                    <td>$942.00</td>
                                                    <td class="whitespace-nowrap">
                                                        <div class="flex items-center text-xs text-[#8A8CD9]">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor" />
                                                            </svg>
                                                            <p>In Progress</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="whitespace-nowrap min-w-[150px]">
                                                        <div class="flex items-center gap-2">
                                                            <img class="w-6 h-6 flex-none rounded-full overflow-hidden object-cover ring-2 ring-white" src="assets/images/avatar-6.png" alt="" />
                                                            <p class="flex-1">Natali Craig</p>
                                                        </div>
                                                    </td>
                                                    <td class="whitespace-nowrap">Mar 10, 2022</td>
                                                    <td>$881.00</td>
                                                    <td class="whitespace-nowrap">
                                                        <div class="flex items-center text-xs text-black/40 dark:text-white/40">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor" />
                                                            </svg>
                                                            <p>Rejected</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="whitespace-nowrap min-w-[150px]">
                                                        <div class="flex items-center gap-2">
                                                            <img class="w-6 h-6 flex-none rounded-full overflow-hidden object-cover ring-2 ring-white" src="assets/images/avatar-23.png" alt="" />
                                                            <p class="flex-1">Olivia Rhye</p>
                                                        </div>
                                                    </td>
                                                    <td class="whitespace-nowrap">Nov 10, 2022</td>
                                                    <td>$409.00</td>
                                                    <td class="whitespace-nowrap">
                                                        <div class="flex items-center text-xs text-[#4AA785]">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor" />
                                                            </svg>
                                                            <p>Competed</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="whitespace-nowrap min-w-[150px]">
                                                        <div class="flex items-center gap-2">
                                                            <img class="w-6 h-6 flex-none rounded-full overflow-hidden object-cover ring-2 ring-white" src="assets/images/avatar-8.png" alt="" />
                                                            <p class="flex-1">Orlando Diggs</p>
                                                        </div>
                                                    </td>
                                                    <td class="whitespace-nowrap">Dec 20, 2022</td>
                                                    <td>$953.00</td>
                                                    <td class="whitespace-nowrap">
                                                        <div class="flex items-center text-xs text-[#FFC555]">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor" />
                                                            </svg>
                                                            <p>Approved</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="whitespace-nowrap min-w-[150px]">
                                                        <div class="flex items-center gap-2">
                                                            <img class="w-6 h-6 flex-none rounded-full overflow-hidden object-cover ring-2 ring-white" src="assets/images/avatar-10.png" alt="" />
                                                            <p class="flex-1">Kate Morrison</p>
                                                        </div>
                                                    </td>
                                                    <td class="whitespace-nowrap">Jul 25, 2022</td>
                                                    <td>$907.00</td>
                                                    <td class="whitespace-nowrap">
                                                        <div class="flex items-center text-xs text-[#59A8D4]">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor" />
                                                            </svg>
                                                            <p>Pending</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                                              
                    </div>
                </div>
            </div>
@include('students.Components.dashboardFooter') 
                