<div class="px-2">

    <div class="max-w-5xl mx-auto shadow-sm rounded-md py-4 px-4 bg-white space-y-2 my-3">
        <div>
            @if (session()->has('message'))
            <div class="alert alert-success">
                <div class="font-regular relative flex items-center w-full max-w-screen-md rounded-lg bg-gray-300 px-4 py-1.5 text-base text-white" data-dismissible="alert">
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
        </div>
        <p class="text-gray-800 font-bold text-sm font-sans">Get an <span class="text-indigo-600">email</span> of all new jobs</p>
        <div class="relative flex h-10 w-full ">
            <div class="relative w-full focus:ring-0 focus:outline-none focus:border-gray-50 border border-gray-300 rounded-md" data-te-input-wrapper-init>
                <input type="text" wire:model='email' class="peer focus:outline-none focus:ring-0 focus:border-none block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlInput1" placeholder="Email address" />
            </div>
            <button wire:click='updateEmail' data-te-ripple-init data-te-ripple-color="light" class="!absolute right-1 top-1 z-10 select-none rounded bg-pink-500 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none peer-placeholder-shown:pointer-events-none peer-placeholder-shown:bg-blue-gray-500 peer-placeholder-shown:opacity-50 peer-placeholder-shown:shadow-none" type="button">
                Submit
            </button>
        </div>
        @error('email') <span class="error text-xs text-red-700 font-sans">{{ $message }}</span> @enderror
    </div>
</div>