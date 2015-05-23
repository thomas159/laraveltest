@extends('layouts.TwoColumn')
@section('title','Blog')
@section('content')

@if(isset($posts)) 
   @foreach ($posts as $post)
  	<div class="blog-outer-wrap">
    <div class="blog-header">{!! $post->header !!}</div>
      <div class="blog-left">
       <div class="blog-img"><img src="images/blog/{{ $post->img}}" width="300" height="180"></div>
      </div>
     <div class="blog-right">
   	  
       
   		<div class="blog-text">{!! str_limit($post->content, $limit = 300) !!}</div>
   	  <a href="{!! URL::route('post.id', [$post->id]) !!}"><div class="blog-readmore">Read More</div></a>
   	  <div class="blog-readmore-bottom-border"></div>
     </div>
		</div>

	@endforeach

@elseif(isset($ids)) 
	@foreach($ids as $id)
  		<div class="rev-blog-id-outer-wrap">
		<div class="rev-blog-id-img"><img src="../../images/blog/{{ $id->img}}"> </div>
   		<div class="rev-blog-id-header">{{ $id->header }}</div>
   		<div class="rev-blog-id-text">{{ $id->content }}</div>
        </div>
    <div class="left-column-header-no-margin"><h3>Map</h3></div>
     <div class="rev-blog-id-map">{{ $id->maps->link }}</div>
     @if($id->video != "" )
       <div class="left-column-header-no-margin"><h3>Videos</h3></div>
    {{$id->video}}
     @endif
     @endforeach
 @include('partials.blogphotopartial')
@elseif(isset($months)) 
	@foreach ($months as $month)
	 <div class="blog-outer-wrap">
      <div class="blog-left">
       <div class="blog-img"><img src="../../images/blog/{{ $month->img}}" width="300" height="180"></div>
      </div>

     <div class="blog-right">
      <div class="blog-header">{{ $month->header }}</div>
      <div class="blog-text">{{ Str::limit($month->content, 200) }}</div>
      <a href="{{ URL::route('post.id', [$month->id]) }}"><div class="blog-readmore">Read More</div></a>
      <div class="blog-readmore-bottom-border"></div>
     </div>
    </div>
	@endforeach
@endif

@if(isset($blogs)) 
 <?php echo $blogs->links(); ?>
@elseif(isset($months)) 
 <?php echo $months->links(); ?>
@endif
@stop

@section('sidebar')
@include('partials.blogside')
@stop

