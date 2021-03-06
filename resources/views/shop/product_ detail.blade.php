@extends('shop.layout.shopLayout')
@section('shop-content')

    <!-- pages-title-start -->
    <div class="pages-title section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    @foreach($productDetails as $productDetail)
                        <div class="pages-title-text text-center">
                            <h2>{{ $productDetail->product_code }}</h2>
                            <ul class="text-left">
                                <li><a href="{{ route('home.index') }}">Home </a></li>
                                <li><span> // </span><a href="{{ route('shop.index') }}">shop </a></li>
                                <li><span> // </span>{{ $productDetail->product_code }}</li>
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- pages-title-end -->

    <!-- product-details-section-start -->
    <div class="product-details pages section-padding-top">
        <div class="container">
            @foreach($productDetails as $productDetail)
                <div class="row">
                    <div class="single-list-view">
                        <div class="col-xs-12 col-sm-5 col-md-4">
                            <div class="quick-image">
                                <div class="single-quick-image text-center">
                                    <div class="list-img">
                                        <div class="product-img tab-content">
                                            <div class="simpleLens-container tab-pane fade in" id="sin-1">
                                                <div class="pro-type">
                                                    <span>{{ $productDetail->sale }}</span>
                                                </div>
                                                <img src="{{ asset('storage/' . $productDetail->image) }}" height="510"
                                                                 alt="" class="simpleLens-big-image">
                                            </div>
                                            <div class="simpleLens-container tab-pane active fade in" id="sin-2">
                                                <div class="pro-type sell">
                                                    <span>sell</span>
                                                </div>
                                                <img src="{{ asset('storage/' . $productDetail->image) }}" height="510"
                                                                 alt="" class="simpleLens-big-image">
                                            </div>
                                            <div class="simpleLens-container tab-pane fade in" id="sin-3">
                                                <div class="pro-type">
                                                    <span>-15%</span>
                                                </div>
                                                <img src="{{ asset('storage/' . $productDetail->image) }}" height="510"
                                                                 alt="" class="simpleLens-big-image">
                                            </div>
                                            <div class="simpleLens-container tab-pane fade in" id="sin-4">
                                                <div class="pro-type">
                                                    <span>new</span>
                                                </div>
                                                <img src="{{ asset('storage/' . $productDetail->image) }}" height="510"
                                                                 alt="" class="simpleLens-big-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-thumb">
                                    <ul class="product-slider">
                                        <li><a data-toggle="tab" href="#sin-1"> <img
                                                    src="{{ asset('storage/' . $productDetail->image) }} "
                                                    alt="quick view" height="110"/> </a></li>
                                        <li class="active"><a data-toggle="tab" href="#sin-2"> <img
                                                    src="{{ asset('storage/' . $productDetail->image) }} "
                                                    alt="quick view" height="110"/> </a></li>
                                        <li><a data-toggle="tab" href="#sin-3"> <img
                                                    src="{{ asset('storage/' . $productDetail->image) }} "
                                                    alt="quick view" height="110"/> </a></li>
                                        <li><a data-toggle="tab" href="#sin-4"> <img
                                                    src="{{ asset('storage/' . $productDetail->image) }} "
                                                    alt="quick view" height="110"/> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-8">
                            <div class="quick-right">
                                <div class="list-text">
                                    <h3>{{ $productDetail->product_code }}</h3>
                                    <span>{{ $productDetail->category->name }}</span>
                                    <div class="ratting floatright">
                                        <p>( 27 Rating )</p>
                                        <i class="mdi mdi-star"></i>
                                        <i class="mdi mdi-star"></i>
                                        <i class="mdi mdi-star"></i>
                                        <i class="mdi mdi-star-half"></i>
                                        <i class="mdi mdi-star-outline"></i>
                                    </div>
                                    <h5>
                                        <del>$79.30</del>
                                        ${{ $productDetail->price }}</h5>
                                    <p>{{ $productDetail->characteristics }}</p>
                                    <div class="all-choose">
                                        <div class="s-shoose">
                                            <h5>Fur Color</h5>
                                            <div class="color-select clearfix">
                                                <span></span>
                                                <span class="outline"></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="s-shoose">
                                            <h5>size</h5>
                                            <div class="size-drop">
                                                <div class="btn-group">
                                                    <button type="button" class="btn">{{ $productDetail->weight }}</button>
                                                    <button type="button" class="btn dropdown-toggle"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        <span class=""><i class="mdi mdi-chevron-down"></i></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Xl</a></li>
                                                        <li><a href="#">SL</a></li>
                                                        <li><a href="#">S</a></li>
                                                        <li><a href="#">L</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-btn">
                                        @if($productDetail->status == 1)
                                            <a href="{{route('shop.addToCart',['productId'=>$productDetail->id])}}">add to cart</a>
                                        @endif
                                        <a href="{{ route('shop.showCart') }}">wishlist</a>
                                    </div>
                                    <div class="share-tag clearfix">
                                        <ul class="blog-share floatleft">
                                            <li><h5>share </h5></li>
                                            <li><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                                            <li><a href="#"><i class="mdi mdi-linkedin"></i></a></li>
                                            <li><a href="#"><i class="mdi mdi-vimeo"></i></a></li>
                                            <li><a href="#"><i class="mdi mdi-dribbble"></i></a></li>
                                            <li><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
        <!-- single-product item end -->
            <!-- reviews area start -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="reviews padding60 margin-top">
                        <ul class="reviews-tab clearfix">
                            <li><a data-toggle="tab" href="#moreinfo">more info</a></li>
                            <li class="active"><a data-toggle="tab" href="#reviews">Reviews</a></li>
                            <li><a data-toggle="tab" href="#tags">tags</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="info-reviews moreinfo tab-pane fade in" id="moreinfo">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                    tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis
                                    justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id
                                    nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum
                                    metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante.
                                    Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien
                                    libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi
                                    posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit
                                    et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis
                                    convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim
                                    lorem nec augue.</p>
                            </div>
                            <div class="info-reviews review-text tab-pane fade in active" id="reviews">
                                @foreach($comments as $comment)
                                <div class="about-author">
                                    <div class="autohr-text">
                                        <img src="{{asset('img/blog/author1.png')}}" alt=""/>
                                        <div class="author-des">
                                            <h4><a href="#">{{ $comment->username }}</a></h4>
                                            <span class="floatright ratting">
													<i class="mdi mdi-star"></i>
													<i class="mdi mdi-star"></i>
													<i class="mdi mdi-star"></i>
													<i class="mdi mdi-star-half"></i>
													<i class="mdi mdi-star-outline"></i>
												</span>
                                            <span>{{ $comment->created_at }}</span>
                                            <p>{{ $comment->content }}</p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                @endforeach

                                <div class="your-rating log-title">
                                    <h3>leave your review</h3>
                                    <h5>Your rating</h5>
                                    <div class="rating clearfix">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="mdi mdi-star-outline"></i>
                                                </a>
                                                <span>|</span>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="mdi mdi-star-outline"></i>
                                                    <i class="mdi mdi-star-outline"></i>
                                                </a>
                                                <span>|</span>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="mdi mdi-star-outline"></i>
                                                    <i class="mdi mdi-star-outline"></i>
                                                    <i class="mdi mdi-star-outline"></i>
                                                </a>
                                                <span>|</span>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="mdi mdi-star-outline"></i>
                                                    <i class="mdi mdi-star-outline"></i>
                                                    <i class="mdi mdi-star-outline"></i>
                                                    <i class="mdi mdi-star-outline"></i>
                                                </a>
                                                <span>|</span>
                                            </li>
                                            <li>
                                                <a href="#" >
                                                    <i class="mdi mdi-star-outline"></i>
                                                    <i class="mdi mdi-star-outline"></i>
                                                    <i class="mdi mdi-star-outline"></i>
                                                    <i class="mdi mdi-star-outline"></i>
                                                    <i class="mdi mdi-star-outline"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="custom-input">
                                    <form  method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="input-mail">
                                                    <input type="text" name="name" placeholder="Your Name"/>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="custom-mess">
                                                    <textarea name="inputContent" placeholder="Your Review"
                                                              rows="2"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="submit-text">
                                                    <button type="submit">submit review</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="info-reviews tags tab-pane fade in" id="tags">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                    tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis
                                    justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id
                                    nulla. Donec a neque libero. Pellentesque aliquet, semt mi, rutrum at sollicitudin
                                    rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus
                                    felis vehicula felis, a dapibus enim lorem nec augue.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- reviews area end -->
        </div>
    </div>
    <!-- product-details section end -->
    <!-- related-products section start -->
    <section class="single-products section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <h2>related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                @foreach($products as $product)
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-product">
                        <div class="product-img">
                            <div class="pro-type">
                                <span>new</span>
                            </div>
                            <a href="{{route('shop.detail',$product->id)}}">
                                <img src="{{ asset('storage/' . $product->image) }}"
                                     alt="Product Title"
                                height="350" width="270"/></a>
                            <div class="actions-btn">
                                <a href="#"><i class="mdi mdi-cart"></i></a>
                                <a href="#" data-toggle="modal" data-target="#quick-view"><i
                                        class="mdi mdi-eye"></i></a>
                                <a href="#"><i class="mdi mdi-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-dsc">
                            <p><a href="{{route('shop.detail',$product->id)}}">{{ $product->product_code }}</a></p>
                            <span>${{ $product->price }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- single product end -->
            </div>
        </div>
    </section>
    <!-- related-products section end -->
    <!-- quick view start -->
    <div class="product-details quick-view modal animated zoomInUp" id="quick-view">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="d-table">
                        <div class="d-tablecell">
                            <div class="modal-dialog">
                                <div class="main-view modal-content">
                                    <div class="modal-footer" data-dismiss="modal">
                                        <span>x</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-5 col-md-4">
                                            <div class="quick-image">
                                                <div class="single-quick-image text-center">
                                                    <div class="list-img">
                                                        <div class="product-img tab-content">
                                                            <div class="simpleLens-container tab-pane fade in"
                                                                 id="q-sin-1">
                                                                <div class="pro-type">
                                                                    <span>new</span>
                                                                </div>
                                                                <a class="simpleLens-image"
                                                                   data-lens-image="img/products/z1.jpg" href="#"><img
                                                                        src="img/products/z1.jpg" alt=""
                                                                        class="simpleLens-big-image"></a>
                                                            </div>
                                                            <div class="simpleLens-container tab-pane active fade in"
                                                                 id="q-sin-2">
                                                                <div class="pro-type sell">
                                                                    <span>sell</span>
                                                                </div>
                                                                <a class="simpleLens-image"
                                                                   data-lens-image="img/products/z2.jpg" href="#"><img
                                                                        src="img/products/z2.jpg" alt=""
                                                                        class="simpleLens-big-image"></a>
                                                            </div>
                                                            <div class="simpleLens-container tab-pane fade in"
                                                                 id="q-sin-3">
                                                                <div class="pro-type">
                                                                    <span>-15%</span>
                                                                </div>
                                                                <a class="simpleLens-image"
                                                                   data-lens-image="img/products/z3.jpg" href="#"><img
                                                                        src="img/products/z3.jpg" alt=""
                                                                        class="simpleLens-big-image"></a>
                                                            </div>
                                                            <div class="simpleLens-container tab-pane fade in"
                                                                 id="q-sin-4">
                                                                <div class="pro-type">
                                                                    <span>new</span>
                                                                </div>
                                                                <a class="simpleLens-image"
                                                                   data-lens-image="img/products/z4.jpg" href="#"><img
                                                                        src="img/products/z4.jpg" alt=""
                                                                        class="simpleLens-big-image"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="quick-thumb">
                                                    <ul class="product-slider">
                                                        <li><a data-toggle="tab" href="#q-sin-1"> <img
                                                                    src="{{asset('img/products/s1.jpg')}}" alt="quick view"/> </a>
                                                        </li>
                                                        <li class="active"><a data-toggle="tab" href="#q-sin-2"> <img
                                                                    src="{{asset('img/products/s2.jpg')}}" alt="small image"/> </a>
                                                        </li>
                                                        <li><a data-toggle="tab" href="#q-sin-3"> <img
                                                                    src="{{asset('img/products/s3.jpg')}}" alt="small image"/> </a>
                                                        </li>
                                                        <li><a data-toggle="tab" href="#q-sin-4"> <img
                                                                    src="{{asset('img/products/s4.jpg')}}" alt="small image"/> </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-7 col-md-8">
                                            <div class="quick-right">
                                                <div class="list-text">
                                                    <h3>men’s White t-shirt</h3>
                                                    <span>Summer men’s fashion</span>
                                                    <div class="ratting floatright">
                                                        <p>( 27 Rating )</p>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star-half"></i>
                                                        <i class="mdi mdi-star-outline"></i>
                                                    </div>
                                                    <h5>
                                                        <del>$79.30</del>
                                                        $69.30
                                                    </h5>
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have be suffered alteration in some form, by
                                                        injected humour, or randomised words which donot look even
                                                        slightly believable. If you are going to use a passage of Lorem
                                                        Ipsum, you neede be sure there isn't anything embarrassing
                                                        hidden in the middle of text. Lorem Ipsum is simply dummy text
                                                        of the printing and typesetting industry.</p>
                                                    <div class="all-choose">
                                                        <div class="s-shoose">
                                                            <h5>Color</h5>
                                                            <div class="color-select clearfix">
                                                                <span></span>
                                                                <span class="outline"></span>
                                                                <span></span>
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                        <div class="s-shoose">
                                                            <h5>size</h5>
                                                            <div class="size-drop">
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn">XL</button>
                                                                    <button type="button" class="btn dropdown-toggle"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                        <span class=""><i
                                                                                class="mdi mdi-chevron-down"></i></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="#">Xl</a></li>
                                                                        <li><a href="#">SL</a></li>
                                                                        <li><a href="#">S</a></li>
                                                                        <li><a href="#">L</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="s-shoose">
                                                            <h5>qty</h5>
                                                            <form action="#" method="POST">
                                                                <div class="plus-minus">
                                                                    <a class="dec qtybutton">-</a>
                                                                    <input type="text" value="02" name="qtybutton"
                                                                           class="plus-minus-box">
                                                                    <a class="inc qtybutton">+</a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="list-btn">
                                                        <a href="#">add to cart</a>
                                                        <a href="#">wishlist</a>
                                                        <a href="#">zoom</a>
                                                    </div>
                                                    <div class="share-tag clearfix">
                                                        <ul class="blog-share floatleft">
                                                            <li><h5>share </h5></li>
                                                            <li><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                                            <li><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                                                            <li><a href="#"><i class="mdi mdi-linkedin"></i></a></li>
                                                            <li><a href="#"><i class="mdi mdi-vimeo"></i></a></li>
                                                            <li><a href="#"><i class="mdi mdi-dribbble"></i></a></li>
                                                            <li><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- quick view end -->
@endsection
