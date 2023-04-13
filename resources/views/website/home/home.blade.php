<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">Fashion House</a>
            <ul class="navbar-nav">
                <li><a href="" class="nav-link">Home</a></li>
                <li><a href="" class="nav-link">About</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product</a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">product one</a></li>
                        <li><a href="" class="dropdown-item">product two</a></li>
                        <li><a href="" class="dropdown-item">product three</a></li>
                    </ul>
                </li>
                <li><a href="" class="nav-link">Contact</a></li>
                <li><a href="" class="nav-link">Booking</a></li>
            </ul>
        </div>
    </nav>

    <!--About Section Start-->

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <h1 class="text-center mb-3">About Us</h1>
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{ asset('images/about.jpg') }}" alt="" height="300" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h3>About Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam modi, blanditiis quis,
                            dolores error sint accusamus exercitationem veritatis itaque quod sed illo nesciunt
                            asperiores voluptates labore vero quam vel impedit?
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam modi, blanditiis quis,
                            dolores error sint accusamus exercitationem veritatis itaque quod sed illo nesciunt
                            dolores error sint accusamus
                        </p>

                    </div>
                    <a href="" class="btn btn-outline-success mt-2">About Us</a>
                </div>

            </div>
        </div>
    </section>

    <!--About Section End-->

    <!--Produts Section Start-->

    <section class="py-5">
        <div class="container">
            <h1 class="text-center mb-3">Our Products</h1>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/about.jpg') }}" alt="" class="card-img-top"/>
                        <div class="card-body">
                            <h5>Product Name</h5>
                            <h5>TK.600</h5>
                            <a href="" class="btn btn-success">Details</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/about.jpg') }}" alt="" class="card-img-top"/>
                        <div class="card-body">
                            <h5>Product Name</h5>
                            <h5>TK.600</h5>
                            <a href="" class="btn btn-success">Details</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/about.jpg') }}" alt="" class="card-img-top"/>
                        <div class="card-body">
                            <h5>Product Name</h5>
                            <h5>TK.600</h5>
                            <a href="" class="btn btn-success">Details</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/about.jpg') }}" alt="" class="card-img-top"/>
                        <div class="card-body">
                            <h5>Product Name</h5>
                            <h5>TK.600</h5>
                            <a href="" class="btn btn-success">Details</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--Products Section End-->

    <!--Contact Section Start-->

    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <h3 class="text-warning text-center">Contact Form</h3>
                <div class="col-md-4 mx-auto">
                    <div class="card bg-danger">
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Full Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Rajat Saha"/>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="rajat@gmail.com"/>
                                </div>
                                <div class="form-group">
                                    <label for="">Mobile</label>
                                    <input type="number" class="form-control" name="mobile" placeholder="01717440651"/>
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Dhanmondi, Dhaka"/>
                                </div>
                                <div class="form-group">
                                    <label for="">Message</label>
                                    <textarea class="form-control" name="message"></textarea>
                                </div>
                                <div class="form-group mt-2">
                                    <label for=""></label>
                                    <input type="submit" class="btn btn-success" value="Submit"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Section End-->

    <!--Booking Section Start-->

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </section>


    <script src="{{ asset('assets/js/jquery-3.6.4.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>

</body>

</html>
