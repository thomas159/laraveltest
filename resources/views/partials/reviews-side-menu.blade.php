Menu
Sample Prices

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
		
	
<div style="overflow: hidden;">
  <div style="background: blue;float: left;width: 65%;padding-bottom: 500px;margin-bottom: -500px;">column a<br />column a</div>
  <div style="height:10%; background: red;float: right;width: 35%; display: flex;
  flex-direction: column;
  justify-content: center;">column b</div>
</div>
