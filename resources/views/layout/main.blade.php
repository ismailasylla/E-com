<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Future-Technologie</title>
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="js/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="row">
<div class="md-12">
   

    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #1995dc; line-height: 1px !important; ">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="images/r3.png" style="width: 80px; margin-top: -10px;" class="logo">
                </a><span class="navbar-brand" style="color: white">Future-Technology</span>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <!--<li><a href="#" target="_blank" style="color: white">S'inscrire</a></li>-->
                
                <li id="log"><a href="connect.php"  style="color: white">Connexion et Inscription</a></li>
                <li>
                    <a href="#" style="color: white">Contact</a>
                </li>
                <!-- <li>
                    <a href="#" class="btn btn-info btn-lg">
                        <span class="glyphicon glyphicon-shopping-cart" style="color: white"></span> Shopping Cart
                    </a>
                </li> -->


                <li class="input-group-btn" style="margin-top: 8px; margin-right: 5px;">
                <button class="btn btn-warning" type="button" style="border-top-left-radius: 7px !important;"> Panier <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>&zwnj;</button>
              </li>
            </ul>
            

<div class="nav navbar-nav">
  
      <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download" style="color: white">Nos Services<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a href="http://jsfiddle.net/bootswatch/9y480qo5/">Reparation & Maintenance</a></li>
                <li class="divider"></li>
                <li><a href="./bootstrap.min.css">PC</a></li>
                <li><a href="./bootstrap.css">LAPTOPS</a></li>
                <li class="divider"></li>
                <li><a href="./variables.less">Imprimantes</a></li>
                <!-- <li><a href="./bootswatch.less"></a></li>
                <li class="divider"></li>
                <li><a href="./_variables.scss">_variables.scss</a></li>
                <li><a href="./_bootswatch.scss">_bootswatch.scss</a></li> -->
              </ul>
            </li>
</div>

<form class="navbar-form " role="search">
          <div class="input-group"  style="margin-left: 370px; margin-top: -50px;">
              <span class="input-group-btn">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acheter <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Ordinateurs portables & Tablettes</a></li>
                  <li><a href="#">Ordinateurs de bureau & Ecrans</a></li>
                  <li><a href="#">Stockage & Réseaux</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Composants PC</a></li>
                  <li><a href="#">Imprimantes & Encres
                  <li><a href="#">Logiciels</a></li>
                  <li><a href="#">Fournitures scolaires et de bureau</a></li>
                  <li><a href="#">Jeux PC</a></li>
                  <li><a href="#">Tous les accessoires Informatique</a></li>
                  <!-- <li role="separator" class="divider"></li>
                  <li><a href="#">Services</a></li> -->
                </ul>
              </span><!-- /btn-group -->
              <input type="text" class="form-control" aria-label="..." style="width: 550px;">
              <span class="input-group-btn">
                <button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&zwnj;</button>
              </span>
        </div><!-- /input-group -->
    </form>
          
        </div>
    </nav>
            <!-- End-Navbar ================================================== -->



                    @yield('content')



<footer class="text-center" id="footer" >&copy; Copyright 2017-2018 Future-Technology</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
   <!-- <script src="js/bootstrap.js"></script> -->
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>



 
    
  </body>
</html>





