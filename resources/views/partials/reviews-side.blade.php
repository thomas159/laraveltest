<!-- sidebar nav -->
	<div class="reviews-side-wrap-outer">
     @foreach($reviews as $review)
    <div class="reviews-side-wrap">
    <div class="reviews-side-col1"><span class="rev-no"><h6>{{ $review->id }}</h6></span></div>
    <div class="reviews-side-col2"><img class="u-full-width" src="../../images/reviews/{{ $review->img }}"></div>
    <div class="reviews-side-col3">{{ $review->header }}</div>
    <div style="clear: both;"></div>
  </div>
  @endforeach
</div>
	

     