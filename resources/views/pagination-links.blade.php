@if ($paginator->hasPages())
<ul class="flex justify-between">
    <!-- prev -->
    @if ($paginator->onFirstPage())
    <li class="text-zinc-800 dark:text-white text-center m-1 p-1 bg-zinc-100 dark:bg-zinc-900 cursor-pointer text-xs px-3 py-1 rounded-md">Atras</li>
    @else
    <li class="text-zinc-800 dark:text-white text-center m-1 p-1 bg-zinc-100 dark:bg-zinc-900 cursor-pointer text-xs px-3 py-1 rounded-md" wire:click="previousPage">Atras</li>
    @endif
    <!-- prev end -->

    <!-- numbers -->
    @foreach ($elements as $element)
    <div class="flex">
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class=" dark:text-white text-center m-1 p-1 bg-btn-inicio dark:bg-teal-900 cursor-pointer text-xs px-3 py-1 rounded-md " wire:click="gotoPage({{$page}})">{{$page}}</li>
        @else
        <li class="text-zinc-800 dark:text-white text-center m-1 p-1 bg-zinc-100 dark:bg-zinc-900 cursor-pointer text-xs px-3 py-1 rounded-md " wire:click="gotoPage({{$page}})">{{$page}}</li>
        @endif
        @endforeach
        @endif
    </div>
    @endforeach
    <!-- end numbers -->


    <!-- next  -->
    @if ($paginator->hasMorePages())
    <li class="text-zinc-800 dark:text-white text-center m-1 p-1 bg-zinc-100 dark:bg-zinc-900 cursor-pointer text-xs px-3 py-1 rounded-md" wire:click="nextPage">Siguiente</li>
    @else
    <li class="text-zinc-800 dark:text-white text-center m-1 p-1 bg-zinc-100 dark:bg-zinc-900 cursor-pointer text-xs px-3 py-1 rounded-md">Siguiente</li>
    @endif
    <!-- next end -->
</ul>
@endif
