<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Bansal and Sons Jewellers - Deals in Jewellery, Diamond & Silver </title>
   <!--Favicons-->
   <link rel="icon" type="image/png" sizes="32x32" href="images/dshine-logo.png">
   <meta name="msapplication-TileColor" content="#ffffff">
   <meta name="theme-color" content="#ffffff">
   <!--Bootstrap and Other Vendors-->
   <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}?t=<?=time();?>">
   <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap-theme.min.css')}}?t=<?=time();?>">
   <link rel="stylesheet" href="{{URL::asset('assets/css/fontawesome-all.min.css')}}?t=<?=time();?>">
   <link rel="stylesheet" href="{{URL::asset('assets/vendors/owl.carousel/css/owl.carousel.min.css')}}?t=<?=time();?>">
   <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/vendors/flexslider/flexslider.css')}}" media="screen" />
   <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
   <!--Mechanic Styles-->
   <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}?t=<?=time();?>">
   <link rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}?t=<?=time();?>">
</head>
<body>
  
   <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
   <header class="row" id="header">
      <div class="row m0 logo_line">
         <div class="container">
            <div class="row">
               <div class="col-sm-3 logo">
                  <a href="{{url('/')}}" class="logo_a"><img src="{{asset('assets/images/dshine-logo.png')}}" alt="Bansal & Sons">
                  </a>
               </div>
               <div class="col-sm-9 searchSec">
                  <div class="col-sm-12">
                     <div class="fright wishlistCompare">
                        <ul class="nav">
                           <li>
                              <a href="#">
                              <span class="wish">
                              <i class="fas fa-phone"></i>
                              1
                              </span>
                              <span>+91-9810080068</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <span class="wish">
                              <i class="fas fa-user"></i>
                              1 
                              </span>
                              <span>info@bansalandsonsjewellers.com</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <span class="wish">
                              <i class="fas fa-heart"></i>
                              3 
                              </span>
                              <span>Wishlist</span>
                              </a>
                           </li>
                           <li class="h_cart">
                              <a href="{{url('cart')}}">
                              <span class="wish">
                              <i class="fas fa-gem"></i>
                              2 
                              </span>
                              <span>My cart</span>
                              </a>
                              <div class="hclist">
                                 <div class="table-responsive">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th class="productImage">Product image</th>
                                             <th class="productName">Product name</th>
                                             <th></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class="alert" role="alert">
                                             <td class="productImage"><img src="{{asset('assets/images/product/single/l1.png')}}" alt=""></td>
                                             <td class="productName">
                                                <h6 class="heading">Gold Plated Charm</h6>
                                                <div class="input-group spinner">
                                                   <input class="form-control" value="1" type="text">
                                                   <div class="input-group-btn-vertical">
                                                      <button class="btn btn-default"><i class="fas fa-angle-up"></i></button>
                                                      <button class="btn btn-default"><i class="fas fa-angle-down"></i></button>
                                                   </div>
                                                </div>
                                             </td>
                                             <td><a href="#" class="edit" data-dismiss="alert" aria-label="Close"><i class="far fa-trash-alt"></i></a></td>
                                          </tr>
                                          <tr class="alert" role="alert">
                                             <td class="productImage"><img src="{{asset('assets/images/product/single/l1.png')}}" alt=""></td>
                                             <td class="productName">
                                                <h6 class="heading">Zephyrr Stones</h6>
                                                <div class="input-group spinner">
                                                   <input class="form-control" value="1" type="text">
                                                   <div class="input-group-btn-vertical">
                                                      <button class="btn btn-default"><i class="fas fa-angle-up"></i></button>
                                                      <button class="btn btn-default"><i class="fas fa-angle-down"></i></button>
                                                   </div>
                                                </div>
                                             </td>
                                             <td><a href="#" class="edit" data-dismiss="alert" aria-label="Close"><i class="far fa-trash-alt"></i></a></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </li>
                           <li>
                              @if(Auth::user())
                                 <a href="{{route('logout')}}">
                              <span class="wish">
                              <i class="fas fa-user"></i>
                              .
                              </span>
                              <span>Logout</span>
                              </a>
                               @else 
                               <a href="{{route('user_login')}}">
                              <span class="wish">
                              <i class="fas fa-user"></i>
                              .
                              </span>
                              <span>Register</span>
                              </a>
                               @endif
                              
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="fright searchForm">
                        <form action="#" method="get">
                           <div class="input-group">
                              <input type="hidden" name="search_param" value="all" id="search_param">
                              <input type="search" class="form-control" placeholder="Search Products">
                              <span class="input-group-btn searchIco">
                              <button class="btn btn-default" type="submit"><i class="fas fa-search"></i></button>
                              </span>
                           </div>
                           <!-- /input-group -->
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <nav class="navbar navbar-default m0 navbar-static-top">
         <div class="container-fluid container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <div class="responsiveHeader" style="display:none;">
                  <div class="row">
                     <div class="col-md-3 col-sm-3 col-xs-3">
                        <div style="display:inline-block; padding-top:10px;">
                           <img class="img-responsive" src="images/dshine-logo.png" width="100" height="100" alt="Bansal & Sons">  
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="responsive-search">
                           <form action="">
                              <div class="input-group">
                                 <input type="search" class="form-control" placeholder="Search Product">
                                 <span class="input-group-btn searchIco">
                                 <button class="btn btn-default" type="submit"><i class="fas fa-search"></i></button>
                                 </span>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-3 col-xs-3">
                        <div class="cart-box">
                           <span><i class="fas fa-cart-plus"></i></span>
                           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
                           <i class="fas fa-bars"></i> MENU
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="mod-category-links">
                     <div class="mod-category-links-inner">
                        <ul>
                           
                            <li class="category-rings">
                                 <a href="#" title="Rings">
                                    <!-- <i class="fas fa-coins"></i> -->
                                    <span class="jwellery-icons-mobile">
                                    <img class="img-responsive" src="images/icons/ring.png" width="25" height="25">
                                    </span> 
                                    <span></p></span>
                                 </a>
                              </li> 
                           
                            
                           <li class="category-rings">
                             <a href="#" title="Rings">
                                 <i class="fas fa-coins"></i>
                                <span class="jwellery-icons-mobile">
                                <img class="img-responsive" src="images/icons/ring.png" width="25" height="25">
                                </span>
                                <span>Rings</span>
                             </a>
                           </li>
                           
                           <!--<li class="category-rings">-->
                           <!--   <a href="#" title="Rings">-->
                                 <!-- <i class="fas fa-search"></i> -->
                           <!--      <span class="jwellery-icons-mobile">-->
                           <!--      <img class="img-responsive" src="images/icons/earring.png" width="25" height="25">-->
                           <!--      </span> -->
                           <!--      <span>Earings</span>-->
                           <!--   </a>-->
                           <!--</li>-->
                           
                           <!--<li class="category-rings">-->
                           <!--   <a href="#" title="Rings">-->
                                 <!-- <i class="fas fa-search"></i> -->
                           <!--      <span class="jwellery-icons-mobile">-->
                           <!--      <img class="img-responsive" src="images/icons/pendent.png" width="25" height="25">-->
                           <!--      </span> -->
                           <!--      <span>Pendents</span>-->
                           <!--   </a>-->
                           <!--</li>-->
                           
                           <!--<li class="category-rings">-->
                           <!--   <a href="#" title="Rings">-->
                                 <!-- <i class="fas fa-coins"></i> -->
                           <!--      <span class="jwellery-icons-mobile">-->
                           <!--      <img class="img-responsive" src="images/icons/bangles.png" width="25" height="25">-->
                           <!--      </span> -->
                           <!--      <span>Bengals</span>-->
                           <!--   </a>-->
                           <!--</li>-->
                           
                           <!--<li class="category-rings">-->
                           <!--   <a href="#" title="Rings">-->
                                 <!-- <i class="fas fa-coins"></i> -->
                           <!--      <span class="jwellery-icons-mobile">-->
                           <!--      <img class="img-responsive" src="images/icons/necklace.png" width="25" height="25">-->
                           <!--      </span> -->
                           <!--      <span>Neclaces</span>-->
                           <!--   </a>-->
                           <!--</li>-->
                           
                           <!--<li class="category-rings">-->
                           <!--   <a href="#" title="Rings">-->
                                 <!-- <i class="fas fa-coins"></i> -->
                           <!--      <span class="jwellery-icons-mobile">-->
                           <!--      <img class="img-responsive" src="images/icons/nosepin.png" width="25" height="25">-->
                           <!--      </span> -->
                           <!--      <span>Nose Pins</span>-->
                           <!--   </a>-->
                           <!--</li>-->
                           
                        </ul>
                        <i class="clear"></i>
                     </div>
                     <i class="clear"></i>
                  </div>
               </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="mainNav">
               <ul class="nav navbar-nav">
                  @foreach($product_categories as $categorie)
 
                  <li class="dropdown megaMenu">
                     <a onmouseover="" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{$categorie->name}}</a>
                     <ul class="dropdown-menu row m0" role="menu">
  
