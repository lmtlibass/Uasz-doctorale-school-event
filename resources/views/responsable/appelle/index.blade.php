@extends('base.layouts')

@section('title', 'Liste des appelles')

<div class="flex">
     @include('...shared.navebar')
     @include('...shared.sidebar')
</div>

<div class="px-8 mt-20 mx-auto sm:ml-64 ">
     @include('...shared.session-status')
     <div class=" w-full mx-auto grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4 justify-start">
          @foreach ($appelles as $appelle)
               @include('...shared.card-event', [
                    'date' => $appelle->created_at->format('d-m-Y'),
                    'title' => $appelle->title,
                    'description' => strip_tags($appelle->description),
                    'image' => $appelle->imageUrl(),
                    'pj'    => $appelle->pj,
                    'cardroute' => 'appelle',
                    'argument' => $appelle,
                 ]) 
          @endforeach
     </div>
</div>
