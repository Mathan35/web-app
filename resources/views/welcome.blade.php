<x-app-layout>
    <!-- Hero section with heading, subheading and button -->
    <div class="bg-gradient-to-r from-red-50 to-indigo-50 px-6 shadow-sm py-10 sm:py-20 text-center text-neutral-800 dark:bg-neutral-700 dark:text-neutral-200">
        <h1 class="mb-6 text-5xl font-bold font-sans">The trusted <span class="text-indigo-700">Opportunities</span></h1>
        <div class="text-center mx-auto lg:w-1/2">
            <h3 class="mb-8 text-sm font-sans ">SoftwareJobs in best place to search and post jobs for both proffessionals and employers.we have quality and trusted opportunities, Let's start a career with us</h3>
        </div>
        @if( ! Auth::check() || Auth::user()->role == 1 )
        <a href="{{route('employee-request')}}" class="flex items-center rounded-full space-x-1 bg-blue-900 text-center mx-auto w-fit px-6 pb-1 pt-1 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]" data-te-ripple-init data-te-ripple-color="light" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
            </svg>
            <p>For employee</p>
        </a>
        @endif
    </div>
    <livewire:home-job-component></livewire:home-job-component>
    <livewire:get-user-mail></livewire:get-user-mail>
</x-app-layout>