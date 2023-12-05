@extends('frontend.web_master')
@section('web-master')

<div class="page_header_default style_one ">
    <div class="parallax_cover">
       <div class="simpleParallax">
          <img src="{{asset('images/'.$banner->team)}}" alt="bg_image" class="cover-parallax">
       </div>
    </div>
    <div class="page_header_content">
       <div class="auto-container">
          <div class="row">
             <div class="col-md-12">
                <div class="banner_title_inner">
                   <div class="title_page">
                      Our Team
                   </div>
                </div>
             </div>
             <div class="col-lg-12">
                <div class="breadcrumbs creote">
                   <ul class="breadcrumb m-auto">
                      <li><a href="index-2.html">Home</a></li>
                      <li class="active">Our Team</li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!----header----->
 <!----page-CONTENT----->
 <div id="content" class="site-content ">
    <!---team intro--->
    {{-- <section class="team-intro"> --}}
       <!--===============spacing==============-->
       {{-- <div class="pd_top_90"></div> --}}
       <!--===============spacing==============-->
       {{-- <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="team_intro_box">
                   <div class="team_intro_inner">
                      <div class="image_bg">
                         <img src="assets/images/team-intro-bg.jpg" class="img-fluid" alt="image">
                      </div>
                      <div class="team_intro_start">
                         <div class="row">
                            <div class="col-lg-8">
                               <div class="left_content">
                                  <div class="title">
                                     <h6>Strong Team</h6>
                                     <h1>Foundation of Business</h1>
                                  </div>
                                  <div class="quotes">
                                     <span class="icon-quote"></span>
                                     <h5>Teamwork is the secret that <br> makes common people achieve <br>
                                        uncommon results.</h5>
                                  </div>
                                  <div class="authour_dtls">
                                     <img src="assets/images/signature.png" class="sign" alt="image">
                                     <h4>Liam Oliver ,
                                        <span>Founder &amp; CEO of Qetus</span>
                                     </h4>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-4">
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="image_right">
                      <img src="assets/images/team-head-1.png" alt="image">
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section> --}}
    <!---team intro--->
    <!---image box section--->
    {{-- <section class="image-section"> --}}
       <!--===============spacing==============-->
       {{-- <div class="pd_top_90"></div> --}}
       <!--===============spacing==============-->
       {{-- <div class="container">
          <div class="row">
             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-4 mb-xl-0">
                <div class="icon_box_all style_four">
                   <div class="icon_content icon_imgs">
                      <div class="icon">
                         <img src="assets/images/icon-img-n-3.png" class="img-fluid svg_image"
                            alt="icon png">
                         <img src="assets/images/shape-1-small.png" class="shape" alt="img">
                      </div>
                      <div class="txt_content">
                         <h3>
                            <a href="#" target="_blank" rel="nofollow">Professionally<br>trained</a>
                         </h3>
                         <p>Holds in these matters principles all selection right rejects.</p>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-4 mb-xl-0">
                <div class="icon_box_all style_four">
                   <div class="icon_content icon_imgs ">
                      <div class="icon">
                         <img src="assets/images/icon-img-n-4.png" class="img-fluid svg_image"
                            alt="icon png">
                         <img src="assets/images/shape-1-small.png" class="shape" alt="img">
                      </div>
                      <div class="txt_content">
                         <h3>
                            <a href="#" target="_blank" rel="nofollow">Team is available 7<br>days a week</a>
                         </h3>
                         <p>No one rejects dislikes avoids sure but because those who do.</p>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-4 mb-xl-0">
                <div class="icon_box_all style_four">
                   <div class="icon_content icon_imgs ">
                      <div class="icon">
                         <img src="assets/images/icon-img-n-5.png" class="img-fluid svg_image"
                            alt="icon png">
                         <img src="assets/images/shape-1-small.png" class="shape" alt="img">
                      </div>
                      <div class="txt_content">
                         <h3>
                            <a href="#" target="_blank" rel="nofollow">Focused on achieving results</a>
                         </h3>
                         <p>Loves or pursues or desires obtain of itself because it is pain.</p>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="icon_box_all style_four">
                   <div class="icon_content icon_imgs">
                      <div class="icon">
                         <img src="assets/images/fun-2.png" class="img-fluid svg_image" alt="icon png">
                         <img src="assets/images/shape-1-small.png" class="shape" alt="img">
                      </div>
                      <div class="txt_content">
                         <h3>
                            <a href="#" target="_blank" rel="nofollow">Exceeds our client’s expectations</a>
                         </h3>
                         <p>Trivial example which of us ever all undertakes laborious.</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div> --}}
       <!--===============spacing==============-->
       {{-- <div class="pd_bottom_70"></div> --}}
       <!--===============spacing==============-->
    {{-- </section> --}}
    <!---image box section--->
    <!---team section--->
    <section class="team-section bg_light_1">
       <!--===============spacing==============-->
       <div class="pd_top_90"></div>
       <!--===============spacing==============-->
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="title_all_box style_one text-center dark_color">
                   <div class="title_sections">
                      <div class="before_title">Dedicated Team</div>
                      <h2>Professional Individuals</h2>
                   </div>
                   <!--===============spacing==============-->
                   <div class="pd_bottom_20"></div>
                   <!--===============spacing==============-->
                </div>
             </div>
          </div>
          <div class="row">
@foreach ( $employee as $item)


             <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="team_box style_one">
                   <div class="team_box_outer">
                      <div class="member_image">
                         <img src="{{asset('images/'.$item->image)}}" alt="team image" />
                      </div>
                      <div class="about_member">
                         <div class="share_media">
                            <ul class="first">
                               <li class="text">Share</li>
                               <li><i class="fa fa-share-alt"></i></li>
                            </ul>
                            <ul>
                               <li class="shar_alt"><i class="fa fa-share-alt"></i></li>
                               <li><a href="{{$item->facebook}}" target=_blank> <i class="fa fa-facebook"> </i> </a></li>
                               <li><a href="{{$item->twitter}}" target=_blank> <i class="fa fa-twitter"> </i> </a></li>
                               <li><a href="{{$item->skype}}" target=_blank> <i class="fa fa-skype"> </i> </a></li>
                               <li><a href="{{$item->instragram}}" target=_blank> <i class="fa fa-instagram"> </i> </a></li>
                            </ul>
                         </div>
                         <div class="authour_details">
                            <span>{{$item->employee_id}}</span>
                            <h6>{{$item->name}}</h6>

                         </div>
                      </div>
                   </div>
                </div>
             </div>
             @endforeach

          </div>
       </div>
       <!--===============spacing==============-->
       <div class="pd_bottom_70"></div>
       <!--===============spacing==============-->
    </section>


 </div>


@endsection
