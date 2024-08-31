<header class="header-area">
    <!-- Navbar Area -->
    <div class="oneMusic-main-menu">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="oneMusicNav">
            <!-- Nav brand -->
            <a href="{{route ('home')}}" class="nav-brand"><img src="{{asset ('clients/img/core-img/logo.png')}}" alt="logo"></a> <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler"></div><!-- Menu -->
            <div class="classy-menu">
              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"></div>
              </div><!-- Nav Start -->
              <div class="classynav">
                @if(Auth::check())
                <ul>
                  <li>
                    <a href="{{route ('home')}}">Home</a>
                  </li>
                  <li>
                    <a href="{{route ('playlists.index')}}">Playlists</a>
                  </li>
                  
                  <li>
                    <a href="{{route ('event')}}">Events</a>
                  </li>
                  <li>
                    <a href="{{route ('blog')}}">News</a>
                  </li>
                  <li>
                    <a href="{{route ('contact')}}">Contact</a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="icon-user-1"></i>{{Auth::user()->name}}
                    </a>
                    <ul class="dropdown">
                      <li>
                        <a href="{{route ('home')}}">Home</a>
                      </li>
                      <li>
                        <a href="{{route ('albums-store')}}">Albums</a>
                      </li>
                      <li>
                        <a href="{{route ('event')}}">Events</a>
                      </li>
                      <li>
                        <a href="{{route ('blog')}}">News</a>
                      </li>
                      <li>
                        <a href="{{route ('contact')}}">Contact</a>
                      </li>
                      <li>
                        <a href="{{route ('elements')}}">Elements</a>
                      </li>
                      <li>
                        <a href="{{route ('logout')}}">Logout</a>
                      </li>
                      {{-- <li>
                        <a href="#">Dropdown</a>
                        <ul class="dropdown">
                          <li>
                            <a href="#">Even Dropdown</a>
                          </li>
                          <li>
                            <a href="#">Even Dropdown</a>
                          </li>
                          <li>
                            <a href="#">Even Dropdown</a>
                          </li>
                          <li>
                            <a href="#">Even Dropdown</a>
                            <ul class="dropdown">
                              <li>
                                <a href="#">Deeply Dropdown</a>
                              </li>
                              <li>
                                <a href="#">Deeply Dropdown</a>
                              </li>
                              <li>
                                <a href="#">Deeply Dropdown</a>
                              </li>
                              <li>
                                <a href="#">Deeply Dropdown</a>
                              </li>
                              <li>
                                <a href="#">Deeply Dropdown</a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="#">Even Dropdown</a>
                          </li>
                        </ul>
                      </li> --}}
                    </ul>
                  </li>
                </ul><!-- Login/Register & Cart Button -->
                    
                @else
                <div class="login-register-cart-button d-flex align-items-center">
                  <!-- Login/Register -->
                  <div class="login-register-btn mr-50">
                    <a href="{{route ('login')}}" id="loginBtn">Login </a>
                  </div>
                  <!-- Cart Button -->
                  <div class="login-register-btn mr-50">
                    <a href="{{route ('register')}}" id="registerBtn"> Register</a>
                  </div>
                  {{-- <div class="cart-btn">
                    <p><span class="quantity">1</span></p>
                  </div> --}}
                </div>
                @endif
                
              </div><!-- Nav End -->
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>