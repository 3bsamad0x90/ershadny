@include('adminPanel.layouts.header')
  <body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    <!-- Start header -->
    @include('adminPanel.layouts.nav')
    <!-- End header -->
    <div class="full" style="margin-top: 150px">
      <div class="heading_main text_align_center">
        <h2><span> جدول المواعيد </span></h2>
      </div>
    </div>

    <!-- section -->
    <div class="container-xxl py-5" id="">
      <div class="container">
        <div class="row g-4 mb-5">
          <section class="section dashboard">
            <div class="row">
              <!-- Left side columns -->
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row" style="margin-top: 1px">
                      <div class="col-12 text-center">
                        <br />
                        <h5
                          class="card-title"
                          style="font-size: 30px; font-weight: bold"
                        ></h5>
                      </div>
                    </div>
                  </div>
                  <div class="row m-3">
                    <!-- Table with stripped rows -->
                    <table
                      id="example"
                      class="table table-striped cell-border justify-content-center"
                      style="text-align: center"
                    >
                      <thead style="background-color: #0d6efd" dir="rtl">
                        <tr style="text-align: right !important">
                          <th
                            style="width: 2%; color: white; text-align: center"
                          >
                            رقم
                          </th>
                          <th
                            style="width: 10%; color: white; text-align: center"
                          >
                            إسم الدكتور
                          </th>
                          <th
                            style="width: 6%; color: white; text-align: center"
                          >
                            إسم الطالب
                          </th>
                          <th
                            style="width: 3%; color: white; text-align: center"
                          >
                            اليوم
                          </th>
                          <th
                            style="width: 6%; color: white; text-align: center"
                          >
                            من الساعة
                          </th>
                          <th
                            style="width: 6%; color: white; text-align: center"
                          >
                            إلى الساعة
                          </th>
                          <th
                            style="width: 5%; color: white; text-align: center"
                          >
                            التاريخ
                          </th>
                          <th
                            style="width: 5%; color: white; text-align: center"
                          >
                            نوع الجلسة
                          </th>
                          <th
                            style="width: 5%; color: white; text-align: center"
                          >
                            حالة الطلب
                          </th>
                          <th
                            style="width: 5%; color: white; text-align: center"
                          >
                            التحكم
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="col">1</td>
                          <td scope="col">دكتوره / أمينه الشاملي</td>
                          <td scope="col">طالب طالب</td>
                          <td scope="col">الأحد</td>
                          <td scope="col">09:00 صباحا</td>
                          <td scope="col">09:30 صباحا</td>
                          <td scope="col">01-12-2022</td>
                          <td scope="col">اونلاين</td>
                          <td scope="col">مقبول</td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target="#url-online"
                              class="btn btn-primary"
                            >
                              عرض <i class="fa-solid fa-exclamation"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">2</td>
                          <td scope="col">دكتوره / هدى زهير</td>
                          <td scope="col">طالب طالب</td>
                          <td scope="col">الأحد</td>
                          <td scope="col">10:00 صباحا</td>
                          <td scope="col">10:30 صباحا</td>
                          <td scope="col">01-12-2022</td>
                          <td scope="col">اونلاين</td>
                          <td scope="col">مقبول</td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target="#url-online"
                              class="btn btn-primary"
                            >
                              عرض <i class="fa-solid fa-exclamation"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">3</td>
                          <td scope="col">دكتوره / نسرين عبدالجبار</td>
                          <td scope="col">طالب طالب</td>
                          <td scope="col">الأحد</td>
                          <td scope="col">11:00 صباحا</td>
                          <td scope="col">11:30 صباحا</td>
                          <td scope="col">01-12-2022</td>
                          <td scope="col">حضورى</td>
                          <td scope="col">مقبول</td>
                          <td scope="col"></td>
                        </tr>
                        <tr>
                          <td scope="col">4</td>
                          <td scope="col">دكتوره / هدى زهير</td>
                          <td scope="col">طالب طالب</td>
                          <td scope="col">الإثنين</td>
                          <td scope="col">09:00 صباحا</td>
                          <td scope="col">09:30 صباحا</td>
                          <td scope="col">02-12-2022</td>
                          <td scope="col">حضورى</td>
                          <td scope="col">مقبول</td>
                          <td scope="col"></td>
                        </tr>
                        <tr>
                          <td scope="col">5</td>
                          <td scope="col">دكتوره / أمينه الشاملي</td>
                          <td scope="col">طالب طالب</td>
                          <td scope="col">الإثنين</td>
                          <td scope="col">10:00 صباحا</td>
                          <td scope="col">10:30 صباحا</td>
                          <td scope="col">02-12-2022</td>
                          <td scope="col">اونلاين</td>
                          <td scope="col">مرفوض</td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target="#refuse"
                              class="btn btn-primary"
                            >
                              عرض <i class="fa-solid fa-exclamation"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">6</td>
                          <td scope="col">دكتوره / نسرين عبدالجبار</td>
                          <td scope="col">طالب طالب</td>
                          <td scope="col">الإثنين</td>
                          <td scope="col">11:00 صباحا</td>
                          <td scope="col">11:30 صباحا</td>
                          <td scope="col">02-12-2022</td>
                          <td scope="col">اونلاين</td>
                          <td scope="col">مرفوض</td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target="#refuse"
                              class="btn btn-primary"
                            >
                              عرض <i class="fa-solid fa-exclamation"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">7</td>
                          <td scope="col">دكتوره / نسرين عبدالجبار</td>
                          <td scope="col">طالب طالب</td>
                          <td scope="col">الثلاثاء</td>
                          <td scope="col">09:00 صباحا</td>
                          <td scope="col">09:30 صباحا</td>
                          <td scope="col">03-12-2022</td>
                          <td scope="col">حضورى</td>
                          <td scope="col">مقبول</td>
                          <td scope="col"></td>
                        </tr>
                        <tr>
                          <td scope="col">8</td>
                          <td scope="col">دكتوره / هدى زهير</td>
                          <td scope="col">طالب طالب</td>
                          <td scope="col">الثلاثاء</td>
                          <td scope="col">10:00 صباحا</td>
                          <td scope="col">10:30 صباحا</td>
                          <td scope="col">03-12-2022</td>
                          <td scope="col">حضورى</td>
                          <td scope="col">مرفوض</td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target="#refuse"
                              class="btn btn-primary"
                            >
                              عرض <i class="fa-solid fa-exclamation"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">9</td>
                          <td scope="col">دكتوره / أمينه الشاملي</td>
                          <td scope="col">طالب طالب</td>
                          <td scope="col">الأربعاء</td>
                          <td scope="col">09:00 صباحا</td>
                          <td scope="col">09:30 صباحا</td>
                          <td scope="col">04-12-2022</td>
                          <td scope="col">اونلاين</td>
                          <td scope="col">مقبول</td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target="#url-online"
                              class="btn btn-primary"
                            >
                              عرض <i class="fa-solid fa-exclamation"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">10</td>
                          <td scope="col">دكتوره / هدى زهير</td>
                          <td scope="col">طالب طالب</td>
                          <td scope="col">الأربعاء</td>
                          <td scope="col">10:00 صباحا</td>
                          <td scope="col">10:30 صباحا</td>
                          <td scope="col">04-12-2022</td>
                          <td scope="col">حضورى</td>
                          <td scope="col">مرفوض</td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target="#refuse"
                              class="btn btn-primary"
                            >
                              عرض <i class="fa-solid fa-exclamation"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">11</td>
                          <td scope="col">دكتوره / نسرين عبدالجبار</td>
                          <td scope="col">طالب طالب</td>
                          <td scope="col">الأربعاء</td>
                          <td scope="col">11:00 صباحا</td>
                          <td scope="col">11:30 صباحا</td>
                          <td scope="col">04-12-2022</td>
                          <td scope="col">حضورى</td>
                          <td scope="col">مقبول</td>
                          <td scope="col"></td>
                        </tr>
                        <tr>
                          <td scope="col">12</td>
                          <td scope="col">دكتوره / نسرين عبدالجبار</td>
                          <td scope="col">طالب طالب</td>
                          <td scope="col">الخميس</td>
                          <td scope="col">09:00 صباحا</td>
                          <td scope="col">09:30 صباحا</td>
                          <td scope="col">05-12-2022</td>
                          <td scope="col">اونلاين</td>
                          <td scope="col">مقبول</td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target="#url-online"
                              class="btn btn-primary"
                            >
                              عرض <i class="fa-solid fa-exclamation"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">13</td>
                          <td scope="col">دكتوره / أمينه الشاملي</td>
                          <td scope="col">طالب طالب</td>
                          <td scope="col">الخميس</td>
                          <td scope="col">10:00 صباحا</td>
                          <td scope="col">10:30 صباحا</td>
                          <td scope="col">05-12-2022</td>
                          <td scope="col">اونلاين</td>
                          <td scope="col">مقبول</td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target="#url-online"
                              class="btn btn-primary"
                            >
                              عرض <i class="fa-solid fa-exclamation"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">14</td>
                          <td scope="col">دكتوره / هدى زهير</td>
                          <td scope="col">طالب طالب</td>
                          <td scope="col">الخميس</td>
                          <td scope="col">11:00 صباحا</td>
                          <td scope="col">11:30 صباحا</td>
                          <td scope="col">05-12-2022</td>
                          <td scope="col">حضورى</td>
                          <td scope="col">مقبول</td>
                          <td scope="col"></td>
                        </tr>
                        <tr>
                          <td scope="col">15</td>
                          <td scope="col">دكتوره / هدى زهير</td>
                          <td scope="col">طالب طالب</td>
                          <td scope="col">السبت</td>
                          <td scope="col">01:00 مساءا</td>
                          <td scope="col">02:00 مساءا</td>
                          <td scope="col">02-12-2022</td>
                          <td scope="col">حضورى</td>
                          <td scope="col">مقبول</td>
                          <td scope="col"></td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                  </div>
                </div>
              </div>
              <!-- End Left side columns -->
            </div>
          </section>
        </div>
      </div>
    </div>
    <!-- end section -->

    <!-- start Modal -->

    <div
      class="modal fade"
      id="url-online"
      tabindex="-1"
      aria-labelledby="url-online"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="url-online">رابط الجلسة</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body text-center">
            <p>
              <a
                target="_blank"
                style="font-size: 25px; font-weight: bold"
                href="https://www.google.com.sa/"
                >رابط الجلسة</a
              >
            </p>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              إغلاق
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- End Modal -->

    <!-- start Modal -->

    <div
      class="modal fade"
      id="refuse"
      tabindex="-1"
      aria-labelledby="refuse"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="refuse">سبب الرفض</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body text-center">
            <ps style="font-size: 23px; color: red"
              >غير مطابق للشروط المطلوبة</ps
            >
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              إغلاق
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- End Modal -->
@include('AdminPanel.layouts.footer')
