<div>
    <header>
        <!-- Navigation bar -->
        <nav class="relative flex w-full items-center justify-between lg:bg-white bg-gray-50  py-2 text-neutral-600 shadow-sm hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 dark:text-neutral-200 md:flex-wrap md:justify-start" data-te-navbar-ref>
            <div class="flex w-full flex-wrap items-center justify-between px-3 max-w-6xl mx-auto">

                <div class="lg:block hidden">
                    <a href="/" class="text-slate-600 text-2xl font-sans font-bold" style="font-family: 'Belanosima', sans-serif;">Software<span class="text-blue-800">Jobs</span></a>
                </div>

                <div class="flex items-center">
                    <!-- Hamburger menu button -->
                    <button class="border-0 bg-transparent px-2 text-xl leading-none transition-shadow duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white lg:hidden" type="button" data-te-offcanvas-toggle data-te-target="#offcanvasExample" aria-controls="offcanvasExample" data-te-ripple-init data-te-ripple-color="light">
                        <!-- Hamburger menu icon -->
                        <span class="[&>svg]:w-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-7 w-7">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </span>
                    </button>
                </div>
                <!-- Navigation links -->
                <div class="!visible hidden grow basis-[100%] items-center lg:!flex lg:basis-auto lg:ml-24" id="navbarSupportedContentY" data-te-collapse-item>
                    <ul class="mr-auto flex flex-col lg:flex-row" data-te-navbar-nav-ref>
                        <li class="mb-4 lg:mb-0 lg:pr-2">
                            <a class="block transition hover:text-gray-900 font-sans font-medium duration-150 ease-in-out focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90 {{ Request::url() == route('home') ? 'text-blue-700' : '' }}" href="/" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Home</a>
                        </li>
                        <li class="mb-4 lg:mb-0 lg:pr-2">
                            <a class="block transition hover:text-gray-900 font-sans font-medium duration-150 ease-in-out focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90 {{ Request::url() == route('freshers') ? 'text-blue-700' : '' }}" href="{{route('freshers')}}" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Freshers</a>
                        </li>
                        <li class="mb-4 lg:mb-0 lg:pr-2">
                            <a class="block transition hover:text-gray-900 font-sans font-medium duration-150 ease-in-out focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90 {{ Request::url() == route('experience') ? 'text-blue-700' : '' }}" href="{{route('experience')}}" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Experience</a>
                        </li>
                        <li class="mb-2 lg:mb-0 lg:pr-2">
                            <a class="block transition hover:text-gray-900 font-sans font-medium duration-150 ease-in-out focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90" href="" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Free courses</a>
                        </li>
                    </ul>
                </div>

                @guest
                <div class="space-x-3">
                    <a href="{{route('login')}}" data-te-ripple-init data-te-ripple-color="light" class="inline-block rounded-full bg-blue-700 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        Login
                    </a>
                    <a href="{{route('register')}}" data-te-ripple-init data-te-ripple-color="dark" class="inline-block rounded-full bg-primary-accent-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out bg-blue-100 hover:bg-blue-200 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200">
                        Register
                    </a>
                </div>
                @endguest

                @auth

                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:mr-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 p-1 dark:text-white" type="button">
                    <span class="sr-only">Open user menu</span>
                    @if(Auth::user()->profile)
                    <img class="w-8 h-8 mr-2 rounded-full" src="{{asset('public/profile/'.Auth::user()->profile)}}" alt="user photo">
                    @else
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-1 border border-gray-600 p-1 rounded-full">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                    @endif

                    {{Auth::user()->name}}
                    <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div class="font-medium ">{{Auth::user()->name}}</div>
                        <div class="truncate">{{Auth::user()->email}}</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                        <li>
                            @if(Auth::user()->role == 0)
                            <a href="/profile" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white {{ Request::url() == route('profile.edit') ? 'text-blue-700' : '' }}">Profile</a>
                            @endif
                            @if(Auth::user()->role == 1)
                            <a href="{{route('employee-dashboard')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white {{ Request::url() == route('employee-dashboard') ? 'text-blue-700' : '' }}">Profile</a>
                            @endif
                        </li>
                        @if(Auth::user()->role == 0)
                        <li>
                            <a href="{{route('applied-jobs')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white {{ Request::url() == route('applied-jobs') ? 'text-blue-700' : '' }}">Applied Jobs</a>
                        </li>
                        @endif

                        @if(Auth::user()->role == 1)
                        <li>
                            <a href="{{route('employee-request')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white {{ Request::url() == route('employee-request') ? 'text-blue-700' : '' }}">Post Jobs</a>
                        </li>

                        <li>
                            <a href="{{route('job-history')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white {{ Request::url() == route('job-history') ? 'text-blue-700' : '' }}">Job History</a>
                        </li>
                        @endif

                        <!-- <li role="menuitem" class="block w-full cursor-pointer select-none rounded-md px-3 pt-[9px] pb-2 text-start leading-tight transition-all hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Logout</a>
                            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li> -->
                    </ul>
                    <div class="py-2">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
                @endauth
            </div>
        </nav>
    </header>
