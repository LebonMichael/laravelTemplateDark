<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/cssfront/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('assets/css/cssfront/style.css')}}">
    <title>Watches Shop</title>
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="col-lg-2">
                        <a class="navbar-brand" href="#">
                            <img src="asset/images/joomla-watches-shop-logo.png" alt="">
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class=" collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="col-lg-10">
                            <ul class="navbar-nav d-flex justify-content-evenly me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="asset/pages/producten.html">Producten</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="asset/pages/contact.html">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="asset/pages/blog.html">Blog</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2 text-center">
                            <a href="asset/pages/myCart.html" class="btn"><i class="bi bi-cart4"></i></a>
                            <a class="btn"><i class="bi bi-search"></i></a>
                            <a class="btn"><i class="bi bi-person-circle"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<main>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <section id="header">
                    <div class="row text-center">
                        <h1 class="mb-md-3">Welcome to Watches Shop</h1>
                        <div class="col-md-2 col-sm-6 order-2 order-md-1">
                            <div>
                                <img src="{{asset('img/solden/sale.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class=" text-center ">
                                <img src="{{asset('img/solden/solden-1.jpg')}}" class="img-fluid" alt="">
                                <img src="{{asset('img/solden/solden-2.jpg')}}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-8 order-1 order-md-2 mx-auto my-lg-3 my-xl-5 my-sm-4 mb-sm-0 mb-3">
                            <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img  src="{{asset('img/headImage/headimage1.jpg')}}"
                                              class="w-100 img-fluid" alt="rolex">
                                    </div>
                                    <div class="carousel-item">
                                        <img  src="{{asset('img/headImage/headimage2.jpg')}}"
                                              class="w-100 img-fluid" alt="rolex">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 order-3 order-md-3 d-none d-md-inline">
                            <div class="d-none d-md-inline">
                                <img src="{{asset('img/solden/sale.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="text-center">
                                <img src="{{asset('img/solden/solden-1.jpg')}}" class="img-fluid" alt="">
                                <img src="{{asset('img/solden/solden-2.jpg')}}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </section>
                <section id="brands">
                    <div class="row my-5">
                        <div class="col-lg-10 offset-lg-1">
                            <h2 class="text-center mt-3">Our brands</h2>
                            <p class="text-center ">Brands we have in stock.</p>
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner ">
                                    <div class="carousel-item active">
                                        <div class="row row-cols-md-5 row-cols-2">
                                            @foreach($brands->random(5)->take(5) as $brand)
                                                <a href="asset/pages/producten.html">
                                                    <img class="img-fluid p-0 p-2" height="62" width="auto"
                                                         src="{{$brand->photo ? asset('img/brands') . $brand->photo->file : 'https://via.placeholder.com/62'}}"
                                                         alt="{{$brand->name}}">
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row row-cols-md-5 row-cols-2">
                                            @foreach($brands->random(5)->take(5) as $brand)
                                                <a href="asset/pages/producten.html">
                                                    <img class="img-fluid p-0 p-2" height="62" width="auto"
                                                         src="{{$brand->photo ? asset('img/brands') . $brand->photo->file : 'https://via.placeholder.com/62'}}"
                                                         alt="{{$brand->name}}">
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    @foreach($products as $product)
                        <div class="row row-cols-sm-3 my-lg-5 my-sm-3 ">
                            <div class="text-center d-none d-sm-block my-2 img-place">
                                <a href="asset/pages/product.html" class="text-decoration-none text-black">
                                    <div class=" text-center img-place">
                                        <img class="img-fluid p-0"
                                             src="{{$product->photo ? asset('img/products') . $product->photo->file : 'http://via.placeholder.com/400x400'}}"
                                             alt="{{$product->name}}">
                                        <div class="img-text">
                                            <h2 class="fw-bold">HUGO BOSS</h2>
                                        </div>
                                        <div class="img-text2">
                                            <p>{{$product->price}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </section>

                <section id="newArrivals">
                    <div class="row">
                        <div class="text-center mt-md-0 mt-5">
                            <h2>NEW ARRIVAL</h2>
                            <p>You can follow the latest new products added to my website from here.</p>
                        </div>
                        <div class="row row-cols-lg-4 row-cols-md-2 my-5 m-0">
                            @foreach($products->take(4) as $product)
                                <a href="asset/pages/product.html" class="text-decoration-none text-black">
                                    <div class="text-center my-2 img-place">
                                        <img class="img-fluid p-0"
                                             src="{{$product->photo ? asset('img/products') . $product->photo->file : 'http://via.placeholder.com/400x400'}}"
                                             alt="{{$product->name}}">
                                        <div class="">
                                            <h2 class="fw-bold">{{$product->name}}</h2>
                                        </div>
                                        <div class="">
                                            <p>???{{$product->price}}</p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row bg-grey ">
            <section id="tab-watches">
                <div class="col-lg-10 offset-lg-1 mt-5 ">
                    <ul class="nav nav-tabs  justify-content-center" id="myTab" role="tablist">
                        @foreach($brands as $brand)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="{{$brand->name}}-tab" data-bs-toggle="tab"
                                        data-bs-target="#{{$brand->name}}" type="button" role="tab"
                                        aria-controls="{{$brand->name}}"
                                        aria-selected="true">{{$brand->name}}
                                </button>
                            </li>
                        @endforeach
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        @if($brand->product)
                            @foreach($brand->product as $product)
                                <div class="tab-pane fade show" id="{{$brand->name}}" role="tabpanel"
                                     aria-labelledby="{{$brand->name}}-tab">
                                    <div class="row row-cols-lg-3 row-cols-sm-2 my-5">
                                        @foreach($products as $product)
                                            <div class="my-2">
                                                <img
                                                    src="{{$product->photo ? asset('img/products') . $product->photo->file : 'http://via.placeholder.com/400x400'}}"
                                                    alt="{{$product->name}}" class="img-fluid">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            @endforeach
                        @endif
                        <div class="tab-pane fade" id="bulova" role="tabpanel" aria-labelledby="bulova-tab">
                            <div class="row row-cols-lg-3 row-cols-sm-2 my-5">
                                <div class="my-2">
                                    <img src="asset/images/bulova-1.jpg" class="img-fluid" alt="river island">
                                </div>
                                <div class="my-2">
                                    <img src="asset/images/chasy-bulova-1.jpg" class="img-fluid" alt="river island">
                                </div>
                                <div class="my-2">
                                    <img src="asset/images/bulova-3.jpg" class="img-fluid" alt="river island">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="casio" role="tabpanel" aria-labelledby="casio-tab">
                            <div class="row row-cols-lg-3 row-cols-sm-2 my-5">
                                <div class="my-2">
                                    <img src="asset/images/casio-1.png" class="img-fluid" alt="river island">
                                </div>
                                <div class="my-2">
                                    <img src="asset/images/casio-3.jpg" class="img-fluid" alt="river island">
                                </div>
                                <div class="my-2">
                                    <img src="asset/images/casio-5.jpg" class="img-fluid" alt="river island">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="adidas" role="tabpanel" aria-labelledby="adidas-tab">
                            <div class="row row-cols-lg-3 row-cols-sm-2 my-5">
                                <div class="my-2">
                                    <img src="asset/images/adidas-1.jpeg" class="img-fluid" alt="river island">
                                </div>
                                <div class="my-2">
                                    <img src="asset/images/adidas-2.jpeg" class="img-fluid" alt="river island">
                                </div>
                                <div class="my-2">
                                    <img src="asset/images/adidas-3.jpg" class="img-fluid" alt="river island">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section id="blog">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center mt-5">
                    <div id="latestNews">
                        <h2>LATEST BLOG</h2>
                        <p>Here are the latest and most recent blog posts added to the website.</p>
                    </div>
                    <div class="row row-cols-lg-3 row-cols-sm-2 my-5">
                        <div class="text-center my-2">
                            <img src="asset/images/tommy-hilfiger.png" class="img-fluid" alt="river island">
                            <div class="my-3">
                                <p>05 - 02 - 2017</p>
                                <p class="fw-bold">Tommy Hilfiger</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et libero id magna
                                    pharetra vestibul</p>
                            </div>
                        </div>
                        <div class="text-center my-2">
                            <img src="asset/images/armani-exchange.png" class="img-fluid" alt="river island">
                            <div class="my-3">
                                <p>05 - 02 - 2017</p>
                                <p class="fw-bold">Armani Exchange</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et libero id magna
                                    pharetra vestibul</p>
                            </div>
                        </div>
                        <div class="text-center my-2">
                            <img src="asset/images/bulova-watches.png" class="img-fluid" alt="river island">
                            <div class="my-3">
                                <p>05 - 02 - 2017</p>
                                <p class="fw-bold">Bulova watches</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et libero id magna
                                    pharetra vestibul</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h4>Your personal SALES guide...</h4>
                        <div class="bg-img ">
                            <form>
                                <div class="mb-3 ">
                                    <p class="text-white fw-bold m-0">Stay up to date with DISCOUNT...</p>
                                    <label for="exampleInputEmail1" class="form-label"></label>
                                    <input type="email" placeholder="Your email address"
                                           class="form-control w-50 mx-auto"
                                           id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-secondary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>
<footer>
    <div class="container-fluid">
        <div class="row text-center">
            <section id="=contacts">
                <div class="row mt-3 bg-grey">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row row-cols-lg-4 row-cols-sm-2 text-center my-4">
                            <div class="my-2 link">
                                <h5>OUR CONTACT</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, neque.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, explicabo.</p>
                                <a href="tel:+32494754693">+32 494 75 46 93</a>
                                <br>
                                <a href="mailto:lebontje45@hotmail.com">lebontje45@hotmail.com</a>
                            </div>
                            <div class="my-2">
                                <h5>COMPANY</h5>
                                <div class="row row-cols-1 link">
                                    <!-- Button trigger modal -->
                                    <a href="#WhatWeDo" data-bs-toggle="modal" data-bs-target="#WhatWeDo">What We Do</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="WhatWeDo" tabindex="-1" aria-labelledby="WhatWeDo"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content ">
                                                <div class="modal-header ">
                                                    <h5 class="modal-title " id="exampleWhatWeDo">What We Do</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet
                                                        animi
                                                        dicta distinctio ducimus earum, eligendi est ipsam labore magnam
                                                        minima
                                                        necessitatibus quaerat quis ratione repellat repudiandae sed
                                                        voluptatem
                                                        voluptatum!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#AvailableServices" data-bs-toggle="modal"
                                       data-bs-target="#AvailableServices">Available
                                        Services</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="AvailableServices" tabindex="-1"
                                         aria-labelledby="exampleAvailableServices" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleAvailableServices">Available
                                                        Services</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet
                                                        animi
                                                        dicta distinctio ducimus earum, eligendi est ipsam labore magnam
                                                        minima
                                                        necessitatibus quaerat quis ratione repellat repudiandae sed
                                                        voluptatem
                                                        voluptatum!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#latestNews">Latest Posts</a>
                                    <a href="#faqs" data-bs-toggle="modal" data-bs-target="#faqs">FAQs</a>
                                    <div class="modal fade" id="faqs" tabindex="-1" aria-labelledby="exampleFaqs"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleFaqs">FAQs</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet
                                                        animi
                                                        dicta distinctio ducimus earum, eligendi est ipsam labore magnam
                                                        minima
                                                        necessitatibus quaerat quis ratione repellat repudiandae sed
                                                        voluptatem
                                                        voluptatum!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="#DeliveryInfo" data-bs-toggle="modal" data-bs-target="#DeliveryInfo">Delivery
                                        Inforamtion</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="DeliveryInfo" tabindex="-1"
                                         aria-labelledby="exampleDeliveryInfo" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleDeliveryInfo">Delivery
                                                        Inforamtion</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet
                                                        animi
                                                        dicta distinctio ducimus earum, eligendi est ipsam labore magnam
                                                        minima
                                                        necessitatibus quaerat quis ratione repellat repudiandae sed
                                                        voluptatem
                                                        voluptatum!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="#PrivacyPolicy" data-bs-toggle="modal" data-bs-target="#PrivacyPolicy">Privacy
                                        Policy</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="PrivacyPolicy" tabindex="-1"
                                         aria-labelledby="examplePrivacyPolicy" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="examplePrivacyPolicy">Privacy
                                                        Policy</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet
                                                        animi
                                                        dicta distinctio ducimus earum, eligendi est ipsam labore magnam
                                                        minima
                                                        necessitatibus quaerat quis ratione repellat repudiandae sed
                                                        voluptatem
                                                        voluptatum!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-2 link">
                                <h5>PROFILE</h5>
                                <div class="row row-lg-cols-1 link">
                                    <a href="asset/pages/myCart.html">My Cart</a>
                                    <a href="#AboutUs" data-bs-toggle="modal" data-bs-target="#AboutUs">About Us</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="AboutUs" tabindex="-1" aria-labelledby="exampleAboutUs"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content ">
                                                <div class="modal-header ">
                                                    <h5 class="modal-title " id="exampleAboutUs">About Us</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet
                                                        animi
                                                        dicta distinctio ducimus earum, eligendi est ipsam labore magnam
                                                        minima
                                                        necessitatibus quaerat quis ratione repellat repudiandae sed
                                                        voluptatem
                                                        voluptatum!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-2">
                                <h5>CONTACT FORM</h5>
                                <form method="post" action="mailto:lebontje45@hotmail.com">
                                    <div class="input-group mb-3">
                                        <label for="firstName"></label>
                                        <input id="firstName" name="FirstName" value="" type="text"
                                               placeholder="First name"
                                               aria-label="First name" class="form-control">
                                    </div>
                                    <div class="input-group mb-3">
                                        <label for="lastName"></label>
                                        <input id="lastName" name="LastName" value="" type="text"
                                               placeholder="Last name"
                                               aria-label="Last name" class="form-control">
                                    </div>
                                    <div class="input-group mb-3">
                                        <label for="email"></label>
                                        <input id="email" name="email" value="" type="email" class="form-control"
                                               placeholder="Email address" aria-label="email"
                                               aria-describedby="email">
                                    </div>
                                    <div class="input-group">
                                        <label for="tekst"></label>
                                        <textarea id="tekst" name="Bericht" class="form-control"
                                                  aria-label="With textarea"></textarea>
                                    </div>
                                    <div class="my-2">
                                        <button type="submit" class="btn btn-secondary">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-8 offset-sm-2">
                            <form class="">
                                <div class="row w-100 m-0">
                                    <div class="col-lg-4">
                                        <!--<label for="userName"></label>-->
                                        <input id="userName" name="userName" value="" type="text" placeholder="Username"
                                               aria-label="Username" class="form-control">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="password" placeholder="Password" class="form-control"
                                               id="exampleInputPassword1">
                                        <label for="exampleInputPassword1" class="form-label"></label>
                                    </div>
                                    <div class="col-lg-auto">
                                        <button type="submit" class="btn btn-secondary w-100">Log In</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-check my-3">
                                        <div class="row row-cols-sm-3 mx-3">
                                            <div>
                                                <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                                                <label class="form-check-label" for="autoSizingCheck2">
                                                    Remember me
                                                </label></div>
                                            <div class="link"><a href="#">Forgot Password</a></div>
                                            <div class="link">
                                                <a href="#">Forgot Username</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="row text-center">
                            <div class="link my-3">
                                <a href="#"><i class="bi bi-facebook mx-3"></i></a>
                                <a href="#"><i class="bi bi-instagram mx-3"></i></a>
                                <a href="#"><i class="bi bi-twitter mx-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <p>?? copyright 2021</p>
                </div>

            </section>
        </div>
    </div>


</footer>

<script src="{{asset('assets/js/jsfront/bootstrap.min.js')}}"></script>

</body>
</html>
