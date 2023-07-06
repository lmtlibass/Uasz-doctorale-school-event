@php
     $type ??= '';
     $name ??= '';
     $placeholder ??= '';
     $value ??= '';
     $label ??= '';
@endphp
<div>
     <label for="{{ $name }}"
          class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
     <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}"
          class="block w-full border border-gray-200 rounded-md focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 @if ($type === 'file')  shadow-sm  text-sm focus:z-10  file:bg-transparent file:border-0 file:bg-gray-100 file:mr-4 file:py-2 file:px-4 dark:file:bg-gray-700 dark:file:text-gray-400 @else bg-gray-50  text-gray-900  sm:text-sm    p-2.5   dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500 @endif"
          @if ($type === 'date') autocomplete="date"
               format="Y-m-d" @endif"
          placeholder="{{ $placeholder }}">
     @error($name)
          <div class="text-red-500 mt-2 text-sm">
               {{ $message }}
          </div>
     @enderror
</div>
