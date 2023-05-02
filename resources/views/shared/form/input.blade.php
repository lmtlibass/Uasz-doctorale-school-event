@php
     $type ??= '';
     $name ??= '';
     $placeholder ??= '';
     $value ??='';
     $label ??= '';
@endphp
<div>
     <label for="{{ $name }}"
          class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
     <input type="{{ $type }}" 
          name="{{ $name }}" 
          id="{{ $name }}"
          value="{{$value}}"
          class=" @if ($type === 'file') block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 file:bg-transparent file:border-0 file:bg-gray-100 file:mr-4 file:py-2 file:px-4 dark:file:bg-gray-700 dark:file:text-gray-400 @else bg-gray-50 border border-gray-300 text-gray-900  sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 
          @endif 
          @if($type === 'date')
               autocomplete="date"
               format="Y-m-d"
          @endif" 
          placeholder="{{ $placeholder }}" >
     @error($name)
          <div class="text-red-500 mt-2 text-sm">
               {{ $message }}
          </div>
     @enderror
</div>
