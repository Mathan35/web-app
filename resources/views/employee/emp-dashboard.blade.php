<x-app-layout>
    <div class="max-w-5xl mx-auto my-16">
        <div class="">
            <div class="p-4 mx-2 sm:p-4 bg-blue-50 dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl ">
                    <a class="text-sm items-center text-blue-700 font-sans" href="{{route('job-history')}}">Your job history and details <i class="text-xs fa-solid fa-share"></i></a>
                </div>
            </div>
            <div data-tab-content="" class="sm:py-8 py-4 px-2 sm:px-0">
                <div class="block opacity-100" id="app" role="tabpanel">
                    <div class="">
                        <div class="max-w-5xl mx-auto sm:px-2 space-y-6">
                            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                                <div class="max-w-xl">
                                    @include('profile.partials.update-profile-information-form')
                                </div>
                            </div>

                            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
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