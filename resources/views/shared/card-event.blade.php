
@php
     $date ??= '';
     $title ??= '';
     $description ??= '';
     $image ??= '';
@endphp


<div
     class=" max-w-sm w-80 mt-10 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
     <a href="#">
          <img class="rounded-t-lg  w-full" src="/storage/{{$image}}" alt="" />
     </a>
     <div class="p-5">
          <p>{{ $date }}</p>
          <p>
               <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ $title }}
               </h5>
          </p>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
               {{ $description }}</p>
            
           <a href="{{ asset('storage/' . $pj) }}" onclick="event.preventDefault(); downloadPDF('{{ asset('storage/' . $pj) }}');">Télécharger le fichier PDF</a>

          <a href="#"
               class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#249876] rounded-lg hover:bg-[#249876] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
               Details
               <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                         d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                         clip-rule="evenodd"></path>
               </svg>
          </a>
     </div>
</div>




<script>
    function downloadPDF(url) {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.responseType = 'blob';
        xhr.onload = function(e) {
            if (this.status == 200) {
                var blob = new Blob([this.response], {type: 'application/pdf'});
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
