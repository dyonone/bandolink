<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
	<link rel="stylesheet" href="css/login.css">
	</head>
	<body>
		<div class="container">
			<div class="row justify-content-center vh-100">
				<div class="d-flex col-lg-8 align-items-center">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(img/login-bando.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
							<h3 class="mb-2">Masuk</h3>
							<form action="/login" method="POST" class="signin-form">
								@csrf
								<div class="form-group mb-2">
									<label class="label" for="name">NIK</label>
									<input type="text" class="form-control" name="nik" placeholder="NIK" required>
								</div>
								<div class="form-group mb-4">
									<label class="label" for="password">Kata Sandi</label>
									<input type="password" class="form-control" name="password" placeholder="Kata Sandi" required>
								</div>
								<button type="submit" class="btn btn-primary rounded px-3 w-100">Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>