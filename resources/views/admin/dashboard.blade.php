@extends('layouts.adminLayout')

@section('content')
    @include('admin.Alert')
    @include('massage')
    <div class="content-wrapper">
      <div class="header" style="text-align: center; padding-bottom:50px">
                    <h1><b> Rizah Enterprise</b></h1>
                    <h4><b> Admin Panel</b></h5>
                    </div>


                    <div class="row">
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card" style="background: #322c42;border-radius:20px;width:30px">
                                <div class="card-body" style="text-align: center;  ">
                                    <div class="dashboard">
                                        <h3 style="color: white"><b> USER</b></h3>
                                        <div class="user" style="color:white;">
                                            <h3>{{ $user }} <h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="text"
                                    style="background: brown;width:100%;height:50px;border-bottom-left-radius:10px;border-bottom-right-radius:10px">
                                    <h6 style="text-align: center;font-size:15px; margin:1rem;color:rgb(228, 228, 241)">More Info  <i
                                            class="fa-solid fa-arrow-right-to-bracket"></i></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card" style="background: #322c42;border-radius:20px">
                                <div class="card-body" style="text-align: center;color:white">
                                    <h3><b>Client</b></h3>
                                    <div class="client">
                                        <h3> <b> {{ $client }} </b>
                                            <h3>
                                    </div>
                                </div>
                               <div class="text"
                                    style="background: brown;width:100%;height:50px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;">
                                    <a href="{{route('client.index')}}">  <h6 style="text-align: center;font-size:15px; margin:1rem;color:rgb(228, 228, 241)">More Info  <i
                                            class="fa-solid fa-arrow-right-to-bracket"></i></h6></a>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card" style="background: #322c42;border-radius:20px">
                                <div class="card-body" style="text-align: center;color:white">
                                    <h3><b>Service</b></h3>
                                    <div class="product">
                                        <h3> <b>{{ $service }}</b></h3>
                                    </div>
                                </div>
                                <div class="text"
                                    style="background: brown;width:100%;height:50px;border-bottom-left-radius:10px;border-bottom-right-radius:10px">
                                   <a href="{{route('service.index')}}"> <h6 style="text-align: center;font-size:15px; margin:1rem;color:rgb(228, 228, 241)">More Info  <i
                                            class="fa-solid fa-arrow-right-to-bracket"></i></h6></a>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card" style="background:#322c42;border-radius:20px">
                                <div class="card-body" style="text-align: center;color:white">
                                    <h3><b> Slider</b></h3>
                                    <div class="project">
                                        <h3><b>{{ $slider }} </b>
                                            <h3>
                                    </div>
                                </div>
                                <div class="text"
                                    style="background: brown;width:100%;height:50px;border-bottom-left-radius:10px;border-bottom-right-radius:10px">
                                  <a href="{{route('slider.index')}}" > <h6 style="text-align: center;font-size:15px; margin:1rem;color:rgb(228, 228, 241)">More Info  <i
                                            class="fa-solid fa-arrow-right-to-bracket"></i></h6></a>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card" style="background: #322c42;border-radius:20px">
                                <div class="card-body" style="text-align: center;color:white">
                                    <h3> <b>Service</b></h3>
                                    <div class="Photo">
                                        <h3> <b> {{ $photo }} </b>
                                            <h3>
                                    </div>
                                </div>
                                <div class="text"
                                    style="background: brown;width:100%;height:50px;border-bottom-left-radius:10px;border-bottom-right-radius:10px">
                                  <a href="{{route('service.index')}}" > <h6 style="text-align: center;font-size:15px; margin:1rem;color:rgb(228, 228, 241)">More Info  <i
                                            class="fa-solid fa-arrow-right-to-bracket"></i></h6></a>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card" style="background: #322c42;border-radius:20px">
                                <div class="card-body" style="text-align: center;color:white">
                                    <h3> <b>Employee</b></h3>
                                    <div class="Photo">
                                        <h3> <b> {{ $employee }} </b>
                                            <h3>
                                    </div>
                                </div>
                                <div class="text"
                                    style="background: brown;width:100%;height:50px;border-bottom-left-radius:10px;border-bottom-right-radius:10px">
                                   <a href="{{route('employee.index')}}"> <h6 style="text-align: center;font-size:15px; margin:1rem;color:rgb(228, 228, 241)">More Info  <i
                                            class="fa-solid fa-arrow-right-to-bracket"></i></h6></a>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card" style="background: #322c42;border-radius:20px">
                                <div class="card-body" style="text-align: center;color:white">
                                    <h3> <b>Photo</b></h3>
                                    <div class="Photo">
                                        <h3> <b> {{ $photo }} </b>
                                            <h3>
                                    </div>
                                </div>
                                <div class="text"
                                    style="background: brown;width:100%;height:50px;border-bottom-left-radius:10px;border-bottom-right-radius:10px">
                                   <a href="{{route('photo.index')}}"> <h6 style="text-align: center;font-size:15px; margin:1rem;color:rgb(228, 228, 241)">More Info  <i
                                            class="fa-solid fa-arrow-right-to-bracket"></i></h6></a>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card" style="background: #322c42;border-radius:20px">
                                <div class="card-body" style="text-align: center;color:white">
                                    <h3> <b>Video</b></h3>
                                    <div class="Photo">
                                        <h3> <b> {{ $video }} </b>
                                            <h3>
                                    </div>
                                </div>
                                <div class="text"
                                    style="background: brown;width:100%;height:50px;border-bottom-left-radius:10px;border-bottom-right-radius:10px">
                                   <a href="{{route('video.index')}}"> <h6 style="text-align: center;font-size:15px; margin:1rem;color:rgb(228, 228, 241)">More Info  <i
                                            class="fa-solid fa-arrow-right-to-bracket"></i></h6></a>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card" style="background: #322c42;border-radius:20px">
                                <div class="card-body" style="text-align: center;color:white">
                                    <h3> <b>Banner</b></h3>
                                    <div class="Photo">
                                        <h3> <b> {{$banner }} </b>
                                            <h3>
                                    </div>
                                </div>
                                <div class="text"
                                    style="background: brown;width:100%;height:50px;border-bottom-left-radius:10px;border-bottom-right-radius:10px">
                                   <a href="{{route('banner.index')}}"> <h6 style="text-align: center;font-size:15px; margin:1rem;color:rgb(228, 228, 241)">More Info  <i
                                            class="fa-solid fa-arrow-right-to-bracket"></i></h6></a>
                                </div>
                            </div>

                        </div>
                    </div>

@endsection
