<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory Management Software</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div id="main" class="" >
        <div class="row h-100 sticky-top">
            <div class="container-fluid ">
                <div class="  row flex-nowrap  bg-dark text-white  text-center">
                    <div class=" col-md-3 col-xl-2 px-sm-2 px-0 bg-dark ">
                        <h4 class="mt-3 ">Inventory</h4>
                    </div>
                    <div class="col py-3 bg-light">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <form class="d-flex mx-2">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                              </form>
                            <div class="d-flex flex-row-reverse collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="nav navbar-nav navbar-right mx-4 ">
                                    @if(session()->has('id'))
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{ URL::to('logout') }}">Logout</a>
                                        </li>
                                    @else
                                        <li class="nav-item active">
                                        <a class="nav-link" href="{{ URL::to('login') }}">Login</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="{{ URL::to('registration') }}">Registration</a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                          </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row h-100">
            <div class="container-fluid">
                <div class="row flex-nowrap">
                    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                            <a href="/" class=" d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                <span class="fs-5 d-none d-sm-inline ">Dashboard Homepage</span>
                            </a>
                            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                <li>
                                    <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white fs-5">
                                        <i class="fs-4 bi-speedometer2"></i> <span class="ms-2 d-none d-sm-inline">Inventory</span> </a>
                                    <ul class="collapse show nav flex-column ms-3" id="submenu1" data-bs-parent="#menu">
                                        <li class="w-100">
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span></a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white fs-5">
                                        <i class="fs-5 bi-speedometer2"></i> <span class="ms-2 d-none d-sm-inline">Sales</span> </a>
                                    <ul class="collapse show nav flex-column ms-3" id="submenu1" data-bs-parent="#menu">
                                        <li class="w-100">
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Customer</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Sales Order</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Packages</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Delivery</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Payments Received</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Sales Returns</span></a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white fs-5">
                                        <i class="fs-5 bi-bootstrap"></i> <span class="ms-2 d-none d-sm-inline">Purchases</span></a>
                                    <ul class="collapse nav flex-column ms-3" id="submenu2" data-bs-parent="#menu">
                                        <li class="w-100">
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Vendor</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Purchase Order</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Purchase Received</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Payments</span></a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#" class="nav-link px-0 align-middle text-white fs-5">
                                        <i class="fs-5 bi-people"></i> <span class="ms-2 d-none d-sm-inline">Stock</span> </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle text-white fs-5">
                                        <i class="fs-5 bi-people"></i> <span class="ms-2 d-none d-sm-inline">Reports</span> </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle text-white fs-5">
                                        <i class="fs-5 bi-people"></i> <span class="ms-2 d-none d-sm-inline">Online Payments</span> </a>
                                </li>

                                <li>
                                    <a href="#" class="nav-link px-0 align-middle text-white fs-5">
                                        <i class="fs-5 bi-people"></i> <span class="ms-2 d-none d-sm-inline">Notifications</span> </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle text-white fs-5">
                                        <i class="fs-5 bi-people"></i> <span class="ms-2 d-none d-sm-inline">Mobile Access</span> </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle text-white fs-5">
                                        <i class="fs-5 bi-people"></i> <span class="ms-2 d-none d-sm-inline">Multi-Location</span> </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle text-white fs-5">
                                        <i class="fs-5 bi-people"></i> <span class="ms-2 d-none d-sm-inline">Developer Space</span> </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle text-white fs-5">
                                        <i class="fs-5 bi-people"></i> <span class="ms-2 d-none d-sm-inline">User and Rolls</span> </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle text-white fs-5">
                                        <i class="fs-5 bi-people"></i> <span class="ms-2 d-none d-sm-inline">Setting</span> </a>
                                </li>
                            </ul>
                            <hr>
                            <div class="dropdown pb-4">
                                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                    <span class="d-none d-sm-inline mx-1">Md.Rahul Biswas</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                    <li><a class="dropdown-item" href="#">New project...</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col py-3 $blue-100">
                        Content area...
                    </div>
                </div>
            </div>

        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
