
<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">{{ env('APP_NAME') }}</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                    <i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item @yield('dashboard')">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>
            <li class=" navigation-header"><span>Apps</span></li>
            <li class=" nav-item @yield('categories')">
                <a href="{{ route('admin.categories.index') }}">
                    <i class="feather icon-package"></i>
                    <span class="menu-title" data-i18n="Category">Categories</span>
                </a>
            </li>
            <li class=" nav-item @yield('project')">
                <a href="{{ route('admin.project.index') }}">
                <a href="{{ route('admin.project.index') }}">
                    <i class="feather icon-package"></i>
                    <span class="menu-title" data-i18n="Project">Projects</span>
                </a>
            </li>

        </ul>
    </div>
</div>
<!-- END: Main Menu-->
