@php
    $configData = Helper::appClasses();
    $customizerHidden = 'customizer-hide';
@endphp

@section('title', 'Register Cover - Pages')

<div id="main">
    <h1>{{ $count }}</h1>

    <input type="text" wire:model="title">


    <button wire:click="increment">+</button>

    <button wire:click="decrement">-</button>
</div>
