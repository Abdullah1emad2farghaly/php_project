<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="website/assets/css/about.css">
    <link rel="stylesheet" href="website/assets/css/footer.css">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="about my-5">
        <div class="container">
            <div class="row p-0 m-0">
                <div class="col-lg-6 py-5">
                    <div class="card border-0 px-lg-5">
                        <h1 class='mb-4'>Our Story</h1>
                        <p>
                            Launced in 2015, Exclusive is South Asia’s
                            premier online shopping makterplace with an
                            active presense in Bangladesh. Supported by
                            wide range of tailored marketing, data and
                            service solutions, Exclusive has 10,500 sallers
                            and 300 brands and serves 3 millioons customers
                            across the region.
                        </p>
                        <p class='mb-4'>
                            Exclusive has more than 1 Million products
                            to offer, growing at a very fast. Exclusive
                            offers a diverse assotment in categories
                            ranging from consumer.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0">
                        <img src="website/assets/img/about.png" alt="" />
                    </div>
                </div>
            </div>


            <div class='ps-2 pt-5 ms-lg-4 m-0 swiper'>
                <div class="swiper-wrapper row">
                    <div class="swiper-slide col-3">
                        <div class="card pt-2 d-flex align-items-center flex-column">
                            <div class="icon d-flex mt-4 mb-3 justify-content-center align-items-center">
                                <img src="website/assets/img/icon_shop.png" alt="" />
                            </div>
                            <b class='fs-4'>10.5k </b>
                            <p class='fs-6'>Sallers active our site</p>
                        </div>
                    </div>
                    <div class="swiper-slide col-3">
                        <div class="card pt-2 d-flex align-items-center flex-column">
                            <div class="icon d-flex mt-4 mb-3 justify-content-center align-items-center">
                                <img src="website/assets/img/Icon-Sale.png" alt="" />
                            </div>
                            <b class='fs-4'>33k</b>
                            <p class='fs-6'>Mopnthly Produduct Sale</p>
                        </div>
                    </div>
                    <div class="swiper-slide col-3">
                        <div class="card pt-2 d-flex align-items-center flex-column">
                            <div class="icon d-flex mt-4 mb-3 justify-content-center align-items-center">
                                <img src="website/assets/img/Icon-Shopping bag.png" alt="" />
                            </div>
                            <b class='fs-4'>45.5k</b>
                            <p class='fs-6'>Customer active in our site</p>
                        </div>
                    </div>
                    <div class="swiper-slide col-3">
                        <div class="card pt-2 d-flex align-items-center flex-column">
                            <div class="icon d-flex mt-4 mb-3 justify-content-center align-items-center">
                                <img src="website/assets/img/Icon-Moneybag.png" alt="" />
                            </div>
                            <b class='fs-4'>25k</b>
                            <p class='fs-6'>Anual gross sale in our site</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='mt-5 swiper row'>
                <div class="swiper-slide col-3">
                    <div class="customers card">
                        <img src="website/assets/img/customer-1.png" alt="" />
                        <div class='ps-3 pt-3 pb-3'>
                            <h2>Tom Cruise</h2>
                            <p>Founder & Chairman</p>
                            <div class="links">
                                <a href="">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col-3">
                    <div class="customers card">
                        <img src="website/assets/img/customer-2.png" alt="" />
                        <div class='ps-3 pt-3 pb-3'>
                            <h2>Emma Watson</h2>
                            <p>Managing Director</p>
                            <div class="links">
                                <a href="">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col-3">
                    <div class="customers card">
                        <img src="website/assets/img/customer-3.png" alt="" />
                        <div class='ps-3 pt-3 pb-3'>
                            <h2>Will Smith</h2>
                            <p>Product Designer</p>
                            <div class="links">
                                <a href="">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide col-3">
                    <div class="customers card">
                        <img src="website/assets/img/customer-1.png" alt="" />
                        <div class='ps-3 pt-3 pb-3'>
                            <h2>Tom Cruise</h2>
                            <p>Founder & Chairman</p>
                            <div class="links">
                                <a href="">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <Services />
        </div>
    </div>



    @include('shared.website.footer')
    <script src="/assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>

</html>