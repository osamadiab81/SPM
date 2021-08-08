<?php include('./header.php') ?> 
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
      <div class="menu">
        <ul class="list">
          <li class="m-b-20">
            <div class="user-info">
              <div class="image">
                <a href="profile.html"
                  ><img src="assets/images/profile_av.jpg" alt="User"
                /></a>
              </div>
              <div class="detail">
                <h4>محمد إبراهيم</h4>
                <small>مقاول عام</small>
              </div>
              <a href="profile.html" title="تعديل البروفايل"
                ><i class="zmdi zmdi-edit"></i
              ></a>
              <a href="projects.html" title="المشاريع"
                ><i class="zmdi zmdi-settings"></i
              ></a>
              <a href="reports.html" title="تعديل البروفايل"
                ><i class="zmdi zmdi-copy"></i
              ></a>
              <a href="sign-in.html" title="تسجيل الخروج"
                ><i class="zmdi zmdi-power"></i
              ></a>
            </div>
          </li>

          <li>
            <a href="index.html" class="waves-effect waves-block"
              ><i class="zmdi zmdi-accounts"></i><span>المستخدمين</span>
            </a>
          </li>
          <li class="text-muted">---------------</li>
          <li class="active">
            <a href="javascript:void(0);" class="menu-toggle"
              ><i class="zmdi zmdi-settings"></i><span>المشاريع</span>
            </a>
            <ul class="ml-menu">
              <li><a href="projects.html">قائمة المشاريع</a></li>
              <li class="active"><a href="new_project.html">إضافة مشروع</a></li>
            </ul>
          </li>
          <li class="text-muted">---------------</li>
          <li>
            <a href="javascript:void(0);" class="menu-toggle"
              ><i class="zmdi zmdi-account-add"></i><span>مدير النظام</span>
            </a>
            <ul class="ml-menu">
              <li><a href="managers.html">المدراء</a></li>
              <li>
                <a href="external_boards.html">مستخدمي الجهات الخارجية</a>
              </li>
              <li><a href="charts.html">اللوحة التفاعلية</a></li>
              <li><a href="reports.html">التقارير</a></li>
            </ul>
          </li>
          <li class="text-muted">---------------</li>
          <li>
            <a href="profile.html" class="waves-effect waves-block"
              ><i class="zmdi zmdi-male"></i><span>الملف الشخصي</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>

    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#setting"
            ><i class="zmdi zmdi-settings zmdi-hc-spin"></i
          ></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#activity">لون القائمة</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active slideRight" id="setting">
          <div class="slim_scroll">
            <div class="card">
              <h6>تغيير لون القائمة</h6>
              <ul class="list-unstyled theme-light-dark">
                <li>
                  <div class="t-light btn btn-default btn-simple">مضيء</div>
                </li>
                <li>
                  <div class="t-dark btn btn-default">مظلم</div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="tab-pane slideRight" id="activity">
          <div class="slim_scroll">
            <div class="card">
              <h6>الأخبار</h6>
              <ul class="list-unstyled activity">
                <li>
                  <a href="javascript:void(0)">
                    <i class="zmdi zmdi-cake bg-blue"></i>
                    <div class="info">
                      <h4>افتتاح قاعة 1</h4>
                      <small>يوم 12 يناير</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">
                    <i class="zmdi zmdi-cake bg-blue"></i>
                    <div class="info">
                      <h4>افتتاح قاعة 1</h4>
                      <small>يوم 12 يناير</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">
                    <i class="zmdi zmdi-cake bg-blue"></i>
                    <div class="info">
                      <h4>افتتاح قاعة 1</h4>
                      <small>يوم 12 يناير</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">
                    <i class="zmdi zmdi-cake bg-blue"></i>
                    <div class="info">
                      <h4>افتتاح قاعة 1</h4>
                      <small>يوم 12 يناير</small>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </aside>


  <section class="content">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
          <h2>
            إضافة مشروع جديد
          </h2>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-12">
          <ul class="breadcrumb float-md-left">
            <li class="breadcrumb-item">
              <a href="index.html"><i class="zmdi zmdi-home"></i>الرئيسية</a>
            </li>
            <li class="breadcrumb-item active"> إضافة مشروع جديد</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <!-- Example Tab -->
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 m-auto">

          <div class="card">

            <div class="body">
              <div class="header">
                <h2>إضافة مشروع جديد</h2>
              </div>
              <div class="demo-masked-input">
                <form class="form_validation" method="POST">

                  <div class="row clearfix">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>اسم المشروع</label>
                        <input type="text" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>المحافظة </label>
                        <select class="form-control show-tick z-index" data-live-search="true" required>
                          <option>مكة</option>
                          <option>المدينة</option>
                          <option>جدة</option>
                        </select>
                      </div>
                    </div>
                  </div>


                  <div class="row clearfix">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>المقاول </label>
                        <select class="form-control show-tick z-index" data-live-search="true" required>
                          <option>الأول</option>
                          <option>الثاني</option>
                          <option>الثالث</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="text-danger"> -  اضافة مقاول جديد غير موجود بالقائمة -</label>
                        <input type="text" class="form-control" required>
                      </div>
                    </div>
                  </div>

                  <div class="row clearfix">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>تاريخ البداية</label>
                        <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>تاريخ النهاية</label>
                        <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control" required>
                      </div>
                    </div>
                  </div>

                  <div class="row clearfix">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>المبلغ</label>
                        <input type="number" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>المبلغ المدفوع حتى تاريخه </label>
                        <input type="number" class="form-control" required>
                      </div>
                    </div>
                  </div>

                  <div class="row clearfix">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>نسبة الانجاز </label>
                        <input type="text" id="range_01" value="" required >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>حالة المشروع </label>
                        <select class="form-control show-tick z-index" data-live-search="true">
                          <option>مشروع ملغي</option>
                          <option>مشروع جديد</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-block btn-success btn-round waves-effect m-t-20">إضافة</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
    <script src="assets/bundles/vendorscripts.bundle.js"></script>
    <!-- Sparkline Plugin Js -->
    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="assets/js/pages/ui/dialogs.js"></script>
    <script src="assets/bundles/datatablescripts.bundle.js"></script>
    <script src="assets/js/pages/tables/jquery-datatable.js"></script>
    <script src="assets/plugins/ion-rangeslider/js/ion.rangeSlider.js"></script>
    <!-- RangeSlider Plugin Js -->
    <script src="assets/js/pages/ui/range-sliders.js"></script>
    <!-- Custom Js -->


</body>

</html>