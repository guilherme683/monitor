

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Monitor | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Favicon Ico -->
  <link rel = "shortcut icon" href = "bower_components/images/favicon/favicon.ico" />
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- font-mfizz-->
  <link rel="stylesheet" href="bower_components/font-mfizz/font-mfizz.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
   <!-- Morris chart -->
   <link rel="stylesheet" href="bower_components/morris.js/morris.css">
   <!-- jvectormap -->
   <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
   <!-- Date Picker -->
   <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

   <!-- Meu estilo personalisado -->
   <link rel="stylesheet" href="estilo.css">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini" ng-app="sa_app" ng-controller="dashboardController">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><div class="icon"><i class="ion ion-android-desktop"></i></div></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Servidores</b>Monitor<i class="ion ion-android-desktop" style="margin-left: 4px;"></i></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
      <!--     <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                
                <ul class="menu">
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                 
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li> -->
          <!-- Notifications: style can be found in dropdown.less -->
         <!--  <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
          
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li> -->
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
               
                <ul class="menu">
                  <li>
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                
                  <li>
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  
                  <li>
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  
                  <li>
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                 
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li> -->
          <!-- User Account: style can be found in dropdown.less -->
          <!-- <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
             
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                
              </li>
          
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li> -->

          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
          <li>
            <a href="./pages/usuario/login.html"><i class="fa fa-user-circle-o fa-2x" data-toggle="tooltip" data-placement="left" title="Logout"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     <!--  <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->
      <!-- search form -->
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <!-- <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> -->
          </a>
         <!--  <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul> -->
        </li>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li> -->
        <!-- <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li> -->
       <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li> -->
       <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li> -->
       <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li> -->
   <!--      <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i> <span>Scripts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/scripts/mysql.html"><i class="icon-mysql" style="font-size: 1.2em;"></i> MySQL</a></li>
            <li><a href="pages/scripts/postgres.html"><i class="icon-postgres-alt" style="font-size: 1.2em;"></i> PostgreSQL</a></li>
          </ul>
        </li> -->
        <li>
          <a href="pages/scripts/postgres.html">
            <i class="fa fa-file "></i> <span>Scripts</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i> <span>Controle</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/sistema/sistema.html"><i class="fa fa-users"></i> Usuarios de Sistema</a></li>
            <li><a href="pages/backup/backup.html"><i class="fa fa-cubes"></i> Backups</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/usuario/usuario.html">
            <i class="fa fa-group"></i> <span>Usuários</span>
          </a>
        </li>


       <!--  <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li> -->
        <!-- <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li> -->
       <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li> -->
       <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li> -->
       <!--  <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Monitoramento</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

       <!--Inicio Servidor Postgresql Boavista  -->
       <div class="col-xl-3 col-sm-3 mb-3 ">
        <div class="card card-stats">
          <!-- small box -->
          <div class="small-box bg-red z-depth-4" >
            <div class="inner">
              <h3 style="font-size: 30px;">Boavista</h3>

              <!--    <p >Postgresql</p> -->
            </div>
            <div class="icon">
              <i class="icon-postgres"></i>
            </div>
            <div class="card-content">

              <?php
              include_once 'conexoes/conexao_boavista.php';
              echo '<h4 class="category text-center">';
              echo '<label style="margin-right:2px;">';
              echo 'Bases:';
              echo '</label>';
              echo $qtd;
              echo '</h4>';
              ?>
            </div>
            <div class="panel-group " id="accordionBoavista" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwoBoavista">
                  <h6 class="panel-title text-center">
                    <a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordionBoavista" href="#collapseTwoBoavista" aria-expanded="true" aria-controls="collapseTwoBoavista">
                      <i class="ion-android-more-horizontal" style="font-size: 20px; color: #DD4B39"></i>
                    </a>
                  </h6>
                </div>
                <div id="collapseTwoBoavista" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoBoavista" style="background-color: #F7F7F7;">
                  <div class="panel-body">
                    <p class="text-center" style="padding: 5px; font-size: 12px; color: #000000">
                      O servidor Boavista é atualmente utilizado como ambiente de homologação.<br><br>
                      <?php
                      include_once 'conexoes/select_version_boavista.php';
                      echo '<h5 class="category text-center">';
                      echo $consulta['version'];
                      echo '</h5>';
                      ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOneBoavista">
                  <h4 class="panel-title text-center">
                    <a role="button" data-toggle="collapse" data-parent="#accordionBoavista" href="#collapseOneBoavista" aria-expanded="true" aria-controls="collapseOneBoavista">
                      <!-- Large modal -->
                      <button type="button" class="btn btn-danger z-depth-4" data-toggle="modal" data-target="#visualizaranexoboavista" data-doc="arquivoboavista">Visualizar bases</button>
                    </a>
                  </h4>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
      <!--Fim Servidor Postgresql Boavista  -->


      <!--Inicio Servidor Postgresql Mansidao  -->
      <div class="col-xl-3 col-sm-3 mb-3 ">
        <div class="card card-stats">
          <!-- small box -->
          <div class="small-box bg-green z-depth-4" >
            <div class="inner">
              <h3 style="font-size: 30px;">Mansidao</h3>

              <!-- <p>Postgresql</p> -->
            </div>
            <div class="icon">
              <i class="icon-postgres"></i>
            </div>
            <div class="card-content">

              <?php
              include_once 'conexoes/conexao_mansidao.php';
              echo '<h4 class="category text-center">';
              echo '<label style="margin-right:2px;">';
              echo 'Bases:';
              echo '</label>';
              echo $qtd2;
              echo '</h4>';
              ?>
            </div>
            <div class="panel-group" id="accordionMansidao" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwoMansidao">
                  <h6 class="panel-title text-center">
                    <a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordionMansidao" href="#collapseTwoMansidao" aria-expanded="true" aria-controls="collapseTwoMansidao">
                      <i class="ion-android-more-horizontal" style="font-size: 20px; color: green"></i>
                    </a>
                  </h6>
                </div>
                <div id="collapseTwoMansidao" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoMansidao" style="background-color: #F7F7F7;">
                  <div class="panel-body">
                    <p class="text-center" style="padding: 5px; font-size: 12px; color: #000000">
                      O servidor Mansidao é atualmente utilizado como ambiente de homologação.<br><br>
                      <?php
                      include_once 'conexoes/select_version_mansidao.php';
                      echo '<h5 class="category text-center">';
                      echo $consulta['version'];
                      echo '</h5>';
                      ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOneMansidao">
                  <h4 class="panel-title text-center">
                    <a role="button" data-toggle="collapse" data-parent="#accordionMansidao" href="#collapseOneMansidao" aria-expanded="true" aria-controls="collapseOneMansidao">
                      <!-- Large modal -->
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#visualizaranexomansidao" data-doc="arquivomansidao">Visualizar bases</button>
                    </a>
                  </h4>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
      <!--Fim Servidor Postgresql Mansidao  -->

      <!--Inicio Servidor Postgresql Condado  -->
      <div class="col-xl-3 col-sm-3 mb-3 ">
        <!-- small box -->
        <div class="small-box bg-yellow z-depth-4">
          <div class="inner">
            <h3 style="font-size: 30px;">Condado</h3>

            <!-- <p>Postgresql</p> -->
          </div>
          <div class="icon">
            <i class="icon-postgres"></i>
          </div>
          <div class="card-content">

            <?php
            include_once 'conexoes/conexao_condado.php';
            echo '<h4 class="category text-center">';
            echo '<label style="margin-right:2px;">';
            echo 'Bases:';
            echo '</label>';
            echo $qtd3;
            echo '</h4>';
            ?>
          </div>
          <div class="panel-group" id="accordionCondado" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwoCondado">
                <h6 class="panel-title text-center">
                  <a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordionCondado" href="#collapseTwoCondado" aria-expanded="true" aria-controls="collapseTwoCondado">
                   <i class="ion-android-more-horizontal" style="font-size: 20px; color: #00A65A;"></i>
                 </a>
               </h6>
             </div>
             <div id="collapseTwoCondado" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoCondado" style="background-color: #F7F7F7;">
              <div class="panel-body">
                <p class="text-center" style="padding: 5px; font-size: 12px; color: #000000">
                  O servidor Condado é atualmente utilizado como ambiente de homologação.<br><br>
                  <?php
                  include_once 'conexoes/select_version_condado.php';
                  echo '<h5 class="category text-center">';
                  echo $consulta['version'];
                  echo '</h5>';
                  ?>
                </p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOneCondado">
              <h4 class="panel-title text-center">
                <a role="button" data-toggle="collapse" data-parent="#accordionCondado" href="#collapseOneCondado" aria-expanded="true" aria-controls="collapseOneCondado">
                  <!-- Large modal -->
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#visualizaranexocondado" data-doc="arquivocondado">Visualizar bases</button>
                </a>
              </h4>
            </div>
          </div> 
        </div>
      </div>
    </div>
    <!--Fim Servidor Postgresql Condado  -->

    <!--Inicio Servidor Postgresql Guapo  -->
    <div class="col-xl-3 col-sm-3 mb-3 ">
      <!-- small box -->
      <div class="small-box bg-aqua z-depth-4">
        <div class="inner">
          <h3 style="font-size: 30px;">Guapo</h3>

          <!-- <p>Postgresql</p> -->
        </div>
        <div class="icon">
          <i class="icon-postgres"></i>
        </div>
        <div class="card-content">

          <?php
          include_once 'conexoes/conexao_guapo.php';
          echo '<h4 class="category text-center">';
          echo '<label style="margin-right:2px;">';
          echo 'Bases:';
          echo '</label>';
          echo $qtd8;
          echo '</h4>';
          ?>
        </div>
        <div class="panel-group" id="accordionGuapo" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwoGuapo">
              <h6 class="panel-title text-center">
                <a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordionGuapo" href="#collapseTwoGuapo" aria-expanded="true" aria-controls="collapseTwoGuapo">
                  <i class="ion-android-more-horizontal" style="font-size: 20px; color: #00C0EF;"></i>
                </a>
              </h6>
            </div>
            <div id="collapseTwoGuapo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoGuapo" style="background-color: #F7F7F7;">
              <div class="panel-body">
                <p class="text-center" style="padding: 5px; font-size: 12px; color: #000000">
                  O servidor Guapo é atualmente utilizado como ambiente de homologação.<br><br>
                  <?php
                  include_once 'conexoes/select_version_guapo.php';
                  echo '<h5 class="category text-center">';
                  echo $consulta['version'];
                  echo '</h5>';
                  ?>
                </p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOneGuapo">
              <h4 class="panel-title text-center">
                <a role="button" data-toggle="collapse" data-parent="#accordionGuapo" href="#collapseOneGuapo" aria-expanded="true" aria-controls="collapseOneGuapo">
                  <!-- Large modal -->
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#visualizaranexoguapo" data-doc="arquivoguapo">Visualizar bases</button>
                </a>
              </h4>
            </div>
          </div> 
        </div>
      </div>
    </div>
    <!--Fim Servidor Postgresql Guapo  -->
  </div>
  <!-- /.row -->
  <hr style="background-color:rgba(0,0,0,0.15) ; height: 0.2em;"></hr>
  <!-- Main row -->
  <div class="row">
    <!--Início Servidor Mysql Aguasfrias  -->
    <div class="col-xl-3 col-sm-3 mb-3 ">
      <!-- small box -->
      <div class="small-box bg-aqua z-depth-4">
        <div class="inner">
          <h3 style="font-size: 30px;">Aguasfrias</h3>

          <!-- <p>MySQL</p> -->
        </div>
        <div class="icon">
          <i class="icon-mysql"></i>
        </div>
        <div class="card-content">

          <?php
          include_once 'conexoes/conexao_aguasfrias.php';
          echo '<h4 class="category text-center">';
          echo '<label style="margin-right:2px;">';
          echo 'Bases:';
          echo '</label>';
          echo $qtd4;
          echo '</h4>';
          ?>
        </div>
        <div class="panel-group" id="accordionAguasfrias" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwoAguasfrias">
              <h6 class="panel-title text-center">
                <a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordionAguasfrias" href="#collapseTwoAguasfrias" aria-expanded="true" aria-controls="collapseTwoAguasfrias">
                 <i class="ion-android-more-horizontal" style="font-size: 20px; color: #00C0EF;"></i>
               </a>
             </h6>
           </div>
           <div id="collapseTwoAguasfrias" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoAguasfrias" style="background-color: #F7F7F7;">
            <div class="panel-body">
              <p class="text-center" style="padding: 5px; font-size: 12px; color: #000000">
                O servidor Aguasfrias é atualmente utilizado como ambiente de homologação.<br><br>
                <?php
                include_once 'conexoes/select_version_aguasfrias.php';
                echo '<h5 class="category text-center">';
                echo $consulta['version'];
                echo '</h5>';
                ?>
              </p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOneAguasfrias">
            <h4 class="panel-title text-center">
              <a role="button" data-toggle="collapse" data-parent="#accordionAguasfrias" href="#collapseOneAguasfrias" aria-expanded="true" aria-controls="collapseOneAguasfrias">
                <!-- Large modal -->
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#visualizaranexoaguasfrias" data-doc="arquivoaguasfrias">Visualizar bases</button>
              </a>
            </h4>
          </div>
        </div> 
      </div>
    </div>
  </div>
  <!--Fim Servidor Mysql Aguasfrias  -->  



  <!--Início Servidor Mysql Bauru  -->
  <div class="col-xl-3 col-sm-3 mb-3 ">
    <!-- small box -->
    <div class="small-box bg-green z-depth-4">
      <div class="inner">
        <h3 style="font-size: 30px;">Bauru</h3>

        <!-- <p>MySQL</p> -->
      </div>
      <div class="icon">
        <i class="icon-mysql"></i>
      </div>
      <div class="card-content">

        <?php
        include_once 'conexoes/conexao_bauru.php';
        echo '<h4 class="category text-center">';
        echo '<label style="margin-right:2px;">';
        echo 'Bases:';
        echo '</label>';
        echo $qtd6;
        echo '</h4>';
        ?>
      </div>
      <div class="panel-group" id="accordionBauru" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwoBauru">
            <h6 class="panel-title text-center">
              <a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordionBauru" href="#collapseTwoBauru" aria-expanded="true" aria-controls="collapseTwoBauru">
                <i class="ion-android-more-horizontal" style="font-size: 20px; color: green;"></i>
              </a>
            </h6>
          </div>
          <div id="collapseTwoBauru" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoBauru" style="background-color: #F7F7F7;">
            <div class="panel-body">
              <p class="text-center" style="padding: 5px; font-size: 12px; color: #000000">
                O servidor Bauru é atualmente utilizado como ambiente de homologação.<br><br>
                <?php
                include_once 'conexoes/select_version_bauru.php';
                echo '<h5 class="category text-center">';
                echo $consulta['version'];
                echo '</h5>';
                ?>
              </p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOneBauru">
            <h4 class="panel-title text-center">
              <a role="button" data-toggle="collapse" data-parent="#accordionBauru" href="#collapseOneBauru" aria-expanded="true" aria-controls="collapseOneBauru">
                <!-- Large modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#visualizaranexobauru" data-doc="arquivobauru">Visualizar bases</button>
              </a>
            </h4>
          </div>
        </div> 
      </div>
    </div>
  </div>
  <!--Fim Servidor Mysql Bauru  -->  

  <!--Início Servidor Mysql Extrema  -->
  <div class="col-xl-3 col-sm-3 mb-3 ">
    <!-- small box -->
    <div class="small-box bg-red z-depth-4">
      <div class="inner">
        <h3 style="font-size: 30px;">Extrema</h3>

        <!-- <p>MySQL</p> -->
      </div>
      <div class="icon">
        <i class="icon-mysql"></i>
      </div>
      <div class="card-content">

        <?php
        include_once 'conexoes/conexao_extrema.php';
        echo '<h4 class="category text-center">';
        echo '<label style="margin-right:2px;">';
        echo 'Bases:';
        echo '</label>';
        echo $qtd7;
        echo '</h4>';
        ?>
      </div>
      <div class="panel-group" id="accordionExtrema" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwoExtrema">
            <h6 class="panel-title text-center">
              <a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordionExtrema" href="#collapseTwoExtrema" aria-expanded="true" aria-controls="collapseTwoExtrema">
               <i class="ion-android-more-horizontal" style="font-size: 20px; color: #DD4B39;"></i>
             </a>
           </h6>
         </div>
         <div id="collapseTwoExtrema" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoExtrema" style="background-color: #F7F7F7;">
          <div class="panel-body">
            <p class="text-center" style="padding: 5px; font-size: 12px; color: #000000">
              O servidor Extrema é atualmente utilizado como ambiente de homologação.<br><br>
              <?php
              include_once 'conexoes/select_version_extrema.php';
              echo '<h5 class="category text-center">';
              echo $consulta['version'];
              echo '</h5>';
              ?>
            </p>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOneExtrema">
          <h4 class="panel-title text-center">
            <a role="button" data-toggle="collapse" data-parent="#accordionExtrema" href="#collapseOneExtrema" aria-expanded="true" aria-controls="collapseOneExtrema">
              <!-- Large modal -->
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#visualizaranexoextrema" data-doc="arquivoextrema">Visualizar bases</button>
            </a>
          </h4>
        </div>
      </div> 
    </div>
  </div>
