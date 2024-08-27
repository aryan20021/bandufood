<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/css/Adminloginpage.css">
</head>
<body>
    @if (session('error'))
    <div class="alert alert-success">
        {{session('error')}}
    </div>
    @endif
    <div class="wrapper">
        <div class="container">
          <div class="col-left">
            <div class="login-text">
              <h2>Welcome Back</h2>
              <p>Create your account.<br>It's totally free.</p>
              <a class="btn" href="{{route('customersignupview')}}">Sign Up</a>
            </div>
          </div>
          <div class="col-right">
            <div class="login-form">
              <h2>Login</h2>
              <form action="{{route('customer.login')}}" method="POST">
                @csrf
                <p>
                  <label>Username or email address<span>*</span></label>
                  <input type="text" name="email" placeholder="Username or Email" required>
                </p>
                <p>
                  <label>Password<span>*</span></label>
                  <input type="password" name="password" placeholder="Password" required>
                </p>
                <p>
                  <input type="submit" value="Sing In" />
                </p>
                <p>
                  <a href="">Forget Password?</a>
                </p>
              </form>
            </div>
          </div>
        </div>

      </div>

</body>
</html>
