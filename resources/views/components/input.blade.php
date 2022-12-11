@props(['disabled' => false, 'withicon' => false])

@php
$withiconClasses = $withicon ? 'pl-11 pr-4' : 'px-4'
@endphp

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
'class' => $withiconClasses . 'py-2 border-zinc-400 rounded-md focus:border-zinc-400 focus:ring
focus:ring-sky-500 focus:ring-offset-2 focus:ring-offset-white dark:border-zinc-600 dark:bg-dark-eval-1
dark:text-zinc-300 dark:focus:ring-offset-dark-eval-1',
])
!!}>
