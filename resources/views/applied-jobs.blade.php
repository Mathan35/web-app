<!-- {{ $jobs->links() }}  -->


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="p-4 mx-2 sm:p-4 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl ">
                    <h2 class="text-md font-sans font-semibold text-gray-700">Applied Jobs</h2>
                </div>
            </div>

            @forelse ($jobs as $job)
            <div class="p-4 my-2 mx-2 sm:p-4 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl space-y-1">
                    <h1 class="text-xs font-light text-gray-700">Job ID: {{$job->job_id}}</h1>
                    <h2 class="text-sm text-gray-700 font-sans font-bold">{{$job->job_title}} <span class="text-xs font-normal text-blue-600">( {{ $job->company_name}} )</span></h2>
                    <div class="flex items-center space-x-4">
                        <a class="text-xs text-blue-600 font-sans font-normal" href="{{route('view-job', $job->id)}}">View job <i class="fa-solid fa-share"></i></a>
                    </div>
                </div>
                @if($job->pivot->status === 'pending')
                <div class="flex items-center space-x-1 text-gray-600 font-semibold">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <p class="text-xs py-2 font-sans"> Stay tuned </p>
                </div>
                @elseif($job->pivot->status === 'rejected')
                <div class="flex items-center space-x-1 text-red-600 font-semibold">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>

                    <p class="text-xs py-2 font-sans"> Regretfully Declined </p>
                </div>
                @elseif($job->pivot->status === 'selected')
                <div class="flex items-center space-x-1 text-green-700 font-semibold">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                    </svg>

                    <p class="text-xs py-2 font-sans"> Selected ( You will get a call soon. Stay tuned) </p>
                </div>
                @endif
            </div>
            @empty
            <div class="p-4 mx-2 sm:p-4 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl ">
                    <h2 class="text-sm font-sans font-normal text-gray-700">Yoy did't applied jobs, continue apply and see the status <a class="text-blue-700" href="/">jobs</a></h2>
                </div>
            </div>
            @endforelse

        </div>
    </div>
</x-app-layout>