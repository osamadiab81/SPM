<?php include('./header.php') ?>

    <section class="content">
      <div class="block-header">
        <div class="row">
          <div class="col-lg-7 col-md-6 col-sm-12">
            <h2>الملف الشخصي</h2>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-12">
            <ul class="breadcrumb float-md-left">
              <li class="breadcrumb-item">
                <a href="index.php"><i class="zmdi zmdi-home"></i> الرئيسية</a>
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
                <a href="profile.php" class="">
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
    <?php include('./footer.php') ?>
