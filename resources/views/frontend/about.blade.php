

@extends('frontend.web_master')
@section('web-master')

 <!----page header----->
 <div class="page_header_default style_one ">
    <div class="parallax_cover">
       <img src="{{asset('images/'.$banner->about)}}"  alt="bg_image" class="cover-parallax">
    </div>
    <div class="page_header_content">
       <div class="auto-container">
          <div class="row">
             <div class="col-md-12">
                <div class="banner_title_inner">
                   <div class="title_page">
                      About Us
                   </div>
                </div>
             </div>
             <div class="col-lg-12">
                <div class="breadcrumbs creote">
                   <ul class="breadcrumb m-auto">
                      <li><a href="index-2.html">Home</a> </li>
                      <li class="active">About Us</li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!----page header----->

  <!--===============PAGE CONTENT==============-->
  <div id="content" class="site-content ">
    <!---about--->
    <section class="about-section">
       <!--===============spacing==============-->
       <div class="pd_top_90"></div>
       <!--===============spacing==============-->
       <div class="container">
          <div class="row">
             <div class="col-xl-6 col-lg-12 ">
                <div class="about_content position-relative z_99">
                   <div class="title_all_box style_one text-left  dark_color">
                      <div class="title_sections">
                         <div class="before_title">We are</div>
                         <h2>Leaders in  Solution</h2>
                      </div>
                   </div>
                   <!--===============spacing==============-->
                   <div class="pd_bottom_15"></div>
                   <!--===============spacing==============-->
                   <div class="extra_content image_with_content dark_color">
                      <div class="simple_image">
                         <img src="{{asset('images/'.$info->logo)}}" alt="img">
                         <h2> {{$info->name}} <br> {{$info->address}}</h2>
                      </div>
                   </div>
                   <!--===============spacing==============-->
                   <div class="pd_bottom_20"></div>
                   <!--===============spacing==============-->
                   <div class="description_box" style="text-align: justify">
                      <p>{!! Str::limit($info->about, 400, '...')!!} </p>
                   </div>
                   <!--===============spacing==============-->
                   <div class="pd_bottom_25"></div>
                   <!--===============spacing==============-->
                   <div class="row gutter_15px">
                      <div class="col-lg-6 col-md-12">
                         <div class="icon_box_all  style_two">
                            <div class="icon_content  icon_imgs ">
                               <div class="icon">
                                  <img src="assets/images/icon-img-n-1.png" class="img-fluid svg_image"
                                     alt="icon png">
                               </div>
                               <div class="txt_content">
                                  <h3><a href="#" target="_blank" rel="nofollow">{{$info->slogun}}</a>
                                  </h3>
                               </div>
                            </div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_25"></div>
                            <!--===============spacing==============-->
                         </div>
                      </div>
                      <div class="col-lg-6 col-md-12">
                         <div class="icon_box_all  style_two">
                            <div class="icon_content  icon_imgs ">
                               <div class="icon">
                                  <img src="assets/images/icon-img-n-2.png" class="img-fluid svg_image"
                                     alt="icon png">
                               </div>
                               <div class="txt_content">
                                  <h3><a href="#" target="_blank" rel="nofollow">{{$info->note}}</a></h3>
                               </div>
                            </div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_25"></div>
                            <!--===============spacing==============-->
                         </div>
                      </div>
                   </div>

                   <div class="theme_btn_all color_one">
                      <a href="{{route('contact')}}" target="_blank" rel="nofollow" class="theme-btn five">Contact us<i
                            class="icon-right-arrow"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-xl-6 col-lg-12">
                <div class="image_boxes style_two">
                   <!-- <img src="assets/images/shape-1.png" class="background_image" alt="image"> -->
                   <div class="image one">
                      <img src="{{asset('images/'.$info->image)}}" class="img-fluid" alt="image">
                   </div>
                   <div class="image two" style="margin-top: 90px">
                      <img src="{{asset('images/'.$info->image)}}" class="img-fluid" alt="image">
                      <div class="video_box">
                         <a href="{{$info->about_video}}" class="lightbox-image"><i class="icon-play"></i></a>
                      </div>
                   </div>
                   <div class="authour_quotes">
                      <i class="icon-quote"></i>
                      <h6>Making What’s Possible in Human Resource</h6>
                      <p>/ Liam Oliver</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!--===============spacing==============-->
       <div class="pd_bottom_70"></div>
       <!--===============spacing==============-->
    </section>
    <!---about end--->
    <!---service--->
    <section class="service-icon-section bg_light_1">
    <!--===============spacing==============-->
    {{-- <div class="pd_top_90"></div> --}}
    <!--===============spacing==============-->

      <!---team--->

       <!--===============spacing==============-->

       <!--===============spacing==============-->

       <!--===============spacing==============-->


    <!---team-end--->

</div>
<!--===============PAGE CONTENT END==============-->

@endsection
