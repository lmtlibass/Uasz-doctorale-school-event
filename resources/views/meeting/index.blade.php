@extends('base.layouts')

@section('title', 'Liste des appelles')

<div class="flex">
     @include('...shared.navebar')
     @include('...shared.sidebar')
</div>


<div class="px-12 mt-32 mx-auto ml-56">
     <div class="py-4">
          <h1 class="text-2xl">Space de difusion en ligne</h1>
     </div>
     <div class="max-w-2xl">
          <div class="grid md:grid-cols-8 grid-cols-1 mt-4">
               <div class="md:col-span-5">
                    <form method="post" action="{{ route('validateMeeting') }}">
                         {{ csrf_field() }}
                         <div class="mt-1 flex rounded-md shadow-sm">
                              <div class="relative flex items-stretch flex-grow focus-within:z-10">
                                   <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <!-- Heroicon name: solid/users -->
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                             <path
                                                  d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                        </svg>
                                   </div>
                                   <input type="text" name="meetingId" id="meetingId"
                                        class="focus:ring-green-500 focus:border-green-500 block w-full rounded-none rounded-l-md pl-10 sm:text-sm border-gray-300"
                                        placeholder="N° sallon">
                              </div>
                              <button type="submit"
                                   class="-ml-px relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                                   <span>Rejoindre sallon</span>
                              </button>
                         </div>
                    </form>

               </div>
               <div class="my-2 sm:my-0 flex items-center justify-center">
                    <span class="text-xs uppercase font-bold text-gray-400 px-1">Ou</span>
               </div>

               <div class="md:col-span-2">
                    <form method="post" action="{{ route('createMeeting') }}">
                         {{ csrf_field() }}
                         <button type="submit"
                              class="mt-1 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                              Nouvelle sallon</button>
                    </form>
               </div>
          </div>
     </div>
</div>
