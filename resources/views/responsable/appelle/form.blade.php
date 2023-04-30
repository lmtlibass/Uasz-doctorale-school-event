@extends('../../base.layouts')

<div class="flex flex-col">
     @include('../../shared.navebar')
     @include('../../shared.sidebar')
</div>


<div class="px-12 mt-32   mx-auto ml-28">
     @if ($errors->any())
          <div class="text-red-500 mx-auto ml-32 text-sm">
               <ul>
                    @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                    @endforeach
               </ul>
          </div>
     @endif
     <div class=" ml-14 ">
          <form method="POST"
               action="{{ route($appelle->exists ? 'responsable.appelle.update' : 'responsable.appelle.store', $appelle) }}"
               class="shadow-lg p-10 ml-16 rounded-lg" enctype="multipart/form-data">

               @csrf
               @method($appelle->exists ? 'PUT' : 'POST')

               @include('......shared.form.input', [
                   'name' => 'title',
                   'placeholder' => 'Titre',
                   'type' => 'text',
                   'value' => $appelle->title,
               ])

               @include('......shared.form.ckeditor', [
                   'name' => 'description',
                   'placeholder' => 'Description',
                   'value' => $appelle->description,
                   'type' => 'text',
               ])

               @include('.......shared.form.input', [
                   'name' => 'image',
                   'placeholder' => 'image de l\'évenement',
                   'type' => 'file',
                   'value' => $appelle->image,
                   'label' => 'ajoutez une image',
               ])

               @include('......shared.form.dragfile', [
                   'name' => 'pj',
                   'type' => 'file',
                     'value' => $appelle->pj,
               ])


               {{-- button submit --}}
               <div class="flex justify-end mt-8">
                    <button type="submit"
                         class="px-4 py-2 w-full text-sm font-medium leading-5 text-white transition-colors duration-150 bg-[#249876] border border-transparent rounded-lg active:bg-blue-600 hover:bg-[028765] focus:outline-none focus:shadow-outline-blue">
                         Enregistrer
                    </button>
               </div>

          </form>
     </div>
</div>
