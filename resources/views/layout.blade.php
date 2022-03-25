<!DOCTYPE html>
<html>

<head>
  <title>My Stock</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="stocks">My Stock</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('providers.index')}}">Providers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('products.index') }}">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('stocks.index') }}">Stock</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('users.index') }}">Employees</a>
        </li>

      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="card" style="margin-top: 20px;">
      <div class="card-body">
        @yield('content')
      </div>
    </div>
  </div>

</body>

</html>