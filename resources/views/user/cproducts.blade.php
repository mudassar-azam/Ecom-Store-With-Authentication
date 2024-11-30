@extends("layouts.user.app2")
@section('content')
<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="row">
            @foreach($products as $product)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                        @auth
                            <div class="option_container">
                                <div class="options">
                                    <form action="{{route('cart.add' , $product->id)}}" method="post">
                                        @csrf
                                        <button type="submit" class="option1">
                                            Add To Cart
                                        </button>
                                    </form>
                                    <form action="{{route('order.add' , $product->id)}}" method="post">
                                        @csrf
                                        <button type="submit" class="option2">
                                            Order Now
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endauth
                        <div class="img-box">
                            <img src="{{ asset('product-images/' . $product->image) }}">
                        </div>
                        <div class="detail-box">
                            <h5>
                                {{$product->name}}
                            </h5>
                            <h6>
                                ${{$product->price}}
                            </h6>
                        </div>
                    </div>
                </div>
            @endforeach    
        </div>
    </div>
</section>
@endsection