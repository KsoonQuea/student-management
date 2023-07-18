<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href=""><i data-feather="settings"></i></a>
        @if (Auth::user()->avatar)
            <img class="img-90 rounded-circle" src="{{ Auth::user()->avatar->getUrl('thumb') }}"
                 alt="{{ Auth::user()->name }}"/>
        @else
            <img class="img-90 rounded-circle" src="{{asset('assets/images/dashboard/1.png')}}"
                 alt="{{ Auth::user()->name }}"/>
        @endif
        <div class="badge-bottom"><span
                class="badge badge-primary">{{ Auth::user()?->roles?->first()?->name ?? '-' }}</span>
        </div>
        <a href="#">
            <h6 class="f-14 f-w-600 mt-3">{{ Auth::user()->name ?? '-' }}</h6>
        </a>
    </div>

    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav {{ routeActive('admin.home') }}" href="{{ route('admin.home') }}">
                            <i data-feather="home"></i><span>{{ trans('global.dashboard') }}</span>
                        </a>
                    </li>

                    <li class="">
                        <a class="nav-link link-nav" href="#">
                            <i data-feather="home"></i><span>Report</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="#">
                            <i data-feather="home"></i><span>Lecturer</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="#">
                            <i data-feather="home"></i><span>Student</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="#">
                            <i data-feather="home"></i><span>Programme</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="#">
                            <i data-feather="home"></i><span>Exam</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
