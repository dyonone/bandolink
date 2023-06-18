<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
	<link rel="stylesheet" href="css/login.css">
	</head>
	<body class="background" style="background-image: url(img/background.jpg);">
		<div class="container">
			<div class="row justify-content-center vh-100">
				<div class="d-flex col-lg-9 align-items-center">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(img/{{ $img }}.jpg);"></div>
						<div class="login-wrap px-4 pt-4 pb-2 px-md-5 pt-md-5 pb-md-3 bg-light">
							
							<div class="d-flex justify-content-center ml-2"><img src="img/bandolink.png" width="180"></div>
							<form action="/login" method="POST">
								@csrf
								<div class="form-group mb-2">
									<label class="label" for="name">NIK</label>
									<input type="text" class="form-control" name="nik" placeholder="NIK" required>
								</div>
								<div class="form-group mb-4">
									<label class="label" for="password">Password</label>
									<input type="password" class="form-control" name="password" placeholder="Password" required>
								</div>
								<button type="submit" class="btn btn-primary rounded px-3 w-100">LOGIN</button>
							</form>
							<div class="mt-4 text-center small">
									© Copyright Bando Indonesia 2023
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>