</div>
<!--Fim Servidor Mysql Bauru  -->  

<!--Início Servidor Mysql Serido  -->
<div class="col-xl-3 col-sm-3 mb-3 ">
  <!-- small box -->
  <div class="small-box bg-green z-depth-4">
    <div class="inner">
      <h3 style="font-size: 30px;">Serido</h3>

      <!-- <p>MySQL</p> -->
    </div>
    <div class="icon">
      <i class="icon-mysql"></i>
    </div>
    <div class="card-content">

      <?php
      include_once 'conexoes/conexao_serido.php';
      echo '<h4 class="category text-center">';
      echo '<label style="margin-right:2px;">';
      echo 'Bases:';
      echo '</label>';
      echo $qtd10;
      echo '</h4>';
      ?>
    </div>
    <div class="panel-group" id="accordionSerido" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwoSerido">
          <h6 class="panel-title text-center">
            <a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordionSerido" href="#collapseTwoSerido" aria-expanded="true" aria-controls="collapseTwoSerido">
              <i class="ion-android-more-horizontal" style="font-size: 20px; color: #00A65A;"></i>
            </a>
          </h6>
        </div>
        <div id="collapseTwoSerido" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoSerido" style="background-color: #F7F7F7;">
          <div class="panel-body">
            <p class="text-center" style="padding: 5px; font-size: 12px; color: #000000">
              O servidor Serido é atualmente utilizado como ambiente de homologação.<br><br>
              <?php
              include_once 'conexoes/select_version_serido.php';
              echo '<h5 class="category text-center">';
              echo $consulta['version'];
              echo '</h5>';
              ?>
            </p>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOneSerido">
          <h4 class="panel-title text-center">
            <a role="button" data-toggle="collapse" data-parent="#accordionSerido" href="#collapseOneSerido" aria-expanded="true" aria-controls="collapseOneSerido">
              <!-- Large modal -->
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#visualizaranexoserido" data-doc="arquivoserido">Visualizar bases</button>
            </a>
          </h4>
        </div>
      </div> 
    </div>
  </div>
