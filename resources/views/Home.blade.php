<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="row h-100  sticky-top">
        <div class=" container-fluid   text-center">
            <div class="col bg-danger">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="d-flex flex-row-reverse collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav navbar-right mx-4  ">

                            <li class="nav-item active ">
                                <a class="nav-link text-white" href="{{ URL::to('logout') }}">Contact Us</a>
                            </li>

                            <li class="nav-item active">
                            <a class="nav-link text-white" href="{{ URL::to('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="{{ URL::to('registration') }}">Support</a>
                            </li>

                    </ul>
                </div>
            </nav>
            <div class="col bg-danger">
                <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">Logo</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">

                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">Why Inventory?</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Link</a></li>
                              <li><a class="dropdown-item" href="#">Another link</a></li>
                              <li><a class="dropdown-item" href="#">A third link</a></li>
                            </ul>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">Features</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{ URL::to('dashboardhome') }}">Dashboard Homepages</a></li>
                              <li><a class="dropdown-item" href="#">Another link</a></li>
                              <li><a class="dropdown-item" href="#">A third link</a></li>
                            </ul>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">Resources</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Link</a></li>
                              <li><a class="dropdown-item" href="#">Another link</a></li>
                              <li><a class="dropdown-item" href="#">A third link</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
            </div>

        </div>
    </div>
    <div class=" row  h-100 ">
        <img class="img-fluid" src={{ asset('img/home01.png') }} alt="">
    </div>

    <div class="container my-5 ">
        <div class="row align-items-center">
          <div class="col-4">
            <div class="card" style="max-width: 18rem;">
              <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" controls></video>

              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-danger">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card" style="max-width: 18rem;">
              <video src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" class="card-img-top" muted autoplay loop></video>

              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-danger">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-4">
            <div class="card" style="max-width: 18rem;">
              <div class="ratio ratio-16x9">
                <iframe width="1424" height="652" src="https://www.youtube.com/embed/NAMvdbS4lk4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-danger">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>

      </div>

        <div class="container py-4 bg-light my-5">
            <div class=" row alinalign-items-center mt-5 py-3">
                <h1 style="font-weight: bold" class=" display-4 lead h1 text-center text-bold">How will Inventory Managment System help your business? </h1>
                <p class=" h5 my-4 text-center">Grow profits, save time, & boost performance by unifying all your buying, warehousing, sales & production processes</p>
                <div class="col-4 py-4 mt-5">
                    <div class="card text-center shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-body py-4">
                            <img style="width:100px;" src="img/inventory.jpg" class=" my-3 card-img-top smallimg" alt="">
                            <h5 style="font-weight: bold" class=" h3 card-title">Automates reordering</h5>
                             <p class="card-text">Manage all your purchasing in one place with fast & easy POs, optimised replenishment levels, demand forecasting & more..</p>
                             <a href="#" class="btn btn-danger">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 py-4 mt-5">
                    <div class="card text-center shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-body py-4">
                            <img style="width:100px;" src="img/inventory.jpg" class="my-3 card-img-top smallimg" alt="">
                            <h5 style="font-weight: bold" class=" h3 card-title">Ends stocktake pain</h5>
                             <p class="card-text">No more hours of pointless stock counts. With easy digital stocktaking & cycle counts your end of financial year count is a breeze..</p>
                             <a href="#" class="btn btn-danger">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 py-4 mt-5">
                    <div class="card text-center shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-body py-4">
                            <img style="width:100px;" src="img/inventory.jpg" class=" my-3 card-img-top smallimg" alt="">
                            <h5 style="font-weight: bold" class=" h3 card-title">Streamlines production</h5>
                             <p class="card-text">Master manufacturing with the kanban planner + digital Bills of Materials that automatically cost your products – so your margins are always.</p>
                             <a href="#" class="btn btn-danger">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 py-4 ">
                    <div class="card text-center shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-body py-4">
                            <img style="width:100px;" src="img/inventory.jpg" class=" my-3 card-img-top smallimg" alt="">
                            <h5 style="font-weight: bold" class=" h3 card-title">Super-charges sales</h5>
                             <p class="card-text">Action orders from B2B portals, eCommerce integrations, and offline sources all in the one place. Track your most profitable lines, set KPIs.</p>
                             <a href="#" class="btn btn-danger">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 py-4 ">
                    <div class="card text-center shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-body py-4">
                            <img style="width:100px;" src="img/inventory.jpg" class=" my-3 card-img-top smallimg" alt="">
                            <h5 style="font-weight: bold" class="h3 card-title">Perfects demand planning</h5>
                             <p class="card-text">Weather the peaks and troughs of demand with intuitive forecasting & customised replenishment strategies that save you thousands.</p>
                             <a href="#" class="btn btn-danger">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 py-4 ">
                    <div class="card text-center shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-body py-4">
                            <img style="width:100px;" src="img/inventory.jpg" class=" my-3 card-img-top smallimg" alt="">
                            <h5 style="font-weight: bold" class=" h3 card-title">Now with built-in CRM</h5>
                             <p class="card-text">Take your sales strategy to the next level with a CRM that connects the dots between the goods you buy and make – and the customers you sell.</p>
                             <a href="#" class="btn btn-danger">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4 bg-light">
            <div class=" row alinalign-items-center text-center py-3">
                <h1 style="font-weight:bold;font-family:Arial; font-style:inherit" class="Display-2 text-danger"> Meet Our Customers</h1>


            </div>
        </div>

        <div class=" row h-100 py-4">
            <div class=" container-fluid ">
                <div class=" row py-4">
                    <div class=" col-sm-6 bg-danger text-center py-4">
                        <h1 style="font-weight:bold" class=" h1 display-4 text-white py-4">Inventory management software for
                            your industry</h1>
                        <h4 class="h4 text-white py-4">Whether you’re B2B, D2C (or a bit of both) Unleashed has the flexibility & features to suit the way you work; from make-to-order manufacturers to wholesale distributors, & everyone in between</h4>
                    </div>
                    <div class=" col-sm-6 bg-light">
                        <div class="container mt-3 text-danger">
                            <h2>List Group With Linked Items</h2>
                            <div class="list-group ">
                              <a href="#" class="list-group-item list-group-item-action text-danger py-3 h4">Manufacturing</a>
                              <a href="#" class="list-group-item list-group-item-action text-danger py-3 h4">Wholesale</a>
                              <a href="#" class="list-group-item list-group-item-action text-danger py-3 h4">eCommerce</a>
                              <a href="#" class="list-group-item list-group-item-action text-danger py-3 h4">Distribution</a>
                              <a href="#" class="list-group-item list-group-item-action text-danger py-3 h4">Food & Beverage</a>
                              <a href="#" class="list-group-item list-group-item-action text-danger py-3 h4">Brewing</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row h-100 py-4">
            <div class="container-fluid">
                <div class="row py-4">
                    <div class="col bg-light text-white mx-4">
                        <img class="py-2 text-center" style="width:50px;eight:50px" src="img/inventory.jpg" alt="">
                        <h3  style="font-weight:bold" class="h5 text-danger">Inventory Management System</h3>
                        <h4  style="font-weight:bold" class="h6 text-dark my-2">General Enquiries:</h4>
                        <h3 class="h6 text-danger">(NA) +1 888 813 6691</h3>
                        <h3 class="h6 text-danger">(GB) +44 117 205 1394</h3>
                        <h3 class="h6 text-danger">(AU) +61 3 7003 6819</h3>
                        <h3 class="h6 text-danger">(NZ) +64 9 801 6337</h3>
                        <h3 class="h6 text-danger">(Global) +64 9 801 6337</h3>
                    </div>
                    <div class="col bg-light text-white">
                        <h4 style="font-weight:bold" class="h5 text-danger mt-4 ">Inventory</h4>
                        <h3 style="font-weight:bold" class="h6"><a href="" class="">Product</a></h3>
                        <h3 style="font-weight:bold" class="h6"><a href="" class="">Sales</a></h3>
                        <h3 style="font-weight:bold" class="h6"><a href="" class="">Customer</a></h3>
                        <h3 style="font-weight:bold" class="h6"><a href="" class="">Sales Order</a></h3>
                        <h3 style="font-weight:bold" class="h6"><a href="" class="">Delivery</a></h3>
                        <h3 style="font-weight:bold" class="h6"><a href="" class="">Sales Return</a></h3>
                        <h3 style="font-weight:bold" class="h6"><a href="" class="">Payments Received</a></h3>

                    </div>
                    <div class="col bg-light text-white">
                        <h4 style="font-weight:bold" class="h5 text-danger mt-4 ">Purchases</h4>
                        <h3 style="font-weight:bold" class="h6"><a href="" class="">Vendor</a></h3>
                        <h3 style="font-weight:bold" class="h6"><a href="" class="">Purchases Order</a></h3>
                        <h3 style="font-weight:bold" class="h6"><a href="" class="">purchases Received</a></h3>
                        <h3 style="font-weight:bold" class="h6"><a href="" class="">Stock</a></h3>
                        <h3 style="font-weight:bold" class="h6"><a href="" class="">Reports</a></h3>
                        <h3 style="font-weight:bold" class="h6"><a href="" class="">Mobile Access</a></h3>
                        <h3 style="font-weight:bold" class="h6"><a href="" class="">Multi-Location</a></h3>

                    </div>
                    <div class="col bg-light text-white">
                        <h4 style="font-weight:bold" class="h5 text-danger mt-4 ">Invetory Management</h4>
                        <h3 style="font-weight:bold" class="h6"><a href="" class="">Contact Us</a></h3>
                        <h3 style="font-weight:bold" class="h6"><a href="" class="">About Us</a></h3>

                    </div>
                </div>

            </div>
        </div>
    <div class="row h-100 bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <p class="mx-4 my-3">© 2024 All Rights reserved by Innovative Solutions.</p>
                </div>
                <div class="col-sm-4">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">

                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                          <ul class="navbar-nav ">
                            <li class="nav-item active">
                              <a class="nav-link" href="#">Privacy Policy<span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Terms & Conditions</a>
                            </li>

                          </ul>

                        </div>
                      </nav>
                </div>
                <div class="col-sm-4 d-flex flex-row-reverse">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">

                        <div class="collapse navbar-collapse mx-4" id="navbarTogglerDemo01">

                          <ul class="navbar-nav ">
                            <li class="nav-item active">
                             <a  href="" class="mx-4"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li class="nav-item">
                               <a href="" class="mx-4"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="mx-4"><i class="fa-brands fa-linkedin"></i></a>
                             </li>
                             <li class="nav-item">
                                <a href="" class="mx-4"><i class="fa-brands fa-youtube"></i></a>
                             </li>
                          </ul>

                        </div>
                      </nav>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
