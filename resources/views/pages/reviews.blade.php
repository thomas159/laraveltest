@extends('layouts.twoColumn')
@section('content')
@if(isset($reviews)) 
<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--full">
	<div class="grid-cell">
		<div class="box">
			<div class="reviews-top10-wrap">main review</div>
		</div>				
	</div>
</div>

<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--1of4 gridlg--1of4">
	<div class="grid-cell">
		<div class="box">
			<div class="reviews-top10-wrap">Top 10 Indian Restaurants</div>
			<div class="reviews-top10-img"><img class="u-full-width" src="images/reviews/top10/curry.jpg"></div>
			<div class="revies-top10-top10">CUrry1</div>
			<div class="revies-top10-top10">Curry2</div>
			<div class="revies-top10-top10">Curry3</div>
			<div class="revies-top10-top10">Curry4</div>
			<div class="revies-top10-top10">Curry5</div>
		</div>				
	</div>
	<div class="grid-cell">
		<div class="box">
			<div class="reviews-top10-wrap">Top 10 Restaurants</div>
		</div>				
	</div>
	<div class="grid-cell">
		<div class="box">
			<div class="reviews-top10-wrap">Top 10 Restaurants</div>
		</div>				
	</div>
	<div class="grid-cell">
		<div class="box">
			<div class="reviews-top10-wrap">Top 10 Restaurants</div>
		</div>				
	</div>
</div>
Top 10 Restaurants
Top 10 Bars
Top Vegetarian
Top Vegan
Top Curry
Top Kebab

<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--1of2 gridlg--1of2">
@foreach ($reviews as $review)
<!--reviews--> 

	<div class="grid-cell">
		<div class="box">
			<div class="reviews-main-img"><img class="u-full-width-reviews" src="../../images/reviews/{{ $review->img }}" ></div>
			<div class="reviews-main-price">Price £££</div>	
			<div class="reviews-main-content">{!! str_limit($review->content, $limit = 100) !!}</div>
			<a href="{!! URL::route('reviews.slug',[$review->categorys->cat,$review->slug] )  !!}"><div class="reviews-readmore">Read More</div></a>
		</div>				
	</div>
@endforeach
</div>
<div class="clear-fix"></div>

@elseif(isset($slugs)) 
<div class="grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--full gridlg--full">
@foreach($slugs as $slug)
<div class="grid-cell">
		<div class="box">
<img class="u-full-width" src="../../images/gallery/cityscape_berlin.jpg" style="height:400px;">
     <div class="reviews-header"><h4>REVIEW</h4></div>
   <div class="reviews-underline"><h5>Tooting curry</h5></div>
Price range £10-15 ££
</br>
 After an uncomfortably long time, we got back on the Balti on a Wednesday night. The challenge had been set by an anonymous tipster who posted on our last blog – “Do yourselves a favour and try Apollo Banana Leaf, it is incredible!” Not wanting to disappoint a fan we rose to the challenge. The evening started with a long wait for Tom outside Tooting Broadway tube – I thought something was afoot and it turned out he’d been at the podiatrist (and grossly overcharged).

</br>
Once stocked up on BYO beers, we trekked down to Apollo Banana Leaf, boldly going where no curry blogger had gone before; one small step for naan, one giant leap for naan-kind. Mike Stone was supposed to join us, but a bout of the measles (that later turned out to be mis-diagnosed) kept him grounded. This curry mission didn’t go as smoothly as planned, but nevertheless we made it home to tell the tale…
</br>
Venue
</br>
Seemingly named after an aborted, 1970s, NASA mission, Apollo Banana Leaf, is a Sri Lankan restaurant situated on the outer space of Tooting (the borders are disputed, as the scene is constantly expanding). Unassuming from the outside, it is deceptively large inside, much like the TARDIS. Whilst more traditional in its restaurant layout than many Tooting establishments it is still more Millenium Falcon than… a more advanced space ship that I can’t think of (Star Wars is overrated – there, I said it).
</br>
The atmosphere inside was lively, as was the décor. The walls were covered top to bottom with Windows desktop-esque landscapes and in the gaps were some choice artworks; one, a painting of American Indians, seemed quite alien and out of place. We were joined at the dinner table by some ants which has to be considered a negative, however at a neighbouring table sat one Alun Armstrong (New Tricks) – our first celebrity spot and definitely worth an X Factor point. Despite attracting the rich and famous, this is all in all a pretty standard establishment (plus the ants) so a 6/10 for Venue.
</br>

