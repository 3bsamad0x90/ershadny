<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg" style="padding-left: 10px">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('admin.index') }}">
            <img src="{{ asset('images/logo2.png') }}" alt="image"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbar-wd">
          <ul class="navbar-nav">
            <li>
                <a class="nav-link active" href="{{ route('admin.index') }}">
                    الرئيسية
                </a>
            </li>
            <li>
              <a class="nav-link" href="{{ route('admin.specializations') }}">
                    إدارة التخصصات
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('admin.departments') }}">
                    إدارة الأقسام
                </a>
            </li>
            <li>
              <a class="nav-link" href="{{ route('admin.appointemnts') }}">
                عرض جدول المواعيد
                </a>
            </li>
          </ul>
        </div>
        <!-- Example single danger button -->
        <a href="#"><img src="{{ asset('images/Untitled-1.png') }}" alt="" /></a>
        <div class="dropdown m-2">
          <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            مرحبا مشرف
          </a>
          <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" href="#">تسجيل خروج</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
