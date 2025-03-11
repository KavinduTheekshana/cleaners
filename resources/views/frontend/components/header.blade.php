        <!-- header begin -->
        <header class="header-light {{ request()->is('/') ? 'transparent' : '' }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="{{route('/')}}">
                                        <img class="logo-main" src="{{ asset('frontend/images/logoweb.svg') }}" alt="" >
                                        <img class="logo-scroll" src="{{ asset('frontend/images/logoweb.svg') }}" alt="" >
                                        <img class="logo-mobile" src="{{ asset('frontend/images/logoweb.svg') }}" alt="" >
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item {{ request()->is('/') ? 'active' : '' }}" href="{{route('/')}}">Home</a></li>
                                    <li><a class="menu-item {{ request()->is('about') ? 'active' : '' }}" href="{{route('about')}}">About</a></li>
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <div class="h-phone xs-hide">
                                        <span>Need Help?</span>
                                        <h5>+44 7412 080888</h5>
                                    </div>
                                    <a href="{{route('booking')}}" class="btn-main">Book Service Now</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->