</div>

<div class="flex space-x-2">
    <div>
        <div class="invisible fixed bottom-0 left-0 top-0 z-[1045] flex w-80 max-w-full rounded-tr-lg rounded-br-lg -translate-x-full flex-col border-none bg-white bg-clip-padding text-neutral-700 shadow-md outline-none transition duration-300 ease-in-out dark:bg-neutral-800 dark:text-neutral-200 [&[data-te-offcanvas-show]]:transform-none" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" data-te-offcanvas-init>
            <div class="flex items-center justify-between p-4">
                <h5 class="mb-0 font-semibold leading-normal" id="offcanvasExampleLabel">
                    <a href="/" class="text-slate-600 text-2xl font-sans font-bold" style="font-family: 'Belanosima', sans-serif;">Software<span class="text-blue-800">Jobs</span></a>
                </h5>
                <button type="button" class="box-content rounded-none border-none opacity-50 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-offcanvas-dismiss>
                    <span class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </span>
                </button>
            </div>
            <div class="flex-grow overflow-y-auto p-4">
                <div>
                    <div class=" items-center lg:!flex lg:basis-auto lg:ml-24" id="navbarSupportedContentY" data-te-collapse-item>
                        <ul class="mr-auto flex flex-col lg:flex-row" data-te-navbar-nav-ref>
                            <li class="mb-4 lg:mb-0 lg:pr-2">
                                <a class="block transition hover:text-gray-900 font-sans font-semibold duration-150 ease-in-out focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90 {{ Request::url() == route('home') ? 'text-blue-700 shadow-md py-2 rounded-sm bg-gray-50 px-2' : '' }} " href="/" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Home</a>
                            </li>
                            <li class="mb-4 lg:mb-0 lg:pr-2">
                                <a class="block transition hover:text-gray-900 font-sans font-semibold duration-150 ease-in-out focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90 {{ Request::url() == route('freshers') ? 'text-blue-700 shadow-md py-2 rounded-sm bg-gray-50 px-2' : '' }}" href="{{route('freshers')}}" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Freshers</a>
                            </li>
                            <li class="mb-4 lg:mb-0 lg:pr-2">
                                <a class="block transition hover:text-gray-900 font-sans font-semibold duration-150 ease-in-out focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90 {{ Request::url() == route('experience') ? 'text-blue-700 shadow-md py-2 rounded-sm bg-gray-50 px-2' : '' }}" href="{{route('experience')}}" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Experience</a>
                            </li>
                            <li class="mb-2 lg:mb-0 lg:pr-2">
                                <a class="block transition hover:text-gray-900 font-sans font-semibold duration-150 ease-in-out focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90" href="" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Free courses</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>