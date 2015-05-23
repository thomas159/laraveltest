@extends('layouts.twocolumn')
@section('content')


@if(isset($albums)) 
 <div class="Grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--1of2 gridlg--1of3">
   @foreach ($albums as $album)
  
 <div class="Grid-cell">
<div class="box">
    
 
   <img class="u-full-width-gallery" src="../../images/gallery/{!! $album->img!!}">

   	  <a href="{!! URL::route('gallery.id', [$album->id]) !!}"><div class="blog-readmore">   {!! $album->title !!}</div></a>
   </div></div>
	
	@endforeach
</div>
@elseif(isset($ids)) 
 <div class="Grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--1of2 gridlg--1of3">
  @foreach ($ids as $id)
   @foreach ($id->images as $image)
   <div class="Grid-cell">
<div class="box">
   
     
    <div class="gallery-id-thumb"><img class="u-full-width-gallery" src="../../images/gallery/{!! $image->img!!}" height="180"></div>
   
     </div></div>
      @endforeach
@endforeach
</div>


@endif
@stop