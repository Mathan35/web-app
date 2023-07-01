<x-admin-layout>
    <div class="mx-6 my-2 space-y-2">
        <div class="bg-white shadow rounded-md py-3 px-4 mt-4">
            <h1 class="text-md font-sans font-semibold text-gray-800">
                Create job's
            </h1>
        </div>

        <div class="bg-white shadow rounded-md py-3 px-4 mt-4">

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

            <div>
                <style>
                    #container {
                        width: 1000px;
                        margin: 20px auto;
                    }

                    .ck-editor__editable[role="textbox"] {
                        /* editing area */
                        min-height: 200px;
                    }

                    .ck-content {
                        padding-left: 30px !important;
                    }

                    .ck-editor {
                        width: 100% !important;
                    }
                </style>
                <form action="{{route('admin.jobs.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class=" bg-white shadow-sm rounded-md my-10 py-6 px-5 space-y-4">
                        <h2 class="text-xl font-sans text-gray-800 font-bold text-center">Job posting request</h2>
                        <p class="text-xs font-sans text-gray-700 text-center">Submit your job request we will post you within a hour!</p>

                        <div class=" space-y-2">
                            <label class="text-sm text-gray-700 font-bold font-sans w-full sm:w-52" for="">Job Title</label>
                            <input name='job_title' placeholder="Full stack developer ( Mern )" class="border shadow-sm border-gray-200 text-sm rounded-md w-full py-1 px-2 font-sans focus:border-gray-400 focus:outline-none" type="text" id="">
                        </div>
                        @error('job_title')
                        <div class="alert alert-danger text-xs text-red-600">{{ $message }}</div>
                        @enderror
                        <div class=" space-y-2">
                            <label class="text-sm text-gray-700 font-bold font-sans w-full sm:w-52" for="">Company Name</label>
                            <input name='company_name' placeholder="Amazon" class="border shadow-sm border-gray-200 text-sm rounded-md w-full py-1 px-2 font-sans focus:border-gray-400 focus:outline-none" type="text" id="">
                        </div>

                        @error('company_name')
                        <div class="alert alert-danger text-xs text-red-600">{{ $message }}</div>
                        @enderror

                        <div class=" border border-gray-300 rounded-md py-4 px-3">
                            <div class="space-y-2">
                                <label class="text-sm text-gray-700 font-bold font-sans w-full sm:w-52" for="">Job details</label>
                                <textarea name="content" id="editor" class="border shadow-sm border-gray-200 text-sm mt-3 sm:mt-0 rounded-md w-full py-1 px-2 font-sans focus:border-gray-400 focus:outline-none" rows="4" id=""></textarea>
                            </div>
                            <p class="text-xs font-bold text-gray-700 my-3 text-center">Or</p>
                            <div class="space-y-2">
                                <label class="text-sm text-gray-700 font-bold font-sans w-full sm:w-52" for="">Job Description url</label>
                                <input name='description_url' placeholder="https://amazon/carears/job" class="border shadow-sm border-gray-200 text-sm rounded-md w-full py-1 px-2 font-sans focus:border-gray-400 focus:outline-none" type="text" id="">
                            </div>
                            <p class="text-xs font-sans text-gray-500 py-2">If you provide a URL, the job application button will redirect applicants to that URL. Otherwise, we will collect the students' details and display them in your panel.</p>

                            @error('description_url')
                            <div class="alert alert-danger text-xs text-red-600">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm text-gray-700 font-bold font-sans w-full sm:w-52" for="">Location</label>
                            <input name='location' class="border border-gray-200 text-sm rounded-md w-full shadow-sm py-1 px-2 font-sans focus:border-gray-400 focus:outline-none" placeholder="ex,.. Chennai, Banglore" type="text" id="">
                        </div>
                        @error('location')
                        <div class="alert alert-danger text-xs text-red-600">{{ $message }}</div>
                        @enderror

                        <div class="space-y-2">
                            <label class="text-sm text-gray-700 font-bold font-sans w-full sm:w-52" for="">Job Category</label>
                            <input name='category' class="border border-gray-200 text-sm rounded-md shadow-sm w-full py-1 px-2 font-sans focus:border-gray-400 focus:outline-none" type="text" id="" placeholder="Ex,.. front end developer">
                        </div>
                        @error('category')
                        <div class="alert alert-danger text-xs text-red-600">{{ $message }}</div>
                        @enderror

                        <div class="space-y-2">
                            <label class="text-sm text-gray-700 font-bold font-sans w-full sm:w-52" for="">Job Type</label>
                            <div>
                                <select name="job_type" data-te-select-init class="flex w-full shadow-sm text-xs">
                                    <option value="WFO">WFO</option>
                                    <option value="Remote">Remote</option>
                                    <option value="On-site">On-site</option>
                                    <option value="Hybrid">Hybrid</option>
                                </select>
                                <label data-te-select-label-ref>Filter</label>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm text-gray-700 font-bold font-sans w-full sm:w-52" for="">Salary ( optional )</label>
                            <div>
                                <input name='salary' class="border border-gray-200 text-sm shadow-sm rounded-md w-full py-1 px-2 font-sans focus:border-gray-400 focus:outline-none" type="text" id="">
                                <p class="text-xs text-gray-600 font-sans mt-2">Examples: "120,000 – 145,000"</p>
                            </div>
                        </div>
                        @error('salary')
                        <div class="alert alert-danger text-xs text-red-600">{{ $message }}</div>
                        @enderror

                        <div class="space-y-2">
                            <label class="text-sm text-gray-700 font-bold font-sans w-full sm:w-52" for="">Experience</label>
                            <div class="flex items-center space-x-2">
                                <div>
                                    <select name="start_ex" data-te-select-init class="flex shadow-sm w-full">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                    </select>
                                    <label data-te-select-label-ref>Filter</label>
                                </div>
                                <div>
                                    <select name="end_ex" data-te-select-init class="flex w-full shadow-sm">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                    </select>
                                    <label data-te-select-label-ref>Filter</label>
                                </div>
                            </div>
                        </div>

                        @error('end_ex')
                        <div class="alert alert-danger text-xs text-red-600">{{ $message }}</div>
                        @enderror

                        <div class="border border-gray-200 rounded-md py-3 px-2">
                            <h2 class="text-sm font-sans font-semibold text-center">Enhance Your Job Listing</h2>
                            <div class="flex space-x-2 items-start py-2 px-4">
                                <label class="relative flex cursor-pointer items-center rounded-full " for="checkbox" data-ripple-dark="true">
                                    <input type="checkbox" name="hot_job" class="before:content[''] shadow-sm peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-pink-500 checked:bg-pink-500 checked:before:bg-pink-500 hover:before:opacity-10" id="checkbox" checked />
                                    <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-white opacity-0 transition-opacity peer-checked:opacity-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </label>
                                <p class="text-sm font-medium txt-gray-800 font-sans">Add "Hot Job" tag for your job (50 + 10rs )</p>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm text-gray-700 font-bold font-sans w-full sm:w-52 mb-3" for="">Company Logo ( optional )</label>
                            <div class="mb-3">
                                <input name="company_logo" class="relative m-0 block shadow-sm w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.27rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary" type="file" />
                            </div>
                        </div>

                        <button type="submit" class="flex items-center rounded-full bg-blue-900 text-center mx-auto space-x-1 w-fit px-6 pb-1 pt-1 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]" data-te-ripple-init data-te-ripple-color="light" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
                            </svg>
                            <p>Submit Request</p>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>