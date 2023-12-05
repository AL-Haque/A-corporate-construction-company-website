<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from themepanthers.com/html/creote-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 04:48:55 GMT -->
<head>
   <meta charset="utf-8">
    
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <title> Rizah- Building Dreams, Selling Homes – Your Path to Quality Living!
   </title>
   <!-- Fav Icon -->
   <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
   <!-- Fav Icon -->
   <!-- Google Fonts -->
   <link rel='stylesheet'
      href="{{asset('https://fonts.googleapis.com/css?family=Spartan%3A400%2C500%2C600%2C700%2C800%2C900%7CInter%3A300%2C400%2C500%2C600%2C700%2C800%2C900&amp;subset=latin%2Clatin-ext')}}"
      type='text/css' media='all' />
   <!-- Google Fonts -->
   <!-- Style -->
   <link rel='stylesheet' href= "{{asset('assets/css/bootstrap.min.css')}}" type='text/css' media='all' />
   <link rel='stylesheet' href="{{asset('assets/css/owl.css')}}" type='text/css' media='all' />
   <link rel='stylesheet' href="{{asset('assets/css/swiper.min.css')}}" type='text/css' media='all' />
   <link rel='stylesheet' href="{{asset('assets/css/jquery.fancybox.min.css')}}" type='text/css' media='all' />
   <link rel='stylesheet' href="{{asset('assets/css/icomoon.css')}}" type='text/css' media='all' />
   <link rel='stylesheet' href="{{asset('assets/css/flexslider.css')}}" type='text/css' media='all' />
   <link rel='stylesheet' href="{{asset('assets/css/font-awesome.min.css')}}" type='text/css' media='all' />
   <link rel='stylesheet' href="{{asset('assets/css/style.css')}}" type='text/css' media='all' />
   <link rel='stylesheet' href="{{asset('assets/css/scss/elements/theme-css.css')}}" type='text/css' media='all' />
   <link rel='stylesheet' id="creote-color-switcher-css" href="{{asset('assets/css/scss/elements/color-switcher/color.css')}}" type='text/css' media='all' />
   <!-- Style-->
   <!----woocommerce---->
   <link rel='stylesheet' href="{{asset('assets/css/woocommerce-layout.css')}}" type='text/css' media='all' />
   <link rel='stylesheet' href="{{asset('assets/css/woocommerce.css')}}" type='text/css' media='all' />
   <!----woocommerce---->
</head>

