<!DOCTYPE html>
  <html>
    <head>
      <title><?php echo $title; ?></title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
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
              <a href="#" data-activates="burgermenu" class="button-collapse"><i class="material-icons icon-burger-menu"></i></a>
              <ul class="right">
                <li><a href="collapsible.html"><i class="material-icons icon-search"></i></a></li>
                <li><a class="waves-effect waves-light btn btn-outline-inverse btn-flat btn-icon-xs"><i class="material-icons icon-user left"></i> <span>member</span></a></li>
                <!-- <li><span class="nav-collapse"><a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons icon-burger-menu"></i></a></span></li> -->
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
              <a class='dropdown-button' href='#' data-activates='dropdown1'>About Us</a>
              <ul id='dropdown1' class='dropdown-content'>
                <li><a href="#!">Vision &amp; Mission</a></li>
                <li><a href="#!">From Our CEO</a></li>
              </ul>
            </li>
            <li>
              <a class='dropdown-button' href='#' data-activates='dropdown2'>Reliability Services</a>
              <ul id='dropdown2' class='dropdown-content'>
                <li><a href="#!" class='subdrop' href='#' data-activates='submenudrop1'>Reliability Services 1</a></li>
                <li><a href="#!" class='subdrop' href='#' data-activates='submenudrop2'>Reliability Services 2</a></li>
              </ul>
              <ul id='submenudrop1' class='dropdown-content submenu'>
                  <li><a href="#!">Advanced Application of CSI 2130/2140 &amp; AMS Suite Software</a></li>
                  <li><a href="#!">two</a></li>
                  <li><a href="#!">three</a></li>
              </ul>
              <ul id='submenudrop2' class='dropdown-content submenu'>
                  <li><a href="#!">Advanced Application of CSI 2130/2140 &amp; AMS Suite Software</a></li>
                  <li><a href="#!">two</a></li>
                  <li><a href="#!">three</a></li>
              </ul>
            </li>
            <li>
              <a class='dropdown-button' href='#' data-activates='dropdown3'>Reliability Technology</a>
              <ul id='dropdown3' class='dropdown-content'>
                <li><a href="#!">one</a></li>
                <li><a href="#!">Reliability Technology for Turbine</a></li>
                <li><a href="#!">three</a></li>
              </ul>
            </li>
            <li>
              <a class='dropdown-button' href='#' data-activates='dropdown4'>Reliability Competency</a>
              <ul id='dropdown4' class='dropdown-content'>
                <li><a href="#!">Work Planning and Control</a></li>
                <li><a href="#!">two</a></li>
                <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
              </ul>
            </li>
            <li>
              <a href="#">Experiences</a>
            </li>
            <li>
              <a href="#">Truc</a>
            </li>
            <li>
              <a href="#">News &amp; Event</a>
            </li>
          </ul>

        </div>
      </div>