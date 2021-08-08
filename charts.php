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
          <li class="active">
            <a href="javascript:void(0);" class="menu-toggle"
              ><i class="zmdi zmdi-account-add"></i><span>مدير النظام</span>
            </a>
            <ul class="ml-menu">
              <li><a href="managers.html">المدراء</a></li>
              <li>
                <a href="external_boards.html">مستخدمي الجهات الخارجية</a>
              </li>
              <li class="active"><a href="charts.html">اللوحة التفاعلية</a></li>
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

<section class="content home">
    <div class="block-header">
        <div class="row">
          <div class="col-lg-7 col-md-6 col-sm-12">
            <h2>
                اللوحة التفاعلية
            </h2>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-12">
            <ul class="breadcrumb float-md-left">
              <li class="breadcrumb-item">
                <a href="index.html"><i class="zmdi zmdi-home"></i> الرئيسية</a>
              </li>
              <li class="breadcrumb-item active"> اللوحة التفاعلية</li>
            </ul>
          </div>
        </div>
      </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">

                    <div class="body">
                        <div class="header">
                            <h2>البحث</h2>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>تحديد جهة </label>
                                    <select class="form-control show-tick z-index" data-live-search="true" required>
                                      <option>الأول</option>
                                      <option>الثاني</option>
                                      <option>الثالث</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>تحديد محافظة </label>
                                    <select class="form-control show-tick z-index" data-live-search="true" required>
                                      <option>الأول</option>
                                      <option>الثاني</option>
                                      <option>الثالث</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>تحديد مقاول </label>
                                    <select class="form-control show-tick z-index" data-live-search="true" required>
                                      <option>الأول</option>
                                      <option>الثاني</option>
                                      <option>الثالث</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-sm-3 align-self-end">
                                <div class="form-group">

                                <button type="button" class="btn btn-round btn-primary waves-effect">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
          
                                  
        </div>        
      
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    
                    <div class="body">
                     
                        <div id="donut_chart" class="dashboard-donut-chart"></div>
                        <table class="table m-b-0">
                          
                        </table>
                    </div>
                </div>
            </div>
        
            


        </div>

        <hr>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card project-card">
                    <div class="header bg-cyan">
                        <h4>إجمالي الملتزم</h4>
                        <h6>34</h6>
                    </div>
                    <table class="table table-striped m-b-0">
                        <tbody>
                            <tr>
                                <td colspan="2">إجمالي قيمة العقود</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6>34566</h6>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">إجمالي المبلغ المدفوع</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6>34566</h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card project-card">
                    <div class="header bg-amber">
                        <h4>إجمالي المتأخر</h4>
                        <h6>34</h6>
                    </div>
                    <table class="table table-striped m-b-0">
                        <tbody>
                            <tr>
                                <td colspan="2">إجمالي قيمة العقود</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6>34566</h6>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">إجمالي المبلغ المدفوع</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6>34566</h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="card project-card">
                    <div class="header bg-red">
                        <h4>إجمالي الموقوف</h4>
                        <h6>34</h6>
                    </div>
                    <table class="table table-striped m-b-0">
                        <tbody>
                            <tr>
                                <td colspan="2">إجمالي قيمة العقود</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6>34566</h6>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">إجمالي المبلغ المدفوع</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6>34566</h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
           
  


        </div>

        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="card project-card">
                    <div class="header bg-green">
                        <h4>إجمالي المكتمل</h4>
                        <h6>34</h6>
                    </div>
                    <table class="table table-striped m-b-0">
                        <tbody>
                            <tr>
                                <td colspan="2">إجمالي قيمة العقود</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6>34566</h6>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">إجمالي المبلغ المدفوع</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6>34566</h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card project-card">
                    <div class="header bg-grey">
                        <h4>إجمالي المسحوب</h4>
                        <h6>34</h6>
                    </div>
                    <table class="table table-striped m-b-0">
                        <tbody>
                            <tr>
                                <td colspan="2">إجمالي قيمة العقود</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6>34566</h6>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">إجمالي المبلغ المدفوع</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6>34566</h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
<script src="assets/plugins/ion-rangeslider/js/ion.rangeSlider.js"></script> <!-- RangeSlider Plugin Js -->
<script src="assets/js/pages/ui/range-sliders.js"></script> <!-- Custom Js -->

<script src="assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="assets/js/pages/blog/blog.js"></script>

</body>
</html>