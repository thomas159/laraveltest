	
<div class="container">
	<div class="twelve columns">
		<div class="row" >
			@foreach($reviews as $review)
			<div class="four columns">
				<div class="home-box-wrap">
         			<div class="home-img"><img class="u-full-width-alt" src="../../images/reviews/{!! $review->img !!}"></div>
         			<div class="home-content-alt"><h5>This is the text for the content</h5></div>
          			<div class="home-content-text-alt">This is the for the content</div>
          			<div class="home-readmore">Read More</div>
     			</div>
 			</div>
			@endforeach
   		</div>
	</div>
</div>