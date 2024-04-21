  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>Welcome to Dixie Academy Official Website</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index-2.html" class="logo">
                        <img src="{{asset('logo.png')}}" class="img-fluid" style="width:106px;height:106px" alt="">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav" style="text-align:center!important">
                        <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">

                        </x-nav-link>
                        <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                            {{ __('Home') }}
                        </x-nav-link>
                        <x-nav-link href="{{ route('courses') }}" :active="request()->routeIs('courses')">
                            {{ __('Courses') }}
                        </x-nav-link>
                        <x-nav-link href="{{ route('resources') }}" :active="request()->routeIs('resources')">
                            {{ __('Resources') }}
                        </x-nav-link>
                        <x-nav-link href="{{ route('blog') }}" :active="request()->routeIs('blog')">
                            {{ __('Blog') }}
                        </x-nav-link>
                        <li class="has-sub">
                            <a href="javascript:void(0)">Mentorship</a>
                            <ul class="sub-menu">
                              <x-nav-link href="{{ route('noideaforex') }}" :active="request()->routeIs('noideaforex')">
                                  {{ __('No idea of forex') }}
                              </x-nav-link>
                              <x-nav-link href="{{ route('profitable', ['profitable' => 1]) }}" :active="request()->routeIs('profitable')">
                                  {{ __('Want to be profitable') }}
                              </x-nav-link>

                            </ul>
                        </li>
                        <x-nav-link href="{{ route('about', ['id' => 3]) }}" :active="request()->routeIs('about', ['id' => 3])">
                            {{ __('About Dixie') }}
                        </x-nav-link>



                          <x-nav-link href="{{ route('home') }}#contact" :active="request()->routeIs('home')">
                            {{ __('Contact Us') }}
                        </x-nav-link>

                        @guest
                        <x-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                            {{ __('Login') }}
                        </x-nav-link>

                        <x-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                            {{ __('Register') }}
                        </x-nav-link>

                          @endguest

                          @can('view-admin', App\Models\User::class)
                          <x-nav-link :navigate='false' href="{{ route('filament.1.auth.login') }}" :active="request()->routeIs('filament.1.auth.login')">
                            {{ __('Admin') }}
                        </x-nav-link>
                        @endcan

                          @auth
                          <div class="ms-3 relative" style="align-item:center;text-align:center;margin-top:-0px">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                        </button>

                                    @else
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">

                                              {{ Auth::user()->name }}



                                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                </svg>
                                            </button>
                                        </span>
                                    @endif
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Account') }}
                                    </div>

                                    <x-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </x-dropdown-link>
                                    @endif

                                    <div class="border-t border-gray-200"></div>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <x-dropdown-link href="{{ route('logout') }}"
                                                 @click.prevent="$root.submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                        @endauth

                      </ul>
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->
