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
<body class="theme-cyan rtl menu_dark">
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

  <nav class="navbar">
      <div class="col-12">
        <div class="navbar-header">
          <a href="javascript:void(0);" class="bars"></a>
          <a class="navbar-brand" href="index.html">
            <span class="m-r-5">نظام إدارة المشاريع</span>

            <img src="assets/images/logo.svg" width="50" alt="logo" />
          </a>
        </div>
        <ul class="nav navbar-nav navbar-left">
          <li>
            <a
              href="javascript:void(0);"
              class="ls-toggle-btn"
              data-close="true"
              ><i class="zmdi zmdi-swap"></i
            ></a>
          </li>
          <li class="hidden-sm-down">
            <div class="input-group">
              <input
                type="text"
                class="form-control"
                placeholder="البحث ...."
              />
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle"
              data-toggle="dropdown"
              role="button"
              ><i class="zmdi zmdi-notifications"></i>
              <div class="notify">
                <span class="heartbit"></span><span class="point"></span>
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-right slideDown">
              <li class="header">التنبيهات</li>
              <li class="body">
                <ul class="menu list-unstyled">
                  <li>
                    <a href="javascript:void(0);">
                      <div class="icon-circle bg-blue">
                        <i class="zmdi zmdi-account"></i>
                      </div>
                      <div class="menu-info">
                        <h4>إضافة بالمشروع الأول</h4>
                        <p><i class="zmdi zmdi-time"></i> منذ 14 دقيقة</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">
                      <div class="icon-circle bg-amber">
                        <i class="zmdi zmdi-collection-bookmark"></i>
                      </div>
                      <div class="menu-info">
                        <h4>تعديل بالمشروع الأول</h4>
                        <p><i class="zmdi zmdi-time"></i> منذ 24 دقيقة</p>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="javascript:void(0);">
                      <div class="icon-circle bg-green">
                        <i class="zmdi zmdi-edit"></i>
                      </div>
                      <div class="menu-info">
                        <h4>تعديل بالمشروع رقم 2</h4>
                        <p><i class="zmdi zmdi-time"></i> منذ 24 دقيقة</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
                <a href="javascript:void(0);">مشاهدة كل التنبيهات</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle"
              data-toggle="dropdown"
              role="button"
              ><i class="zmdi zmdi-flag"></i>
              <div class="notify">
                <span class="heartbit"></span><span class="point"></span>
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-right slideDown">
              <li class="header">المهام</li>
              <li class="body">
                <ul class="menu tasks list-unstyled">
                  <li>
                    <a href="javascript:void(0);">
                      <div class="progress-container progress-info">
                        <span class="progress-badge">المهمة رقم 1</span>
                        <div class="progress">
                          <div
                            class="progress-bar progress-bar-warning"
                            role="progressbar"
                            aria-valuenow="35"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            style="width: 35%"
                          >
                            <span class="progress-value">35%</span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">
                      <div class="progress-container progress-info">
                        <span class="progress-badge">المهمة رقم 2</span>
                        <div class="progress">
                          <div
                            class="progress-bar progress-bar-warning"
                            role="progressbar"
                            aria-valuenow="35"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            style="width: 35%"
                          >
                            <span class="progress-value">35%</span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">
                      <div class="progress-container progress-info">
                        <span class="progress-badge">المهمة رقم 3</span>
                        <div class="progress">
                          <div
                            class="progress-bar progress-bar-warning"
                            role="progressbar"
                            aria-valuenow="35"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            style="width: 35%"
                          >
                            <span class="progress-value">35%</span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">
                      <div class="progress-container progress-info">
                        <span class="progress-badge">المهمة رقم 4</span>
                        <div class="progress">
                          <div
                            class="progress-bar progress-bar-warning"
                            role="progressbar"
                            aria-valuenow="35"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            style="width: 35%"
                          >
                            <span class="progress-value">35%</span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
                <a href="javascript:void(0);">مشاهدة الكل</a>
              </li>
            </ul>
          </li>
          <li>
            <a
              href="javascript:void(0);"
              class="fullscreen hidden-sm-down"
              data-provide="fullscreen"
              data-close="true"
              ><i class="zmdi zmdi-fullscreen"></i
            ></a>
          </li>
          <li>
            <a href="sign-in.html" class="mega-menu" data-close="true"
              ><i class="zmdi zmdi-power"></i
            ></a>
          </li>
          <li>
            <a
              href="javascript:void(0);"
              class="js-right-sidebar"
              data-close="true"
              ><i class="zmdi zmdi-settings zmdi-hc-spin"></i
            ></a>
          </li>
        </ul>
      </div>
    </nav>