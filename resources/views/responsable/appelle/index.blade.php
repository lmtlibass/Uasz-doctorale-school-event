@extends('../../base.layouts')

<div class="flex flex-col">
     @include('../../shared.navebar')
     @include('../../shared.sidebar')
 </div>


 <div class="px-12 mt-20 mx-auto sm:ml-64 ">
 <form action="">
     @include('../../shared.form.input', [
           'name' => 'nom',
           'label' => 'Nom',
           'type' => 'text',
           'value' => old('nom')
      ])
    
 </form>
     </div>    

