 <!----header----->
 <div class="header_area" id="header_contents">
    <div class="top_bar style_one">
       <div class="auto-container">
          <div class="row align-items-center">
             <div class="col-lg-12">
                <div class="top_inner">
                   <div class="left_side common_css">
                      <div class="contntent address">
                         <i class="icon-placeholder"></i>
                         <div class="text">
                            <small>Location</small>
                            <span>{{$info->address}}</span>
                         </div>
                      </div>
                      <div class="contntent email">
                         <i class="icon-email"></i>
                         <div class="text">
                            <small>Email</small>
                            <a href="mailto:sendmail@creote.com">{{$info->email}}</a>
                         </div>
                      </div>
                   </div>
                   <div class="right_side common_css">
                      <div class="contntent phone">
                         <i class="icon-phone-call"></i>
                         <div class="text">
                            <small>Phone</small>
                            <a href="tel:+9806071234">{{$info->phone}}</a>
                         </div>
                      </div>
                      <div class="contntent media">
                         <i class="icon-share"></i>
                         <div class="text">
                            <small>Share</small>
                            <a href="{{$info->facebook}}" target=_blank rel=nofollow>
                               <small class="fa fa-facebook"></small>
                            </a>
                            <a href="{{$info->twitter}}" target=_blank rel=nofollow>
                               <small class="fa fa-twitter"></small>
                            </a>
                            <a href="{{$info->linkdIn}}" target=_blank rel=nofollow>
                               <small class="fa fa-linkedin"></small>
                            </a>
                            <a href="{{$info->instragram}}" target=_blank rel=nofollow>
                               <small class="fa fa-instagram"></small>
                            </a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>


    <div class="crt_mobile_menu">
        <div class="menu-backdrop"></div>
        <nav class="menu-box">
           <div class="close-btn"><i class="icon-close"></i></div>
           {{-- <form role="search" method="get" action="#">
              <input type="search" class="search" placeholder="Search..." value="" name="s" title="Search" />
              <button type="submit" class="sch_btn"> <i class="icon-search"></i></button>
           </form> --}}
           <div class="menu-outer">
              <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
           </div>
        </nav>
     </div>



    <header class="header header_default style_one get_sticky_header">
       <div class="auto-container">
          <div class="row align-items-center">
             <div class="col-lg-2 col-md-9 col-sm-9 col-xs-9 logo_column">
                <div class="header_logo_box">
                   <a href="{{route('home')}}" class="logo navbar-brand" >
                    {{-- <h4> RIZAH ENTERPRISE</h4> --}}
                    <img src="{{asset('images/'.$info->logo)}}" alt="Creote Elementor" class="logo_default">
                      {{-- <img src="assets/images/logo-default.png" alt="Creote Elementor" class="logo_default">
                      <img src="assets/images/logo-default.png" alt="Creote Elementor" class="logo__sticky"> --}}
                   </a>
                </div>
             </div>
             <div class="col-lg-10 col-md-3 col-sm-3 col-xs-3 menu_column">
                <div class="navbar_togglers hamburger_menu">
                   <span class="line"></span>
                   <span class="line"></span>
                   <span class="line"></span>
                </div>
                <div class="header_content_collapse">
                   <div class="header_menu_box" >
                      <div class="navigation_menu" >
                         <ul id="myNavbar" class="navbar_nav"   >
                            <a href="{{route('home')}}" >
                               <span>Home</span>
                            </a>
                            <li
                               class="menu-item  menu-item-has-children dropdown dropdown_full position-static mega_menu nav-item" >

                            </li>
                            <li class="menu-item  menu-item-has-children dropdown nav-item">
                               <a href="{{route('about')}}" class="dropdown-toggle nav-link">
                                  <span>About</span>
                               </a>

                            </li>
                            <li class="menu-item  menu-item-has-children dropdown nav-item">
                               <a href="{{route('front.service')}}" class="dropdown-toggle nav-link">
                                  <span>Service</span>
                               </a>
                            <li class="menu-item  menu-item-has-children dropdown nav-item">
                               <a href="{{route('managment')}}" class="dropdown-toggle nav-link">
                                  <span>Our Team</span>
                               </a>

                            </li>
                            <li class="menu-item  menu-item-has-children dropdown nav-item">
                               <a href="{{route('contact')}}" class="dropdown-toggle nav-link">
                                  <span>Contact</span>
                               </a>

                            </li>
                            {{-- <li class="menu-item  menu-item-has-children dropdown nav-item">
                               <a href="{{route('upcoming.event')}}" class="dropdown-toggle nav-link">
                                  <span>Coming Soon</span>
                               </a>

                            </li> --}}
                         </ul>
                      </div>
                   </div>
                   <div class="header_right_content">
                      <ul>

                         <li class="header-button">
                            <a href="{{route('contact')}}" target="_blank" rel="" class="theme-btn one"> Get In Touch </a>
                         </li>
                         <li>
                            <button type="button" class="contact-toggler"><i class="icon-bar"></i></button>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </header>
 </div>
 <!----header end----->
