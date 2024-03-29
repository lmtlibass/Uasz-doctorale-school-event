@extends('...base.layouts')

<div class="flex">
     @include('...shared.navebar')
     @include('...shared.sidebar')
</div>



<div class="px-8 mt-20 mx-auto sm:ml-64 mb-20">
     @if ($evenements === null || $evenements->isEmpty())
          <div class="text-center text-2xl text-gray-400">Aucun Evenement publié</div>
     @else
          @include('...shared.session-status')
          <div class="w-full mx-auto grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 justify-start">
               @foreach ($evenements as $evenement)
                    <div
                         class="flex flex-col max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700
                                   @if ($evenement->isPremium === 1) shadow-red-500 @endif">
                         <a href="#">
                              <img class="rounded-t-lg object-cover h-40" src="/storage/{{ $evenement->media }}"
                                   alt="" />
                         </a>
                         <div class="flex flex-col p-5 h-full">
                              <a href="#">
                                   <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $evenement->title }}
                                   </h5>
                              </a>
                              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                   {!! nl2br(substr($evenement->description, 0, 120)) !!} ...
                              </p>

                              <a href="{{ route('evenement.show', $evenement) }}"
                                   class="mt-auto inline-flex items-center justify-center px-3 py-2 text-sm font-medium text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                   Voir plus
                                   <svg class="w-6 h-6 text-white-800 dark:text-white mx-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                             stroke-width="2">
                                             <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                             <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z" />
                                        </g>
                                   </svg>
                              </a>
                         </div>
                    </div>
               @endforeach
          </div>
          <div class="mb-32 mt-10">
               {{ $evenements->links() }}
          </div>
     @endif
</div>