</div>
<!--Fim Servidor Mysql Serido  -->  

<!--Início Servidor Mysql Setubinha  -->
<div class="col-xl-3 col-sm-3 mb-3 ">
  <!-- small box -->
  <div class="small-box bg-red z-depth-4">
    <div class="inner">
      <h3 style="font-size: 30px;">Setubinha</h3>

      <!-- <p>MySQL</p> -->
    </div>
    <div class="icon">
      <i class="icon-mysql"></i>
    </div>
    <div class="card-content">

      <?php
      include_once 'conexoes/conexao_setubinha.php';
      echo '<h4 class="category text-center">';
      echo '<label style="margin-right:2px;">';
      echo 'Bases:';
      echo '</label>';
      echo $qtd9;
      echo '</h4>';
      ?>
    </div>
    <div class="panel-group" id="accordionSerido" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwoSerido">
          <h6 class="panel-title text-center">
            <a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordionSetubinha" href="#collapseTwoSetubinha" aria-expanded="true" aria-controls="collapseTwoSetubinha">
              <i class="ion-android-more-horizontal" style="font-size: 20px; color: #DD4B39;"></i>
            </a>
          </h6>
        </div>
        <div id="collapseTwoSetubinha" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoSetubinha" style="background-color: #F7F7F7;">
          <div class="panel-body">
            <p class="text-center" style="padding: 5px; font-size: 12px; color: #000000">
              O servidor Setubinha é atualmente utilizado como ambiente de homologação.<br><br>
              <?php
              include_once 'conexoes/select_version_setubinha.php';
              echo '<h5 class="category text-center">';
              echo $consulta['version'];
              echo '</h5>';
              ?>
            </p>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOneSetubinha">
          <h4 class="panel-title text-center">
            <a role="button" data-toggle="collapse" data-parent="#accordionSetutinha" href="#collapseOneSetubinha" aria-expanded="true" aria-controls="collapseOneSetubinha">
              <!-- Large modal -->
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#visualizaranexosetubinha" data-doc="arquivosetubinha">Visualizar bases</button>
            </a>
          </h4>
        </div>
      </div> 
    </div>
  </div>
