<div>
    <x-mail-layout>
        <div class="max-w-5xl sm:mx-auto px-2 sm:px-0 shadow-md py-10 my-10 text-center mx-2">
            <a href="/" class="text-slate-600 text-2xl font-sans font-bold" style="font-family: 'Belanosima', sans-serif;">Software<span class="text-blue-800">Jobs</span></a>
            <h2 class="text-gray-700 font-sans text-sm py-4">Job Title :- {{$job_title}}</h2>
            <h2 class="text-lg font-sans font-semibold text-gray-800 mt-6">You have received an application from {{$user_name}}</h2>
            <a class="text-blue-600" href="{{$app_url}}/job-history/details">View Application</a>
        </div>
    </x-mail-layout>
</div>