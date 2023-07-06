@extends('base.layouts')

@section('title', 'Liste des articles')

<div class="flex">
     @include('...shared.navebar')
     @include('...shared.sidebar')
</div>


<div class="px-8 mt-20 mx-auto sm:ml-64">
     <h2 class="mb-4 text-xl text-center font-bold text-gray-900 dark:text-white md:text-xl lg:text-xl ">
          <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
               {{$response}}
          </span>
     </h2>
     @include('...shared.session-status')
     <div class=" w-full mx-auto grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 justify-start">
          @foreach ($articles as $article)
               @include('...shared.card-article', [
                    'date' => $article->created_at->format('d-m-Y'),
                    'title' => $article->title,
                    'content' => strip_tags($article->content),
                    'tags' => $article->tags,
                    'cardroute' => 'article',
                    'argument' => $article,
               ])
          @endforeach
     </div>
</div>
