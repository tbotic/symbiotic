        
        @if(session()->has('newsletterPopup'))
        @else
        <!-- Modal -->
        <div id="newsletter-modal" class="modal fade show" role="dialog" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class='modal-header'>
                        <h3 class='col-12 modal-title text-center'>
                            Subscribe to Newsletter
                        </h3>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-lg-5">
                                    <div class="mail-modal-img">
                                        <img src="{{ asset('img/mail-modal.png') }}" class="img-responsive" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <p>Subscribe to be the first to know about all the news and promotion activities from Symbiotic.</p>
                                    <p><b>We quarantee you no spam mail from us.</b></p>
                                    <form class="form mt-4" method="POST" action="{{ route('newsletterConfirm') }}">
                                        @csrf
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                                            </div>
                                            <div class="form-group d-flex justify-content-between">
                                                <button type="submit" value="accept" name="submitbutton" class="btn btn-pink">Receive Newsletter</button>
                                                <button type="button" value="deny" name="submitbutton" id="deny" class="btn btn-white">No, thanks</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="eu-header header bg-light">
            <div class="container {{ Route::is('home') ? 'd-block' : 'd-none' }} py-2">
                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('euFunding') }}" class="eu-header-content d-flex justify-start align-items-center">
                                <img src="img/eu-flag.png" class="eu-flag" alt="">
                                <p><span>European Union - Together to EU Funds</span><br> The project was co-financed by the European Regional Development Fund</p>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
        <nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-transparent sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    {{ config('app.name', 'SymbIoTic') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto my-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('solutions') ? 'active' : '' }}" href="{{ route('solutions') }}">Solutions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('products.index') ? 'active' : '' }}" href="{{ route('products.index') }}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('posts.index') ? 'active' : '' }}" href="{{ route('posts.index') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('aboutUs') ? 'active' : '' }}" href="{{ route('aboutUs') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('contactUs') ? 'active' : '' }}" href="{{ route('contactUs') }}">Contact Us</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto my-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('cart') ? 'active' : '' }} d-flex align-items-center" href="{{ route('cart') }}">
                                <span class="fa fa-shopping-cart fa-2x mr-2"></span>
                                Cart
                                <span class="ml-2">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>