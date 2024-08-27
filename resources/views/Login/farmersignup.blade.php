<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="css/login css/signup.css">

</head>
<body>
    <div class="container">
        <div class="card">
          <div class="card_title">
            @if (session('error'))
            <div class="alert alert-success">
                {{session('error')}}
            </div>
            @endif
            <h1>Create Account</h1>
            <span>Already have an account? <a href="{{route('farmerloginview')}}">Sign In</a></span>
          </div>
          <div class="form">
          <form action="{{route('farmer.register')}}" method="post">
            @csrf
            <input type="text" name="username" id="username" placeholder="UserName" />
            <input type="email" name="email" placeholder="Email" id="email" />
            <input type="password" name="password" placeholder="Password" id="password" />
            <button>Sign Up</button>
            </form>
          </div>
          <div class="card_terms">
              <input type="checkbox" name="" id="terms"> <span>I have read and agree to the <a href="">Terms of Service</a></span>
          </div>
        </div>
      </div>

</body>
</html>
