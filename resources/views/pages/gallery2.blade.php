@extends('layouts.default')
@section('content')
<div class="content-wrap">
<div class="content-center-wrap">

@foreach ($albums as $album)
    {{ $album->id }}
     {{ $album->title }}
    @foreach ($album->images as $image)
       
    @endforeach
@endforeach
  

@if(isset($albums)) 
   @foreach ($albums as $album)
  	
    
    {{ $album->title }}
   	  <a href="{{ URL::route('gallery.id', [$album->id]) }}"><div class="blog-readmore">Read More</div></a>
   
	@endforeach
@elseif(isset($ids)) 
	@foreach ($albums as $album)
    {{ $album->id }}
     {{ $album->title }}
    @foreach ($album->images as $image)
       
    @endforeach
@endforeach


</div></div>

@endif
@stop