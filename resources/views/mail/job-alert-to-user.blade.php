<div>
    <x-mail-layout>
        <div class="max-w-5xl sm:mx-auto px-2 sm:px-0 shadow-md py-10 my-10 text-center mx-2">
            <a href="/" class="text-slate-600 text-2xl font-sans font-bold" style="font-family: 'Belanosima', sans-serif;">Software<span class="text-blue-800">Jobs</span></a>
            <div class="text-left px-2 sm:px-10">
                <h2 class="text-gray-700 font-sans text-sm py-2">Hello <span class="text-blue-700">{{$user_name}}</span>,</h2>
                <h2 class="text-lg font-sans font-semibold text-gray-800">You have new job opportunities to apply for.</h2>

                <div class="shadow-sm rounded-md py-4">
                    @foreach($jobs as $job)
                    <div class="border border-gray-300 rounded-md py-2 px-2 space-y-1.5 my-2">
                        <h1 class="text-sm font-sans font-semibold text-gray-800">{{$job->job_title}}</h1>
                        <h1 class="text-xs font-sans font-normal text-gray-600">{{$job->company_name}}</h1>
                        <a class="text-blue-700 text-xs underline rounded-full my-3" href="{{$app_url}}/job/{{$job->id}}">Apply now</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-mail-layout>
</div>