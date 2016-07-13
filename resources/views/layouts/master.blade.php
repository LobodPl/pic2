
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title')</title>

    <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="./bower_components/lightbox2/dist/css/lightbox.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Pic</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Galeria</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-12">
         <br>
         <br>
         <br>
         <div class="row">
<nav class="navbar navbar-default">
<div class="container-fluid"> 
<div class="navbar-header "> 
<button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target=#bs-example-navbar-collapse-2" aria-expanded="false"> 
<span class="sr-only"></span>
 <span class="icon-bar"></span> <span class="icon-bar"></span> 
 <span class="icon-bar"></span> </button> 
 <a class="navbar-brand" href="#">Galeria</a> 
 </div> 
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2"> 
 <form class="navbar-form navbar-left" role="search"> <div class="form-group"> 
 <input type="text" name="szukaj" class="form-control" placeholder="Szukaj" value="{{ $query_string }}">
  </div> 
  <button type="submit" class="btn btn-default">Ok</button> </form> </div> </div></nav>
		   <br>
		   </div>
			</div>
			<hr>
          <div class="row">
            	        @section('sidebar')
   						@show
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->
      </div><!--/row-->

      <hr>

      <footer>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="./bower_components/lightbox2/dist/js/lightbox-plus-jquery.min.js"></script>
  </body>
</html>
