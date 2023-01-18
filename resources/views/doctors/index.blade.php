@extends('layouts.header')
  <body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    <!-- Start header -->
   @include('layouts.nav')
    <!-- End header -->

    <!-- section -->
    <!-- Start Articles -->
    <div class="articles" id="articles">
      <div class="full" style="margin-bottom: 20px">
        <div class="heading_main text_align_center">
          <h2><span> الدكاترة </span></h2>
        </div>
      </div>
      <div class="container search mb-4">
        <input style="width: 300px" class="form-control search-btn bg-light p-4" type="search" placeholder="ابحث بإسم الدكتور"/>
      </div>
      <div class="container">
        @forelse ($doctors as $doctor)
            <div class="box1">
                <img class="d-flex align-content-center position-static" src="{{ asset('images/user.png') }}" alt="" />
                <div class="content">
                    <h2>{{ $doctor->name }}</h2>
                    <h4>{{ $doctor->specialization->name }}</h4>
                    <h4>{{ $doctor->department->name }}</h4>
                </div>
                <div class="info1">
                    <a href="{{ route('doctor.doctor-details', $doctor->id) }}">
                        <button class="btn btn-outline-primary">حجز موعد</button>
                    </a>
                </div>
            </div>
        @empty
            <div class="alert alert-danger">
                لا يوجد دكاترة
            </div>
        @endforelse
      </div>
    </div>
    <div class="spikes"></div>
    <!-- End Articles -->
    <!-- end section -->
   @include('layouts.footer')
