@include('adminPanel.layouts.header')

  <body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    <!-- Start header -->
    @include('adminPanel.layouts.nav')
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
      <div class="container-fluid">
        <div class="row">
          <div class="pogoSlider" id="js-main-slider">
            <div
              class="pogoSlider-slide d-flex justify-content-center align-items-center"
              style="background-image: url(images/wallpaper3.jpg)"
            >
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="slide_text" style="margin-bottom: 250px">
                      <h3><span span class="theme_color">إرشدنى</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="pogoSlider-slide d-flex justify-content-center align-items-center"
              style="background-image: url(images/wallpaper2.jpg)"
            >
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="slide_text" style="margin-bottom: 250px">
                      <h3><span span class="theme_color">إرشدنى</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- .pogoSlider -->
        </div>
      </div>
    </div>
    <!-- End Banner -->
    <!-- section -->
    <div class="section layout_padding">
      <div class="container">
        <div class="row d-flex row-content tab_menu1">
          <div class="col-md-12">
            <div class="full">
              <div class="heading_main text_align_center mt-4">
                <h2><span>الأقسام </span></h2>
              </div>
            </div>
          </div>
          <div class="col col-box">
            <div class="full blog_img_popular">
              <div class="box-info1 d-flex align-items-center">
                <img
                  class="img-responsive"
                  src="images/GeneralAdministration.png"
                  alt="#"
                />
                <div class="btnAll">
                  <h2 class="btn btn-info">إدارة عامة</h2>
                </div>
              </div>
              <a href="Doctor-mange.html"
                ><h4 class="btn-outline-primary" style="border-radius: 10px">
                  عرض الدكاترة
                </h4></a
              >
            </div>
          </div>
          <div class="col col-box">
            <div class="full blog_img_popular">
              <div class="box-info1 d-flex align-items-center">
                <img
                  class="img-responsive"
                  src="images/Information systems.png"
                  alt="#"
                />
                <div class="btnAll">
                  <h2 class="btn btn-info">نظم معلومات إدارية</h2>
                </div>
              </div>
              <a href="Doctor-short.html"
                ><h4 class="btn-outline-primary" style="border-radius: 10px">
                  عرض الدكاترة
                </h4></a
              >
            </div>
          </div>
          <div class="col col-box">
            <div class="full blog_img_popular">
              <div class="box-info1 d-flex align-items-center">
                <img
                  class="img-responsive"
                  src="images/FinancialAccounting.png"
                  alt="#"
                />
                <div class="btnAll">
                  <h2 class="btn btn-info">محاسبة مالية</h2>
                </div>
              </div>
              <!-- <a href="specialties-short.html"></a> -->
              <a href="Doctor-short.html"
                ><h4 class="btn-outline-primary" style="border-radius: 10px">
                  عرض الدكاترة
                </h4></a
              >
            </div>
          </div>
          <div class="btn-t-all1">
            <a class="p-3" href="depart.html"
              ><button class="btn btn-outline-primary">جميع الأقسام</button></a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="section tabbar_menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="tab_menu">
              <div class="full">
                <div class="heading_main text_align_center">
                  <h2><span>الأقسام </span></h2>
                </div>
              </div>
              <div class="box-content">
                <div class="card card-box" style="width: 18rem;height: 280px;">
                  <div class="card-body text-center card-body-edit">
                    <h2 class="card-subtitle mb-5 mt-5 btn btn-primary  "> إدارة عامة</h2>
                    <a href="Doctor-mange.html"><button class="btn btn-primary">عرض الدكاترة</button></a>
                  </div>
                  <div class="overlay"></div>
                </div>
                <div class="card card-box" style="width: 18rem;height: 280px;">
                  <div class="card-body text-center card-body-edit">
                    <h2 class="card-subtitle mb-5 mt-5 btn btn-primary  ">نظم معلومات إدارية</h2>
                    <a href="Doctor-short.html"><button class="btn btn-primary">عرض الدكاترة</button></a>
                  </div>
                </div>
                <div class="card card-box" style="width: 18rem;height: 280px;">
                  <div class="card-body text-center card-body-edit">
                    <h2 class="card-subtitle mb-5 mt-5 btn btn-primary  ">محاسبة مالية</h2>
                    <a href="Doctor-short.html"><button class="btn btn-primary">عرض الدكاترة</button></a>
                  </div>
                </div>

              </div>
              <a class="align-self-center p-3" href="depart.html"><button class="btn btn-outline-primary">جميع الأقسام</button></a>
            </div>
        </div>
      </div>
    </div> -->
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding">
      <div class="container">
        <div class="row d-flex row-content">
          <div class="col-md-12">
            <div class="full">
              <div class="heading_main text_align_center">
                <h2><span>التخصصات </span></h2>
              </div>
            </div>
          </div>
          <div class="col col-box">
            <div class="full blog_img_popular">
              <div class="box-info1 d-flex align-items-center">
                <img class="img-responsive" src="images/Business.png" alt="#" />
                <div class="btnAll">
                  <h2 class="btn btn-info">كلية إدارة أعمال</h2>
                </div>
              </div>
              <a href="specialties-short.html"
                ><h4 class="btn-outline-primary" style="border-radius: 10px">
                  عرض الأقسام
                </h4></a
              >
            </div>
          </div>
          <div class="col col-box">
            <div class="full blog_img_popular">
              <div class="box-info1 d-flex align-items-center">
                <img
                  class="img-responsive"
                  src="images/fac_lettre.jpg"
                  alt="#"
                />
                <div class="btnAll">
                  <h2 class="btn btn-info">كلية الأداب</h2>
                </div>
              </div>
              <a href="#"
                ><h4 class="btn-outline-primary" style="border-radius: 10px">
                  عرض الأقسام
                </h4></a
              >
            </div>
          </div>
          <div class="col col-box">
            <div class="full blog_img_popular">
              <div class="box-info1 d-flex align-items-center">
                <img class="img-responsive" src="images/ujmmfr.png" alt="#" />
                <div class="btnAll">
                  <h2 class="btn btn-info">كلية العلوم التطبيقية</h2>
                </div>
              </div>
              <!-- <a href="specialties-short.html"></a> -->
              <a href="#"
                ><h4 class="btn-outline-primary" style="border-radius: 10px">
                  عرض الأقسام
                </h4></a
              >
            </div>
          </div>
          <div class="btn-t-all">
            <a class="p-3" href="specialties.html"
              ><button class="btn btn-outline-primary">جميع التخصصات</button></a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding padding_bottom-0">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <div class="heading_main text_align_center">
                <h2><span>الدكاترة</span></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div id="demo" class="carousel slide" data-ride="carousel">
              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="card" style="width: 22rem">
                        <img
                          src="images/user.png"
                          class="card-img-top w-50 align-self-center"
                          alt="..."
                        />
                        <div class="card-body">
                          <h2 class="card-title">دكتوره / نسرين عبدالجبار</h2>
                          <div class="card-text">
                            <h3>كلية إدارة أعمال</h3>
                            <h3>نظم معلومات إدارية</h3>
                          </div>
                          <a
                            href="appointment-student-ns.html"
                            class="btn btn-primary"
                            >حجز موعد</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="card" style="width: 22rem">
                        <img
                          src="images/user.png"
                          class="card-img-top w-50 align-self-center"
                          alt="..."
                        />
                        <div class="card-body">
                          <h2 class="card-title">دكتوره / هدى زهير</h2>
                          <div class="card-text">
                            <h3>كلية إدارة أعمال</h3>
                            <h3>نظم معلومات إدارية</h3>
                          </div>
                          <a
                            href="appointment-student-ho.html"
                            class="btn btn-primary"
                            >حجز موعد</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="card" style="width: 22rem">
                        <img
                          src="images/user.png"
                          class="card-img-top w-50 align-self-center"
                          alt="..."
                        />
                        <div class="card-body">
                          <h2 class="card-title">دكتوره / أمينه الشاملى</h2>
                          <div class="card-text">
                            <h3>كلية إدارة أعمال</h3>
                            <h3>إدارة عامة</h3>
                          </div>
                          <a
                            href="appointment-student-am.html"
                            class="btn btn-primary"
                            >حجز موعد</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="card" style="width: 22rem">
                        <img
                          src="images/user.png"
                          class="card-img-top w-50 align-self-center"
                          alt="..."
                        />
                        <div class="card-body">
                          <h2 class="card-title">دكتوره / نسرين عبدالجبار</h2>
                          <div class="card-text">
                            <h3>كلية إدارة أعمال</h3>
                            <h3>نظم معلومات إدارية</h3>
                          </div>
                          <a
                            href="appointment-student-ns.html"
                            class="btn btn-primary"
                            >حجز موعد</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="card" style="width: 22rem">
                        <img
                          src="images/user.png"
                          class="card-img-top w-50 align-self-center"
                          alt="..."
                        />
                        <div class="card-body">
                          <h2 class="card-title">دكتوره / هدى زهير</h2>
                          <div class="card-text">
                            <h3>كلية إدارة أعمال</h3>
                            <h3>نظم معلومات إدارية</h3>
                          </div>
                          <a
                            href="appointment-student-ho.html"
                            class="btn btn-primary"
                            >حجز موعد</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                      <div class="card" style="width: 22rem">
                        <img
                          src="images/user.png"
                          class="card-img-top w-50 align-self-center"
                          alt="..."
                        />
                        <div class="card-body">
                          <h2 class="card-title">دكتوره / أمينه الشاملى</h2>
                          <div class="card-text">
                            <h3>كلية إدارة أعمال</h3>
                            <h3>إدارة عامة</h3>
                          </div>
                          <a
                            href="appointment-student-am.html"
                            class="btn btn-primary"
                            >حجز موعد</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>
        </div>
        <a class="align-self-center p-3" href="Doctor.html"
          ><button class="btn btn-outline-primary">جميع الدكاتره</button></a
        >
      </div>
    </div>
    <!-- end section -->
    <!-- section -->

    <!-- end section -->
    <!-- section -->
    <div class="footer_bottom mt-4">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p class="crp">© Copyrights 2022</p>
          </div>
        </div>
      </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"
      ><i class="fa fa-angle-up"></i
    ></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
