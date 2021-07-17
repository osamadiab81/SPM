<?php include('./header.php') ?>

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
              <a href="index.php"><i class="zmdi zmdi-home"></i>الرئيسية</a>
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
  <?php include('./footer.php') ?>
