<?php include('./header.php') ?>
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
              <a href="index.php"><i class="zmdi zmdi-home"></i> الرئيسية</a>
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
  <?php include('./footer.php') ?>
