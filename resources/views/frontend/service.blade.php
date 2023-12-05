@extends('frontend.web_master')
@section('web-master')


<div class="page_header_default style_one ">
    <div class="parallax_cover">
       <div class="simpleParallax"><img src="{{asset('images/'.$banner->service)}}" alt="bg_image"
             class="cover-parallax"></div>
    </div>
    <div class="page_header_content">
       <div class="auto-container">
          <div class="row">
             <div class="col-md-12">
                <div class="banner_title_inner">
                   <div class="title_page">
                      Service
                   </div>
                </div>
             </div>
             <div class="col-lg-12">
                <div class="breadcrumbs creote">
                   <ul class="breadcrumb m-auto">
                      <li><a href="index-2.html">Home</a></li>
                      <li class="active">Service</li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!----header----->


 <div id="content" class="site-content ">
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============-->
    <section class="creote-service-box">
       <div class="container">
          <div class="row" >
            @foreach ($service as $item)


             <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12"  >
                <div class="service_post style_one"  >
                   <div class="image">
                      <div class="overlay"></div>
                      <img loading="lazy" width="500" height="500px" src="{{asset('images/'.$item->image)}}"
                         alt="img">
                   </div>
                   <div class="service_content icon_yes" style="height: 380px">
                      <div class="icon_box">
                         <span class="icon icon-thumbs-up icon"></span>
                      </div>
                      <h2  class="title_service"><a href="#" rel="bookmark">{{$item->title}}</a></h2>
                      <p class="short_desc"> {!! Str::limit($item->details, 300, ' ...')!!} </p>

                   </div>
                </div>
             </div>
             @endforeach
             {{-- <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="service_post style_one">
                   <div class="image">
                      <div class="overlay"></div>
                      <img loading="lazy" width="500" height="500" src="assets/images/service/service-image-5.jpg"
                         alt="img">
                   </div>
                   <div class="service_content icon_yes">
                      <div class="icon_box">
                         <span class="icon icon-thumbs-up icon"></span>
                      </div>
                      <h2 class="title_service"><a href="#" rel="bookmark">Health Care Benefits</a></h2>
                      <p class="short_desc">Workplace conflict can become a costly and time-consuming process.
                      </p>
                      <a class="read_more" href="#"> Read More<i class="icon-right-arrow-long"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="service_post style_one">
                   <div class="image">
                      <div class="overlay"></div>
                      <img loading="lazy" width="500" height="500" src="assets/images/service/service-image-4.jpg"
                         alt="img">
                   </div>
                   <div class="service_content icon_yes">
                      <div class="icon_box">
                         <span class="icon icon-thumbs-up icon"></span>
                      </div>
                      <h2 class="title_service"><a href="#" rel="bookmark">Risk Management</a></h2>
                      <p class="short_desc">Mitigate workplace issues before they escalate ,Shared Time Human.
                      </p>
                      <a class="read_more" href="#"> Read More<i class="icon-right-arrow-long"></i></a>
                   </div>
                </div>
             </div>

             <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="service_post style_one">
                   <div class="image">
                      <div class="overlay"></div>
                      <img loading="lazy" width="500" height="500" src="assets/images/service/service-image-3.png"
                         alt="img">
                   </div>
                   <div class="service_content icon_yes">
                      <div class="icon_box">
                         <span class="icon icon-thumbs-up icon"></span>
                      </div>
                      <h2 class="title_service"><a href="#" rel="bookmark">Compliance Audits</a></h2>
                      <p class="short_desc">Prevents our being able too what get like best every pleasure.</p>
                      <a class="read_more" href="#"> Read More<i class="icon-right-arrow-long"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="service_post style_one">
                   <div class="image">
                      <div class="overlay"></div>
                      <img loading="lazy" width="500" height="500" src="assets/images/service/service-image-2.png"
                         alt="img">
                   </div>
                   <div class="service_content icon_yes">
                      <div class="icon_box">
                         <span class="icon icon-thumbs-up icon"></span>
                      </div>
                      <h2 class="title_service"><a href="#" rel="bookmark">Employee Relations</a></h2>
                      <p class="short_desc">Indignation sed dislike men who are beguiled and demoralized.</p>
                      <a class="read_more" href="#"> Read More<i class="icon-right-arrow-long"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="service_post style_one">
                   <div class="image">
                      <div class="overlay"></div>
                      <img loading="lazy" width="500" height="500" src="assets/images/service/service-image-1.png"
                         alt="img">
                   </div>
                   <div class="service_content icon_yes">
                      <div class="icon_box">
                         <span class="icon icon-thumbs-up icon"></span>
                      </div>
                      <h2 class="title_service"><a href="#" rel="bookmark">Recruitment Process</a></h2>
                      <p class="short_desc">These cases are perfectly simple and easy to distinguish.</p>
                      <a class="read_more" href="#"> Read More<i class="icon-right-arrow-long"></i></a>
                   </div>
                </div>
             </div> --}}
          </div>
       </div>
    </section>
    <!--===============spacing==============-->
    <div class="pd_top_80"></div>
    <!--===============spacing==============-->

 </div>

@endsection
