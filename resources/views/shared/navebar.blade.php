<nav class="fixed w-auto sm:bg-none border-[#fff] bg-[#fff] dark:bg-gray-800 dark:border-gray-700 shadow-md">

     <div class="flex w-screen justify-between mx-10 p-2 px-64 ">
          <a href="#" class="flex items-start">
               <img src="{{ asset('img/logo.png') }}" class="h-11" alt="UASZ" />
          </a>

          <div class=" w-full md:block md:w-auto" id="navbar-solid-bg">

               <div class="flex flex-row justify-around">

                    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                         class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:mr-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white"
                         type="button">
                         <span class="sr-only">menu</span>
                         <img class="w-8 h-8 mr-2 rounded-full" src="{{ asset('img/libd.jpg') }}" alt="user photo">

                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownAvatarName"
                         class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                         <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                              <div class="font-medium ">Pro User</div>
                              <div class="truncate">name@flowbite.com</div>
                         </div>
                         <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                              aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                              <li>
                                   <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                              </li>
                              <li>
                                   <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                              </li>
                              <li>
                                   <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                              </li>
                         </ul>
                         <div class="py-2">
                              <a href="#"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                   out</a>
                         </div>
                    </div>
                    @include('shared.dark')
               </div>
          </div>
     </div>
</nav>
