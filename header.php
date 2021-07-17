<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <meta name="description" content="نظام إدارة المشاريع بمنطقة مكة المكرمة" />
    <title>نظام إدارة المشاريع</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- Favicon-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/color_skins.css" />
    <link rel="stylesheet" href="assets/css/rtl.css" />
    <link rel="stylesheet" href="assets/plugins/sweetalert/sweetalert.css" />
    <link rel="stylesheet" href="assets/plugins/bootstrap-select/css/bootstrap-select.css" />
    <!-- Range Slider Css -->
    <link rel="stylesheet" href="assets/plugins/ion-rangeslider/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="assets/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" />
  </head>
<body class="theme-cyan rtl">
  <!-- Page Loader -->
  <div class="page-loader-wrapper">
    <div class="loader">
      <div class="m-t-30">
        <img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="logo" />
      </div>
      <p>نرجو الإنتظار ...</p>
    </div>
  </div>
  <!-- Overlay For Sidebars -->
  <div class="overlay"></div>
  <!-- Top Bar -->
  <nav class="navbar">
    <div class="col-12">
      <div class="navbar-header text-center">
        <a href="javascript:void(0);" class="bars"></a>
        <a class="navbar-brand" href="index.php">
          <img src="assets/images/logo2.svg" width="70" alt="logo" />


        </a>
      </div>
      <ul class="nav navbar-nav navbar-left">
        <a class="navbar-brand" href="index.php"><img src="assets/images/logo.svg" width="50" alt="logo"><span class="m-r-5">نظام متابعة المشاريع</span></a>

        <li>
          <a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a>
        </li>
        <li class="hidden-sm-down">
          
          <!-- <div class="input-group">
            <input type="text" class="form-control" placeholder="البحث ...." />
          </div> -->
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">

     
        <li>
          <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen" data-close="true"><i
              class="zmdi zmdi-fullscreen"></i></a>
        </li>
        <li>
          <a href="sign-in.html" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a>
        </li>
      
      </ul>
    </div>
    
  </nav>
  <!-- Left Sidebar -->
  <aside id="leftsidebar" class="sidebar">
    <div class="menu">
      <ul class="list">
        <li class="m-b-20">
          <div class="user-info">
            <div class="image">
              <a href="profile.php"><img src="assets/images/profile_av.jpg" alt="User" /></a>
            </div>
            <div class="detail m-b-5">
              <h4>محمد إبراهيم</h4>
              <small>مقاول عام</small>
            </div>
          </div>
        </li>

        <li class="active"><a href="index.php" class=" waves-effect waves-block"><i
              class="zmdi zmdi-accounts"></i><span>المستخدمين</span> </a> </li>
              <li class="text-muted">---------------</li>
      <li>
          <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-settings"></i><span>المشاريع</span>
          </a>
          <ul class="ml-menu">
            <li><a href="projects.php">قائمة المشاريع</a></li>
            <li><a href="new_project.php">إضافة مشروع</a></li>
          </ul>
        </li>
        <li class="text-muted">---------------</li>
        <li>
          <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>مدير النظام</span>
          </a>
          <ul class="ml-menu">
            <li><a href="managers.php">المدراء</a></li>
            <li><a href="external_boards.php">مستخدمي الجهات الخارجية</a></li>
            <li><a href="charts.php">اللوحة التفاعلية</a></li>
            <li><a href="reports.php">التقارير</a></li>
          </ul>
        </li>
        <li class="text-muted">---------------</li>
        <li><a href="profile.php" class=" waves-effect waves-block"><i
          class="zmdi zmdi-male"></i><span>الملف الشخصي</span> </a> </li>

      </ul>
    </div>
  </aside>
