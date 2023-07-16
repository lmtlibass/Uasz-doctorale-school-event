@extends('base.layouts')

<section class="bg-gray-100 dark:bg-gray-900">
     <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

          <div
               class="w-full bg-white rounded-lg shadow-xl dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
               <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                         class="flex flex-row items-center justify-center text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white text-center">
                         <img class="w-8 h-8 mr-2" src="{{ asset('img/logo.png') }}" alt="logo">
                         Inscription
                    </h1>

                    {{-- @include('shared.form.login-rs') --}}
                    
                    <form class="space-y-4 md:space-y-6" method="POST" action="{{route('register')}}">

                         @csrf

                         @include('shared.form.input', [
                             'name' => 'name',
                             'type' => 'text',
                             'placeholder' => 'entrer votre pseodo',
                             'required' => true,
                         ])
                         @include('shared.form.input', [
                              'name' => 'email',
                              'type' => 'email',
                              'placeholder' => 'exemple@gmail.com',
                              'required' => true,
                          ])
                         @include('shared.form.input-password', [
                             'name' => 'password',
                             'required' => true,
                         ])
                          @include('shared.form.input-password', [
                              'name' => 'password_confirmation',
                              'required' => true,
                          ])


                         <div class="my-6">
                              <button type="submit"
                                   class="w-full text-white bg-[#249876] hover:bg-[#028765] focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                   Inscription</button>
                              <p class="text-sm font-light mt-5 text-gray-500 dark:text-gray-400">
                                   D"éja inscrit connexion? <a href="{{route('login')}}"
                                        class="font-medium text-primary-600 hover:underline dark:text-primary-500">Se connecter</a>
                              </p>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</section>
