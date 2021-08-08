<?php include('./header.php') ?> 

  <!-- Left Sidebar -->
  <aside id="leftsidebar" class="sidebar">
    <div class="menu">
      <ul class="list">
        <li class="m-b-20">
          <div class="user-info">
            <div class="image">
              <a href="profile.html"><img src="assets/images/profile_av.jpg" alt="User" /></a>
            </div>
            <div class="detail">
              <h4>محمد إبراهيم</h4>
              <small>مقاول عام</small>
            </div>
            <a href="profile.html" title="تعديل البروفايل"><i class="zmdi zmdi-edit"></i></a>
            <a href="projects.html" title="المشاريع"><i class="zmdi zmdi-settings"></i></a>
            <a href="reports.html" title="تعديل البروفايل"><i class="zmdi zmdi-copy"></i></a>
            <a href="sign-in.html" title="تسجيل الخروج"><i class="zmdi zmdi-power"></i></a>
          </div>
        </li>

        <li class="active"><a href="index.html" class=" waves-effect waves-block"><i
              class="zmdi zmdi-accounts"></i><span>المستخدمين</span> </a> </li>
              <li class="text-muted">---------------</li>
      <li>
          <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-settings"></i><span>المشاريع</span>
          </a>
          <ul class="ml-menu">
            <li><a href="projects.html">قائمة المشاريع</a></li>
            <li><a href="new_project.html">إضافة مشروع</a></li>
          </ul>
        </li>
        <li class="text-muted">---------------</li>
        <li>
          <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>مدير النظام</span>
          </a>
          <ul class="ml-menu">
            <li><a href="managers.html">المدراء</a></li>
            <li><a href="external_boards.html">مستخدمي الجهات الخارجية</a></li>
            <li><a href="charts.html">اللوحة التفاعلية</a></li>
            <li><a href="reports.html">التقارير</a></li>
          </ul>
        </li>
        <li class="text-muted">---------------</li>
        <li><a href="profile.html" class=" waves-effect waves-block"><i
          class="zmdi zmdi-male"></i><span>الملف الشخصي</span> </a> </li>

      </ul>
    </div>
  </aside>

  <!-- Right Sidebar -->
  <aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
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

  <!-- Main Content -->
  <section class="content home">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
          <h2>
            لوحة التحكم
            <small class="text-muted">نظام إدارة المشاريع</small>
          </h2>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-12">
          <ul class="breadcrumb float-md-left">
            <li class="breadcrumb-item">
              <a href="index.html"><i class="zmdi zmdi-home"></i> الرئيسية</a>
            </li>
            <li class="breadcrumb-item active"> المستخدمين</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <ul class="row profile_state list-unstyled">
              <li class="col-lg-3 col-md-3 col-6">
                <div class="body">
                  <i class="zmdi zmdi-accounts text-success"></i>
                  <h6>عدد المستخدمين </h6>
                  <p>2</p>
                  <div class="progress m-t-20">
                    <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="45" aria-valuemin="0"
                      aria-valuemax="100" style="width: 45%"></div>
                  </div>
                </div>
              </li>
              <li class="col-lg-3 col-md-3 col-6">
                <div class="body">
                  <i class="zmdi zmdi-block text-danger"></i>
                  <h6>عدد المستخدمين المحظورين</h6>
                  <span>1</span>
                  <div class="progress m-t-20">
                    <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                      aria-valuemax="100" style="width: 89%"></div>
                  </div>
                </div>
              </li>
              <li class="col-lg-3 col-md-3 col-6">
                <div class="body">
                  <i class="zmdi zmdi-alarm-check text-success"></i>
                  <h6>أخر تحديث</h6>
                  <p>25/12/2020 </p>
                  <div class="progress m-t-20">
                    <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                      aria-valuemax="100" style="width: 89%"></div>
                  </div>
                </div>
              </li>
              <li class="col-lg-3 col-md-3 col-6">
                <div class="body">
                  <i class="zmdi zmdi-settings text-success"></i>
                  <h6>عدد المشاريع</h6>
                  <span>5</span>
                  <div class="progress m-t-20">
                    <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="39" aria-valuemin="0"
                      aria-valuemax="100" style="width: 39%"></div>
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card action_bar">
            <div class="body">
              <div class="header">
                <h2>الصلاحيات والمستخدمين</h2>
              </div>
              <div class="row">

           
                <div class="col-md-5">
                  <div class="input-group search">
                    <input type="text" class="form-control" placeholder="بحث ..." />
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="btn-group hidden-sm-down">
                    <button type="button" class="btn btn-simple btn-info dropdown-toggle" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      فرز<span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right slideDown">
                      <li><a href="javascript:void(0);">إسم المستخدم</a></li>
                      <li><a href="javascript:void(0);">تاريخ الإضافة</a></li>
                      <li><a href="javascript:void(0);">الصلاحية</a></li>
                    </ul>
                  </div>
                  <span class="m-r-10 m-l-10 text-green">إضافة مستخدم</span>
                  <button type="button" class="btn btn-success btn-icon btn-icon-mini hidden-sm-down slideDown"
                    data-toggle="modal" data-target="#userModal">
                    <i class="zmdi zmdi-plus-circle"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row js-sweetalert">
        <div class="col-lg-12">
          <div class="card">
            <div class="body table-responsive">
              <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead class="l-turquoise">
                  <tr>
                    <th>رقم الهوية</th>
                    <th>اسم المستخدم</th>
                    <th>تاريخ الإضافة</th>
                    <th>عدد المشاريع المضافة/المحدثة</th>
                    <th>حظر</th>
                    <th>الصلاحيات</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                
                    <td>2317949979</td>
                    <td>محمد إبراهيم محمد</td>
                    <td>25/3/2020</td>
                    <td><span class="badge badge-success">3</span></td>
                    <td>
                      <button class="btn btn-danger btn-sm" data-type="cancel">حظر</button>
                    </td>
                    <td class="d-flex flex-row justify-content-center">
                      <button class="btn btn-info btn-icon btn-simple btn-icon-mini m-l-5" data-toggle="modal"
                        data-target="#userModal">
                        <i class="zmdi zmdi-edit"></i>
                      </button>
                      <button class="btn btn-danger btn-icon btn-simple btn-icon-mini m-l-5" data-type="cancel">
                        <i class="zmdi zmdi-delete"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>2317949979</td>
                    <td>محمد إبراهيم محمد</td>
                    <td>25/3/2020</td>
                    <td><span class="badge badge-success">3</span></td>
                    <td>
                      <button class="btn btn-danger btn-sm" data-type="cancel">حظر</button>
                    </td>
                    <td class="d-flex flex-row justify-content-center">
                      <button class="btn btn-info btn-icon btn-simple btn-icon-mini m-l-5" data-toggle="modal"
                        data-target="#userModal">
                        <i class="zmdi zmdi-edit"></i>
                      </button>
                      <button class="btn btn-danger btn-icon btn-simple btn-icon-mini m-l-5" data-type="cancel">
                        <i class="zmdi zmdi-delete"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="modal fade" id="userModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg slideDown" role="document">
      <div class="modal-content card">
       
        <div class="modal-body">
          <div class="header">
            <h2>إضافة مستخدم جديد</h2>
          </div>
          <form class="form_validation" method="POST">
            <div class="row">
              <div class="col-md-4">
                <label for="email_address">الإسم الأول</label>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="الإسم الأول" required>
                </div>
              </div>
              <div class="col-md-4">
                <label for="email_address">الإسم الثاني</label>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="الإسم الثاني" required>
                </div>
              </div>

              <div class="col-md-4">
                <label for="email_address">إسم العائلة</label>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="إسم العائلة" required  >
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label for="email_address">رقم الجوال</label>
                <div class="form-group">
                  <input type="number" class="form-control" placeholder="رقم الجوال" />
                </div>
              </div>
              <div class="col-md-6">
                <label for="email_address">رقم الهوية</label>
                <div class="form-group">
                  <input type="number" class="form-control" placeholder="رقم الهوية" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label for="email_address">كلمة السر</label>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="كلمة السر" />
                </div>
              </div>
              <div class="col-md-6">
                <label for="email_address">تأكيد كلمة السر</label>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="تأكيد كلمة السر" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <hr>
                <label>صلاحيات المستخدم</label>
                <div class="form-group">
                  <div class="checkbox form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">إضافة</label>
                  </div>
                  <div class="checkbox form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">تحديث</label>
                  </div>

                  <div class="checkbox form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox3">حذف</label>
                  </div>
                  <div class="checkbox form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox4">الكل</label>
                  </div>
                </div>
              </div>
            </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-success waves-effect">
                      حفظ
                    </button>
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
                      إلغاء
                    </button>
                  </div>
          </form>
        </div>
   
      </div>
    </div>
  </div>
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
  <script src="assets/plugins/ion-rangeslider/js/ion.rangeSlider.js"></script> <!-- RangeSlider Plugin Js -->
  <script src="assets/js/pages/ui/range-sliders.js"></script> <!-- Custom Js -->
</body>

</html>