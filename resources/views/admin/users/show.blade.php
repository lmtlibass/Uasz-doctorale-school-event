@extends('...base.layouts')

<div class="flex">
     @include('...shared.navebar')
     @include('...shared.sidebar')
</div>



<div class="px-8 mt-20 mx-auto sm:ml-64 ">

     <!-- component -->

     <div class="p-4 flex">
          <h1 class="mb-4 text-lg font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-xl">
               Information sur l'utilisateur
               <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                    {{ $user->prenom }}
               </span>
          </h1>
     </div>
     <div class="px-3 py-4 flex gap-4 justify-between">

          <div class="w-xl flex flex-col gap-5">
               <img class="h-xl max-w-2xl rounded-lg" src="{{ $user->photo }}" alt="image description">
               <div class="flex justify-center gap-5">
                    <button class="bg-green-500 w-40 h-10 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                         <i class="fas fa-edit mr-2"></i>
                         Éditer
                       </button>
                       
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                         @csrf
                         @method('DELETE')
                         <button type="submit"
                              class="bg-red-700 w-40  hover:bg-red-700 text-white font-bold  py-2 px-4 rounded">
                              <i class="fas fa-trash-alt mr-2"></i>
                              Supprimer
                         </button>
                    </form>
               </div>
          </div>
          <div
               class="w-full max-w-xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
               <div class="flex flex-col gap-4">
                    <div class="flex flex-row gap-2">
                         <span class="text-xl font-bold text-gray-900 dark:text-white">{{ $user->prenom }}</span>
                         <span class="text-xl font-bold text-gray-900 dark:text-white">{{ $user->nom }}</span>
                    </div>

                    <div class="flex flex-row gap-2">
                         <span class="text-sm font-bold text-gray-900 dark:text-white">Email: </span>
                         <span class="text-sm text-gray-900 dark:text-white">{{ $user->email }}</span>
                    </div>
                    <div class="flex flex-row gap-2" style="background-color: greenyellow">
                         <span class="text-sm font-bold text-gray-900 dark:text-white">Role: </span>
                         <span class="text-sm text-gray-900 dark:text-white">{{ $role[0]->name }}</span>
                    </div>
                    <div class="flex flex-row gap-2">
                         <span class="text-sm font-bold text-gray-900 dark:text-white">Adresse: </span>
                         <span class="text-sm text-gray-900 dark:text-white">{{ $user->adresse }}</span>
                    </div>
                    <div class="flex flex-row gap-2">
                         <span class="text-sm font-bold text-gray-900 dark:text-white">Telephone: </span>
                         <span class="text-sm text-gray-900 dark:text-white">{{ $user->telephone }}</span>
                    </div>
                    <div class="flex flex-row gap-2">
                         <span class="text-sm font-bold text-gray-900 dark:text-white">Profession: </span>
                         <span class="text-sm text-gray-900 dark:text-white">{{ $user->profession }}</span>
                    </div>
               </div>

          </div>
     </div>
     
