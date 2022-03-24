@extends('frontend.layout')

@section('content')
<section id="breadcrumbRow" class="row">
        <!-- <h2>contact us</h2>
        <div class="row pageTitle m0">
            <div class="container">
                <h4 class="fleft">Register</h4>
                <ul class="breadcrumb fright">
                    <li><a href="index.php">home</a></li>
                    <li class="active">Register</li>
                </ul>
            </div>
        </div>
    </section> -->
    
     <section id="contactRow" class="row contentRowPad">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row m0">
                        <h4 class="contactHeading heading">Register</h4>
                    </div>
                    <div class="row m0 contactForm">
                        <form class="row m0" id="contactForm" method="post" name="contact" action="{{route('user_store')}}">
                            @csrf
                            <div class="row m0">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="row m0">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="row m0">
                                <label for="mobile">Mobile *</label>
                                <input type="number" class="form-control" name="mobile" id="mobile" required>
                            </div>
                            <div class="row m0">
                                <label for="password">Password *</label>
                                <input type="text" class="form-control" name="password" id="password" required>
                            </div>
                            <button class="btn btn-primary btn-lg filled" type="submit">Register</button>                            
                        </form>
                        <div id="success">
                                <span class="green textcenter">
                                    Your message was sent successfully! I will be in touch as soon as I can.
                                </span>
                        </div>
                        <div id="error">
                            <span>
                                Something went wrong, try refreshing and submitting the form again.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row m0">
                        <h4 class="contactHeading heading">Login</h4>
                    </div>
                    <div class="row m0 contactForm">
                        @if($errors->any())
                        <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                        </div>
                        @endif
                        <form class="row m0" id="contactForm" method="post" name="contact" action="{{route('loginCheck')}}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="row m0">
                                <label for="password">Password *</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                           <!-- 
                            <div class="row m0 captchaRow">
                                <img src="images/captcha.png" alt=""><br>
                                <label for="captcha">Enter the above text</label>
                                <input type="text" class="form-control" name="captcha" id="captcha">
                            </div> -->
                            <button class="btn btn-primary btn-lg filled" type="submit">Login</button>                            
                        </form>
                        <div id="success">
                                <span class="green textcenter">
                                    Your message was sent successfully! I will be in touch as soon as I can.
                                </span>
                        </div>
                        <div id="error">
                            <span>
                                Something went wrong, try refreshing and submitting the form again.
                            </span>
                        </div>
                    </div>
                    <div class="media contactInfo">

                        <!-- <div class="media-left">
                            <i class="fas fa-map-marker"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="heading">where to reach us</h5>
                            <p>You can reach us at the following address:</p>
                            <h5>1167, LIFT WALI BUILDING, 3RD FLOOR, KUCHA MAHAJANI 
                            <br>CHANDNI CHOWK, DELHI-06</h5>
                        </div> --> 
                    </div> <!--contactInfo-->
                   <!--  <div class="media contactInfo">
                        <div class="media-left">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="heading">Email us @</h5>
                            <p>Email your issues and suggestion for the following email addresses: </p>
                            <h5> info@bansalandsonsjewellers.com</h5>
                        </div>
                    </div> --> <!--contactInfo-->
                   <!--  <div class="media contactInfo">
                        <div class="media-left">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="heading">need to call us?</h5>
                            <p>From Monday to Friday,10:00 AM - 8:00 PM, call us at:</p>
                            <h5>+91-9810080068</h5>
                        </div>
                    </div> --> <!--contactInfo-->
                    <!-- <div class="media contactInfo">
                        <div class="media-left">
                            <i class="fas fa-question"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="heading">we have great support</h5>
                            <p>We provide the best Quality of products to you.We are always here to help our lovely customers.We ship our products anywhere with more secure. We provide the best Quality of products to you.</p>
                        </div>
                    </div> --> <!--contactInfo-->
                </div>
            </div>
        </div>
    </section>
      <!-- <section id="googleMapRow" class="row">
        <div class="row m0">
            <div style="width: 100%">
                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1167,%20LIFT%20WALI%20BUILDING,%203RD%20FLOOR,%20KUCHA%20MAHAJANI%20CHANDNI%20CHOWK,%20DELHI-06+(Bansal%20and%20Sons%20Jewellers)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
        </div>
    </section> -->
@endsection