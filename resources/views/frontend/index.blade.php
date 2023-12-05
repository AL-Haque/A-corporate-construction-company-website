@extends('frontend.web_master')
@section('web-master')

  <!--===============PAGE CONTENT==============-->
         <!--===============PAGE CONTENT==============-->
         <div id="content" class="site-content">
            <!---slider-->
            <section class="slider style_four nav_position_one">
               <div class="owl-carousel owl_nav_block owl_dots_none theme_carousel owl-theme"
                  data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>

                  @foreach ( $slider as $item)
                  <div class="slide-item-content">
                     <div class="slide-item content_left">
                        <div class="image-layer"  style="background-image:url({{url('images/'.$item->image)}})">
                        </div>
                        <div class="auto-container">
                           <div class="row">
                              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                 <div class="slider_content pd_top_180 pd_bottom_200">
                                    {{-- <h6 class="animate_up d-inline-block">  </h6> --}}
                                    <h1 class="animate_left">{!!$item->title!!}</h1>
                                    <p class="description animate_right"> {!!$item->details!!} </p>
                                    <div class="button_all animate_down">
                                       <a href="{{route('about')}}" target="_blank" rel="nofollow" class="theme-btn one  animated">Read
                                          More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach

               </div>
            </section>
            <!---slider-end--->



            <!---service--->
            <section class="service_section bg_light_1" id="service">
               <!--===============spacing==============-->
               <div class="pd_top_80"></div>
               <!--===============spacing==============-->
               <div class="container">
                  <div class="row">
                     <div class="title_all_box style_one text-center dark_color">
                        <div class="title_sections">
                           <div class="before_title">Leading</div>
                           <h2>Our Services</h2>
                           <p>We work with your company to identify position requirements, implement recruitment
                              programs, and <br> initiate employee assessments that maximize recruitment efforts </p>
                        </div>
                     </div>
                     <!--===============spacing==============-->
                     <div class="pd_bottom_20"></div>

                       <!--===============service==============-->
                     @foreach ($service as $item )

                     <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="service_box style_two dark_color">
                       <a href="{{route('front.service')}}">   <div class="service_content_two  active_ser">
                              <div class="content_inner"
                                 style="background-image:url({{url('images/'.$item->image)}});height:450px">
                                 <div class="content_inner_in">

                                    {{-- <div class="icon_image">
                                     <img   src="{{asset('images/'.$item->image)}}" class="img-fluid"
                                          alt="Service Image"  />
                                    </div> --}}

                                 </div>
                              </div> </a>
                              {{-- <div class="ovarlay_link">
                                 <a href="{{route('front.service')}}">
                                    <i class="icon-right-arrow"></i>
                                 </a>
                              </div> --}}
                              <div class="overlay_content " style="height:200px" >
                                 <h5>
                                    <a href=""> {{$item->title}}</a>
                                 </h5>
                                 <p> {!! Str::limit($item->details, 40, ' ...')!!}
                                 </p>
                              </div>
                           </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_20"></div>
                        <!--===============spacing==============-->
                     </div>
                     @endforeach
                      <!--===============service-end==============-->

                     <!--===============spacing==============-->


                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_70"></div>
               <!--===============spacing==============-->
            </section>
            <!---service end-->
            <!---expertise--->
            <section class="expertise">
               <div class="area_of_expertise">
                  <div class="simpleParallax">
                     <img src="assets/images/areaof-ecp-1.jpg" class="cover-parallax" alt="image">
                  </div>
                  <div class="title_and_video">
                     <div class="auto-container">
                        <div class="row">
                           <div class="col-lg-4">
                              <div class="video_box text-center">
                                 <a href="{{$info->about_video}}" target=_blank class="lightbox-image"><i
                                       class="icon-play"></i></a>
                              </div>
                           </div>
                           <div class="col-lg-2"></div>


                           <div class="col-lg-6">
                              <div class="title_all_box style_one text-end">
                                 <div class="title_sections">
                                    <h2 >Create Meaningful Experience with Us</h2>
                                    <p >{!!$info->about!!}</p>
                                 </div>
                                 <div class="theme_btn">
                                    <a href="{{route('about')}}" class="theme-btn one">Read more</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            </section>
            <!---expertise-end--->

            <!---team--->
            <section class="team bg_light_1">
               <!--===============spacing==============-->
               <div class="pd_top_80"></div>
               <!--===============spacing==============-->
               <div class="container">
                  <div class="row align-items-end">
                     <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="title_all_box style_one  dark_color">
                           <div class="title_sections">
                              <div class="before_title"> Dedicated Team</div>
                              <h2>Professional Individuals</h2>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="description_box">
                           <p>Our power of choice is untrammelled and when nothing prevents being able to do what we
                              like best every pleasure.</p>
                           <!--===============spacing==============-->
                           <div class="mr_bottom_20"></div>
                           <!--===============spacing==============-->
                        </div>
                     </div>
                     <!--===============spacing==============-->
                     <div class="mr_bottom_30"></div>
                     <!--===============spacing==============-->
                  </div>
                  <div class="row">
                    @foreach ($managment as $item)

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
                                       <li><a href="{{$item->facebook}}"> <i class="fa fa-facebook"> </i></a></li>
                                       <li><a href="{{$item->twitter}}"> <i class="fa fa-twitter"> </i></a></li>
                                       <li><a href="{{$item->skype}}"> <i class="fa fa-skype"> </i></a></li>
                                       <li><a href="{{$item->instragram}}"> <i class="fa fa-instagram"> </i></a></li>
                                    </ul>
                                 </div>
                                 <div class="authour_details">
                                    <span>{{$item->employee_id}} </span>
                                    <h6>{{$item->name}}</h6>
                                    <div class="button_view">
                                       <a href="{{route('managment')}}" target="_blank" rel="nofollow" class="theme-btn one"> View Profile
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_30"></div>
                        <!--===============spacing==============-->
                     </div>

                    @endforeach

                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_60"></div>
               <!--===============spacing==============-->
            </section>
            <!---team-end--->
            <!---project--->
            <section class="project-carousel" id="projects">
               <!--===============spacing==============-->
               <div class="pd_top_80"></div>
               <!--===============spacing==============-->
               <div class="container">
                  <div class="row">
                     <div class="title_all_box style_one text-center dark_color">
                        <div class="title_sections">
                           <div class="before_title">Incredibly</div>
                           <h2>Our Photo Gallery</h2>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_10"></div>
                        <!--===============spacing==============-->
                     </div>
                  </div>
               </div>
               <div class="container-fluid">

                  <div class="row">
                     <div class="col-lg-12">

                        <div class="project_caro_section carousel style_one ">
                           <div class="swiper-container" data-swiper='{
                           "loop": true,
                           "autoplay": {
                             "delay": 5000
                           },
                           "speed": 1000,
                           "centeredSlides": false,
                           "slidesPerView": 4,
                           "spaceBetween": 30,
                           "pagination": {
                             "el": ".swiper-pagination",
                             "clickable": true
                           },
                           "navigation": {
                             "nextEl": ".swiper-button-next",
                             "prevEl": ".swiper-button-prev"
                           },
                           "breakpoints": {
                              "1200": {
                                 "slidesPerView": 4
                                },
                              "1024": {
                               "slidesPerView": 2
                              },
                             "768": {
                               "slidesPerView": 2
                             },
                             "576": {
                               "slidesPerView": 1
                             },
                             "0": {
                              "slidesPerView": 1
                            }
                           }
                         }'>




                              <div class="swiper-wrapper">
                                 <!----swiper warapper start---->
                                 @foreach ($photo as $item)
                                 <div class="swiper-slide">
                                    <div class="project_post style_one mr_top_20">
                                       <div class="image">
                                          <img src="{{asset('images/'.$item->image)}}" class="img-fluid"
                                             alt="img" />
                                       </div>
                                    </div>
                                 </div>

                              @endforeach
                                 <!----swiper warapper end---->
                              </div>
                              <!----swiper-pagination start---->
                              <div class="p_pagination">
                                 <div class="swiper-pagination">
                                 </div>
                              </div>
                              <!----swiper-pagination end---->
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_90"></div>
               <!--===============spacing==============-->
            </section>
            <!---project-end--->
            <!---testimonial--->
            <section class="testimonial bg_op_1" style="background-image: url(assets/images/testimonialbg.jpg);">
               <div class="row align-items-center">
                  <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 pd_zero">
                     <div class="image">
                        <img src="assets/images/testi-image.jpg" class="object-fit-cover img-fluid height_560px"
                           alt="image" />
                     </div>
                  </div>
                  <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 pd_zero">
                     <!--===============spacing==============-->
                     <div class="pd_top_70"></div>
                     <!--===============spacing==============-->
                     <div class="testimonial_sec_wrapper pd_left_70">
                        <div class="title_all_box style_one light_color">
                           <div class="title_sections">
                              <div class="before_title">
                                 Quote About
                              </div>
                              <h2> Meet Our Client</h2>
                           </div>
                           <!--===============spacing==============-->
                           <div class="mr_bottom_20"></div>
                           <!--===============spacing==============-->
                        </div>
                        <div class="testimonial_sec light_color style_one">
                           <div class="icon_quotes">
                              <i class="icon-quote"></i>
                           </div>
                           <div class="swiper-container" data-swiper='{
                              "loop": true,
                              "autoplay": {
                                "delay": 7000
                              },
                              "speed": 1000,
                              "centeredSlides": false,
                              "slidesPerView": 1,
                              "spaceBetween": 30,
                              "navigation": {
                                "nextEl": ".next-single-one",
                                "prevEl": ".prev-single-one"
                              },
                              "pagination": {
                                "el": ".number-pagination",
                                "type": "fraction"
                              },
                              "breakpoints": {
                                "1200": {
                                  "slidesPerView": 1
                                },
                                "1024": {
                                  "slidesPerView": 1
                                },
                                "768": {
                                  "slidesPerView": 1
                                },
                                "576": {
                                  "slidesPerView": 1
                                }
                              }
                            }'>
                              <div class="swiper-wrapper">
                                @foreach ( $client as $item )


                                 <div class="swiper-slide">
                                    <div class="testimonial_box">
                                       <div class="rating">
                                          <ul>
                                             <li><span class="fa fa-star fill"></span><span
                                                   class="fa fa-star fill"></span><span
                                                   class="fa fa-star fill"></span><span
                                                   class="fa fa-star fill"></span><span class="fa fa-star empty"></span>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="authour_details  image_yes " >
                                          <div class="image" >
                                             <img src="{{asset('images/client/'. $item->image)}}" alt="image" />
                                          </div>
                                          <div class="details">
                                             <h2>{{$item->name}}</h2>
                                             <span>{{$item->tag_line}}</span>
                                          </div>
                                       </div>
                                       <div class="comment">
                                        {!! Str::limit($item->details, 200, ' ...')!!}
                                       </div>
                                    </div>
                                 </div>
                                 @endforeach

                              </div>
                              <div class="arrows">
                                 <div class="prev-single-one"></div>
                                 <div class="next-single-one"></div>
                              </div>
                              <div class="num_pagination">
                                 <div class="number-pagination">

                                 </div>
                              </div>

                           </div>
                        </div>
                     </div>
                     <!--===============spacing==============-->
                     <div class="pd_bottom_70"></div>
                     <!--===============spacing==============-->
                  </div>
                  <!---empty column--->
                  <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12">
                  </div>
                  <!---empty column--->
               </div>
            </section>
            <!---testimonial-end--->

            <section class="project-carousel" id="projects">
                <!--===============spacing==============-->
                <div class="pd_top_80"></div>
                <!--===============spacing==============-->
                <div class="container">
                   <div class="row">
                      <div class="title_all_box style_one text-center dark_color">
                         <div class="title_sections">
                            <div class="before_title">Incredibly</div>
                            <h2>Our Video Gallery</h2>
                         </div>
                         <!--===============spacing==============-->
                         {{-- <div class="mr_bottom_10"></div> --}}
                         <!--===============spacing==============-->
                      </div>
                   </div>
                </div>
                <div class="container-fluid">

                   <div class="row">
                      <div class="col-lg-12">
                         <div class="project_caro_section carousel style_one ">
                            <div class="swiper-container" data-swiper='{
                            "loop": true,
                            "autoplay": {
                              "delay": 5000
                            },
                            "speed": 1000,
                            "centeredSlides": false,
                            "slidesPerView": 5,
                            "spaceBetween": 30,
                            "pagination": {
                              "el": ".swiper-pagination",
                              "clickable": true
                            },
                            "navigation": {
                              "nextEl": ".swiper-button-next",
                              "prevEl": ".swiper-button-prev"
                            },
                            "breakpoints": {
                               "1200": {
                                  "slidesPerView": 5
                                 },
                               "1024": {
                                "slidesPerView": 2
                               },
                              "768": {
                                "slidesPerView": 2
                              },
                              "576": {
                                "slidesPerView": 1
                              },
                              "0": {
                               "slidesPerView": 1
                             }
                            }
                          }'>

                               <div class="swiper-wrapper">
                                  <!----swiper warapper start---->
                                  @foreach ($video as $item)

                                  <div class="swiper-slide"  style="height:350px">
                                            <div class="image_boxes style_two">
                                            <div class="image" style="height:300px; width:100%;margin-top:30px " >
                                                <img src="{{asset('images/video/'.$item->image)}}" class="img-fluid" alt="image">
                                                <div class="video_box">
                                                   <a href="{{$item->video_url}}" class="lightbox-image" ><i class="icon-play"></i></a>
                                                </div>
                                             </div>
                                            </div>
                                    </div>
                                     {{-- </div> --}}

                                  {{-- </div> --}}
                                  @endforeach
                                  <!----swiper warapper end---->
                               </div>

                               <!----swiper-pagination start---->
                               <div class="p_pagination">
                                  <div class="swiper-pagination">
                                  </div>
                               </div>
                               <!----swiper-pagination end---->
                            </div>
                         </div>
                      </div>
                   </div>

                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_90"></div>
                <!--===============spacing==============-->
             </section>

         </div>
@endsection
