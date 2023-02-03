<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/app.css">
</head>

<body class="bg-info text-black">
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5 text-white">Login Form</h2>
        <div class="text-center mb-5 text-dark text-white">Please Login!</div>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5 bg-light text-black" action="/loginProses" method="post">
            @csrf
            <div class="text-center">
              <img src="./img/login.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="row">
  						<div class="col-md-6 col-12">
  							<div class="form-group form-check">
    							<input type="checkbox" class="form-check-input" id="exampleCheck1">
    							<label class="form-check-label" for="exampleCheck1">Remember Me</label>
  							</div>
  						</div>
  						<div class="col-md-6 col-12 bn">Forgot Password</div>
  					</div>
            <div class="text-center"><button type="submit" class="btn btn-primary px-5 mb-5 w-100">Login</button>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
              Registered? <a href="/register" class="text-dark fw-bold"> Create an
                Account</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>