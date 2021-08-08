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
              <li><a href="charts.html">اللوحة التفاعلية</a></li>
              <li class="active"><a href="reports.html">التقارير</a></li>
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
            <h2>التقارير</h2>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-12">
            <ul class="breadcrumb float-md-left">
              <li class="breadcrumb-item">
                <a href="index.html"><i class="zmdi zmdi-home"></i>الرئيسية</a>
              </li>
              <li class="breadcrumb-item active"> التقارير</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <!-- Example Tab -->
        <div class="row clearfix">
          <div class="col-lg-12">
            <div class="card">

                <div class="body">
                  <div class="header">
                    <h2>بيانات المشروع</h2>
                  </div>
                  <div class="demo-masked-input">
                    <form class="form_validation" method="POST">
    
                      <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label>رقم المشروع</label>
                              <input type="number" class="form-control" required>
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
                            <label>الجهة</label>
                            <select class="form-control show-tick z-index" data-live-search="true" required>
                              <option>الأول</option>
                              <option>الثاني</option>
                              <option>الثالث</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label>المقاول</label>
                              <select class="form-control show-tick z-index" data-live-search="true" required>
                                <option>الأول</option>
                                <option>الثاني</option>
                                <option>الثالث</option>
                              </select>
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
        <div class="row clearfix js-sweetalert">
          <div class="col-lg-12">
            <div class="card">
                <div class="body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                        <tr>
                        <th>رقم المشروع</th>
                        <th>إسم المشروع</th>
                        <th>الجهة</th>
                        <th>المحافظة</th>

                        <th>تاريخ البداية</th>
                        <th>تاريخ النهاية</th>
                        <th>نسبة الانجاز</th>
                        <th>حالة المشروع</th>
                        <th>أخر نحديث</th>
                        <th>التفاصيل</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        
                        <td>2317949979</td>
                        <td>محمد إبراهيم محمد</td>
                        <td>اسم الجهه</td>
                        <td>مكة</td>


                        <td>25/3/2020</td>
                        <td>25/3/2020</td>
                        <td>20%</td>
                        <td><span class="badge badge-danger">مشروع ملغي</span></td>
                        <td>25/3/2020</td>

                        <td><button class="btn btn-sm btn-info" data-toggle="modal" data-target="#project-datails">التفاصيل</button></td>
                        </tr>
                        <tr>
                        
                        <td>2317949979</td>
                        <td>محمد إبراهيم محمد</td>
                        <td>اسم الجهه</td>
                        <td>جدة</td>

                        <td>25/3/2020</td>
                        <td>25/3/2020</td>
                        <td>50%</td>
                        <td><span class="badge badge-success">جاري العمل</span></td>

                        <td>25/3/2020</td>

                        <td><button class="btn btn-sm btn-info" data-toggle="modal" data-target="#project-datails">التفاصيل</button></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="project-datails" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg slideDown" role="document">
        <div class="modal-content card">
          <div class="modal-body">
            <div class="header">
              <h2>تفاصيل المشروع</h2>
            </div>
            <ul class="row profile_state list-unstyled d-flex flex-row justify-content-center">
              <li class="col-lg-3 col-md-3 col-6">
                <div class="body">
                  <i class="zmdi zmdi-settings text-success"></i>
                  <h6>رقم المشروع </h6>
                  <p>2344</p>
                  <div class="progress m-t-20">
                    <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                      aria-valuemax="100" style="width: 100%"></div>
                  </div>
                </div>
              </li>
              <li class="col-lg-3 col-md-3 col-6">
                <div class="body">
                  <i class="zmdi zmdi-settings text-success"></i>
                  <h6>المحافظة</h6>
                  <p>جدة</p>
                  <div class="progress m-t-20">
                    <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                      aria-valuemax="100" style="width: 100%"></div>
                  </div>
                </div>
              </li>
              <li class="col-lg-3 col-md-3 col-6">
                <div class="body">
                  <i class="zmdi zmdi-settings text-success"></i>
                  <h6>الجهة</h6>
                  <p>الجهة</p>
                  <div class="progress m-t-20">
                    <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                      aria-valuemax="100" style="width: 100%"></div>
                  </div>
                </div>
              </li>
              <li class="col-lg-3 col-md-3 col-6">
                <div class="body">
                  <i class="zmdi zmdi-settings text-success"></i>
                  <h6>المقاول</h6>
                  <p>اسم المقاول</p>
                  <div class="progress m-t-20">
                    <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                      aria-valuemax="100" style="width: 100%"></div>
                  </div>
                </div>
              </li>

              <li class="col-lg-3 col-md-3 col-6">
                <div class="body">
                  <i class="zmdi zmdi-settings text-success"></i>
                  <h6>المبلغ</h6>
                  <p>4577</p>
                  <div class="progress m-t-20">
                    <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                      aria-valuemax="100" style="width: 100%"></div>
                  </div>
                </div>
              </li>


              <li class="col-lg-3 col-md-3 col-6">
                <div class="body">
                  <i class="zmdi zmdi-settings text-success"></i>
                  <h6> المدفوع حتي تاريخة</h6>
                  <p>4577</p>
                  <div class="progress m-t-20">
                    <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                      aria-valuemax="100" style="width: 100%"></div>
                  </div>
                </div>
              </li>

              <li class="col-lg-3 col-md-3 col-6">
                <div class="body">
                  <i class="zmdi zmdi-settings text-success"></i>
                  <h6> تاريخ البداية</h6>
                  <p>25/12/202</p>
                  <div class="progress m-t-20">
                    <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                      aria-valuemax="100" style="width: 100%"></div>
                  </div>
                </div>
              </li>

              <li class="col-lg-3 col-md-3 col-6">
                <div class="body">
                  <i class="zmdi zmdi-settings text-success"></i>
                  <h6> تاريخ النهاية</h6>
                  <p>25/12/202</p>
                  <div class="progress m-t-20">
                    <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                      aria-valuemax="100" style="width: 100%"></div>
                  </div>
                </div>
              </li>

              <li class="col-lg-3 col-md-3 col-6">
                <div class="body">
                  <i class="zmdi zmdi-settings text-success"></i>
                  <h6>نسبة الإنجاز</h6>
                  <p>15%</p>
                  <div class="progress m-t-20">
                    <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                      aria-valuemax="100" style="width: 100%"></div>
                  </div>
                </div>
              </li>

              <li class="col-lg-3 col-md-3 col-6">
                <div class="body">
                  <i class="zmdi zmdi-settings text-success"></i>
                  <h6>حالةالمشروع</h6>
                  <p>ملغي</p>
                  <div class="progress m-t-20">
                    <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                      aria-valuemax="100" style="width: 100%"></div>
                  </div>
                </div>
              </li>


            </ul>

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
    <script src="assets/plugins/ion-rangeslider/js/ion.rangeSlider.js"></script>
    <!-- RangeSlider Plugin Js -->
    <script src="assets/js/pages/ui/range-sliders.js"></script>
    <!-- Custom Js -->
  </body>
</html>
