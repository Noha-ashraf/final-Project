 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>SHOPIE</title>
     {{-- fonts --}}
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">



     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
         integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
     </script>
     <script src={{ asset('js/shopiee.js') }}></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <link rel="stylesheet" href="{{ asset('css/shopiee.css') }}">

     {{-- owl css --}}
     <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
 </head>

 <body>

     {{-- start info-section --}}
     <nav class=" navbar navbar-expand-lg text-white">
         <div class="shipping container-fluid info col-4">
             <a class="navbar-brand container text-white" href="#"> <i class="fas fa-phone-alt">(00) 000 111
                     222</i> <i class="fas fa-envelope mail-icon">info@example.com</i>
             </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse col-6 " id="navbarSupportedContent">
                 {{-- strat logo --}}
                 <div class="logo " style="text-align:center">
                     <h2 style="font-family: 'Lobster', cursive; ">fashion</h2>
                 </div>
                 {{-- end logo --}}

                 <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                     aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse  align-items-center justify-content-end" id="navbarNav">
                     <ul class="navbar-nav ml-auto  ">
                         {{-- strat user-icons --}}
                         <div class="user-icon col-6 ">
                             <a href="{{ route('profile') }}"> <i class="far fa-user fa-lg userProf"></i> </a>
                             <i class="far fa-heart fa-lg"></i>
                             {{-- start bag icon --}}

                             {{-- {{ route('carts') }} --}}
                             <a href="{{ route('carts') }}"><i style="color:black"
                                     class="fas fa-shopping-bag fa-lg"></i></a>
                             {{-- end bag icon --}}
                         </div>
                         {{-- end user-icons --}}
                     </ul>
                 </div>
             </div>
         </div>
     </nav>
     {{-- end  info-section --}}


     {{-- start tab icon --}}
     <div class=" tab-Bar section  ">
         <div class="row col-12 tab-bar container-fluid">
             <div class="col-2 active"><a href="#">Home</a> </div>
             <div class="col-2"><a href="#">Shop</a></div>
             <div class="col-2"><a href="">Collection</a></div>
             <div class="col-2"><a href="">Women</a></div>
             <div class="col-2"><a href="">Men</a></div>
             <div class="col-2"><a href="">Kids</a> </div>
         </div>
         {{-- end tab icon --}}
     </div>
     {{-- end tab icon --}}

     {{-- start slider --}}
     <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
         <div class="carousel-indicators">
             <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                 class="active" aria-current="true" aria-label="Slide 1"></button>
             <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                 aria-label="Slide 2"></button>
             <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                 aria-label="Slide 3"></button>
         </div>
         <div class="carousel-inner">
             <div class="carousel-item active">
                 <img src="{{ url('images/22.jpg') }}" class="d-block w-100 " alt="">
             </div>

             <div class="carousel-item">
                 <img src="{{ url('images/33.jpg') }}" class="d-block w-100" alt="">
             </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
             data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
             data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
         </button>
     </div>
     {{-- end slider --}}

     {{-- strat search section --}}
     <div class="start-search-section container-fluid ">
         {{-- search form --}}
         <div class="row">
             <div class="search-section  col-12">
                 <form class="form-inline my-2 my-lg-0 col-4 " method="GET" action="{{ route('search.shopiee') }}">
                     <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                         name="query">
                     <button class=" btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                 </form>
                 {{-- end search section --}}
             </div>
         </div>
     </div>
     {{-- end search section --}}

     {{-- start category section --}}
     <div class="container category-section">
         <div class="row">
             @foreach ($categorys as $category)
                 <div class="col-4 ">
                     <div class="card">
                         <img class="card-img-top"
                             src="{{ $category->getFirstMediaUrl('category_image', 'thumb') }}" width=""
                             class=" img-fluid" alt="Responsive image">
                         <div class="card-body">
                             <h5 class="card-title">{{ $category->category_name }}</h5>
                             <p class="card-text">
                                 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam consequuntur fugit
                                 qui blanditiis quae aperiam ullam ipsam ea accusantium ducimus velit esse voluptate,
                                 corrupti itaque, eum sit dolores. Officia, veniam.</p>
                             <a href="/shopiee" class="btn btn-primary"
                                 style="background-color:pink;border:1px solid pink">Shop Now </a>
                         </div>
                     </div>
                 </div>

             @endforeach
         </div>
     </div>
     {{-- end category section --}}
     <div class="line container">
         <h2><span>Featured Items</span></h2>
     </div>
     {{-- start all products --}}
     <ul class="nav nav-tabs all-product-section" role="tablist">
         <li class="nav-item">
             <a class="nav-link active active" data-toggle="tab" href="#tabs-1" role="tab">All</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Men</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Women</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Kids</a>
         </li>
     </ul><!-- Tab panes -->
     <div class="tab-content">
         <div class="tab-pane active" id="tabs-1" role="tabpanel">
             {{-- STRAT All CATEGORY --}}
             <div class="row product_data">
                 @foreach ($products as $product)
                     <div class="card" style="width: 18rem;">
                         <img class="card-img-top" src="{{ $product->getFirstMediaUrl('product_image', 'thumb') }}"
                             class=" img-fluid" alt="Responsive image">
                         <div class="card-body">
                             <h3 class="product_name">{{ $product->product_name }}</h3>
                             <h4 class="price ">{{ $product->price }}$</h4>
                             <div class="star-icon">
                                 <i class="fas fa-star" style="color:pink"></i>
                                 <i class="fas fa-star" style="color:pink"></i>
                                 <i class="fas fa-star" style="color:pink"></i>
                                 <i class="fas fa-star" style="color:lightgray"></i>
                             </div>
                             <div class="icons">
                                 <div class="icons">
                                     <i class="fas fa-heart" style="color:lightgray"></i>
                                     <i class="fas fa-share-alt" style="color:lightgray"></i>
                                     <i class="fas fa-shopping-bag" style="color:lightgray"></i>
                                 </div>
                             </div>
                             {{-- strat add to cart --}}
                             <button type="button" class="btn btn-primary"
                                 style="background-color:pink;border:1px solid pink"> <a
                                     style="text-decoration:none;color:white"
                                     href="{{ route('cart.add', $product->id) }}">Add To Cart</a> </button>
                             {{-- end add to cart --}}
                         </div>
                     </div>
                 @endforeach
                 <div class="loadmore">
                     {{ $products->links() }}
                 </div>

             </div>
         </div>
         {{-- END ALL CATEGORY --}}

         {{-- start MEN category --}}
         <div class="tab-pane" id="tabs-2" role="tabpanel">
             <div class="row">
                 @foreach ($MenProducts as $MenProduct)
                     <div class="card" style="width: 18rem;">
                         <img class="card-img-top"
                             src="{{ $MenProduct->getFirstMediaUrl('product_image', 'thumb') }}"
                             class=" img-fluid" alt="Responsive image">

                         <div class="card-body">
                             <h4 class="product_name">{{ $MenProduct->product_name }}</h4>
                             <h3>{{ $MenProduct->price }}$</h3>

                             <div class="star-icon">
                                 <i class="fas fa-star" style="color:pink"></i>
                                 <i class="fas fa-star" style="color:pink"></i>
                                 <i class="fas fa-star" style="color:pink"></i>
                                 <i class="fas fa-star" style="color:lightgray"></i>
                             </div>
                             <div class="icons">
                                 <div class="icons">
                                     <i class="fas fa-heart" style="color:lightgray"></i>
                                     <i class="fas fa-cart-arrow-down" style="color:lightgray"></i>
                                     <i class="fas fa-share-alt" style="color:lightgray"></i>
                                 </div>
                             </div>
                             {{-- strat add to cart --}}
                             <button type="button" class="btn btn-primary"
                                 style="background-color:pink;border:1px solid pink"> <a
                                     style="text-decoration:none;color:white"
                                     href="{{ route('cart.add', $product->id) }}">Add To Cart</a> </button>
                             {{-- end add to cart --}}
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>

         {{-- strat Women category --}}
         <div class="tab-pane" id="tabs-3" role="tabpanel">
             <div class="row">
                 @foreach ($women as $woman)
                     <div class="card" style="width: 18rem;">
                         <img class="card-img-top" src="{{ $woman->getFirstMediaUrl('product_image', 'thumb') }}"
                             class=" img-fluid" alt="Responsive image">

                         <div class="card-body">
                             <h4>{{ $woman->price }}$</h4>

                             <h3>{{ $woman->product_name }}</h3>
                             <div class="star-icon">
                                 <i class="fas fa-star" style="color:pink"></i>
                                 <i class="fas fa-star" style="color:pink"></i>
                                 <i class="fas fa-star" style="color:pink"></i>
                                 <i class="fas fa-star" style="color:lightgray"></i>
                             </div>
                             <div class="icons">
                                 <div class="icons">
                                     <i class="fas fa-heart" style="color:lightgray"></i>
                                     <i class="fas fa-cart-arrow-down" style="color:lightgray"></i>
                                     <i class="fas fa-share-alt" style="color:lightgray"></i>
                                 </div>
                             </div>
                             {{-- strat add to cart --}}
                             <button type="button" class="btn btn-primary"
                                 style="background-color:pink;border:1px solid pink"> <a
                                     style="text-decoration:none;color:white"
                                     href="{{ route('cart.add', $product->id) }}">Add To Cart</a> </button>
                             {{-- end add to cart --}}
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>

         {{-- end Women category --}}

         {{-- start kid category --}}
         <div class="tab-pane" id="tabs-4" role="tabpanel">
             <div class="row">
                 @foreach ($Kids as $Kid)
                     <div class="card" style="width: 18rem;">
                         <img class="card-img-top" src="{{ $Kid->getFirstMediaUrl('product_image', 'thumb') }}"
                             class=" img-fluid" alt="Responsive image">

                         <div class="card-body">
                             <h4>{{ $Kid->price }}$</h4>

                             <h3>{{ $Kid->product_name }}</h3>
                             <div class="star-icon">
                                 <i class="fas fa-star" style="color:pink"></i>
                                 <i class="fas fa-star" style="color:pink"></i>
                                 <i class="fas fa-star" style="color:pink"></i>
                                 <i class="fas fa-star" style="color:lightgray"></i>
                             </div>
                             <div class="icons">
                                 <div class="icons">
                                     <i class="fas fa-heart" style="color:lightgray"></i>
                                     <i class="fas fa-cart-arrow-down" style="color:lightgray"></i>
                                     <i class="fas fa-share-alt" style="color:lightgray"></i>
                                 </div>
                             </div>
                             {{-- strat add to cart --}}
                             <button type="button" class="btn btn-primary"
                                 style="background-color:pink;border:1px solid pink"> <a
                                     style="text-decoration:none;color:white"
                                     href="{{ route('cart.add', $product->id) }}">Add To Cart</a> </button>
                             {{-- end add to cart --}}
                         </div>
                     </div>
                 @endforeach

             </div>
         </div>
         {{-- end kid category --}}
         {{-- end all products --}}



         {{-- strat trending-items section --}}
         <div class="line container">
             <h2><span>Trending Items</span></h2>
         </div>
         <div class="trending-items ">
             <div class="row">
                 @foreach ($trendItems as $trendItem)
                     <div class="card" style="width: 18rem;">
                         <img class="card-img-top"
                             src="{{ $trendItem->getFirstMediaUrl('product_image', 'thumb') }}"
                             class=" img-fluid" alt="Responsive image">

                         <div class="card-body">
                             <h3 class="product_name">{{ $trendItem->product_name }}</h3>
                             <h4 class="price ">{{ $trendItem->price }}$</h4>

                             <div class="star-icon">
                                 <i class="fas fa-star" style="color:pink"></i>
                                 <i class="fas fa-star" style="color:pink"></i>
                                 <i class="fas fa-star" style="color:pink"></i>
                                 <i class="fas fa-star" style="color:lightgray"></i>
                             </div>
                             <div class="icons">
                                 <div class="icons">
                                     <i class="fas fa-heart" style="color:lightgray"></i>
                                     <i class="fas fa-cart-arrow-down" style="color:lightgray"></i>
                                     <i class="fas fa-share-alt" style="color:lightgray"></i>
                                 </div>
                             </div>
                         </div>
                     </div>
                 @endforeach

                 <div class="loadmore">
                     {{ $products->links() }}
                 </div>
             </div>
         </div>
         {{-- end trending-items section --}}



         {{-- strat testimonial --}}
         <div id="myCarousel" class="carousel slide container" data-ride="carousel">
             <!-- Carousel indicators -->
             <ol class="carousel-indicators">
                 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                 <li data-target="#myCarousel" data-slide-to="1"></li>
                 <li data-target="#myCarousel" data-slide-to="2"></li>
             </ol>
             <!-- Wrapper for carousel items -->
             <div class="carousel-inner">
                 <div class="carousel-item active">
                     <div class="img-box"><img src="{{ url('images/test66.jpg') }}" alt="">
                     </div>
                     <p class="testimonial">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe optio
                         magnam, nulla reiciendis praesentium incidunt obcaecati consequatur aut rerum. Quam eos
                         similique pariatur, dolores, soluta repellendus temporibus animi accusamus ab aut, eum quidem
                         minima! Temporibus aliquid, aut ea vitae eius commodi, labore tenetur quae iste, recusandae
                         nostrum nobis doloribus! Quia.</p>
                     <p class="overview"><b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp
                             Tech.</a>
                     </p>
                     <div class="star-rating">
                         <ul class="list-inline">
                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                         </ul>
                     </div>
                 </div>
                 <div class="carousel-item">
                     <div class="img-box"><img src="{{ url('images/test1.jpg') }}" alt="">
                     </div>
                     <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Nam
                         eu
                         sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis
                         vel,
                         semper malesuada ante. Vestibulum idac nisl bibendum scelerisque non non purus.
                         Suspendisse varius nibh non aliquet.</p>
                     <p class="overview"><b>Paula Wilson</b>Media Analyst at <a href="#">SkyNet
                             Inc.</a>
                     </p>
                     <div class="star-rating">
                         <ul class="list-inline">
                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                         </ul>
                     </div>
                 </div>
                 <div class="carousel-item">
                     <div class="img-box"><img src="{{ url('images/tets.jpg') }}" alt="">
                     </div>
                     <p class="testimonial">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia
                         accusantium adipisci iure quod saepe, eum nobis obcaecati? Accusantium consequatur
                         consequuntur, minima dolorem debitis laudantium, deleniti recusandae expedita mollitia
                         voluptate deserunt doloribus esse nostrum asperiores dolore. Rerum iure corporis rem laboriosam
                         alias? Quae qui accusantium aperiam! Id sequi minus ducimus quos.</p>
                     <p class="overview"><b>Antonio Moreno</b>Web Developer at <a href="#">Circle
                             Ltd.</a></p>
                     <div class="star-rating">
                         <ul class="list-inline">
                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                         </ul>
                     </div>
                 </div>
             </div>
             <!-- Carousel controls -->
             <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                 <i class="fa fa-angle-left"></i>
             </a>
             <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                 <i class="fa fa-angle-right"></i>
             </a>
         </div>
         {{-- end testimonial --}}

         {{-- start section just-now --}}
         <div class="line-blog">
             <h4>Just in now</h4>
             <div class="theBlog">
                 <h2>The BLog</h2>
             </div>

         </div>
         {{-- end section just-now --}}

         {{-- start blog section --}}
         <section id="slider">
             <div class="container">

                 <div class="slider">

                     <div class="owl-carousel">
                         {{-- first blog --}}
                         <div class="slider-card ">
                             <img src="{{ url('images/blog1.jpg') }}" alt="..." class="img-thumbnail">
                             <p class="head">The digital wallet alternative for shopping sprees</p>
                             <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Blanditiis minima consectetur
                                 esse adipisci quae alias suscipit porro harum, odit odio.</p>
                         </div>
                         {{-- second blog --}}
                         <div class="slider-card ">
                             <img src="{{ url('images/blog2.jpg') }}" alt="..." class="img-thumbnail">
                             <p class="head">The currency notes are surely not in vogue</p>
                             <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Blanditiis minima consectetur
                                 esse adipisci quae alias suscipit porro harum, odit odio.</p>
                         </div>
                         {{-- third blog --}}
                         <div class="slider-card ">
                             <img src="{{ url('images/blog3.jpg') }}" alt="..." class="img-thumbnail">
                             <p class="head">The designer bags and matching high heels</p>
                             <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Blanditiis minima consectetur
                                 esse adipisci quae alias suscipit porro harum, odit odio.</p>
                         </div>
                         {{-- fourth blog --}}
                         <div class="slider-card ">
                             <img src="{{ url('images/blog4.jpg') }}" alt="..." class="img-thumbnail">
                             <p class="head">The trendy perfect shoulder bag to make you stylish</p>
                             <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Blanditiis minima consectetur
                                 esse adipisci quae alias suscipit porro harum, odit odio.</p>
                         </div>
                         {{-- fifth blog --}}
                         <div class="slider-card ">
                             <img src="{{ url('images/blog5.jpg') }}" alt="..." class="img-thumbnail">
                             <p class="head">Hyoty-Faux Leather Leggings -a stylish statement</p>
                             <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Blanditiis minima consectetur
                                 esse adipisci quae alias suscipit porro harum, odit odio.</p>
                         </div>
                     </div>

                 </div>
             </div>

         </section>



         {{-- end  blog section --}}




         {{-- start Newsletter section --}}
         <div class="Newsletter container">
             <h2>Newsletter</h2>
             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium, fugit.</p>

             <input type="text" id="email" value="Email address">
             <button type="submit" class="submit">SUBSCRIBE</button>

         </div>
         {{-- end Newsletter section --}}
     </div>


     {{-- start footer --}}
     <!-- Footer -->
     <footer class="text-center text-lg-start bg-light text-muted">
         <!-- Section: Social media -->
         <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
             <!-- Left -->
             <div class="me-5 d-none d-lg-block">
                 <span>Get connected with us on social networks:</span>
             </div>
             <!-- Left -->

             <!-- Right -->
             <div>
                 <a href="" class="me-4 text-reset">
                     <i class="fab fa-facebook-f"></i>
                 </a>
                 <a href="" class="me-4 text-reset">
                     <i class="fab fa-twitter"></i>
                 </a>
                 <a href="" class="me-4 text-reset">
                     <i class="fab fa-google"></i>
                 </a>
                 <a href="" class="me-4 text-reset">
                     <i class="fab fa-instagram"></i>
                 </a>
                 <a href="" class="me-4 text-reset">
                     <i class="fab fa-linkedin"></i>
                 </a>
                 <a href="" class="me-4 text-reset">
                     <i class="fab fa-github"></i>
                 </a>
             </div>
             <!-- Right -->
         </section>
         <!-- Section: Social media -->

         <!-- Section: Links  -->
         <section class="">
             <div class="container text-center text-md-start mt-5">
                 <!-- Grid row -->
                 <div class="row mt-3">
                     <!-- Grid column -->
                     <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                         <!-- Content -->
                         <h6 class="text-uppercase fw-bold mb-4">
                             <i class="fas fa-gem me-3"></i>Shopiee
                         </h6>
                         <p>
                             Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nemo odio, dicta eveniet id
                             voluptas.
                         </p>
                     </div>
                     <!-- Grid column -->

                     <!-- Grid column -->
                     <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                         <!-- Links -->
                         <h6 class="text-uppercase fw-bold mb-4">
                             Products
                         </h6>
                         <p>
                             <a href="#!" class="text-reset">Blouse</a>
                         </p>
                         <p>
                             <a href="#!" class="text-reset">Sweetshirt</a>
                         </p>
                         <p>
                             <a href="#!" class="text-reset">Pullover</a>
                         </p>
                         <p>
                             <a href="#!" class="text-reset">Trousers</a>
                         </p>
                     </div>
                     <!-- Grid column -->

                     <!-- Grid column -->
                     <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                         <!-- Links -->
                         <h6 class="text-uppercase fw-bold mb-4">
                             Useful links
                         </h6>
                         <p>
                             <a href="#!" class="text-reset">Pricing</a>
                         </p>
                         <p>
                             <a href="#!" class="text-reset">Settings</a>
                         </p>
                         <p>
                             <a href="#!" class="text-reset">Orders</a>
                         </p>
                         <p>
                             <a href="#!" class="text-reset">Help</a>
                         </p>
                     </div>
                     <!-- Grid column -->

                     <!-- Grid column -->
                     <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                         <!-- Links -->
                         <h6 class="text-uppercase fw-bold mb-4">
                             Contact
                         </h6>
                         <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                         <p>
                             <i class="fas fa-envelope me-3"></i>
                             info@example.com
                         </p>
                         <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                         <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                     </div>
                     <!-- Grid column -->
                 </div>
                 <!-- Grid row -->
             </div>
         </section>
         <!-- Section: Links  -->

         <!-- Copyright -->
         <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
             © 2021 Copyright:
             <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Noha_Ashraf.com</a>
         </div>
         <!-- Copyright -->
     </footer>
     <!-- Footer -->
     {{-- end  footer --}}


     </div>



     {{-- start session js --}}
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

     @if (session('success'))
         <script>
             swal.fire(
                 "{{ session('success') }}",
                 '',
                 'success'
             )
         </script>>
     @endif
     {{-- end session js --}}



     {{-- start owl js --}}
     <script>
         $(document).ready(function() {
             $('.owl-carousel').owlCarousel({
                 loop: true,
                 margin: 10,
                 responsiveClass: true,
                 responsive: {
                     0: {
                         items: 1,
                         nav: true
                     },
                     600: {
                         items: 1,
                         nav: false
                     },
                     1000: {
                         items: 3,
                         nav: true,
                         loop: false
                     }
                 }
             })

         })
     </script>
     {{-- end owl js --}}

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
          integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
     </script>
     <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
          integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
     </script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
          integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
     </script>






























 </body>

 </html>