<body class="theme-creote">
    <div id="page" class="page_wapper hfeed site">

       <!---============== wrapper_full =================-->
       <div id="wrapper_full" class="content_all_warpper">
        @include('frontend.partials.header')

        <div class="main__wrapper">
            @yield('web-master')
        </div>


        @include('frontend.partials.footer')

        <!---==============modal popup =================-->
        <div class="modal_popup one">
            <div class="modal-popup-inner">
               <div class="close-modal"><i class="fa fa-times"></i></div>
               <div class="modal_box">
                  <div class="row">
                     <div class="col-lg-5 col-md-12 form_inner">
                        <div class="form_content">
                           <form class="contact-form" method="post" action="{{route('store')}}">
                            {{csrf_field()}}
                              <p>
                                 <label> Your name<br />
                                    <input type="text" name="name" value="" size="40" aria-required="true"
                                       aria-invalid="false" placeholder="Enter Your Name" />
                                    <br />
                                    <i class="fa fa-user"></i><br />
                                 </label>
                              </p>
                              <p><label> Your email<br />
                                    <input type="email" name="email" value="" size="40" aria-required="true"
                                       aria-invalid="false" placeholder="Enter Your Email" />
                                    <br />
                                    <i class="fa fa-envelope"></i><br />
                                 </label>
                              </p>
                              <p>
                                 <label> Subject<br />
                                    <input type="text" name="subject" value="" size="40" aria-required="true"
                                       aria-invalid="false" placeholder="Enter Your Subject" />
                                    <br />
                                    <i class="fa fa-folder"></i><br />
                                 </label>
                              </p>
                              <p>
                                 <label> Your message (optional)<br />
                                    <textarea name="massage" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                       aria-invalid="false" placeholder="Enter Your Message"></textarea>
                                    <br />
                                    <i class="fa fa-comments"></i><br />
                                 </label>
                              </p>
                              <p><input type="submit" value="Submit" /></p>
                           </form>
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-12 about_company_inner">
                        <div class="abt_content">
                           <div class="logo">
                              <img src="{{asset('images/'.$info->logo)}}" alt="img" class="company_logo_modal">
                           </div>
                           <div class="text">
                            <p> {!! Str::limit($info->about, 300, ' ...')!!}
                            </p>
                              <a href="{{route('about')}}">Read More</a>
                           </div>
                           <div class="post_contet_modal">
                              <h2> Latest News</h2>
                              <div class="post_enable">
                                @foreach ( $photo as $key=> $item )
                                @if ($key==5)
                                @break
                                @endif
                                 <div class="modal_post_grid">
                                    <a href="{{route('home')}}">
                                       <img width="852" height="812" src="{{asset('images/'.$item->image)}}"
                                          alt="img" />
                                    </a>
                                 </div>
                                 @endforeach
                              </div>
                           </div>
                           <div class="copright">
                              © 2023 Creote. All Rights Reserved.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!---==============modal popup end=================-->

             <!---==============floating menu=================-->
      <div class="floating_menu_box">
        <ul class="float_menu_box">
           <i class="close fa fa-times"></i>
           <li class="floating_menu_text active">
              <a href="{{route('home')}}"> Home </a>
           </li>

           <li class="floating_menu_text ">
              <a href="{{route('about')}}">About </a>
           </li>

           <li class="floating_menu_text ">
              <a href="{{route('front.service')}}"> Service </a>
           </li>

           <li class="floating_menu_text ">
              <a href="{{route('managment')}}"> Our Team </a>
           </li>

           <li class="floating_menu_text ">
              <a href="{{route('contact')}}"> Contact </a>
           </li>

           {{-- <li class="floating_menu_text">
              <a href="{{route('upcoming.event')}}"> Coming Soon </a>
           </li> --}}
        </ul>
     </div>



     <!---==============floating menu=================-->

      <!-- Back to top with progress indicator-->
   <div class="prgoress_indicator">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
       <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
 </div>
 <!---========================== javascript ==========================-->
 <script type='text/javascript' src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
 <script type='text/javascript' src="{{asset('assets/js/bootstrap.min.js')}}"></script>
 <script type='text/javascript' src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
 <script type='text/javascript' src="{{asset('assets/js/jQuery.style.switcher.min.js')}}"></script>
 <script type='text/javascript' src="{{asset('assets/js/jquery.flexslider-min.js')}}"></script>
 <script type='text/javascript' src="{{asset('assets/js/color-scheme.js')}}"></script>
 <script type='text/javascript' src="{{asset('assets/js/owl.js')}}"></script>
 <script type='text/javascript' src="{{asset('assets/js/swiper.min.js')}}"></script>
 <script type='text/javascript' src="{{asset('assets/js/isotope.min.js')}}"></script>
 <script type='text/javascript' src="{{asset('assets/js/countdown.js')}}"></script>
 <script type='text/javascript' src="{{asset('assets/js/simpleParallax.min.js')}}"></script>
 <script type='text/javascript' src="{{asset('assets/js/appear.js')}}"></script>
 <script type='text/javascript' src="{{asset('assets/js/jquery.countTo.js')}}"></script>
 <script type='text/javascript' src="{{asset('assets/js/sharer.js')}}"></script>
 <script type='text/javascript' src="{{asset('assets/js/validation.js')}}"></script>
 <!-- map script -->
 <script src="{{asset("https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU")}}"></script>
 <script src="{{asset("assets/js/gmaps.js")}}"></script>
 <script src="{{asset("assets/js/map-helper.js")}}"></script>
 <!-- main-js -->
 <script type='text/javascript' src="{{asset('assets/js/creote-extension.js')}}"></script>
 <!---========================== javascript ==========================-->
</body>

<!-- Mirrored from themepanthers.com/html/creote-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 04:48:55 GMT -->
</html>
       </div>
    </div>
