@extends('layouts.app')

@section('header')
@include('layouts.header')
@endsection

@section('content')
<main>
    <div class="banner-container">
        <div class="container banner-area">
            <div class="row h-100">
                <div class="col-12 my-auto">
                    <div class="banner-title-area">
                        <h2 class="banner-title">Checkout</h2>
                        <p class="banner-subtitle">Home <span><i class="fa fa-angle-right"></i></span> Checkout</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form class="form" method="POST" action="{{ route('order') }}">
                    @csrf
                        <div class="form-group">
                            <label for="inputAddress">Name<span>*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Email<span>*</span></label>
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Contact Number</label>
                            <input type="number" name="phone" class="form-control" placeholder="Contact Number">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputState1">Industry<span>*</span></label>
                                <select id="inputState1" class="form-control" name="industry" required>
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="Agriculture & Forestry/Wildlife">Agriculture & Forestry/Wildlife</option>
                                    <option value="Business & Information">Business & Information</option>
                                    <option value="Construction/Utilities/Contracting">Construction/Utilities/Contracting</option>
                                    <option value="Education">Education</option>
                                    <option value="Finance & Insurance">Finance & Insurance</option>
                                    <option value="Food & Hospitality">Food & Hospitality</option>
                                    <option value="Gaming">Gaming</option>
                                    <option value="Health Services">Health Services</option>
                                    <option value="Motor Vehicle">Motor Vehicle</option>
                                    <option value="Natural Resources/Environmental">Natural Resources/Environmental</option>
                                    <option value="Personal Services">Personal Services</option>
                                    <option value="Real Estate & Housing">Real Estate & Housing</option>
                                    <option value="Safety/Security & Legal">Safety/Security & Legal</option>
                                    <option value="Transportation">Transportation</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState2">Position<span>*</span></label>
                                <select id="inputState2" class="form-control" name="position" required>
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="Accounting">Accounting</option>
                                    <option value="Administrative">Administrative</option>
                                    <option value="Arts and Design">Arts and Design</option>
                                    <option value="Business Development">Business Development</option>
                                    <option value="Community & Social Services">Community & Social Services</option>
                                    <option value="Consulting">Consulting</option>
                                    <option value="Education">Education</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Entrepreneurship">Entrepreneurship</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Healthcare Services">Healthcare Services</option>
                                    <option value="Human Resources">Human Resources</option>
                                    <option value="Information Technology">Information Technology</option>
                                    <option value="Legal">Legal</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Media & Communications">Media & Communications</option>
                                    <option value="Military & Protective Services">Military & Protective Services</option>
                                    <option value="Operations">Operations</option>
                                    <option value="Product Management">Product Management</option>
                                    <option value="Program & Product Management">Program & Product Management</option>
                                    <option value="Purchasing">Purchasing</option>
                                    <option value="Quality Assurance">Quality Assurance</option>
                                    <option value="Real Estate">Real Estate</option>
                                    <option value="Rersearch">Rersearch</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Support">Support</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="main-section-title-side">
                                    <h5>Products you are interested in</h5>
                                </div>
                            </div>
                        </div>
                        @if(Session::has('cart'))
                            @foreach($products as $product)
                                <div class="row checkout-product">
                                    <div class="col-12 col-md-8">
                                        {{ $product['item']['title'] }} × {{ $product['qty'] }}
                                    </div>
                                    <div class="col-12 col-md-4">
                                        from €{{ $product['price'] }}
                                    </div>
                                </div>
                            @endforeach
                                <div class="row checkout-footer">
                                    <div class="col-12 col-md-8">
                                        Total
                                    </div>
                                    <div class="col-12 col-md-4">
                                        from €{{ $totalPrice }}
                                    </div>
                                </div>
                        @else
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="text-center my-5">There are no items in cart yet.</h5>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" name="promo" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Send me promos and product updates.</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-pink">Send us Inquiry</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>
@endsection

@section('footer')
@include('layouts.footer')
@endsection