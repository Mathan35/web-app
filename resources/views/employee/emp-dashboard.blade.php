<x-app-layout>
    <div class="max-w-5xl mx-auto my-16">
        <div class="">
            <!-- <div class="p-4 mx-2 sm:p-4 bg-blue-50 dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl ">
                    <a href="{{route('employee-request')}}" type="button" data-te-ripple-init data-te-ripple-color="light" class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        Post jobs
                    </a>
                </div>
            </div> -->
            <div class="p-4 mx-2 sm:p-4 bg-white dark:bg-gray-800 shadow sm:rounded-lg rounded-sm">
                <div class="max-w-5xl flex items-center justify-between ">
                    <a href="{{route('employee-request')}}" type="button" data-te-ripple-init data-te-ripple-color="light" class="inline-block rounded bg-blue-700 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        Post jobs
                    </a>
                    <a class="text-sm items-center text-blue-700 font-sans" href="{{route('job-history')}}">Your job history and details <i class="text-xs fa-solid fa-share"></i></a>
                </div>
            </div>
            <div data-tab-content="" class="sm:py-8 py-4 px-2 sm:px-0">
                <div class="block opacity-100" id="app" role="tabpanel">
                    <div class="">
                        <div class="max-w-5xl mx-auto sm:px-2 space-y-6">
                            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg rounded-sm">
                                @if (Session::has('message'))
                                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                                    {{ Session::get('message') }}.
                                </div>
                                @endif
                                <div class="max-w-xl">
                                    <form action="{{route('profile.image')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Profile</label>
                                        <div class="py-3 px-3">
                                            <img class="w-14 h-14 mr-2 rounded-full" src="{{asset('public/profile/'.Auth::user()->profile)}}" alt="user photo">
                                        </div>
                                        <input name="profile" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                        <div class="flex items-center gap-4 mt-5">
                                            <x-primary-button>{{ __('Save') }}</x-primary-button>

                                            @if (session('status') === 'profile')
                                            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                                <x-input-error :messages="$errors->get('profile')" class="mt-2" />

                            </div>
                            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg rounded-sm">
                                <div class="max-w-xl">
                                    @include('profile.partials.update-profile-information-form')
                                </div>
                            </div>

                            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg rounded-sm">
                                <div class="max-w-xl">
                                    @include('profile.partials.update-password-form')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>