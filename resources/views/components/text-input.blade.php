@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:ring-indigo-100 focus:ring-none hover:ring-none dark:focus:ring-indigo-600 rounded-md shadow-sm py-2 px-2']) !!}>
