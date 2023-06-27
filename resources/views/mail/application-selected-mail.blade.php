<div>
    <x-mail-layout>
        <div class="max-w-5xl sm:mx-auto px-2 sm:px-0 shadow-md py-10 my-10 text-center mx-2">
            <a href="/" class="text-slate-600 text-2xl font-sans font-bold" style="font-family: 'Belanosima', sans-serif;">Software<span class="text-blue-800">Jobs</span></a>
            <div class="text-left px-10">
                <h2 class="text-gray-700 font-sans text-sm py-2">Hello {{$user_name}},</h2>
                <h2 class="text-lg font-sans font-semibold text-gray-800">Congratulations! Your application has been selected for the role of {{$job_title}}</h2>
                <p class="text-xs font-sans text-gray-700 py-2">You will receive a call shortly. Please keep an eye on your email and phone.</p>
                <a class="text-white text-xs bg-blue-800 py-2 px-3 rounded-full mt-2" href="{{$app_url}}/applied/jobs">View job status</a>
            </div>
        </div>
    </x-mail-layout>
</div>