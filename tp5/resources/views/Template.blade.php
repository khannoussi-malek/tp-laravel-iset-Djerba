<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link active" href="{{url('')}}">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{url('matiere')}}">Matiere</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{url('addmatiere')}}">Ajout Matiere</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="{{url('epreuves')}}">Epreuve</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="{{url('addepreuve')}}">Ajout Epreuve</a>
				</li>
			</ul>
			<h3 class="text-info text-center">
				template 
            </h3>
            @yield('table')
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>