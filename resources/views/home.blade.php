<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>@yield('title') | Landing page</title>

     @vite(['resources/css/app.css', 'resources/js/app.js'])
     <script src="//cdn.metered.ca/sdk/video/1.4.6/sdk.min.js"></script>
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body>
     <header class="fixed w-full z-50">
          @include('shared.home.navbar')
     </header>
     <main>
          <section class="bg-white dark:bg-gray-900 px-4">
               <div
                    class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
                    <div class="mr-auto place-self-center lg:col-span-7">
                         <h1
                              class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                              Hub Evenement <br>UASZ doctorants.</h1>
                         <p
                              class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                              Bienvenu dans votre space de gestion d'évènement, consacré aux écoles doctorales de
                              l'UASZ.
                              Participez et paratger vos revus scientifiques.
                         </p>
                         <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                              <a href="{{ route('appelle') }}"
                                   class="inline-flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-center text-gray-900 border border-gray-200 rounded-lg sm:w-auto hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                   En savoir plus
                                   <svg class="h-6 w-6 text-dark mx-3" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                             d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                             d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                   </svg>
                              </a>
                         </div>
                    </div>
                    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                         <img src="{{ asset('img/hero.png') }}" alt="Hero" class="object-cover w-full h-50">
                    </div>
               </div>
          </section>

          


          <section class="bg-gray-50 dark:bg-gray-800">
               <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
                    <!-- Row -->
                    <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                         <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                              <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                                   Appels à la communication</h2>
                              <p class="mb-8 font-light lg:text-xl">
                                   L'organisation des événements tels que les conférences, les ateliers et les colloques
                                   constitue un élément clé de l'activité de l'École Doctorale de l'Université Assane
                                   Seck de Ziguinchor
                              </p>
                              <!-- List -->
                              <ul role="list"
                                   class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                                   <li class="flex space-x-3">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                             fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                             Appels a communication</span>
                                   </li>
                                   <li class="flex space-x-3">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                             fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                             Propositions de thématiques
                                        </span>
                                   </li>
                                   <li class="flex space-x-3">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                             fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                             Propositions de conférenciers
                                        </span>
                                   </li>
                              </ul>
                         </div>
                         @include('shared.home.card-appell')
                    </div>
                    <!-- Row -->
                    @php
                         $evenements = App\Models\Evenement::Paginate(1);
                    @endphp
                    <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                         <div class="w-75">
                              @foreach ($evenements as $evenement)
                                   @include('shared.home.card-event', [
                                        'date' => $evenement->created_at->format('d-m-Y'),
                                        'title' => $evenement->title,
                                        'description' => strip_tags($evenement->description),
                                        'image' => $evenement->media,
                                        'cardroute' => 'evenement',
                                        'argument' => $evenement,
                                        'pj' => $evenement->pj,
                                   ])
                              @endforeach
                              <div class="mt-3">
                                   {{ $evenements->links() }}
                              </div>
                         </div>
                         <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                              <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                                   Evènements récents</h2>
                              <p class="mb-8 font-light lg:text-xl">
                                   Les événements scientifiques organisés par les écoles doctorales de l'Université
                                   Assane Seck jouent un rôle essentiel en favorisant la présentation des travaux des
                                   doctorants, qu'ils soient en cours ou terminés, ce qui contribue à la diffusion de la
                                   recherche au sein de ces écoles.
                              </p>
                              <!-- List -->
                              <ul role="list"
                                   class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                                   <li class="flex space-x-3">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                             fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                             Colloque internationnal
                                        </span>
                                   </li>
                                   <li class="flex space-x-3">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                             fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                             Journées scientifiques
                                        </span>
                                   </li>
                                   <li class="flex space-x-3">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                             fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        <span
                                             class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                             .....</span>
                                   </li>
                              </ul>
                         </div>
                    </div>
               </div>

          </section>

          <section class="bg-white dark:bg-gray-900">
               <div
                    class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:grid-cols-4 lg:gap-16 xl:gap-24 lg:py-24 lg:px-6">
                    <div class="col-span-2 mb-8">
                         <p class="text-lg font-medium text-green-600 dark:text-green-500">
                              A propos de uasz events
                         </p>
                         <h2
                              class="mt-3 mb-4 text-3xl font-extrabold tracking-tight text-gray-900 md:text-3xl dark:text-white">
                              En savoir plus sur la plateforme d'évènement de l'UASZ
                         </h2>
                         <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">
                              La plateforme d'évènement de l'UASZ est un espace de gestion d'évènement, consacré aux
                              écoles doctorales de l'UASZ. Participez et paratger vos revus scientifiques.
                         </p>
                    </div>
                    <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
                         @php
                              $appelles_count = App\Models\Appelle::count();
                         @endphp
                         <div>
                              <svg class="w-10 h-10 mb-2 text-green-600 md:w-12 md:h-12 dark:text-green-500"
                                   fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                   <path fill-rule="evenodd"
                                        d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z"
                                        clip-rule="evenodd"></path>
                              </svg>
                              <h3 class="mb-2 text-2xl font-bold dark:text-white">{{$appelles_count}} + Appelle à communication</h3>
                              <p class="font-light text-gray-500 dark:text-gray-400">
                                   Plus de {{$appelles_count}} appelles à communication sont lancée par ans
                              </p>
                         </div>
                         @php
                              $users_count = App\Models\User::count();
                         @endphp
                         <div>
                              <svg class="w-10 h-10 mb-2 text-green-600 md:w-12 md:h-12 dark:text-green-500"
                                   fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                   <path
                                        d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                                   </path>
                              </svg>
                              
                              <h3 class="mb-2 text-2xl font-bold dark:text-white">
                                   + {{$users_count}}  utilisateurs
                              </h3>
                              <p class="font-light text-gray-500 dark:text-gray-400">
                                   Plus de {{$users_count}} utilisateurs sont inscrits sur la plateforme
                              </p>
                         </div>
                         @php
                              $evenements_count = App\Models\Evenement::count();
                         @endphp
                         <div>
                              <svg class="w-10 h-10 mb-2 text-green-600 md:w-12 md:h-12 dark:text-green-500"
                                   fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                   <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                        clip-rule="evenodd"></path>
                              </svg>

                              <h3 class="mb-2 text-2xl font-bold dark:text-white">{{$evenements_count}}+ Evènements</h3>
                              <p class="font-light text-gray-500 dark:text-gray-400">
                                   Plus de {{$evenements_count}} évènements sont organisés par ans
                              </p>
                         </div>
                    </div>
               </div>
          </section>
     </main>
</body>

</html>
