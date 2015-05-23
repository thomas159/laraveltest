<!-- sidebar nav -->

<ul class="tabs">
        <li>
          <input type="radio" checked name="tabs" id="tab1">
          <label for="tab1">Burgers</label>
          <div id="tab-content1" class="tab-content animated fadeIn">
            
 

	

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
		
	

          </div>
        </li>
  
  
        <li>   
          <input type="radio" name="tabs" id="tab2">
          <label for="tab2">Curry</label>
          <div id="tab-content2" class="tab-content animated fadeIn">
            
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
          </div>
        </li>
  
   <li>
         
          <input type="radio" name="tabs" id="tab3">
          <label for="tab3">tab 3</label>
          <div id="tab-content3" class="tab-content animated fadeIn">
           It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
          </div>
        </li>
  


