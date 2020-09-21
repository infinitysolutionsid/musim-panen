@extends('dashboards')
@section('titledash','Contact Informations')
@section('contents')
@section('activecontact','active')
<section id="main-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="user-profile">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="user-profile-name">CV Putra Karya Logam Sukses</div>
                                <div class="user-Location"><i class="ti-location-pin"></i> Medan, Indonesia</div>
                                <div class="user-job-title">Ship / Marine Propeller</div>
                                <div class="custom-tab user-profile-tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab"
                                                data-toggle="tab">About</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="1">
                                            <div class="contact-information">
                                                <h4>Contact information</h4>
                                                <div class="phone-content">
                                                    <span class="contact-title">Phone:</span>
                                                    <span class="phone-number">+6282363183901</span>
                                                </div>
                                                <div class="phone-content">
                                                    <span class="contact-title">Phone II:</span>
                                                    <span class="phone-number">+62811628376</span>
                                                </div>
                                                <div class="address-content">
                                                    <span class="contact-title">Address:</span>
                                                    <span class="mail-address">Jalan Perintis Km 10 Jampalan, Asahan -
                                                        Sumatera Utara, Indonesia</span>
                                                </div>
                                                <div class="email-content">
                                                    <span class="contact-title">Email:</span>
                                                    <span class="contact-email">info@putrakaryalogamsukses.com</span>
                                                </div>
                                                <div class="website-content">
                                                    <span class="contact-title">Website:</span>
                                                    <span class="contact-website">www.putrakaryalogamsukses.com</span>
                                                </div>
                                            </div>
                                            <div class="contact-information">
                                                <h4>Social Media information</h4>
                                                <div class="">
                                                    <span class="contact-title">Facebook:</span>
                                                    <span class="phone-number"></span>
                                                </div>
                                                <div class="">
                                                    <span class="contact-title">Instagram:</span>
                                                    <span class="phone-number"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <a class="btn btn-primary btn-block btn-flat btn-addon m-b-10 m-l-5"
                                            style="color: #fff;"><i class="ti-pencil"></i>Edit Information</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="user-profile">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="basic-information">
                                    <h4>Basic payment information</h4>
                                    <div class="">
                                        <span class="contact-title">Payment Development Status:</span>
                                        <span class="birth-date">Early Payment 50% </span>
                                    </div>
                                    <div class="">
                                        <span class="contact-title">Domain/Hosting Registered:</span>
                                        <span class="birth-date">September 06, 2020 </span>
                                    </div>
                                    <div class="">
                                        <span class="contact-title">Annual Renewal:</span>
                                        <span class="birth-date">September 06, 2021 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
