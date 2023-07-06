@php
     $date ??= '';
     $title ??= '';
     $description ??= '';
     $image ??= '';
     $pj ??= '';
     $cardroute ??= '';
     $argument ??= '';
@endphp
  
<div
     class=" max-w-sm w-64 h-96 mt-10 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
     <div class="">
          {{-- <img src="{{ asset('storage/appelles-image/' . $image) }}" alt="Image"> --}}

          <img class="rounded-t-lg h-40 w-full" src="/storage/{{  $image }}" alt="" />
     </div>
     <div class="p-2">
          <p>{{ $date }}</p>
          <p>
          <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
               {{ $title }}
          </h5>
          </p>
          <p class="mb-3 h-20 text-sm font-normal text-gray-700 dark:text-gray-400">
               {!! substr($description, 0, 100) !!} [...]</p>

          <div class="flex items-center justify-between">
               <a href="{{ asset('storage/' . $pj) }}" class="text-sm"
                    onclick="event.preventDefault(); downloadPDF('{{ asset('storage/' . $pj) }}');">
                    <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" stroke-width="1.5"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                         <path stroke-linecap="round" stroke-linejoin="round"
                              d="M7.5 7.5h-.75A2.25 2.25 0 004.5 9.75v7.5a2.25 2.25 0 002.25 2.25h7.5a2.25 2.25 0 002.25-2.25v-7.5a2.25 2.25 0 00-2.25-2.25h-.75m-6 3.75l3 3m0 0l3-3m-3 3V1.5m6 9h.75a2.25 2.25 0 012.25 2.25v7.5a2.25 2.25 0 01-2.25 2.25h-7.5a2.25 2.25 0 01-2.25-2.25v-.75">
                         </path>
                    </svg>
               </a>
               @if (Request::is('appelle'))
                    <a href="{{ route( 'appelle.show', $argument) }}"
                         class="text-white bg-green-700 hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Details
                    </a>
               @else
                    <a href="{{ route('responsable.' . $cardroute . '.show', $argument) }}"
                         class="text-white bg-green-700 hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Details
                    </a>
               @endif
          </div>









     </div>
</div>





<script>
     function downloadPDF(url) {
          var xhr = new XMLHttpRequest();
          xhr.open('GET', url, true);
          xhr.responseType = 'blob';
          xhr.onload = function(e) {
               if (this.status == 200) {
                    var blob = new Blob([this.response], {
                         type: 'application/pdf'
                    });
                    var url = window.URL.createObjectURL(blob);
                    var a = document.createElement('a');
                    a.href = url;
                    a.download = 'appelle.pdf';
                    document.body.appendChild(a);
                    a.click();
                    document.body.removeChild(a);
                    window.URL.revokeObjectURL(url);
               }
          };
          xhr.send();
     }
</script>
