@extends('...base.layouts')

<div class="flex">
     @include('...shared.navebar')
     @include('...shared.sidebar')
</div>

<div class="px-12   mt-20 mx-auto ml-28  ">
     @if ($errors->any())
          <div class="text-red-500 mx-auto ml-32 text-sm">
               <ul>
                    @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                    @endforeach
               </ul>
          </div>
     @endif

     <div class="ml-32 mt-10">
          <a href="{{ route('evenement.index') }}"
               class="px-4 mb-5 w-24 py-1 flex justify-between items-center text-sm font-medium leading-5 text-white transition-colors duration-150 bg-[#CE0033] border border-transparent rounded-lg active:bg-red-600 hover:bg-[E42629] focus:outline-none focus:shadow-outline-blue">
               Retour
               <svg class="h-8 w-6 ml-2 text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <polyline points="9 6 15 12 9 18" />
               </svg>
          </a>
     </div>
     <div class="ml-32 mt-5">
          @include('...shared.session-status')
          @include('...shared.error-status')
     </div>
     <div
          class="max-w-full ml-32 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div>
               <img class="rounded-t-lg w-full h-56 object-cover" src="/storage/{{ $evenement->media }}" alt="" />
          </div>
          <div class="p-5">

               

               <div class="grid grid-cols-1 gap-2">
                    <h2 class="mb-4 mt-8 mx-auto text-xl font-bold text-gray-900 dark:text-white md:text-xl lg:text-xl ">
                         <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                              {{ $evenement->title }}</span>
                    </h2>
                    <div class="flex justify-between mt-5">
                         <div class="flex">
                              <p class="text-gray-500 text-sm ml-2">Publié le
                                   {{ $evenement->created_at->format('d-m-Y') }}</p>
                         </div>
                         <div class="flex">
                              <p class="text-gray-500 text-sm ml-2">Mis à jour le
                                   {{ $evenement->updated_at->format('d-m-Y') }}
                              </p>
                         </div>
                    </div>
                    <div>
                         <p class="text-gray-500 text-sm mt-2">{!! $evenement->description !!}</p>
                    </div>
               </div>
               
               <button data-te-toggle="modal" data-te-target="#exampleModalScrollable" data-te-ripple-init
                    data-te-ripple-color="light" type="button"
                    onclick="window.location.href='{{ route('inscription.create', $evenement->id) }}'"
                    class="w-full mt-10  focus:outline-none text-white bg-gradient-to-r to-emerald-600 from-sky-400 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    S'inscrire à l'évènement</button>
          </div>
     </div>


{{-- 
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
                                       'name' => 'evenement_id',
                                       'value' => $evenement->id,
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
     </div> --}}
