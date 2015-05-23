@extends('layouts.twocolumn')
@section('content')


<!--reviews--> 
@foreach ($links as $link)
<div class="links-section-header-wrap">
	<div class="links-section-header">{!! $link->category !!}</div>
</div>
<div class="Grid grid--flexcells grid--gutters grid--full gridsm--full gridmd--1of2 gridlg--1of3">
	@foreach ($link->linksitems as $linksitem)


<div class="Grid-cell">
<div class="box">
	<div class="links-cats-img"><img class="u-full-width-links" src="images/links/{{ $linksitem->img }}"> </div>
	<a href="http://{{ $link->link1 }}" target="_blank"><div class="links-cats-link">{!! $linksitem->link !!}</div></a>
	<div class="links-cats-desc">{!! $linksitem->text !!}</div>
	<div class="link-share">
	<a href="http://twitter.com/share?text={{ $link->desc1 }}%20-%20{{ $link->link1 }}%20from%20%40SuperBerlin%20&url=http://www.SuperBerlin" target="_blank"><div class="links-share-twitter"><i class="fa fa-twitter"></i>&nbsp;twitter</div></a>
	<a href="https://www.facebook.com/sharer/sharer.php?u={{ $link->link1 }}" target="_blank"><div class="links-share-facebook"><i class="fa fa-facebook"></i>&nbsp;facebook</div></a>
	<a href="https://plus.google.com/share?url={{ $link->link1 }}" target="_blank"><div class="links-share-google"><i class="fa fa-google-plus"></i>&nbsp;google</div></a>
</div>

</div>				
</div>
@endforeach
</div>	
@endforeach



@stop

	