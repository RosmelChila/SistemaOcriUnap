@props(['disabled' => false, 'withicon' => false])

@php
$withiconClasses = $withicon ? 'pl-11 pr-4' : 'px-4'
@endphp

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
'class' => $withiconClasses . ' border-zinc-800 rounded-md focus:border-zinc-400 focus:ring
focus:ring-sky-500 focus:ring-offset-2 focus:ring-offset-white dark:border-zinc-600 dark:bg-zinc-800 bg-zinc-200
dark:text-zinc-300 dark:focus:ring-offset-zinc-800 bg-zinc-200',
])
!!}>
