@extends('../../base.layouts')

<div class="flex flex-col">
     @include('../../shared.navebar')
     @include('../../shared.sidebar')
</div>


<div class="px-8 mt-20 mx-auto sm:ml-64 ">
     <a href="{{ route('responsable.evenement.show', $evenement) }}"
          class="px-4 mb-5 w-24 py-1 flex justify-between items-center text-sm font-medium leading-5 text-white transition-colors duration-150 bg-[#CE0033] border border-transparent rounded-lg active:bg-red-600 hover:bg-[E42629] focus:outline-none focus:shadow-outline-blue">
          Retour
          <svg class="h-8 w-6 ml-2 text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
               stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
               <path stroke="none" d="M0 0h24v24H0z" />
               <polyline points="9 6 15 12 9 18" />
          </svg>
     </a>
     @if ($errors->any())
          <div class="text-red-500 mx-auto ml-32 text-sm">
               <ul>
                    @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                    @endforeach
               </ul>
          </div>
     @endif

     @if($participants->count() === 0)
     <div class="flex justify-center items-center">
          <div class="flex flex-col justify-center items-center">
               <div class="flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-gray-400" viewBox="0 0 20 20"
                         fill="currentColor">
                         <path fill-rule="evenodd"
                              d="M10 2a8 8 0 100 16 8 8 0 000-16zM8 9a2 2 0 114 0H8z"
                              clip-rule="evenodd" />
                    </svg>
               </div>
               <div class="flex justify-center items-center">
                    <p class="text-gray-400 text-xl mt-2">Aucun participant</p>
               </div>
          </div>
     </div>
     @else
          <div class="ml-14">
               <table class="min-w-full p-5 table-auto border-collapse border border-slate-300">
                         <thead class="bg-gray-200 text-white">
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
                                   <th class="px-6 py-3 border-b-2 border-gray-300">
                                        Action
                                   </th>
                              </tr>
                         </thead>
                         <tbody class="bg-white rounded-xl p-5">
                              @foreach ($participants as $participant)
                                   <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                             <div class="flex items-center">
                                                  <div>
                                                       <div class="text-sm leading-5 text-gray-800">
                                                            {{ $participant->id }}
                                                       </div>
                                                  </div>
                                             </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                             <div class="flex items-center">
                                                  <div>
                                                       <div class="text-sm leading-5 text-gray-800">
                                                            {{ $participant->name }}
                                                       </div>
                                                  </div>
                                             </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                             <div class="flex items-center">
                                                  <div>
                                                       <div class="text-sm leading-5 text-gray-800">
                                                            {{ $participant->email }}
                                                       </div>
                                                  </div>
                                             </div>
                                        </td>

                                        {{-- <td class="px-4 py-2 whitespace-no-wrap border-b border-gray-500">
                                             <div class="flex items-center">
                                                  <div class="flex">
                                                       <div class="text-sm leading-5 text-gray-800">
                                                            <a href="{{ route('responsable.soumission.show', $soumission) }}"
                                                                 type="button"
                                                                 class="text-white bg-gradient-to-r from-teal-400 via-teal-500  to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                                                 Etudier</a>

                                                       </div>
                                                       <div class="text-sm leading-5 text-gray-800">
                                                            <button data-te-toggle="modal" data-te-target="#FormMail"
                                                                 data-te-ripple-init data-te-ripple-color="light"
                                                                 type="button"
                                                                 class="text-white bg-gradient-to-r from-yellow-400 via-yellow-500  to-yellow-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                                                 Mail</button>

                                                       </div>
                                                  </div>
                                             </div>
                                        </td> --}}
                                   </tr>
                                   {{-- @php
                                        $emailSoumissionnaire = $soumission->user->email;
                                   @endphp --}}
                              @endforeach

                         </tbody>
                    </table>
          </div>
     @endif
</div>
