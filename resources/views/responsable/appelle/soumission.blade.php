@extends('...base.layouts')

@section('title', 'Detail de appelles{{ $appelle->title }}')

<div class="felx flex-col">
     @include('......shared.navebar')
     @include('......shared.sidebar')
</div>


<!-- component -->
<div class="px-12 py-10 mx-auto ml-32 ">
     <div class="shadow-lg p-10 ml-32 mt-14 rounded-xl">
          <div
               class="align-middle bg-white dark:bg-gray-700 rounded-xl rounded-tr-lg inline-block w-full py-4 overflow-hidden shadow-lg px-12">
               <div class="flex justify-between dark:bg-gray-700">
                    <div class="inline-flex border dark:bg-gray-700 rounded w-7/12 px-2 lg:px-6 h-12 bg-transparent">
                         <div class="flex flex-wrap dark:bg-gray-700 items-stretch w-full h-full mb-6 relative">
                              <div class="flex dark:bg-gray-700">
                                   <span
                                        class="flex dark:bg-gray-700 items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm">
                                        <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18"
                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z"
                                                  stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64"
                                                  stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                   </span>
                              </div>
                              <input type="text"
                                   class="dark:bg-gray-700 flex-shrink flex-grow  leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-3 relative focus:outline-none text-xxs  lg:text-base text-gray-500 font-thin"
                                   placeholder="Search">
                         </div>
                    </div>
               </div>
          </div>
          <div
               class="align-middle rounded-xl p-5 inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
               <table class="min-w-full rounded-xl p-5">
                    <thead>
                         <tr>
                              <th
                                   class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                   N°</th>
                              <th
                                   class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                   nom</th>
                              <th
                                   class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                   Email</th>
                              <th
                                   class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                   titre proposition</th>
                              <th
                                   class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                   description</th>
                              <th
                                   class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                   statut</th>
                              <th class="px-6 py-3 border-b-2 border-gray-300">
                                   Action
                              </th>
                         </tr>
                    </thead>
                    <tbody class="bg-white rounded-xl p-5">
                         @foreach ($soumissions as $soumission)
                              <tr>
                                   <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="flex items-center">
                                             <div>
                                                  <div class="text-sm leading-5 text-gray-800">
                                                       {{ $soumission->id }}
                                                  </div>
                                             </div>
                                        </div>
                                   </td>
                                   <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="flex items-center">
                                             <div>
                                                  <div class="text-sm leading-5 text-gray-800">
                                                       {{ $soumission->user->name }}
                                                  </div>
                                             </div>
                                        </div>
                                   </td>
                                   <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="flex items-center">
                                             <div>
                                                  <div class="text-sm leading-5 text-gray-800">
                                                       {{ $soumission->user->email }}
                                                  </div>
                                             </div>
                                        </div>
                                   </td>
                                   <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="flex items-center">
                                             <div>
                                                  <div class="text-sm leading-5 text-gray-800">
                                                       {{ $soumission->title }}
                                                  </div>
                                             </div>
                                        </div>
                                   </td>
                                   <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="flex items-center">
                                             <div>
                                                  <div class="text-sm leading-5 text-gray-800">
                                                       {{ $soumission->description }}
                                                  </div>
                                             </div>
                                        </div>
                                   </td>
                                   
                                   <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="flex items-center">
                                             <div>
                                                  @if ($soumission->status === null)
                                                       <span class="bg-yellow-100 text-yellow-300 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-800 ml-2">
                                                            En attente
                                                       </span>
                                                 @elseif($soumission->status === 0)
                                                       <span class="bg-red-100 text-red-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-800 ml-2">
                                                            Refusé
                                                       </span>
                                                  @elseif($soumission->status === 1)
                                                       <span class="bg-blue-100 text-blue-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-2">
                                                           Accépté
                                                       </span>
                                                  @endif
                                                  
                                             </div>
                                        </div>
                                   </td>
                                   <td class="px-4 py-2 whitespace-no-wrap border-b border-gray-500">
                                        <div class="flex items-center">
                                             <div>
                                                  <div class="text-sm leading-5 text-gray-800">
                                                       <a href="{{route('responsable.soumission.show', $soumission)}}" type="button" class="text-white bg-gradient-to-r from-teal-400 via-teal-500  to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                                            Etudier</a>

                                                  </div>
                                             </div>
                                        </div>
                                   </td>
                              </tr>
                         @endforeach

                    </tbody>
               </table>

               <div class="mt-5 items-center">
                    <nav class="relative z-0 inline-flex shadow-sm">
                         <div>
                              <a href="#"
                                   class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
                                   aria-label="Previous" v-on:click.prevent="changePage(pagination.current_page - 1)">
                                   <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                             d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                             clip-rule="evenodd" />
                                   </svg>
                              </a>
                         </div>
                         <div>
                              {{ $soumissions->links() }}
                         </div>
                         <div v-if="pagination.current_page < pagination.last_page">
                              <a href="#"
                                   class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
                                   aria-label="Next">
                                   <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                             d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                             clip-rule="evenodd" />
                                   </svg>
                              </a>
                         </div>
                    </nav>
               </div>
          </div>
     </div>
</div>
