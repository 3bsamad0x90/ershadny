@include('adminPanel.layouts.header')
  <body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    <!-- Start header -->
    @include('adminPanel.layouts.nav')
    <!-- End header -->
    <div class="full" style="margin-top: 150px">
      <div class="heading_main text_align_center">
        <h2><span>إدارة التخصصات</span></h2>
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
                <div
                  class="card d-flex justify-content-center align-items-center"
                >
                  <div class="card-body">
                    <div
                      class="row d-flex justify-content-center align-items-center"
                      style="margin-top: 1px"
                    >
                      <div class="col-12 text-center">
                        <br />
                        <h5
                          class="card-title"
                          style="font-size: 30px; font-weight: bold"
                        >
                          <button
                            class="btn btn-outline-primary"
                            data-bs-toggle="modal"
                            data-bs-target="#admin-depart"
                          >
                            إضافة تخصص
                          </button>
                        </h5>
                      </div>
                    </div>
                  </div>
                  <div class="row m-3" style="width: 70%">
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
                            التخصص
                          </th>
                          <th
                            style="width: 7%; color: white; text-align: center"
                          >
                            التحكم
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="col">1</td>
                          <td scope="col">كلية إدارة أعمال</td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target=""
                              class="btn btn-danger"
                            >
                              حذف <i class="fa-solid fa-trash"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">2</td>
                          <td scope="col">كلية الأداب</td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target=""
                              class="btn btn-danger"
                            >
                              حذف <i class="fa-solid fa-trash"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">3</td>
                          <td scope="col">كلية العلوم التطبيقية</td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target=""
                              class="btn btn-danger"
                            >
                              حذف <i class="fa-solid fa-trash"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td scope="col">4</td>
                          <td scope="col">كلية العلوم</td>
                          <td scope="col">
                            <button
                              data-bs-toggle="modal"
                              data-bs-target=""
                              class="btn btn-danger"
                            >
                              حذف <i class="fa-solid fa-trash"></i>
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

    <div
      class="modal fade mt-4"
      style="height: 70vh"
      id="admin-depart"
      tabindex="-1"
      aria-labelledby="admin-depart"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="admin-depart">إضافة تخصص جديد</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="depart" class="col-form-label"
                  >أدخل إسم التخصص :
                </label>
                <input type="text" class="form-control" id="depart" />
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              إغلاق
            </button>
            <button type="button" class="btn btn-primary">حفظ</button>
          </div>
        </div>
      </div>
    </div>

    <!-- End Modal -->
    @include('AdminPanel.layouts.footer')
