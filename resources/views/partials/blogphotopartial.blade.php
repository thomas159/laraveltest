

<div class="left-column-header-no-margin"><h3>Photos</h3></div>
 <div class="rev-blog-id-photos-wrap">   
 @foreach($ids as $id)
 <a class="fancybox-thumb" rel="fancybox-thumb" href="../../images/gallery/{{ $id->img }}"><div class="rev-blog-id-photo"><img src="../../images/gallery/{{ $id->img }}" width="175" height="150" ></div></a>
@endforeach
</div>

