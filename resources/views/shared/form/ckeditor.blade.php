@php
     $type ??= '';
     $name ??= '';
     $placeholder ??= '';
     $required ??= false;
     $label ??= '';
@endphp
<div class="mt-8 mb-8">
     <label class="block mb-2 text-xl dark:text-white">{{ $label }} </label>
     <textarea name="{{ $name }}" 
          class="bg-gray-500 "
           required="{{ $required }}"> 
          {{$placeholder}}</textarea>
     {{-- errors --}}

     @error($name)
          <div class="text-red-500 mt-2 text-sm">
               {{ $message }}
          </div>
     @enderror
</div>



{{-- JS --}}

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
     CKEDITOR.replace('description');
</script>
