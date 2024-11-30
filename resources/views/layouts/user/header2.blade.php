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
                         <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('categories.index') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('uproducts.index') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('uproducts.index') }}">Products</a>
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