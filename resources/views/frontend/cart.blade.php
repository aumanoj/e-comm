   @extends('frontend.layout')

   @section('content')
<section id="breadcrumbRow" class="row">
         <h2>cart</h2>
         <div class="row pageTitle m0">
            <div class="container">
               <h4 class="fleft">cart</h4>
               <ul class="breadcrumb fright">
                  <li><a href="index.php">home</a></li>
                  <li class="active">cart</li>
               </ul>
            </div>
         </div>
      </section>
      <section class="row contentRowPad">
         <div class="container">
            <div class=" cartPage">
               <h3 class="heading pageHeading">Shopping cart</h3>
               <div class="table-responsive cartTable row m0">
                  <table class="table">
                    
                     <thead>
                        <tr>
                           <th class="productImage">Product image</th>
                           <th class="productName">Product name</th>
                           <th>edit</th>
                           <th>price</th>
                           <th>quantity</th>
                           <th>total</th>
                           <th>remove</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($carts as $cart)
                        <tr class="alert" role="alert">
                           <td class="productImage"><img src="{{asset('assets/images/product/single/l1.png')}}" alt=""></td>
                           <td class="productName">
                              <h6 class="heading">{{$cart->products->product_model_name}}</h6>
                              <div class="row descList m0">
                                 <dl class="dl-horizontal">
                                    <dt>manufacturer :</dt>
                                    <dd>Tartaan & Co</dd>
                                    <dt>product code :</dt>
                                    <dd>Xuo15</dd>
                                    <dt>color :</dt>
                                    <dd>Black</dd>
                                    <dt>size :</dt>
                                    <dd>Queen</dd>
                                 </dl>
                              </div>
                           </td>
                           <td><a href="#" class="edit"><i class="fas fa-edit"></i></a></td>
                           <td class="price"><del>₹ {{$cart->products->product_price}}</del>₹ {{$cart->products->discounted_price}}</td>
                           <td>{{$cart->qty}}
                              <div class="input-group spinner">
                                 <input type="text" class="form-control" value="{{$cart->qty}}">
                                 <div class="input-group-btn-vertical">
                                    <button class="btn btn-default"><i class="fas fa-angle-up"></i></button>
                                    <button class="btn btn-default"><i class="fas fa-angle-down"></i></button>
                                 </div>
                              </div>
                           </td>
                           <td class="price">{{$cart->products->discounted_price}}</td>
                           <td><a href="#" class="edit" data-dismiss="alert" aria-label="Close"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                        @endforeach
                       <!--  <tr class="alert" role="alert">
                           <td><img src="images/product/single/l3.png" alt=""></td>
                           <td>
                              <h6 class="heading">office furnitures</h6>
                              <div class="row descList m0">
                                 <dl class="dl-horizontal">
                                    <dt>manufacturer :</dt>
                                    <dd>Tartaan & Co</dd>
                                    <dt>product code :</dt>
                                    <dd>Xuo15</dd>
                                    <dt>color :</dt>
                                    <dd>Black</dd>
                                    <dt>size :</dt>
                                    <dd>Queen</dd>
                                 </dl>
                              </div>
                           </td>
                           <td><a href="#" class="edit"><i class="fas fa-edit"></i></a></td>
                           <td class="price">₹420</td>
                           <td>
                              <div class="input-group spinner">
                                 <input type="text" class="form-control" value="1">
                                 <div class="input-group-btn-vertical">
                                    <button class="btn btn-default"><i class="fas fa-angle-up"></i></button>
                                    <button class="btn btn-default"><i class="fas fa-angle-down"></i></button>
                                 </div>
                              </div>
                           </td>
                           <td class="price">₹420</td>
                           <td><a href="#" class="edit" data-dismiss="alert" aria-label="Close"><i class="far fa-trash-alt"></i></a></td>
                        </tr> -->
                     </tbody>
                     <tfoot>
                        <tr>
                           <td colspan="7">
                              <a href="{{route('home')}}" class="btn btn-primary btn-lg">continue shopping</a>
                              <a href="#" class="btn btn-default btn-lg fright">update shopping cart</a>
                              <a href="#" class="btn btn-default btn-lg fright">clear shopping cart</a>
                           </td>
                        </tr>
                     </tfoot>
                  </table>
               </div>
               <div class="row m0">
                  <div class="col-sm-4">
                     <form class="row discountCupon m0" action="#" method="get">
                        <h5 class="heading">Discount codes</h5>
                        <p>Enter your coupon code</p>
                        <input type="text" class="form-control" name="cuponCode" id="cuponCode">
                        <input type="submit" class="btn btn-default btn-sm" value="apply code">
                     </form>
                  </div>
                  <!-- <div class="col-sm-4">
                     <form class="row m0 shippingTax" action="#" method="get">
                        <h5 class="heading">Estimate shipping and tax</h5>
                        <p>Enter your destination to get a shipping estimate</p>
                        <div class="form-group">
                           <label for="country">Country*</label>
                           <select class="selectpicker countrySelect">
                              <option value="bd">Australia</option>
                              <option value="us">United States</option>
                              <option value="uk">United Kingdom</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="country">State/Province</label>
                           <select class="selectpicker countrySelect">
                              <option value="">Please select region, state or province</option>
                              <option value="Australian Capital Territory">Australian Capital Territory</option>
                              <option value="New South Wales">New South Wales</option>
                              <option value="Northern Territory">Northern Territory</option>
                              <option value="Queensland">Queensland</option>
                              <option value="South Australia">South Australia</option>
                              <option value="South Australia">Tasmania</option>
                              <option value="South Australia">Victoria</option>
                              <option value="South Australia">Western Australia</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="country">Zip/Postal Code</label>
                           <input type="text" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-default btn-sm" value="get a code">
                     </form>
                  </div> -->
                  <div class="col-sm-4">
                     <div class="row m0 totalCheckout">
                        <div class="descList row m0">
                           <dl class="dl-horizontal">
                              <dt>Subtotal</dt>
                              <dd>₹1260</dd>
                              <dt class="gt">Grand Total</dt>
                              <dd>₹1260</dd>
                           </dl>
                        </div>
                        <a href="#" class="btn btn-default btn-sm">Proceed to Checkout</a>
                        <a href="#" class="link">Checkout with multiple addresses</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   @endsection