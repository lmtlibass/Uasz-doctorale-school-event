@extends('...base.layouts')

<div class="flex">
     @include('...shared.navebar')
     @include('...shared.sidebar')
</div>



<div class="px-8 mt-20 mx-auto sm:ml-64 ">
   
     <!-- component -->
     <div class="text-gray-900 bg-gray-100">
          <div class="p-4 flex">
               <h1 class="text-3xl">
                    Liste des utilisateurs
               </h1>
          </div>
          <div class="px-3 py-4 flex justify-center">
               <table class="w-full text-md bg-white shadow-md rounded mb-4">
                    <tbody>
                         <tr class="border-b">
                              <th class="text-left p-3 px-5">#</th>
                              <th class="text-left p-3 px-5">Prenom</th>
                              <th class="text-left p-3 px-5">Nom</th>
                              <th class="text-left p-3 px-5">Email</th>
                              <th>Action</th>
                         </tr>
                         @foreach ($users as $user)
                              <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                   <td class="p-3 px-5">
                                        {{ $user->id }}
                                   </td>
                                   <td class="p-3 px-5">
                                        {{ $user->prenom }}
                                   </td>
                                   <td class="p-3 px-5">
                                        {{ $user->nom }}
                                   </td>
                                   <td class="p-3 px-5">
                                        {{ $user->email }}
                                   </td>
                                   <td class="p-3 flex justify-end">
                                        <a href="{{ route('admin.users.show', $user->id) }}"
                                             class="flex gap-1 mr-3 text-sm bg-green-500 h-9 hover:bg-blue-700 text-white py-2 px-2 rounded focus:outline-none focus:shadow-outline">
                                             Details
                                             <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                              </svg>
                                        </a>
                                        {{-- <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                             @csrf
                                             @method('DELETE')
                                             <button type="submit"
                                                  class="text-sm bg-red-500 hover:bg-red-700 text-white py-2 px-2 rounded focus:outline-none focus:shadow-outline">Supprimer</button>
                                        </form> --}}
                                   </td>
                              </tr>
                         @endforeach
                    </tbody>
               </table>
          </div>
     </div>
</div>
