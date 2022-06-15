<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Marwan Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
   
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}

    

    <style>
      *{
        font-family: 'Tajawal', sans-serif;
      }
    </style>
  </head>/
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header dir="ltr" class="app-header"><a class="app-header__logo" href="{{asset('index.html')}}">مروان</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">لديك 4 اشعارات</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">غير فعال</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">غير فعال</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">غير فعال</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">غير فعال</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">عرض الكل</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> الاعدادات</a></li>
            <form method="POST" action="{{-- route('logout') --}}">
              @csrf

              {{-- <x-dropdown-link :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
                 <button class="dropdown-item"><i class="fa fa-sign-out fa-lg"></i> {{ __('تسجيل الخروج') }} </button>
              </x-dropdown-link> --}}
          </form>
            
            
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar" dir="ltr"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
       
        <img style="height: 60px; width:60px ;" class="img-thumbnail rounded-circle" src="{{--asset('storage/'.Auth::user()->image)--}}">
        
        <div>
          <p class="app-sidebar__user-name">{{Auth::user()->name ?? 'Not User'}}</p>
          <p class="app-sidebar__user-designation">{{Auth::user()->email ?? 'Not User'}}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{--route('index')--}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">لوحة التحكم</span></a></li>
       {{-- @can('categories.view-any') --}}
       <li><a class="app-menu__item" href="{{route('categories.index')}}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">الاقسام</span></a></li>
       {{-- @endcan --}}
       {{-- @can('post.view-any') --}}
       <li><a class="app-menu__item" href="{{route('restaurants.index')}}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">المطاعم</span></a></li>
       {{-- @endcan --}}
       {{-- @can('ads.view-any') --}}
       <li><a class="app-menu__item" href="{{route('meals.index')}}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">الوجبات</span></a></li>
       {{-- @endcan --}}
       {{-- @can('roles.view-any') --}}
       <li><a class="app-menu__item" href="{{route('offers.index')}}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">العروض الحالية</span></a></li>
       {{-- @endcan --}}
       {{-- @can('users.view-any') --}}
       <li><a class="app-menu__item" href="('users.index')"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">المستخدمين</span></a></li>
       {{-- @endcan --}}
       {{-- @can('comments.view-any') --}}
       <li><a class="app-menu__item" href="('comments.index')"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">اراء المستخدمين</span></a></li>
       {{-- @endcan --}}
       {{-- @can('comments.view-any') --}}
       {{-- @endcan --}}
      


        
       
      </ul>
    </aside>
    <main class="app-content">
      @yield('content') 
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{asset('js/plugins/pace.min.js')}}"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{asset('js/plugins/chart.js')}}"></script>
    @yield('scripts')
  </body>
</html>