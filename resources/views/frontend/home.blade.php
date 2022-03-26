   @extends('frontend.layout')
 @section('content')
 
      <section id="slider" class="row">
         <div class="row sliderCont flexslider m0">
            <ul class="slides nav">
               <li>
                  <img src="{{asset('assets/images/slider/1.jpg')}}" alt="">
                  <div class="text_lines row m0">
                     <div class="container p0 text-right">
                        <h3>traditional costume jewellery</h3>
                        <h2>new collections</h2>
                        <h4><a class="theme_btn with_i" href="#"><i class="fas fa-plus-circle"></i>Shop now</a></h4>
                     </div>
                  </div>
                  <!--Text Lines-->
               </li>
               <li>
                  <img src="{{asset('assets/images/slider/3.jpg')}}" alt="">
                  <div class="text_lines row m0">
                     <div class="container p0 text-left">
                        <h3>exquisite Designer Rings</h3>
                        <h2>new collections</h2>
                        <h4><a class="theme_btn with_i" href="#"><i class="fas fa-plus-circle"></i>Shop now</a></h4>
                     </div>
                  </div>
                  <!--Text Lines-->
               </li>
               <li>
                  <img src="{{asset('assets/images/slider/5.jpg')}}" alt="">
                  <div class="text_lines row m0">
                     <div class="container p0">
                        <h3>traditional Designer Jwellery</h3>
                        <h2>new collections</h2>
                        <h4><a class="theme_btn with_i" href="#"><i class="fas fa-plus-circle"></i>Shop now</a></h4>
                     </div>
                  </div>
                  <!--Text Lines-->
               </li>
               <li>
                  <img src="{{asset('assets/images/slider/4.jpg')}}" alt="">
                  <div class="text_lines row m0">
                     <div class="container p0 text-left">
                        <h3>Find your perfect diamond</h3>
                        <h2>By Bansal and Sons Jewellers</h2>
                        <h4><a class="theme_btn with_i" href="#"><i class="fas fa-plus-circle"></i>Shop now</a></h4>
                     </div>
                  </div>
                  <!--Text Lines-->
               </li>
            </ul>
         </div>
      </section>
      <!--Slider-->
      <section id="ring_sec" class="ring_sec">
         <div id="trigger" class="container ">
            <div class="row">
               <div class="col-md-6  diamond_j_cont">
                  <div  class="diamond_j">
                  </div>
                  <div class="diamond_b">
                     <img alt="" class="img-responsive"  src="{{asset('assets/images/ring.png')}}">
                  </div>
               </div>
               <div   class="col-md-6  ring_cont">
                  <h2>About Bansal and Sons Jewellers</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pellentesque, diam viverra lacinia sodales, elit turpis consequat sapien, nec feugiat ex urna quis libero. Sed vel purus iaculis, lobortis neque vel, commodo enim. Quisque sollicitudin arcu ullamcorper libero consectetur commodo. </p>
                  <p>
                     lobortis neque vel, commodo enim!
                  </p>
                  <a  class="com_btn" href="product.php">Start shopping</a>
               </div>
            </div>
         </div>
      </section>
      <section id="gridBox" class="gridBox">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="leftGrid">
                        <div class="boxMain ">
                           <a href="product.php">
                              <div class="gbinner imgTop">
                                 <div class="gb_img_box">
                                    <img class="img-responsive fill_img" alt="" src="{{asset('assets/images/gridImage/1.png')}}">
                                 </div>
                                 <div class="gb_cont_box fill_bg">
                                    <h2>A flick of the wrist. The tinkle of ornaments. Wisps of laughter.</h2>
                                    <p><i>Browse our stunning selection of diamond bangles and bracelets</i></p>
                                    <span class="gb_item_action_btn">Shop Bangles and Bracelets</span>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="boxMain ">
                           <a href="product.php">
                              <div class="gbinner imgTop">
                                 <div class="gb_img_box">
                                    <img class="img-responsive nofill_img" alt="" src="{{asset('assets/images/gridImage/2.png')}}">
                                 </div>
                                 <div class="gb_cont_box">
                                    <h2>Stand alone. Stand out</h2>
                                    <p><i>Save 65% Off on Real Diamond Jewellery</i></p>
                                    <span class="gb_item_action_btn">Shop Now</span>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="boxMain ">
                           <a href="product.php">
                              <div class="gbinner imgTop">
                                 <div class="gb_img_box">
                                    <img class="img-responsive fill_img" alt="" src="{{asset('assets/images/gridImage/3.png')}}">
                                 </div>
                                 <div class="gb_cont_box ">
                                    <h2>Have it your way</h2>
                                    <p><i>Bansal and Sons Jewellers Jewellery Now available in white gold, rose gold or yellow gold</i></p>
                                    <span class="gb_item_action_btn">Shop Jewellery</span>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="rightGrid">
                        <div class="boxMain ">
                           <a href="product.php">
                              <div class="gbinner imgRight clearfix">
                                 <div class="gb_img_box ">
                                    <img class="img-responsive nofill_img" alt="" src="{{asset('assets/images/gridImage/4.png')}}">
                                 </div>
                                 <div class="gb_cont_box">
                                    <h2>Smile from Ear to Ear</h2>
                                    <p><i>Choose from our exclusive collection of diamond earrings</i></p>
                                    <span class="gb_item_action_btn">Shop Earrings</span>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="boxMain ">
                           <a href="product.php">
                              <div class="gbinner imgLeft clearfix">
                                 <div class="gb_img_box ">
                                    <img class="img-responsive nofill_img" alt="" src="{{asset('assets/images/gridImage/5.png')}}">
                                 </div>
                                 <div class="gb_cont_box">
                                    <h2>Smile from Ear to Ear</h2>
                                    <p><i>Choose from our exclusive collection of diamond earrings</i></p>
                                    <span class="gb_item_action_btn">Shop Earrings</span>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="boxMain ">
                           <a href="product.php">
                              <div class="gbinner imgTop">
                                 <div class="gb_img_box">
                                    <img class="img-responsive fill_img" alt="" src="{{asset('assets/images/gridImage/6.png')}}">
                                 </div>
                                 <div class="gb_cont_box ">
                                    <h2>Every festival needs a Goddess</h2>
                                    <p><i>Every festival needs a Goddess</i></p>
                                    <span class="gb_item_action_btn">Shop Necklaces</span>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="boxMain ">
                           <a href="product.php">
                              <div class="gbinner imgRight clearfix">
                                 <div class="gb_img_box ">
                                    <img class="img-responsive nofill_img" alt="" src="{{asset('assets/images/gridImage/4.png')}}">
                                 </div>
                                 <div class="gb_cont_box">
                                    <h2>Smile from Ear to Ear</h2>
                                    <p><i>Choose from our exclusive collection of diamond earrings</i></p>
                                    <span class="gb_item_action_btn">Shop Earrings</span>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="boxMain addboxMain ">
                           <a href="product.php">
                              <div class="gbinner imgTop">
                                 <div class="gb_cont_box ">
                                    <h2><i>Know your Diamonds</i></h2>
                                    <p><i>Everything you need to know before you shop</i></p>
                                    <p>CUT, COLOUR, CLARITY, CARAT AND CERTIFICATES</p>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      <section id="shopFeatures_new">
         <div class="sectionTitle">
          
            <h5>Bansal &  Sons Jewellers</h5>
         </div>
         <div class=" shopFeatures_new container">
            <ul>
               <li class="sf_first">
                  <img alt="" class="img-responsive"  src="{{asset('assets/images/feature/1.jpg')}}">
                  <div class="sf_box">
                     <div class="sf_box_inner">
                        <h2>free shipping</h2>
                        <h3>on orders over ₹299</h3>
                        <p>This offer is valid on all our store items</p>
                     </div>
                  </div>
               </li>
               <li>
                  <a href="product.php">
                     <img alt="" class="img-responsive"  src="{{asset('assets/images/feature/2.jpg')}}">
                     <div class="sf_box">
                        <div class="sf_box_inner">
                           <h3>shop & save</h3>
                           <p>On all our store items</p>
                        </div>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="catalog.php">
                     <img alt="" class="img-responsive"  src="{{asset('assets/images/feature/3.jpg')}}">
                     <div class="sf_box">
                        <div class="sf_box_inner">
                           <h3>Product catalog</h3>
                        </div>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="product.php">
                     <img alt="" class="img-responsive"  src="{{asset('assets/images/feature/4.jpg')}}">
                     <div class="sf_box">
                        <div class="sf_box_inner">
                           <h3>product list</h3>
                           <p>Lorem ipsum dolor sit amet</p>
                        </div>
                     </div>
                  </a>
               </li>
            </ul>
         </div>
      </section>
      
      <!--Feature Products 4 Collumn-->
      
      <!--Feature Categories-->
      <section id="D-Shine" class="row contentRowPad">
         <div class="container">
            <div class="row sectionTitle">
               <h3>this is Bansal and Sons Jewellers</h3>
               <h5>shop over our best brands</h5>
            </div>
            <div class="row">
               
               @foreach($home_products as $home_product)
               <div class="col-sm-4 product">
                  <div class="productInner row m0">
                     <div class="row m0 imgHov">
                        <img src="{{asset('assets/images/product/5.png')}}" alt="">
                        <div class="row m0 hovArea">
                           <div class="row m0 icons">
                              <ul class="list-inline">
                                 <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                 <li><a href="#"><i class="fas fa-shopping-cart-alt"></i></a></li>
                                 <li><a href="#"><i class="fas fa-expand"></i></a></li>
                              </ul>
                           </div>
                           <div class="row m0 proType"><a href="{{url('product',$home_product->products_id)}}">Baccarat</a></div>
                           <div class="row m0 proRating">
                              <i class="fas fa-star-o"></i>
                              <i class="fas fa-star-o"></i>
                              <i class="fas fa-star-o"></i>
                              <i class="fas fa-star-o"></i>
                              <i class="fas fa-star-o"></i>
                           </div>
                           <div class="row m0 proPrice"><i class="fas fa-rupee-sign"></i>{{$home_product->product_price}}.00</div>
                        </div>
                     </div>
                     <div class="row m0 proName"><a href="{{url('product',$home_product->products_id)}}">{{$home_product->product_model_name}}</a></div>
                     <div class="row m0 proBuyBtn">
                        <form action="{{route('add_to_cart')}}" method="post">
                          @csrf
                          <input type="hidden" name="product_id" value="{{$home_product->products_id}}">
                          <input type="hidden" name="product_price" value="{{$home_product->product_price}}">
                           <button class="addToCart btn">add to cart</button>
                        </form>
                        
                     </div>
                  </div>
               </div>
               @endforeach

               <!-- <div class="col-sm-4 product">
                  <div class="productInner row m0">
                     <div class="row m0 imgHov">
                        <img src="images/product/6.png" alt="">
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
                           <div class="row m0 proPrice"><i class="fas fa-rupee-sign"></i>830.00</div>
                        </div>
                     </div>
                     <div class="row m0 proName"><a href="single-product.php">Gravida est</a></div>
                     <div class="row m0 proBuyBtn">
                        <a class="addToCart btn" href="#">add to cart</a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4 product">
                  <div class="productInner row m0">
                     <div class="row m0 imgHov">
                        <img src="images/product/7.png" alt="">
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
                           <div class="row m0 proPrice"><i class="fas fa-rupee-sign"></i>525.00</div>
                        </div>
                     </div>
                     <div class="row m0 proName"><a href="single-product.php">Donec aliquam</a></div>
                     <div class="row m0 proBuyBtn">
                        <button class="addToCart btn">add to cart</button>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4 product">
                  <div class="productInner row m0">
                     <div class="row m0 imgHov">
                        <img src="images/product/8.png" alt="">
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
                           <div class="row m0 proPrice"><i class="fas fa-rupee-sign"></i>1025.00</div>
                        </div>
                     </div>
                     <div class="row m0 proName"><a href="single-product.php">Curabitur cursus dignis</a></div>
                     <div class="row m0 proBuyBtn">
                        <button class="addToCart btn">add to cart</button>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4 product">
                  <div class="productInner row m0">
                     <div class="row m0 imgHov">
                        <img src="images/product/9.png" alt="">
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
                           <div class="row m0 proPrice"><i class="fas fa-rupee-sign"></i>725.00</div>
                        </div>
                     </div>
                     <div class="row m0 proName"><a href="single-product.php">Curabitur cursus dignis</a></div>
                     <div class="row m0 proBuyBtn">
                        <button class="addToCart btn">add to cart</button>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4 product">
                  <div class="productInner row m0">
                     <div class="row m0 imgHov">
                        <img src="images/product/10.png" alt="">
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
                           <div class="row m0 proPrice"><i class="fas fa-rupee-sign"></i>825.00</div>
                        </div>
                     </div>
                     <div class="row m0 proName"><a href="single-product.php">Curabitur cursus dignis</a></div>
                     <div class="row m0 proBuyBtn">
                        <button class="addToCart btn">add to cart</button>
                     </div>
                  </div>
               </div> -->
            </div>
         </div>
      </section>
      
      <!--Feature Products 4 Collumn-->
      <section id="featureCategory" class="row contentRowPad">
         <div class="container">
            <div class="row m0 sectionTitle">
               <h3>our featured categories</h3>
               <h5>make easy shop with our categories</h5>
            </div>
            <div class="owl-carousel featureCats row m0">
            
               <div class="item">
                  <div class="row m0 imgHov">
                     <img src="{{asset('assets/images/product/category/20.png')}}" alt="">
                     <div class="row m0 hovArea">
                        <i class="fas fa-heart-o"></i><br>
                        <h4>11 items</h4>
                        <a href="product.php">shop now</a>
                     </div>
                  </div>
                  <div class="cat_h">
                     <a href="product.php">
                        <h4>Bracelets</h4>
                        <span>See the Collection</span>
                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="row m0 imgHov">
                     <img src="{{asset('assets/images/product/category/17.png')}}" alt="">
                     <div class="row m0 hovArea">
                        <i class="fas fa-heart-o"></i><br>
                        <h4>21 items</h4>
                        <a href="product.php">shop now</a>
                     </div>
                  </div>
                  <div class="cat_h">
                     <a href="product.php">
                        <h4>Rings</h4>
                        <span>See the Collection</span>
                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="row m0 imgHov">
                     <img src="{{asset('assets/images/product/category/18.png')}}" alt="">
                     <div class="row m0 hovArea">
                        <i class="fas fa-heart-o"></i><br>
                        <h4>30 items</h4>
                        <a href="product.php">shop now</a>
                     </div>
                  </div>
                  <div class="cat_h">
                     <a href="product.php">
                        <h4>cNecklaces</h4>
                        <span>See the Collection</span>
                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="row m0 imgHov">
                     <img src="{{asset('assets/images/product/category/19.png')}}" alt="">
                     <div class="row m0 hovArea">
                        <i class="fas fa-heart-o"></i><br>
                        <h4>55 items</h4>
                        <a href="product.php">shop now</a>
                     </div>
                  </div>
                  <div class="cat_h">
                     <a href="product.php">
                        <h4>Earrings</h4>
                        <span>See the Collection</span>
                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="row m0 imgHov">
                     <img src="{{asset('assets/images/product/category/17.png')}}" alt="">
                     <div class="row m0 hovArea">
                        <i class="fas fa-heart-o"></i><br>
                        <h4>21 items</h4>
                        <a href="product.php">shop now</a>
                     </div>
                  </div>
                  <div class="cat_h">
                     <a href="product.php">
                        <h4>Rings</h4>
                        <span>See the Collection</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="shopRings">
         <div class="sectionTitle">
            <h3>New arrivels</h3>
            <h5>know more about our latest collection</h5>
         </div>
         <div class="d-carousel-cener owl-carousel">
            <div class="dc-inner">
               <a href="single-product.php">
                  <img alt="ring" src="{{asset('assets/images/carousel/1.png')}}" >
                  <div class="dc-containt">
                     <h2>Cushion</h2>
                     <p>Bar Set Anniversary Ring</p>
                  </div>
               </a>
            </div>
            <div class="dc-inner">
               <a href="single-product.php">
                  <img alt="ring" src="{{asset('assets/images/carousel/2.png')}}" >
                  <div class="dc-containt">
                     <h2>Round</h2>
                     <p>Bar Set Anniversary Ring</p>
                  </div>
               </a>
            </div>
            <div class="dc-inner">
               <a href="single-product.php">
                  <img alt="ring" src="{{asset('assets/images/carousel/3.png')}}" >
                  <div class="dc-containt">
                     <h2>Pear</h2>
                     <p>Bar Set Anniversary Ring</p>
                  </div>
               </a>
            </div>
            <div class="dc-inner">
               <a href="single-product.php">
                  <img alt="ring" src="{{asset('assets/images/carousel/4.png')}}" >
                  <div class="dc-containt">
                     <h2>Radiant</h2>
                     <p>Bar Set Anniversary Ring</p>
                  </div>
               </a>
            </div>
            <div class="dc-inner">
               <a href="single-product.php">
                  <img alt="ring" src="{{asset('assets/images/carousel/5.png')}}" >
                  <div class="dc-containt">
                     <h2>Ovel</h2>
                     <p>Bar Set Anniversary Ring</p>
                  </div>
               </a>
            </div>
         </div>
      </section>
      
      
      <section id="featureProducts" class="row contentRowPad">
         <div class="container">
            <div class="row sectionTitle">
               <h3>featured products</h3>
               <h5>know more about our latest collection</h5>
            </div>
            <div class="row">
               @foreach($product_categories as $category)
               <div class="col-sm-3 product">
                  <div class="productInner row m0">
                     <div class="row m0 imgHov">
                        <img src="{{asset('assets/images/product/1.png')}}" alt="">
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
                        </div>
                     </div>
                     <div class="row m0 proName"><a href="{{url('category',$category->products_categories_id)}}">{{$category->name}}</a></div>
                     <div class="row m0 proBuyBtn">
                     </div>
                  </div>
               </div>
               @endforeach
               <!-- <div class="col-sm-3 product">
                  <div class="productInner row m0">
                     <div class="row m0 imgHov">
                        <img src="images/product/2.png" alt="">
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
                           <div class="row m0 proPrice"><i class="fas fa-rupee-sign"></i>125.00</div>
                        </div>
                     </div>
                     <div class="row m0 proName"><a href="single-product.php">Donec aliquam</a></div>
                     <div class="row m0 proBuyBtn">
                        <a class="addToCart btn" href="#">add to cart</a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-3 product">
                  <div class="productInner row m0">
                     <div class="row m0 imgHov">
                        <img src="images/product/3.png" alt="">
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
                           <div class="row m0 proPrice"><i class="fas fa-rupee-sign"></i>125.00</div>
                        </div>
                     </div>
                     <div class="row m0 proName"><a href="single-product.php">Gravida est</a></div>
                     <div class="row m0 proBuyBtn">
                        <button class="addToCart btn">add to cart</button>
                     </div>
                  </div>
               </div>
               <div class="col-sm-3 product">
                  <div class="productInner row m0">
                     <div class="row m0 imgHov">
                        <img src="images/product/4.png" alt="">
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
                           <div class="row m0 proPrice"><i class="fas fa-rupee-sign"></i>125.00</div>
                        </div>
                     </div>
                     <div class="row m0 proName"><a href="single-product.php">Maximus quam posuere</a></div>
                     <div class="row m0 proBuyBtn">
                        <button class="addToCart btn">add to cart</button>
                     </div>
                  </div>
               </div> -->
            </div>
         </div>
      </section>
      
      <section id="testimonialTabs" class="row contentRowPad">
         <div class="container">
            <div class="row sectionTitle">
               <h3>some words from our customers</h3>
               <h5>we satisfied more than 700 customers</h5>
            </div>
            <div class="row">
               <div class="tab-content testiTabContent">
                  <div role="tabpanel" class="tab-pane active" id="testi1">
                     <p><span class="t_q_start">“</span> Bansal and Sons Jewellers is really excellent site for jewellery. I am very happy with the Bansal and Sons Jewellers products and dedicated services from them. Bansal and Sons Jewellers is really excellent site for jewellery. <span class="t_q_end">”</span></p>
                     <h5 class="customerName">Dwayne johnson</h5>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="testi2">
                     <p><span class="t_q_start">“</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vestibulum justo accumsan felis faucibus vestibulum. Integer a ex orci. Cras sit amet efficitur nisl, et vestibulum orci. <span class="t_q_end">”</span></p>
                     <h5 class="customerName">Jonh add</h5>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="testi3">
                     <p><span class="t_q_start">“</span> Bansal and Sons Jewellers is really excellent site for jewellery. I am very happy with the Bansal and Sons Jewellers products and dedicated services from them. Bansal and Sons Jewellers is really excellent site for jewellery. <span class="t_q_end">”</span></p>
                     <h5 class="customerName">william parker</h5>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="testi4">
                     <p><span class="t_q_start">“</span> Donec in velit eget lacus convallis dapibus. Nulla ultrices nulla sit amet justo pretium, ut tristique diam ultrices. Nunc efficitur mauris sit amet imperdiet <span class="t_q_end">”</span></p>
                     <h5 class="customerName">Will smith</h5>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="testi5">
                     <p><span class="t_q_start">“</span> Bansal and Sons Jewellers is really excellent site for jewellery. I am very happy with the Bansal and Sons Jewellers products and dedicated services from them. Bansal and Sons Jewellers is really excellent site for jewellery. <span class="t_q_end">”</span></p>
                     <h5 class="customerName">Dwayne johnson</h5>
                  </div>
               </div>
               <ul class="nav nav-tabs" role="tablist" id="testiTab">
                  <li role="presentation" class="active">
                     <a href="#testi1" aria-controls="testi1" role="tab" data-toggle="tab">
                     <img src="{{asset('assets/images/testimonial/1.png')}}" alt="">
                     </a>
                     <div class="testi_rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                     </div>
                  </li>
                  <li role="presentation">
                     <a href="#testi2" aria-controls="testi2" role="tab" data-toggle="tab">
                     <img src="{{asset('assets/images/testimonial/2.png')}}" alt="">
                     </a>
                     <div class="testi_rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-o"></i>
                        <i class="fas fa-star-o"></i>
                     </div>
                  </li>
                  <li role="presentation">
                     <a href="#testi3" aria-controls="testi3" role="tab" data-toggle="tab">
                     <img src="{{asset('assets/images/testimonial/3.png')}}" alt="">
                     </a>
                     <div class="testi_rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                  </li>
                  <li role="presentation">
                     <a href="#testi4" aria-controls="testi4" role="tab" data-toggle="tab">
                     <img src="{{asset('assets/images/testimonial/4.png')}}" alt="">
                     </a>
                     <div class="testi_rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-o"></i>
                     </div>
                  </li>
                  <li role="presentation">
                     <a href="#testi5" aria-controls="testi5" role="tab" data-toggle="tab">
                     <img src="{{asset('assets/images/testimonial/5.png')}}" alt="">
                     </a>
                     <div class="testi_rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-o"></i>
                        <i class="fas fa-star-o"></i>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>
      <!--Testimonial Tabs-->
      <section id="brands" class="row contentRowPad">
         <div class="container">
            <div class="row sectionTitle">
               <h3>our brands</h3>
               <h5>choose best with our favorite brands</h5>
            </div>
            <div class="row brands">
               <ul class="nav navbar-nav">
                  <li><a href="#"><img src="{{asset('assets/images/brands/1.png')}}" alt=""></a></li>
                  <li><a href="#"><img src="{{asset('assets/images/brands/2.png')}}" alt=""></a></li>
                  <li><a href="#"><img src="{{asset('assets/images/brands/3.png')}}" alt=""></a></li>
                  <li><a href="#"><img src="{{asset('assets/images/brands/4.png')}}" alt=""></a></li>
                  <li><a href="#"><img src="{{asset('assets/images/brands/5.png')}}" alt=""></a></li>
                  <li><a href="#"><img src="{{asset('assets/images/brands/2.png')}}" alt=""></a></li>
               </ul>
            </div>
         </div>
      </section>
      <section id="homeBlog">
         <div class="container blog_j">
            <div class="row sectionTitle">
               <h3>Blog Updates</h3>
               <h5>we satisfied more than 700 customers</h5>
            </div>
            <div class="row">
               <div class="col-sm-6">
                  <div class="blog_inner single">
                     <div class="blog_j_img">
                        <img alt="" class="img-responsive"  src="{{asset('assets/images/blog/blog6.png')}}">
                        <div class="btn_readmore">
                           <a  href="blog.php">Read more</a>
                        </div>
                     </div>
                     <div class="blog_j_text">
                        <p>Discover our unriveled selection of must-have jewelry in timeless styles.
                        </p>
                        <span>December 2017
                        </span>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="blog_inner">
                           <div class="blog_j_img">
                              <img alt="" class="img-responsive"  src="{{asset('assets/images/blog/blog1.png')}}">
                              <div class="btn_readmore">
                                 <a  href="blog.php">Read more</a>
                              </div>
                           </div>
                           <div class="blog_j_text">
                              <p>Discover our finely curated collection
                              </p>
                           </div>
                        </div>
                        <div class="blog_inner">
                           <div class="blog_j_img">
                              <img alt="" class="img-responsive"  src="{{asset('assets/images/blog/blog5.png')}}">
                              <div class="btn_readmore">
                                 <a  href="blog.php">Read more</a>
                              </div>
                           </div>
                           <div class="blog_j_text">
                              <p>Discover our finely curated collection
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="blog_inner">
                           <div class="blog_j_img">
                              <img alt="" class="img-responsive"  src="{{asset('assets/images/blog/blog7.png')}}">
                              <div class="btn_readmore">
                                 <a  href="blog.php">Read more</a>
                              </div>
                           </div>
                           <div class="blog_j_text">
                              <p>Discover our finely curated collection
                              </p>
                           </div>
                        </div>
                        <div class="blog_inner">
                           <div class="blog_j_img">
                              <img alt="" class="img-responsive"  src="{{asset('assets/images/blog/blog3.png')}}">
                              <div class="btn_readmore">
                                 <a  href="blog.php">Read more</a>
                              </div>
                           </div>
                           <div class="blog_j_text">
                              <p>Discover our finely curated collection
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @endsection