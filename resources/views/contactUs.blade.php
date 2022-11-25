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
                        <h2 class="banner-title">Contact Us</h2>
                        <p class="banner-subtitle">Home <span><i class="fa fa-angle-right"></i></span> Contact Us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-section-title">
                        <p class="subheading">CONTACT US</p>
                        <h2 class="heading">Contact our support guys or make an <span>appointment</span></h2>
                    </div>
                </div>
                <div class="col-12 col-md-5 mb-3">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <p>We’re happy to hear about your needs and define how the success looks for you. Then, we’ll derive the prototype integrated in the IoT platform to validate your business case.<br><br>
                            “Technology is an active attitude towards nature” (H. Burger – Yugoslavian philosopher)</p>
                            <ul class="contact-ul">
                                <li><i class="fa fa-map-marker"></i>Nove Plavnice 37, 43000 Bjelovar, Croatia</li>
                                <li><i class="fa fa-phone"></i>+385 (0) 99 590 2730</li>
                                <li><i class="fa fa-envelope-o"></i>info@symbiotic.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 offset-md-1">
                    <form class="form" method="POST" action="{{ route('sendContact') }}">
                    @csrf
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select id="inputState1" class="form-control" name="industry" required>
                                    <option value="" selected disabled>Industry</option>
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
                                <select id="inputState2" class="form-control" name="position" required>
                                    <option value="" selected disabled>Position</option>
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
                        <div class="form-group">
                            <select id="inputState" name="topic" class="form-control" required>
                                <option value="" selected disabled>Select Topic...</option>
                                <option value="Technical Support">Technical Support</option>
                                <option value="Products & BIlling">Products & BIlling</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" name="promo" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Send me promos and product updates.</label>
                            </div>
                        </div>
                        @if ($message = Session::get('flash'))
                        <div class="form-group">
                            <div class="alert alert-success">
                                {{ $message }}
                            </div>
                        </div>
                        @endif
                        <button type="submit" class="btn btn-pink">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('footer')
@include('layouts.footer')
@endsection