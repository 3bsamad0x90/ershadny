@include('AdminPanel.layouts.header')
  <body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    <!-- Start header -->
    @include('AdminPanel.layouts.nav')
    <!-- End header -->
    <div class="full" style="margin-top: 150px">
      <div class="heading_main text_align_center">
        <h2><span>إدارة الأقسام</span></h2>
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
                @if(session()->has('success'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <div class="text-center">
                      <i class="fa-solid fa-check-circle" style="font-size: 20px"></i>
                      <strong>{{ session()->get('success') }}</strong>
                    </div>
                    <div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                @endif
                @if(session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <div class="text-center">
                      <i class="fa-solid fa-error-circle" style="font-size: 20px"></i>
                      <strong>{{ session()->get('error') }}</strong>
                    </div>
                    <div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <div class="text-center">
                      <i class="fa-solid fa-error-circle" style="font-size: 20px"></i>
                        @foreach ($errors->all() as $error)
                                {{ $error }}
                        @endforeach
                    </div>
                    <div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                @endif
                <div class="card d-flex justify-content-center align-items-center">
                  <div class="card-body">
                    <div class="row d-flex justify-content-center align-items-center"
                      style="margin-top: 1px">
                      <div class="col-12 text-center">
                        <br />
                        <h5 class="card-title" style="font-size: 30px; font-weight: bold">
                          <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#admin-special">
                            إضافة قسم
                          </button>
                        </h5>
                      </div>
                    </div>
                  </div>
                  <div class="row m-3" style="width: 70%">
                    <!-- Table with stripped rows -->
                    <table id="example" class="table table-striped cell-border justify-content-center" style="text-align: center">
                      <thead style="background-color: #0d6efd" dir="rtl">
                        <tr style="text-align: right !important">
                          <th style="width: 2%; color: white; text-align: center">
                            رقم
                          </th>
                          <th style="width: 10%; color: white; text-align: center">
                            التخصص
                          </th>
                          <th style="width: 10%; color: white; text-align: center">
                            القسم
                          </th>
                          <th style="width: 7%; color: white; text-align: center">
                            التحكم
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                            $id = 0;
                        @endphp
                        @forelse ($departments as $department)
                        <tr>
                            <td scope="col">{{ ++$id }}</td>
                            <td scope="col">{{ $department->specialization->name }}</td>
                            <td scope="col">{{ $department->name }}</td>
                            <td scope="col">
                                <a href="javascript:;" data-bs-target="#department{{$department->id}}" data-bs-toggle="modal" class="btn btn-icon btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="delete">
                                    حذف
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                          </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-danger">
                                    <b> لا يوجد أقسام</b>
                                </td>
                            </tr>
                        @endforelse
                      </tbody>
                    </table>
                    @foreach ($departments as $department)
                    <div class="modal fade mt-4" style="height: 70vh" id="department{{$department->id}}" tabindex="-1" aria-labelledby="department{{$department->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="department{{$department->id}}"> تحذير!</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h5 class="text-center">هل أنت متأكد من حـذف قسم {{ $department->name }} التابع لتخصص {{ $department->specialization->name }}</h5>
                                </div>
                                <form action="{{ route('admin.departments.delete', $department->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger me-1">
                                        تأكيد
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                        إلغاء
                                    </button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    @endforeach
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

    <div class="modal fade mt-4" style="height: 70vh" id="admin-special" tabindex="-1"  aria-labelledby="admin-depart"  aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="admin-depart">إضافة قسم</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" action="{{ route('admin.departments.store') }}">
                @csrf
              <div class="mb-3">
                <label for="specialization_id"> اختر التخصص:</label>
                <select class="form-select" name="specialization_id" id="specialization_id">
                    <option value="" disabled selected>اختر التخصص</option>
                  @foreach ($specializations as $specialization)
                    <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                    @endforeach
                    {{-- @foreach ($departments as $department)
                    <option value="{{ $department->specialization->id }}">{{ $department->specialization->name }}</option>
                    @endforeach --}}
                  {{-- <option value="1">كلية إدارة أعمال</option>
                  <option value="2">كلية الأداب</option>
                  <option value="3">كلية العلوم التطبيقية</option>
                  <option value="4">كلية العلوم</option> --}}
                </select>
              </div>
              <div class="mb-3">
                <label for="special" class="col-form-label">
                    أدخل إسم القسم :
                </label>
                <input type="text" class="form-control" id="special" name="name"/>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              إغلاق
            </button>
            <input type="submit" class="btn btn-primary" value="حفظ" />
        </form>
          </div>
        </div>
      </div>
    </div>

    <!-- End Modal -->
@include('AdminPanel.layouts.footer')

