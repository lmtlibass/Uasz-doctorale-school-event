@if (session('error'))
<div id="alert-border-4"
     class="flex p-4 mb-4 mt-12 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800 mx-80"
     role="alert">
     <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
               d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-10a1 1 0 10-2 0v4a1 1 0 102 0v-4zM9 8a1 1 0 012 0v1a1 1 0 11-2 0V8z"
               clip-rule="evenodd"></path>
     </svg>
     <div class="ml-3 text-sm font-medium">
          {{ session('error') }}
     </div>
     <button type="button"
          class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
          data-dismiss-target="#alert-border-4" aria-label="Close">
          <span class="sr-only">Fermer</span>
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
               xmlns="http://www.w3.org/2000/svg">
               <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a
                    1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
          </svg>
     </button>
</div>
@endif