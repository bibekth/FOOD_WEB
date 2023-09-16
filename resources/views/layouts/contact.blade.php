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
        <div class="form-section-wrapper d-flex justify-content-center">
            <div class="form-section col-10">
                <div class="form-header">
                    <span class="fs-5"><u>WRITE YOUR ANY QUESTION!</u></span>
                </div>
                <form action="" method="POST" class="form">
                    @csrf
                    <div class="form-section-with-submit d-flex justify-content-evenly">
                        <div class="input-section col-3">
                            <input type="text" name="full_name" placeholder="Full Name" class="form-control"
                                style="margin-top: 0.4rem;">
                            <input type="email" name="email" placeholder="Email" class="form-control">
                            <input type="text" name="subject" placeholder="Subject" class="form-control">
                        </div>
                        <div class="textarea-section col-3">
                            <textarea name="message" id="message" cols="30" rows="6" class="form-control"></textarea>
                            <div class="submit-button d-flex justify-content-center">
                                <input type="submit" name="Submit" value="Submit" class="btn">
                            </div>
                        </div>
                        <div class="contact-info-section col-3">
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
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer-section-wrapper">
            <div class="footer-section d-flex justify-content-around">
                <div class="footer-get-help">
                    <h4 class="h4">GET HELP</h4>
                    <span class="fs-6"><a href="">FAQs</a></span><br>
                    <span class="fs-6"><a href="">How to order?</a></span><br>
                    <p class="small">Service hour : 7 AM - 9 PM </p>
                </div>
                <div class="footer-information d-flex justify-content-center">
                    <div class="footer-info-div">
                        <h4 class="h4">INFORMATIONS</h4>
                        <span class="fs-6"><a href="">About Restaurants</a></span><br>
                        <span class="fs-6"><a href="">Delivery Charges</a></span><br>
                        <span class="fs-6"><a href="">Available Area</a></span><br>
                        <span class="fs-6"><a href="">Terms and Conditions</a></span><br>
                        <span class="fs-6"><a href="">Privacy Policy</a></span>
                    </div>
                </div>
                <div class="footer-contact-us d-flex justify-content-end">
                    <div class="foooter-contact-div">
                        <h4 class="h4">CONTACT US</h4>
                        <span class="fs-6">Chitwan, 9809101575</span><br>
                        <span class="fs-6">Chitwan, 9869885123</span>
                        <div class="connect-with-us">
                            <h6 class="h6">CONNECT WITH US</h6>
                            <div class="row">
                                <div class="col">
                                    <div class="p-0.5"><a href=""><i class="bi bi-facebook"></i></a></div>
                                </div>
                                <div class="col">
                                    <div class="p-0.5"><a href=""><i class="bi bi-twitter"></i></a></div>
                                </div>
                                <div class="col">
                                    <div class="p-0.5"><a href=""><i class="bi bi-tiktok"></i></a></div>
                                </div>
                                <div class="col">
                                    <div class="p-0.5"><a href=""><i class="bi bi-instagram"></i></a></div>
                                </div>
                                <div class="col">
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
                &copy; <span class="small">2023 FoodWeb Pvt. Ltd. All Rights Reserved</span>
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
            padding-left: 10%;
        }

        .input-section input {
            margin: 1rem 0;
            text-align: center;
        }

        .input-section input:focus::placeholder {
            color: transparent;
        }

        .textarea-section textarea {
            resize: none;
            margin-bottom: 1rem;
        }

        .email-section {
            padding-top: 1.5rem;
        }

        .submit-button input {
            margin: 0 32%;
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
            /* padding: 0 5%; */
        }

        .connect-with-us {
            padding-top: 1.5rem;
        }

        .footer-info-div span:hover {
            color: #fff;
        }

        .row .col i:hover {
            color: #fff;
        }

        .footer-get-help span:hover {
            color: #fff;
        }
    </style>
@endsection
