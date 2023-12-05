@extends('frontend.web_master')
@section('web-master')
    <div class="page_header_default style_one ">
        <div class="parallax_cover">
            <div class="simpleParallax"><img src="{{ asset('images/' . $banner->contact) }}" alt="bg_image"
                    class="cover-parallax"></div>
        </div>
        <div class="page_header_content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_title_inner">
                            <div class="title_page">
                                Contact
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                            <ul class="breadcrumb m-auto">
                                <li><a href="index-2.html">Home</a></li>
                                <li class="active">Contact</li>
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

        <section class="contact-section">
            <!--===============spacing==============-->
            <div class="pd_top_90"></div>
            <!--===============spacing==============-->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
                        <div class="contact_form_box_all type_one">
                            <div class="contact_form_box_inner">
                                <div class="contact_form_shortcode">
                                    <form  method="post" action="{{ route('contact.store') }}">

                                        <div class="messages"></div>
                                        <div class="controls">
                                            {{csrf_field()}}
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label> Your Name<br/></label>
                                                        <input type="text" name="name" placeholder="Your Name *"
                                                            required="required" data-error="Enter Your Name">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label> Your Email<br /></label>
                                                        <input type="text" name="email" required="required"
                                                            placeholder="Email *" data-error="Enter Your Email Id">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label> Your Subject<br /></label>
                                                        <input type="text" name="subject" required="required"
                                                            placeholder=" Subject  (Optional)">
                                                    </div>
                                                </div>


                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label> Your Message<br /></label>
                                                        <textarea name="massage" placeholder="Additional Information... (Optional) " rows="3" required="required"
                                                            data-error="Please, leave us a message."></textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group mg_top apbtn">
                                                        <button class="theme_btn" type="submit"> Appointment</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 pd_left_30">
                        <div class="title_all_box style_one dark_color">
                            <div class="title_sections left">
                                <div class="before_title">Contact Info to</div>
                                <h2>Reach Our Expert Team</h2>
                                <p>Send a message through given form, If your enquiry is time sensitive please use below
                                    contact details.</p>
                            </div>
                        </div>
                        <div class="contact_box_content style_one">
                            <div class="contact_box_inner icon_yes">
                                <div class="icon_bx">
                                    <span class=" icon-placeholder"></span>
                                </div>
                                <div class="contnet">
                                    <h3> Post Address </h3>
                                    <p>
                                        {{ $info->address }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_15"></div>

                        <!--===============spacing==============-->
                        <div class="contact_box_content style_one">
                            <div class="contact_box_inner icon_yes">
                                <div class="icon_bx">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="contnet">
                                    <h3> General Enquires </h3>
                                    <p>
                                        Phone:{{ $info->phone }} &amp; Email:{{ $info->email }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_15"></div>
                        <!--===============spacing==============-->
                        {{-- <div class="contact_box_content style_one">
                   <div class="contact_box_inner icon_yes">
                      <div class="icon_bx">
                         <span class="fa fa-clock-o"></span>
                      </div>
                      <div class="contnet">
                         <h3> Operation Hours </h3>
                         <p>
                            Mon-Satday: 09.00 to 07.00 (Sunday: Closed)
                         </p>
                      </div>
                   </div>
                </div> --}}
                        <!--===============spacing==============-->
                        <div class="pd_bottom_40"></div>
                        <!--===============spacing==============-->
                        <div class="social_media_v_one style_two">
                            <ul>
                                <li>
                                    <a href="{{ $info->facebook }}" target=_blank> <span class="fa fa-facebook"></span>
                                        <small>facebook</small>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $info->twitter }}" target=_blank> <span class="fa fa-twitter"></span>
                                        <small>twitter</small>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $info->linkdln }}" target=_blank> <span class="fa fa-linkedin"></span>
                                        <small>linkdin</small>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $info->instragram }}" target=_blank> <span class="fa fa-instagram"></span>
                                        <small>instagram</small>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_top_70"></div>
            <!--===============spacing==============-->
        </section>
        <section class="contact-map-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="map-section">
                            <!--Map Outer-->
                            <div class="map-outer">
                                <iframe class="google-map" loading="lazy" src="{{ $map->map_url }}"
                                    style="width: 100%"></iframe>

                            </div>
                        </section>

                    </div>
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_top_90"></div>
            <!--===============spacing==============-->
        </section>

    </div>
@endsection
