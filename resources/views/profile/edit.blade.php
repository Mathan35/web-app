<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">

                @if (session()->has('message'))
                <div class="alert alert-success my-2 ">
                    <div class="font-regular relative shadow-md flex items-center w-full max-w-screen-md rounded-lg bg-green-100 px-4 py-1.5 text-base text-white" data-dismissible="alert">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="mt-px h-4 w-4 text-gray-700">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="ml-2 mr-12">
                            <h5 class="block font-sans text-sm font-semibold leading-snug tracking-normal text-gray-700 antialiased">
                                {{ session('message') }}
                            </h5>

                        </div>

                    </div>
                </div>
                @endif

                <form action="{{route('store-resume')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="max-w-xl">
                        <h2 class="text-md font-sans font-semibold text-gray-800">Update Resume</h2>
                        <label class="block mb-2 text-xs py-3 font-normal text-gray-700 dark:text-white" for="file_input">Please update your resume here, it helps to find your <span class="text-blue-700">job</span></label>
                        <input name="resume" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">

                        @error('resume')
                        <div class="alert alert-danger text-xs text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    @if(Auth::user()->resume)
                    <p class="text-blue-700 font-sans font-normal text-sm py-2">{{Auth::user()->resume->resume}}</p>
                    @endif
                    <x-primary-button class="mt-6">{{ __('Save') }}</x-primary-button>
                </form>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>