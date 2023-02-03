<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/app.css">
</head>

<body class="bg-info text-black">
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5 text-white">Register Form</h2>
        <div class="text-center mb-5 text-dark text-white">Please Register</div>
        <div class="card my-5">
          <form class="card-body cardbody-color p-lg-5 bg-light text-black" action="/registerUser" method="post">
            @csrf
            <div class="text-center">
              <img src="./img/login.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>
            <div class="mb-3">
                <label for="exampleInputUSername" class="form-label">Username</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="usernameHelp">
                <div id="usernameHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp">
                <div id="passwordHelp" class="form-text">8 Karakter</div>
            </div>
            <div class="text-center">
              <button class="btn btn-primary px-5 mb-5 w-100">submit</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>