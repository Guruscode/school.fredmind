     <!-- Start Topbar -->
     <div class="border-b border-black/10 dark:border-white/10 py-[22px] px-7 flex items-center justify-between">
      <div class="flex items-center gap-2">
          <button type="button" class="text-black dark:text-white" @click="$store.app.toggleSidebar()">
              <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.125 20.25C6.95921 20.25 6.80029 20.1842 6.68303 20.067C6.56584 19.9497 6.5 19.7908 6.5 19.625V8.375C6.5 8.20921 6.56584 8.05029 6.68303 7.93303C6.80029 7.81584 6.95921 7.75 7.125 7.75H10.875V20.25H7.125Z" fill="currentColor" fill-opacity="0.1" />
                  <path d="M10.25 7.75V20.25C10.25 20.5952 10.5298 20.875 10.875 20.875C11.2202 20.875 11.5 20.5952 11.5 20.25V7.75C11.5 7.40482 11.2202 7.125 10.875 7.125C10.5298 7.125 10.25 7.40482 10.25 7.75Z" fill="currentColor" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M5.875 8.375C5.875 8.375 5.875 7.85723 6.24112 7.49112C6.24112 7.49112 6.60723 7.125 7.125 7.125H20.875C20.875 7.125 21.3928 7.125 21.7589 7.49112C21.7589 7.49112 22.125 7.85723 22.125 8.375V19.625C22.125 19.625 22.125 20.1428 21.7589 20.5089C21.7589 20.5089 21.3928 20.875 20.875 20.875H7.125C7.125 20.875 6.60723 20.875 6.24112 20.5089C6.24112 20.5089 5.875 20.1428 5.875 19.625V8.375ZM7.125 8.375V19.625H20.875V8.375H7.125Z" fill="currentColor" />
                  <path d="M6.5 10.875H8.375C8.72018 10.875 9 10.5952 9 10.25C9 9.90482 8.72018 9.625 8.375 9.625H6.5C6.15482 9.625 5.875 9.90482 5.875 10.25C5.875 10.5952 6.15482 10.875 6.5 10.875Z" fill="currentColor" />
                  <path d="M6.5 13.375H8.375C8.72018 13.375 9 13.0952 9 12.75C9 12.4048 8.72018 12.125 8.375 12.125H6.5C6.15482 12.125 5.875 12.4048 5.875 12.75C5.875 13.0952 6.15482 13.375 6.5 13.375Z" fill="currentColor" />
                  <path d="M6.5 15.875H8.375C8.72018 15.875 9 15.5952 9 15.25C9 14.9048 8.72018 14.625 8.375 14.625H6.5C6.15482 14.625 5.875 14.9048 5.875 15.25C5.875 15.5952 6.15482 15.875 6.5 15.875Z" fill="currentColor" />
              </svg>
          </button>
      
          <div class="hidden sm:block">
              <nav aria-label="breadcrumb" class="w-full py-1 px-2">
                  <ol class="flex space-x-3">
                      <li class="flex items-center">
                          <a href="javaScript:;" class="flex items-center text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white">Dashboard</a>
                      </li>
                      <li class="flex items-center space-x-1">
                          <span class="text-black/40 dark:text-white/40">/</span>
                          <a href="javaScript:;" class="flex items-center px-3 text-black dark:text-white">Home</a>
                      </li>
                  </ol>
              </nav>
          </div>
      </div>
      <div class="flex items-center gap-5">
         
          <div class="flex items-center gap-2">
              <div>
                  <a href="javascript:;" class="text-black dark:text-white" x-cloak x-show="$store.app.mode === 'light'" @click="$store.app.toggleMode('dark')">
                      <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M27.0876 19.0752C25.1243 19.6257 23.0498 19.6438 21.0771 19.1274C19.1045 18.6111 17.3049 17.5789 15.863 16.1372C14.4214 14.6953 13.3892 12.8958 12.8728 10.9231C12.3564 8.95044 12.3745 6.87598 12.925 4.9126C10.9895 5.45142 9.22876 6.48779 7.81836 7.91895C6.40796 9.34985 5.39697 11.1255 4.88647 13.0688C4.37573 15.012 4.38306 17.0552 4.90796 18.9946C5.43262 20.9343 6.4563 22.7024 7.87695 24.1233C9.29785 25.5439 11.0659 26.5676 13.0056 27.0923C14.9451 27.6172 16.9883 27.6245 18.9314 27.1138C20.8748 26.6033 22.6504 25.5923 24.0813 24.1819C25.5125 22.7715 26.5488 21.0107 27.0876 19.0752Z" fill="currentColor" fill-opacity="0.1" />
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M28.051 19.3438L28.0506 19.3454C28.0506 19.3454 27.1566 22.5551 24.7835 24.8941C24.7835 24.8941 22.4095 27.2339 19.1858 28.081C19.1858 28.081 15.962 28.9282 12.7445 28.0577C12.7445 28.0577 9.52702 27.1872 7.1701 24.8303C7.1701 24.8303 4.81318 22.4734 3.94271 19.2559C3.94271 19.2559 3.07225 16.0383 3.91937 12.8146C3.91937 12.8146 4.76649 9.59087 7.10626 7.21693C7.10626 7.21693 9.44603 4.84299 12.6572 3.94922C12.9127 3.8781 13.1859 3.9114 13.4169 4.04178C13.6479 4.17217 13.8176 4.38895 13.8887 4.64446C13.9377 4.82052 13.9375 5.00664 13.8882 5.1826C13.8882 5.1826 13.1206 7.91975 13.8404 10.6698C13.8404 10.6698 14.5603 13.4199 16.5704 15.43C16.5704 15.43 18.5805 17.4401 21.3306 18.16C21.3306 18.16 24.0806 18.8798 26.8178 18.1122C26.9882 18.0644 27.1683 18.0628 27.3396 18.1073L27.3559 18.1117C27.6928 18.2055 27.9562 18.4684 28.0507 18.8051C28.0984 18.9755 28.1001 19.1556 28.0556 19.3269L28.051 19.3438ZM23.3795 23.4697C23.3795 23.4697 24.7551 22.114 25.539 20.4099C25.539 20.4099 23.1856 20.7129 20.8241 20.0948C20.8241 20.0948 17.5496 19.2377 15.1562 16.8442C15.1562 16.8442 12.7627 14.4508 11.9056 11.1763C11.9056 11.1763 11.2875 8.81482 11.5905 6.46138C11.5905 6.46138 9.88644 7.24531 8.53069 8.62085C8.53069 8.62085 6.56528 10.615 5.8537 13.3229C5.8537 13.3229 5.14212 16.0308 5.87331 18.7336C5.87331 18.7336 6.6045 21.4363 8.58431 23.4161C8.58431 23.4161 10.5641 25.3959 13.2668 26.1271C13.2668 26.1271 15.9695 26.8583 18.6775 26.1467C18.6775 26.1467 21.3854 25.4351 23.3795 23.4697Z" fill="currentColor" />
                      </svg>
                  </a>
                  <a href="javascript:;" class="text-black dark:text-white" x-cloak x-show="$store.app.mode === 'dark'" @click="$store.app.toggleMode('light')">
                      <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M23.5 16C23.5 20.1421 20.1421 23.5 16 23.5C11.8579 23.5 8.5 20.1421 8.5 16C8.5 11.8579 11.8579 8.5 16 8.5C20.1421 8.5 23.5 11.8579 23.5 16Z" fill="currentColor" fill-opacity="0.1" />
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M16 7.5C16 7.5 17.7287 7.5 19.3089 8.16838C19.3089 8.16838 20.8345 8.81364 22.0104 9.98959C22.0104 9.98959 23.1864 11.1655 23.8316 12.6911C23.8316 12.6911 24.5 14.2713 24.5 16C24.5 16 24.5 17.7287 23.8316 19.3089C23.8316 19.3089 23.1864 20.8345 22.0104 22.0104C22.0104 22.0104 20.8345 23.1864 19.3089 23.8316C19.3089 23.8316 17.7287 24.5 16 24.5C16 24.5 14.2713 24.5 12.6911 23.8316C12.6911 23.8316 11.1655 23.1864 9.98959 22.0104C9.98959 22.0104 8.81364 20.8345 8.16838 19.3089C8.16838 19.3089 7.5 17.7287 7.5 16C7.5 16 7.5 14.2713 8.16838 12.6911C8.16838 12.6911 8.81364 11.1655 9.98959 9.98959C9.98959 9.98959 11.1655 8.81364 12.6911 8.16838C12.6911 8.16838 14.2713 7.5 16 7.5ZM16 9.5C16 9.5 13.3076 9.5 11.4038 11.4038C11.4038 11.4038 9.5 13.3076 9.5 16C9.5 16 9.5 18.6924 11.4038 20.5962C11.4038 20.5962 13.3076 22.5 16 22.5C16 22.5 18.6924 22.5 20.5962 20.5962C20.5962 20.5962 22.5 18.6924 22.5 16C22.5 16 22.5 13.3076 20.5962 11.4038C20.5962 11.4038 18.6924 9.5 16 9.5Z" fill="currentColor" />
                          <path d="M17 4.5V2C17 1.44772 16.5523 1 16 1C15.4477 1 15 1.44772 15 2V4.5C15 5.05228 15.4477 5.5 16 5.5C16.5523 5.5 17 5.05228 17 4.5Z" fill="currentColor" />
                          <path d="M6.80672 5.39299C6.61918 5.20545 6.36483 5.1001 6.09961 5.1001C5.83439 5.1001 5.58004 5.20545 5.3925 5.39299C5.20497 5.58053 5.09961 5.83488 5.09961 6.1001C5.09961 6.36531 5.20497 6.61967 5.3925 6.8072L7.155 8.5697C7.34254 8.75724 7.59689 8.8626 7.86211 8.8626C8.12733 8.8626 8.38168 8.75724 8.56922 8.5697C8.75675 8.38217 8.86211 8.12781 8.86211 7.8626C8.86211 7.59738 8.75675 7.34303 8.56922 7.15549L6.80672 5.39299Z" fill="currentColor" />
                          <path d="M4.5 15H2C1.44772 15 1 15.4477 1 16C1 16.5523 1.44772 17 2 17H4.5C5.05228 17 5.5 16.5523 5.5 16C5.5 15.4477 5.05228 15 4.5 15Z" fill="currentColor" />
                          <path d="M5.3925 25.1928C5.20497 25.3804 5.09961 25.6347 5.09961 25.9C5.09961 25.9172 5.10006 25.9345 5.10095 25.9517C5.11375 26.1987 5.21762 26.4322 5.3925 26.6071C5.58004 26.7946 5.83439 26.9 6.09961 26.9C6.36483 26.9 6.61918 26.7946 6.80672 26.6071L8.56922 24.8446C8.75675 24.657 8.86211 24.4027 8.86211 24.1375C8.86211 23.8722 8.75675 23.6179 8.56922 23.4303C8.38168 23.2428 8.12733 23.1375 7.86211 23.1375C7.84485 23.1375 7.8276 23.1379 7.81037 23.1388C7.56338 23.1516 7.32989 23.2555 7.155 23.4303L5.3925 25.1928Z" fill="currentColor" />
                          <path d="M15 27.5V30C15 30.5523 15.4477 31 16 31C16.5523 31 17 30.5523 17 30V27.5C17 26.9477 16.5523 26.5 16 26.5C15.4477 26.5 15 26.9477 15 27.5Z" fill="currentColor" />
                          <path d="M23.4307 24.8447L25.1931 26.6071C25.3806 26.7946 25.635 26.9 25.9002 26.9C26.1654 26.9 26.4198 26.7946 26.6073 26.6071C26.7948 26.4195 26.9002 26.1652 26.9002 25.9C26.9002 25.6347 26.7948 25.3804 26.6073 25.1928L24.8449 23.4305C24.6573 23.2428 24.4029 23.1375 24.1377 23.1375C23.8725 23.1375 23.6181 23.2428 23.4306 23.4303C23.2431 23.6179 23.1377 23.8722 23.1377 24.1375C23.1377 24.4027 23.2431 24.657 23.4307 24.8447Z" fill="currentColor" />
                          <path d="M27.5 17H30C30.5523 17 31 16.5523 31 16C31 15.4477 30.5523 15 30 15H27.5C26.9477 15 26.5 15.4477 26.5 16C26.5 16.5523 26.9477 17 27.5 17Z" fill="currentColor" />
                          <path d="M26.6073 6.8072C26.7948 6.61967 26.9002 6.36531 26.9002 6.1001C26.9002 5.83488 26.7948 5.58053 26.6073 5.39299C26.4198 5.20545 26.1654 5.1001 25.9002 5.1001C25.635 5.1001 25.3806 5.20545 25.1931 5.39299L23.4307 7.15537C23.2431 7.34303 23.1377 7.59738 23.1377 7.8626C23.1377 8.12781 23.2431 8.38217 23.4306 8.56971C23.6181 8.75724 23.8725 8.8626 24.1377 8.8626C24.4029 8.8626 24.6573 8.75724 24.8448 8.5697L26.6073 6.8072Z" fill="currentColor" />
                      </svg>
                  </a>
              </div>
              <button type="button" class="relative w-7 h-7 p-1 text-black dark:text-white" @click="$store.app.rightSidebar()">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.39087 8.12508C4.3898 7.38415 4.53537 6.65028 4.81918 5.96584C5.103 5.28137 5.51941 4.65984 6.04431 4.137C6.56937 3.61416 7.19269 3.20034 7.87827 2.91939C8.564 2.63847 9.2984 2.49596 10.0394 2.50008C13.1331 2.52354 15.6096 5.09384 15.6096 8.19538V8.75008C15.6096 11.547 16.1955 13.172 16.7111 14.0626C16.7659 14.1574 16.7949 14.265 16.7949 14.3745C16.795 14.4841 16.7664 14.5917 16.7117 14.6866C16.6571 14.7816 16.5785 14.8605 16.4839 14.9155C16.3892 14.9706 16.2816 14.9997 16.1722 15.0001H3.82843C3.71887 14.9997 3.6113 14.9706 3.51669 14.9155C3.42194 14.8605 3.34335 14.7816 3.28873 14.6866C3.2341 14.5917 3.20541 14.4841 3.20557 14.3745C3.20572 14.265 3.23456 14.1574 3.28934 14.0626C3.80493 13.172 4.39087 11.547 4.39087 8.75008V8.12508Z" fill="currentColor" fill-opacity="0.1" />
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.76587 8.75007V8.12507C3.76587 8.12507 3.76411 6.87864 4.24182 5.72645C4.24182 5.72645 4.71953 4.57425 5.60334 3.69411C5.60334 3.69411 6.48715 2.81397 7.64132 2.34105C7.64132 2.34105 8.7955 1.86814 10.0428 1.87508C10.0428 1.87508 11.311 1.88468 12.4659 2.39135C12.4659 2.39135 13.5771 2.87881 14.4324 3.75745C14.4324 3.75745 15.2845 4.63266 15.7518 5.76121C15.7518 5.76121 16.2346 6.92735 16.2346 8.19538V8.75007C16.2346 8.75007 16.2346 11.992 17.2521 13.7494C17.2521 13.7494 17.4196 14.0396 17.4199 14.374C17.4199 14.374 17.4202 14.7083 17.2535 14.9982C17.2535 14.9982 17.0869 15.288 16.7978 15.4559C16.7978 15.4559 16.5087 15.6239 16.1743 15.6251L3.82837 15.6251C3.82837 15.6251 3.49182 15.6239 3.20271 15.4559C3.20271 15.4559 2.9136 15.288 2.74693 14.9982C2.74693 14.9982 2.58027 14.7083 2.58057 14.374C2.58057 14.374 2.58086 14.0396 2.74804 13.7501C2.74804 13.7501 3.76587 11.992 3.76587 8.75007ZM5.01587 8.75007C5.01587 8.75007 5.01587 12.3277 3.83057 14.3751L16.1699 14.3751C16.1699 14.3751 14.9846 12.3272 14.9846 8.75007V8.19538C14.9846 8.19538 14.9846 6.11659 13.5368 4.6294C13.5368 4.6294 12.0874 3.1406 10.0358 3.12506C10.0358 3.12506 9.03831 3.11951 8.11526 3.49772C8.11526 3.49772 7.19221 3.87593 6.48538 4.57982C6.48538 4.57982 5.77856 5.28372 5.39651 6.20519C5.39651 6.20519 5.01446 7.12666 5.01587 8.12507V8.75007Z" fill="currentColor" />
                      <path d="M13.125 15.625V15C13.125 14.6548 12.8452 14.375 12.5 14.375C12.1548 14.375 11.875 14.6548 11.875 15V15.625C11.875 16.4016 11.3258 16.9508 11.3258 16.9508C10.7766 17.5 10 17.5 10 17.5C9.22335 17.5 8.67417 16.9508 8.67417 16.9508C8.125 16.4016 8.125 15.625 8.125 15.625V15C8.125 14.6548 7.84518 14.375 7.5 14.375C7.15482 14.375 6.875 14.6548 6.875 15L6.875 15.625C6.875 16.9194 7.79029 17.8347 7.79029 17.8347C8.70558 18.75 10 18.75 10 18.75C11.2944 18.75 12.2097 17.8347 12.2097 17.8347C13.125 16.9194 13.125 15.625 13.125 15.625Z" fill="currentColor" />
                  </svg>
                  <span class="flex absolute w-3 h-3 right-px top-[5px]">
                      <span class="animate-ping absolute -left-[3px] -top-[3px] inline-flex h-full w-full rounded-full bg-black/50 dark:bg-white/50 opacity-75"></span>
                      <span class="relative inline-flex rounded-full w-[6px] h-[6px] bg-black dark:bg-white"></span>
                  </span>
              </button>
              <div class="profile" x-data="dropdown" @click.outside="open = false">
                  <button type="button" class="flex items-center gap-1.5 xl:gap-0" @click="toggle()">
                      <img class="h-7 w-7 rounded-full xl:mr-2" src="{{asset('admin/img/byewind-avatar.png')}}" alt="Header Avatar" />
                      <span class="fw-medium hidden xl:block">Stevens L.</span>
                      <svg class="w-4 h-4" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M6.70711 11.2929C6.51957 11.1054 6.26522 11 6 11C5.73478 11 5.48043 11.1054 5.29289 11.2929C5.10536 11.4804 5 11.7348 5 12C5 12.2652 5.10536 12.5196 5.29289 12.7071L15.2929 22.7071C15.6834 23.0976 16.3166 23.0976 16.7071 22.7071L26.7071 12.7071C26.8946 12.5196 27 12.2652 27 12C27 11.7348 26.8946 11.4804 26.7071 11.2929C26.5196 11.1054 26.2652 11 26 11C25.7348 11 25.4804 11.1054 25.2929 11.2929L16 20.5858L6.70711 11.2929Z" fill="currentColor" />
                      </svg>
                  </button>
                  <ul x-cloak x-show="open" x-transition x-transition.duration.300ms>
                      <li>
                          <div class="flex items-center !p-1">
                              <div class="flex-none">
                                  <img class="h-7 w-7 rounded-full object-cover" src="{{asset('admin/img/byewind-avatar.png')}}" alt="image" />
                              </div>
                              <div class="pl-2">
                                  <h4 class="text-sm text-black dark:text-white font-medium leading-none">Stevens</h4>
                                  <a class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white text-xs" href="javaScript:;">Email@gmail.com</a>
                              </div>
                          </div>
                      </li>
                      <li class="h-px bg-black/5 block my-1"></li>
                      <li>
                          <a href="javaScript:;" class="flex items-center">
                              <svg class="mr-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5302 2.01101C9.32209 1.5 8 1.5 8 1.5C6.67791 1.5 5.46975 2.01101 5.46975 2.01101C4.30319 2.50442 3.40381 3.40381 3.40381 3.40381C2.50442 4.30319 2.01101 5.46975 2.01101 5.46975C1.5 6.67791 1.5 8 1.5 8C1.5 9.32209 2.01101 10.5302 2.01101 10.5302C2.50442 11.6968 3.40381 12.5962 3.40381 12.5962C3.47292 12.6653 3.54362 12.732 3.61524 12.7963C3.64144 12.8255 3.6712 12.8518 3.70408 12.8744C4.54254 13.5968 5.46975 13.989 5.46975 13.989C6.67791 14.5 8 14.5 8 14.5C9.32208 14.5 10.5302 13.989 10.5302 13.989C11.2699 13.6762 11.9021 13.2001 12.2658 12.8936C12.3187 12.8625 12.3646 12.8225 12.402 12.776C12.527 12.6654 12.5962 12.5962 12.5962 12.5962C13.4956 11.6968 13.989 10.5302 13.989 10.5302C14.5 9.32208 14.5 8 14.5 8C14.5 6.67791 13.989 5.46975 13.989 5.46975C13.4956 4.30319 12.5962 3.40381 12.5962 3.40381C11.6968 2.50442 10.5302 2.01101 10.5302 2.01101ZM5.85931 13.068C5.37768 12.8643 4.94974 12.5786 4.63779 12.3395C5.16504 11.5463 5.90752 11.0906 5.90752 11.0906C6.87031 10.4996 8 10.5 8 10.5C9.12969 10.5 10.0925 11.0906 10.0925 11.0906C10.6986 11.4626 11.1259 11.9997 11.3592 12.3466C10.7364 12.816 10.1407 13.068 10.1407 13.068C9.1193 13.5 8 13.5 8 13.5C6.8807 13.5 5.85931 13.068 5.85931 13.068ZM5.3844 10.2383C5.3844 10.2383 5.68577 10.0534 6.16384 9.8687C6.06604 9.79515 5.97038 9.71302 5.87868 9.62132C5.87868 9.62132 5 8.74264 5 7.5C5 7.5 5 6.25736 5.87868 5.37868C5.87868 5.37868 6.75736 4.5 8 4.5C8 4.5 9.24264 4.5 10.1213 5.37868C10.1213 5.37868 11 6.25736 11 7.5C11 7.5 11 8.74264 10.1213 9.62132C10.1213 9.62132 10.0184 9.72419 9.83332 9.85954C10.0931 9.957 10.3591 10.0809 10.6156 10.2383C10.6156 10.2383 11.4536 10.7527 12.1025 11.6545C12.3591 11.3557 12.7899 10.7982 13.068 10.1407C13.068 10.1407 13.5 9.1193 13.5 8C13.5 8 13.5 6.8807 13.068 5.85931C13.068 5.85931 12.6506 4.87238 11.8891 4.11091C11.8891 4.11091 11.1276 3.34945 10.1407 2.93201C10.1407 2.93201 9.1193 2.5 8 2.5C8 2.5 6.8807 2.5 5.85931 2.93201C5.85931 2.93201 4.87238 3.34945 4.11091 4.11091C4.11091 4.11091 3.34945 4.87238 2.93201 5.85931C2.93201 5.85931 2.5 6.8807 2.5 8C2.5 8 2.5 9.1193 2.93201 10.1407C2.93201 10.1407 3.27305 10.947 3.90091 11.6643C4.20734 11.236 4.70631 10.6545 5.3844 10.2383ZM9.41421 8.91421C8.82843 9.5 8 9.5 8 9.5C7.17157 9.5 6.58579 8.91421 6.58579 8.91421C6 8.32843 6 7.5 6 7.5C6 6.67157 6.58579 6.08579 6.58579 6.08579C7.17157 5.5 8 5.5 8 5.5C8.82843 5.5 9.41421 6.08579 9.41421 6.08579C10 6.67157 10 7.5 10 7.5C10 8.32843 9.41421 8.91421 9.41421 8.91421Z" fill="currentcolor" />
                              </svg>
                              Profile
                          </a>
                      </li>
                      <li>
                          <a href="javaScript:;" class="flex items-center">
                              <svg class="mr-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.49988C8 4.49988 9.44975 4.49988 10.4749 5.525C10.4749 5.525 11.5 6.55013 11.5 7.99988C11.5 7.99988 11.5 9.44963 10.4749 10.4748C10.4749 10.4748 9.44975 11.4999 8 11.4999C8 11.4999 6.55025 11.4999 5.52513 10.4748C5.52513 10.4748 4.5 9.44963 4.5 7.99988C4.5 7.99988 4.5 6.55013 5.52513 5.525C5.52513 5.525 6.55025 4.49988 8 4.49988ZM8 5.49988C8 5.49988 6.96447 5.49988 6.23223 6.23211C6.23223 6.23211 5.5 6.96434 5.5 7.99988C5.5 7.99988 5.5 9.03541 6.23223 9.76764C6.23223 9.76764 6.96447 10.4999 8 10.4999C8 10.4999 9.03553 10.4999 9.76777 9.76764C9.76777 9.76764 10.5 9.03541 10.5 7.99988C10.5 7.99988 10.5 6.96434 9.76777 6.23211C9.76777 6.23211 9.03553 5.49988 8 5.49988Z" fill="currentcolor" />
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8687 3.19582L12.8401 4.89469C12.8401 4.89469 12.9883 5.1222 13.1114 5.36418L14.593 6.1879C14.7177 6.25727 14.8069 6.37664 14.838 6.51595C14.838 6.51595 15.1689 7.99805 14.8447 9.48164C14.814 9.62214 14.7243 9.74262 14.5985 9.8123L13.1112 10.636C13.1112 10.636 12.9882 10.8778 12.8401 11.1051L12.8687 12.804C12.8711 12.9476 12.8117 13.0853 12.7055 13.182C12.7055 13.182 11.5845 14.2035 10.1411 14.6695C10.0038 14.7138 9.85401 14.6966 9.73027 14.6224L8.26872 13.7455C8.26872 13.7455 7.99985 13.7575 7.73098 13.7455L6.27551 14.6164C6.1528 14.6899 6.0045 14.7073 5.86813 14.6642C5.86813 14.6642 4.41829 14.2061 3.29448 13.182C3.18834 13.0852 3.12891 12.9475 3.13133 12.804L3.15997 11.1089C3.15997 11.1089 3.01267 10.8791 2.88888 10.6358L1.40705 9.8119C1.28229 9.74254 1.19313 9.62317 1.16203 9.48386C1.16203 9.48386 0.831119 8.00176 1.15529 6.51817C1.18599 6.37767 1.2757 6.25719 1.40151 6.18751L2.88881 5.36377C2.88881 5.36377 3.01187 5.122 3.15993 4.89469L3.13133 3.19582C3.12892 3.05224 3.18835 2.91455 3.29449 2.81783C3.29449 2.81783 4.41555 1.79626 5.85891 1.33033C5.99624 1.286 6.14602 1.30316 6.26976 1.37741L7.7313 2.25433C7.7313 2.25433 8.00017 2.2423 8.26904 2.25435L9.72451 1.38336C9.84723 1.30992 9.99552 1.29255 10.1319 1.33563C10.1319 1.33563 11.5817 1.79369 12.7056 2.81784C12.8117 2.91457 12.8711 3.05225 12.8687 3.19582ZM11.8376 5.03524L11.8649 3.41018C11.8649 3.41018 11.0485 2.71863 10.0405 2.35965L8.65051 3.19145C8.56249 3.24412 8.4604 3.26845 8.35809 3.26113C8.35809 3.26113 8.00001 3.23552 7.64194 3.26113C7.53942 3.26846 7.43714 3.24403 7.34901 3.19115L5.95456 2.35448C5.95456 2.35448 4.95017 2.71912 4.13508 3.41012L4.16244 5.03524C4.16421 5.14051 4.13271 5.24365 4.07242 5.32997C4.07242 5.32997 3.87088 5.6185 3.72147 5.93717C3.67677 6.0325 3.60312 6.11129 3.51101 6.1623L2.08866 6.95006C2.08866 6.95006 1.89913 8.00024 2.09377 9.04954L3.51173 9.8379C3.60314 9.88873 3.67631 9.96694 3.72094 10.0615C3.72094 10.0615 3.87359 10.385 4.07537 10.6804C4.13377 10.7658 4.16419 10.8673 4.16244 10.9708L4.1351 12.5896C4.1351 12.5896 4.95155 13.2812 5.95954 13.6402L7.34951 12.8084C7.43753 12.7557 7.53962 12.7314 7.64194 12.7387C7.64194 12.7387 8.00001 12.7643 8.35809 12.7387C8.4606 12.7313 8.56288 12.7558 8.65101 12.8087L10.0455 13.6453C10.0455 13.6453 11.0499 13.2807 11.8649 12.5897L11.8376 10.9646C11.8358 10.8593 11.8673 10.7562 11.9276 10.6698C11.9276 10.6698 12.1291 10.3813 12.2786 10.0626C12.3233 9.96731 12.3969 9.88852 12.489 9.83751L13.9114 9.04975C13.9114 9.04975 14.1009 7.99957 13.9063 6.95027L12.4883 6.1619C12.3965 6.11087 12.3231 6.03225 12.2786 5.93717C12.2786 5.93717 12.1291 5.61851 11.9276 5.32997C11.8673 5.24365 11.8358 5.14051 11.8376 5.03524Z" fill="currentcolor" />
                              </svg>
                              Settings
                          </a>
                      </li>
                      <li>
                          <a href="javaScript:;" class="flex items-center">
                              <svg class="mr-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M3.1401 14.6893L5.12662 13.0228L5.19153 13H13.5C13.5 13 13.9142 13 14.2071 12.7071C14.2071 12.7071 14.5 12.4142 14.5 12V4C14.5 4 14.5 3.58579 14.2071 3.29289C14.2071 3.29289 13.9142 3 13.5 3H2.5C2.5 3 2.08579 3 1.79289 3.29289C1.79289 3.29289 1.5 3.58579 1.5 4L1.50002 13.929C1.50002 13.929 1.50231 14.2184 1.65887 14.4619C1.65887 14.4619 1.81544 14.7054 2.07786 14.8276C2.07786 14.8276 2.34027 14.9498 2.62739 14.9129C2.62739 14.9129 2.9145 14.876 3.1401 14.6893ZM4.94051 12.0283C4.99376 12.0096 5.0498 12 5.10625 12H13.5V4H2.5L2.49998 13.921L4.55365 12.1982C4.59976 12.1595 4.65247 12.1295 4.70926 12.1095L4.94051 12.0283Z" fill="currentcolor" />
                                  <path d="M6 7.5H10C10.2761 7.5 10.5 7.27614 10.5 7C10.5 6.72386 10.2761 6.5 10 6.5H6C5.72386 6.5 5.5 6.72386 5.5 7C5.5 7.27614 5.72386 7.5 6 7.5Z" fill="currentcolor" />
                                  <path d="M6 9.5H10C10.2761 9.5 10.5 9.27614 10.5 9C10.5 8.72386 10.2761 8.5 10 8.5H6C5.72386 8.5 5.5 8.72386 5.5 9C5.5 9.27614 5.72386 9.5 6 9.5Z" fill="currentcolor" />
                              </svg>
                              Messages
                          </a>
                      </li>
                      <li>
                          <a href="javaScript:;" class="flex items-center">
                              <svg class="mr-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8 5.75009C8 5.75009 9.24264 5.75009 10.1213 6.62877C10.1213 6.62877 11 7.50745 11 8.75009C11 8.75009 11 9.99273 10.1213 10.8714C10.1213 10.8714 9.24264 11.7501 8 11.7501C8 11.7501 6.75736 11.7501 5.87868 10.8714C5.87868 10.8714 5 9.99273 5 8.75009C5 8.75009 5 7.50745 5.87868 6.62877C5.87868 6.62877 6.75736 5.75009 8 5.75009ZM8 6.75009C8 6.75009 7.17157 6.75009 6.58579 7.33587C6.58579 7.33587 6 7.92166 6 8.75009C6 8.75009 6 9.57851 6.58579 10.1643C6.58579 10.1643 7.17157 10.7501 8 10.7501C8 10.7501 8.82843 10.7501 9.41421 10.1643C9.41421 10.1643 10 9.57851 10 8.75009C10 8.75009 10 7.92166 9.41421 7.33587C9.41421 7.33587 8.82843 6.75009 8 6.75009Z" fill="currentcolor" />
                                  <path d="M14.8493 9.0492C14.9287 9.15542 15.0472 9.22598 15.1785 9.24495C15.2022 9.24837 15.2261 9.25009 15.25 9.25009L15.2509 9.25009C15.3585 9.2499 15.4632 9.21501 15.5493 9.15059C15.6756 9.0562 15.75 8.90777 15.75 8.75009L15.75 8.74437C15.7488 8.63843 15.7139 8.53562 15.6505 8.45076L15.6501 8.45019C15.0491 7.64633 14.1513 7.19745 14.1513 7.19745C13.2533 6.74841 12.2492 6.75009 12.2492 6.75009L12.25 6.75009C12.5262 6.75009 12.75 6.97395 12.75 7.25009C12.75 7.5258 12.5268 7.74948 12.2511 7.75009L14.8493 9.0492Z" fill="currentcolor" />
                                  <path d="M2.29589 8.09188C2.98204 7.74881 3.74916 7.75009 3.74916 7.75009L3.74986 7.75009C3.7576 7.75009 3.76546 7.74991 3.77318 7.74956C3.89735 7.74379 4.01492 7.69198 4.10296 7.60424C4.19689 7.51063 4.24978 7.38354 4.25 7.25093L4.25 7.25024C4.25 7.22 4.24726 7.18968 4.2418 7.15993C4.19834 6.92283 3.99189 6.7505 3.75084 6.75009L3.75 6.75009C2.74638 6.7486 1.84868 7.19745 1.84868 7.19745C0.950921 7.64633 0.349925 8.45019 0.349925 8.45019L0.349564 8.45068C0.284904 8.53719 0.25 8.64219 0.25 8.75009L0.250027 8.75533C0.25026 8.77752 0.251969 8.79967 0.255144 8.82163C0.274117 8.95288 0.34445 9.07121 0.45067 9.15059C0.537097 9.21519 0.642101 9.25009 0.75 9.25009C0.756684 9.25009 0.763369 9.24996 0.770049 9.24969C0.920559 9.24365 1.06032 9.17008 1.1505 9.04942C1.60975 8.43495 2.29589 8.09188 2.29589 8.09188Z" fill="currentcolor" />
                                  <path d="M9.85735 12.284C10.7093 12.8161 11.1503 13.7186 11.1503 13.7186L11.1505 13.7192C11.2344 13.8909 11.4089 14.0001 11.6 14.0001L11.6137 13.9999C11.6851 13.9979 11.7552 13.9807 11.8194 13.9494C11.9911 13.8655 12.1 13.6912 12.1 13.5001L12.0998 13.4864C12.0979 13.415 12.0806 13.3449 12.0493 13.2807C11.4826 12.1203 10.3871 11.4359 10.3871 11.4359C9.29159 10.7517 7.99999 10.7517 7.99999 10.7517C6.7084 10.7517 5.61291 11.4359 5.61291 11.4359C4.51761 12.1199 3.95089 13.2803 3.95089 13.2803C3.91751 13.3487 3.89999 13.424 3.89999 13.5001L3.90004 13.5066C3.90073 13.5597 3.90988 13.6124 3.92716 13.6626C3.97028 13.788 4.06144 13.8912 4.18061 13.9494C4.24893 13.9827 4.32396 14.0001 4.39999 14.0001L4.41147 13.9999C4.59837 13.9956 4.76726 13.8875 4.84929 13.7195C5.29025 12.8164 6.14264 12.284 6.14264 12.284C6.99502 11.7517 7.99999 11.7517 7.99999 11.7517C9.00497 11.7517 9.85735 12.284 9.85735 12.284Z" fill="currentcolor" />
                                  <path d="M4.84117 4.223C5.13963 4.54068 5.22136 4.96883 5.22136 4.96883C5.24622 5.09908 5.32181 5.21413 5.4315 5.28865C5.51439 5.34496 5.61228 5.37508 5.71249 5.37508L5.71573 5.37506C5.74611 5.37487 5.7764 5.3719 5.80624 5.36621C6.04198 5.32121 6.21249 5.11507 6.21249 4.87508L6.21248 4.87226C6.21231 4.84174 6.20934 4.8113 6.20362 4.78133C6.06741 4.06774 5.56998 3.53828 5.56998 3.53828C5.07256 3.00883 4.36885 2.8284 4.36885 2.8284C3.66514 2.64798 2.97433 2.87279 2.97433 2.87279C2.28352 3.09759 1.82077 3.65761 1.82077 3.65761C1.35802 4.21763 1.26746 4.93843 1.26746 4.93843C1.1769 5.65923 1.48674 6.31631 1.48674 6.31631C1.79657 6.9734 2.4103 7.3621 2.4103 7.3621C3.02381 7.75068 3.74986 7.75009 3.74986 7.75009L3.7505 7.75007C3.88311 7.74994 4.01023 7.69713 4.1039 7.60327C4.19745 7.50953 4.25 7.38267 4.25 7.25024L4.24999 7.24957C4.24971 6.97362 4.02594 6.75009 3.75 6.75009L3.74948 6.75008C3.3136 6.75052 2.94536 6.51729 2.94536 6.51729C2.57713 6.28407 2.39123 5.88982 2.39123 5.88982C2.20532 5.49557 2.25966 5.06309 2.25966 5.06309C2.314 4.63061 2.59165 4.2946 2.59165 4.2946C2.8693 3.95859 3.28378 3.8237 3.28378 3.8237C3.69827 3.68882 4.1205 3.79707 4.1205 3.79707C4.54272 3.90533 4.84117 4.223 4.84117 4.223Z" fill="currentcolor" />
                                  <path d="M13.0546 6.51729C12.6864 6.75052 12.2505 6.75008 12.2505 6.75008L12.25 6.75009C12.2422 6.75009 12.2343 6.75026 12.2265 6.75063L11.7506 7.27359C11.7564 7.39775 11.8083 7.51529 11.8961 7.60327C11.9898 7.69713 12.1169 7.74994 12.2495 7.75007L12.25 7.75007C12.9762 7.75068 13.5897 7.3621 13.5897 7.3621C14.2034 6.9734 14.5133 6.31631 14.5133 6.31631C14.8231 5.65923 14.7325 4.93843 14.7325 4.93843C14.642 4.21763 14.1792 3.65761 14.1792 3.65761C13.7165 3.09759 13.0257 2.87279 13.0257 2.87279C12.3349 2.64798 11.6311 2.8284 11.6311 2.8284C10.9274 3.00883 10.43 3.53828 10.43 3.53828C9.93259 4.06774 9.79637 4.78132 9.79637 4.78132C9.79047 4.81223 9.78751 4.84362 9.78751 4.87508C9.78751 4.8901 9.78818 4.90512 9.78954 4.92008C9.80962 5.14233 9.97456 5.32437 10.1938 5.36621C10.2247 5.37211 10.256 5.37508 10.2875 5.37508C10.3025 5.37508 10.3175 5.3744 10.3325 5.37305C10.5548 5.35296 10.7368 5.18802 10.7786 4.96883C10.8604 4.54067 11.1588 4.223 11.1588 4.223C11.4573 3.90533 11.8795 3.79707 11.8795 3.79707C12.3017 3.68882 12.7162 3.8237 12.7162 3.8237C13.1307 3.95859 13.4083 4.2946 13.4083 4.2946C13.686 4.63061 13.7403 5.06309 13.7403 5.06309C13.7947 5.49557 13.6088 5.88982 13.6088 5.88982C13.4229 6.28407 13.0546 6.51729 13.0546 6.51729Z" fill="currentcolor" />
                              </svg>

                              Support
                          </a>
                      </li>
                      <li class="h-px bg-black/5 block my-1"></li>
                      <li>
                          <a href="javaScript:;" class="text-black dark:text-white flex items-center">
                              <svg class="w-4 h-4 mr-2" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M25.5858 16L21.0433 20.5425C20.8557 20.7301 20.75 20.9848 20.75 21.25C20.75 21.266 20.7504 21.282 20.7512 21.298C20.7631 21.5464 20.8671 21.7813 21.0429 21.9571C21.2304 22.1446 21.4848 22.25 21.75 22.25C22.0152 22.25 22.2696 22.1446 22.4571 21.9571L27.7071 16.7071C27.8946 16.5196 28 16.2652 28 16C28 15.7348 27.8946 15.4804 27.7071 15.2929L22.4572 10.043C22.2696 9.85536 22.0152 9.75 21.75 9.75C21.4848 9.75 21.2304 9.85536 21.0429 10.0429C20.8554 10.2304 20.75 10.4848 20.75 10.75C20.75 11.0152 20.8554 11.2696 21.0429 11.4571L25.5858 16Z" fill="currentcolor" />
                                  <path d="M13 17H27C27.5523 17 28 16.5523 28 16C28 15.4477 27.5523 15 27 15H13C12.4477 15 12 15.4477 12 16C12 16.5523 12.4477 17 13 17Z" fill="currentcolor" />
                                  <path d="M6 6H13C13.5523 6 14 5.55228 14 5C14 4.44772 13.5523 4 13 4H6C5.17157 4 4.58579 4.58579 4.58579 4.58579C4 5.17157 4 6 4 6V26C4 26.8284 4.58579 27.4142 4.58579 27.4142C5.17157 28 6 28 6 28H13C13.5523 28 14 27.5523 14 27C14 26.4477 13.5523 26 13 26H6V6Z" fill="currentcolor" />
                              </svg>
                              Sign Out
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <!-- End Topbar -->
