<div class="px-2 py-4">

    <div class="max-w-5xl mx-auto shadow-sm rounded-md py-4 px-4 bg-white space-y-3 sm:space-y-0 sm:flex justify-between items-center my-3">
        <h2 class="text-md font-sans font-semibold text-gray-800">Fresh Opportunities: <span class="text-blue-800">Explore Exciting Entry-Level Job</span></h2>
    </div>

    <div class="max-w-5xl mx-auto shadow-sm rounded-md py-4 px-4 bg-white space-y-3 sm:space-y-0 sm:flex justify-between items-center my-3">
        <div class="w-100">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
            <select wire:model='category' id="countries" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="all">All</option>
                @foreach($categories as $category)
                <option value="{{$category}}">{{$category}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <div>
                <div class="w-100">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                    <select wire:model='type' class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="all" selected>All</option>
                        <option value="wfo">WFO</option>
                        <option value="remote">Remote</option>
                        <option value="on-site">On-site</option>
                        <option value="hybrid">Hybrid</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto shadow-sm rounded-md py-4 px-4 bg-white">
        <div class="flex justify-center items-center h-24 {{$loading? 'block':'hidden'}}">
            <div class="h-8 w-8 animate-spin rounded-full border-4 border-solid border-current border-r-transparent motion-reduce:animate-spin_1.5s_linear_infinite" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        @forelse($jobs as $job)
        <a href="{{route('view-job', $job['id'])}}">
            <div class="border border-gray-150 rounded-md mt-3 py-2 px-3 w-full lg:flex lg:items-center lg:justify-between space-y-2 hover:shadow-lg transition ease-in-out delay-150">
                <div class="flex space-x-3 items-center">
                    <div>
                        @if($job['company_logo'] === null)
                        <img src="{{asset('public/company_logo/company_dummy.png')}}" class="relative inline-block sm:h-12 sm:w-12 h-14 w-28  rounded-md object-cover object-center" alt="">
                        @else
                        <img src="{{asset('public/company_logo/'.$job['company_logo'])}}" class="relative inline-block sm:h-12 sm:w-12 h-14 w-28  rounded-md object-cover object-center" alt="">
                        @endif
                    </div>
                    <div>
                        <h2 class="text-md text-gray-700 font-sans font-bold">{{ $job['job_title'] }}</h2>
                        <h2 class="text-sm text-gray-700 font-sans">{{ $job['company_name'] }}</h2>
                        <h2 class="text-xs text-gray-600 font-medium font-sans">{{ $job['salary'] }}</h2>
                    </div>
                </div>
                <div>
                    @if($job['hot_job'])
                    <div class="flex space-x-1.5 items-center my-2 bg-gray-100 shadow py-1 px-2 w-fit rounded-full text-indigo-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                        </svg>
                        <p class="text-xs font-bold">Hot Job</p>
                    </div>
                    @endif
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>

                            <p class="text-xs font-sans text-gray-700">{{ $job['location'] }}</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-xs font-sans text-gray-700">{{ Carbon\Carbon::parse($job['created_at'])->diffForHumans()}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @empty
        <p class="text-sm font-medium text-gray-700 font-sans text-center">Job not found, please select other filters..</p>
        @endforelse

        <div class="py-5">
            {{ $jobs->links() }}
        </div>
    </div>
</div>