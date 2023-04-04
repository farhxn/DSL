<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>{{ config('app.name', 'Dashboard') }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/apexcharts/dist/apexcharts.css') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">

</head>

<body>
    <!-- -------------------------------------------------------------- -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- -------------------------------------------------------------- -->
    <div class="preloader">
        <svg class="tea lds-ripple" width="37" height="48" viewbox="0 0 37 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z" stroke="#2962FF" stroke-width="2"></path>
            <path d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34" stroke="#2962FF" stroke-width="2"></path>
            <path id="teabag" fill="#2962FF" fill-rule="evenodd" clip-rule="evenodd" d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"></path>
            <path id="steamL" d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="#2962FF"></path>
            <path id="steamR" d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13" stroke="#2962FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- -------------------------------------------------------------- -->
    <div id="main-wrapper">
        <!-- -------------------------------------------------------------- -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- -------------------------------------------------------------- -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-lg navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-lg-none" href="javascript:void(0)">
                        <i class="ri-close-line fs-6 ri-menu-2-line"></i>
                    </a>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Logo -->
                    <!-- -------------------------------------------------------------- -->
                    <a class="navbar-brand" href="{{ url('dashboard') }}">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <h2 class="mt-3 text-white">Tasks App</h2>
                        </span>
                    </a>
                    <!-- -------------------------------------------------------------- -->
                    <!-- End Logo -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- -------------------------------------------------------------- -->
                    <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ri-more-line fs-6"></i></a>
                </div>
                <!-- -------------------------------------------------------------- -->
                <!-- End Logo -->
                <!-- -------------------------------------------------------------- -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- -------------------------------------------------------------- -->
                    <!-- toggle and nav items -->
                    <!-- -------------------------------------------------------------- -->
                    <ul class="navbar-nav me-auto">
                        <!-- This is  -->
                        <!-- <li class="nav-item"> <a
                                class="nav-link sidebartoggler d-none d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i data-feather="menu" class="feather-sm"></i></a> </li> -->
                    </ul>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Right side toggle and nav items -->
                    <!-- -------------------------------------------------------------- -->
                    <ul class="navbar-nav justify-content-end">
                        <!-- -------------------------------------------------------------- -->
                        <!-- Search -->
                        <!-- -------------------------------------------------------------- -->
                        {{-- <li class="nav-item d-none d-md-block search-box"> <a
                                class="nav-link d-none d-md-block waves-effect waves-dark" href="javascript:void(0)"><i
                                   data-feather="search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter">
                                <a class="srh-btn"><i data-feather="x" class="feather-sm"></i></a>
                            </form>
                        </li> --}}
                        <!-- -------------------------------------------------------------- -->
                        <!-- Comment -->
                        <!-- -------------------------------------------------------------- -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i data-feather="bell"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end mailbox dropdown-menu-animate-up">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="border-bottom rounded-top py-3 px-4">
                                            <div class="mb-0 font-weight-medium fs-4">Notifications</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center notifications position-relative" style="height:230px;">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-light-danger text-danger btn-circle">
                                                    <i data-feather="link" class="feather-sm fill-white"></i>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">Luanch Admin</h5> <span class="fs-2 text-nowrap d-block time text-truncate fw-normal text-muted mt-1">Just see
                                                        the my new admin!</span> <span class="fs-2 text-nowrap d-block subtext text-muted">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-light-success text-success btn-circle">
                                                    <i data-feather="calendar" class="feather-sm fill-white"></i>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">Event today</h5> <span class="fs-2 text-nowrap d-block time text-truncate fw-normal text-muted mt-1">Just a
                                                        reminder that you have event</span> <span class="fs-2 text-nowrap d-block subtext text-muted">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-light-info text-info btn-circle">
                                                    <i data-feather="settings" class="feather-sm fill-white"></i>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">Settings</h5> <span class="fs-2 text-nowrap d-block time text-truncate fw-normal text-muted mt-1">You can
                                                        customize this template as you want</span> <span class="fs-2 text-nowrap d-block subtext text-muted">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-light-primary text-primary btn-circle">
                                                    <i data-feather="users" class="feather-sm fill-white"></i>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">Pavan kumar</h5> <span class="fs-2 text-nowrap d-block time text-truncate fw-normal text-muted mt-1">Just see
                                                        the my admin!</span> <span class="fs-2 text-nowrap d-block subtext text-muted">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link border-top text-center text-dark pt-3" href="javascript:void(0);"> <strong>Check all notifications</strong> <i data-feather="chevron-right" class="feather-sm"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- -------------------------------------------------------------- -->
                        <!-- End Comment -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- Profile -->
                        <!-- -------------------------------------------------------------- -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/images/users/1.jpg" alt="user" width="30" class="profile-pic rounded-circle" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-end user-dd animated flipInY">
                                <div class="d-flex no-block align-items-center p-3 bg-primary text-white mb-2">
                                    <div class=""><img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="60"></div>
                                    <div class="ms-2">
                                        <h4 class="mb-0 text-white">{{ Auth::user()->name }}</h4>
                                        <p class=" mb-0">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                                {{-- <a class="dropdown-item" href="#"><i data-feather="user" class="feather-sm text-info me-1 ms-1"></i> My
                                    Profile</a> --}}
                                {{-- <a class="dropdown-item" href="#"><i data-feather="credit-card" class="feather-sm text-primary me-1 ms-1"></i>
                                    My Balance</a> --}}
                                {{-- <a class="dropdown-item" href="#"><i data-feather="mail" class="feather-sm text-success me-1 ms-1"></i>
                                    Inbox</a> --}}
                                {{-- <div class="dropdown-divider"></div> --}}
                                {{-- <a class="dropdown-item" href="#"><i data-feather="settings" class="feather-sm text-warning me-1 ms-1"></i>
                                    Account Setting</a> --}}
                                <div class="dropdown-divider"></div>
                                <form method="post" action="{{ url('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i data-feather="log-out" class="feather-sm text-danger me-1 ms-1"></i> Logout</button>
                                </form>
                                <div class="dropdown-divider"></div>
                                {{-- <div class="pl-4 p-2"><a href="#"
                                        class="btn d-block w-100 btn-primary rounded-pill">View Profile</a></div> --}}
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- -------------------------------------------------------------- -->
        <!-- End Topbar header -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- -------------------------------------------------------------- -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                        @if(Auth::user()->role !== "admin")
                        <li class="sidebar-item"> <span class="sidebar-link two-column waves-effect waves-dark" aria-expanded="false" id="add-task"><i data-feather="grid" class="feather-icon"></i><span class="hide-menu">Tasks</span></span>
                          
                            @endif
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- -------------------------------------------------------------- -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- Page wrapper  -->
        <!-- -------------------------------------------------------------- -->
        {{-- <div class="page-wrapper">
            <!-- -------------------------------------------------------------- -->
            <!-- Container fluid  -->
            <!-- -------------------------------------------------------------- -->
            <div class="container-fluid">
                <div class="reverse-mode">
                    <!-- -------------------------------------------------------------- -->
                    <!-- Left Part  -->
                    <!-- -------------------------------------------------------------- -->
                    <div class="left-part bg-light dashboard-right-part fixed-left-part">
                        <!-- Mobile toggle button -->
                        <a class="ri-menu-fill ri-close-fill btn btn-success show-left-part d-block d-md-none" href="javascript:void(0)"></a>
                        <!-- Mobile toggle button -->
                        <div class="scrollable position-relative" style="height: calc(100vh - 50px);">
                            <div class="px-3 pt-3">
                                <h5 class="text-muted mb-0">San Francisco, CA</h5>
                                <h3>Mon, July 14 11 AM</h3>
                                <div class="d-flex mt-3">
                                    <div class="display-5 text-info"><i class="wi wi-day-cloudy"></i></div>
                                    <div class="ms-3">
                                        <h2 class="mb-0">72°F</h2>
                                        <h6>Clear with periodic clouds</h6>
                                    </div>
                                </div>
                                <hr>
                                <table class="table table-borderless">
                                    <tr>
                                        <td><i class="wi wi-day-cloudy"></i> Saturday</td>
                                        <td class="text-end font-weight-medium">65 ° F</td>
                                    </tr>
                                    <tr>
                                        <td><i class="wi wi-day-sunny"></i> Sunday</td>
                                        <td class="text-end font-weight-medium">70 ° F</td>
                                    </tr>
                                    <tr>
                                        <td><i class="wi wi-day-sprinkle"></i> Monday</td>
                                        <td class="text-end font-weight-medium">73 ° F</td>
                                    </tr>
                                </table>
                                <hr class="mt-0">
                            </div>
                            <div class="p-3">
                                <h3 class="position-relative d-flex"><span
                                        class="lstick d-inline-block align-middle"></span> Message<span
                                        class="ms-auto fs-3  p-2 badge rounded-pill bg-success">16</span></h3>
                                <div class="msg-widget mt-3">
                                    <!-- Message Item -->
                                    <div class="msg-item mb-3">
                                        <div class="msg-body p-3 position-relative fs-3 bg-white">
                                            It has survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining essentially unchanged.
                                            <span class="down-arrow"></span>
                                        </div>
                                        <div class="mt-3 d-flex">
                                            <div class="me-3"><img src="../assets/images/users/profile.png" alt="user"
                                                    width="40" class="rounded-circle"></div>
                                            <div class="author">
                                                <h5 class="mb-0">Mark Freeman</h5>
                                                <p class="text-muted fs-3">Today 04:12 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Message Item -->
                                    <div class="msg-item mb-3">
                                        <div class="msg-body p-3 position-relative fs-3 bg-white">
                                            It has survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining essentially unchanged.
                                            <span class="down-arrow"></span>
                                        </div>
                                        <div class="mt-3 d-flex">
                                            <div class="me-3"><img src="../assets/images/users/4.jpg" alt="user"
                                                    width="40" class="rounded-circle"></div>
                                            <div class="author">
                                                <h5 class="mb-0">Mark Freeman</h5>
                                                <p class="text-muted fs-3">Today 04:12 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Message Item -->
                                    <div class="msg-item">
                                        <div class="msg-body p-3 position-relative fs-3 bg-white">
                                            It has survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining essentially unchanged.
                                            <span class="down-arrow"></span>
                                        </div>
                                        <div class="mt-3 d-flex">
                                            <div class="me-3"><img src="../assets/images/users/2.jpg" alt="user"
                                                    width="40" class="rounded-circle"></div>
                                            <div class="author">
                                                <h5 class="mb-0">Mark Freeman</h5>
                                                <p class="text-muted fs-3">Today 04:12 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3">
                                <div class="card bg-info text-white">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="stats">
                                                <h1 class="text-white">3257+</h1>
                                                <h6 class="text-white">Twitter Followers</h6>
                                                <button class="btn btn-rounded btn-outline btn-light mt-2 fs-3">Check
                                                    list</button>
                                            </div>
                                            <div class="stats-icon text-end ms-auto"><i
                                                    class="ri-twitter-fill display-5 op-3 text-dark"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- twitter Widget -->
                                <!-- twitter Widget -->
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="stats">
                                                <h1 class="text-white">6509+</h1>
                                                <h6 class="text-white">Facebook Likes</h6>
                                                <button class="btn btn-rounded btn-outline btn-light mt-2 fs-3">Check
                                                    list</button>
                                            </div>
                                            <div class="stats-icon text-end ms-auto"><i
                                                    class="ri-facebook-fill display-5 op-3 text-dark"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- facebook Widget -->
                                <!-- subscribe Widget -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="stats">
                                                <h1 class="">9062+</h1>
                                                <h6 class="text-muted">Subscribe</h6>
                                                <button
                                                    class="btn btn-rounded btn-outline btn-secondary mt-2 fs-3">Check
                                                    list</button>
                                            </div>
                                            <div class="stats-icon text-end ms-auto"><i
                                                    class="ri-mail-line display-5 op-3 text-dark"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- -------------------------------------------------------------- -->
                    <!-- End Left Part  -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- Right Part  Mail Compose -->
                    <!-- -------------------------------------------------------------- -->
                    <div class="right-part overflow-auto dashboard-part" style="height: 100%;">
                        <!-- -------------------------------------------------------------- -->
                        <!-- Bread crumb and right sidebar toggle -->
                        <!-- -------------------------------------------------------------- -->
                        <div class="row page-titles">
                            <div class="col-md-5 col-12 align-self-center">
                                <h3 class="text-themecolor mb-0">Dashboard</h3>
                            </div>
                            <div class="col-md-7 col-12 align-self-center d-none d-md-flex justify-content-end">
                                <ol class="breadcrumb mb-0 p-0 bg-transparent">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active d-flex align-items-center">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                        <!-- -------------------------------------------------------------- -->
                        <!-- End Bread crumb and right sidebar toggle -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- Sales Overview -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-lg-flex">
                                    <div>
                                        <h3 class="card-title"><span
                                                class="lstick d-inline-block align-middle"></span>Sales Overview </h3>
                                        <h6 class="card-subtitle">Year 2021</h6>
                                    </div>
                                    <div class="ms-auto">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <div class="d-flex">
                                                    <i class="ri-checkbox-blank-circle-fill fs-5 font-10 me-2 text-primary mt-2"></i>
                                                    <div>
                                                        <h3 class="mb-0">10368</h3>
                                                        <h6 class="text-muted">Earning</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="d-flex">
                                                    <i class="ri-checkbox-blank-circle-fill fs-5 font-10 me-2 text-info mt-2"></i>
                                                    <div>
                                                        <h3 class="mb-0">12659</h3>
                                                        <h6 class="text-muted">Expense</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="d-flex">
                                                    <i class="ri-checkbox-blank-circle-fill fs-5 font-10 me-2 text-muted mt-2"></i>
                                                    <div>
                                                        <h3 class="mb-0">15478</h3>
                                                        <h6 class="text-muted">Sales</h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="Sales-Overview"></div>
                            </div>
                        </div>
                        <!-- End Sales Overview -->
                        <!-- Row Cards -->
                        <div class="row">
                            <div class="col-lg-4 d-flex align-items-stretch">
                                <div class="card w-100">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="me-3 align-self-center"><span
                                                    class="lstick d-inline-block align-middle me-3"></span><img
                                                    src="../assets/images/icon/income.png" alt="Income" /></div>
                                            <div class="align-self-center">
                                                <h6 class="text-muted mt-2 mb-0">Total Income</h6>
                                                <h2>953,000</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 d-flex align-items-stretch">
                                <div class="card w-100">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="me-3 align-self-center"><span
                                                    class="lstick d-inline-block align-middle me-3"></span><img
                                                    src="../assets/images/icon/expense.png" alt="Income" /></div>
                                            <div class="align-self-center">
                                                <h6 class="text-muted mt-2 mb-0">Total Expense</h6>
                                                <h2>236,000</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 d-flex align-items-stretch">
                                <div class="card w-100">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="me-3 align-self-center"><span
                                                    class="lstick d-inline-block align-middle me-3"></span><img
                                                    src="../assets/images/icon/assets.png" alt="Income" /></div>
                                            <div class="align-self-center">
                                                <h6 class="text-muted mt-2 mb-0">Total Assets</h6>
                                                <h2>987,563</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row Cards -->
                        <!-- Project of the month -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex">
                                    <div>
                                        <h4 class="card-title"><span
                                                class="lstick d-inline-block align-middle"></span>Projects of the Month
                                        </h4>
                                    </div>
                                    <div class="ms-auto">
                                        <select class="form-select">
                                            <option selected="">January</option>
                                            <option value="1">February</option>
                                            <option value="2">March</option>
                                            <option value="3">April</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive mt-3 no-wrap">
                                    <table class="table v-middle mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-0" colspan="2">Assigned</th>
                                                <th class="border-0">Name</th>
                                                <th class="border-0">Priority</th>
                                                <th class="border-0">Budget</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width:50px;">
                                                    <span
                                                        class="round rounded-circle text-white d-inline-block text-center bg-info">S</span>
                                                </td>
                                                <td>
                                                    <h6 class="mb-0 font-weight-medium">Sunil Joshi</h6>
                                                    <small class="text-muted">Web Designer</small>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td>
                                                    <span class="badge bg-success rounded-pill">Low</span>
                                                </td>
                                                <td>$3.9K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>
                                                        <img src="../assets/images/users/2.jpg" class="rounded-circle"
                                                            alt="user" width="50">
                                                    </span>
                                                </td>
                                                <td>
                                                    <h6 class="mb-0 font-weight-medium">Andrew</h6>
                                                    <small class="text-muted">Project Manager</small>
                                                </td>
                                                <td>Real Homes</td>
                                                <td>
                                                    <span class="badge bg-info rounded-pill">Medium</span>
                                                </td>
                                                <td>$23.9K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span
                                                        class="round rounded-circle text-white d-inline-block text-center bg-success">B</span>
                                                </td>
                                                <td>
                                                    <h6 class="mb-0 font-weight-medium">Bhavesh patel</h6>
                                                    <small class="text-muted">Developer</small>
                                                </td>
                                                <td>MedicalPro Theme</td>
                                                <td>
                                                    <span class="badge bg-primary rounded-pill">High</span>
                                                </td>
                                                <td>$12.9K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span
                                                        class="round rounded-circle text-white d-inline-block text-center bg-primary">N</span>
                                                </td>
                                                <td>
                                                    <h6 class="mb-0 font-weight-medium">Nirav Joshi</h6>
                                                    <small class="text-muted">Frontend Eng</small>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td>
                                                    <span class="badge bg-danger rounded-pill">Low</span>
                                                </td>
                                                <td>$10.9K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span
                                                        class="round rounded-circle text-white d-inline-block text-center bg-warning">M</span>
                                                </td>
                                                <td>
                                                    <h6 class="mb-0 font-weight-medium">Micheal Doe</h6>
                                                    <small class="text-muted">Content Writer</small>
                                                </td>
                                                <td>Helping Hands</td>
                                                <td><span class="badge bg-success rounded-pill">High</span></td>
                                                <td>$12.9K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span
                                                        class="round rounded-circle text-white d-inline-block text-center bg-danger">N</span>
                                                </td>
                                                <td>
                                                    <h6 class="mb-0 font-weight-medium">Johnathan</h6>
                                                    <small class="text-muted">Graphic</small>
                                                </td>
                                                <td>Digital Agency</td>
                                                <td>
                                                    <span class="badge bg-info rounded-pill">High</span>
                                                </td>
                                                <td>$2.6K</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End Project of the month -->
                        <!-- Row Starts -->
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="card-title"><span
                                                    class="lstick  d-inline-block align-middle"></span>Activity</h4>
                                            <div class="dropdown ms-auto">
                                                <a href="#" class="icon-options-vertical link" id="dropdownMenuLink"
                                                    data-bs-toggle="dropdown" aria-expanded="false"></a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                  </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity-box scrollable" style="height: 843px;">
                                        <div class="date-divider position-relative">
                                            <span
                                                class="badge bg-light text-bodycolor fs-3 rounded-pill ms-3 position-relative">Today</span>
                                        </div>
                                        <div class="card-body">
                                            <!-- Activity item-->
                                            <div class="activity-item mb-4 d-flex">
                                                <div class="me-3"><img src="../assets/images/users/2.jpg"
                                                        alt="user" width="50" class="rounded-circle" /></div>
                                                <div class="mt-2">
                                                    <h5 class="mb-0 font-weight-medium">Mark Freeman <span
                                                            class="text-muted fs-3 ms-2">| &nbsp; 6:30 PM</span></h5>
                                                    <h6 class="text-muted">uploaded this file </h6>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <img src="../assets/images/icon/zip.png"
                                                                    alt="user" />
                                                        </div>
                                                        <div class="col-8 d-flex align-items-center">
                                                            <div>
                                                                <h5 class="mb-0 font-weight-medium ">Homepage.zip</h5>
                                                                <h6>54 MB</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Activity item-->
                                            <!-- Activity item-->
                                            <div class="activity-item mb-4 d-flex">
                                                <div class="me-3"><img src="../assets/images/users/3.jpg"
                                                        alt="user" width="50" class="rounded-circle" /></div>
                                                <div class="mt-2">
                                                    <h5 class="mb-1 font-weight-medium">Emma Smith <span
                                                            class="text-muted fs-3 ms-2">| &nbsp; 6:30 PM</span></h5>
                                                    <h6 class="text-muted">joined projectname, and invited <a
                                                            href="javascript:void(0)">@maxcage, @maxcage,
                                                            @maxcage,<br /> @maxcage, @maxcage,+3</a></h6>
                                                    <span class="image-list mt-2">
                                                        <a href="javascript:void(0)"
                                                            class="align-middle position-relative">
                                                            <img src="../assets/images/users/1.jpg"
                                                                class="rounded-circle" alt="user" width="40" />
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="align-middle position-relative">
                                                            <img src="../assets/images/users/4.jpg"
                                                                class="rounded-circle" alt="user" width="40" />
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="align-middle position-relative">
                                                            <img src="../assets/images/users/5.jpg"
                                                                class="rounded-circle" alt="user" width="40" />
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="align-middle position-relative">
                                                            <img src="../assets/images/users/6.jpg"
                                                                class="rounded-circle" alt="user" width="40" />
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="align-middle position-relative">+3</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- Activity item-->
                                        </div>
                                        <div class="date-divider position-relative">
                                            <span
                                                class="badge bg-light text-bodycolor fs-3 rounded-pill ms-3 position-relative">Yesterday</span>
                                        </div>
                                        <div class="card-body">
                                            <!-- Activity item-->
                                            <div class="activity-item mb-4 d-flex">
                                                <div class="me-3"><img src="../assets/images/users/4.jpg"
                                                        alt="user" width="50" class="rounded-circle" /></div>
                                                <div class="mt-2">
                                                    <h5 class="mb-0 font-weight-medium">David R. Jones <span
                                                            class="text-muted fs-3 ms-2">| &nbsp; 6:30 PM</span></h5>
                                                    <h6 class="text-muted">uploaded this file </h6>
                                                    <span>
                                                        <a href="javascript:void(0)" class="me-2"><img
                                                                src="../assets/images/big/img1.jpg" alt="user"
                                                                width="60"></a>
                                                        <a href="javascript:void(0)" class="me-2"><img
                                                                src="../assets/images/big/img2.jpg" alt="user"
                                                                width="60"></a>
                                                        <a href="javascript:void(0)" class="me-2"><img
                                                                src="../assets/images/big/img3.jpg" alt="user"
                                                                width="60"></a>
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- Activity item-->
                                            <!-- Activity item-->
                                            <div class="activity-item mb-4 d-flex">
                                                <div class="me-3"><img src="../assets/images/users/6.jpg"
                                                        alt="user" width="50" class="rounded-circle" /></div>
                                                <div class="mt-2">
                                                    <h5 class="mb-1 font-weight-medium">David R. Jones <span
                                                            class="text-muted fs-3 ms-2">| &nbsp; 6:30 PM</span></h5>
                                                    <h6 class="text-muted">Commented on  <a href="javascript:void(0)" class="ms-1"> Test
                                                            Project</a></h6>
                                                    <p class="mb-0">It has survived not only five centuries, but also
                                                        the leap into
                                                        <br /> electrotypesetting, remaining essentially unchanged.</p>
                                                </div>
                                            </div>
                                            <!-- Activity item-->
                                            <!-- Activity item-->
                                            <div class="activity-item mb-4 d-flex">
                                                <div class="me-3"><img src="../assets/images/users/7.jpg"
                                                        alt="user" width="50" class="rounded-circle" /></div>
                                                <div class="mt-2">
                                                    <h5 class="mb-0 font-weight-medium">David R. Jones <span
                                                            class="text-muted fs-3 ms-2">| &nbsp; 6:30 PM</span></h5>
                                                    <h6 class="text-muted">uploaded this file </h6>
                                                    <p>It has survived not only five centuries</p>
                                                    <span>
                                                        <a href="javascript:void(0)" class="me-2"><img
                                                                src="../assets/images/big/img5.jpg" alt="user"
                                                                width="60"></a>
                                                        <a href="javascript:void(0)" class="me-2"><img
                                                                src="../assets/images/big/img6.jpg" alt="user"
                                                                width="60"></a>
                                                        <a href="javascript:void(0)" class="me-2"><img
                                                                src="../assets/images/big/img4.jpg" alt="user"
                                                                width="60"></a>
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- Activity item-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="card">
                                    <div class="card-body little-profile text-center">
                                        <div class="my-3"><img src="../assets/images/users/8.jpg" alt="user" width="128"
                                                class="rounded-circle shadow"></div>
                                        <h3 class="mb-0">Angela Dominic</h3>
                                        <h6 class="text-muted">Web Designer &amp; Developer</h6>
                                        <ul class="list-inline social-icons mt-4">
                                            <li class="list-inline-item"><a href="javascript:void(0)"><i
                                                        class="ri-twitter-fill"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)"><i
                                                        class="ri-facebook-box-fill"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)"><i
                                                        class="ri-google-fill"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)"><i
                                                        class="ri-youtube-fill"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)"><i
                                                        class="ri-instagram-line"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="text-center bg-extra-light">
                                        <div class="row">
                                            <div class="col-6  p-3 border-right">
                                                <h4 class="mb-0 font-weight-medium">1099</h4><small>Followers</small>
                                            </div>
                                            <div class="col-6  p-3">
                                                <h4 class="mb-0 font-weight-medium">603</h4><small>Following</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="javascript:void(0)"
                                            class="mt-2 mb-3 waves-effect waves-dark btn btn-success btn-md btn-rounded">Follow
                                            me</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <h4 class="card-title"><span
                                                    class="lstick d-inline-block align-middle"></span>My Contact</h4>
                                            <div class="dropdown ms-auto">
                                                <a href="#" class="icon-options-vertical link" id="dropdownMenuLink"
                                                    data-bs-toggle="dropdown" aria-expanded="false"></a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                  </ul>
                                            </div>
                                        </div>
                                        <div class="mailbox">
                                            <div class="message-center message-body position-relative">
                                                <a href="javascript:void(0)"
                                                    class="message-item d-flex align-items-center border-bottom p-3">
                                                    <span class="user-img position-relative d-inline-block"> <img
                                                            src="../assets/images/users/1.jpg" alt="user"
                                                            class="rounded-circle w-100"> <span
                                                            class="profile-status rounded-circle online"></span> </span>
                                                    <div class="w-75 d-inline-block v-middle ps-3">
                                                        <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span
                                                            class="fs-2 text-nowrap d-block time text-truncate text-bodycolor">info@wrappixel.com</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)"
                                                    class="message-item d-flex align-items-center border-bottom p-3">
                                                    <span class="user-img position-relative d-inline-block"> <img
                                                            src="../assets/images/users/2.jpg" alt="user"
                                                            class="rounded-circle w-100"> <span
                                                            class="profile-status rounded-circle busy"></span> </span>
                                                    <div class="w-75 d-inline-block v-middle ps-3">
                                                        <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5> <span
                                                            class="fs-2 text-nowrap d-block time text-truncate text-bodycolor">pamela1987@gmail.com</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)"
                                                    class="message-item d-flex align-items-center border-bottom p-3">
                                                    <span class="user-img position-relative d-inline-block"> <img
                                                            src="../assets/images/users/3.jpg" alt="user"
                                                            class="rounded-circle w-100"> <span
                                                            class="profile-status rounded-circle away"></span> </span>
                                                    <div class="w-75 d-inline-block v-middle ps-3">
                                                        <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5> <span
                                                            class="fs-2 text-nowrap d-block time text-truncate text-bodycolor">cruise1298.fiplip@gmail.com</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)"
                                                    class="message-item d-flex align-items-center border-bottom p-3">
                                                    <span class="user-img position-relative d-inline-block"> <img
                                                            src="../assets/images/users/4.jpg" alt="user"
                                                            class="rounded-circle w-100"> <span
                                                            class="profile-status rounded-circle offline"></span>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle ps-3">
                                                        <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span
                                                            class="fs-2 text-nowrap d-block time text-truncate text-bodycolor">kat@gmail.com</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)"
                                                    class="message-item d-flex align-items-center border-bottom p-3">
                                                    <span class="user-img position-relative d-inline-block"> <img
                                                            src="../assets/images/users/2.jpg" alt="user"
                                                            class="rounded-circle w-100"> <span
                                                            class="profile-status rounded-circle busy"></span> </span>
                                                    <div class="w-75 d-inline-block v-middle ps-3">
                                                        <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5> <span
                                                            class="fs-2 text-nowrap d-block time text-truncate text-bodycolor">pamela1987@gmail.com</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row ends -->
                        <!-- Row Starts -->
                        <div class="row">
                            <div class="col-lg-4 d-flex align-items-stretch">
                                <div class="card w-100">
                                    <div class="card-body">
                                        <h4 class="card-title"><span
                                                class="lstick d-inline-block align-middle"></span>Visit Separation</h4>
                                        <div id="Visit-Separation" style="height:290px; width:100%;" class="d-flex justify-content-center align-items-center"></div>
                                        <table class="table v-middle fs-3 mb-1">
                                            <tr>
                                                <td class="border-0">Mobile</td>
                                                <td class="text-end font-weight-medium border-0">38.5%</td>
                                            </tr>
                                            <tr>
                                                <td>Tablet</td>
                                                <td class="text-end font-weight-medium">30.8%</td>
                                            </tr>
                                            <tr>
                                                <td>Desktop</td>
                                                <td class="text-end font-weight-medium">7.7%</td>
                                            </tr>
                                            <tr>
                                                <td>Other</td>
                                                <td class="text-end font-weight-medium">23.1%</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 d-flex align-items-stretch">
                                <div class="card w-100">
                                    <div class="card-body">
                                        <div class="d-md-flex">
                                            <h4 class="card-title"><span
                                                    class="lstick d-inline-block align-middle"></span>Website Visit</h4>
                                            <ul class="list-inline mb-0 ms-auto">
                                                <li class="list-inline-item">
                                                    <h6 class="text-success"><i
                                                            class="ri-checkbox-blank-circle-fill align-middle fs-4 font-10 me-2 "></i>Site A view</h6>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h6 class="text-info"><i class="ri-checkbox-blank-circle-fill align-middle fs-4 font-10 me-2"></i>Site
                                                        B view</h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text-center mt-2">
                                            <div class="btn-group " role="group" aria-label="Basic example">
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary shadow-sm me-0 fs-2">PAGEVIEWS</button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary shadow-sm fs-2">REFERRALS</button>
                                            </div>
                                        </div>
                                        <div id="Website-Visit" class="position-relative mt-4"
                                            style="height:400px; width:100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row ends -->
                        <!-- Row starts -->
                        <div class="row">
                            <div class="col-lg-8 d-flex align-items-stretch">
                                <div class="card w-100">
                                    <div class="card-body">
                                        <div class="d-md-flex align-items-center">
                                            <div>
                                                <h4 class="card-title"><span
                                                        class="lstick  d-inline-block align-middle"></span>To Do list
                                                </h4>
                                                <h6 class="card-subtitle mb-0">List of your next task to complete</h6>
                                            </div>
                                            <div class="ms-auto mt-3 mt-md-0">
                                                <button class="btn btn-sm btn-rounded btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#myModal">Add Task</button>
                                            </div>
                                        </div>

                                        <!-- -------------------------------------------------------------- -->
                                        <!-- To do list widgets -->
                                        <!-- -------------------------------------------------------------- -->
                                        <div class="to-do-widget mt-3 common-widget">
                                            <!-- .modal for add task -->
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header d-flex">
                                                            <h4 class="modal-title">Add Task</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="mb-3">
                                                                    <label>Task name</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Enter Task Name"> </div>
                                                                <div class="mb-3">
                                                                    <label>Assign to</label>
                                                                    <select
                                                                        class="form-select">
                                                                        <option selected="">Sachin</option>
                                                                        <option value="1">Sehwag</option>
                                                                    </select>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-success"
                                                                data-bs-dismiss="modal">Submit</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                            <ul class="list-task todo-list list-group mb-0" data-role="tasklist">
                                                <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
                                                    data-role="task">
                                                    <div class="form-check form-check-inline w-100">
                                                        <input type="checkbox" class="form-check-input danger check-light-danger"
                                                            id="inputSchedule" name="inputCheckboxesSchedule">
                                                        <label for="inputSchedule" class="form-check-label font-weight-medium"> <span>Schedule meeting
                                                                with</span><span
                                                                class="badge bg-danger badge-pill ms-1">Today</span>
                                                        </label>
                                                    </div>
                                                    <ul class="assignedto list-style-none m-0 ps-4 ms-1 mt-1">
                                                        <li class="d-inline-block border-0 me-1"><img
                                                                src="../assets/images/users/1.jpg" alt="user"
                                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                                data-original-title="Steave" class="rounded-circle">
                                                        </li>
                                                        <li class="d-inline-block border-0 me-1"><img
                                                                src="../assets/images/users/2.jpg" alt="user"
                                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                                data-original-title="Jessica" class="rounded-circle">
                                                        </li>
                                                        <li class="d-inline-block border-0 me-1"><img
                                                                src="../assets/images/users/3.jpg" alt="user"
                                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                                data-original-title="Priyanka" class="rounded-circle">
                                                        </li>
                                                        <li class="d-inline-block border-0 me-1"><img
                                                                src="../assets/images/users/4.jpg" alt="user"
                                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                                data-original-title="Selina" class="rounded-circle">
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
                                                    data-role="task">
                                                    <div class="form-check form-check-inline w-100">
                                                        <input type="checkbox" id="inputCall" class="form-check-input info check-light-info"
                                                            name="inputCheckboxesCall">
                                                        <label for="inputCall" class="form-check-label font-weight-medium"> <span>Give Purchase report
                                                                to</span>
                                                            <span
                                                                class="badge bg-info badge-pill ms-1">Yesterday</span>
                                                        </label>
                                                    </div>
                                                    <ul class="assignedto m-0 ps-4 ms-1 mt-1">
                                                        <li class="d-inline-block border-0 me-1"><img
                                                                src="../assets/images/users/3.jpg" alt="user"
                                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                                data-original-title="Priyanka" class="rounded-circle">
                                                        </li>
                                                        <li class="d-inline-block border-0 me-1"><img
                                                                src="../assets/images/users/4.jpg" alt="user"
                                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                                data-original-title="Selina" class="rounded-circle">
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
                                                    data-role="task">
                                                    <div class="form-check form-check-inline w-100">
                                                        <input type="checkbox" id="inputBook" class="form-check-input primary check-light-primary"
                                                            name="inputCheckboxesBook">
                                                        <label for="inputBook" class="form-check-label font-weight-medium"> <span>Book flight for
                                                                holiday</span><span
                                                                class="badge bg-primary badge-pill ms-1">1
                                                                week</span>
                                                        </label>
                                                    </div>
                                                    <div class="fs-2 ps-3 d-inline-block ms-2"> 26 jun 2021</div>
                                                </li>
                                                <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
                                                    data-role="task">
                                                    <div class="form-check form-check-inline w-100">
                                                        <input type="checkbox" id="inputForward" class="form-check-input warning check-light-warning"
                                                            name="inputCheckboxesForward">
                                                        <label for="inputForward" class="form-check-label font-weight-medium"> <span>Forward all
                                                                tasks</span> <span
                                                                class="badge bg-warning badge-pill ms-1">2
                                                                weeks</span> </label>
                                                    </div>
                                                    <div class="fs-2 ps-3 d-inline-block ms-2"> 26 jun 2021</div>
                                                </li>
                                                <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
                                                    data-role="task">
                                                    <div class="form-check form-check-inline w-100">
                                                        <input type="checkbox" id="inputRecieve" class="form-check-input success check-light-success"
                                                            name="inputCheckboxesRecieve">
                                                        <label for="inputRecieve" class="form-check-label font-weight-medium"> <span>Recieve
                                                                shipment</span><span
                                                                class="badge bg-success badge-pill ms-1">2
                                                                weeks</span>
                                                        </label>
                                                    </div>
                                                    <ul class="assignedto list-style-none m-0 ps-4 ms-1 mt-1">
                                                        <li class="d-inline-block border-0 me-1"><img
                                                                src="../assets/images/users/1.jpg" alt="user"
                                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                                data-original-title="Steave" class="rounded-circle">
                                                        </li>
                                                        <li class="d-inline-block border-0 me-1"><img
                                                                src="../assets/images/users/2.jpg" alt="user"
                                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                                data-original-title="Jessica" class="rounded-circle">
                                                        </li>
                                                        <li class="d-inline-block border-0 me-1"><img
                                                                src="../assets/images/users/3.jpg" alt="user"
                                                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                                data-original-title="Priyanka" class="rounded-circle">
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 d-flex align-items-stretch">
                                <div class="card w-100">
                                    <img class="card-img-top blog-img1" src="../assets/images/big/img1.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h3 class="font-weight-normal">Featured Hydroflora Pots Garden &amp; Outdoors
                                        </h3>
                                        <span class="badge bg-info badge-pill">Technology</span>
                                        <p class="mb-0 mt-3">It is a long established fact that a reader will be
                                            distracted by the readable content of a page when looking at its layout. The
                                            point of using.</p>
                                        <div class="d-flex mt-3 pt-3">
                                            <button class="btn ps-0 btn-link ">Read more</button>
                                            <div class="ms-auto align-self-center">
                                                <a href="javascript:void(0)" class="link me-2"><i
                                                        class="ri-heart-fill"></i></a>
                                                <a href="javascript:void(0)" class="link me-2"><i
                                                        class="ri-share-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row ends -->
                    </div>
                </div>
            </div>
            <!-- -------------------------------------------------------------- -->
            <!-- End Container fluid  -->
            <!-- -------------------------------------------------------------- -->
        </div> --}}

        <div class="page-wrapper">
            @yield('content')
        </div>

        <!-- -------------------------------------------------------------- -->
        <!-- End Page wrapper  -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- footer -->
        <!-- -------------------------------------------------------------- -->
        <footer class="footer text-center">
            Developed By Hammad Zafar
        </footer>
        <!-- -------------------------------------------------------------- -->
        <!-- End footer -->
        <!-- -------------------------------------------------------------- -->

    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End Wrapper -->
    <!-- -------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------- -->
    <!-- customizer Panel -->
    <!-- -------------------------------------------------------------- -->
    {{-- <aside class="customizer">
        <a href="javascript:void(0)" class="service-panel-toggle"><i data-feather="settings" class="feather-sm fa fa-spin"></i></a>
        <div class="customizer-body">
            <ul class="nav customizer-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true"><i class="ri-tools-fill fs-6"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#chat" role="tab"
                        aria-controls="chat" aria-selected="false"><i class="ri-message-3-line fs-6"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab"
                        aria-controls="pills-contact" aria-selected="false"><i
                            class="ri-timer-line fs-6"></i></a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!-- Tab 1 -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="p-3 border-bottom">
                        <!-- Sidebar -->
                        <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
                        <div class="form-check mt-3">
                            <input type="checkbox" name="theme-view" class="form-check-input" id="theme-view">
                            <label class="form-check-label" for="theme-view"> <span>Dark Theme</span> </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" class="sidebartoggler form-check-input" name="collapssidebar"
                                id="collapssidebar">
                            <label class="form-check-label" for="collapssidebar"> <span>Collapse Sidebar</span> </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" name="sidebar-position" class="form-check-input"
                                id="sidebar-position">
                            <label class="form-check-label" for="sidebar-position"> <span>Fixed Sidebar</span> </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" name="header-position" class="form-check-input" id="header-position">
                            <label class="form-check-label" for="header-position"> <span>Fixed Header</span> </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" name="boxed-layout" class="form-check-input" id="boxed-layout">
                            <label class="form-check-label" for="boxed-layout"> <span>Boxed Layout</span> </label>
                        </div>
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item me-1"><a href="javascript:void(0)"
                                    class="theme-link rounded-circle d-block" data-logobg="skin1"></a></li>
                            <li class="theme-item list-inline-item me-1"><a href="javascript:void(0)"
                                    class="theme-link rounded-circle d-block" data-logobg="skin2"></a></li>
                            <li class="theme-item list-inline-item me-1"><a href="javascript:void(0)"
                                    class="theme-link rounded-circle d-block" data-logobg="skin3"></a></li>
                            <li class="theme-item list-inline-item me-1"><a href="javascript:void(0)"
                                    class="theme-link rounded-circle d-block" data-logobg="skin4"></a></li>
                            <li class="theme-item list-inline-item me-1"><a href="javascript:void(0)"
                                    class="theme-link rounded-circle d-block" data-logobg="skin5"></a></li>
                            <li class="theme-item list-inline-item me-1"><a href="javascript:void(0)"
                                    class="theme-link rounded-circle d-block" data-logobg="skin6"></a></li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Navbar BG -->
                        <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item me-1"><a href="javascript:void(0)"
                                    class="theme-link rounded-circle d-block" data-navbarbg="skin1"></a></li>
                            <li class="theme-item list-inline-item me-1"><a href="javascript:void(0)"
                                    class="theme-link rounded-circle d-block" data-navbarbg="skin2"></a></li>
                            <li class="theme-item list-inline-item me-1"><a href="javascript:void(0)"
                                    class="theme-link rounded-circle d-block" data-navbarbg="skin3"></a></li>
                            <li class="theme-item list-inline-item me-1"><a href="javascript:void(0)"
                                    class="theme-link rounded-circle d-block" data-navbarbg="skin4"></a></li>
                            <li class="theme-item list-inline-item me-1"><a href="javascript:void(0)"
                                    class="theme-link rounded-circle d-block" data-navbarbg="skin5"></a></li>
                            <li class="theme-item list-inline-item me-1"><a href="javascript:void(0)"
                                    class="theme-link rounded-circle d-block" data-navbarbg="skin6"></a></li>
                        </ul>
                        <!-- Navbar BG -->
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item me-1"><a href="javascript:void(0)"
                                    class="theme-link rounded-circle d-block" data-sidebarbg="skin1"></a></li>
                            <li class="theme-item list-inline-item me-1"><a href="javascript:void(0)"
                                    class="theme-link rounded-circle d-block" data-sidebarbg="skin2"></a></li>
                            <li class="theme-item list-inline-item me-1"><a href="javascript:void(0)"
                                    class="theme-link rounded-circle d-block" data-sidebarbg="skin3"></a></li>
                            <li class="theme-item list-inline-item me-1"><a href="javascript:void(0)"
                                    class="theme-link rounded-circle d-block" data-sidebarbg="skin4"></a></li>
                            <li class="theme-item list-inline-item me-1"><a href="javascript:void(0)"
                                    class="theme-link rounded-circle d-block" data-sidebarbg="skin5"></a></li>
                            <li class="theme-item list-inline-item me-1"><a href="javascript:void(0)"
                                    class="theme-link rounded-circle d-block" data-sidebarbg="skin6"></a></li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                </div>
                <!-- End Tab 1 -->
                <!-- Tab 2 -->
                <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <ul class="mailbox list-style-none mt-3">
                        <li>
                            <div class="message-center chat-scroll position-relative">
                                <a href="javascript:void(0)"
                                    class="message-item d-flex align-items-center border-bottom px-3 py-2"
                                    id='chat_user_1' data-user-id='1'>
                                    <span class="user-img position-relative d-inline-block"> <img
                                            src="../assets/images/users/1.jpg" alt="user" class="rounded-circle w-100">
                                        <span class="profile-status rounded-circle online"></span> </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span
                                            class="fs-2 text-nowrap d-block text-muted text-truncate">Just see the my
                                            admin!</span> <span class="fs-2 text-nowrap d-block text-muted">9:30
                                            AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)"
                                    class="message-item d-flex align-items-center border-bottom px-3 py-2"
                                    id='chat_user_2' data-user-id='2'>
                                    <span class="user-img position-relative d-inline-block"> <img
                                            src="../assets/images/users/2.jpg" alt="user" class="rounded-circle w-100">
                                        <span class="profile-status rounded-circle busy"></span> </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5> <span
                                            class="fs-2 text-nowrap d-block text-muted text-truncate">I've sung a
                                            song! See you at</span> <span
                                            class="fs-2 text-nowrap d-block text-muted">9:10 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)"
                                    class="message-item d-flex align-items-center border-bottom px-3 py-2"
                                    id='chat_user_3' data-user-id='3'>
                                    <span class="user-img position-relative d-inline-block"> <img
                                            src="../assets/images/users/3.jpg" alt="user" class="rounded-circle w-100">
                                        <span class="profile-status rounded-circle away"></span> </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5> <span
                                            class="fs-2 text-nowrap d-block text-muted text-truncate">I am a
                                            singer!</span> <span class="fs-2 text-nowrap d-block text-muted">9:08
                                            AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)"
                                    class="message-item d-flex align-items-center border-bottom px-3 py-2"
                                    id='chat_user_4' data-user-id='4'>
                                    <span class="user-img position-relative d-inline-block"> <img
                                            src="../assets/images/users/4.jpg" alt="user" class="rounded-circle w-100">
                                        <span class="profile-status rounded-circle offline"></span> </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5> <span
                                            class="fs-2 text-nowrap d-block text-muted text-truncate">Just see the my
                                            admin!</span> <span class="fs-2 text-nowrap d-block text-muted">9:02
                                            AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)"
                                    class="message-item d-flex align-items-center border-bottom px-3 py-2"
                                    id='chat_user_5' data-user-id='5'>
                                    <span class="user-img position-relative d-inline-block"> <img
                                            src="../assets/images/users/5.jpg" alt="user" class="rounded-circle w-100">
                                        <span class="profile-status rounded-circle offline"></span> </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5> <span
                                            class="fs-2 text-nowrap d-block text-muted text-truncate">Just see the my
                                            admin!</span> <span class="fs-2 text-nowrap d-block text-muted">9:02
                                            AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)"
                                    class="message-item d-flex align-items-center border-bottom px-3 py-2"
                                    id='chat_user_6' data-user-id='6'>
                                    <span class="user-img position-relative d-inline-block"> <img
                                            src="../assets/images/users/6.jpg" alt="user" class="rounded-circle w-100">
                                        <span class="profile-status rounded-circle offline"></span> </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5> <span
                                            class="fs-2 text-nowrap d-block text-muted text-truncate">Just see the my
                                            admin!</span> <span class="fs-2 text-nowrap d-block text-muted">9:02
                                            AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)"
                                    class="message-item d-flex align-items-center border-bottom px-3 py-2"
                                    id='chat_user_7' data-user-id='7'>
                                    <span class="user-img position-relative d-inline-block"> <img
                                            src="../assets/images/users/7.jpg" alt="user" class="rounded-circle w-100">
                                        <span class="profile-status rounded-circle offline"></span> </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span
                                            class="fs-2 text-nowrap d-block text-muted text-truncate">Just see the my
                                            admin!</span> <span class="fs-2 text-nowrap d-block text-muted">9:02
                                            AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)"
                                    class="message-item d-flex align-items-center border-bottom px-3 py-2"
                                    id='chat_user_8' data-user-id='8'>
                                    <span class="user-img position-relative d-inline-block"> <img
                                            src="../assets/images/users/8.jpg" alt="user" class="rounded-circle w-100">
                                        <span class="profile-status rounded-circle offline"></span> </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5> <span
                                            class="fs-2 text-nowrap d-block text-muted text-truncate">Just see the my
                                            admin!</span> <span class="fs-2 text-nowrap d-block text-muted">9:02
                                            AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Tab 2 -->
                <!-- Tab 3 -->
                <div class="tab-pane fade p-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <h6 class="mt-3 mb-3">Activity Timeline</h6>
                    <div class="steamline">
                        <div class="sl-item">
                            <div class="sl-left bg-success"> <i data-feather="user" class="feather-sm fill-white"></i></div>
                            <div class="sl-right">
                                <div class="font-weight-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                            <div class="sl-right">
                                <div class="font-weight-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img class="rounded-circle" alt="user"
                                    src="../assets/images/users/2.jpg"> </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">Go to the Doctor <span class="sl-date">5 minutes
                                        ago</span>
                                </div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img class="rounded-circle" alt="user"
                                    src="../assets/images/users/1.jpg"> </div>
                            <div class="sl-right">
                                <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-primary"> <i data-feather="user" class="feather-sm fill-white"></i></div>
                            <div class="sl-right">
                                <div class="font-weight-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                            <div class="sl-right">
                                <div class="font-weight-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img class="rounded-circle" alt="user"
                                    src="../assets/images/users/4.jpg"> </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">Go to the Doctor <span class="sl-date">5 minutes
                                        ago</span>
                                </div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img class="rounded-circle" alt="user"
                                    src="../assets/images/users/6.jpg"> </div>
                            <div class="sl-right">
                                <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tab 3 -->
            </div>
        </div>
    </aside>
    <div class="chat-windows"></div> --}}
    <!-- -------------------------------------------------------------- -->
    <!-- All Jquery -->
    <!-- -------------------------------------------------------------- -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- apps -->
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('js/app.init.horizontal.js') }}"></script>
    <script src="{{ asset('js/app-style-switcher.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('js/pages/dashboards/dashboard1.js') }}"></script>

    @yield('script')

</body>

</html>