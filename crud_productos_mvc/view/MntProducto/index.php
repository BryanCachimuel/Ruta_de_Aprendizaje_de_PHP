<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Mantenimiento de Producto</title>

    <!-- vendor css -->
    <link href="../../public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../public/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../../public/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../../public/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">

    <link href="../../public/lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="../../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../../public/css/bracket.css">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>CRUD<span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
      <div class="br-sideleft-menu">
        <a href="../Home/" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Mantenimiento</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="../MntProducto/" class="nav-link">Producto</a></li>
        </ul>
      </div>

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
          <input id="searchbox" type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
          </span>
        </div><!-- input-group -->
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down">Katherine</span>
              <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li>
                <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li>
                <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li>
                <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Mantenimiento</a>
          <span class="breadcrumb-item active">Producto</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Producto</h4>
        <p class="mg-b-0">Desde esta ventana podra dar mantenimiento a productos</p>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Mantenimiento de Producto</h6>
            <button id="btnnuevo" class="btn btn-outline-primary btn-block mg-b-10">Nuevo Registro</button>

            <div class="table-wrapper">
              <table id="producto_data" class="table display responsive nowrap">
                <thead>
                  <tr>
                    <th class="wd-15p">Nombre</th>
                    <th class="wd-15p"></th>
                    <th class="wd-20p"></th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
        </div>
      </div>

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <?php require_once("modalmantenimiento.php");?>

    <script src="../../public/lib/jquery/jquery.js"></script>
    <script src="../../public/lib/popper.js/popper.js"></script>
    <script src="../../public/lib/bootstrap/bootstrap.js"></script>
    <script src="../../public/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../../public/lib/moment/moment.js"></script>
    <script src="../../public/lib/jquery-ui/jquery-ui.js"></script>
    <script src="../../public/lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../../public/lib/peity/jquery.peity.js"></script>
    <script src="../../public/js/bracket.js"></script>

    <script src="../../public/lib/datatables/jquery.dataTables.js"></script>
    <script src="../../public/lib/datatables-responsive/dataTables.responsive.js"></script>

    <script src="../../public/datatables/dataTables.buttons.min.js"></script>
    <script src="../../public/datatables/buttons.html5.min.js"></script>
    <script src="../../public/datatables/buttons.colVis.min.js"></script>
    <script src="../../public/datatables/jszip.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script type="text/javascript" src="mntproducto.js"></script>
  </body>
</html>
