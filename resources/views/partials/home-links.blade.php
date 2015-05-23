@foreach($links as $link)
<div class="home-partials-links-cats-wrap">
<div class="home-partials-links-cats-img"><img src="images/links/{{ $link->img1 }}"> </div>
<a href="http://{{ $link->link1 }}" target="_blank"><div class="home-partials-links-cats-link">{{ $link->link2 }}</div></a>
<div class="home-partials-links-cats-desc">{{ $link->desc1 }}</div>
</div>
@endforeach
