@extends('layouts.twocolumn')
@section('content')

<div class="Grid Grid--flexcells Grid--gutters Grid--1of3">
<div class="Grid-cell">
<div class="box">

<div>This is a test div</div>
</div>				
</div>
</div>	
@foreach ($links as $link)
<div class="links-section-header">{{ $link->category }}</div>

	@foreach ($link->linksitems as $linksitem)



<div class="Grid Grid--flexcells Grid--gutters Grid--1of3">
<div class="Grid-cell">
<div class="box">

<div>This is a test div</div>
</div>				
</div>
</div>	
@endforeach
@endforeach
			


@stop

	