</div>
<!--Fim Servidor Mysql Setubinha  -->  

</div>
<!-- /.row (main row) -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div>
  <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
  reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">Recent Activity</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

              <p>Will be 23 on April 24th</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-user bg-yellow"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

              <p>New phone +1(800)555-1234</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

              <p>nora@example.com</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-file-code-o bg-green"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

              <p>Execution time 5 seconds</p>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

      <h3 class="control-sidebar-heading">Tasks Progress</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Custom Template Design
              <span class="label label-danger pull-right">70%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Update Resume
              <span class="label label-success pull-right">95%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-success" style="width: 95%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Laravel Integration
              <span class="label label-warning pull-right">50%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Back End Framework
              <span class="label label-primary pull-right">68%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

    </div>
    <!-- /.tab-pane -->
    <!-- Stats tab content -->
    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
    <!-- /.tab-pane -->
    <!-- Settings tab content -->
    <div class="tab-pane" id="control-sidebar-settings-tab">
      <form method="post">
        <h3 class="control-sidebar-heading">General Settings</h3>

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Report panel usage
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Some information about this general settings option
          </p>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Allow mail redirect
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Other sets of options are available
          </p>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Expose author name in posts
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Allow the user to show his name in blog posts
          </p>
        </div>
        <!-- /.form-group -->

        <h3 class="control-sidebar-heading">Chat Settings</h3>

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Show me as online
            <input type="checkbox" class="pull-right" checked>
          </label>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Turn off notifications
            <input type="checkbox" class="pull-right">
          </label>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Delete chat history
            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
          </label>
        </div>
        <!-- /.form-group -->
      </form>
    </div>
    <!-- /.tab-pane -->
  </div>
