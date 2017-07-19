<!DOCTYPE html>
  <html>
    <head>
      <title><?php echo $title; ?></title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/tiara-style.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    </head>

    <body>
      <div class="navbar-fixed">
        <nav class="nav-primary">
          <div class="nav-wrapper">
            <div class="container">
              <a href="#" class="brand-logo"><span class="logogram"></span></a>
              <!-- <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a> -->
              <ul class="right">
                <li><a href="collapsible.html"><i class="material-icons icon-search"></i></a></li>
                <li><a href="mobile.html"><a class="waves-effect waves-light btn btn-outline-inverse btn-flat"><i class="material-icons icon-user left"></i> member</a></li>
                <li><a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons icon-burger-menu"></i></a></li>
              </ul>

            </div>
          </div>
        </nav>
      </div>

      <div class="nav-secondary">
        <div class="container">
          <ul>
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">About Us</a>
            </li>
            <li>
              <!-- Dropdown Trigger -->
              <a class='dropdown-button' href='#' data-activates='dropdown1'>Drop Me!</a>

              <!-- Dropdown Structure -->
              <ul id='dropdown1' class='dropdown-content'>
                <li><a href="#!">one</a></li>
                <li><a href="#!">two</a></li>
                <li class="divider"></li>
                <li><a href="#!">three</a></li>
                <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
