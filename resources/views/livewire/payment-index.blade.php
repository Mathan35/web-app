  <div>
      <div class="mx-6 my-2 space-y-2">
          <div class="bg-white shadow rounded-md py-3 px-4 mt-4">
              <h1 class="text-md font-sans font-semibold text-gray-800">
                  Payment List's
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

              <div class="flex justify-end space-x-2 items-center">
                  <div>
                      <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Date</label>
                      <input wire:model="start_date" type="date" name="start_date" id="start_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                  </div>
                  <div>
                      <label for="end_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End Date</label>
                      <input wire:model="end_date" type="date" name="end_date" id="end_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                  </div>
                  @if($start_date != null || $end_date != null)
                    <div class="pt-6 cursor-pointer">
                        <p wire:click="resetFilter" class="text-blue-700 font-sans font-semibold">Reset filter</p>
                    </div>
                  @endif

              </div>

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
                                              Job Title
                                          </th>
                                          <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                              Payment ID
                                          </th>
                                          <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                              Razorpay payment ID
                                          </th>
                                          <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                              Razorpay payment link ID
                                          </th>
                                          <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                              Status
                                          </th>
                                          <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                              Date
                                          </th>
                                          <th scope="col" class="px-6 py-4">Payment</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @forelse($payments as $payment)
                                      <tr class="border-b dark:border-neutral-500">
                                          <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">
                                              1
                                          </td>
                                          <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                              {{ $payment->job->job_title }}
                                          </td>
                                          <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                              {{ $payment->payment_id }}
                                          </td>
                                          <td class="whitespace-nowrap font-medium {{$payment->status === 'approved'? 'text-green-700' : 'text-red-700'}} border-r px-6 py-4 dark:border-neutral-500">
                                              {{ $payment->razorpay_payment_id }}
                                          </td>
                                          <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                              {{ $payment->razorpay_payment_link_id}}
                                          </td>
                                          <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                              {{ $payment->status }}
                                          </td>
                                          <td class="whitespace-nowrap border-r px-6 py-4 font-medium {{$payment->created_by ==='admin'? 'text-blue-700' : 'text-green-700'}} dark:border-neutral-500">
                                              <p class="bg-gray-100 py-1 px-2 rounded-full">{{ $payment->created_at->format('M d, Y h:i A') }}</p>
                                          </td>

                                          <td class="whitespace-nowrap px-6 py-4 ">
                                              {{ $payment->job->hot_job === 1? config('app.payment.job')+config('app.payment.extra'):config('app.payment.job')}}
                                          </td>
                                      </tr>
                                      @empty
                                      <p class="text-center font-sans font-medium text-gray-700">No results found..!</p>
                                      @endforelse
                                  </tbody>
                              </table>

                              <div class="my-4">
                                  {{ $payments->links() }}
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </div>