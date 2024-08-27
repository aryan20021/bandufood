<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Selection</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/login css/loginoption.css">
</head>
<body>
    @if (session('key'))
    <div class="alert alert-success">
        {{session('error')}}
    </div>

    @endif
  <div class="container">
    <div class="text-center mb-4">
      <h1>Choose Your Login</h1>
    </div>
    <div class="row">
      <div class="col-md-6 mb-4">
        <a href="{{route('customerloginview')}}" class="login-option" onclick="selectOption('customerRadio')">
          <div class="custom-control custom-radio">
            <input type="radio" id="customerRadio" name="loginOption" class="custom-control-input">
            <label class="custom-control-label" for="customerRadio"></label>
          </div>
          <h3>Login as Customer</h3>
          <p>Access your customer account.</p>
        </a>
      </div>
      <div class="col-md-6 mb-4">
        <a href="{{route('farmerloginview')}}" class="login-option" onclick="selectOption('farmerRadio')">
          <div class="custom-control custom-radio">
            <input type="radio" id="farmerRadio" name="loginOption" class="custom-control-input">
            <label class="custom-control-label" for="farmerRadio"></label>
          </div>
          <h3>Login as Farmer</h3>
          <p>Access your farmer account.</p>
        </a>
      </div>
    </div>
  </div>

  <script>
    function selectOption(optionId) {
      document.getElementById(optionId).checked = true;
    }
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
