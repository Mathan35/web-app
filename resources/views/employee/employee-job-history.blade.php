<x-app-layout>
    <div class="max-w-5xl mx-auto my-16">
        <div class="">
            <div class="p-4 mx-2 sm:p-4 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl ">
                    <h2 class="text-md font-sans font-semibold text-gray-800">Job History</h2>
                </div>
            </div>

            <div class="p-4 my-2 mx-2 sm:p-4 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl space-y-2">
                    <h1 class="text-xs font-light text-gray-700">Job ID: JOB4234</h1>
                    <h2 class="text-sm text-gray-700 font-sans font-bold">PHP / MySQL Developer - Mid Level or Above - Remote Position</h2>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-1" data-ripple-light="true" data-tooltip-target="views">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <p class="text-xs font-sans font-normal">3453</p>
                        </div>
                        <div data-tooltip="views" class="absolute z-50 whitespace-normal break-words rounded-lg bg-white py-1.5 px-3 font-sans text-sm font-normal text-gray-700 shadow-lg focus:outline-none">
                            Views
                        </div>


                        <div class="flex items-center space-x-1" data-ripple-light="true" data-tooltip-target="apply">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
                            </svg>
                            <p class="text-xs font-sans font-normal">2343</p>
                        </div>
                        <div data-tooltip="apply" class="absolute z-50 whitespace-normal break-words rounded-lg bg-white py-1.5 px-3 font-sans text-sm font-normal text-gray-700 shadow-lg focus:outline-none">
                            Applies
                        </div>

                        <a class="text-xs text-blue-600 font-sans font-normal" href="{{route('job-history-details')}}">View more <i class="fa-solid fa-share"></i></a>
                    </div>
                </div>
            </div>

            <div class="p-4 my-2 mx-2 sm:p-4 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl space-y-2">
                    <h1 class="text-xs font-light text-gray-700">Job ID: JOB4234</h1>
                    <h2 class="text-sm text-gray-700 font-sans font-bold">PHP / MySQL Developer - Mid Level or Above - Remote Position</h2>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-1" data-ripple-light="true" data-tooltip-target="views">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <p class="text-xs font-sans font-normal">3453</p>
                        </div>
                        <div data-tooltip="views" class="absolute z-50 whitespace-normal break-words rounded-lg bg-white py-1.5 px-3 font-sans text-sm font-normal text-gray-700 shadow-lg focus:outline-none">
                            Views
                        </div>


                        <div class="flex items-center space-x-1" data-ripple-light="true" data-tooltip-target="apply">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
                            </svg>
                            <p class="text-xs font-sans font-normal">2343</p>
                        </div>
                        <div data-tooltip="apply" class="absolute z-50 whitespace-normal break-words rounded-lg bg-white py-1.5 px-3 font-sans text-sm font-normal text-gray-700 shadow-lg focus:outline-none">
                            Applies
                        </div>

                        <a class="text-xs text-blue-600 font-sans font-normal" href="{{route('job-history-details')}}">View more <i class="fa-solid fa-share"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>