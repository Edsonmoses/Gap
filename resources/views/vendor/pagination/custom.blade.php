@if ($paginator->hasPages())
  <ul class="pagination">
    @if ($paginator->onFirstPage())
            <li class="disabled"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
        @endif

         @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="disabled"><a href="#">{{ $element }}</a></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><a href="{{ $url }}">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
         @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"  aria-label="Next"> <span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
        @else
            <li class="disabled"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></li>
        @endif
    </ul>
@endif 