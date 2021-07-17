<?php include('./header.php') ?>

    <section class="content">
      <div class="block-header ">
        <div class="row">
          <div class="col-lg-7 col-md-6 col-sm-12">
            <h2>التحكم في مستخدمي الجهات الخارجية</h2>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-12">
            <ul class="breadcrumb float-md-left">
              <li class="breadcrumb-item">
                <a href="index.php"><i class="zmdi zmdi-home"></i>الرئيسية</a>
              </li>
              <li class="breadcrumb-item active"> التحكم في مستخدمي الجهات الخارجية</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <!-- Example Tab -->
        <div class="row clearfix">
          <div class="col-lg-12">
            <div class="card action_bar">
              <div class="body">
                <div class="header">
                  <h2>مستخدمي الجهات الخارجية</h2>
                </div>
                <div class="row clearfix">
                  <div class="col-md-2">
                    <div class="checkbox inlineblock delete_all">
                      <input id="deleteall" type="checkbox" />
                      <label for="deleteall"> الكل </label>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="input-group search">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="بحث ..."
                      />
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="btn-group hidden-sm-down">
                      <button
                        type="button"
                        class="btn btn-simple btn-info dropdown-toggle"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        فرز<span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-right slideDown">
                        <li><a href="javascript:void(0);">إسم المستخدم</a></li>
                        <li><a href="javascript:void(0);">تاريخ الإضافة</a></li>
                        <li><a href="javascript:void(0);">الصلاحية</a></li>
                      </ul>
                    </div>
                    <span class="m-r-10 m-l-10 text-green"
                      >اضافة مدير نظام جديد</span
                    >
                    <button
                      type="button"
                      class="btn btn-success btn-icon btn-icon-mini hidden-sm-down slideDown"
                      data-toggle="modal"
                      data-target="#managerModal"
                    >
                      <i class="zmdi zmdi-plus-circle"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row clearfix js-sweetalert">
          <div class="col-lg-12">
            <div class="card">
              <div class="body table-responsive">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead class="l-turquoise">
                    <tr>
                      <th>رقم الهوية</th>
                      <th>الإسم</th>
                      <th>الجهة</th>
                      <th>تاريخ الإضافة</th>
                      <th>حظر المستخدم</th>
                      <th>تحديث البيانات</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      
                      <td>2317949979</td>
                      <td>محمد إبراهيم محمد</td>
                      <td>اسم الجهه</td>

                      <td>25/3/2020</td>
                      <td>
                        <button class="btn btn-danger btn-sm" data-type="cancel">حظر</button>
                      </td>
                      <td>
                        <button
                          class="btn btn-info btn-icon btn-simple btn-icon-mini m-l-5"
                          data-toggle="modal"
                          data-target="#managerModal"
                        >
                          <i class="zmdi zmdi-edit"></i>
                        </button>
                        
                      </td>
                    </tr>
                    <tr>
                      <td>2317949979</td>
                      <td>محمد إبراهيم محمد</td>
                      <td>اسم الجهه</td>

                      <td>25/3/2020</td>
                      <td>
                        <button
                          class="btn btn-danger btn-sm"
                          data-type="cancel"
                        >
                          حظر
                        </button>
                      </td>
                      <td>
                        <button
                          class="btn btn-info btn-icon btn-simple btn-icon-mini m-l-5"
                          data-toggle="modal"
                          data-target="#managerModal"
                        >
                          <i class="zmdi zmdi-edit"></i>
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

    <div class="modal fade" id="managerModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg slideDown" role="document">
        <div class="modal-content card">
          <div class="modal-body">
            <div class="header">
              <h2>اضافة مستخدم جديد</h2>
            </div>
            <form class="form_validation" method="POST">
              <div class="row clearfix">
                <div class="col-md-4">
                  <label for="email_address">الإسم الأول</label>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="الإسم الأول"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="email_address">الإسم الثاني</label>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="الإسم الثاني"
                      required
                    />
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="email_address">إسم العائلة</label>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="إسم العائلة"
                      required
                    />
                  </div>
                </div>
              </div>

              <div class="row clearfix">
                <div class="col-md-6">
                  <label for="email_address">رقم الجوال</label>
                  <div class="form-group">
                    <input
                      type="number"
                      class="form-control"
                      placeholder="رقم الجوال"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="email_address">رقم الهوية</label>
                  <div class="form-group">
                    <input
                      type="number"
                      class="form-control"
                      placeholder="رقم الهوية"
                    />
                  </div>
                </div>
              </div>

              <div class="row clearfix">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>الجهة </label>
                    <select class="form-control show-tick z-index" data-live-search="true" required>
                      <option>الأول</option>
                      <option>الثاني</option>
                      <option>الثالث</option>
                    </select>
                  </div>
                </div>
  
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-danger"> -  اضافة جهة خارجية غير موجودة بالقائمة -</label>
                    <input type="text" class="form-control" required>
                  </div>
                </div>
              </div>

              <div class="row clearfix">
                <div class="col-md-6">
                  <label for="email_address">كلمة السر</label>
                  <div class="form-group">
                    <input
                      type="password"
                      class="form-control"
                      placeholder="كلمة السر"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="email_address">تأكيد كلمة السر</label>
                  <div class="form-group">
                    <input
                      type="password"
                      class="form-control"
                      placeholder="تأكيد كلمة السر"
                    />
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success waves-effect">
                  حفظ
                </button>
                <button
                  type="button"
                  class="btn btn-danger waves-effect"
                  data-dismiss="modal"
                >
                  إلغاء
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php include('./footer.php') ?>
