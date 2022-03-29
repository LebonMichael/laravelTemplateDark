<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}"/>
</head>
<body>
<div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i
                            class="mdi mdi-home me-3 text-white"></i></a>
                    <button id="bannerClose" class="btn border-0 p-0">
                        <i class="mdi mdi-close text-white mr-0"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <a class="navbar-brand brand-logo" href="{{ route('homebackend') }}"><img
                    src="{{asset('assets/images/logo.svg')}}" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="{{ route('homebackend') }}"><img
                    src="{{asset('assets/images/logo-mini.svg')}}"
                    alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <div class="search-field d-none d-md-block">
                <form class="d-flex align-items-center h-100" action="#">
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                            <i class="input-group-text border-0 mdi mdi-magnify"></i>
                        </div>
                        <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                    </div>
                </form>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        <div class="nav-profile-img">
                            <img height="62" width="auto" src="{{$mainUser->photo ? asset($mainUser->photo->file) : 'https://via.placeholder.com/62'}}" alt="{{$mainUser->name}}">
                            <span class="availability-status online"></span>
                        </div>
                        <div class="nav-profile-text">
                            <p class="mb-1">{{ Auth::user()->name }}</p>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout me-2 text-primary"></i>{{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="nav-item d-none d-lg-block full-screen-link">
                    <a class="nav-link">
                        <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-email-outline"></i>
                        <span class="count-symbol bg-warning"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                         aria-labelledby="messageDropdown">
                        <h6 class="p-3 mb-0">Messages</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                            </div>
                            <div
                                class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a
                                    message</h6>
                                <p class="text-gray mb-0"> 1 Minutes ago </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                            </div>
                            <div
                                class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a
                                    message</h6>
                                <p class="text-gray mb-0"> 15 Minutes ago </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                            </div>
                            <div
                                class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture
                                    updated</h6>
                                <p class="text-gray mb-0"> 18 Minutes ago </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                       data-bs-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="count-symbol bg-danger"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                         aria-labelledby="notificationDropdown">
                        <h6 class="p-3 mb-0">Notifications</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="mdi mdi-calendar"></i>
                                </div>
                            </div>
                            <div
                                class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                                <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="mdi mdi-cog"></i>
                                </div>
                            </div>
                            <div
                                class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                                <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="mdi mdi-link-variant"></i>
                                </div>
                            </div>
                            <div
                                class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                                <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                    </div>
                </li>
                <li class="nav-item nav-logout d-none d-lg-block">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
                <li class="nav-item nav-settings d-none d-lg-block">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-format-line-spacing"></i>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="nav-profile-image">
                            <img height="62" width="auto" src="{{$mainUser->photo ? asset($mainUser->photo->file) : 'https://via.placeholder.com/62'}}" alt="{{$mainUser->name}}">
                            <span class="login-status online"></span>
                            <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
                            <span class="text-secondary text-small">
                                @foreach($mainUser->roles as $role)
                                    <span class="badge badge-pill badge-info">{{$role->name}}</span>
                                @endforeach
                            </span>
                        </div>
                        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <span class="menu-title">Dashboard</span>
                        <i class="mdi mdi-home menu-icon"></i>
                    </a>
                </li>


                <!--start links to users-->
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-toggle="collapse" href="#users" aria-expanded="true"
                       aria-controls="users-layouts">
                        <span class="menu-title">Users</span>
                        <i class="menu-arrow"></i>
                        <i class="fa fa-group"></i>
                    </a>
                    <div class="collapse" id="users">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('users.index')}}">All Users</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('users.create')}}">Create User</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--end link users-->

                <!--start links to posts-->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#posts" aria-expanded="true"
                       aria-controls="posts-layouts">
                        <span class="menu-title">Posts</span>
                        <i class="menu-arrow"></i>
                        <i class="fa fa-pencil-square-o"></i>
                    </a>
                    <div class="collapse" id="posts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('posts.index')}}">All Posts</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('posts.create')}}">Create Post</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--end link posts-->

                <!--start links to categories-->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#categories" aria-expanded="false"
                       aria-controls="categories">
                        <span class="menu-title">Categories</span>
                        <i class="menu-arrow"></i>
                        <i class="fa fa-navicon"></i>
                    </a>
                    <div class="collapse" id="categories">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('postcategories.index')}}">All Categories</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('postcategories.create')}}">Create Category</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--end links to categories-->

                <!--start links to categories-->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#comments" aria-expanded="false"
                       aria-controls="comments">
                        <span class="menu-title">Comments</span>
                        <i class="menu-arrow"></i>
                        <i class="fa fa-navicon"></i>
                    </a>
                    <div class="collapse" id="comments">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('comments.index')}}">All Comments</a></li>
                        </ul>
                    </div>
                </li>
                <!--end links to categories-->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#apps" aria-expanded="false"
                       aria-controls="apps">
                        <span class="menu-title">Apps</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-cart-arrow-down menu-icon"></i>
                    </a>
                    <div class="collapse" id="apps">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/apps/kanban-board.html">kanban-board</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/apps/todo.html">Todo List</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/apps/tickets.html">Tickets</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/apps/chats.html">Chats</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/samples/widgets.html">
                        <span class="menu-title">Widgets</span>
                        <i class="mdi mdi-forum menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-layouts" aria-expanded="false"
                       aria-controls="sidebar-layouts">
                        <span class="menu-title">Sidebar Layouts</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-playlist-play menu-icon"></i>
                    </a>
                    <div class="collapse" id="sidebar-layouts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="pages/layout/compact-menu.html">Compact
                                    menu</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/layout/sidebar-collapsed.html">Icon
                                    menu</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/layout/sidebar-hidden.html">Sidebar
                                    Hidden</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">Sidebar
                                    Overlay</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar
                                    Fixed</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                       aria-controls="ui-basic">
                        <span class="menu-title">Basic UI Elements</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/ui-features/accordions.html">Accordions</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/badges.html">Badges</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/modals.html">Modals</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/progress.html">Progress
                                    bar</a></li>
                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/ui-features/pagination.html">Pagination</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/ui-features/typography.html">Typography</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/tooltips.html">Tooltip</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-advanced" aria-expanded="false"
                       aria-controls="ui-advanced">
                        <span class="menu-title">Advanced UI</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-cards-variant menu-icon"></i>
                    </a>
                    <div class="collapse" id="ui-advanced">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/ui-features/clipboard.html">Clipboard</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/context-menu.html">Context
                                    menu</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/slider.html">Slider</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/loaders.html">Loaders</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/treeview.html">Tree
                                    View</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/popups.html">
                        <span class="menu-title">Popups</span>
                        <i class="mdi mdi-forum menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/notifications.html">
                        <span class="menu-title">Notifications</span>
                        <i class="mdi mdi-bell-ring menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false"
                       aria-controls="icons">
                        <span class="menu-title">Icons</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-contacts menu-icon"></i>
                    </a>
                    <div class="collapse" id="icons">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="pages/icons/mdi.html">Material</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/icons/font-awesome.html">Font
                                    Awesome</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/icons/simple-line-icon.html">Simple
                                    line icons</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/icons/themify.html">Themify icons</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#forms" aria-expanded="false"
                       aria-controls="forms">
                        <span class="menu-title">Forms</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Form
                                    Elements</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced
                                    Forms</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/forms/text_editor.html">
                        <span class="menu-title">Text editors</span>
                        <i class="mdi mdi-file-document menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/forms/code_editor.html">
                        <span class="menu-title">Code editors</span>
                        <i class="mdi mdi-code-not-equal-variant menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false"
                       aria-controls="charts">
                        <span class="menu-title">Charts</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-chart-bar menu-icon"></i>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/google-charts.html">Google
                                    charts</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/sparkline.html">Sparkline js</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/c3.html">C3 charts</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/chartist.html">Chartist</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false"
                       aria-controls="tables">
                        <span class="menu-title">Tables</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-table-large menu-icon"></i>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="pages/tables/basic-table.html">Basic
                                    table</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/tables/data-table.html">Data table</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/tables/sortable-table.html">Sortable
                                    table</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#maps" aria-expanded="false"
                       aria-controls="maps">
                        <span class="menu-title">Maps</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-map-marker-radius menu-icon"></i>
                    </a>
                    <div class="collapse" id="maps">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="pages/maps/google-maps.html">Google Maps</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/maps/mapael.html">Mapael</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/maps/vector-map.html">Vector map</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false"
                       aria-controls="auth">
                        <span class="menu-title">User Pages</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-lock menu-icon"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/multi-level-login.html"> Multi
                                    Level Login </a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/register.html"> Register </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/register-2.html"> Register
                                    2 </a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/lock-screen.html">
                                    Lockscreen </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#error" aria-expanded="false"
                       aria-controls="error">
                        <span class="menu-title">Error pages</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-security menu-icon"></i>
                    </a>
                    <div class="collapse" id="error">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false"
                       aria-controls="general-pages">
                        <span class="menu-title">General Pages</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-medical-bag menu-icon"></i>
                    </a>
                    <div class="collapse" id="general-pages">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="pages/samples/blank-page.html"> Blank
                                    Page </a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/landing-page.html"> Landing
                                    Page </a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/profile.html"> Profile </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/news-grid.html"> News grid </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/timeline.html"> Timeline </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/search-results.html"> Search
                                    Results </a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/user-listing.html"> User
                                    Listing </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#e-commerce" aria-expanded="false"
                       aria-controls="e-commerce">
                        <span class="menu-title">E-commerce</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-shopping menu-icon"></i>
                    </a>
                    <div class="collapse" id="e-commerce">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="pages/samples/email-template.html"> Email
                                    Templates </a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/invoice.html"> Invoice </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/pricing-table.html"> Pricing
                                    Table </a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/product-catalogue.html">
                                    Product Catalogue </a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/project-list.html"> Project
                                    List </a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/apps/email.html">
                        <span class="menu-title">E-mail</span>
                        <i class="mdi mdi-email menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/apps/calendar.html">
                        <span class="menu-title">Calendar</span>
                        <i class="mdi mdi-calendar-today menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/apps/gallery.html">
                        <span class="menu-title">Gallery</span>
                        <i class="mdi mdi-image-filter-frames menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="http://www.bootstrapdash.com/demo/purple/jquery/documentation/documentation.html"
                       target="_blank">
                        <span class="menu-title">Documentation</span>
                        <i class="mdi mdi-file-document-box menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">
                  <h6 class="font-weight-normal mb-3">Projects</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                <div class="mt-4">
                  <div class="border-bottom">
                    <p class="text-secondary">Categories</p>
                  </div>
                  <ul class="gradient-bullet-list mt-4">
                    <li>Free</li>
                    <li>Pro</li>
                  </ul>
                </div>
              </span>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
                    </h3>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">
                                <span></span>Overview <i
                                    class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-md-4 stretch-card grid-margin">
                        <div class="card bg-gradient-danger card-img-holder text-white">
                            <div class="card-body">
                                <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute"
                                     alt="circle-image"/>
                                <h4 class="font-weight-normal mb-3">Weekly Sales <i
                                        class="mdi mdi-chart-line mdi-24px float-end"></i>
                                </h4>
                                <h2 class="mb-5">$ 15,0000</h2>
                                <h6 class="card-text">Increased by 60%</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin">
                        <div class="card bg-gradient-info card-img-holder text-white">
                            <div class="card-body">
                                <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute"
                                     alt="circle-image"/>
                                <h4 class="font-weight-normal mb-3">Weekly Orders <i
                                        class="mdi mdi-bookmark-outline mdi-24px float-end"></i>
                                </h4>
                                <h2 class="mb-5">45,6334</h2>
                                <h6 class="card-text">Decreased by 10%</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin">
                        <div class="card bg-gradient-success card-img-holder text-white">
                            <div class="card-body">
                                <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute"
                                     alt="circle-image"/>
                                <h4 class="font-weight-normal mb-3">Visitors Online <i
                                        class="mdi mdi-diamond mdi-24px float-end"></i>
                                </h4>
                                <h2 class="mb-5">95,5741</h2>
                                <h6 class="card-text">Increased by 5%</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @yield('content')
                </div>
                <!--                <div class="row">
                                    <div class="col-md-7 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="clearfix">
                                                    <h4 class="card-title float-start">Visit And Sales Statistics</h4>
                                                    <div id="visit-sale-chart-legend-dark" class="rounded-legend legend-horizontal legend-top-right float-end"></div>
                                                </div>
                                                <canvas id="visit-sale-chart-dark" class="mt-4"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Traffic Sources</h4>
                                                <canvas id="traffic-chart"></canvas>
                                                <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-7 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Recent Updates</h4>
                                                <div class="d-flex">
                                                    <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                                                        <i class="mdi mdi-account-outline icon-sm me-2"></i>
                                                        <span>jack Menqu</span>
                                                    </div>
                                                    <div class="d-flex align-items-center text-muted font-weight-light">
                                                        <i class="mdi mdi-clock icon-sm me-2"></i>
                                                        <span>October 3rd, 2018</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-6 pe-1">
                                                        <img src="../assets/images/dashboard/img_1.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                                                        <img src="../assets/images/dashboard/img_4.jpg" class="mw-100 w-100 rounded" alt="image">
                                                    </div>
                                                    <div class="col-6 ps-1">
                                                        <img src="../assets/images/dashboard/img_2.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                                                        <img src="../assets/images/dashboard/img_3.jpg" class="mw-100 w-100 rounded" alt="image">
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-5 align-items-top">
                                                    <img src="../assets/images/faces/face3.jpg" class="img-sm rounded-circle me-3" alt="image">
                                                    <div class="mb-0 flex-grow">
                                                        <h5 class="me-2 mb-2">School Website - Authentication Module.</h5>
                                                        <p class="mb-0 font-weight-light">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <i class="mdi mdi-heart-outline text-muted"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body p-0 d-flex">
                                                <div id="inline-datepicker" class="datepicker datepicker-custom"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 grid-margin">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Recent Tickets</h4>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th> Assignee </th>
                                                            <th> Subject </th>
                                                            <th> Status </th>
                                                            <th> Last Update </th>
                                                            <th> Tracking ID </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <img src="../assets/images/faces/face1.jpg" class="me-2" alt="image"> David Grey
                                                            </td>
                                                            <td> Fund is not recieved </td>
                                                            <td>
                                                                <label class="badge badge-gradient-success">DONE</label>
                                                            </td>
                                                            <td> Dec 5, 2017 </td>
                                                            <td> WD-12345 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="../assets/images/faces/face2.jpg" class="me-2" alt="image"> Stella Johnson
                                                            </td>
                                                            <td> High loading time </td>
                                                            <td>
                                                                <label class="badge badge-gradient-warning">PROGRESS</label>
                                                            </td>
                                                            <td> Dec 12, 2017 </td>
                                                            <td> WD-12346 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="../assets/images/faces/face3.jpg" class="me-2" alt="image"> Marina Michel
                                                            </td>
                                                            <td> Website down for one week </td>
                                                            <td>
                                                                <label class="badge badge-gradient-info">ON HOLD</label>
                                                            </td>
                                                            <td> Dec 16, 2017 </td>
                                                            <td> WD-12347 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="../assets/images/faces/face4.jpg" class="me-2" alt="image"> John Doe
                                                            </td>
                                                            <td> Loosing control on server </td>
                                                            <td>
                                                                <label class="badge badge-gradient-danger">REJECTED</label>
                                                            </td>
                                                            <td> Dec 3, 2017 </td>
                                                            <td> WD-12348 </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Project Status</h4>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th> # </th>
                                                            <th> Name </th>
                                                            <th> Due Date </th>
                                                            <th> Progress </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td> 1 </td>
                                                            <td> Herman Beck </td>
                                                            <td> May 15, 2015 </td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> 2 </td>
                                                            <td> Messsy Adam </td>
                                                            <td> Jul 01, 2015 </td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> 3 </td>
                                                            <td> John Richards </td>
                                                            <td> Apr 12, 2015 </td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> 4 </td>
                                                            <td> Peter Meggik </td>
                                                            <td> May 15, 2015 </td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> 5 </td>
                                                            <td> Edward </td>
                                                            <td> May 03, 2015 </td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> 5 </td>
                                                            <td> Ronald </td>
                                                            <td> Jun 05, 2015 </td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title text-white">Todo</h4>
                                                <div class="add-items d-flex">
                                                    <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
                                                    <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
                                                </div>
                                                <div class="list-wrapper">
                                                    <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                                        <li>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="checkbox" type="checkbox"> Meeting with Alisa </label>
                                                            </div>
                                                            <i class="remove mdi mdi-close-circle-outline"></i>
                                                        </li>
                                                        <li class="completed">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="checkbox" type="checkbox" checked> Call John </label>
                                                            </div>
                                                            <i class="remove mdi mdi-close-circle-outline"></i>
                                                        </li>
                                                        <li>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="checkbox" type="checkbox"> Create invoice </label>
                                                            </div>
                                                            <i class="remove mdi mdi-close-circle-outline"></i>
                                                        </li>
                                                        <li>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="checkbox" type="checkbox"> Print Statements </label>
                                                            </div>
                                                            <i class="remove mdi mdi-close-circle-outline"></i>
                                                        </li>
                                                        <li class="completed">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                                                            </div>
                                                            <i class="remove mdi mdi-close-circle-outline"></i>
                                                        </li>
                                                        <li>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                                                            </div>
                                                            <i class="remove mdi mdi-close-circle-outline"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 <a
                            href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                            class="mdi mdi-heart text-danger"></i></span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('assets/js/off-canvas.js')}}"></script>
<script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('assets/js/misc.js')}}"></script>
<script src="{{asset('assets/js/settings.js')}}"></script>
<script src="{{asset('assets/js/todolist.js')}}"></script>
<script src="{{asset('assets/js/jquery.cookie.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('assets/js/dashboard.js')}}"></script>
<!-- End custom js for this page -->
</body>
</html>
