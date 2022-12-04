<h1> Pizzas List</h1>

<!-- @for($i = 0; $i < 5; $i++)
<p> the value of i  is {{ $i }}</p>
@endfor -->
<!-- 
@for($i = 0; $i < count($pizzas); $i++)

<p> {{$pizzas[$i] ['type']  }} </p>

@endfor -->


@foreach( $pizzas as $pizza )

<div>
  {{ $loop->index }}  {{ $pizza['type']  }} - {{ $pizza['base'] }}
  @if($loop->first)
  <span>- first in the loop </span>
  @endif
  @if($loop->last)
  <span>- last in the loop  </span>
  @endif
</div>


@endforeach
