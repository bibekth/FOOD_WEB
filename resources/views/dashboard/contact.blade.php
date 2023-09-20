@extends('layouts.main')

@section('content')
    <aside>
        <div class="header d-flex justify-content-center">
            <span class="fs-1">CONTACT US</span>
        </div>
        <div class="line d-flex justify-content-center">
            <div class="hr col-lg-6 col-md-6 col-sm-6 col-12">
                <hr>
            </div>
        </div>
        <div class="description1 d-flex justify-content-center">
            <span class="fs-5">We'd love to help you!!!</span>
        </div>
        <div class="description2 d-flex justify-content-center">
            <span class="small">We like to connect with you. Feel free to contact us.</span>
        </div>
        <div class="form-section-wrapper container ">
            <div class="form-section ">
                <div class="form-header">
                    <span class="fs-5"><u>WRITE YOUR ANY QUESTION!</u></span>
                </div>
                <form action="" method="POST" class="form">
                    @csrf
                    <div class="form-section-with-submit ">
                        <div class="row">
                            <div class="input-section col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input type="text" name="full_name" placeholder="Full Name" class="form-control">
                                <input type="email" name="email" placeholder="Email" class="form-control">
                                <input type="text" name="subject" placeholder="Subject" class="form-control">
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                                <div class="submit-button d-flex justify-content-center">
                                    <input type="submit" name="Submit" value="Submit" class="btn">
                                </div>
                            </div>
                            <div class="map col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.8106588905334!2d84.4136139751939!3d27.692246326157722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb159ebceec1%3A0x78ca06bb7af30008!2sBihani%20Tech%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1694949958406!5m2!1sen!2snp"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade" class="img-fluid"></iframe>
                            </div>
                            {{-- <div class="contact-info-section col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="contact-section">
                                <h4 class="h4">CONTACT</h4>
                                <span class="fs-6">Bibek Thapa Magar</span> <span class="fs-6">(+977
                                    9809101575)</span><br>
                                <span class="fs-6">Milan Darai</span> <span class="fs-6">(+977 9809101575)</span><br>
                            </div>
                            <div class="email-section">
                                <h4 class="h4">Email</h4>
                                <span class="fs-6">food_web.2023@gmail.com</span>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer-section-wrapper">
            <div class="footer-section container">
                <div class="row ">
                    <div class="footer-get-help col-12 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="get-help">
                            <h4 class="h4">GET HELP</h4>
                            <span class="fs-6"><a href="">FAQs</a></span><br>
                            <span class="fs-6"><a href="">How to order?</a></span><br>
                            <p class="small">Service hour : 7 AM - 9 PM </p>
                        </div>
                    </div>
                    <div class="footer-information col-12 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="footer-info-div">
                            <h4 class="h4">INFORMATIONS</h4>
                            <span class="fs-6"><a href="">About Restaurants</a></span><br>
                            <span class="fs-6"><a href="">Delivery Charges</a></span><br>
                            <span class="fs-6"><a href="">Available Area</a></span><br>
                            <span class="fs-6"><a href="">Terms and Conditions</a></span><br>
                            <span class="fs-6"><a href="">Privacy Policy</a></span>
                        </div>
                    </div>
                    <div class="footer-contact-us col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="footer-contact-div">
                            <h4 class="h4">CONTACT US</h4>
                            <span class="fs-6">Chitwan, 9809101575</span><br>
                            <span class="fs-6">Chitwan, 9869885123</span><br>
                            <span class="fs-6 email">food_web.2023@gmail.com</span>
                            <div class="connect-with-us">
                                <h6 class="h6">CONNECT WITH US</h6>
                                <div class="row icons-social">
                                    <div class="col-3 col-xl-7 col-lg-7 col-sm-7 col-md-2 happy"></div>

                                    <div class="col-2 col-xl-1 col-lg-1 col-sm-1 col-md-2">
                                        <div class="p-0.5"><a href=""><i class="bi bi-facebook"></i></a></div>
                                    </div>
                                    <div class="col-2 col-xl-1 col-lg-1 col-sm-1 col-md-2">
                                        <div class="p-0.5"><a href=""><i class="bi bi-twitter"></i></a></div>
                                    </div>
                                    <div class="col-2 col-xl-1 col-lg-1 col-sm-1 col-md-2">
                                        <div class="p-0.5"><a href=""><i class="bi bi-tiktok"></i></a></div>
                                    </div>
                                    <div class="col-2 col-xl-1 col-lg-1 col-sm-1 col-md-2">
                                        <div class="p-0.5"><a href=""><i class="bi bi-instagram"></i></a></div>
                                    </div>
                                    <div class="col-2 col-xl-1 col-lg-1 col-sm-1 col-md-2">
                                        <div class="p-0.5"><a href=""><i class="bi bi-whatsapp"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-section d-flex justify-content-center pt-5">
                <div class="copyright-content">
                    <span class="copy-right" style="font-size: 10px;">&copy; 2023 FoodWeb Pvt. Ltd. All Rights Reserved</span>
                </div>
            </div>
        </div>
    </aside>
    <style>
        .header {
            padding: 8rem 0 0.5rem 0;
            font-size: 2rem;
        }

        hr {
            /* margin: 0; */
            border: 2px solid white;
            /* height: 5px;
                                background-color: #fff;
                                border: none; */
        }

        .description1 {
            font-size: 1.2rem;
            padding: 0.2rem 0;
        }

        .description2 {
            font-size: 0.9rem;
            padding: 0.2rem 0 6rem 0;
        }

        .form-section-wrapper {
            margin-bottom: 4rem;
        }

        .form-header {
            padding-bottom: 1rem;
            padding-left: 1rem;
        }

        .contact-info-section {
            margin-left: auto;
        }

        .input-section input {
            margin: 0;
            text-align: center;
            margin-bottom: 1rem;
        }

        .input-section textarea {
            resize: none;
        }

        .input-section input:focus::placeholder {
            color: transparent;
        }

        .map iframe {
            height: 473.6px;
        }

        .email-section {
            padding-top: 1.5rem;
        }

        .submit-button input {
            margin: 1rem 32%;
            font-weight: 900;
            border-radius: 8px;
            border: 2px solid #ffa31a;
            color: #ccc;

        }

        .submit-button input:hover {
            background-color: #ffa31a;
            color: #000;
        }

        .footer-section {
            padding-top: 1rem;
        }

        .connect-with-us {
            padding-top: 1.5rem;
        }

        .footer-info-div span:hover {
            color: #ffa31a;
        }

        .footer-info-div {
            text-align: center;
        }

        .row .col i:hover {
            color: #ffa31a;
        }

        .footer-section-wrapper {
            background-color: #1e1817;
        }

        .footer-get-help span:hover {
            color: #ffa31a;
        }

        .footer-get-help {
            padding-bottom: 1.5rem;
        }

        .footer-information {
            padding-bottom: 1.5rem;
        }

        .footer-contact-us {
            padding-bottom: 1.5rem;
        }

        .footer-contact-div {
            text-align: right;
        }

        .get-help p{
            margin-bottom: unset;
            padding-top: 0.4rem;
        }

        .icons-social {
            display: flex;
            justify-content: flex-end ;
        }

        @media screen and (max-width: 576px) {
            .footer-get-help {
                display: flex;
                justify-content: center;
                padding-bottom: 2rem;
            }

            .footer-information {
                display: flex;
                justify-content: center;
                padding-bottom: 2rem;
            }

            .footer-contact-us {
                display: flex;
                justify-content: center;
                padding-bottom: 2rem;
            }

            .footer-contact-div {
                text-align: center !important;
            }

            .footer-info-div{
            text-align: center !important;
        }

        .get-help{
            text-align: center !important;
        }
        .icons-social {
            display: flex;
            justify-content: center !important;
        }
        /* .copyright-content span{
            font-size: 8px !important;
        } */

        }

        @media screen and (max-width: 768px) {
            /* .footer-information {
                display: flex;
                justify-content: right;
            } */

             .footer-info-div{
            text-align: right;
        }

        .happy {
            display: none !important;
        }
        .icons-social {
            display: flex;
            justify-content: flex-start !important;
        }


        .footer-contact-us {
                display: flex;
            }

            .footer-contact-div {
                text-align: inherit;
            }
        }

        @media screen and (max-width: 992px) {
            .email{
                font-size: 0.9rem !important;
            }
        }
    </style>
@endsection
