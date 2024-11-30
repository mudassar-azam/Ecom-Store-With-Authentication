@extends("layouts.user.app2")
@section('content')
<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>Categories</span>
            </h2>
        </div>
        <div class="row">
            @foreach($categories as $product)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                        <div class="img-box">
                            <a href="{{route('product.by.catgory' , $product->id)}}"><img src="{{ asset('catimages/' . $product->image) }}"></a>
                        </div>
                        <div class="detail-box">
                            <a href="{{route('product.by.catgory' , $product->id)}}">
                                <h5>
                                    {{$product->name}}
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach    
        </div>
    </div>
</section>
@endsection