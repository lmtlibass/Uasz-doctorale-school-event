@extends('....base.layouts')


<div class="flex flex-col">
     @include('../../shared.navebar')
     @include('../../shared.sidebar')
</div>


<div class="px-12 mt-32 mx-auto ml-28">
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
               action="{{ route($article->exists ? 'article.article.update' : 'article.article.store', $article) }}"
               class="shadow-lg p-10 ml-16 rounded-lg" enctype="multipart/form-data">

               @csrf
               @method($article->exists ? 'PUT' : 'POST')

               <div class="flex justify-between">

                    <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white md:text-xl lg:text-xl ">
                         {{ $article->exists ? 'Modifier l\'article' : 'Ajouter un' }}
                         <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                              Article
                         </span>
                    </h2>
                    <a href="{{ route('article.article.index') }}"
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
                        'value' => $article->title,
                    ])
               </div>

              <div>
                @include('......shared.form.ckeditor', [
                   'name' => 'content',
                   'placeholder' => 'rédigez votre article ...',
                   'value' => $article->description,
                   'type' => 'text',
               ])
              </div>

               <input type="text" name="tags" placeholder="entrer vos mots clés"
                    class="bg-gray-50 border border-gray-300 text-gray-900  sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">


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