Starters and Sides
</br>
Poppadoms X 5
Mutton Rolls X 5
Chappathi X 3
Parotta X 3
Chicken masala dosa
</br>
As a Sri Lankan restaurant we opted for that part of the world as we gazed down upon on our menus. After radio silence for a good hour, the waiters finally brought our poppadoms which were rather disappointing, and the sole accompaniment of mango chutney was a meagre ration size. We are sad to transmit that these were probably the most disappointing poppadoms we’ve experienced on the circuit so far.
</br></br>
The mutton rolls were better, but looked like giant croquet potatoes and you could’ve been forgiven for thinking they’d come from Iceland down the road. The chappathi and parotta were standard, even if we couldn’t agree on which was which, but the chicken masala dosa was pretty decent - the stand out dish. However, in general, nothing star-studded about the starters here and the sub-par poppadoms have to be marked down - 5/10
</br>
Curry
</br>
Squid curry
Vegetable Kothu
Special Kothu
Mixed Devil
Special Biryani
</br>
Kothu is a traditional Sri Lankan dish containing chopped Roti bread; we opted for the Special and Vegetable varieties. The addition of the Roti adds texture, but does feel like a break in food convention. As previously established in other reviews, the word special on Tooting menus is used about as sparingly as the BBC use Fern Cotton, and, much like the ubiquitous Cotton, often leaves one underwhelmed and let down. In fairness, Apollo bucked the trend.
</br>
The Special Kothu was one of few specials listed on the menu and was pleasantly unique. In this instance, Special meant a blend of vegetables, chicken and squid. Unsurprisingly, the Squid Curry also contained squid, but so did pretty much every dish. As someone with a mild aversion to sea food this was far from ideal, but my co-eaters enjoyed the variety, especially the most varied dish of all – the Mixed Devil. Once again, we were drawn to the most ambiguous item on the menu, in this case, a £14.99, spicy meat mountain of chicken, lamb and squid. This was an interesting and generous addition to the table, with strong flavours and a meat for all seasons (nearly).

  




<div class="reviews-header"><h4>MAP</h4></div>
<div class="rev-blog-id-map">{!! $slug->maps->link !!}</div>
 @include('partials.photopartial')
@endforeach
</div>
</div>
</div> <!--grid end-->
@elseif(isset($cat_ids)) 
@foreach ($cat_ids as $cat_id)
<div class="reviews-wrap">
<div class="reviews-left"><img src="../../images/reviews/{{ $cat_id->img }}"></div>
<div class="reviews-right">
<div class="reviews-top-wrap">
<div class="reviews-header"> {{ $cat_id->header }}</div>
<a href="{{ URL::route('reviews.category', [$cat_id->cat_id]) }}"><div class="reviews-category">{{ $cat_id->categorys->cat }}</div>
</div>
<div class="reviews-date"><i class="fa fa-calendar"></i>&nbsp;{{ $cat_id->date }}</div>
<div class="reviews-content">{!! str_limit($cat_id->content, $limit = 300) !!}</div>
<a href="{{ URL::route('reviews.id', [$cat_id->id]) }}"><div class="reviews-readmore">Read More</div></a>
</div>
</div>

	@endforeach
	@endif

@if(isset($reviews)) 
<?php echo $reviews->render(); ?>
 @elseif(isset($ids))
  
@endif
@stop
@section('sidebar')
<!-- Chooses which sidebar to display -->

@if(isset($reviews)) 
	@include('partials.reviews-side')
@elseif(isset($ids))
	@include('partials.reviews-side-menu')
@endif

@stop
