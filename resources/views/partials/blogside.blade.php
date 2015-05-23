<!-- sidebar nav -->
<nav id="sidebar-nav">



	<div class="right-column-header"><h3>Latest Posts</h3></div>




@foreach($posts as $post)
<div class="rev-blog-latest-wrap">
<div class="rev-blog-latest-header"> {!! $post->header !!} </div>
<div class="rev-blog-latest-left"><img src="images/blog/{{ $post->img }}" width="80" height="60"></div>
<div class="rev-blog-latest-right">
<div class="rev-blog-latest-date"><i class="fa fa-calendar"></i>&nbsp;{!! $post->date !!}</div>
<div class="rev-blog-latest-content">{!! $post->content !!}</div>	
</div>
<div class="rev-blog-latest-readmore-wrap">
<a href="{!! URL::route('post.id', [$post->id]) !!}"><div class="rev-blog-latest-readmore">Read More</div></a>
</div>
</div>
@endforeach

	

	
	<div class="right-column-header"><h3>Archive</h3></div>			
	<a href=""><div class="blog-archive-months"><i class="fa fa-chevron-right"></i>&nbsp;December</div></a>
	<a href=""><div class="blog-archive-months"><i class="fa fa-chevron-right"></i>&nbsp;November</div></a>	
	<a href=""><div class="blog-archive-months"><i class="fa fa-chevron-right"></i>&nbsp;October</div></a>	
	
</nav>