</aside>
<!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>

 </div>
 <!-- ./wrapper -->
 <a href="javascript:void(0);" id="rocketmeluncur" class="showrocket" ><i></i></a>


 <!-- Início Modal Boavista -->
 <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="visualizaranexoboavista" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="fetched-data boavista">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="loading"></div>
              <div id="loading-text">
                <div class="icon">
                  <i class="ion ion-android-desktop" style="font-size: 35px; color: rgba(0,0,0,0.15);"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" id="loading-text-carregando">
              <h2 class="text-left" style="margin-left: 1em;">Carregando...<p id="loading-text">...</p></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fim Modal Boavista -->

<!-- Início Modal Mansidao -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="visualizaranexomansidao">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body" >
        <div class="fetched-data mansidao">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="loading"></div>
              <div id="loading-text">
                <div class="icon">
                  <i class="ion ion-android-desktop" style="font-size: 35px; color: rgba(0,0,0,0.15);"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" id="loading-text-carregando">
              <h2 class="text-left" style="margin-left: 1em;">Carregando...</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fim Modal Mansidao -->

<!-- Início Modal Condado -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="visualizaranexocondado">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="fetched-data condado">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="loading"></div>
              <div id="loading-text">
                <div class="icon">
                  <i class="ion ion-android-desktop" style="font-size: 35px; color: rgba(0,0,0,0.15);"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" id="loading-text-carregando">
              <h2 class="text-left" style="margin-left: 1em;">Carregando...</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Fim Modal Condado -->

<!-- Início Modal Guapo -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="visualizaranexoguapo">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="fetched-data guapo">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="loading"></div>
              <div id="loading-text">
                <div class="icon">
                  <i class="ion ion-android-desktop" style="font-size: 35px; color: rgba(0,0,0,0.15);"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" id="loading-text-carregando">
              <h2 class="text-left" style="margin-left: 1em;">Carregando...</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fim Modal Guapo -->

<!-- Início Modal Aguasmornas -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="visualizaranexoaguasmornas">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="fetched-data aguasmornas">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="loading"></div>
              <div id="loading-text">
                <div class="icon">
                  <i class="ion ion-android-desktop" style="font-size: 35px; color: rgba(0,0,0,0.15);"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" id="loading-text-carregando">
              <h2 class="text-left" style="margin-left: 1em;">Carregando...</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fim Modal Aguasmornas -->

<!-- Início Modal Aguasfrias -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="visualizaranexoaguasfrias">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="fetched-data aguasfrias">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="loading"></div>
              <div id="loading-text">
                <div class="icon">
                  <i class="ion ion-android-desktop" style="font-size: 35px; color: rgba(0,0,0,0.15);"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" id="loading-text-carregando">
              <h2 class="text-left" style="margin-left: 1em;">Carregando...</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fim Modal Aguasfrias -->

<!-- Início Modal Bauru -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="visualizaranexobauru">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="fetched-data bauru">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="loading"></div>
              <div id="loading-text">
                <div class="icon">
                  <i class="ion ion-android-desktop" style="font-size: 35px; color: rgba(0,0,0,0.15);"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" id="loading-text-carregando">
              <h2 class="text-left" style="margin-left: 1em;">Carregando...</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fim Modal Bauru -->

<!-- Início Modal Extrema -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="visualizaranexoextrema">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="fetched-data extrema">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="loading"></div>
              <div id="loading-text">
                <div class="icon">
                  <i class="ion ion-android-desktop" style="font-size: 35px; color: rgba(0,0,0,0.15);"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" id="loading-text-carregando">
              <h2 class="text-left" style="margin-left: 1em;">Carregando...</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fim Modal Extrema-->

<!-- Início Modal Serido -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="visualizaranexoserido">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="fetched-data serido">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="loading"></div>
              <div id="loading-text">
                <div class="icon">
                  <i class="ion ion-android-desktop" style="font-size: 35px; color: rgba(0,0,0,0.15);"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" id="loading-text-carregando">
              <h2 class="text-left" style="margin-left: 1em;">Carregando...</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fim Modal Serido -->

<!-- Início Modal Setubinha -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="visualizaranexosetubinha">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="fetched-data setubinha">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="loading"></div>
              <div id="loading-text">
                <div class="icon">
                  <i class="ion ion-android-desktop" style="font-size: 35px; color: rgba(0,0,0,0.15);"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" id="loading-text-carregando">
              <h2 class="text-left" style="margin-left: 1em;">Carregando...</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fim Modal Setubinha -->

