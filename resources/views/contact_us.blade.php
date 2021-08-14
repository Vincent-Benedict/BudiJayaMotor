@extends('layout.master')

@section('extra-css')

    <link rel="stylesheet" href="{{asset('css/contact_us.css')}}">

@endsection

@section('content')

    <div class="content">

        <div class="container">

            <div class="box" id="address">

                <div class="box-header">
                    <p>Location</p>
                </div>

                <div class="box-body">
                    <div id="address">
                        <p> Jl. Raya Serpong No.8a, Pd. Jagung, Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15326</p>
                    </div>

                    <a target="_blank" href="https://www.google.co.id/maps/place/Budi+Jaya+Motor/@-6.2652426,106.6512173,14.26z/data=!4m12!1m6!3m5!1s0x0:0xfe88c8031d033251!2sBudi+Jaya+Motor!8m2!3d-6.2604057!4d106.6531345!3m4!1s0x0:0xfe88c8031d033251!8m2!3d-6.2604057!4d106.6531345?hl=en-id">
                        <div id="button-maps">
                            <p>View on Google Maps</p>
                        </div>
                    </a>
                </div>

            </div>

            <div class="box" id="contact-info">

                <div class="box-header">
                    <p>Contact Info</p>
                </div>

                <div class="box-body">
                    <div class="phone">
                        <p>Phone</p>
                        <p>no tel kantor (call)</p>
                    </div>

                    <div class="whatsapp">
                        <p>Whatsapp</p>
                        <p>0821-2211-9095 (Kennet Jose)</p>
                    </div>

                    <div id="button-contact">
                        <a target="_blank" href="https://wa.me/message/KYYTTCHDE76BI1">
                            <div class="button-wa">
                                <p>Chat via Whatsapp</p>
                            </div>
                        </a>
                        <div class="or">
                            <p>Or</p>
                        </div>
                        <div>
                            <img width="110px" src='{{url('/assets/qrCode.png')}}' alt='QR Code'/>
                        </div>
                    </div>

                </div>

            </div>

            <div class="box" id="sosmed">

                <div class="box-header">
                    <p>Social Media</p>
                </div>

                <div class="box-body contact">
                    <div class="instagram">
                        <div class="div-logo">
                            <a target="_blank" href="https://www.instagram.com/budijayamotorshow/">
                                <div class="logo">
                                    <img width="100px" src="{{url('/assets/instagram.png')}}" alt="">
                                </div>
                            </a>
                        </div>
                        

                        <a class="desc-contact" href="https://www.instagram.com/budijayamotorshow/">
                            <div>
                                <p>budijayamotorshow</p>
                            </div>
                        </a>

                    </div>

                    <div class="olx">
                        <div class="div-logo">
                            <a target="_blank" href="https://www.olx.co.id/profile/114216480">
                                <div class="logo">
                                    <img width="100px" src="{{url('/assets/olx.png')}}" alt="">
                                </div>
                            </a>
                        </div>
                       
                        <div class="desc-contact">
                            <a target="_blank" href="https://www.olx.co.id/profile/114216480"><p>Link me to OLX !</p></a>
                        </div>
                    </div>

                    <div class="email">
                        <div class="div-logo">
                            <a>
                                <div class="logo">
                                    <img id="email-img" width="80px" src="{{url('/assets/envelope.png')}}" alt="">
                                </div>
                            </a>
                        </div>
                        
                        <div class="desc-contact">
                            <p>budijayamotorshow@gmail.com</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>




@endsection