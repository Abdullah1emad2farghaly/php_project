<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="website/assets/css/contact.css">
    <link rel="stylesheet" href="website/assets/css/footer.css">
    <link rel="stylesheet" href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
</head>

<body>
    @include('shared.website.nav-link')
    <div class="contact my-5 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-4">
                    <div class="card p-5 border-0">
                        <div class="top pb-4">
                            <div class="call mb-4 d-flex align-items-center">
                                <div class="icon fs-5 text-white d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <h4 class='ps-3'>Call To Us</h4>
                            </div>
                            <p>We are available 24/7, 7 days a week.</p>
                            <p>Phone: +8801611112222</p>
                        </div>
                        <div class="bottom mt-4 ">
                            <div class="message mb-4 d-flex align-items-center">
                                <div class="icon fs-5 d-flex justify-content-center align-items-center text-white">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <h4 class='ms-3'>Write To US</h4>
                            </div>
                            <p>Fill out our form and we will contact <br />you within 24 hours.</p>
                            <p>Emails: customer@exclusive.com</p>
                            <p>Emails: support@exclusive.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mb-4">
                    <div class="card py-5 px-3 border-0">
                        <div class="data d-sm-flex d-block gap-2">
                            <input type="text" class='w-100 mt-3 border-0 d-block' placeholder='Your Name' />
                            <input type="email" class='w-100 mt-3 border-0 d-block' placeholder='Your Email' />
                            <input type="tel" class='w-100 mt-3 border-0 d-block' placeholder='Your Phone' />
                        </div>
                        <textarea class='mt-4 border-0' cols={5} rows='9' id="" placeholder='Your Message'></textarea>
                        <button class='mt-4 ms-auto rounded'>Send Message</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('shared.website.footer')

    <script src="/assets/fontawesome/js/all.js"></script>
    <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>

</html>