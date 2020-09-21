@extends('dashboards')
@section('titledash','Contact Informations')
@section('contents')
@section('activecontact','active')
<section id="main-content">
    @if(session('selamat'))
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <strong>Congratulations {{session()->get('name')}}!</strong> - {{session('selamat')}}
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="modal fade" id="editinformation" tabindex="-1" role="dialog" aria-labelledby="editinformation"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="/admin/contact/update" method="post">
                        {{ csrf_field() }}
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Informations</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">First phone / WA number</label>
                                        <input type="text" name="whatsapp1" class="form-control input-default"
                                            value="{{$info->whatsapp1}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Second phone / WA number</label>
                                        <input type="text" name="whatsapp2" class="form-control input-default"
                                            value="{{$info->whatsapp2}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Facebook</label>
                                        <input type="text" name="facebook" class="form-control input-default"
                                            value="{{$info->facebook}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Instagram</label>
                                        <input type="text" name="instagram" class="form-control input-default"
                                            value="{{$info->instagram}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Alamat Usaha</label>
                                        <textarea name="address" class="form-control" id="" cols="30"
                                            rows="10">{{$info->address}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                                                    <span class="phone-number">{{$info->whatsapp1}}</span>
                                                </div>
                                                <div class="phone-content">
                                                    <span class="contact-title">Phone II:</span>

                                                    <span class="phone-number">{{$info->whatsapp2}}</span>

                                                </div>
                                                <div class="address-content">
                                                    <span class="contact-title">Address:</span>
                                                    <span class="mail-address">{!!strip_tags($info->address)!!}</span>
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
                                                    <span class="phone-number">{{$info->facebook}}</span>

                                                </div>
                                                <div class="">
                                                    <span class="contact-title">Instagram:</span>
                                                    <span class="phone-number">{{$info->instagram}}</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <a data-toggle="modal" data-target="#editinformation"
                                            class="btn btn-primary btn-block btn-flat btn-addon m-b-10 m-l-5"
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
