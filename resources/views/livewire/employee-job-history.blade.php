<div>
    <x-app-layout>
        <div class="max-w-5xl mx-auto my-16 ">
            <div class="">
                <div class="p-4 mx-2 sm:p-4 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl ">
                        <h2 class="text-md font-sans font-semibold text-gray-800">Job History</h2>
                    </div>
                </div>

                <div class="max-w-5xl p-4 mx-2 sm:p-4 bg-white dark:bg-gray-800 shadow sm:rounded-lg my-2">
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 space-y-2 sm:space-y-0">
                        <div class="shadow-md hover:shadow-lg border border-gray-100 py-3 text-center w-full  rounded-lg space-y-2" data-ripple-light="true" data-tooltip-target="total-posts">
                            <h1 class="text-sm text-gray-800 font-sans font-semibold">Total Posts</h1>
                            <div class="flex justify-center items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 font-semibold text-center">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                                </svg>
                                <span class="text-xs font-semibold text-center font-sans">{{$jobStatics['total_posts']}}</span>
                            </div>
                        </div>
                        <div data-tooltip="total-posts" class="absolute z-50 whitespace-normal break-words rounded-lg bg-white py-1.5 px-3 font-sans text-sm font-normal text-gray-700 shadow-lg focus:outline-none">
                            Total Posts
                        </div>
                        <div class="shadow-md hover:shadow-lg border border-gray-100 py-3 text-center w-full  rounded-lg space-y-2" data-ripple-light="true" data-tooltip-target="total-views">
                            <h1 class="text-sm text-gray-800 font-sans font-semibold">Views</h1>
                            <div class="flex justify-center items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 font-semibold text-center">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-xs font-semibold text-center font-sans">{{$jobStatics['total_views']}}</span>
                            </div>
                        </div>
                        <div data-tooltip="total-views" class="absolute z-50 whitespace-normal break-words rounded-lg bg-white py-1.5 px-3 font-sans text-sm font-normal text-gray-700 shadow-lg focus:outline-none">
                            Views
                        </div>
                        <div class="shadow-md hover:shadow-lg border border-gray-100 py-3 text-center w-full  rounded-lg space-y-2" data-ripple-light="true" data-tooltip-target="total-applies">
                            <h1 class="text-sm text-gray-800 font-sans font-semibold">Job Applies</h1>
                            <div class="flex justify-center items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 font-semibold text-center">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
                                </svg>
                                <span class="text-xs font-semibold text-center font-sans">{{$jobStatics['total_applies']}}</span>
                            </div>
                        </div>
                        <div data-tooltip="total-applies" class="absolute z-50 whitespace-normal break-words rounded-lg bg-white py-1.5 px-3 font-sans text-sm font-normal text-gray-700 shadow-lg focus:outline-none">
                            Total applies
                        </div>
                    </div>
                </div>

                <div class="flex justify-end">
                    <div>
                        <div class="w-fit px-2">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                            <select wire:model='type' class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="all" selected>All</option>
                                <option value="approved">Approved</option>
                                <option value="pending">Approval Pending</option>
                                <option value="0">Payment pending</option>
                            </select>
                        </div>
                    </div>
                </div>


                @forelse($jobs as $job)
                <div class="p-4 my-2 mx-2 sm:p-4 bg-white dark:bg-gray-800 shadow hover:shadow-md sm:rounded-lg">
                    <div class="max-w-xl space-y-2">
                        <h1 class="text-xs font-light text-gray-700 flex items-center space-x-1">
                            <p>Job ID: {{$job->job_id}}</p>
                            <p class="{{$job->status === 'approved'? 'bg-green-500 p-1 w-fit rounded-full':''}} 
                            {{$job->status === 'pending'? 'bg-yellow-400 p-1 w-fit rounded-full':''}}
                            {{$job->status === 'payment'? 'bg-red-600 p-1 w-fit rounded-full':''}} mb-.5"></p>
                        </h1>
                        <h2 class="text-sm text-gray-700 font-sans font-bold flex items-center space-x-2">
                            <p class="text-sm text-gray-700 font-sans font-bold">{{$job->job_title}} - {{$job->location}}</p>
                            <a href="{{route('edit-job', $job->id)}}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-blue-700">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </a>
                        </h2>
                        @if($job->status != 'payment')
                        <div class="flex items-center space-x-4">
                            @if($job->total_views)
                            <div class="flex items-center space-x-1" data-ripple-light="true" data-tooltip-target="views">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <p class="text-xs font-sans font-normal">{{$job->total_views}}</p>
                            </div>
                            <div data-tooltip="views" class="absolute z-50 whitespace-normal break-words rounded-lg bg-white py-1.5 px-3 font-sans text-sm font-normal text-gray-700 shadow-lg focus:outline-none">
                                Views
                            </div>
                            @endif


                            <div class="flex items-center space-x-1" data-ripple-light="true" data-tooltip-target="apply">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
                                </svg>
                                <p class="text-xs font-sans font-normal">{{$job->userCount()}}</p>
                            </div>
                            <div data-tooltip="apply" class="absolute z-50 whitespace-normal break-words rounded-lg bg-white py-1.5 px-3 font-sans text-sm font-normal text-gray-700 shadow-lg focus:outline-none">
                                Applies
                            </div>

                            <a class="text-xs text-blue-600 font-sans font-normal flex items-center space-x-1" href="{{route('job-history-details', $job->id)}}">
                                <p>View more</p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                </svg>
                            </a>
                        </div>
                        @endif
                        @if($job->status === 'payment')
                        <form action="{{route('pay-pending-payment', $job->id)}}" method="post">
                            @csrf
                            <div class="flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-red-700  w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                </svg>

                                <button type="submit" class="text-xs text-red-700 font-sansf font-semibold">Finish Payment</button>
                            </div>
                        </form>
                        @endif
                    </div>
                </div>
                @empty
                <p class="text-sm text-gray-700 font-sans font-medium text-center py-3">You did't posted jobs right now..!</p>
                @endforelse
                <div class="py-5 px-2">
                    {{ $jobs->links() }}
                </div>
            </div>
        </div>
    </x-app-layout>
</div>