<div class="modal fade modal-server" id="exemplomodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog  modal-lg  " role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size: 2em;">
          <span aria-hidden="true">&times;</span>

        </button>
        <h4 class="text-center" style="">Status dos Servidores PostgreSQL e MySQL <br><?php echo 'Hoje, '; echo date('d/m/y'); ?></h4>
        <!--  <h5 class="modal-title" id="gridSystemModalLabel">Monitoramento inicial de Servidores</h5> -->
      </div>
      <div class="modal-body ">


        <div class="row text-center">

          <!--Início Servidor Mysql Boavista  -->
          <div class="col-xl-4 col-sm-3 mb-4 ">
            <!-- small box -->
            <div class="small-box bg-red z-depth-4">
              <div class="inner">
               <div class="icon">
                <i class="icon-postgres-alt"></i>
              </div>
              <h3 style="font-size: 25px;">Boavista</h3>
              <h4 style="font-size: 20px;">MySQL</h4>

              <?php


              include 'conexoes/conexao_boavista.php'; 
              echo '<p class="text-success text-center">';
              echo $status_boavista;
              echo '</p>';
              ?>
            </div>
          </div>
        </div>
        <!--Fim modal Servidor Boavista -->

        <!--Início Servidor Mysql Mansidao  -->
        <div class="col-xl-4 col-sm-3 mb-4 ">
          <!-- small box -->
          <div class="small-box bg-green z-depth-4">
            <div class="inner">
             <div class="icon">
              <i class="icon-postgres-alt"></i>
            </div>
            <h3 style="font-size: 25px;">Mansidao</h3>
            <h4 style="font-size: 20px;">MySQL</h4>

            <?php


            include 'conexoes/conexao_mansidao.php'; 
            echo '<p class="text-success text-center">';
            echo $status_mansidao;
            echo '</p>';
            ?>
          </div>
        </div>
      </div>
      <!--Fim modal Servidor Mansidao -->

      <!--Início Servidor Mysql Condado  -->
      <div class="col-xl-4 col-sm-3 mb-4 ">
        <!-- small box -->
        <div class="small-box bg-yellow z-depth-4">
          <div class="inner">
           <div class="icon">
            <i class="icon-postgres-alt"></i>
          </div>
          <h3 style="font-size: 25px;">Condado</h3>
          <h4 style="font-size: 20px;">MySQL</h4>

          <?php


          include 'conexoes/conexao_condado.php'; 
          echo '<p class="text-success text-center">';
          echo $status_condado;
          echo '</p>';
          ?>
        </div>
      </div>
    </div>
    <!--Fim modal Servidor Condado -->

    <!--Início Servidor Mysql Guapo  -->
    <div class="col-xl-4 col-sm-3 mb-4 ">
      <!-- small box -->
      <div class="small-box bg-aqua z-depth-4">
        <div class="inner">
         <div class="icon">
          <i class="icon-postgres-alt"></i>
        </div>
        <h3 style="font-size: 25px;">Guapo</h3>
        <h4 style="font-size: 20px;">MySQL</h4>

        <?php


        include 'conexoes/conexao_guapo.php'; 
        echo '<p class="text-success text-center">';
        echo $status_guapo;
        echo '</p>';
        ?>
      </div>
    </div>
  </div>
  <!--Fim modal Servidor Guapo -->

  <!--Início Servidor Mysql Aguasfrias  -->
  <div class="col-xl-4 col-sm-3 mb-4 ">
    <!-- small box -->
    <div class="small-box bg-aqua z-depth-4">
      <div class="inner">
       <div class="icon">
        <i class="icon-mysql"></i>
      </div>
      <h3 style="font-size: 25px;">Aguasfrias</h3>
      <h4 style="font-size: 20px;">MySQL</h4>

      <?php


      include 'conexoes/conexao_aguasfrias.php'; 
      echo '<p class="text-success text-center">';
      echo $status_aguasfrias;
      echo '</p>';
      ?>
    </div>
  </div>
</div>
<!--Fim modal Servidor Aguasfrias -->



<!--Início Servidor Mysql Bauru  -->
<div class="col-xl-4 col-sm-3 mb-4 ">
  <!-- small box -->
  <div class="small-box bg-green z-depth-4">
    <div class="inner">
     <div class="icon">
      <i class="icon-mysql"></i>
    </div>
    <h3 style="font-size: 25px;">Bauru</h3>
    <h4 style="font-size: 20px;">MySQL</h4>

    <?php


    include 'conexoes/conexao_bauru.php'; 
    echo '<p class="text-success text-center">';
    echo $status_bauru;
    echo '</p>';
    ?>
  </div>
</div>
</div>
<!--Fim modal Servidor Bauru -->

<!--Início Servidor Mysql Extrema  -->
<div class="col-xl-4 col-sm-3 mb-4 ">
  <!-- small box -->
  <div class="small-box bg-red z-depth-4">
    <div class="inner">
     <div class="icon">
      <i class="icon-mysql"></i>
    </div>
    <h3 style="font-size: 25px;">Extrema</h3>
    <h4 style="font-size: 20px;">MySQL</h4>

    <?php


    include 'conexoes/conexao_extrema.php'; 
    echo '<p class="text-success text-center">';
    echo $status_extrema;
    echo '</p>';
    ?>
  </div>
</div>
</div>
<!--Fim modal Servidor Extrema -->

<!--Início Servidor Mysql Serido  -->
<div class="col-xl-4 col-sm-3 mb-4 ">
  <!-- small box -->
  <div class="small-box bg-green z-depth-4">
    <div class="inner">
     <div class="icon">
      <i class="icon-mysql"></i>
    </div>
    <h3 style="font-size: 25px;">Serido</h3>
    <h4 style="font-size: 20px;">MySQL</h4>

    <?php


    include 'conexoes/conexao_serido.php'; 
    echo '<p class="text-success text-center">';
    echo $status_serido;
    echo '</p>';
    ?>
  </div>
</div>
</div>
<!--Fim modal Servidor Serido -->

<!--Início Servidor Mysql Setubinha  -->
<div class="col-xl-4 col-sm-3 mb-4 ">
  <!-- small box -->
  <div class="small-box bg-red z-depth-4">
    <div class="inner">
     <div class="icon">
      <i class="icon-mysql"></i>
    </div>
    <h3 style="font-size: 25px;">Setubinha</h3>
    <h4 style="font-size: 20px;">MySQL</h4>

    <?php


    include 'conexoes/conexao_setubinha.php'; 
    echo '<p class="text-success text-center">';
    echo $status_setubinha;
    echo '</p>';
    ?>
  </div>
