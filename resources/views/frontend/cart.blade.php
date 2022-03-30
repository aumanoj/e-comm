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
                        @php $total = 0 @endphp
                        @foreach($carts as $cart)
                        @php $total += $cart->products->discounted_price*$cart->qty @endphp
                        <tr class="alert" role="alert" data-id="{{ $cart->id }}">
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
                            <td class="price"><del>₹ {{$cart->products->product_price}}</del>₹
                                {{$cart->products->discounted_price}}</td>
                            <td>
                                <div class="input-group spinner">
                                    <input type="number" value="{{$cart->qty}}" class="form-control quantity cart_update" min="1" />
                                    
                                    </div>
                                    </td>
                            <td class="price">{{$cart->products->discounted_price*$cart->qty}}</td>
                            <td><a href="#" class="edit cart_remove" data-dismiss="alert" aria-label="Close"><i class="far fa-trash-alt"></i></a>
                            </td>
                            </tr>
                            @endforeach
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
<div class="col-sm-4">
    <div class="row m0 totalCheckout">
        <div class="descList row m0">
            <dl class="dl-horizontal">
                <dt>Subtotal</dt>
                <dd>₹{{ $total }}</dd>
                <dt class="gt">Grand Total</dt>
                <dd>₹{{ $total }}</dd>
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
    <script type="text/javascript">

        $(".cart_update").change(function (e) {

            e.preventDefault();

            var ele = $(this);
            //console.log(ele.parents("tr").find(".quantity").val());
            $.ajax({
                url: '{{ route('update_cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        });
        $(".cart_remove").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Do you really want to remove?")) {
                $.ajax({
                    url: '{{ route('remove_from_cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
    @endsection
    @section('scripts')

@endsection