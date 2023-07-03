@extends('......base.layouts')

@section('title', 'Detail de evenements{{ $evenement->title }}')

<div class="flex flex-col">
     @include('......shared.navebar')
     @include('......shared.sidebar')
</div>

<div class="px-12 py-10 -top-10 mt-32 mx-auto ml-28 ">
     <div class="shadow-lg p-10 ml-32 rounded-xl">
          <div class="flex justify-end gap-3">
               <a href="{{ route('responsable.evenement.edit', $evenement) }}"
                    class="px-2  flex justify-between items-center text-sm font-medium leading-5 text-white transition-colors duration-150 bg-[#249876] border border-transparent rounded-lg active:bg-blue-600 hover:bg-[028765] focus:outline-none focus:shadow-outline-blue">
                    Modifier
                    <svg class="h-8 w-6 ml-2 text-white" width="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                    </svg>
               </a>
               <a href="{{ route('responsable.evenement.destroy', $evenement) }}"
                    class="px-2  flex justify-between items-center text-sm font-medium leading-5 text-white transition-colors duration-150 bg-[#ce0033] border border-transparent rounded-lg active:bg-blue-600 hover:bg-[ce0032] focus:outline-none focus:shadow-outline-blue">
                    Supprimer
                    <svg class="h-8 w-6 ml-2 text-white" width="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                    </svg>
               </a>
          </div>
          <div class="grid grid-cols-1 gap-2">
               <h2 class="mb-4 mt-8 mx-auto text-xl font-bold text-gray-900 dark:text-white md:text-xl lg:text-xl ">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                         {{ $evenement->title }}</span>
               </h2>
               <div class="flex justify-between mt-5">
                    <div class="flex">
                         <p class="text-gray-500 text-sm ml-2">Publié le {{ $evenement->created_at->format('d-m-Y') }}</p>
                    </div>
                    <div class="flex">
                         <p class="text-gray-500 text-sm ml-2">Mis à jour le {{ $evenement->updated_at->format('d-m-Y') }}
                         </p>
                    </div>
               </div>
               <div>
                    <p class="text-gray-500 text-sm mt-2">{!! $evenement->description !!}</p>
               </div>
          </div>
          <div class="mt-12 items-center flex justify-between">
               <a href="{{ asset('storage/' . $evenement->pj) }}" class="text-sm flex"
                    onclick="event.preventDefault(); downloadPDF('{{ asset('storage/' . $evenement->pj) }}');">
                    <span class=" text-green-500">
                         Telecharger fichier</span>
                    <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" stroke-width="1.5"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                         
                         <path stroke-linecap="round" stroke-linejoin="round"
                              d="M7.5 7.5h-.75A2.25 2.25 0 004.5 9.75v7.5a2.25 2.25 0 002.25 2.25h7.5a2.25 2.25 0 002.25-2.25v-7.5a2.25 2.25 0 00-2.25-2.25h-.75m-6 3.75l3 3m0 0l3-3m-3 3V1.5m6 9h.75a2.25 2.25 0 012.25 2.25v7.5a2.25 2.25 0 01-2.25 2.25h-7.5a2.25 2.25 0 01-2.25-2.25v-.75">
                         </path>
                    </svg>
               </a>
               

              
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
                    a.download = 'evenement.pdf';
                    document.body.appendChild(a);
                    a.click();
                    document.body.removeChild(a);
                    window.URL.revokeObjectURL(url);
               }
          };
          xhr.send();
     }
</script>