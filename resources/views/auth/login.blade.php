<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
</head>

<style>
.login-clean {
  background: #f1f7fc;
  padding: 80px 0;
}

.login-clean form {
  max-width: 320px;
  width: 90%;
  margin: 0 auto;
  background-color: #ffffff;
  padding: 40px;
  border-radius: 4px;
  color: #505e6c;
  box-shadow: 1px 1px 5px rgba(0,0,0,0.1);
}

.login-clean .illustration {
  text-align: center;
  padding: 0 0 20px;
  font-size: 100px;
  color: rgb(244,71,107);
}

.login-clean form .form-control {
  background: #f7f9fc;
  border: none;
  border-bottom: 1px solid #dfe7f1;
  border-radius: 0;
  box-shadow: none;
  outline: none;
  color: inherit;
  text-indent: 8px;
  height: 42px;
}

.login-clean form .btn-primary {
  background: #f4476b;
  border: none;
  border-radius: 4px;
  padding: 11px;
  box-shadow: none;
  margin-top: 26px;
  text-shadow: none;
  outline: none !important;
}

.login-clean form .btn-primary:hover, .login-clean form .btn-primary:active {
  background: #eb3b60;
}

.login-clean form .btn-primary:active {
  transform: translateY(1px);
}

.login-clean form .forgot {
  display: block;
  text-align: center;
  font-size: 12px;
  color: #6f7a85;
  opacity: 0.9;
  text-decoration: none;
}

.login-clean form .forgot:hover, .login-clean form .forgot:active {
  opacity: 1;
  text-decoration: none;
}
</style>

<body>
    <main class="page landing-page">
        <section style="padding-top: 15px;padding-bottom: 40px;padding-left: 10px;padding-right: 10px;">
            <div class="container" style="margin-bottom: 20px;padding-left: 0px;padding-right: 0px;">
                <section class="login-clean" style="background: rgb(255,255,255);">
                    <form method="post" action="login">
                        @csrf
                        
                        <div class="illustration"><img src="img/logo.png" style="width: 100%;"></div>
                        <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username"></div>
                        <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" style="border-radius: 8px;"></div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: rgb(0,0,0);">Log In</button></div><a class="invisible forgot" href="#">Forgot your email or password?</a>
                    </form>
                </section>
            </div>
        </section>
    </main>
</body>

</html>
