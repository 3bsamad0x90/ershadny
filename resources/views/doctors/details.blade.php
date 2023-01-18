@extends('layouts.header')
  <body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    <!-- Start header -->
    @include('layouts.nav')
    <!-- End header -->
    <div class="section tabbar_menu" style="margin-top: 200px; margin-bottom: 50px;">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tab_menu" style="justify-content: flex-start;">
                    <div class="full">
                        <div class="heading_main text_align_center">
                        <h2><span>معلومات الدكتوره</span></h2>
                        </div>
                    </div>
                    <div id="" class="container" style="margin-top: 20px;">
                        <div class="pagetitle">
                        <h1> </h1>
                    </div><!-- End Page Title -->
                    <section class="section profile">
                        <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                <img src="{{ asset('images/user.png') }}" alt="Profile" class="rounded-circle" style="width: 35%;">
                                <h3>{{ $doctor->name }}</h3>
                                <h4>{{ $doctor->department->name }}</h4>

                            </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="card">
                            <div class="card-body pt-3">
                                <!-- Bordered Tabs -->
                                <ul class="nav nav-tabs nav-tabs-bordered">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview"> الملف الشخصى</button>
                                </li>
                                </ul>
                                <div class="tab-content pt-2">
                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">تفاصيل الملف الشخصى</h5>
                                    <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">الإسم كامل</div>
                                    <div class="col-lg-9 col-md-8">{{ $doctor->name }}</div>
                                    </div>

                                    <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">التخصص</div>
                                    <div class="col-lg-9 col-md-8">{{ $doctor->specialization->name }}</div>
                                    </div>

                                    <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">القسم</div>
                                    <div class="col-lg-9 col-md-8">{{ $doctor->department->name }}</div>
                                    </div>

                                    <div class="row">
                                    <div class="col-lg-3 col-md-4 label">الإيميل</div>
                                    <div class="col-lg-9 col-md-8">{{ $doctor->email }}</div>
                                    </div>


                                </div>
                                </div><!-- End Bordered Tabs -->

                            </div>
                            </div>

                        </div>
                        </div>
                    </section>
                    </div><!-- End #main -->
                </div>
            </div>
        </div>
    </div>
    <!-- section -->
    <div class="container-xxl py-5" id="">
      <div class="container">
        <div class="row g-4">
          <section class="section dashboard">
            <div class="row">
              <!-- Left side columns -->
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row" style="margin-top: 1px">
                      <div class="col-12 text-center">
                        <br />
                          <h5 class="card-title " style="font-size: 30px; font-weight: bold;"><u><b>المواعيد المتاحة للدكتوره</b></u></h5>
                      </div>
                    </div>
                  </div>
                  <div class="row m-3">
                    <!-- Table with stripped rows -->
                    <table
                      id="example"
                      class="table table-striped cell-border justify-content-center"
                      style="text-align: center">
                      <thead style="background-color: #0d6efd" dir="rtl">
                        <tr style="text-align: right !important">
                          <th style="width: 2%; color: white; text-align: center">
                            رقم
                          </th>
                          <th style="width: 3%; color: white; text-align: center">
                            اليوم
                          </th>
                          <th style="width: 6%; color: white; text-align: center">
                            من الساعة
                          </th>
                          <th style="width: 6%; color: white; text-align: center">
                            إلى الساعة
                          </th>
                          <th style="width: 5%; color: white; text-align: center">
                            التاريخ
                          </th>
                          <th style="width: 2%; color: white; text-align: center">
                            نوع الجلسة
                          </th>
                          <th style="width: 10%; color: white; text-align: center">
                            التحكم
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="col">1</td>
                          <td scope="col">الأحد</td>
                          <td scope="col">09:00 صباحا</td>
                          <td scope="col">09:30 صباحا</td>
                          <td scope="col">01-12-2022</td>
                          <td scope="col"><select class="form-select" name="weekday" id="weekday">
                            <option value="1">حضورى</option>
                            <option value="2">أونلاين</option>
                            </select></td>
                            <td scope="col">
                            <button data-bs-toggle="modal" data-bs-target="" class="btn btn-primary">
                               حجز موعد <i class="fa-solid fa-check"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">2</td>
                          <td scope="col">الأحد</td>
                          <td scope="col">09:30 صباحا</td>
                          <td scope="col">10:00 صباحا</td>
                          <td scope="col">01-12-2022</td>
                          <td scope="col"><select class="form-select" name="weekday" id="weekday">
                            <option value="1">حضورى</option>
                            <option value="2">أونلاين</option>
                            </select></td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target=""
                              class="btn btn-primary"
                            >
                               حجز موعد <i class="fa-solid fa-check"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">3</td>
                          <td scope="col">الإثنين</td>
                          <td scope="col">10:00 صباحا</td>
                          <td scope="col">10:30 صباحا</td>
                          <td scope="col">02-12-2022</td>
                          <td scope="col"><select class="form-select" name="weekday" id="weekday">
                            <option value="1">حضورى</option>
                            <option value="2">أونلاين</option>
                            </select></td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target=""
                              class="btn btn-primary"
                            >
                               حجز موعد <i class="fa-solid fa-check"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">4</td>
                          <td scope="col">الإثنين</td>
                          <td scope="col">10:30 صباحا</td>
                          <td scope="col">11:00 صباحا</td>
                          <td scope="col">02-12-2022</td>
                          <td scope="col"><select class="form-select" name="weekday" id="weekday">
                            <option value="1">حضورى</option>
                            <option value="2">أونلاين</option>
                            </select></td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target=""
                              class="btn btn-primary"
                            >
                               حجز موعد <i class="fa-solid fa-check"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">5</td>
                          <td scope="col">الثلاثاء</td>
                          <td scope="col">11:00 صباحا</td>
                          <td scope="col">11:30 صباحا</td>
                          <td scope="col">03-12-2022</td>
                          <td scope="col"><select class="form-select" name="weekday" id="weekday">
                            <option value="1">حضورى</option>
                            <option value="2">أونلاين</option>
                            </select></td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target=""
                              class="btn btn-primary"
                            >
                               حجز موعد <i class="fa-solid fa-check"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">6</td>
                          <td scope="col">الثلاثاء</td>
                          <td scope="col">11:30 صباحا</td>
                          <td scope="col">12:00 مساءا</td>
                          <td scope="col">03-12-2022</td>
                          <td scope="col"><select class="form-select" name="weekday" id="weekday">
                            <option value="1">حضورى</option>
                            <option value="2">أونلاين</option>
                            </select></td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target=""
                              class="btn btn-primary"
                            >
                               حجز موعد <i class="fa-solid fa-check"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">7</td>
                          <td scope="col">الأربعاء</td>
                          <td scope="col">09:00 صباحا</td>
                          <td scope="col">09:30 صباحا</td>
                          <td scope="col">04-12-2022</td>
                          <td scope="col"><select class="form-select" name="weekday" id="weekday">
                            <option value="1">حضورى</option>
                            <option value="2">أونلاين</option>
                            </select></td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target=""
                              class="btn btn-primary"
                            >
                               حجز موعد <i class="fa-solid fa-check"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">8</td>
                          <td scope="col">الأربعاء</td>
                          <td scope="col">09:30 صباحا</td>
                          <td scope="col">10:00 مساءا</td>
                          <td scope="col">04-12-2022</td>
                          <td scope="col"><select class="form-select" name="weekday" id="weekday">
                            <option value="1">حضورى</option>
                            <option value="2">أونلاين</option>
                            </select></td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target=""
                              class="btn btn-primary"
                            >
                               حجز موعد <i class="fa-solid fa-check"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">9</td>
                          <td scope="col">الخميس</td>
                          <td scope="col">10:00 صباحا</td>
                          <td scope="col">10:30 صباحا</td>
                          <td scope="col">05-12-2022</td>
                          <td scope="col"><select class="form-select" name="weekday" id="weekday">
                            <option value="1">حضورى</option>
                            <option value="2">أونلاين</option>
                            </select></td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target=""
                              class="btn btn-primary"
                            >
                               حجز موعد <i class="fa-solid fa-check"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">10</td>
                          <td scope="col">الخميس</td>
                          <td scope="col">10:30 صباحا</td>
                          <td scope="col">11:00 صباحا</td>
                          <td scope="col">05-12-2022</td>
                          <td scope="col"><select class="form-select" name="weekday" id="weekday">
                            <option value="1">حضورى</option>
                            <option value="2">أونلاين</option>
                            </select></td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target=""
                              class="btn btn-primary"
                            >
                               حجز موعد <i class="fa-solid fa-check"></i>
                            </button>
                          </td>
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
    <div class="footer_bottom mt-4" style="position: fixed;bottom: 0; left: 0; width: 100%">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p class="crp fs-5">© Copyrights 2022</p>
          </div>
        </div>
      </div>
    </div>
    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('js/bootstrap2.bundle.min.js') }}"></script> --}}
    <script src="{{ asset('js/all.min.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.pogo-slider.min.js') }}"></script>
    <script src="{{ asset('js/slider-index.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/form-validator.min.js') }}"></script>
    <script src="{{ asset('js/contact-form-script.js') }}"></script>
    <script src="{{ asset('js/isotope.min.js') }}"></script>
    <script src="{{ asset('js/images-loded.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
      $("#example").DataTable({
        aLengthMenu: [
          [5, 10, 25, -1],
          [5, 10, 25, "All"],
        ],
        iDisplayLength: 10,

        language: {
          sProcessing: "جارٍ التحميل...",
          sLengthMenu: "أظهر _MENU_ مدخلات",
          sZeroRecords: "لم يعثر على أية سجلات",
          sInfo: "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
          sInfoEmpty: "يعرض 0 إلى 0 من أصل 0 سجل",
          sInfoFiltered: "(منتقاة من مجموع _MAX_ مُدخل)",
          sInfoPostFix: "",
          sSearch: "ابحث:",
          sUrl: "",
          oPaginate: {
            sFirst: "الأول",
            sPrevious: "السابق",
            sNext: "التالي",
            sLast: "الأخير",
          },
        },
        columnDefs: [
          { searchable: true, targets: 0 },
          { searchable: false, targets: 1 },
          { searchable: false, targets: 2 },
          { searchable: false, targets: 3 },
          { searchable: true, targets: 4 },
        ],
      });
    </script>
  </body>
</html>
