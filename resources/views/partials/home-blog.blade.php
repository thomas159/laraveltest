	@foreach ($posts as $post)
  	<div class="blog-outer-wrap">
      <div class="blog-left">
       <div class="blog-img"><img src="images/blog/{{ $post->img}}" width="300" height="180"></div>
      </div>

     <div class="blog-right">
   	  <div class="blog-header">{{ $post->header }}</div>
   		<div class="blog-text"></div>
   	  <a href="{{ URL::route('post.id', [$post->id]) }}"><div class="blog-readmore">Read More</div></a>
   	  <div class="blog-readmore-bottom-border"></div>
     </div>
		</div>
	@endforeach