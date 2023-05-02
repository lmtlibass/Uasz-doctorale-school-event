@extends('base.layouts')

@section('title', 'Liste des appelles')

<div class="flex">
     @include('...shared.navebar')
     @include('...shared.sidebar')
</div>

<div class="px-12 mt-20 mx-auto sm:ml-64 ">
     <div class=" w-11/12 mx-auto grid grid-cols-3 gap-4 justify-start">
          @foreach ($appelles as $appelle)
               @include('...shared.card-event', [
                    'date' => $appelle->date,
                    'title' => $appelle->title,
                    'description' => strip_tags($appelle->description),
                    'image' => $appelle->image,
                    'pj'    => $appelle->pj
                 ]) 
          @endforeach
     </div>
</div>
