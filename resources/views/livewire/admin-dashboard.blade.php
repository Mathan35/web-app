<div>
    <div class="grid grid-flow-col auto-cols-max space-x-4 gap-10 mx-6">
        <div class="relative mt-6 flexflex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="px-6 py-3 text-center">
                <p class="text-sm text-gray-700 font-sans font-medium">Employee Jobs</p>
                <p>{{$data['employee_jobs']}}</p>
            </div>
        </div>
        <div class="relative mt-6 flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="px-6 py-3 text-center">
                <p class="text-sm text-gray-700 font-sans font-medium">Admin Jobs</p>
                <p>{{$data['admin_jobs']}}</p>
            </div>
        </div>
        <div class="relative mt-6 flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="px-6 py-3 text-center">
                <p class="text-sm text-gray-700 font-sans font-medium">Total Students</p>
                <p>{{$data['total_students']}}</p>
            </div>
        </div>
        <div class="relative mt-6 flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="px-6 py-3 text-center">
                <p class="text-sm text-gray-700 font-sans font-medium">Total Employees</p>
                <p>{{$data['total_employees']}}</p>
            </div>
        </div>
        <div class="relative mt-6 flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="px-6 py-3 text-center">
                <p class="text-sm text-gray-700 font-sans font-medium">Total Applies</p>
                <p>{{$data['total_applies']}}</p>
            </div>
        </div>
        <div class="relative mt-6 flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="px-6 py-3 text-center">
                <p class="text-sm text-gray-700 font-sans font-medium">Total Payments</p>
                <p>{{$data['payments']}}</p>
            </div>
        </div>
    </div>

    <div class="space-x-4 flex items-center">
        <div class="shadow-md rounded-xl py-3 px-4 w-72 bg-white mx-6 my-4 space-y-3">
            <h2 class="text-md font-sans font-semibold text-gray-800 ">Today Payment's</h2>
            <p class="text-sm font-sans font-semibold text-blue-700">{{$data['today_pay']}}</p>
        </div>
        <div class="shadow-md rounded-xl py-3 px-4 w-72 bg-white mx-6 my-4 space-y-3">
            <h2 class="text-md font-sans font-semibold text-gray-800 ">Total Payment's</h2>
            <p class="text-sm font-sans font-semibold text-blue-700">{{$data['pay']}}</p>
        </div>
    </div>



    <div class="space-x-4 flex items-center">
        <div class="shadow-md rounded-xl py-3 px-4 w-72 bg-white mx-6 my-4 space-y-3">
            <h2 class="text-md font-sans font-semibold text-blue-800 ">Today job stats</h2>
            <div class="flex items-center space-x-2">
                <div class="shadow bg-gray-100 rounded-sm py-2 px-2">
                    <h2 class="text-xs font-sans font-medium">Admin jobs</h2>
                    <p class="text-xs font-sans font-medium">{{$data['today_admin_jobs']}}</p>
                </div>
                <div class="shadow bg-gray-100 rounded-sm py-2 px-2">
                    <h2 class="text-xs font-sans font-medium">Employee Jobs</h2>
                    <p class="text-xs font-sans font-medium">{{$data['today_employee_jobs']}}</p>
                </div>
            </div>
        </div>

        <div class="shadow-md rounded-xl py-3 px-4 w-72 bg-white mx-6 my-4 space-y-3">
            <h2 class="text-md font-sans font-semibold text-blue-800 ">Today Applies stats</h2>
            <div class="flex items-center space-x-2">
                <div class="shadow bg-gray-100 rounded-sm py-2 px-2">
                    <h2 class="text-xs font-sans font-medium">Admin jobs</h2>
                    <p class="text-xs font-sans font-medium">{{$data['today_admin_applies']}}</p>
                </div>
                <div class="shadow bg-gray-100 rounded-sm py-2 px-2">
                    <h2 class="text-xs font-sans font-medium">Employee Jobs</h2>
                    <p class="text-xs font-sans font-medium">{{$data['today_employee_applies']}}</p>
                </div>
            </div>
        </div>

        <div class="shadow-md rounded-xl py-3 px-4 w-72 bg-white mx-6 my-4 space-y-3">
            <h2 class="text-md font-sans font-semibold text-blue-800 ">Today View stats</h2>
            <div class="flex items-center space-x-2">
                <div class="shadow bg-gray-100 rounded-sm py-2 px-2">
                    <h2 class="text-xs font-sans font-medium">Admin Jobs</h2>
                    <p class="text-xs font-sans font-medium">{{$data['today_admin_views']}}</p>
                </div>
                <div class="shadow bg-gray-100 rounded-sm py-2 px-2">
                    <h2 class="text-xs font-sans font-medium">Employee Jobs</h2>
                    <p class="text-xs font-sans font-medium">{{$data['today_employee_views']}}</p>
                </div>
            </div>
        </div>
    </div>


</div>