</div>
</div>
<!--Fim modal Servidor Setubinha -->
</div>
</div>
<div class="modal-footer modal-server" style="background-color: transparent;">

</div>
</div>
</div>

</div>




<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script src="angular.min.js"></script> 
<script src="bower_components/angular-route/angular-route.min.js"></script>
<script src="dashboard.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="../../dirPagination.js"></script>
<script type="text/javascript">

  $(document).ready(function() {
    $('#exemplomodal').modal('show');
  })
</script>

<!-- Início Ajax Servidor Boavista -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#visualizaranexoboavista').on('show.bs.modal', function (e) {
      var documento = $(e.relatedTarget).data('doc');
      $.ajax({
        type : 'post',
        url : 'conexoes/conexao_boavista_bases.php',
        data :  'documento='+ documento,
        success : function(data){
          $('.fetched-data.boavista').html(data);
        }
      });
    });
  });
</script>
<!-- Fim Ajax Servidor Boavista -->

<!-- Início Ajax Servidor Mansidao -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#visualizaranexomansidao').on('show.bs.modal', function (e) {
      var documento = $(e.relatedTarget).data('doc');
      $.ajax({
        type : 'post',
        url : 'conexoes/conexao_mansidao_bases.php',
        data :  'documento='+ documento,
        success : function(data){
          $('.fetched-data.mansidao').html(data);

        }
      });
    });
  });
</script>
<!-- Fim Ajax Servidor Mansidao-->

<!-- Início Ajax Servidor Condado -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#visualizaranexocondado').on('show.bs.modal', function (e) {
      var documento = $(e.relatedTarget).data('doc');
      $.ajax({
        type : 'post',
        url : 'conexoes/conexao_condado_bases.php',
        data :  'documento='+ documento,
        success : function(data){
          $('.fetched-data.condado').html(data);
        }
      });
    });
  });
</script>
<!-- Fim Ajax Servidor Condado-->

<!-- Início Ajax Servidor Guapo -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#visualizaranexoguapo').on('show.bs.modal', function (e) {
      var documento = $(e.relatedTarget).data('doc');
      $.ajax({
        type : 'post',
        url : 'conexoes/conexao_guapo_bases.php',
        data :  'documento='+ documento,
        success : function(data){
          $('.fetched-data.guapo').html(data);
        }
      });
    });
  });
</script>
<!-- Fim Ajax Servidor Guapo -->

<!-- Início Ajax Servidor Aguasmornas-->
<script type="text/javascript">
  $(document).ready(function(){
    $('#visualizaranexoaguasmornas').on('show.bs.modal', function (e) {
      var documento = $(e.relatedTarget).data('doc');
      $.ajax({
        type : 'post',
        url : 'conexoes/conexao_aguasmornas_bases.php',
        data :  'documento='+ documento,
        success : function(data){
          $('.fetched-data.aguasmornas').html(data);
        }
      });
    });
  });
</script>
<!-- Fim Ajax Servidor Aguasmornas-->

<!-- Início Ajax Servidor Aguasfrias -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#visualizaranexoaguasfrias').on('show.bs.modal', function (e) {
      var documento = $(e.relatedTarget).data('doc');
      $.ajax({
        type : 'post',
        url : 'conexoes/conexao_aguasfrias_bases.php',
        data :  'documento='+ documento,
        success : function(data){
          $('.fetched-data.aguasfrias').html(data);
        }
      });
    });
  });
</script>
<!-- Fim Ajax Servidor Aguasfrias -->

<!-- Início Ajax Servidor Bauru -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#visualizaranexobauru').on('show.bs.modal', function (e) {
      var documento = $(e.relatedTarget).data('doc');
      $.ajax({
        type : 'post',
        url : 'conexoes/conexao_bauru_bases.php',
        data :  'documento='+ documento,
        success : function(data){
          $('.fetched-data.bauru').html(data);
        }
      });
    });
  });
</script>
<!-- Fim Ajax Servidor Bauru -->

<!-- Início Ajax Servidor Extrema-->
<script type="text/javascript">
  $(document).ready(function(){
    $('#visualizaranexoextrema').on('show.bs.modal', function (e) {
      var documento = $(e.relatedTarget).data('doc');
      $.ajax({
        type : 'post',
        url : 'conexoes/conexao_extrema_bases.php',
        data :  'documento='+ documento,
        success : function(data){
          $('.fetched-data.extrema').html(data);
        }
      });
    });
  });
</script>
<!-- Fim Ajax Servidor Extrema -->

<!-- Início Ajax Servidor Serido -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#visualizaranexoserido').on('show.bs.modal', function (e) {
      var documento = $(e.relatedTarget).data('doc');
      $.ajax({
        type : 'post',
        url : 'conexoes/conexao_serido_bases.php',
        data :  'documento='+ documento,
        success : function(data){
          $('.fetched-data.serido').html(data);
        }
      });
    });
  });
</script>
<!-- Fim Ajax Servidor Serido -->

<!-- Início Ajax Servidor Setubinha -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#visualizaranexosetubinha').on('show.bs.modal', function (e) {
      var documento = $(e.relatedTarget).data('doc');
      $.ajax({
        type : 'post',
        url : 'conexoes/conexao_setubinha_bases.php',
        data :  'documento='+ documento,
        success : function(data){
          $('.fetched-data.setubinha').html(data);
        }
      });
    });
  });
</script>
<!-- Fim Ajax Servidor Setubinha -->

<!-- Limpa eventos do modal boavista -->
<script type="text/javascript">
  (function(){

    var template = null

    $('.modal#visualizaranexoboavista').on('show.bs.modal', function (event) {
      if (template == null) {
        template = $(this).html()
      } else {
        $(this).html(template)
      }
          // other initialization here, if you want to
        })

  })()

