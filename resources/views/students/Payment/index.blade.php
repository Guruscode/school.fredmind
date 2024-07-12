@include('students.Components.dashboardHead')
 @include('students.Components.dashboardSide')    
        <!-- Start Content Area -->
        <div class="main-content flex-1">
@include('students.Components.dashboardNav')       
            <!-- Start Content -->
            <div class="h-[calc(100vh-73px)] overflow-y-auto overflow-x-hidden">
                <div x-data="sales" class="p-4 sm:p-7 min-h-[calc(100vh-145px)]">
                 


                  {{-- Body of the dashboard --}}
                  <h1>Payment</h1>
                </div>
@include('students.Components.dashboardFooter') 
                