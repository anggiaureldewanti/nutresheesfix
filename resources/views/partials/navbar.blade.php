 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>NUTRISHEESH<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/index">Home</a></li>
          <li><a href="/index#about">About</a></li>
          <li><a href="/kandungan">Kandungan Gizi</a></li>
          <li><a href="/index#resep">Resep</a></li>
          <li><a href="/index#nutrisionist">Nutritionist</a></li>
          <li><a href="/index#faq">FAQ</a></li>
          <li class="dropdown"><a href="#"><span>Menu</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                  @guest
                  @if (Route::has('login'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                  @endif
    
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else

              <li><a href="/histori-laporanmu">Histori Laporanmu</a></li>
          <hr>
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                       {{ __('Logout') }}
                      </a>
    
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
              </li>
            </ul>
        </ul>
      </nav><!-- .navbar -->
      
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->