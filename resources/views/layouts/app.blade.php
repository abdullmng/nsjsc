<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>{{ config('app.name') }} - @yield('title')</title>

    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('nsjsc_logo.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('nsjsc_logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('nsjsc_logo.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="/assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="/assets/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css">


    <!-- Codebase framework -->
    <link rel="stylesheet" id="css-main" href="/assets/css/codebase.min.css">
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="/assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
    <style>
        table {
            white-space: nowrap;
        }
    </style>
</head>

<body>
    <!-- Page Container -->
    <!--
      Available classes for #page-container:

      GENERIC

        'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                    - Theme helper buttons [data-toggle="theme"],
                                                    - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                    - ..and/or Codebase.layout('dark_mode_[on/off/toggle]')

      SIDEBAR & SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

      HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header

      HEADER STYLE

        ''                                          Classic Header style if no class is added
        'page-header-modern'                        Modern Header style
        'page-header-dark'                          Dark themed Header (works only with classic Header style)
        'page-header-glass'                         Light themed Header with transparency by default
                                                    (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
        'page-header-glass page-header-dark'        Dark themed Header with transparency by default
                                                    (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

      MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

      DARK MODE

        'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
        <!-- Side Overlay-->
        {{-- <aside id="side-overlay">
        <!-- Side Header -->
        <div class="content-header">
          <!-- User Avatar -->
          <a class="img-link me-2" href="javascript:void">
            <img class="img-avatar img-avatar32" src="/assets/media/avatars/avatar15.jpg" alt="">
          </a>
          <!-- END User Avatar -->

          <!-- User Info -->
          <a class="link-fx text-body-color-dark fw-semibold fs-sm" href="javascript:void">
            {{ auth()->user()->full_name }}
          </a>
          <!-- END User Info -->

          <!-- Close Side Overlay -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-sm btn-alt-danger ms-auto" data-toggle="layout" data-action="side_overlay_close">
            <i class="fa fa-fw fa-times"></i>
          </button>
          <!-- END Close Side Overlay -->
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
          <!-- Search -->
          <div class="block pull-t pull-x">
            <div class="block-content block-content-full block-content-sm bg-body-light">
              <form action="be_pages_generic_search.html" method="POST">
                <div class="input-group">
                  <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                  <button type="submit" class="btn btn-secondary">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
          <!-- END Search -->

          <!-- Mini Stats -->
          <div class="block pull-x">
            <div class="block-content block-content-full block-content-sm bg-body-light">
              <div class="row text-center">
                <div class="col-4">
                  <div class="fs-sm fw-semibold text-uppercase text-muted">Clients</div>
                  <div class="fs-4">460</div>
                </div>
                <div class="col-4">
                  <div class="fs-sm fw-semibold text-uppercase text-muted">Sales</div>
                  <div class="fs-4">728</div>
                </div>
                <div class="col-4">
                  <div class="fs-sm fw-semibold text-uppercase text-muted">Earnings</div>
                  <div class="fs-4">$7,860</div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Mini Stats -->

          <!-- Friends -->
          <div class="block pull-x">
            <div class="block-header bg-body-light">
              <h3 class="block-title">
                <i class="fa fa-fw fa-users opacity-50 me-1"></i> Friends
              </h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
              </div>
            </div>
            <div class="block-content">
              <ul class="nav-users">
                <li>
                  <a href="be_pages_generic_profile.html">
                    <img class="img-avatar" src="/assets/media/avatars/avatar5.jpg" alt="">
                    <i class="fa fa-circle text-success"></i>
                    <div>Carol Ray</div>
                    <div class="fw-normal fs-xs text-muted">Photographer</div>
                  </a>
                </li>
                <li>
                  <a href="be_pages_generic_profile.html">
                    <img class="img-avatar" src="/assets/media/avatars/avatar11.jpg" alt="">
                    <i class="fa fa-circle text-success"></i>
                    <div>Brian Stevens</div>
                    <div class="fw-normal fs-xs text-muted">Web Designer</div>
                  </a>
                </li>
                <li>
                  <a href="be_pages_generic_profile.html">
                    <img class="img-avatar" src="/assets/media/avatars/avatar3.jpg" alt="">
                    <i class="fa fa-circle text-warning"></i>
                    <div>Barbara Scott</div>
                    <div class="fw-normal fs-xs text-muted">UI Designer</div>
                  </a>
                </li>
                <li>
                  <a href="be_pages_generic_profile.html">
                    <img class="img-avatar" src="/assets/media/avatars/avatar10.jpg" alt="">
                    <div>Adam McCoy</div>
                    <div class="fw-normal fs-xs text-muted">Copywriter</div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- END Friends -->

          <!-- Activity -->
          <div class="block pull-x">
            <div class="block-header bg-body-light">
              <h3 class="block-title">
                <i class="far fa-fw fa-clock opacity-50 me-1"></i> Activity
              </h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
              </div>
            </div>
            <div class="block-content">
              <ul class="list list-activity mb-0">
                <li>
                  <i class="si si-wallet text-success"></i>
                  <div class="fs-sm fw-semibold">+$29 New sale</div>
                  <div class="fs-sm">
                    <a href="javascript:void(0)">Admin Template</a>
                  </div>
                  <div class="fs-xs text-muted">5 min ago</div>
                </li>
                <li>
                  <i class="si si-close text-danger"></i>
                  <div class="fs-sm fw-semibold">Project removed</div>
                  <div class="fs-sm">
                    <a href="javascript:void(0)">Best Icon Set</a>
                  </div>
                  <div class="fs-xs text-muted">26 min ago</div>
                </li>
                <li>
                  <i class="si si-pencil text-info"></i>
                  <div class="fs-sm fw-semibold">You edited the file</div>
                  <div class="fs-sm">
                    <a href="javascript:void(0)">
                      <i class="fa fa-file-alt"></i> Docs.doc
                    </a>
                  </div>
                  <div class="fs-xs text-muted">3 hours ago</div>
                </li>
                <li>
                  <i class="si si-plus text-success"></i>
                  <div class="fs-sm fw-semibold">New user</div>
                  <div class="fs-sm">
                    <a href="javascript:void(0)">StudioWeb - View Profile</a>
                  </div>
                  <div class="fs-xs text-muted">5 hours ago</div>
                </li>
                <li>
                  <i class="si si-wrench text-warning"></i>
                  <div class="fs-sm fw-semibold">App v5.5 is available</div>
                  <div class="fs-sm">
                    <a href="javascript:void(0)">Update now</a>
                  </div>
                  <div class="fs-xs text-muted">8 hours ago</div>
                </li>
                <li>
                  <i class="si si-user-follow text-pulse"></i>
                  <div class="fs-sm fw-semibold">+1 Friend Request</div>
                  <div class="fs-sm">
                    <a href="javascript:void(0)">Accept</a>
                  </div>
                  <div class="fs-xs text-muted">1 day ago</div>
                </li>
              </ul>
            </div>
          </div>
          <!-- END Activity -->

          <!-- Profile -->
          <div class="block pull-x">
            <div class="block-header bg-body-light">
              <h3 class="block-title">
                <i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i> Profile
              </h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
              </div>
            </div>
            <div class="block-content block-content-full">
              <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                <div class="mb-3">
                  <label class="form-label" for="side-overlay-profile-name">Name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="side-overlay-profile-name" name="side-overlay-profile-name" placeholder="Your name.." value="John Smith">
                    <span class="input-group-text">
                      <i class="fa fa-user"></i>
                    </span>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="side-overlay-profile-email">Email</label>
                  <div class="input-group">
                    <input type="email" class="form-control" id="side-overlay-profile-email" name="side-overlay-profile-email" placeholder="Your email.." value="john.smith@example.com">
                    <span class="input-group-text">
                      <i class="fa fa-envelope"></i>
                    </span>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="side-overlay-profile-password">New Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="side-overlay-profile-password" name="side-overlay-profile-password" placeholder="New Password..">
                    <span class="input-group-text">
                      <i class="fa fa-asterisk"></i>
                    </span>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="side-overlay-profile-password-confirm">Confirm New Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="side-overlay-profile-password-confirm" name="side-overlay-profile-password-confirm" placeholder="Confirm New Password..">
                    <span class="input-group-text">
                      <i class="fa fa-asterisk"></i>
                    </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <button type="submit" class="btn btn-alt-primary">
                      <i class="fa fa-sync opacity-50 me-1"></i> Update
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- END Profile -->

          <!-- Settings -->
          <div class="block pull-x">
            <div class="block-header bg-body-light">
              <h3 class="block-title">
                <i class="fa fa-fw fa-wrench opacity-50 me-1"></i> Settings
              </h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
              </div>
            </div>
            <div class="block-content block-content-full">
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-status" name="side-overlay-settings-security-status" checked>
                  <label class="form-check-label fw-medium" for="side-overlay-settings-security-status">Online Status</label>
                  <div class="fs-sm text-muted">Show your status to all</div>
                </div>
              </div>
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-verify" name="side-overlay-settings-security-verify">
                  <label class="form-check-label fw-medium" for="side-overlay-settings-security-verify">Verify on Login</label>
                  <div class="fs-sm text-muted">Most secure option</div>
                </div>
              </div>
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-updates" name="side-overlay-settings-security-updates" checked>
                  <label class="form-check-label fw-medium" for="side-overlay-settings-security-updates">Auto Updates</label>
                  <div class="fs-sm text-muted">Keep app updated</div>
                </div>
              </div>
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-notifications" name="side-overlay-settings-security-notifications" checked>
                  <label class="form-check-label fw-medium" for="side-overlay-settings-security-notifications">Notifications</label>
                  <div class="fs-sm text-muted">For every transaction</div>
                </div>
              </div>
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-api" name="side-overlay-settings-security-api" checked>
                  <label class="form-check-label fw-medium" for="side-overlay-settings-security-api">API Access</label>
                  <div class="fs-sm text-muted">Enable access from third party apps</div>
                </div>
              </div>
              <div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-2fa" name="side-overlay-settings-security-2fa">
                  <label class="form-check-label fw-medium" for="side-overlay-settings-security-2fa">Two Factor Auth</label>
                  <div class="fs-sm text-muted">Using an authenticator</div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Settings -->
        </div>
        <!-- END Side Content -->
      </aside> --}}
        <!-- END Side Overlay -->

        <!-- Sidebar -->
        <!--
        Helper classes

        Adding .smini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding .smini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
          If you would like to disable the transition, just add the .no-transition along with one of the previous 2 classes

        Adding .smini-hidden to an element will hide it when the sidebar is in mini mode
        Adding .smini-visible to an element will show it only when the sidebar is in mini mode
        Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
      -->
        <nav id="sidebar">
            <!-- Sidebar Content -->
            <div class="sidebar-content">
                <!-- Side Header -->
                <div class="content-header justify-content-lg-center">
                    <!-- Logo -->
                    <div>
                        <span class="smini-visible fw-bold tracking-wide fs-lg">
                            {{ env('APP_SHORT_NAME') }}
                        </span>
                        <a class="link-fx fw-bold tracking-wide mx-auto" href="/dashboard">
                            <span class="smini-hidden">
                                {{-- <i class="fa fa-fire text-primary"></i> --}}
                                {{ env('APP_NAME') }}
                            </span>
                        </a>
                    </div>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div>
                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout"
                            data-action="sidebar_close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Options -->
                </div>
                <!-- END Side Header -->

                <!-- Sidebar Scrolling -->
                <div class="js-sidebar-scroll">
                    <!-- Side User -->
                    <div class="content-side content-side-user px-0 py-0">
                        <!-- Visible only in mini mode -->
                        <div class="smini-visible-block animated fadeIn px-3">
                            <img class="img-avatar img-avatar32" src="/assets/media/avatars/avatar15.jpg"
                                alt="">
                        </div>
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        <div class="smini-hidden text-center mx-auto">
                            {{-- <a class="img-link" href="be_pages_generic_profile.html">
                  <img class="img-avatar" src="/assets/media/avatars/avatar15.jpg" alt="">
                </a> --}}
                            <p class="lead fs-sm mb-0">{{ auth()->user()->office?->name }} <br>
                                {{ ucwords(auth()->user()->rank) }}</p>
                            <ul class="list-inline mt-3 mb-0">
                                <li class="list-inline-item">
                                    <a class="link-fx text-dual fs-sm fw-semibold text-uppercase"
                                        href="/dashboard">{{ auth()->user()->surname }}</a>
                                </li>
                                <li class="list-inline-item">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <a class="link-fx text-dual" data-toggle="layout" data-action="dark_mode_toggle"
                                        href="javascript:void(0)" id="dark-toggle">
                                        <i class="fa fa-moon"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="link-fx text-dual" href="/logout">
                                        <i class="fa fa-sign-out-alt"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Visible only in normal mode -->
                    </div>
                    <!-- END Side User -->

                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li class="nav-main-item">
                                <a class="nav-main-link {{ request()->routeIs('user.dashboard') ? 'active' : '' }}"
                                    href="/dashboard">
                                    <i class="nav-main-link-icon fa fa-house-user"></i>
                                    <span class="nav-main-link-name">Dashboard</span>
                                </a>
                            </li>
                            @if (auth()->user()->role == 'admin')
                                <li class="nav-main-item">
                                    <a class="nav-main-link {{ request()->routeIs('offices') ? 'active' : '' }}"
                                        href="/offices">
                                        <i class="nav-main-link-icon fa fa-building"></i>
                                        <span class="nav-main-link-name">Manage Offices</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link {{ request()->routeIs('users') ? 'active' : '' }}"
                                        href="/users">
                                        <i class="nav-main-link-icon fa fa-users"></i>
                                        <span class="nav-main-link-name">Manage Users</span>
                                    </a>
                                </li>
                            @endif
                            <li class="nav-main-item">
                                <a class="nav-main-link {{ request()->routeIs('grade_levels.index') ? 'active' : '' }}"
                                    href="{{ route('grade_levels.index') }}">
                                    <i class="nav-main-link-icon fas fa-arrow-up-wide-short"></i>
                                    <span class="nav-main-link-name">Grade Levels</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link {{ request()->routeIs('steps.index') ? 'active' : '' }}"
                                    href="{{ route('steps.index') }}">
                                    <i class="nav-main-link-icon fas fa-arrow-up-right-dots"></i>
                                    <span class="nav-main-link-name">Steps</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link {{ request()->routeIs('files') ? 'active' : '' }}"
                                    href="/documents">
                                    <i class="nav-main-link-icon fa fa-upload"></i>
                                    <span class="nav-main-link-name">My Documents</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link {{ request()->routeIs('transfer') ? 'active' : '' }}"
                                    href="/transfer">
                                    <i class="nav-main-link-icon fa fa-file-pdf"></i>
                                    <span class="nav-main-link-name">Received Documents</span>
                                </a>
                            </li>
                            {{-- <li class="nav-main-item">
                    <a class="nav-main-link" href="/received">
                        <i class="nav-main-link-icon fa fa-file-pdf"></i>
                        <span class="nav-main-link-name">Received Documents</span>
                    </a>
                </li> --}}
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="/logout">
                                    <i class="nav-main-link-icon fa fa-sign-out-alt"></i>
                                    <span class="nav-main-link-name">Sign Out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- END Sidebar Scrolling -->
            </div>
            <!-- Sidebar Content -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="space-x-1">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout"
                        data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->


                    <!-- Color Themes -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-themes-dropdown"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-fw fa-wrench"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg p-0" aria-labelledby="page-header-themes-dropdown">
                            <div class="p-3 bg-body-light rounded-top">
                                <h5 class="h6 text-center mb-0">
                                    Color Themes
                                </h5>
                            </div>
                            <div class="p-3">
                                <div class="row g-0 text-center">
                                    <div class="col-2">
                                        <a class="text-default theme-toggle" data-toggle="theme" data-theme="default"
                                            href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <a class="text-elegance theme-toggle" data-toggle="theme"
                                            data-theme="/assets/css/themes/elegance.min.css"
                                            href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <a class="text-pulse theme-toggle" data-toggle="theme"
                                            data-theme="/assets/css/themes/pulse.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <a class="text-flat theme-toggle" data-toggle="theme"
                                            data-theme="/assets/css/themes/flat.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <a class="text-corporate theme-toggle" data-toggle="theme"
                                            data-theme="/assets/css/themes/corporate.min.css"
                                            href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <a class="text-earth theme-toggle" data-toggle="theme"
                                            data-theme="/assets/css/themes/earth.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END Color Themes -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="space-x-1">
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user d-sm-none"></i>
                            <span class="d-none d-sm-inline-block fw-semibold">{{ auth()->user()->surname }}</span>
                            <i class="fa fa-angle-down opacity-50 ms-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0"
                            aria-labelledby="page-header-user-dropdown">
                            <div class="px-2 py-3 bg-body-light rounded-top">
                                <h5 class="h6 text-center mb-0">
                                    {{ auth()->user()->full_name }}
                                </h5>
                            </div>
                            <div class="p-2">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1"
                                    href="/logout">
                                    <span>Sign Out</span>
                                    <i class="fa fa-fw fa-sign-out-alt opacity-25"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END User Dropdown -->
                    <!-- Toggle Side Overlay -->

                    <!-- END Toggle Side Overlay -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Loader -->
            <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-primary">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="far fa-sun fa-spin text-white"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="content">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>

                        {{ session('success') }}
                    </div>
                @endif
                @foreach ($errors->all() as $err)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>

                        {{ $err }}
                    </div>
                @endforeach
                @yield('content')
            </div>
            <!-- END Page Content -->

            @yield('modals')
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer">
            <div class="content py-3">
                <div class="row fs-sm">
                    <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">

                    </div>
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                        <a class="fw-semibold" href="javascript:void">{{ env('APP_NAME') }}</a> &copy; <span
                            data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->


    <!--
        Codebase JS

        Core libraries and functionality
        webpack is putting everything together at /assets/_js/main/app.js
    -->
    <script src="/assets/js/codebase.app.min.js"></script>

    <!-- jQuery (required for DataTables plugin) -->
    <script src="/assets/js/lib/jquery.min.js"></script>

    <script src="/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="/assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="/assets/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
    <script src="/assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="/assets/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
    <script src="/assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
    <script src="/assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
    <script src="/assets/js/plugins/datatables-buttons/buttons.print.min.js"></script>
    <script src="/assets/js/plugins/datatables-buttons/buttons.html5.min.js"></script>

    <!-- Page JS Code -->
    <script src="/assets/js/pages/be_tables_datatables.min.js"></script>
    @yield('scripts')
    <!-- Page JS Code -->
    <script src="/assets/js/pages/be_pages_dashboard.min.js"></script>
    @stack('scripts')
    <script>
        setTimeout(() => {
            $('.dataTables_processing').hide()
        }, 2000);
        $('#dark-toggle').on('click', function() {
            if (localStorage.getItem('darkMode') == 'true') {
                localStorage.setItem('darkMode', 'false')
            } else {
                localStorage.setItem('darkMode', 'true')
            }
        })



        $('body').on('click', '.theme-toggle', function() {
            let color = $(this).data('theme')
            localStorage.setItem('theme', color)
        })

        $(window).on('load', function() {
            let theme = localStorage.getItem('theme')
            if (theme != '' && theme != 'defaullt') {
                $('head').append(`<link id="css-theme" rel="stylesheet" href="${theme}">`)
            }

            let darkMode = localStorage.getItem('darkMode')
            if (darkMode == 'true') {
                $('#page-container').addClass('sidebar-dark')
                $('#page-container').addClass('page-header-dark')
                $('#page-container').addClass('dark-mode')
            } else {
                $('#page-container').removeClass('sidebar-dark')
                $('#page-container').removeClass('page-header-dark')
                $('#page-container').removeClass('dark-mode')
            }
        })
    </script>

</body>

</html>
