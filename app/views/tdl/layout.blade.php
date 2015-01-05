
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>toD0List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/laravel/bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) { 
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="/laravel/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

 
  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="">toD0List  </a>
          <div class="nav-collapse collapse">
            <ul class="nav">
                </ul>
              </li>
            </ul>
            <form class="navbar-form pull-right">
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
                  <h1>Bienvenue dans ToD0List!</h1>
            <p> <p>ToD0List est un gestionnaire de tache facile d'utilisation, vous pouvez voir ci dessous les différentes taches en cours </p></p>
      </div>
          
          
          <div>
          <hr>
              <div>@yield('Erreur_new')</div>
              <p> @yield('form2') <p>

           
          </div>
                    
              @yield('nonEffectuee')

          </div>

    <div class="container">
         <div>
              @yield('tachesEffectuees')
         </div>
    </div>
      <footer>
        <p>&copy; toD0List</p>
      </footer>


    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://getbootstrap.com/2.3.2//assets/js/jquery.js"></script>
    <script src="http://getbootstrap.com/2.3.2//assets/js/bootstrap-transition.js"></script>
    <script src="http://getbootstrap.com/2.3.2//assets/js/bootstrap-alert.js"></script>
    <script src="http://getbootstrap.com/2.3.2//assets/js/bootstrap-modal.js"></script>
    <script src="http://getbootstrap.com/2.3.2//assets/js/bootstrap-dropdown.js"></script>
    <script src="http://getbootstrap.com/2.3.2//assets/js/bootstrap-scrollspy.js"></script>
    <script src="http://getbootstrap.com/2.3.2//assets/js/bootstrap-tab.js"></script>
    <script src="http://getbootstrap.com/2.3.2//assets/js/bootstrap-tooltip.js"></script>
    <script src="http://getbootstrap.com/2.3.2//assets/js/bootstrap-popover.js"></script>
    <script src="http://getbootstrap.com/2.3.2//assets/js/bootstrap-button.js"></script>
    <script src="http://getbootstrap.com/2.3.2//assets/js/bootstrap-collapse.js"></script>
    <script src="http://getbootstrap.com/2.3.2//assets/js/bootstrap-carousel.js"></script>
    <script src="http://getbootstrap.com/2.3.2//assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
