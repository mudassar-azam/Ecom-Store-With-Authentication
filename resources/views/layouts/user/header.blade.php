         <!-- header section strats -->
         <header class="header_section">
             <div class="container">
                 <nav class="navbar navbar-expand-lg custom_nav-container ">
                     <a class="navbar-brand" href="index.html"><img width="250" src="{{asset('assets/user/images/logo.png')}}" alt="#" /></a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse"
                         data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                         aria-expanded="false" aria-label="Toggle navigation">
                         <span class=""> </span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <ul class="navbar-nav">
                             <li class="nav-item active">
                                 <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="{{route('categories.index')}}">Categories</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="{{route('uproducts.index')}}">Products</a>
                             </li>
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('cart.index')}}"><i class="fas fa-shopping-cart"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('order.index')}}"><i class="fas fa-store"></i></a>
                                </li>
                            @endauth    
                            @auth
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <li class="nav-item">
                                    <a style="color:white;margin-left:5px;"
                                    class="nav-link btn-danger" href="{{route('login')}}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                             @else 
                                <li class="nav-item">
                                    <a style="color:white;" class="nav-link btn-success" href="{{route('register')}}">Sign Up</a>
                                </li>

                                <li class="nav-item">
                                    <a style="color:white;margin-left:5px;" class="nav-link btn-danger" href="{{route('login')}}">Login</a>
                                </li>
                             @endauth
                         </ul>
                     </div>
                 </nav>
             </div>
         </header>
         <!-- end header section -->
         <!-- slider section -->
         <section class="slider_section ">
             <div class="slider_bg_box">
                 <img src="{{asset('assets/user/images/slider-bg.jpg')}}" alt="">
             </div>
             <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                 <div class="carousel-inner">
                     <div class="carousel-item active">
                         <div class="container ">
                             <div class="row">
                                 <div class="col-md-7 col-lg-6 ">
                                     <div class="detail-box">
                                         <h1>
                                             <span>
                                                 Sale 20% Off
                                             </span>
                                             <br>
                                             On Everything
                                         </h1>
                                         <p>
                                             Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam
                                             fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat
                                             molestias, veniam, vel architecto veritatis delectus repellat modi impedit
                                             sequi.
                                         </p>
                                         <div class="btn-box">
                                             <a href="" class="btn1">
                                                 Shop Now
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="carousel-item ">
                         <div class="container ">
                             <div class="row">
                                 <div class="col-md-7 col-lg-6 ">
                                     <div class="detail-box">
                                         <h1>
                                             <span>
                                                 Sale 20% Off
                                             </span>
                                             <br>
                                             On Everything
                                         </h1>
                                         <p>
                                             Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam
                                             fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat
                                             molestias, veniam, vel architecto veritatis delectus repellat modi impedit
                                             sequi.
                                         </p>
                                         <div class="btn-box">
                                             <a href="" class="btn1">
                                                 Shop Now
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="carousel-item">
                         <div class="container ">
                             <div class="row">
                                 <div class="col-md-7 col-lg-6 ">
                                     <div class="detail-box">
                                         <h1>
                                             <span>
                                                 Sale 20% Off
                                             </span>
                                             <br>
                                             On Everything
                                         </h1>
                                         <p>
                                             Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam
                                             fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat
                                             molestias, veniam, vel architecto veritatis delectus repellat modi impedit
                                             sequi.
                                         </p>
                                         <div class="btn-box">
                                             <a href="" class="btn1">
                                                 Shop Now
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="container">
                     <ol class="carousel-indicators">
                         <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                         <li data-target="#customCarousel1" data-slide-to="1"></li>
                         <li data-target="#customCarousel1" data-slide-to="2"></li>
                     </ol>
                 </div>
             </div>
         </section>
         <!-- end slider section -->