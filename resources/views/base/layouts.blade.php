<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>@yield('title') | Accueil</title>

     @vite(['resources/css/app.css', 'resources/js/app.js'])
     <script>
          // On page load or when changing themes, best to add inline in `head` to avoid FOUC
          if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                    '(prefers-color-scheme: dark)').matches)) {
               document.documentElement.classList.add('dark');
          } else {
               document.documentElement.classList.remove('dark')
          }
     </script>
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

</head>

<body class="dark:bg-gray-700">


     @yield('content')



</body>

</html>
