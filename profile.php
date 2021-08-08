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
          <li>
            <a href="javascript:void(0);" class="menu-toggle"
              ><i class="zmdi zmdi-settings"></i><span>المشاريع</span>
            </a>
            <ul class="ml-menu">
              <li><a href="projects.html">قائمة المشاريع</a></li>
              <li><a href="new_project.html">إضافة مشروع</a></li>
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
          <li class="active">
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
            <h2>الملف الشخصي</h2>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-12">
            <ul class="breadcrumb float-md-left">
              <li class="breadcrumb-item">
                <a href="index.html"><i class="zmdi zmdi-home"></i> الرئيسية</a>
              </li>
              <li class="breadcrumb-item active">الملف الشخصي</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row clearfix">
          <div class="col-lg-6 col-md-12">
            <div class="card member-card">
              <div class="header l-cyan">
                <h4 class="m-t-10">محمد إبراهيم</h4>
              </div>
              <div class="member-img">
                <a href="profile.html" class="">
                  <img
                    src="assets/images/profile_av.jpg"
                    class="rounded-circle"
                    alt="profile-image"
                  />
                </a>
              </div>
              <div class="body">
                <div class="col-12">
                  <p class="text-muted">مقاول عام</p>
                </div>
                <hr />
                <div class="row text-center">
                  <div class="col-12">
                    <h5>12</h5>
                    <small>مشروع</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="body active">
                <small class="text-muted">البريد الإلكتروني </small>
                <p>osamadiab@gmail.com</p>
                <hr />
                <small class="text-muted">الجوال</small>
                <p>059 4499 639</p>
                <hr />
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="card">
              <div class="body">
                <div class="header">
                  <h2>المعلومات الشخصية</h2>
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="اسم المستخدم"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="password"
                    class="form-control"
                    placeholder="كلمة السر الحالية"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="password"
                    class="form-control"
                    placeholder="كلمة السر الجديدة"
                  />
                </div>
                <button class="btn btn-info btn-round">حفظ التغييرات</button>
              </div>
            </div>

            <div class="card">
              <div class="body">
                <div class="header">
                  <h2>المعلومات الرئيسية</h2>
                </div>
                <div class="row clearfix">
                  <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="الإسم الأول"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="الإسم الثاني"
                      />
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control"
                        placeholder="البريد الإلكتروني"
                      />
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                      <select
                        class="form-control show-tick z-index"
                        data-live-search="true"
                        required
                      >
                        <option>مكة</option>
                        <option>المدينة</option>
                        <option>جدة</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="checkbox">
                      <input id="procheck1" type="checkbox" />
                      <label for="procheck1">موافق ؟</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button class="btn btn-info btn-round">
                      حفظ التغييرات
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <!-- Lib Scripts Plugin Js -->
    <script src="assets/bundles/vendorscripts.bundle.js"></script>
    <!-- Lib Scripts Plugin Js -->
    <script src="assets/bundles/knob.bundle.js"></script>
    <!-- Jquery Knob Plugin Js -->
    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/pages/charts/jquery-knob.js"></script>
  </body>
</html>
