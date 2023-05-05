@extends('base.layouts')

<div class="flex ">
    @include('shared.navebar')
    @include('shared.sidebar')
</div>

<div class="px-12 mt-20 mx-auto sm:ml-64 ">
    <div class=" w-11/12 mx-auto flex flex-row flex-wrap justify-start gap-8">
        @include('shared/card-event', [
        'date' => '2021-10-10',
        'title' => 'title',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem nobis eos dolore illo sapiente placeat minus odit, minima quis nesciunt asperiores beatae voluptatem?'
    ])
    @include('shared/card-event', [
        'date' => '2021-10-10',
        'title' => 'title',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem nobis eos dolore illo sapiente placeat minus odit, minima quis nesciunt asperiores beatae voluptatem?'
    ])
    @include('shared/card-event', [
        'date' => '2021-10-10',
        'title' => 'title',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem nobis eos dolore illo sapiente placeat minus odit, minima quis nesciunt asperiores beatae voluptatem?'
    ])
    @include('shared/card-event', [
        'date' => '2021-10-10',
        'title' => 'title',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem nobis eos dolore illo sapiente placeat minus odit, minima quis nesciunt asperiores beatae voluptatem?'
    ])
    </div>
    
</div>