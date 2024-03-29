<style>
     .btn-disabled {
          opacity: 0.5;
          pointer-events: none;
     }

     .disabled {
          display: none;
          visibility: hidden;
     }
</style>

<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
     type="button"
     class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
     <span class="sr-only">Menu</span>
     <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path clip-rule="evenodd" fill-rule="evenodd"
               d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
          </path>
     </svg>
</button>

<aside id="default-sidebar""
     class="fixed top-0  left-0  w-64 h-screen  transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
     aria-label="Sidebar">

     <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
          <ul class="space-y-2 font-medium">
               <li>
                    <a href="/"
                         class=" flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                         <svg aria-hidden="true"
                              class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                              fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                              <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                         </svg>
                         <span class="ml-3">Accueil</span>
                    </a>
               </li>
               {{-- @dump(Auth::user()->roles->first()->name) --}}
               <hr class="h-px my-8  w-full  bg-gray-200 border-0 dark:bg-gray-700">

               <li class="{{ Auth::user()->roles->first()->name !== 'admin' ? 'disabled' : '' }}">
                    <button type="button"
                         class="mt-5 flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                         aria-controls="appelle-dropdown" data-collapse-toggle="appelle-dropdown">

                         <svg aria-hidden="true"
                              class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                              fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                   d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />

                         </svg>
                         <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Appelle à
                              commu...</span>
                         <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                              xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd"
                                   d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                   clip-rule="evenodd"></path>
                         </svg>
                    </button>
                    <ul id="appelle-dropdown" class="hidden py-2 space-y-2">
                         <li>
                              <a href="{{ route('responsable.appelle.index') }}"
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                   Publiés</a>
                         </li>
                         <li>
                              <a href="{{ route('responsable.appelle.create') }}"
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                   Nouveau</a>
                         </li>
                    </ul>
               </li>
               <li class="{{ Auth::user()->roles->first()->name !== 'admin' ? 'disabled' : '' }}">
                    <button type="button"
                         class="mt-5 flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                         aria-controls="dropdown-event" data-collapse-toggle="dropdown-event">

                         <svg class="flex-shrink-0 w-6 h-6 text-gray-500" width="24" height="24"
                              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                              stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" />
                              <rect x="4" y="5" width="16" height="16" rx="2" />
                              <line x1="16" y1="3" x2="16" y2="7" />
                              <line x1="8" y1="3" x2="8" y2="7" />
                              <line x1="4" y1="11" x2="20" y2="11" />
                              <rect x="8" y="15" width="2" height="2" />
                         </svg>
                         <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Evenement</span>
                         <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                              xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd"
                                   d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                   clip-rule="evenodd"></path>
                         </svg>
                    </button>
                    <ul id="dropdown-event" class="hidden py-2 space-y-2">
                         <li>
                              <a href="{{ route('responsable.evenement.index') }}"
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                   Publiés</a>
                         </li>
                         <li>
                              <a href="{{ route('responsable.evenement.create') }}"
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                   Nouveau</a>
                         </li>
                    </ul>
               </li>

               <li>
                    <a href="{{ route('appelle') }}"
                         class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                         <svg aria-hidden="true"
                              class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                              fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path
                                   d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                              </path>
                         </svg>
                         <span class="flex-1 ml-3 whitespace-nowrap">Apelles à comm...</span>
                    </a>
               </li>
               <li>
                    <a href="{{ route('evenement.index') }}"
                         class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                         <svg aria-hidden="true"
                              class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                              fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path
                                   d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                              </path>
                              <path
                                   d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                              </path>
                         </svg>
                         <span class="flex-1 ml-3 whitespace-nowrap">Evenements</span>
                         <span
                              class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">{{ $nombre_evenement }}</span>
                    </a>
               </li>
               <li>
                    <a href="{{ route('meeting.index') }}"
                         class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                         <svg aria-hidden="true"
                              class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                              fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <polygon points="23 7 16 12 23 17 23 7" />
                              <rect x="1" y="5" width="15" height="14" rx="2"
                                   ry="2" />
                         </svg>
                         <span class="flex-1 ml-3 whitespace-nowrap">Conférence</span>
                    </a>
               </li>
               <li>
                    <button type="button"
                         class="mt-5 flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                         aria-controls="dropdown-blog" data-collapse-toggle="dropdown-blog">

                         <svg class="flex-shrink-0 w-6 h-6 text-gray-500" width="24" height="24"
                              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                              stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" />
                              <rect x="4" y="5" width="16" height="16" rx="2" />
                              <line x1="16" y1="3" x2="16" y2="7" />
                              <line x1="8" y1="3" x2="8" y2="7" />
                              <line x1="4" y1="11" x2="20" y2="11" />
                              <rect x="8" y="15" width="2" height="2" />
                         </svg>
                         <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Blog</span>
                         <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                              xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd"
                                   d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                   clip-rule="evenodd"></path>
                         </svg>
                    </button>
                    <ul id="dropdown-blog" class="hidden py-2 space-y-2">
                         <li>
                              <a href="{{ route('article.article.create') }}"
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                   Nouveau</a>
                         </li>
                         <li>
                              <a href="{{ route('article.article.index') }}"
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                   Mes articles</a>
                         </li>
                         <li>
                              <a href="{{ route('article.articles') }}"
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                   Tous les articles</a>
                         </li>
                    </ul>
               </li>

               <li>
                    <a href="{{ route('admin.users.index') }}"
                         class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ Auth::user()->roles->first()->name !== 'admin' ? 'btn-disabled' : '' }}">
                         <svg aria-hidden="true"
                              class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                              fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                   clip-rule="evenodd"></path>
                         </svg>
                         <span class="flex-1 ml-3 whitespace-nowrap">Utilisateurs</span>
                    </a>
               </li>

               <hr class="h-px mt-12 bg-gray-200 border-0 dark:bg-gray-700">

               <li class="mt-12">
                    <form action="{{ route('logout') }}" method="POST">
                         @csrf
                         <button type="submit"
                              class="mb-3 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                              <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                   width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                   stroke="currentColor" fill="none" stroke-linecap="round"
                                   stroke-linejoin="round">
                                   <path stroke="none" d="M0 0h24v24H0z" />
                                   <path
                                        d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                   <path d="M7 12h14l-3 -3m0 6l3 -3" />
                              </svg>
                              <span class="flex-1 ml-3 whitespace-nowrap">Deconnexion</span>
                         </button>
                    </form>
               </li>
               <li class="flex flex-row mt-10">
                    <a href=""
                         class="block   text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md">
                         <img class=" h-10 " src="{{ asset('img/ig.png') }}"></a>
                    <a href="#"
                         class="block   text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md">
                         <img class=" h-10 " src="{{ asset('img/linkedin.png') }}"></a>
                    <a href="#"
                         class="block   text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md">
                         <img class=" h-10 " src="{{ asset('img/facebook.png') }}"></a>
               </li>
          </ul>
     </div>
</aside>
