<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  {{-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">   --}}
  <link href="{{ asset('css/bootstrap.min.css') }}"  rel="stylesheet" >
  <link href="{{ asset('css/style.css') }}"  rel="stylesheet" >

  <!-- Custom styles for this template -->
  {{-- <link href="css/simple-sidebar.css" rel="stylesheet"> --}}

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Start Bootstrap </div>
      <div class="list-group list-group-flush">
        <a href="{{ route('home') }}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="{{ url('/news') }}" class="list-group-item list-group-item-action bg-light">Noticias</a>
        <a href="{{ url('/categories') }}" class="list-group-item list-group-item-action bg-light">Categorias</a>
        {{-- <a href="#" class="list-group-item list-group-item-action bg-light">Events</a> --}}
        {{-- <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a> --}}
        <a href="#" class="list-group-item list-group-item-action bg-light">Meu Perfil</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
      	@yield('content')
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  {{-- <script src="jquery.min.js"></script> --}}
  {{-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}

  <!-- Menu Toggle Script -->
  <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
  
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>
</html>
