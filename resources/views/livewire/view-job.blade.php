<div class="px-2 py-4">

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #ccc;
            padding-left: 10px;
            padding-right: 10px;
        }

        table thead {
            background-color: #f2f2f2;
        }

        table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>

    @if (Session::has('message'))
    <div class="max-w-5xl mx-auto ">
        <div class="font-regular relative block w-full shadow-sm rounded-md pt-1 pb-3 px-1 bg-red-100  my-3 text-base text-red-800" data-dismissible="alert">
            <div class="ml-8 mr-12">
                <p class="mt-2 block font-sans text-base font-normal leading-relaxed  antialiased">
                    {{ Session::get('message') }}
                </p>
            </div>
            <div data-dismissible-target="alert" data-ripple-dark="true" class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                <div role="button" class="w-max rounded-lg p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    @endif


    @if (Session::has('success'))
    <div class="max-w-5xl mx-auto ">
        <div class="font-regular relative block w-full shadow-sm rounded-md pt-1 pb-3 px-1 bg-green-100  my-3 text-base text-green-800" data-dismissible="alert">
            <div class="ml-8 mr-12">
                <p class="mt-2 block font-sans text-base font-normal leading-relaxed  antialiased">
                    {{ Session::get('success') }}
                </p>
            </div>
            <div data-dismissible-target="alert" data-ripple-dark="true" class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                <div role="button" class="w-max rounded-lg p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="max-w-5xl mx-auto shadow-sm rounded-md py-4 px-4 bg-white">
        <a href="">
            <div class="py-2 px-3 w-full lg:flex lg:items-center lg:justify-between space-y-2">
                <div class="flex space-x-3 items-center">
                    <div>
                        @if($job['company_logo'] === null)
                        <img src="{{asset('public/company_logo/company-dummy.png')}}" class="relative inline-block sm:h-12 sm:w-12 h-14 w-28  rounded-md object-cover object-center" alt="">
                        @else
                        <img src="{{asset('public/company_logo/'.$job['company_logo'])}}" class="relative inline-block sm:h-12 sm:w-12 h-14 w-28  rounded-md object-cover object-center" alt="">
                        @endif
                    </div>
                    <div>
                        <h2 class="text-md text-gray-700 font-sans font-bold">{{$job->job_title}}</h2>
                        <h2 class="text-sm text-gray-700 font-sans">{{$job->company_name}}</h2>
                    </div>
                </div>
                <div>
                    @if($job->hot_job)
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
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                            </svg>
                            <p class="text-xs font-sans text-gray-700">{{$job->location}}</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-xs font-sans text-gray-700">2days ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="max-w-5xl mx-auto shadow-sm rounded-md py-4 px-4 bg-white my-4">
        <div class="py-2 px-3 w-full lg:flex lg:items-center lg:justify-between space-y-2">
            <h1 class="text-md textgray-700 font-sans font-semibold">Job Description</h1>
        </div>

        @if(! empty($content->content))
        <div class="py-2 px-3 w-full space-y-2">
            <h1 class="text-sm textgray-700 font-sans font-semibold">Content</h1>
            <div class="text-xs font-sans font-normal">{!! $content->content !!}</div>
        </div>
        @endif

        <div class="py-2 px-3 w-full space-y-2">
            <h1 class="text-sm textgray-700 font-sans font-semibold">Job Category</h1>
            <p class="text-xs font-sans font-normal">{{$job->job_type}}</p>
        </div>

        <div class="py-2 px-3 w-full space-y-2">
            <h1 class="text-sm textgray-700 font-sans font-semibold">Salary</h1>
            <p class="text-xs font-sans font-normal">{{$job->salary}}</p>
        </div>

        <div class="py-2 px-3 w-full space-y-2">
            <h1 class="text-sm textgray-700 font-sans font-semibold">Experience</h1>
            <p class="text-xs font-sans font-normal">{{$job->start_ex}} - {{$job->end_ex}}</p>
        </div>

        <div class="py-2 px-3 w-full space-y-2">
            <h1 class="text-sm textgray-700 font-sans font-semibold">Location</h1>
            <p class="text-xs font-sans font-normal">{{$job->location}}</p>
        </div>
    </div>


    @if(! Auth::check() || Auth::user()->role != 1 )
    <div class="max-w-5xl mx-auto shadow-sm rounded-md py-3 px-4 bg-white my-4 {{ $job->isApplied($job->id)? 'block' : 'hidden'}}">
        <div class="px-3 w-full flex justify-between items-center space-x-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
            </svg>

            @guest()
            <a href="{{route('login')}}" data-ripple-light="true" data-dialog-target="dialog" type="button" data-te-ripple-init data-te-ripple-color="light" class="flex items-center rounded-full bg-blue-700 px-6 pb-1 pt-1.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
                </svg>
                <p>Apply</p>
            </a>
            @endguest

            @auth
            @if($job->description_url)
            <a href="{{$job->description_url}}" target="_blank" type="button" data-te-ripple-init data-te-ripple-color="light" class="flex items-center rounded-full bg-blue-700 px-6 pb-1 pt-1.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
                </svg>
                <p>Apply</p>
            </a>
            @else
            <button data-ripple-light="true" data-dialog-target="dialog" type="button" data-te-ripple-init data-te-ripple-color="light" class="flex items-center rounded-full bg-blue-700 px-6 pb-1 pt-1.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
                </svg>
                <p>Apply</p>
            </button>
            @endif
            <div data-dialog-backdrop="dialog" data-dialog-backdrop-close="true" class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
                <div data-dialog="dialog" class="relative m-4 sm:w-3/6 w-full sm:min-w-[30%] sm:max-w-[40%] min-w-[80%] max-w-[90%] rounded-lg bg-white font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased shadow-2xl">
                    <div class="flex shrink-0 items-center p-4 font-sans text-2xl font-semibold leading-snug text-blue-gray-900 antialiased">
                        Apply
                    </div>
                    <div class="relative border-t border-b border-t-blue-gray-100 border-b-blue-gray-100 p-4 font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased">
                        <form action="{{route('apply-job', $job->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="max-w-xl ">
                                <h2 class="text-md font-sans font-semibold text-gray-800">Update Resume</h2>
                                <label class="block mb-2 text-xs py-3 font-normal text-gray-700 dark:text-white" for="file_input">Please update your resume here, it helps to find your <span class="text-blue-700">job</span></label>
                                <input name="resume" class="block w-full px-4 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">

                                @error('resume')
                                <div class="alert alert-danger text-xs text-red-600 py-2">{{ $message }}</div>
                                @enderror
                            </div>
                            @if(Auth::user()->resume)
                            <p class="text-blue-700 font-sans font-normal text-sm py-2">{{Auth::user()->resume->resume}}</p>
                            @endif

                            <button type="submit" data-ripple-light="true" data-dialog-close="true" class="middle none my-3 center rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 py-1.5 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                Continue
                            </button>
                        </form>
                    </div>
                    <!-- <div class="flex shrink-0 flex-wrap items-center justify-end p-4 text-blue-gray-500">
                            <button data-ripple-dark="true" data-dialog-close="true" class="middle none center mr-1 rounded-lg py-3 px-6 font-sans text-xs font-bold uppercase text-red-500 transition-all hover:bg-red-500/10 active:bg-red-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                Cancel
                            </button>
                            <button data-ripple-light="true" data-dialog-close="true" class="middle none center rounded-lg bg-gradient-to-tr from-green-600 to-green-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                Confirm
                            </button>
                        </div> -->
                </div>
            </div>
            @endauth
        </div>
    </div>



    <div class="max-w-5xl mx-auto shadow-sm rounded-md py-3 px-4 bg-gray-50 my-4 {{ $job->isApplied($job->id)? 'hidden' : 'block'}}">
        <div class="px-3 w-full flex space-x-2 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-green-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
            </svg>
            <h2 class="text-sm font-sans font-normal text-green-600">Applied</h2>
        </div>
    </div>
    @endif

</div>