<!--   <script> 
  function bigImg(id){
         var userID = id;
                $.ajax({
                    type: "POST",
                    url: "https://bansalandsonsjewellers.com/header.php",
                    headers: {  'Access-Control-Allow-Origin': 'https://bansalandsonsjewellers.com' },
                    data :userID,
                    success: function(data)
                    {
                        
                });
  }
  </script>
                -->         

                             
                             @foreach($categorie->SUB_CATEGORIES as $subcategorie)
                             <li class="listMenu">
                           <div class="row listTitle">{{$subcategorie->name}}</div>
                           <ul class="nav megaInnerMenu">
                              <li><a href="#">wedding ring</a></li>
                              <li><a href="#">pendant</a></li>
                              <li><a href="#">nosering</a></li>
                              <li><a href="#">necklace</a></li>
                              <li><a href="#">medallion</a></li>
                              <li><a href="#">engagement ring</a></li>
                              <li><a href="#">costume jewellery</a></li>
                              <li><a href="#">brooch</a></li>
                              <li><a href="#">signet ring</a></li>
                           </ul>
                        </li>
                        @endforeach
                            
                            
                        <!--<li class="listMenu">-->
                        <!--   <div class="row listTitle">Jewelery &amp; sectionals</div>-->
                        <!--   <ul class="nav megaInnerMenu">-->
                        <!--      <li><a href="#">wedding ring</a></li>-->
                        <!--      <li><a href="#">pendant</a></li>-->
                        <!--      <li><a href="#">nosering</a></li>-->
                        <!--      <li><a href="#">necklace</a></li>-->
                        <!--      <li><a href="#">medallion</a></li>-->
                        <!--      <li><a href="#">engagement ring</a></li>-->
                        <!--      <li><a href="#">costume jewellery</a></li>-->
                        <!--      <li><a href="#">brooch</a></li>-->
                        <!--      <li><a href="#">signet ring</a></li>-->
                        <!--   </ul>-->
                        <!--</li>-->
                        
                        <!--<li class="listMenu">-->
                        <!--   <div class="row listTitle">shop by collections</div>-->
                        <!--   <ul class="nav megaInnerMenu">-->
                        <!--      <li><a href="#">Ring</a></li>-->
                        <!--      <li><a href="#">Bracelet</a></li>-->
                        <!--      <li><a href="#">Bangle</a></li>-->
                        <!--      <li><a href="#">Link, Chain</a></li>-->
                        <!--      <li><a href="#">Stud</a></li>-->
                        <!--      <li><a href="#">Ear-Ring, Tops</a></li>-->
                        <!--      <li><a href="#">Brooch</a></li>-->
                        <!--   </ul>-->
                        <!--</li>-->
                        
                        <!--<li class="boxMenu">-->
                        <!--   <div class="row listTitle">-->
                        <!--      shop by categories <a href="product.php">shop all <i class="fas fa-caret-right"></i></a>-->
                        <!--   </div>-->
                        <!--   <ul class="nav megaInnerMenu row m0">-->
                        <!--      <li>-->
                        <!--         <a href="product.php">-->
                        <!--            <div class="row m0 imgHov">-->
                        <!--               <img src="images/menu/1.png" alt="">-->
                        <!--               <div class="row m0 hovCnt">-->
                        <!--                  <div class="row m0 hovCntInner">-->
                        <!--                     shop now <i class="fas fa-caret-right"></i>-->
                        <!--                  </div>-->
                        <!--               </div>-->
                        <!--            </div>-->
                        <!--            <div class="row m0 menuTitle">Earrings</div>-->
                        <!--         </a>-->
                        <!--      </li>-->
                        <!--      <li>-->
                        <!--         <a href="product.php">-->
                        <!--            <div class="row m0 imgHov">-->
                        <!--               <img src="images/menu/2.png" alt="">-->
                        <!--               <div class="row m0 hovCnt">-->
                        <!--                  <div class="row m0 hovCntInner">-->
                        <!--                     shop now <i class="fas fa-caret-right"></i>-->
                        <!--                  </div>-->
                        <!--               </div>-->
                        <!--            </div>-->
                        <!--            <div class="row m0 menuTitle">Brooch</div>-->
                        <!--         </a>-->
                        <!--      </li>-->
                        <!--      <li>-->
                        <!--         <a href="product.php">-->
                        <!--            <div class="row m0 imgHov">-->
                        <!--               <img src="images/menu/3.png" alt="">-->
                        <!--               <div class="row m0 hovCnt">-->
                        <!--                  <div class="row m0 hovCntInner">-->
                        <!--                     shop now <i class="fas fa-caret-right"></i>-->
                        <!--                  </div>-->
                        <!--               </div>-->
                        <!--            </div>-->
                        <!--            <div class="row m0 menuTitle">Necklace</div>-->
                        <!--         </a>-->
                        <!--      </li>-->
                        <!--   </ul>-->
                        <!--</li>-->
                     </ul>
                  </li> 
                   @endforeach
                  <!--<li class="dropdown megaMenu">-->
                  <!--   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Rings</a>-->
                  <!--   <ul class="dropdown-menu row m0" role="menu">-->
                  <!--      <li class="listMenu">-->
                  <!--         <div class="row listTitle">Jewelery &amp; sectionals</div>-->
                  <!--         <ul class="nav megaInnerMenu">-->
                  <!--            <li><a href="#">wedding ring</a></li>-->
                  <!--            <li><a href="#">pendant</a></li>-->
                  <!--            <li><a href="#">nosering</a></li>-->
                  <!--            <li><a href="#">necklace</a></li>-->
                  <!--            <li><a href="#">medallion</a></li>-->
                  <!--            <li><a href="#">engagement ring</a></li>-->
                  <!--            <li><a href="#">costume jewellery</a></li>-->
                  <!--            <li><a href="#">brooch</a></li>-->
                  <!--            <li><a href="#">signet ring</a></li>-->
                  <!--         </ul>-->
                  <!--      </li>-->
                  <!--      <li class="listMenu">-->
                  <!--         <div class="row listTitle">shop by collections</div>-->
                  <!--         <ul class="nav megaInnerMenu">-->
                  <!--            <li><a href="#">Ring</a></li>-->
                  <!--            <li><a href="#">Bracelet</a></li>-->
                  <!--            <li><a href="#">Bangle</a></li>-->
                  <!--            <li><a href="#">Link, Chain</a></li>-->
                  <!--            <li><a href="#">Stud</a></li>-->
                  <!--            <li><a href="#">Ear-Ring, Tops</a></li>-->
                  <!--            <li><a href="#">Brooch</a></li>-->
                  <!--         </ul>-->
                  <!--      </li>-->
                  <!--      <li class="boxMenu">-->
                  <!--         <div class="row listTitle">-->
                  <!--            shop by categories <a href="product.php">shop all <i class="fas fa-caret-right"></i></a>-->
                  <!--         </div>-->
                  <!--         <ul class="nav megaInnerMenu row m0">-->
                  <!--            <li>-->
                  <!--               <a href="product.php">-->
                  <!--                  <div class="row m0 imgHov">-->
                  <!--                     <img src="images/menu/1.png" alt="">-->
                  <!--                     <div class="row m0 hovCnt">-->
                  <!--                        <div class="row m0 hovCntInner">-->
                  <!--                           shop now <i class="fas fa-caret-right"></i>-->
                  <!--                        </div>-->
                  <!--                     </div>-->
                  <!--                  </div>-->
                  <!--                  <div class="row m0 menuTitle">Earrings</div>-->
                  <!--               </a>-->
                  <!--            </li>-->
                  <!--            <li>-->
                  <!--               <a href="product.php">-->
                  <!--                  <div class="row m0 imgHov">-->
                  <!--                     <img src="images/menu/2.png" alt="">-->
                  <!--                     <div class="row m0 hovCnt">-->
                  <!--                        <div class="row m0 hovCntInner">-->
                  <!--                           shop now <i class="fas fa-caret-right"></i>-->
                  <!--                        </div>-->
                  <!--                     </div>-->
                  <!--                  </div>-->
                  <!--                  <div class="row m0 menuTitle">Brooch</div>-->
                  <!--               </a>-->
                  <!--            </li>-->
                  <!--            <li>-->
                  <!--               <a href="product.php">-->
                  <!--                  <div class="row m0 imgHov">-->
                  <!--                     <img src="images/menu/3.png" alt="">-->
                  <!--                     <div class="row m0 hovCnt">-->
                  <!--                        <div class="row m0 hovCntInner">-->
                  <!--                           shop now <i class="fas fa-caret-right"></i>-->
                  <!--                        </div>-->
                  <!--                     </div>-->
                  <!--                  </div>-->
                  <!--                  <div class="row m0 menuTitle">Necklace</div>-->
                  <!--               </a>-->
                  <!--            </li>-->
                  <!--         </ul>-->
                  <!--      </li>-->
                  <!--   </ul>-->
                  <!--</li>-->
                  <!--<li class="dropdown megaMenu">-->
                  <!--   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Earings</a>-->
                  <!--   <ul class="dropdown-menu row m0" role="menu">-->
                  <!--      <li class="listMenu">-->
                  <!--         <div class="row listTitle">Jewelery &amp; sectionals</div>-->
                  <!--         <ul class="nav megaInnerMenu">-->
                  <!--            <li><a href="#">wedding ring</a></li>-->
                  <!--            <li><a href="#">pendant</a></li>-->
                  <!--            <li><a href="#">nosering</a></li>-->
                  <!--            <li><a href="#">necklace</a></li>-->
                  <!--            <li><a href="#">medallion</a></li>-->
                  <!--            <li><a href="#">engagement ring</a></li>-->
                  <!--            <li><a href="#">costume jewellery</a></li>-->
                  <!--            <li><a href="#">brooch</a></li>-->
                  <!--            <li><a href="#">signet ring</a></li>-->
                  <!--         </ul>-->
                  <!--      </li>-->
                  <!--      <li class="listMenu">-->
                  <!--         <div class="row listTitle">shop by collections</div>-->
                  <!--         <ul class="nav megaInnerMenu">-->
                  <!--            <li><a href="#">Ring</a></li>-->
                  <!--            <li><a href="#">Bracelet</a></li>-->
                  <!--            <li><a href="#">Bangle</a></li>-->
                  <!--            <li><a href="#">Link, Chain</a></li>-->
                  <!--            <li><a href="#">Stud</a></li>-->
                  <!--            <li><a href="#">Ear-Ring, Tops</a></li>-->
                  <!--            <li><a href="#">Brooch</a></li>-->
                  <!--         </ul>-->
                  <!--      </li>-->
                  <!--      <li class="boxMenu">-->
                  <!--         <div class="row listTitle">-->
                  <!--            shop by categories <a href="product.php">shop all <i class="fas fa-caret-right"></i></a>-->
                  <!--         </div>-->
                  <!--         <ul class="nav megaInnerMenu row m0">-->
                  <!--            <li>-->
                  <!--               <a href="product.php">-->
                  <!--                  <div class="row m0 imgHov">-->
                  <!--                     <img src="images/menu/1.png" alt="">-->
                  <!--                     <div class="row m0 hovCnt">-->
                  <!--                        <div class="row m0 hovCntInner">-->
                  <!--                           shop now <i class="fas fa-caret-right"></i>-->
                  <!--                        </div>-->
                  <!--                     </div>-->
                  <!--                  </div>-->
                  <!--                  <div class="row m0 menuTitle">Earrings</div>-->
                  <!--               </a>-->
                  <!--            </li>-->
                  <!--            <li>-->
                  <!--               <a href="product.php">-->
                  <!--                  <div class="row m0 imgHov">-->
                  <!--                     <img src="images/menu/2.png" alt="">-->
                  <!--                     <div class="row m0 hovCnt">-->
                  <!--                        <div class="row m0 hovCntInner">-->
                  <!--                           shop now <i class="fas fa-caret-right"></i>-->
                  <!--                        </div>-->
                  <!--                     </div>-->
                  <!--                  </div>-->
                  <!--                  <div class="row m0 menuTitle">Brooch</div>-->
                  <!--               </a>-->
                  <!--            </li>-->
                  <!--            <li>-->
                  <!--               <a href="product.php">-->
                  <!--                  <div class="row m0 imgHov">-->
                  <!--                     <img src="images/menu/3.png" alt="">-->
                  <!--                     <div class="row m0 hovCnt">-->
                  <!--                        <div class="row m0 hovCntInner">-->
                  <!--                           shop now <i class="fas fa-caret-right"></i>-->
                  <!--                        </div>-->
                  <!--                     </div>-->
                  <!--                  </div>-->
                  <!--                  <div class="row m0 menuTitle">Necklace</div>-->
                  <!--               </a>-->
                  <!--            </li>-->
                  <!--         </ul>-->
                  <!--      </li>-->
                  <!--   </ul>-->
                  <!--</li>-->
                  <!--<li class="dropdown megaMenu">-->
                  <!--   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pendants</a>-->
                  <!--   <ul class="dropdown-menu row m0" role="menu">-->
                  <!--      <li class="listMenu">-->
                  <!--         <div class="row listTitle">Jewelery &amp; sectionals</div>-->
                  <!--         <ul class="nav megaInnerMenu">-->
                  <!--            <li><a href="#">wedding ring</a></li>-->
                  <!--            <li><a href="#">pendant</a></li>-->
                  <!--            <li><a href="#">nosering</a></li>-->
                  <!--            <li><a href="#">necklace</a></li>-->
                  <!--            <li><a href="#">medallion</a></li>-->
                  <!--            <li><a href="#">engagement ring</a></li>-->
                  <!--            <li><a href="#">costume jewellery</a></li>-->
                  <!--            <li><a href="#">brooch</a></li>-->
                  <!--            <li><a href="#">signet ring</a></li>-->
                  <!--         </ul>-->
                  <!--      </li>-->
                  <!--      <li class="listMenu">-->
                  <!--         <div class="row listTitle">shop by collections</div>-->
                  <!--         <ul class="nav megaInnerMenu">-->
                  <!--            <li><a href="#">Ring</a></li>-->
                  <!--            <li><a href="#">Bracelet</a></li>-->
                  <!--            <li><a href="#">Bangle</a></li>-->
                  <!--            <li><a href="#">Link, Chain</a></li>-->
                  <!--            <li><a href="#">Stud</a></li>-->
                  <!--            <li><a href="#">Ear-Ring, Tops</a></li>-->
                  <!--            <li><a href="#">Brooch</a></li>-->
                  <!--         </ul>-->
                  <!--      </li>-->
                  <!--      <li class="boxMenu">-->
                  <!--         <div class="row listTitle">-->
                  <!--            shop by categories <a href="product.php">shop all <i class="fas fa-caret-right"></i></a>-->
                  <!--         </div>-->
                  <!--         <ul class="nav megaInnerMenu row m0">-->
                  <!--            <li>-->
                  <!--               <a href="product.php">-->
                  <!--                  <div class="row m0 imgHov">-->
                  <!--                     <img src="images/menu/1.png" alt="">-->
                  <!--                     <div class="row m0 hovCnt">-->
                  <!--                        <div class="row m0 hovCntInner">-->
                  <!--                           shop now <i class="fas fa-caret-right"></i>-->
                  <!--                        </div>-->
                  <!--                     </div>-->
                  <!--                  </div>-->
                  <!--                  <div class="row m0 menuTitle">Earrings</div>-->
                  <!--               </a>-->
                  <!--            </li>-->
                  <!--            <li>-->
                  <!--               <a href="product.php">-->
                  <!--                  <div class="row m0 imgHov">-->
                  <!--                     <img src="images/menu/2.png" alt="">-->
                  <!--                     <div class="row m0 hovCnt">-->
                  <!--                        <div class="row m0 hovCntInner">-->
                  <!--                           shop now <i class="fas fa-caret-right"></i>-->
                  <!--                        </div>-->
                  <!--                     </div>-->
                  <!--                  </div>-->
                  <!--                  <div class="row m0 menuTitle">Brooch</div>-->
                  <!--               </a>-->
                  <!--            </li>-->
                  <!--            <li>-->
                  <!--               <a href="product.php">-->
                  <!--                  <div class="row m0 imgHov">-->
                  <!--                     <img src="images/menu/3.png" alt="">-->
                  <!--                     <div class="row m0 hovCnt">-->
                  <!--                        <div class="row m0 hovCntInner">-->
                  <!--                           shop now <i class="fas fa-caret-right"></i>-->
                  <!--                        </div>-->
                  <!--                     </div>-->
                  <!--                  </div>-->
                  <!--                  <div class="row m0 menuTitle">Necklace</div>-->
                  <!--               </a>-->
                  <!--            </li>-->
                  <!--         </ul>-->
                  <!--      </li>-->
                  <!--   </ul>-->
                  <!--</li>-->
                  <!--<li class="dropdown megaMenu">-->
                  <!--   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Solitaires</a>-->
                  <!--   <ul class="dropdown-menu row m0" role="menu">-->
                  <!--      <li class="listMenu">-->
                  <!--         <div class="row listTitle">Jewelery &amp; sectionals</div>-->
                  <!--         <ul class="nav megaInnerMenu">-->
                  <!--            <li><a href="#">wedding ring</a></li>-->
                  <!--            <li><a href="#">pendant</a></li>-->
                  <!--            <li><a href="#">nosering</a></li>-->
                  <!--            <li><a href="#">necklace</a></li>-->
                  <!--            <li><a href="#">medallion</a></li>-->
                  <!--            <li><a href="#">engagement ring</a></li>-->
                  <!--            <li><a href="#">costume jewellery</a></li>-->
                  <!--            <li><a href="#">brooch</a></li>-->
                  <!--            <li><a href="#">signet ring</a></li>-->
                  <!--         </ul>-->
                  <!--      </li>-->
                  <!--      <li class="listMenu">-->
                  <!--         <div class="row listTitle">shop by collections</div>-->
                  <!--         <ul class="nav megaInnerMenu">-->
                  <!--            <li><a href="#">Ring</a></li>-->
                  <!--            <li><a href="#">Bracelet</a></li>-->
                  <!--            <li><a href="#">Bangle</a></li>-->
                  <!--            <li><a href="#">Link, Chain</a></li>-->
                  <!--            <li><a href="#">Stud</a></li>-->
                  <!--            <li><a href="#">Ear-Ring, Tops</a></li>-->
                  <!--            <li><a href="#">Brooch</a></li>-->
                  <!--         </ul>-->
                  <!--      </li>-->
                  <!--      <li class="boxMenu">-->
                  <!--         <div class="row listTitle">-->
                  <!--            shop by categories <a href="product.php">shop all <i class="fas fa-caret-right"></i></a>-->
                  <!--         </div>-->
                  <!--         <ul class="nav megaInnerMenu row m0">-->
                  <!--            <li>-->
                  <!--               <a href="product.php">-->
                  <!--                  <div class="row m0 imgHov">-->
                  <!--                     <img src="images/menu/1.png" alt="">-->
                  <!--                     <div class="row m0 hovCnt">-->
                  <!--                        <div class="row m0 hovCntInner">-->
                  <!--                           shop now <i class="fas fa-caret-right"></i>-->
                  <!--                        </div>-->
                  <!--                     </div>-->
                  <!--                  </div>-->
                  <!--                  <div class="row m0 menuTitle">Earrings</div>-->
                  <!--               </a>-->
                  <!--            </li>-->
                  <!--            <li>-->
                  <!--               <a href="product.php">-->
                  <!--                  <div class="row m0 imgHov">-->
                  <!--                     <img src="images/menu/2.png" alt="">-->
                  <!--                     <div class="row m0 hovCnt">-->
                  <!--                        <div class="row m0 hovCntInner">-->
                  <!--                           shop now <i class="fas fa-caret-right"></i>-->
                  <!--                        </div>-->
                  <!--                     </div>-->
                  <!--                  </div>-->
                  <!--                  <div class="row m0 menuTitle">Brooch</div>-->
                  <!--               </a>-->
                  <!--            </li>-->
                  <!--            <li>-->
                  <!--               <a href="product.php">-->
                  <!--                  <div class="row m0 imgHov">-->
                  <!--                     <img src="images/menu/3.png" alt="">-->
                  <!--                     <div class="row m0 hovCnt">-->
                  <!--                        <div class="row m0 hovCntInner">-->
                  <!--                           shop now <i class="fas fa-caret-right"></i>-->
                  <!--                        </div>-->
                  <!--                     </div>-->
                  <!--                  </div>-->
                  <!--                  <div class="row m0 menuTitle">Necklace</div>-->
                  <!--               </a>-->
                  <!--            </li>-->
                  <!--         </ul>-->
                  <!--      </li>-->
                  <!--   </ul>-->
                  <!--</li>-->
                  <!--<li class="dropdown megaMenu">-->
                  <!--   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ALl Jewelery</a>-->
                  <!--   <ul class="dropdown-menu row m0" role="menu">-->
                  <!--      <li class="listMenu">-->
                  <!--         <div class="row listTitle">Jewelery &amp; sectionals</div>-->
                  <!--         <ul class="nav megaInnerMenu">-->
                  <!--            <li><a href="#">wedding ring</a></li>-->
                  <!--            <li><a href="#">pendant</a></li>-->
                  <!--            <li><a href="#">nosering</a></li>-->
                  <!--            <li><a href="#">necklace</a></li>-->
                  <!--            <li><a href="#">medallion</a></li>-->
                  <!--            <li><a href="#">engagement ring</a></li>-->
                  <!--            <li><a href="#">costume jewellery</a></li>-->
                  <!--            <li><a href="#">brooch</a></li>-->
                  <!--            <li><a href="#">signet ring</a></li>-->
                  <!--         </ul>-->
                  <!--      </li>-->
                  <!--      <li class="listMenu">-->
                  <!--         <div class="row listTitle">shop by collections</div>-->
                  <!--         <ul class="nav megaInnerMenu">-->
                  <!--            <li><a href="#">Ring</a></li>-->
                  <!--            <li><a href="#">Bracelet</a></li>-->
                  <!--            <li><a href="#">Bangle</a></li>-->
                  <!--            <li><a href="#">Link, Chain</a></li>-->
                  <!--            <li><a href="#">Stud</a></li>-->
                  <!--            <li><a href="#">Ear-Ring, Tops</a></li>-->
                  <!--            <li><a href="#">Brooch</a></li>-->
                  <!--         </ul>-->
                  <!--      </li>-->
                  <!--      <li class="boxMenu">-->
                  <!--         <div class="row listTitle">-->
                  <!--            shop by categories <a href="product.php">shop all <i class="fas fa-caret-right"></i></a>-->
                  <!--         </div>-->
                  <!--         <ul class="nav megaInnerMenu row m0">-->
                  <!--            <li>-->
                  <!--               <a href="product.php">-->
                  <!--                  <div class="row m0 imgHov">-->
                  <!--                     <img src="images/menu/1.png" alt="">-->
                  <!--                     <div class="row m0 hovCnt">-->
                  <!--                        <div class="row m0 hovCntInner">-->
                  <!--                           shop now <i class="fas fa-caret-right"></i>-->
                  <!--                        </div>-->
                  <!--                     </div>-->
                  <!--                  </div>-->
                  <!--                  <div class="row m0 menuTitle">Earrings</div>-->
                  <!--               </a>-->
                  <!--            </li>-->
                  <!--            <li>-->
                  <!--               <a href="product.php">-->
                  <!--                  <div class="row m0 imgHov">-->
                  <!--                     <img src="images/menu/2.png" alt="">-->
                  <!--                     <div class="row m0 hovCnt">-->
                  <!--                        <div class="row m0 hovCntInner">-->
                  <!--                           shop now <i class="fas fa-caret-right"></i>-->
                  <!--                        </div>-->
                  <!--                     </div>-->
                  <!--                  </div>-->
                  <!--                  <div class="row m0 menuTitle">Brooch</div>-->
                  <!--               </a>-->
                  <!--            </li>-->
                  <!--            <li>-->
                  <!--               <a href="product.php">-->
                  <!--                  <div class="row m0 imgHov">-->
                  <!--                     <img src="images/menu/3.png" alt="">-->
                  <!--                     <div class="row m0 hovCnt">-->
                  <!--                        <div class="row m0 hovCntInner">-->
                  <!--                           shop now <i class="fas fa-caret-right"></i>-->
                  <!--                        </div>-->
                  <!--                     </div>-->
                  <!--                  </div>-->
                  <!--                  <div class="row m0 menuTitle">Necklace</div>-->
                  <!--               </a>-->
                  <!--            </li>-->
                  <!--         </ul>-->
                  <!--      </li>-->
                  <!--   </ul>-->
                  <!--</li>-->
                  <!--<li class="dropdown megaMenu">-->
                  <!--   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Coins</a>-->
                  <!--   <ul class="dropdown-menu row m0" role="menu">-->
                  <!--      <li class="listMenu">-->
                  <!--         <div class="row listTitle">Jewelery &amp; sectionals</div>-->
                  <!--         <ul class="nav megaInnerMenu">-->
                  <!--            <li><a href="#">wedding ring</a></li>-->
                  <!--            <li><a href="#">pendant</a></li>-->
                  <!--            <li><a href="#">nosering</a></li>-->
                  <!--            <li><a href="#">necklace</a></li>-->
                  <!--            <li><a href="#">medallion</a></li>-->
                  <!--            <li><a href="#">engagement ring</a></li>-->
                  <!--            <li><a href="#">costume jewellery</a></li>-->
                  <!--            <li><a href="#">brooch</a></li>-->
                  <!--            <li><a href="#">signet ring</a></li>-->
                  <!--         </ul>-->
                  <!--      </li>-->
                  <!--      <li class="listMenu">-->
                  <!--         <div class="row listTitle">shop by collections</div>-->
                  <!--         <ul class="nav megaInnerMenu">-->
                  <!--            <li><a href="#">Ring</a></li>-->
                  <!--            <li><a href="#">Bracelet</a></li>-->
                  <!--            <li><a href="#">Bangle</a></li>-->
                  <!--            <li><a href="#">Link, Chain</a></li>-->
                  <!--            <li><a href="#">Stud</a></li>-->
                  <!--            <li><a href="#">Ear-Ring, Tops</a></li>-->
                  <!--            <li><a href="#">Brooch</a></li>-->
                  <!--         </ul>-->
                  <!--      </li>-->
                  <!--      <li class="boxMenu">-->
                  <!--         <div class="row listTitle">-->
                  <!--            shop by categories <a href="product.php">shop all <i class="fas fa-caret-right"></i></a>-->
                  <!--         </div>-->
                  <!--         <ul class="nav megaInnerMenu row m0">-->
                  <!--            <li>-->
                  <!--               <a href="product.php">-->
                  <!--                  <div class="row m0 imgHov">-->
                  <!--                     <img src="images/menu/1.png" alt="">-->
                  <!--                     <div class="row m0 hovCnt">-->
                  <!--                        <div class="row m0 hovCntInner">-->
                  <!--                           shop now <i class="fas fa-caret-right"></i>-->
                  <!--                        </div>-->
                  <!--                     </div>-->
                  <!--                  </div>-->
                  <!--                  <div class="row m0 menuTitle">Earrings</div>-->
                  <!--               </a>-->
                  <!--            </li>-->
                  <!--            <li>-->
                  <!--               <a href="product.php">-->
                  <!--                  <div class="row m0 imgHov">-->
                  <!--                     <img src="images/menu/2.png" alt="">-->
                  <!--                     <div class="row m0 hovCnt">-->
                  <!--                        <div class="row m0 hovCntInner">-->
                  <!--                           shop now <i class="fas fa-caret-right"></i>-->
                  <!--                        </div>-->
                  <!--                     </div>-->
                  <!--                  </div>-->
                  <!--                  <div class="row m0 menuTitle">Brooch</div>-->
                  <!--               </a>-->
                  <!--            </li>-->
                  <!--            <li>-->
                  <!--               <a href="product.php">-->
                  <!--                  <div class="row m0 imgHov">-->
                  <!--                     <img src="images/menu/3.png" alt="">-->
                  <!--                     <div class="row m0 hovCnt">-->
                  <!--                        <div class="row m0 hovCntInner">-->
                  <!--                           shop now <i class="fas fa-caret-right"></i>-->
                  <!--                        </div>-->
                  <!--                     </div>-->
                  <!--                  </div>-->
                  <!--                  <div class="row m0 menuTitle">Necklace</div>-->
                  <!--               </a>-->
                  <!--            </li>-->
                  <!--         </ul>-->
                  <!--      </li>-->
                  <!--   </ul>-->
                  <!--</li>-->
                  <!--<li><a href="#">Latest News</a></li>-->
                  <!--<li><a href="#">My Account</a></li>-->
                  <!--<li class="offers_navbtn" ><a href="#"><i class="fas fa-gift"></i>Offers</a></li>-->
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container-fluid -->
      </nav>
   </header>