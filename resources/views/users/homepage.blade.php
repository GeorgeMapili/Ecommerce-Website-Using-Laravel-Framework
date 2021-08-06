@extends("layouts.base")

@section("title", "Ecommerce | Homepage")

@section("content")




<section class="main_content m-5 d-flex">
	<div class="container d-flex justify-content-center justify-content-around flex-wrap">

	@for($x = 0; $x <= 5; $x++)
		<form action="https://www.facebook.com" method="POST">
			<div class="card my-3" style="width: 18rem;">
			  <img src="https://bit.ly/3yuMQ3b" class="card-img-top card_image" alt="...">
			  <div class="card-body">
			    <p class="card-title">Card title</p>
			    <p>Price</p>
			    <p class="card-text"></p>
    	
    			<button class="btn btn-primary card_buttons submit" type="submit">Cart</button>
    			<button class="btn btn-primary card_buttons submit" type="submit">Wishlist</button>

			  </div>
			</div>
		</form>
	@endfor

	</div>

</section>

<div class="container d-flex justify-content-center ">
  <ul class="pagination pagination-sm">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</div>

@endsection