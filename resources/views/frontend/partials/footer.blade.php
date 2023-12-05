<!---newsteller--->
<section class="newsteller style_one bg_dark_1">
    <!--===============spacing==============-->
    <div class="pd_top_40"></div>
    <!--===============spacing==============-->
    <div class="auto-container">
    <div class="row align-items-center">
     <div class="col-lg-6 col-md-12">
        <div class="content">
           <h2>Join Our Mailing List</h2>
           <p>For receiving our news and updates in your inbox directly. </p>
        </div>
     </div>
     <div class="col-lg-6 col-md-12">
        <div class="item_scubscribe">

           <div class="input_group">

              <form class="mc4wp-form" method="post" action="{{route('email')}}">
                {{csrf_field()}}
                 <div class="mc4wp-form-fields">
                    <input type="email" name="user_email" placeholder="Your email address" required="">
                    <input type="submit" value="Sign up">
                 </div>
              </form>
           </div>
        </div>
     </div>
    </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_40"></div>
    <!--===============spacing==============-->
    </section>
    <!---newsteller end--->





  <!---==============footer start =================-->
  <div class="footer_area" id="footer_contents">
    <div class="footer_widgets_wrap bg_dark_2">
       <!--===============spacing==============-->
       <div class="pd_top_80"></div>
       <!--===============spacing==============-->
       <div class="container">
          <div class="row">
             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="footer_widgets about_company light_color">
                   <div class="about_company_inner">
                      <div class="footer_logo">
                         <a href="#" target="_blank" rel="nofollow">
                            <img src="{{asset('images/'.$info->logo)}}" class="img-fluid" alt="logo" />
                         </a>
                         <!--===============spacing==============-->
                         {{-- <div class="pd_bottom_30"></div> --}}
                         <!--===============spacing==============-->
                      </div>
                      <div class="content_box">
                         <p>
                            {!! Str::limit($info->about, 95, ' ...')!!}
                         </p>
                         <div class="consulting">
                            <div class="image">
                               <img src="{{asset('images/'.$info->image)}}" alt="need help" />
                            </div>
                            <div class="help_con">
                               <h6>Need Help?</h6>
                               <h2>
                                  <a href="{{route('contact')}}" target="_blank" rel="nofollow"> Free Contact us</a>
                               </h2>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="footer_widgets wid_tit style_one">
                   <div class="fo_wid_title">
                      <h2>Get In Touch</h2>
                   </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_25"></div>
                <!--===============spacing==============-->
                <div class="footer_widgets get_in_touch_foo light_color">
                   <div class="get_intouch_inrfo">
                      <div class="foo_cont_inner">
                         <div class="top">
                            <h6> Location</h6>
                            <p>
                                {{$info->address}}
                            </p>
                         </div>
                         <div class="bottom">
                            <h6> Contact</h6>
                            <div class="con_content">
                               <h5> Phone :</h5>
                               <a href="tel:+9806071234"> {{$info->phone}}</a>
                            </div>
                            <div class="con_content">
                               <h5> Mail Us :</h5>
                               <a href="tel:sendmail@creote.com"> {{$info->email}}</a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12">
                <div class="footer_widgets wid_tit style_one">
                   <div class="fo_wid_title">
                      <h2>Company</h2>
                   </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_25"></div>
                <!--===============spacing==============-->
                <div class="footer_widgets clearfix navigation_foo light_color style_one">
                   <div class="navigation_foo_box">
                      <div class="navigation_foo_inner">

                         <ul class="menu">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('front.service')}}">Service</a></li>
                            <li><a href="{{route('managment')}}">Our Team</a></li>
                            <li><a href="{{route('contact')}}">contact</a></li>
                            {{-- <li><a href="#">HR Solutions</a></li> --}}
                         </ul>

                      </div>
                   </div>
                </div>
             </div>

             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="footer_widgets wid_tit style_one">
                   <div class="fo_wid_title">
                      <h2>Map</h2>
                   </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_25"></div>
                <!--===============spacing==============-->
                <div class="footer_widgets clearfix navigation_foo light_color style_one" >
                   <div class="navigation_foo_box" >
                      <div class="navigation_foo_inner" >

                        <iframe  class="google-map" loading="lazy" src="{{$map->map_url }}"
                            style="width: 100%;height:220px"></iframe>

                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!--===============spacing==============-->
       <div class="pd_bottom_50"></div>
       <!--===============spacing==============-->
    </div>
    <div class="creote-footer-copyright bg_dark_3">

       <div class="container">
          <div class="row align-items-center">
             <div class="col-lg-6 col-md-12 col-sm-12">
                <!--===============spacing==============-->
                <div class="pd_top_10"></div>
                <!--===============spacing==============-->
                <div class="footer_copy_content color_white">
                   © 2023 <a href="https://linktechbd.com/">Link-up Technology Ltd.</a> All Rights
                   Reserved.
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_10"></div>
                <!--===============spacing==============-->
             </div>
             <div class="col-lg-6 col-md-12 col-sm-12 text-md-end">
                <!--===============spacing==============-->
                <div class="pd_top_10"></div>
                <!--===============spacing==============-->
                <div class="footer_copy_content_right">
                   <div class="social_media_v_one">
                      <ul>
                         <li>
                            <a href="{{$info->facebook}}" target=_blank>
                               <span class="fa fa-facebook" ></span>
                               <small>facebook</small>
                            </a>
                         </li>
                         <li>
                            <a href="{{$info->twitter}}"target=_blank>
                               <span class="fa fa-twitter" ></span>
                               <small>twitter</small>
                            </a>
                         </li>
                         <li>
                            <a href="{{$info->linkdln}}" target=_blank>
                               <span class="fa fa-linkedin" ></span>
                               <small>linkdIn</small>
                            </a>
                         </li>
                         <li>
                            <a href="{{$info->instragram}}" target=_blank >
                               <span class="fa fa-instagram"></span>
                               <small>instagram</small>
                            </a>
                         </li>
                      </ul>
                   </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_10"></div>
                <!--===============spacing==============-->
             </div>
          </div>
       </div>

    </div>
 </div>
 <!---==============footer end =================-->
