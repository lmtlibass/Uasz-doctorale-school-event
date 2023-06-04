@extends('...base.layouts')

<div class="flex">
     @include('...shared.navebar')
     @include('...shared.sidebar')
</div>

<div class="px-12   mt-20 mx-auto ml-28  ">

     <div
          class="max-w-full ml-32 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div>
               <img class="rounded-t-lg w-full h-56 object-cover" src="/storage/{{ $appelle->image }}" alt="" />
          </div>
          <div class="p-5">

               @include('...shared.session-status')
               @include('...shared.error-status')

               <div class="grid grid-cols-1 gap-2">
                    <h2 class="mb-4 mt-8 mx-auto text-xl font-bold text-gray-900 dark:text-white md:text-xl lg:text-xl ">
                         <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                              {{ $appelle->title }}</span>
                    </h2>
                    <div class="flex justify-between mt-5">
                         <div class="flex">
                              <p class="text-gray-500 text-sm ml-2">Publié le
                                   {{ $appelle->created_at->format('d-m-Y') }}</p>
                         </div>
                         <div class="flex">
                              <p class="text-gray-500 text-sm ml-2">Mis à jour le
                                   {{ $appelle->updated_at->format('d-m-Y') }}
                              </p>
                         </div>
                    </div>
                    <div>
                         <p class="text-gray-500 text-sm mt-2">{!! $appelle->description !!}</p>
                    </div>
               </div>
               <div class="mt-12 items-center flex justify-between">
                    <a href="{{ asset('storage/' . $appelle->pj) }}" class="text-sm flex"
                         onclick="event.preventDefault(); downloadPDF('{{ asset('storage/' . $appelle->pj) }}');">
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
               <button data-te-toggle="modal" data-te-target="#exampleModalScrollable" data-te-ripple-init
                    data-te-ripple-color="light" type="button"
                    class="w-full mt-10  focus:outline-none text-white bg-gradient-to-r to-emerald-600 from-sky-400 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Soummettre ma proposition</button>


          </div>



     </div>



     <div data-te-modal-init
          class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
          id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
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
                                   Envoyer ma proposition</span>

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

                         <form method="post" action="{{ route('soumission.store') }}" enctype="multipart/form-data">
                              @csrf
                              @include('...shared.form.input', [
                                  'type' => 'texte',
                                  'name' => 'title',
                                  'label' => 'titre',
                                  'placeholder' => 'Entrez un titre',
                                  'value' => old('nom'),
                                  'required' => true,
                              ])
                              <div class="hidden">
                                   @include('...shared.form.input', [
                                       'type' => 'texte',
                                       'name' => 'appelle_id',
                                       'value' => $appelle->id,
                                       'hidden',
                                   ])
                              </div>


                              <label for="description"
                                   class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                   Description</label>
                              <textarea id="description" rows="4" name="description"
                                   class="mb-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Entrez une description...">{{ old('description') }}</textarea>
                              @error('description')
                                   <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                   </div>
                              @enderror
                              @include('...shared.form.input', [
                                  'type' => 'file',
                                  'name' => 'pj',
                                  'label' => 'pj',
                                  'required' => true,
                              ])


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
