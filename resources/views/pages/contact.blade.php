@extends('layout.app_noSlider')
@section('title')
    Contact
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="gmap-form bg-white">
                    <h4 class="form-title text-uppercase">Contact
                        <span class="text-theme">us</span>
                    </h4>
                    <p class="form-text">We understand your requirement and provide quality works</p>
                    <form autocomplete="off" action="{{url("")}}/contact" method="POST">
                        @csrf
                        <div class="row form-grid">
                            <div class="col-sm-6">
                                <div class="input-view-flat input-group">
                                    <input class="form-control" name="name" type="text" placeholder="Name" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-view-flat input-group">
                                    <input class="form-control" name="email" type="email" placeholder="Email" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-view-flat input-group">
                                    <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="px-5 btn btn-theme" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
