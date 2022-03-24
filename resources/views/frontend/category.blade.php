@extends('frontend.layout')
 @section('content') 
      <!--Feature Categories-->
      <section id="D-Shine" class="row contentRowPad">
         <div class="container">
            <div class="row sectionTitle">
               <h3>this is Bansal and Sons Jewellers</h3>
               <h5>shop over our best brands</h5>
            </div>
            <div class="row">
               
               @foreach($product_subcategories as $cat)
               <div class="col-sm-4 product">
                  <div class="productInner row m0">
                     <div class="row m0 imgHov">
                        <img src="{{asset('images/product/5.png')}}" alt="">
                        <div class="row m0 hovArea">
                           <div class="row m0 icons">
                              <ul class="list-inline">
                                 <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                 <li><a href="#"><i class="fas fa-shopping-cart-alt"></i></a></li>
                                 <li><a href="#"><i class="fas fa-expand"></i></a></li>
                              </ul>
                           </div>
                           <div class="row m0 proType"><a href="{{url('product',$cat->products_id)}}">Baccarat</a></div>
                           <div class="row m0 proRating">
                              <i class="fas fa-star-o"></i>
                              <i class="fas fa-star-o"></i>
                              <i class="fas fa-star-o"></i>
                              <i class="fas fa-star-o"></i>
                              <i class="fas fa-star-o"></i>
                           </div>
                        </div>
                     </div>
                     <div class="row m0 proName"><a href="#">{{$cat->name}}</a></div>
                     
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
      
@endsection