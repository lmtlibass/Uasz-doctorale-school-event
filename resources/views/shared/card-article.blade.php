@php
     $date ??= '';
     $title ??= '';
     $content ??= '';
     $tags ??= '';
     $cardroute ??= '';
     $argument ??= '';
@endphp

<div
     class=" max-w-sm w-64  mt-10 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

     <div class="p-2">
          <p>{{ $date }}</p>
          <p>
          <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
               {{ $title }}
          </h5>
          </p>
          <p class="mb-3 h-20 text-sm font-normal text-gray-700 dark:text-gray-400">
               {!! substr($content, 0, 100) !!} [...]</p>

          <div class="flex flex-col items-flex-start justify-between">
               <h6 class="mb-2 text-sm  tracking-tight text-gray-300 dark:text-white">
                    {{ $tags }}
               </h6>
               <a href="{{ route('article.' . $cardroute . '.show', $argument) }}"
                    class="text-green-500 bg-transparent border-green-800 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:text-white">
                    Voir l'article <i class="fas fa-arrow-right"></i>
               </a>
          </div>
     </div>

</div>
