@php
     $emailSoumissionnaire ??= '';
@endphp
@extends('...base.layouts')

@section('title', 'Detail de appelles{{ $appelle->title }}')

<div class="felx flex-col">
     @include('......shared.navebar')
     @include('......shared.sidebar')
</div>


<!-- component -->
<div class="px-12 py-10 mx-auto ml-32 ">
     <div class="ml-32 mt-10">
          <a href="{{ route('responsable.appelle.index') }}"
               class="px-4 mb-5 w-24 py-1 flex justify-between items-center text-sm font-medium leading-5 text-white transition-colors duration-150 bg-[#CE0033] border border-transparent rounded-lg active:bg-red-600 hover:bg-[E42629] focus:outline-none focus:shadow-outline-blue">
               Retour
               <svg class="h-8 w-6 ml-2 text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <polyline points="9 6 15 12 9 18" />
               </svg>
          </a>
     </div>
     <div class="text-center">
          @include('...shared.session-status')
          @include('...shared.error-status')
     </div>

     <div class="shadow-lg p-10 ml-32 mt-14 rounded-xl">
          <div class="align-middle bg-none dark:bg-gray-700   inline-block w-full py-4 overflow-hidden shadow-lg px-12">
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
          <div class="align-middle p-5 inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
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
                              <th
                                   class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                   titre proposition</th>
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
                                                  @if ($soumission->status === null)
                                                       <span
                                                            class="bg-yellow-100 text-yellow-300 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-800 ml-2">
                                                            En attente
                                                       </span>
                                                  @elseif($soumission->status === 0)
                                                       <span
                                                            class="bg-red-100 text-red-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-800 ml-2">
                                                            Refusé
                                                       </span>
                                                  @elseif($soumission->status === 1)
                                                       <span
                                                            class="bg-blue-100 text-blue-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-2">
                                                            Accépté
                                                       </span>
                                                  @endif

                                             </div>
                                        </div>
                                   </td>
                                   <td class="px-4 py-2 whitespace-no-wrap border-b border-gray-500">
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
                                   </td>
                              </tr>
                              @php
                                   $emailSoumissionnaire = $soumission->user->email;
                              @endphp
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


{{-- Modal form send mail --}}

<div data-te-modal-init
     class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
     id="FormMail" tabindex="-1" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
     <div data-te-modal-dialog-ref
          class="pointer-events-none relative h-[calc(100%-1rem)] w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
          <div
               class="pointer-events-auto relative flex max-h-[100%] w-full flex-col overflow-hidden rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
               <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <!--Modal title-->
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                         id="exampleModalScrollableLabel">
                         <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                              Envoyer Email</span>

                    </h5>
                    <!--Close button-->
                    <button type="button"
                         class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                         data-te-modal-dismiss aria-label="Close">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                         </svg>
                    </button>
               </div>

               <!--Modal body-->
               <div class="relative overflow-y-auto p-4">

                    <form method="post" action="{{ route('responsable.soumission.sendMail') }}"
                         enctype="multipart/form-data">
                         @csrf
                         {{-- @include('...shared.form.input', [
                             'type' => 'mail',
                             'name' => 'email',
                             'label' => 'email',
                             'placeholder' => 'Entrez  email du destinataire',
                             'value' => old('email'),
                         ])
                         <div>
                              @include('...shared.form.input', [
                                  'type' => 'texte',
                                  'name' => 'object',
                                  'label' => $emailSoumissionnaire,
                                  'placeholder' => 'Entrez l\'objet du mail',
                                  'value' => old('object'),
                              ])
                         </div> --}}
                         <div class="hidden">
                              @include('...shared.form.input', [
                                  'type' => 'hidden',
                                  'name' => 'email',
                                  'value' => $emailSoumissionnaire,
                              ])
                         </div>
                         @include('...shared.form.input', [
                             'type' => 'file',
                             'name' => 'pj',
                             'label' => 'pj',
                         ])

                         <label for="description"
                              class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-white">Your
                              Message</label>
                         <textarea id="description" rows="4" name="message"
                              class="mb-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Entrez uvotre message.">{{ old('message') }}</textarea>
                         @error('message')
                              <div class="text-red-500 mt-2 text-sm">
                                   {{ $message }}
                              </div>
                         @enderror
                         {{-- @include('...shared.form.input', [
                             'type' => 'file',
                             'name' => 'pj',
                             'label' => 'pj',
                             'required' => true,
                         ]) --}}


                         <!--Modal footer-->
                         <div
                              class="flex mt-5 flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                              <button type="button"
                                   class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                                   data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                                   Annuler
                              </button>

                              <button type="submit"
                                   class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                   Envoyer
                              </button>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
