@extends('......base.layouts')

@section('title', 'Detail de appelles ')

<div class="flex flex-col">
     @include('......shared.navebar')
     @include('......shared.sidebar')
</div>

<div class="px-12 py-10 mx-auto ml-32 ">
     <div class="shadow-lg p-10 ml-32 mt-14 rounded-xl">
          <a href="{{ URL::previous() }}" class="px-4 mb-5 w-24 py-2 flex justify-between items-center text-sm font-medium leading-5 text-white transition-colors duration-150 bg-[#CE0033] border border-transparent rounded-lg active:bg-red-600 hover:bg-[E42629] focus:outline-none focus:shadow-outline-blue">
               <svg class="w-6 mr-2 h-6 text-white flex items-center justify-between hover:text-green-500" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M10 19l-7-7m0 0l7-7m-7 7h18" />
               </svg>retour
          </a>
          <div class="grid grid-cols-1 gap-2">
               <h2 class="mb-4 mt-8 mx-auto text-xl font-bold text-gray-900 dark:text-white md:text-xl lg:text-xl ">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                         Proposition de {{ $soumission->user->name }}</span>
               </h2>
               <div class="flex justify-between mt-5">
                    <div class="flex">
                         <p class="text-gray-500 text-sm ml-2"> {{ $soumission->user->email }}</p>
                    </div>

               </div>
               <div>
                    <h2 class="mb-4 mt-8 mx-auto text-xl font-bold text-gray-900 dark:text-white md:text-xl lg:text-xl ">
                         <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                              Titre: {{ $soumission->title }}</span>
                    </h2>
               </div>
               <div>
                    <p class="text-gray-500 text-sm mt-2">{!! $soumission->description !!}</p>
               </div>
          </div>
          <div class="mt-12 items-center flex justify-between">
               <a href="{{ asset('storage/' . $soumission->pj) }}" class="text-sm flex items-center gap-2" target="blank">
                    <span class="text-green-500">
                         Ouvrire fichier</span>
                    <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" stroke-width="1.5"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">

                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
               </a>
          </div>
          <div class="flex flex-end justify-end gap-4">
               <a href="{{ route('responsable.soumission.accepter', $soumission) }}"
                    class="bg-gray-200 hover:bg-gray-700 text-green-800 font-bold py-2 px-4 rounded-full">
                    Accepté
               </a>
               <a href="{{ route('responsable.soumission.refuser', $soumission) }}"
                    class="bg-gray-200 hover:bg-gray-700 text-red-800 font-bold py-2 px-4 rounded-full">
                    Rejeter
               </a>
          </div>
     </div>
</div>
