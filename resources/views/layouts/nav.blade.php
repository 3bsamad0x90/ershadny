<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg" style="padding-left: 10px">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('images/logo2.png') }}" alt="image"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false"aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbar-wd">
          <ul class="navbar-nav">
            <li><a class="nav-link" href="index.html">الرئيسية</a></li>
            <li><a class="nav-link" href="depart.html">الأقسام</a></li>
            <li><a class="nav-link" href="specialties.html">التخصصات</a></li>
            <li>
              <a class="nav-link active" href="{{ route('doctor.index') }}">الدكاترة</a>
            </li>
          </ul>
        </div>
        <div>
          <a href="#"><img src="{{ asset('images/Untitled-1.png') }}" alt="" /></a>
          <a class="m-2" href="log_in.html">
            <button class="btn btn-outline-primary">تسجيل دخول</button></a>
        </div>
      </div>
    </nav>
  </header>
