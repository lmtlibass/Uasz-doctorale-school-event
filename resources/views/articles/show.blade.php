@extends('......base.layouts')

@section('title', 'Detail de l\'article{{ $article->title }}')

<div class="flex flex-col">
     @include('......shared.navebar')
     @include('......shared.sidebar')
</div>

<div class="px-12 py-10 -top-10 mt-32 mx-auto ml-28 ">
     <div class="shadow-lg p-10 ml-32 rounded-xl">
          <div class="flex justify-end gap-3">
               <a href="{{ route('article.article.edit', $article) }}"
                    class=" @if(Auth::user()->id !== $article->user_id) hidden @else   px-2 flex justify-between items-center text-sm font-medium leading-5 text-white transition-colors duration-150 bg-[#249876] border border-transparent rounded-lg active:bg-blue-600 hover:bg-[028765] focus:outline-none focus:shadow-outline-blue @endif">
                    Modifier
                    <svg class="h-8 w-6 ml-2 text-white" width="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                    </svg>
               </a>
               @can('update', App\Models\Appelle::class)
                    <a href="{{ route('article.article.destroy', $article) }}"
                         class="px-2  flex justify-between items-center text-sm font-medium leading-5 text-white transition-colors duration-150 bg-[#ce0033] border border-transparent rounded-lg active:bg-blue-600 hover:bg-[ce0032] focus:outline-none focus:shadow-outline-blue">
                         Supprimer
                         <svg class="h-8 w-6 ml-2 text-white" width="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                         </svg>
                    </a>
               @endcan
          </div>
          <div class="grid grid-cols-1 gap-2">
               <h2 class="mb-4 mt-8 mx-auto text-xl font-bold text-gray-900 dark:text-white md:text-xl lg:text-xl ">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                         {{ $article->title }}</span>
               </h2>
               <div class="flex justify-between mt-5">
                    <div class="flex">
                         <p class="text-gray-500 text-sm ml-2">Publié le {{ $article->created_at->format('d-m-Y') }}</p>
                    </div>
                    <div class="flex">
                         <p class="text-gray-500 text-sm ml-2">Mis à jour le {{ $article->updated_at->format('d-m-Y') }}
                         </p>
                    </div>
               </div>
               <div>
                    <p class="text-gray-500 text-sm mt-2 text-justify justify-normal">
                         {!! nl2br($article->content) !!}
                    </p>
               </div>
          </div>
          <div class="mt-12 items-center flex justify-between">
               <div class="flex">
                    <p class="text-gray-500 text-sm ml-2">Tags : </p>
                    <p class="text-gray-500 text-sm ml-2">{{ $article->tags }}</p>
               </div>
          </div>
     </div>

</div>




