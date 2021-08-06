<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<link rel="stylesheet" href="style/style.css">

<!-- Boostrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<style type="text/css">
	
	body {
		background-image: url("https://bit.ly/3s0mNhR");
		background-repeat: repeat;
		background-size: cover;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.cont {
		border-radius: 20px;
		background: rgb(20, 150, 190, 70%);
		height: 510px;
		width: 400px;
	}

	.qr_container {
		border: 1px solid white;
		width: 200px;
		height: 200px;
	}

	.qr_button {
		width: 200px;
		margin: 5px;
	}

	.separator {
		margin: 20px 1px 10px 1px;
		border: 1px solid white;
	}

	.qr_button_box {
		width: 100%;
	}

</style>
<body>


	<section class="login_section d-flex align-items-center justify-content-center text-light">
		<div class="container cont p-4">
			<h1 class="text-center">Register</h1>
			<form>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Username</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			  </div>			  
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1">
			  </div>
			  <button type="submit" class="btn btn-primary">Register</button>
			</form>

			<div class="separator align-self-center"></div>
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary my-2 qr_button_box" data-toggle="modal" data-target="#exampleModal">
			  Login via QR Code
			</button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>

			      <div class="modal-body">
			      	<!-- QR CODE -->
							<div class="container cont d-flex justify-content-center align-items-center flex-column">
								<div class="qr_container my-3"></div>
								<div class="btn btn-primary qr_button">Scan</div>
								<div class="btn btn-primary qr_button">Upload</div>
							</div>
			      </div>

			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="registration text-center my-2">
				<p>You have an account?<a href="{{ route('login')}}"> Login</a></p>
			</div>
		</div>
	</section>



	<section class="login_qr">

	</section>


	<section class="login_modal">

	</section>

<!-- Bootstra JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>