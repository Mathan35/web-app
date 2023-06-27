<div>
    <x-mail-layout>
        <div class="max-w-5xl sm:mx-auto px-2 sm:px-0 shadow-md py-10 my-10 text-center mx-2">
            <a href="/" class="text-slate-600 text-2xl font-sans font-bold" style="font-family: 'Belanosima', sans-serif;">Software<span class="text-blue-800">Jobs</span></a>
            <h2 class="text-gray-700 font-sans text-sm py-4">Job Title :- {{$job_title}}</h2>
            <h2 class="text-gray-700 font-sans text-sm py-4">Location :- {{$location}}</h2>
            <h2 class="text-lg font-sans font-semibold text-gray-800 mt-6">Your application has beed sent..!</h2>
            <p class="text-xs text-gray-700 py-6 font-sans font-normal w-8/12 mx-auto">If your application is selected, a representative from the company's HR or recruitment team will contact you shortly.
                Please keep an eye on your job profile's status.</p>
        </div>
    </x-mail-layout>
</div>