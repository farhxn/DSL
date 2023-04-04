@extends('layouts.app')
@section('content')
<!-- -------------------------------------------------------------- -->
<!-- Container fluid  -->
<!-- -------------------------------------------------------------- -->
<div class="container-fluid">
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
    {{-- <div class="card">
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
                        </div> --}}
    <!-- End Sales Overview -->
    <!-- Row Cards -->
    <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="me-3 align-self-center"><span class="lstick d-inline-block align-middle me-3"></span><img src="../assets/images/icon/income.png" alt="Income" /></div>
                        <div class="align-self-center">
                            <h6 class="text-muted mt-2 mb-0">Total Tasks</h6>
                            <h2>{{ App\Models\Task::get()->count() }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="me-3 align-self-center"><span class="lstick d-inline-block align-middle me-3"></span><img src="../assets/images/icon/expense.png" alt="Income" /></div>
                        <div class="align-self-center">
                            <h6 class="text-muted mt-2 mb-0">Total Groups</h6>
                            {{-- <h2>{{ App\Models\TaskGroup::get()->count() }}</h2> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="me-3 align-self-center"><span class="lstick d-inline-block align-middle me-3"></span><img src="../assets/images/icon/expense.png" alt="Income" /></div>
                        <div class="align-self-center">
                            <h6 class="text-muted mt-2 mb-0">Completed Tasks</h6>
                            {{-- <h2>{{ App\Models\Task::where('status',1)->get()->count() }}</h2> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-4 d-flex align-items-stretch">
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
                            </div> --}}
    </div>
    <!-- End Row Cards -->
    <!-- Project of the month -->
    {{-- <div class="card">
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
                        </div> --}}
    <!-- End Project of the month -->
    <!-- Row Starts -->
    {{-- <div class="row">
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
                        </div> --}}
    <!-- Row ends -->
    <!-- Row Starts -->
    {{-- <div class="row">
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
                        </div> --}}
    <!-- Row ends -->
    <!-- Row starts -->
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title"><span class="lstick  d-inline-block align-middle"></span>To Do list
                            </h4>
                            <h6 class="card-subtitle mb-0">List of your next task to complete</h6>
                        </div>
                        <div class="ms-auto mt-3 mt-md-0">
                            <button class="btn btn-sm btn-rounded btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Add Task</button>
                        </div>
                    </div>

                    <!-- -------------------------------------------------------------- -->
                    <!-- To do list widgets -->
                    <!-- -------------------------------------------------------------- -->
                    <div class="to-do-widget mt-3 common-widget">
                        <!-- .modal for add task -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header d-flex">
                                        <h4 class="modal-title">Add Task</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ url('storeTask') }}">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="compose-box">
                                                    <div class="compose-content" id="addTaskModalTitle">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="d-flex mail-to mb-4">
                                                                    <div class="w-100">
                                                                        <label for="">Task Title</label>
                                                                        <input id="task" type="text" placeholder="Title" class="form-control mb-1" name="title" required />
                                                                        <label for="">Description</label>
                                                                        <textarea name="description" placeholder="Description" class="form-control mb-2" id="" cols="30" rows="3" required></textarea>
                                                                        <label for="">Due Date </label>
                                                                        <input type="date" placeholder="Due Date" class="form-control mb-2" name="dueDate" required />
                                                                        <label for="">Starting Time</label>
                                                                        <input type="time" name="startTime" id="" class="form-control mb-2" required>
                                                                        <label for="">Ending Time</label>
                                                                        <input type="time" name="endTime" id="" class="form-control mb-2" required>
                                                                        <label for="">Assigning To</label>
                                                                        <input type="text" name="assign" id="" class="form-control mb-2" required>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-danger" data-bs-dismiss="modal">
                                                    <i class="ri-close-fill align-middle"></i> Discard
                                                </button>
                                                <button type="submit" class="btn btn-info">
                                                    Add Task
                                                </button>
                                                {{-- <button type="submit" class="btn btn-success edit-tsk">Add</button> --}}
                                            </div>
                                        </form>
                                    </div>
                                   </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <ul class="list-task todo-list list-group mb-0" data-role="tasklist">
                            @foreach (App\Models\Task::get() as $tsk)
                            <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                                <div class="form-check form-check-inline w-100">
                                    <input type="checkbox" class="form-check-input danger check-light-danger" id="inputSchedule" name="inputCheckboxesSchedule">
                                    <label for="inputSchedule" class="form-check-label font-weight-medium"> <span>{{ $tsk->title }}</span><span class="badge bg-danger badge-pill ms-1">Today</span>
                                    </label>
                                </div>
                                {{-- <ul class="assignedto list-style-none m-0 ps-4 ms-1 mt-1">
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
                                                    </ul> --}}
                            </li>

                            @endforeach
                            {{-- <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
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
                                                </li> --}}
                            {{-- <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
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
                                                </li> --}}
                            {{-- <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
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
                                                </li> --}}
                            {{-- <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
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
                                                </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-4 d-flex align-items-stretch">
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
                            </div> --}}
    </div>
    <!-- Row ends -->
</div>
@endsection