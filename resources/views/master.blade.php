<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/master.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>Dashboard SuFinance</title>
</head>
<body>

	<header>

	</header>
    <div class="col-md-12 p-2">
            <div class="container-fluid">
                <img src="finance.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
            </div>
    </div>
    <div class="row">
        <div class="col-md-2">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <br>
                        <br>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
        </div>
        <div class="col-md-10">
            <div class="container">
                <h3> @yield('title') </h3>

            @yield('content')
        </div>
        {{-- <div class="col-md-2">
        </div> --}}
    </div>


	<footer>

	</footer>

</body>
</html>
