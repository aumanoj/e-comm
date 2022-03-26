@extends('frontend.layout')
@section('content')
<section id="breadcrumbRow" class="row">
        <h2>single product</h2>
        <div class="row pageTitle m0">
            <div class="container">
                <h4 class="fleft">single product</h4>
                <ul class="breadcrumb fright">
                    <li><a href="index.php">home</a></li>
                    <li class="active">single product</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="row contentRowPad">
        <div class="container">
            <div class="row singleProduct">
                <div class="col-sm-7">
                    <div class="row m0 flexslider" id="productImageSlider">
                        <ul class="slides">
                            <li><img src="{{asset('assets/images/product/single/1.jpg')}}" alt=""></li>
                            <li><img src="{{asset('assets/images/product/single/2.jpg')}}" alt=""></li>
                            <li><img src="{{asset('assets/images/product/single/3.jpg')}}" alt=""></li>
                            <li><img src="{{asset('assets/images/product/single/4.jpg')}}" alt=""></li>
                            <li><img src="{{asset('assets/images/product/single/5.jpg')}}" alt=""></li>
                            <li><img src="{{asset('assets/images/product/single/6.jpg')}}" alt=""></li>
                            <li><img src="{{asset('assets/images/product/single/7.jpg')}}" alt=""></li>
                            <li><img src="{{asset('assets/images/product/single/8.jpg')}}" alt=""></li>
                        </ul>
                    </div>
                    <div class="row m0 flexslider" id="productImageSliderNav">
                        <ul class="slides">
                            <li><img class="img-thumbnail" src="{{asset('assets/images/product/single/1s.jpg')}}" alt=""></li>
                            <li><img class="img-thumbnail" src="{{asset('assets/images/product/single/2s.jpg')}}" alt=""></li>
                            <li><img class="img-thumbnail" src="{{asset('assets/images/product/single/3s.jpg')}}" alt=""></li>
                            <li><img class="img-thumbnail" src="{{asset('assets/images/product/single/4s.jpg')}}" alt=""></li>
                            <li><img class="img-thumbnail" src="{{asset('assets/images/product/single/5s.jpg')}}" alt=""></li>
                            <li><img class="img-thumbnail" src="{{asset('assets/images/product/single/6s.jpg')}}" alt=""></li>
                            <li><img class="img-thumbnail" src="{{asset('assets/images/product/single/7s.jpg')}}" alt=""></li>
                            <li><img class="img-thumbnail" src="{{asset('assets/images/product/single/8s.jpg')}}" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="row m0">
                        <h4 class="heading">{{$single_product->product_model_name}}</h4>
                        <h3 class="heading price"><del>₹ {{$single_product->product_price}}</del>₹ {{$single_product->discounted_price}}</h3>
                        <div class="row m0 starsRow">
                            <div class="stars fleft">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-empty"></i>
                            </div>
                            <div class="fleft">
                                5 Review(s) <span>|</span> <a href="#">Add Your Review</a>
                            </div>
                        </div>
                        <div class="row descList m0">
                            <dl class="dl-horizontal">
                                <dt>manufacturer :</dt>
                                <dd>Tartaan & Co</dd>
                                <dt>availability :</dt>
                                <dd>In Stock 20 Item(s)</dd>
                                <dt>product code :</dt>
                                <dd>Xuo15</dd>
                            </dl>
                        </div>
                        <div class="row m0 shortDesc">
                            <p class="m0">Rustic, natural, often made of bark-covered logs or simple planks. Look for junk shop finds when in the country (for authenticity), or purchase hand-made new versions.<br>
                            Rustic, natural, often made of bark-covered logs or simple planks. Look for junk shop finds when in the country (for authenticity), or purchase hand-made new versions. when in the country (for authenticity), or purchase hand-made </p>
                        </div>
                        <div class="row m0">
                            <h5 class="heading proAttr">Size :</h5>
                            <select class="selectpicker sizeSelect">
                                <option value="queen">queen</option>
                                <option value="red">red</option>
                                <option value="black">black</option>
                                <option value="white">white</option>
                            </select>
                        </div>
                        <div class="row m0">
                            <ul class="list-inline wce">
                                <li><a href="#"><i class="far fa-heart"></i>Add to Wishlist</a></li>
                                <li><a href="#"><i class="fas fa-shopping-cart-alt"></i>Add to Compare</a></li>
                                <li><a href="#"><i class="fas fa-envelope"></i>Email to a Friend</a></li>
                            </ul>
                        </div>
                        <div class="row m0 qtyAtc">
                            <div class="fleft quantity">
                                <div class="fleft">Qty <span>=</span></div>
                                <div class="input-group spinner">
                                    <input type="text" class="form-control" value="2">
                                    <div class="input-group-btn-vertical">
                                        <button class="btn btn-default"><i class="fas fa-angle-up"></i></button>
                                        <button class="btn btn-default"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="fleft btn btn-default"><img src="{{asset('assets/images/icons/cart3.png')}}" alt=""> add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m0 tabRow">
                <ul class="nav nav-tabs" role="tablist" id="shortcodeTab">
                    <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">
                        <i class="fas fa-align-left"></i> description
                    </a></li>
                    <li role="presentation"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">
                        <i class="fas fa-thumbs-up"></i> review (1)
                    </a></li>
                    <li role="presentation"><a href="#additionInfo" aria-controls="additionInfo" role="tab" data-toggle="tab">
                        <i class="fas fa-file-text"></i> Additional Information
                    </a></li>
                </ul>
                <div class="tab-content shortcodeTabContent">
                    <div role="tabpanel" class="tab-pane row m0 active" id="description">
                        <div class="fleft img"><img class="img-responsive" src="{{asset('assets/images/product/10.png')}}" alt=""></div>
                        <div class="fleft desc">
                            <h5 class="heading">Product Details</h5>
                            <p>Dining furniture designs are plain in appearance, stripped to bare essentials (few turnings, no decorations), featuring natural materials; no ornamentation; strong emphasis on function.Dining furniture designs are plain in appearance, stripped to bare essentials (few turnings, no decorations), featuring natural materials; no ornamentation; strong emphasis on function.</p>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane row m0" id="review">
                        <div class="row m0 reviewCount">1 review for this product</div>
                        <div class="row m0 reviewBody">
                            <span class="bold">4</span> out of 5 <br>
                            <span class="bold">K Admas</span> - March 10, 2018
                            <p class="m0">Amazing Product!</p>
                        </div>
                        <div class="row m0 reviewAdd">
                            <h4 class="heading">Add a review</h4>
                            <form action="#" role="form" method="post" class="row m0 reviewForm">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name *" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email *" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="url" class="form-control" placeholder="Your Website">
                                    </div>
                                    <div class="col-sm-6 ratingStars">
                                        Your Rating <input type="hidden" class="rating" data-fractions="2">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="heading">Your Review</h4>
                                        <textarea name="reviewText" id="reviewText" class="form-control reviewText"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" class="btn btn-primary filled">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane row m0" id="additionInfo">
                                 <div class="row m0 additionInfoRow">
                                    <div class="fleft infoTitle">Material</div>
                                    <div class="fleft infos">Gold</div>
                                </div>
                                <div class="row m0 additionInfoRow">
                                    <div class="fleft infoTitle">Stone </div>
                                    <div class="fleft infos">Diamond</div>
                                </div>
                                 <div class="row m0 additionInfoRow">
                                    <div class="fleft infoTitle">Resizable?  </div>
                                    <div class="fleft infos">No</div>
                                </div>
                                <div class="row m0 additionInfoRow">
                                    <div class="fleft infoTitle">Item Height </div>
                                    <div class="fleft infos">4.3 Millimeters </div>
                                </div>
                                <div class="row m0 additionInfoRow">
                                    <div class="fleft infoTitle">Item Width</div>
                                    <div class="fleft infos">2.5 Millimeters </div>
                                </div>
                                <div class="row m0 additionInfoRow">
                                    <div class="fleft infoTitle">Item Width</div>
                                    <div class="fleft infos">2.5 Millimeters </div>
                                </div>
                                 <div class="row m0 additionInfoRow">
                                    <div class="fleft infoTitle">Ring Size</div>
                                    <div class="fleft infos">7</div>
                                </div> 
                    </div>
                </div>
            </div> <!--Tabs Row-->
            <div class="row shortcodesRow m0">
                <div class="row sectionTitle">
                    <h3>latest products</h3>
                    <h5>know more about our latest collection</h5>
                </div>
                <div class="col-sm-3 product">
                    <div class="productInner row m0">
                        <div class="row m0 imgHov">
                            <img src="{{asset('assets/images/product/pro1p/1.png')}}" alt="">
                            <div class="row m0 hovArea">
                                <div class="row m0 icons">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fas fa-shopping-cart-alt"></i></a></li>
                                        <li><a href="#"><i class="fas fa-expand"></i></a></li>
                                    </ul>                                    
                                </div>
                                <div class="row m0 proType"><a href="#">Baccarat</a></div>
                                <div class="row m0 proRating">
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                </div>
                                <div class="row m0 proPrice"><i class="fas fa-usd"></i>455.00</div>
                            </div>
                        </div>
                        <div class="row m0 proName"><a href="single-product.php">colorful sofa</a></div>
                        <div class="row m0 proBuyBtn">
                            <button class="addToCart btn">add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 product">
                    <div class="productInner row m0">
                        <div class="row m0 imgHov">
                            <img src="{{asset('assets/images/product/pro1p/2.png')}}" alt="">
                            <div class="row m0 hovArea">
                                <div class="row m0 icons">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fas fa-shopping-cart-alt"></i></a></li>
                                        <li><a href="#"><i class="fas fa-expand"></i></a></li>
                                    </ul>                                    
                                </div>
                                <div class="row m0 proType"><a href="#">Baccarat</a></div>
                                <div class="row m0 proRating">
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                </div>
                                <div class="row m0 proPrice"><i class="fas fa-usd"></i>455.00</div>
                            </div>
                        </div>
                        <div class="row m0 proName"><a href="single-product.php">colorful sofa</a></div>
                        <div class="row m0 proBuyBtn">
                            <button class="addToCart btn">add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 product">
                    <div class="productInner row m0">
                        <div class="row m0 imgHov">
                            <img src="{{asset('assets/images/product/pro1p/3.png')}}" alt="">
                            <div class="row m0 hovArea">
                                <div class="row m0 icons">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fas fa-shopping-cart-alt"></i></a></li>
                                        <li><a href="#"><i class="fas fa-expand"></i></a></li>
                                    </ul>                                    
                                </div>
                                <div class="row m0 proType"><a href="#">Baccarat</a></div>
                                <div class="row m0 proRating">
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                </div>
                                <div class="row m0 proPrice"><i class="fas fa-usd"></i>455.00</div>
                            </div>
                        </div>
                        <div class="row m0 proName"><a href="single-product.php">colorful sofa</a></div>
                        <div class="row m0 proBuyBtn">
                            <button class="addToCart btn">add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 product">
                    <div class="productInner row m0">
                        <div class="row m0 imgHov">
                            <img src="{{asset('assets/images/product/pro1p/4.png')}}" alt="">
                            <div class="row m0 hovArea">
                                <div class="row m0 icons">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fas fa-shopping-cart-alt"></i></a></li>
                                        <li><a href="#"><i class="fas fa-expand"></i></a></li>
                                    </ul>                                    
                                </div>
                                <div class="row m0 proType"><a href="#">Baccarat</a></div>
                                <div class="row m0 proRating">
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                    <i class="fas fa-star-o"></i>
                                </div>
                                <div class="row m0 proPrice"><i class="fas fa-usd"></i>455.00</div>
                            </div>
                        </div>
                        <div class="row m0 proName"><a href="single-product.php">colorful sofa</a></div>
                        <div class="row m0 proBuyBtn">
                            <button class="addToCart btn">add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection