

<div class="reviews-header"><h4>PHOTOS</h4></div>
 <div class="reviews-photos-wrap">   
 @foreach($ids as $id)
 <a class="fancybox-thumb" rel="fancybox-thumb" href="../../images/gallery/{{ $id->img }}"><div class="reviews-photos-thumb"><img class="u-full-width" src="../../images/gallery/{{ $id->img }}" height="100"></div></a>
@endforeach
</div>

