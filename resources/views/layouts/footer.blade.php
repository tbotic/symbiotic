<footer class="footer">
            <div class="container">
                <div id="footer-eu" class="row mb-5 d-flex justify-start align-items-center">
                    <div class="col-4 col-md-2 offset-md-1">
                        <img src="{{ asset('img/zastava-eu.png') }}" class="img-responsive" alt="">
                    </div>
                    <div class="col-8 col-md-4">
                        <img src="{{ asset('img/konkurentnost.png') }}" class="img-responsive" alt="">
                    </div>
                    <div class="col-8 col-md-4">
                        <img src="{{ asset('img/fondovi.png') }}" class="img-responsive" alt="">
                    </div>
                    <div class="col-12 my-3">
                        <a href="{{ route('euFunding') }}"><h6 class="text-center">The website was co-financed by the European Union from the European Regional Development Fund.</h6></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-3">
                        <h3 class="footer-heading">SymbIoTic</h3>
                        <p class="text-justify">SymbIoTic has devoted all its work to help regions affected by any element of climate change to reduce food & water scarcity, improving resilience to natural disasters, connecting poor regions with ones that are willing to help.</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <h4 class="footer-heading">LINKS</h4>
                        <ul class="foot-ul">
                            <li><i class="fa fa-angle-right"></i> <a href="{{ route('solutions') }}">Solutions</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="{{ route('products.index') }}">Shop</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="{{ route('posts.index') }}">Blog</a></li>
                            @guest
                                @if (Route::has('login'))
                                    <li><i class="fa fa-angle-right"></i><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                @endif
                            @else
                                <li><i class="fa fa-angle-right"></i><a href="{{ route('admin') }}">Admin Panel</a></li>
                            @endguest
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <h4 class="footer-heading">SUPPORT</h4>
                        <ul class="foot-ul">
                            <li><i class="fa fa-angle-right"></i> <a href="{{ route('contactUs') }}">Contact Us</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="{{ route('aboutUs') }}">About Us</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="{{ route('termsOfUse') }}">Terms of Use</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <h4 class="footer-heading">FOLLOW US</h4>
                        <ul class="foot-info">
                            <li><i class="fa fa-phone"></i><a href="tel:+385995902730">+385 99 590 2730</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:davor.predavec@symbiotic.hr">davor.predavec@symbiotic.hr</a></li>
                        </ul>
                        <div class="foot-divs">
                            <a href="https://hr.linkedin.com/company/symbiotic-jdoo"><i class="fa fa-linkedin"></i></a>
                            <i class="fa fa-facebook"></i>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- COOKIES -->
        @include('cookieConsent::index')
        <!-- /COOKIES -->