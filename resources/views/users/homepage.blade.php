@extends("layouts.base")

@section("title", "Ecommerce | Homepage")

@section("content")


<section class="main_content m-5 d-flex">
	<div class="container d-flex justify-content-center justify-content-around flex-wrap">
@for($x = 0; $x <= 5; $x++)
		<div class="card mt-3" style="width: 18rem;">
		  <img src="https://bit.ly/3yuMQ3b" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text"></p>
		    <div class="buttons d-flex justify-content-center">	    	
			    <a href="#" class="btn btn-primary card_buttons">Cart</a>
			    <a href="#" class="btn btn-primary card_buttons">Wishlit</a>
		    </div>
		  </div>
		</div>
@endfor
	</div>
</section>


@endsection