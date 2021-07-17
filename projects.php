<?php include('./header.php') ?>

    <section class="content">
      <div class="block-header">
        <div class="row">
          <div class="col-lg-7 col-md-6 col-sm-12">
            <h2>المشاريع</h2>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-12">
            <ul class="breadcrumb float-md-left">
              <li class="breadcrumb-item">
                <a href="index.php"><i class="zmdi zmdi-home"></i> الرئيسية</a>
              </li>
              <li class="breadcrumb-item active">المشاريع</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <!-- Example Tab -->
        <div class="row js-sweetalert">
          <div class="col-lg-12 col-md-12 col-sm-12 m-auto">
            <div class="card">
              <div class="body">
                <div class="header">
                  <h2>نظام إدارة المشاريع</h2>
                </div>
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home"
                      >المشاريع التي تحتاج الى اجراء</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile"
                      >المشاريع الغير محدثة</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages"
                      >المشاريع المحدثة</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="card project-card">
              <div class="tab-content">
                <div role="tabpanel" class="card tab-pane in active" id="home">
                  <div class="header l-blue">
                    <h4>المشاريع التي تحتاج الى اجراء</h4>
                  </div>
                  <div class="body">
                    <div class="body table-responsive">
                      <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                          <tr>
                            <th>رقم المشروع</th>
                            <th>اسم المشروع</th>
                            <th>تاريخ البداية</th>
                            <th>تاريخ النهاية</th>
                            <th>حالة المشروع</th>
                            <th>النسبة المئوية</th>
                            <th>الموظف المدخل</th>
                            <th>نوع الاجراء</th>
                            <th>الاجراء</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>رقم المشروع</th>
                            <th>اسم المشروع</th>
                            <th>تاريخ البداية</th>
                            <th>تاريخ النهاية</th>
                            <th>حالة المشروع</th>
                            <th>النسبة المئوية</th>
                            <th>الموظف المدخل</th>
                            <th>نوع الاجراء</th>
                            <th>الاجراء</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>اسم المشروع الأول</td>
                            <td>2012/12/02</td>
                            <td>2012/12/02</td>
                            <td>حالة المشروع</td>
                            <td>50%</td>
                            <td>عبد الرحمن أحمد</td>
                            <td>
                              <span class="badge badge-danger">مشروع ملغي</span>
                            </td>
                            <td>
                              <button
                                class="btn btn-sm btn-info"
                                data-toggle="modal"
                                data-target="#project-datails"
                              >
                                التفاصيل
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>اسم المشروع الثاني</td>
                            <td>2012/12/02</td>
                            <td>2012/12/02</td>
                            <td>حالة المشروع</td>
                            <td>50%</td>
                            <td>عبد الرحمن أحمد</td>
                            <td>
                              <span class="badge badge-info">تحديث مشروع</span>
                            </td>
                            <td>
                              <button class="btn btn-sm btn-info">
                                التفاصيل
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>اسم المشروع الثالث</td>
                            <td>2012/12/02</td>
                            <td>2012/12/02</td>
                            <td>حالة المشروع</td>
                            <td>50%</td>
                            <td>عبد الرحمن أحمد</td>
                            <td>
                              <span class="badge badge-success"
                                >مشروع جديد</span
                              >
                            </td>
                            <td>
                              <button class="btn btn-sm btn-info">
                                التفاصيل
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="card tab-pane" id="profile">
                  <div class="header l-slategray">
                    <h4>المشاريع الغير محدثة</h4>
                  </div>
                  <div class="body">
                    <div class="body table-responsive">
                      <table
                        class="table table-bordered table-striped table-hover js-basic-example dataTable"
                      >
                        <thead>
                          <tr>
                            <th>رقم المشروع</th>
                            <th>اسم المشروع</th>
                            <th>تاريخ البداية</th>
                            <th>تاريخ النهاية</th>
                            <th>حالة المشروع</th>
                            <th>النسبة المئوية</th>
                            <th>اخر تحديث</th>
                            <th>الاجراء</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>رقم المشروع</th>
                            <th>اسم المشروع</th>
                            <th>تاريخ البداية</th>
                            <th>تاريخ النهاية</th>
                            <th>حالة المشروع</th>
                            <th>النسبة المئوية</th>
                            <th>اخر تحديث</th>
                            <th>الاجراء</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>اسم المشروع الأول</td>
                            <td>2012/12/02</td>
                            <td>2012/12/02</td>
                            <td>حالة المشروع</td>
                            <td>50%</td>
                            <td>2012/12/02</td>

                            <td class="d-flex flex-row justify-content-center">
                              <button
                                class="btn btn-info btn-icon btn-simple btn-icon-mini m-l-5"
                                data-toggle="modal"
                                data-target="#userModal"
                                title="تعديل"
                              >
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button
                                class="btn btn-default btn-icon btn-simple btn-icon-mini m-l-5"
                                data-type="cancel"
                                title="تحدثت"
                              >
                                <i class="zmdi zmdi-archive"></i>
                              </button>
                              <button
                                class="btn btn-danger btn-icon btn-simple btn-icon-mini m-l-5"
                                data-type="cancel"
                                title="حذف"
                              >
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>اسم المشروع الثاني</td>
                            <td>2012/12/02</td>
                            <td>2012/12/02</td>
                            <td>حالة المشروع</td>
                            <td>50%</td>
                            <td>2012/12/02</td>

                            <td class="d-flex flex-row justify-content-center">
                              <button
                                class="btn btn-info btn-icon btn-simple btn-icon-mini m-l-5"
                                data-toggle="modal"
                                data-target="#userModal"
                                title="تعديل"
                              >
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button
                                class="btn btn-default btn-icon btn-simple btn-icon-mini m-l-5"
                                data-type="cancel"
                                title="تحدثت"
                              >
                                <i class="zmdi zmdi-archive"></i>
                              </button>
                              <button
                                class="btn btn-danger btn-icon btn-simple btn-icon-mini m-l-5"
                                data-type="cancel"
                                title="حذف"
                              >
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>اسم المشروع الثالث</td>
                            <td>2012/12/02</td>
                            <td>2012/12/02</td>
                            <td>حالة المشروع</td>
                            <td>50%</td>
                            <td>2012/12/02</td>
                            <td class="d-flex flex-row justify-content-center">
                              <button
                                class="btn btn-info btn-icon btn-simple btn-icon-mini m-l-5"
                                data-toggle="modal"
                                data-target="#userModal"
                                title="تعديل"
                              >
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button
                                class="btn btn-default btn-icon btn-simple btn-icon-mini m-l-5"
                                data-type="cancel"
                                title="تحدثت"
                              >
                                <i class="zmdi zmdi-archive"></i>
                              </button>
                              <button
                                class="btn btn-danger btn-icon btn-simple btn-icon-mini m-l-5"
                                data-type="cancel"
                                title="حذف"
                              >
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="card tab-pane" id="messages">
                  <div class="header l-cyan">
                    <h4>المشاريع المحدثة</h4>
                  </div>
                  <div class="body">
                    <div class="body table-responsive">
                      <table
                        class="table table-bordered table-striped table-hover js-basic-example dataTable"
                      >
                        <thead>
                          <tr>
                            <th>رقم المشروع</th>
                            <th>اسم المشروع</th>
                            <th>تاريخ البداية</th>
                            <th>تاريخ النهاية</th>
                            <th>حالة المشروع</th>
                            <th>النسبة المئوية</th>
                            <th>أخر تحديث</th>
                            <th>نوع الاجراء</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>رقم المشروع</th>
                            <th>اسم المشروع</th>
                            <th>تاريخ البداية</th>
                            <th>تاريخ النهاية</th>
                            <th>حالة المشروع</th>
                            <th>النسبة المئوية</th>
                            <th>أخر تحديث</th>
                            <th>نوع الاجراء</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>اسم المشروع الأول</td>
                            <td>2012/12/02</td>
                            <td>2012/12/02</td>
                            <td>2012/12/02</td>
                            <td>$372,000</td>
                            <td>61</td>
                            <td class="d-flex flex-row justify-content-center">
                              <button
                                class="btn btn-info btn-icon btn-simple btn-icon-mini m-l-5"
                                data-toggle="modal"
                                data-target="#userModal"
                                title="تعديل"
                              >
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button
                                class="btn btn-default btn-icon btn-simple btn-icon-mini m-l-5"
                                data-type="cancel"
                                title="تحدثت"
                              >
                                <i class="zmdi zmdi-archive"></i>
                              </button>
                              <button
                                class="btn btn-danger btn-icon btn-simple btn-icon-mini m-l-5"
                                data-type="cancel"
                                title="حذف"
                              >
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>اسم المشروع الثاني</td>
                            <td>2012/12/02</td>
                            <td>2012/12/02</td>
                            <td>2012/08/06</td>
                            <td>$137,500</td>
                            <td>61</td>
                            <td class="d-flex flex-row justify-content-center">
                              <button
                                class="btn btn-info btn-icon btn-simple btn-icon-mini m-l-5"
                                data-toggle="modal"
                                data-target="#userModal"
                                title="تعديل"
                              >
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button
                                class="btn btn-default btn-icon btn-simple btn-icon-mini m-l-5"
                                data-type="cancel"
                                title="تحدثت"
                              >
                                <i class="zmdi zmdi-archive"></i>
                              </button>
                              <button
                                class="btn btn-danger btn-icon btn-simple btn-icon-mini m-l-5"
                                data-type="cancel"
                                title="حذف"
                              >
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>اسم المشروع الثالث</td>
                            <td>2012/12/02</td>
                            <td>2012/12/02</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                            <td class="d-flex flex-row justify-content-center">
                              <button
                                class="btn btn-info btn-icon btn-simple btn-icon-mini m-l-5"
                                data-toggle="modal"
                                data-target="#userModal"
                                title="تعديل"
                              >
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button
                                class="btn btn-default btn-icon btn-simple btn-icon-mini m-l-5"
                                data-type="cancel"
                                title="تحدثت"
                              >
                                <i class="zmdi zmdi-archive"></i>
                              </button>
                              <button
                                class="btn btn-danger btn-icon btn-simple btn-icon-mini m-l-5"
                                data-type="cancel"
                                title="حذف"
                              >
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
          </div>
        </div>
      </div>
    </section>
    <div class="modal fade" id="project-datails" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg slideDown" role="document">
        <div class="modal-content card">
          <div class="modal-body">
            <div class="header">
              <h2>تفاصيل المشاريع التي تحتاج الى اجراء</h2>
            </div>
            <form class="form_validation" method="POST">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>اسم المشروع</label>
                    <input type="text" class="form-control" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>المحافظة </label>
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
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>المقاول </label>
                    <select
                      class="form-control show-tick z-index"
                      data-live-search="true"
                      required
                    >
                      <option>الأول</option>
                      <option>الثاني</option>
                      <option>الثالث</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-danger">
                      - اضافة مقاول جديد غير موجود بالقائمة -</label
                    >
                    <input type="text" class="form-control" required />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>تاريخ البداية</label>
                    <input
                      type="date"
                      name="bday"
                      max="3000-12-31"
                      min="1000-01-01"
                      class="form-control"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>تاريخ النهاية</label>
                    <input
                      type="date"
                      name="bday"
                      max="3000-12-31"
                      min="1000-01-01"
                      class="form-control"
                      required
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>المبلغ</label>
                    <input type="number" class="form-control" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>المبلغ المدفوع حتى تاريخه </label>
                    <input type="number" class="form-control" required />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>نسبة الانجاز </label>
                    <input type="text" id="range_01" value="" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>حالة المشروع </label>
                    <select
                      class="form-control show-tick z-index"
                      data-live-search="true"
                    >
                      <option>مشروع ملغي</option>
                      <option>مشروع جديد</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success waves-effect">
                  موافق
                </button>
                <button
                  type="button"
                  class="btn btn-danger waves-effect"
                  data-dismiss="modal"
                >
                  رفض
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php include('./footer.php') ?>