</script>
<!-- Fim script limpa eventos do modal boavista -->

<!-- Limpa eventos do modal condado -->
<script type="text/javascript">
  (function(){

    var template = null

    $('.modal#visualizaranexocondado').on('show.bs.modal', function (event) {
      if (template == null) {
        template = $(this).html()
      } else {
        $(this).html(template)
      }
          // other initialization here, if you want to
        })

  })()

</script>
<!-- Fim script limpa eventos do modal condado -->

<!-- Limpa eventos do modal mansidao -->
<script type="text/javascript">
  (function(){

    var template = null

    $('.modal#visualizaranexomansidao').on('show.bs.modal', function (event) {
      if (template == null) {
        template = $(this).html()
      } else {
        $(this).html(template)
      }
          // other initialization here, if you want to
        })

  })()

</script>
<!-- Fim script limpa eventos do modal mansidao -->

<!-- Limpa eventos do modal Guapo -->
<script type="text/javascript">
  (function(){

    var template = null

    $('.modal#visualizaranexoguapo').on('show.bs.modal', function (event) {
      if (template == null) {
        template = $(this).html()
      } else {
        $(this).html(template)
      }
          // other initialization here, if you want to
        })

  })()

</script>
<!-- Fim script limpa eventos do modal Guapo -->

<!-- Limpa eventos do modal aguasfrias -->
<script type="text/javascript">
  (function(){

    var template = null

    $('.modal#visualizaranexoaguasfrias').on('show.bs.modal', function (event) {
      if (template == null) {
        template = $(this).html()
      } else {
        $(this).html(template)
      }
          // other initialization here, if you want to
        })

  })()

</script>
<!-- Fim script limpa eventos do modal aguasfrias -->

<!-- Limpa eventos do modal aguasmornas -->
<script type="text/javascript">
  (function(){

    var template = null

    $('.modal#visualizaranexoaguasmornas').on('show.bs.modal', function (event) {
      if (template == null) {
        template = $(this).html()
      } else {
        $(this).html(template)
      }
          // other initialization here, if you want to
        })

  })()

</script>
<!-- Fim script limpa eventos do modal aguasmornas -->

<!-- Limpa eventos do modal bauru -->
<script type="text/javascript">
  (function(){

    var template = null

    $('.modal#visualizaranexobauru').on('show.bs.modal', function (event) {
      if (template == null) {
        template = $(this).html()
      } else {
        $(this).html(template)
      }
          // other initialization here, if you want to
        })

  })()

</script>
<!-- Fim script limpa eventos do modal bauru -->

<!-- Limpa eventos do modal extrema -->
<script type="text/javascript">
  (function(){

    var template = null

    $('.modal#visualizaranexoextrema').on('show.bs.modal', function (event) {
      if (template == null) {
        template = $(this).html()
      } else {
        $(this).html(template)
      }
          // other initialization here, if you want to
        })

  })()

</script>
<!-- Fim script limpa eventos do modal extrema -->

<!-- Limpa eventos do modal Serido -->
<script type="text/javascript">
  (function(){

    var template = null

    $('.modal#visualizaranexoserido').on('show.bs.modal', function (event) {
      if (template == null) {
        template = $(this).html()
      } else {
        $(this).html(template)
      }
          // other initialization here, if you want to
        })

  })()

</script>
<!-- Fim script limpa eventos do modal serido -->

<!-- Limpa eventos do modal setubinha -->
<script type="text/javascript">
  (function(){

    var template = null

    $('.modal#visualizaranexosetubinha').on('show.bs.modal', function (event) {
      if (template == null) {
        template = $(this).html()
      } else {
        $(this).html(template)
      }
          // other initialization here, if you want to
        })

  })()

</script>
<!-- Fim script limpa eventos do modal setubinha -->




 <!--  <script type="text/javascript">
  
  $("body").click(function() {
  $("div").removeClass('collapsed in');
    });
  </script> -->

  <script type="text/javascript">
    jQuery(window).scroll(function() {
      if (jQuery(window).scrollTop() < 50) {
        jQuery("#rocketmeluncur").slideUp(500);
      } else {
        jQuery("#rocketmeluncur").slideDown(500);
      }
      var ftrocketmeluncur = jQuery("#ft")[0]
      ? jQuery("#ft")[0]
      : jQuery(document.body)[0];
      var scrolltoprocketmeluncur = $("rocketmeluncur");
      var viewPortHeightrocketmeluncur = parseInt(
        document.documentElement.clientHeight
        );
      var scrollHeightrocketmeluncur = parseInt(
        document.body.getBoundingClientRect().top
        );
      var basewrocketmeluncur = parseInt(ftrocketmeluncur.clientWidth);
      var swrocketmeluncur = scrolltoprocketmeluncur.clientWidth;
      if (basewrocketmeluncur < 1000) {
        var leftrocketmeluncur = parseInt(fetchOffset(ftrocketmeluncur)["left"]);
        leftrocketmeluncur =
        leftrocketmeluncur < swrocketmeluncur
        ? leftrocketmeluncur * 2 - swrocketmeluncur
        : leftrocketmeluncur;
        scrolltoprocketmeluncur.style.left =
        basewrocketmeluncur + leftrocketmeluncur + "px";
      } else {
        scrolltoprocketmeluncur.style.left = "auto";
        scrolltoprocketmeluncur.style.right = "10px";
      }
    });

    jQuery("#rocketmeluncur").click(function() {
      jQuery("html, body").animate(
        { scrollTop: "0px", display: "none" },
        {
          duration: 600,
          easing: "linear"
        }
        );

      var self = this;
      this.className += " " + "launchrocket";
      setTimeout(function() {
        self.className = "showrocket";
      }, 800);
    });


  </script>

  <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>

</body>
</html>
