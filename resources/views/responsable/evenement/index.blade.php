@extends('base.layouts')

@section('title', 'Liste des evenements')

<div class="flex">
     @include('...shared.navebar')
     @include('...shared.sidebar')
</div>

<div class="px-8 mt-20 mx-auto sm:ml-64 ">
     @include('...shared.session-status')
     <div class=" w-full mx-auto grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4 justify-start">
          @foreach ($evenements as $evenement)
               @include('...shared.card-event', [
                    'date' => $evenement->created_at->format('d-m-Y'),
                    'title' => $evenement->title,
                    'description' => strip_tags($evenement->description),
                    'image' => $evenement->imageUrl(),
                    'cardroute' => 'evenement',
                    'argument' => $evenement,

               ])
          @endforeach
     </div>
</div>
