<div>
    <x-mail-layout>
        <div class="max-w-5xl sm:mx-auto px-2 sm:px-0 shadow-md py-10 my-10 text-center mx-2">
            <a href="/" class="text-slate-600 text-2xl font-sans font-bold" style="font-family: 'Belanosima', sans-serif;">Software<span class="text-blue-800">Jobs</span></a>
            <h2 class="text-lg font-sans font-semibold text-gray-800 mt-6">Job Posting Request from {{$user_name}}</h2>
            <div class="border border-gray-200 rounded-md py-2 px-2 my-2">
                <h2 class="text-gray-700 font-sans text-sm py-4">Job Title :- {{$job->job_title}}</h2>
                <h2 class="text-gray-700 font-sans text-sm py-4">Company Name :- {{$job->company_name}}</h2>
                <h2 class="text-gray-700 font-sans text-sm py-4">Location :- {{$job->location}}</h2>
            </div>
        </div>
    </x-mail-layout>
</div>