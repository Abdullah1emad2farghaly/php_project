<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="website/assets/css/style.css">
    <link rel="stylesheet" href="website/assets/css/category.css">
    <link rel="stylesheet" href="website/assets/css/bestSales.css">
    <link rel="stylesheet" href="website/assets/css/landing.css">
    <link rel="stylesheet" href="website/assets/css/feature.css">
    <link rel="stylesheet" href="website/assets/css/footer.css">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- start landing component -->
    <header>
        <nav>
            <x-nav-link route="website.index">Home</x-nav-link>
            <x-nav-link route="website.about">About</x-nav-link>
            <x-nav-link route="website.contact">Contact</x-nav-link>

            @guest
            <x-nav-link route="website.signup.form">Sign Up</x-nav-link>
            <x-nav-link route="login">Login</x-nav-link>
            @endguest

            @auth
            <x-nav-link route="website.cart">Cart</x-nav-link>
            <form action="{{ route('website.logout') }}" method="POST" style="display:inline">
                @csrf
                <button type="submit" style="background:none;border:none;color:white;cursor:pointer;">
                    Logout
                </button>
            </form>
            @endauth
        </nav>
    </header>


    <div class="slider">
        <div class="list">
            <div class="item">
                <img src="website/assets/img/image1.jpg" alt="" />
                <div class="content">
                    <div class="title">MAGIC SLIDER</div>
                    <div class="type">FLOWER</div>
                    <div class="description">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Laboriosam perspiciatis aliquam cupiditate voluptates autem,
                        incidunt molestiae recusandae consequuntur odit repellat ullam
                        quasi quae quod dolorum, sed quas ab ducimus consectetur.
                    </div>
                    <div class="button">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="website/assets/img/image2.jpg" alt="" />
                <div class="content">
                    <div class="title">MAGIC SLIDER</div>
                    <div class="type">NATURE</div>
                    <div class="description">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Laboriosam perspiciatis aliquam cupiditate voluptates autem,
                        incidunt molestiae recusandae consequuntur odit repellat ullam
                        quasi quae quod dolorum, sed quas ab ducimus consectetur.
                    </div>
                    <div class="button">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="website/assets/img/image3.jpg" alt="" />
                <div class="content">
                    <div class="title">MAGIC SLIDER</div>
                    <div class="type">PLANT</div>
                    <div class="description">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Laboriosam perspiciatis aliquam cupiditate voluptates autem,
                        incidunt molestiae recusandae consequuntur odit repellat ullam
                        quasi quae quod dolorum, sed quas ab ducimus consectetur.
                    </div>
                    <div class="button">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="website/assets/img/image4.jpg" alt="" />
                <div class="content">
                    <div class="title">MAGIC SLIDER</div>
                    <div class="type">NATURE</div>
                    <div class="description">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Laboriosam perspiciatis aliquam cupiditate voluptates autem,
                        incidunt molestiae recusandae consequuntur odit repellat ullam
                        quasi quae quod dolorum, sed quas ab ducimus consectetur.
                    </div>
                    <div class="button">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="thumbnail">
            <div class="item">
                <img src="website/assets/img/image1.jpg" alt="">
            </div>
            <div class="item">
                <img src="website/assets/img/image2.jpg" alt="">
            </div>
            <div class="item">
                <img src="website/assets/img/image3.jpg" alt="">
            </div>
            <div class="item">
                <img src="website/assets/img/image4.jpg" alt="">
            </div>
        </div>

        <div class="nextPrevArrows">
            <button class="prev">
                < </button>
                    <button class="next">></button>
        </div>
    </div>

    <!-- end landing component -->

    <section class="container">
        <div class="flash-sales">
            <div class="title">
                <div class="today d-flex align-items-center" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                    data-aos-duration="1000">
                    <p class='ms-5 mt-3'>Today's</p>
                </div>
                <div class="flash d-flex mt-4 mb-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                    data-aos-duration="1000">
                    <h2>Flash Sales</h2>
                    <div class="date">

                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($product4 as $product)
                <div class="col-md-3 col-sm-6 col-12" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                    data-aos-duration="1000">
                    <div class="sale card" id='1000' rate='5'>
                        <div class="product">
                            <div class="image">
                                <img src="/storage/{{$product->img}}" alt="" />
                            </div>
                            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="add-cart">Add To Cart</button>
                            </form>
                            <p class='d-none'>
                                Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Voluptas nisi non magni libero itaque odit,
                                debitis inventore necessitatibus eligendi, suscipit
                                soluta. Consectetur rem consequuntur saepe quisquam
                                ullam dolorum, error reprehenderit natus mollitia modi
                                necessitatibus culpa aliquid quidem magnam quas voluptatum!
                            </p>
                        </div>
                        <div class="details ps-3">
                            <h6 class='pt-3'>{{$product['name']}}</h6>
                            <p>
                                <span>${{$product['price']}}</span>
                            </p>
                            <div class="evaluation d-flex pb-3">
                                <div class="numberOfPeople ms-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        </div>

        <div class="category pt-3">
            <div class="title mt-5 mb-5">
                <div class="categories d-flex align-items-center" data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                    <p class='mt-3'>Categories</p>
                </div>
                <div class="category d-flex mt-2 mb-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                    data-aos-duration="1000">
                    <h2>Browse By Category</h2>
                </div>
            </div>
            <div class="swiper row gap-3 justify-content-center" data-aos="fade-up"
                data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                <div class="swiper-slide ">
                    <div class=" card d-flex align-items-center justify-content-center pt-3">
                        <img src="website/assets/img/phone.png" class='mb-3' alt="" />
                        <p>Phones</p>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="card d-flex align-items-center justify-content-center pt-3">
                        <img src="website/assets/img/computer.png" class='mb-3' alt="" />
                        <p>Computers</p>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="card d-flex align-items-center justify-content-center pt-3">
                        <img src="website/assets/img/smartWatch.png" class='mb-3' alt="" />
                        <p>SmartWatch</p>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="card d-flex active align-items-center justify-content-center pt-3">
                        <img src="website/assets/img/camera.png" class='mb-3' alt="" />
                        <p>Camera</p>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="card d-flex align-items-center justify-content-center pt-3">
                        <img src="website/assets/img/headPhone.png" class='mb-3' alt="" />
                        <p>HeadPhones</p>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="card d-flex align-items-center justify-content-center pt-3">
                        <img src="website/assets/img/gaming.png" class='mb-3' alt="" />
                        <p>Gaming</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end category component -->
        <hr />
        <!-- start enhance component -->
        <div class="enhance mt-5 mb-5">
            <div class='container'>
                <div class="flash-sales mb-5">
                    <div class="title mb-5">
                        <div class="this-month mb-3 " data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="1000">
                            <p class='pt-2'>This Month</p>
                        </div>
                        <div class="best-sales d-flex justify-content-between" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                            <h2>Best Selling Products</h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($product_4 as $product)
                        <div class="col-md-3 col-sm-6 col-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-anchor-placement="top-bottom">
                            <div class="sale card" id='1000' rate='5'>
                                <div class="product">
                                    <div class="image">
                                        <img src="/storage/{{$product->img}}" alt="" />
                                    </div>
                                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="add-cart">Add To Cart</button>
                                    </form>
                                    <p class='d-none'>
                                        Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Voluptas nisi non magni libero itaque odit,
                                        debitis inventore necessitatibus eligendi, suscipit
                                        soluta. Consectetur rem consequuntur saepe quisquam
                                        ullam dolorum, error reprehenderit natus mollitia modi
                                        necessitatibus culpa aliquid quidem magnam quas voluptatum!
                                    </p>
                                </div>
                                <div class="details ps-3">
                                    <h6 class='pt-3'>{{$product['name']}}</h6>
                                    <p>
                                        <span>${{$product['price']}}</span>
                                    </p>
                                    <div class="evaluation d-flex pb-3">
                                        <div class="numberOfPeople ms-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="row parent py-5 m-0 px-4">
                    <div class="col-lg-6 left d-lg-block d-flex flex-column justify-content-center align-items-center text-lg-start text-center"
                        data-aos="fade-right" data-aos-duration="1000">
                        <p>Categories</p>
                        <h1 class='text-white mb-5'>
                            Enhance Your <br /> Music Experience
                        </h1>
                        <div class="times gap-2 d-flex mb-5">
                            <div class='bg-white d-flex justify-content-center align-items-center flex-column'>
                                <p>23</p>
                                <p>Hours</p>
                            </div>
                            <div class='bg-white d-flex justify-content-center align-items-center flex-column'>
                                <p>05</p>
                                <p>Days</p>
                            </div>
                            <div class='bg-white d-flex justify-content-center align-items-center flex-column'>
                                <p>59</p>
                                <p>Minutes</p>
                            </div>
                            <div class='bg-white d-flex justify-content-center align-items-center flex-column'>
                                <p>35</p>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <button class='px-4 py-2 border-0 rounded'>Buy Now!</button>
                    </div>

                    <div class="col-lg-6 right d-lg-block d-none" data-aos="fade-left" data-aos-duration="1000">
                        <!-- <img src="website/assets/img/ellipes-1.png" alt="" /> -->
                        <img src="website/assets/img/product-5.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- end enhance component -->

        <!-- start our product or explorer -->
        <div class='flash-sales pb-5'>
            <div class="container">
                <div class="title">
                    <div class="today d-flex align-items-center" data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                        <p class='ms-5 mt-3'>Our Products</p>
                    </div>
                    <div class="flash d-flex mt-4 mb-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="1000">
                        <h2>Explore Our Products</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($product8 as $product)
                    <div class="col-md-3 col-sm-6 col-12 mt-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="1000">
                        <div class="sale card" id='1000' rate='5'>
                            <div class="product">
                                <div class="image">
                                    <img src="/storage/{{$product->img}}" alt="" />
                                </div>
                                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="add-cart">Add To Cart</button>
                                </form>
                                <p class='d-none'>
                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Voluptas nisi non magni libero itaque odit,
                                    debitis inventore necessitatibus eligendi, suscipit
                                    soluta. Consectetur rem consequuntur saepe quisquam
                                    ullam dolorum, error reprehenderit natus mollitia modi
                                    necessitatibus culpa aliquid quidem magnam quas voluptatum!
                                </p>
                            </div>
                            <div class="details ps-3">
                                <h6 class='pt-3'>{{$product['name']}}</h6>
                                <p>
                                    <span>${{$product['price']}}</span>
                                </p>
                                <div class="evaluation d-flex pb-3">
                                    <div class="numberOfPeople ms-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="button mt-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                <a href="{{route('website.allProducts')}}">View All Products</a>
            </div>
        </div>
        <!-- end our product or explorer -->

        <!-- start feature component -->
        <div class='arrival px-3 mb-5'>
            <div class="title">
                <div class="today d-flex align-items-center" data-aos-duration="1000" data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom">
                    <p class='ms-5 mt-3'>Featured</p>
                </div>
                <div class="flash d-flex mt-4 mb-4" data-aos-duration="1000" data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom">
                    <h2>New Arrival</h2>
                </div>
            </div>
            <div class="row p-0 m-0">
                <div class="col-sm-6 product" data-aos="fade-right" data-aos-duration="1000">
                    <div class="card  border-0">
                        <img src="website/assets/img/playStation.png" alt="" />
                    </div>
                </div>
                <div class="col-sm-6 px-sm-2 p-0" data-aos="fade-left" data-aos-duration="1000">
                    <div class="col-12 h-50">
                        <div class="card">
                            <img src="website/assets/img/woman.png" width="100%" height='100%' alt="" />
                        </div>
                    </div>
                    <div class="col-12 h-50">
                        <div class="h-100">
                            <div class="row h-100 m-0">
                                <div class="col-6 p-0 pe-1">
                                    <div class="card">
                                        <img src="website/assets/img/speekers.png" class='' alt="" />
                                    </div>
                                </div>
                                <div class="col-6 p-0 ps-1">
                                    <div class="card">
                                        <img src="website/assets/img/perfum.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services mt-5 pt-5">
                <div class="row p-0 m-0 justify-content-evenly">
                    <div class='service text-center' data-aos-duration="1000" data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom">
                        <div class='p-1 m-auto mb-3'>
                            <img src="website/assets/img/icon-service-1.png" alt="" />
                        </div>
                        <p class=''>FREE AND FAST DELIVERY</p>
                        <p>Free delivery for all orders over $140</p>
                    </div>
                    <div class='service text-center' data-aos-delay="1000" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="1000" data-aos="fade-up">
                        <div class='p-1 m-auto mb-3'>
                            <img src="website/assets/img/icon-service-2.png" alt="" />
                        </div>
                        <p>24/7 CUSTOMER SERVICE</p>
                        <p>Friendly 24/7 customer support</p>
                    </div>
                    <div class='service text-center' data-aos-delay="1500" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="1000" data-aos="fade-up">
                        <div class='p-1 m-auto mb-3'>
                            <img src="website/assets/img/icon-service-3.png" alt="" />
                        </div>
                        <p>MONEY BACK GUARANTEE</p>
                        <p>We reurn money within 30 days</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end feature component -->
    </section>


    @include('shared.website.footer')
    <script src="/assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="/website/assets/js/landing.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>