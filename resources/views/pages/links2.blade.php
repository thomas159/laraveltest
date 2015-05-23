@extends('layouts.default')
@section('content')

<!-- content -->
<div class="content-wrap">
<div class="content-center-wrap">
@foreach ($links as $link)
<div class="links-wrap-wrap">
@if($link->section != "" )
<div class="links-section-header">{{ $link->section }}</div>
@endif
@if($link->link1 != "" )
<div class="links-cats-wrap">
<div class="links-cats-img"><img src="images/links/{{ $link->img1 }}"> </div>
<a href="http://{{ $link->link1 }}" target="_blank"><div class="links-cats-link">{{ $link->link1 }}</div></a>
<div class="links-cats-desc">{{ $link->desc1 }}</div>
<div class="link-share">
<a href="http://twitter.com/share?text={{ $link->desc1 }}%20-%20{{ $link->link1 }}%20from%20%40SuperBerlin%20&url=http://www.SuperBerlin" target="_blank"><div class="links-share-twitter"><i class="fa fa-twitter"></i>&nbsp;twitter</div></a>
<a href="https://www.facebook.com/sharer/sharer.php?u={{ $link->link1 }}" target="_blank"><div class="links-share-facebook"><i class="fa fa-facebook"></i>&nbsp;facebook</div></a>
<a href="https://plus.google.com/share?url={{ $link->link1 }}" target="_blank"><div class="links-share-google"><i class="fa fa-google-plus"></i>&nbsp;google</div></a>
</div>
</div>
@endif

@if($link->link2 != "" )
<div class="links-cats-wrap">
<div class="links-cats-img"><img src="images/links/{{ $link->img2 }}"> </div>
<a href="http://{{ $link->link2 }}" target="_blank"><div class="links-cats-link">{{ $link->link2 }}</div></a>
<div class="links-cats-desc">{{ $link->desc2 }}</div>
</div>
@endif

@if(isset($link) && $link->link3 != "")

<div class="links-cats-wrap">
<div class="links-cats-img"><img src="images/links/{{ $link->img3 }}"> </div>
<a href="http://{{ $link->link3 }}" target="_blank"><div class="links-cats-link">{{ $link->link3 }}</div></a>
<div class="links-cats-desc">{{ $link->desc3 }}</div>
</div>
@endif
</div>
@endforeach

</div>	
</div>	

@stop