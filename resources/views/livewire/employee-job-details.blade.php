<div>
    <div class="max-w-5xl mx-auto my-16">
        <div class="">
            @if (session()->has('message'))
            <div class="mx-2">
                <div class="mb-3 mt-3 inline-flex w-full items-center rounded-lg shadow bg-success-50 px-6 py-2 my-2 text-base text-success-700" role="alert">
                    <span class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    {{ session('message') }}
                </div>
            </div>
            @endif

            @if (session()->has('warning'))
            <div class="mx-2">
                <div class="mb-3 mt-3 inline-flex w-full items-center rounded-lg shadow bg-red-50 px-6 py-2 my-2 text-base text-red-700" role="alert">
                    <span class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    {{ session('warning') }}
                </div>
            </div>
            @endif

            <div class="p-4 mx-2 sm:p-4 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl ">
                    <h2 class="text-md font-sans font-semibold text-gray-700">Job Details here</h2>
                </div>
            </div>

            <div class="p-4 mx-2 my-3 sm:p-4 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-5xl ">
                    <div class="sm:grid sm:grid-cols-2 sm:gap-4 space-y-2 sm:space-y-0">
                        <div class="shadow-md hover:shadow-lg border border-gray-100 py-3 text-center w-full  rounded-lg space-y-2" data-ripple-light="true" data-tooltip-target="views">
                            <h1 class="text-sm text-gray-800 font-sans font-semibold">Views</h1>
                            <div class="flex justify-center items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 font-semibold text-center">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-xs font-semibold text-center font-sans">{{$job->total_views? $job->total_views : 0}}</span>
                            </div>
                        </div>
                        <div class="shadow-md hover:shadow-lg border border-gray-100 py-3 text-center w-full  rounded-lg space-y-2" data-ripple-light="true" data-tooltip-target="views">
                            <h1 class="text-sm text-gray-800 font-sans font-semibold">Job Applies</h1>
                            <div class="flex justify-center items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 font-semibold text-center">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
                                </svg>
                                <span class="text-xs font-semibold text-center font-sans">{{$job->userCount()}}</span>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="flex flex-col my-4 sm:my-10">
                    <div>
                        <p class="text-xs font-sans text-gray-700 bg-gray-200 rounded-md py-2 px-3 my-2">When you update the 'selected' status, an email will be sent to the user, notifying them of their selection.
                            Please contact them using the email or phone number provided in the list.</p>
                    </div>

                    <div class="flex justify-between items-center">
                        <div>
                            <input id="searchInput" type="text" class="text-gray-800 text-xs font-sans border border-gray-400 rounded-md focus:border-blue-400" placeholder="Search by name, email, or phone">
                        </div>
                        <div class="flex items-center space-x-1">
                            <p class="text-xs text-gray-700 font-sans">Filter: </p>
                            <select id="statusFilter" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="all">All</option>
                                <option value="pending">Pending</option>
                                <option value="rejected">Rejected</option>
                                <option value="selected">Accepted</option>
                            </select>
                        </div>
                    </div>

                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                                    <thead class="border-b font-medium dark:border-neutral-500">
                                        <tr>
                                            <th scope="col" class="border-r px-6 py-2 dark:border-neutral-500">
                                                #
                                            </th>
                                            <th scope="col" class="border-r px-6 py-2 dark:border-neutral-500">
                                                User name
                                            </th>
                                            <th scope="col" class="border-r px-6 py-2 dark:border-neutral-500">
                                                Email
                                            </th>
                                            <th scope="col" class="border-r px-6 py-2 dark:border-neutral-500">
                                                Phone
                                            </th>
                                            <th scope="col" class="border-r px-6 py-2 dark:border-neutral-500">Resume</th>
                                            <th scope="col" class="border-r px-6 py-2 dark:border-neutral-500">
                                                Update Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        @forelse($users as $user)
                                        @if($user->pivot->status === 'pending')
                                        <tr data-status='pending' class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap border-r px-6 py-2 font-medium dark:border-neutral-500">
                                                1
                                            </td>
                                            <td class="whitespace-nowrap border-r px-6 py-2 dark:border-neutral-500">
                                                {{$user->name}}
                                            </td>
                                            <td class="whitespace-nowrap border-r px-6 py-2 dark:border-neutral-500">
                                                {{$user->email}}
                                            </td>
                                            <td class="whitespace-nowrap border-r px-6 py-2 dark:border-neutral-500">
                                                {{$user->phone}}
                                            </td>
                                            <td class="whitespace-nowrap border-r px-6 py-2 dark:border-neutral-500">
                                                <div class="flex space-x-2 items-center">
                                                    @if($user->resume->extension === 'pdf')
                                                    <button data-ripple-light="true" data-dialog-target="dialog" class="border border-gray-200 shadow-md rounded-md px-1 py-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-blue-700">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        </svg>
                                                    </button>
                                                    <div data-dialog-backdrop="dialog" data-dialog-backdrop-close="true" class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
                                                        <div data-dialog="dialog" class="relative m-4 lg:w-full min-w-[80%] max-w-[90%] rounded-lg bg-white font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased shadow-2xl">
                                                            <livewire:dialog-file-view :resume="$user->resume->resume"></livewire:dialog-file-view>

                                                            <div class="flex shrink-0 flex-wrap items-center justify-end p-4 text-blue-gray-500">
                                                                <button data-ripple-dark="true" data-dialog-close="true" class="middle none center mr-1 rounded-lg py-3 px-6 font-sans text-xs font-bold uppercase text-red-500 transition-all hover:bg-red-500/10 active:bg-red-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                                                    Close
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if($user->resume->extension != 'pdf')
                                                    <button data-ripple-light="true" data-tooltip-target="tooltip" class="border border-gray-200 shadow-md rounded-md px-1 py-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-blue-700">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        </svg>
                                                    </button>

                                                    <div data-tooltip="tooltip" class="absolute z-50 whitespace-normal break-words rounded-lg bg-white py-1.5 px-3 font-sans text-sm font-normal text-gray-700 shadow focus:outline-none">
                                                        You are unable to view this. Please download and view it.
                                                    </div>

                                                    @endif
                                                    <livewire:dialog-job :resume="$user->resume->resume"></livewire:dialog-job>
                                                </div>
                                            </td>
                                            <td class="whitespace-nowrap border-r px-6 py-2 dark:border-neutral-500 text-gray-700">
                                                <div>

                                                    <select wire:change='updateStatus(event.target.value,"{{$user->id}}")' id="statusFilter" class="p-2 border border-gray-300 rounded-md ml-2">
                                                        <option disabled value="all">All</option>
                                                        <option {{$user->pivot->status==='pending'? 'selected' : ''}} value="pending">Pending</option>
                                                        <option {{$user->pivot->status==='rejected'? 'selected' : ''}} value="rejected">Rejected</option>
                                                        <option {{$user->pivot->status==='selected'? 'selected' : ''}} value="selected">Selected</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        @endif

                                        @if($user->pivot->status === 'rejected')
                                        <tr data-status='rejected' class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap border-r px-6 py-2 font-medium dark:border-neutral-500">
                                                1
                                            </td>
                                            <td class="whitespace-nowrap border-r px-6 py-2 dark:border-neutral-500">
                                                {{$user->name}}
                                            </td>
                                            <td class="whitespace-nowrap border-r px-6 py-2 dark:border-neutral-500">
                                                {{$user->email}}
                                            </td>
                                            <td class="whitespace-nowrap border-r px-6 py-2 dark:border-neutral-500">
                                                {{$user->phone}}
                                            </td>
                                            <td class="whitespace-nowrap border-r px-6 py-2 dark:border-neutral-500">
                                                <div class="flex space-x-2 items-center">
                                                    @if($user->resume->extension === 'pdf')
                                                    <button data-ripple-light="true" data-dialog-target="dialog" class="border border-gray-200 shadow-md rounded-md px-1 py-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-blue-700">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        </svg>
                                                    </button>
                                                    <div data-dialog-backdrop="dialog" data-dialog-backdrop-close="true" class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
                                                        <div data-dialog="dialog" class="relative m-4 lg:w-full min-w-[80%] max-w-[90%] rounded-lg bg-white font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased shadow-2xl">
                                                            <livewire:dialog-file-view :resume="$user->resume->resume"></livewire:dialog-file-view>

                                                            <div class="flex shrink-0 flex-wrap items-center justify-end p-4 text-blue-gray-500">
                                                                <button data-ripple-dark="true" data-dialog-close="true" class="middle none center mr-1 rounded-lg py-3 px-6 font-sans text-xs font-bold uppercase text-red-500 transition-all hover:bg-red-500/10 active:bg-red-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                                                    Close
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if($user->resume->extension != 'pdf')
                                                    <button data-ripple-light="true" data-tooltip-target="tooltip" class="border border-gray-200 shadow-md rounded-md px-1 py-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-blue-700">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        </svg>
                                                    </button>
                                                    <div data-tooltip="tooltip" class="absolute z-50 whitespace-normal break-words rounded-lg bg-white py-1.5 px-3 font-sans text-sm font-normal text-gray-700 shadow focus:outline-none">
                                                        You are unable to view this. Please download and view it.
                                                    </div>

                                                    @endif
                                                    <livewire:dialog-job :resume="$user->resume->resume"></livewire:dialog-job>
                                                </div>
                                            </td>
                                            <td class="whitespace-nowrap border-r px-6 py-2 dark:border-neutral-500 text-gray-700">
                                                <div>
                                                    <select wire:change='updateStatus(event.target.value, "{{$user->id}}")' id="statusFilter" class="p-2 border border-gray-300 rounded-md ml-2">
                                                        <option disabled value="all">All</option>
                                                        <option {{$user->pivot->status==='pending'? 'selected' : ''}} value="pending">Pending</option>
                                                        <option {{$user->pivot->status==='rejected'? 'selected' : ''}} value="rejected">Rejected</option>
                                                        <option {{$user->pivot->status==='selected'? 'selected' : ''}} value="selected">Selected</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        @endif
                                        @if($user->pivot->status === 'selected')
                                        <tr data-status='selected' class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap border-r px-6 py-2 font-medium dark:border-neutral-500">
                                                1
                                            </td>
                                            <td class="whitespace-nowrap border-r px-6 py-2 dark:border-neutral-500">
                                                {{$user->name}}
                                            </td>
                                            <td class="whitespace-nowrap border-r px-6 py-2 dark:border-neutral-500">
                                                {{$user->email}}
                                            </td>
                                            <td class="whitespace-nowrap border-r px-6 py-2 dark:border-neutral-500">
                                                {{$user->phone}}
                                            </td>
                                            <td class="whitespace-nowrap border-r px-6 py-2 dark:border-neutral-500">
                                                <div class="flex space-x-2 items-center">
                                                    @if($user->resume->extension === 'pdf')
                                                    <button data-ripple-light="true" data-dialog-target="dialog" class="border border-gray-200 shadow-md rounded-md px-1 py-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-blue-700">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        </svg>
                                                    </button>
                                                    <div data-dialog-backdrop="dialog" data-dialog-backdrop-close="true" class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
                                                        <div data-dialog="dialog" class="relative m-4 lg:w-full min-w-[80%] max-w-[90%] rounded-lg bg-white font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased shadow-2xl">
                                                            <livewire:dialog-file-view :resume="$user->resume->resume"></livewire:dialog-file-view>

                                                            <div class="flex shrink-0 flex-wrap items-center justify-end p-4 text-blue-gray-500">
                                                                <button data-ripple-dark="true" data-dialog-close="true" class="middle none center mr-1 rounded-lg py-3 px-6 font-sans text-xs font-bold uppercase text-red-500 transition-all hover:bg-red-500/10 active:bg-red-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                                                    Close
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if($user->resume->extension != 'pdf')
                                                    <button data-ripple-light="true" data-tooltip-target="tooltip" class="border border-gray-200 shadow-md rounded-md px-1 py-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-blue-700">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        </svg>
                                                    </button>

                                                    <div data-tooltip="tooltip" class="absolute z-50 whitespace-normal break-words rounded-lg bg-white py-1.5 px-3 font-sans text-sm font-normal text-gray-700 shadow focus:outline-none">
                                                        You are unable to view this. Please download and view it.
                                                    </div>

                                                    @endif
                                                    <livewire:dialog-job :resume="$user->resume->resume"></livewire:dialog-job>
                                                </div>
                                            </td>
                                            <td class="whitespace-nowrap border-r px-6 py-2 dark:border-neutral-500 text-gray-700">
                                                <div>
                                                    <select wire:change='updateStatus(event.target.value, "{{$user->id}}")' id="statusFilter" class="p-2 border border-gray-300 rounded-md ml-2">
                                                        <option disabled value="all">All</option>
                                                        <option {{$user->pivot->status==='pending'? 'selected' : ''}} value="pending">Pending</option>
                                                        <option {{$user->pivot->status==='rejected'? 'selected' : ''}} value="rejected">Rejected</option>
                                                        <option {{$user->pivot->status==='selected'? 'selected' : ''}} value="selected">Selected</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        @endif

                                        @empty
                                        <p class="text-sm text-gray-700 font-sans font-medium text-center py-3">Updated Soon..!</p>
                                        @endforelse
                                    </tbody>
                                </table>

                                <div class="my-3">
                                    {{ $users->links() }}
                                </div>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                            <script>
                                $(document).ready(function() {
                                    $('#searchInput, #statusFilter').on('input', function() {
                                        const searchQuery = $('#searchInput').val().toLowerCase();
                                        const statusValue = $('#statusFilter').val().toLowerCase();

                                        $('#tableBody tr').each(function() {
                                            const rowData = $(this).find('td').map(function() {
                                                return $(this).text().toLowerCase();
                                            }).get();

                                            const matchSearch = rowData.some(function(cellData) {
                                                return cellData.includes(searchQuery);
                                            });

                                            const matchStatus = (statusValue === 'all' || $(this).data('status') === statusValue);

                                            $(this).toggle(matchSearch && matchStatus);
                                        });
                                    });
                                });
                            </script>

                            <!-- <script>
                                setTimeout(function() {
                                    location.reload();
                                }, 15000);
                            </script> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>