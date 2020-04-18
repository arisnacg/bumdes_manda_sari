@if ($paginator->hasPages())
    <ul class="pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true">
               <a href="#" class="disabled size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                    <i class="zmdi zmdi-arrow-left m-r-10"></i>Sebelumnya
                </a>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                 <a href="{{ $paginator->nextPageUrl() }}" class="size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                    Selanjutnya <i class="zmdi zmdi-arrow-right m-l-10"></i>
                </a>
            </li>
        @endif
    </ul>
@endif
