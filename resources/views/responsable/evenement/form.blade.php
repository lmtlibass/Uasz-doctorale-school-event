@extends('../../base.layouts')

<div class="flex flex-col">
     @include('../../shared.navebar')
     @include('../../shared.sidebar')
</div>


<div class="px-12 mt-32 mx-auto ml-28 ">
     @if ($errors->any())
          <div class="text-red-500 mx-auto ml-32 text-sm">
               <ul>
                    @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                    @endforeach
               </ul>
          </div>
     @endif
     <div class=" ml-14">

          <form method="POST"
               action="{{ route($evenement->exists ? 'responsable.evenement.update' : 'responsable.evenement.store', $evenement) }}"
               class="shadow-lg p-10 ml-16 rounded-lg" enctype="multipart/form-data" id="form">

               @csrf
               @method($evenement->exists ? 'PUT' : 'POST')

               <div class="flex justify-between">

                    <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white md:text-xl lg:text-xl ">
                         {{ $evenement->exists ? 'Modifier l\'' : 'Ajouter une' }} <span
                              class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">evenement</span>
                    </h2>
                    <a href="{{ route('responsable.evenement.index') }}"
                         class="px-4 py-2 flex justify-between items-center text-sm font-medium leading-5 text-white transition-colors duration-150 bg-[#249876] border border-transparent rounded-lg active:bg-blue-600 hover:bg-[028765] focus:outline-none focus:shadow-outline-blue">
                         <svg class="h-8 w-6 text-white" width="24" height="24" viewBox="0 0 24 24"
                              stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                              stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" />
                              <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" />
                         </svg>
                         Retour
                    </a>
               </div>

               <div class="grid grid-cols-1 gap-2">
                    @include('......shared.form.input', [
                        'name' => 'title',
                        'placeholder' => 'Titre',
                        'type' => 'text',
                        'value' => $evenement->title,
                    ])
                    {{-- @include('......shared.form.input', [
                         'name' => 'date',
                         'placeholder' => 'Date',
                         'type' => 'date',
                         'value' => old('date'),
                    ]) --}}
               </div>

               @include('......shared.form.ckeditor', [
                   'name' => 'description',
                   'placeholder' => 'Description',
                   'value' => $evenement->description,
                   'type' => 'text',
               ])

               @include('.......shared.form.input', [
                    'name' => 'media',
                    'placeholder' => 'image de l\'évenement',
                    'type' => 'file',
                    'label' => 'ajoutez une image',
               ])
               <div class="flex items-center mt-5 ps-4 border border-gray-200 rounded dark:border-gray-700">
                    <input id="bordered-checkbox-1" type="checkbox"  @if('checked') value="1" @else value="0" @endif name="isPremium"
                         class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-checkbox-1"
                         class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                         évènement prmium ?
                    </label>
               </div>



               {{-- button submit --}}
               <div class="flex justify-end mt-8">
                    <button type="submit" id="submit-button"
                         class="px-4 py-2 w-full text-sm font-medium leading-5 text-white transition-colors duration-150 bg-[#249876] border border-transparent rounded-lg active:bg-blue-600 hover:bg-[028765] focus:outline-none focus:shadow-outline-blue">
                         Enregistrer
                    </button>
               </div>

          </form>
     </div>
</div>
