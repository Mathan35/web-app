<div class="mx-6 my-2 space-y-2">
    <div class="bg-white shadow rounded-md py-3 px-4 mt-4">
        <h1 class="text-md font-sans font-semibold text-gray-800">
            Employee's List
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

        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                            <thead class="border-b font-medium dark:border-neutral-500">
                                <tr>
                                    <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                        #
                                    </th>
                                    <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                        Name
                                    </th>
                                    <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                        Email
                                    </th>
                                    <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                        Phone
                                    </th>
                                    <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                        Applied jobs
                                    </th>
                                    <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                        Resume
                                    </th>
                                    <th scope="col" class="px-6 py-4">Status</th>
                                    <th scope="col" class="px-6 py-4">View Jobs</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employees as $employee)
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">
                                        1
                                    </td>
                                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ $employee->name }}
                                    </td>
                                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ $employee->email }}
                                    </td>
                                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ $employee->phone }}
                                    </td>
                                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ $employee->jobs->count()}}
                                    </td>
                                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ $employee->resume?? 'Not added' }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">

                                        <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                                            <input wire:change="changeStatus('{{ $employee->id }}')" {{ $employee->status === 1? 'checked' : ''}} class="relative float-left -ml-[1.4rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] cursor-none appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] indeterminate:border-primary indeterminate:bg-primary indeterminate:after:absolute indeterminate:after:ml-[0.2rem] indeterminate:after:mt-[6px] indeterminate:after:w-[0.5rem] indeterminate:after:border-[0.05rem] indeterminate:after:border-solid indeterminate:after:border-white hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent indeterminate:focus:after:w-[0.5rem] indeterminate:focus:after:rounded-none indeterminate:focus:after:border-[0.125rem] indeterminate:focus:after:border-b-0 indeterminate:focus:after:border-l-0 indeterminate:focus:after:border-r-0 dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:indeterminate:border-primary dark:indeterminate:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]" type="checkbox" value="" id="flexCheckIndeterminate" />
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{route('admin.employees.show', $employee->id)}}">View</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="my-4">
                            {{ $employees->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>