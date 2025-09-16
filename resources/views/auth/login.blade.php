<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="website/assets/css/sign_in.css">
    <link rel="stylesheet" href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div class='sign-in mb-5 pb-5 mt-5'>
        <div class="container-lg-fluid container">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div id='signin-error'
                class="signin-error rounded d-flex justify-content-center align-items-center text-center flex-column">
                <div class='fs-5'>
                    Your Email Or Password <br /> Is Not Valid
                </div>
                <button class='mt-4 px-4 py-1 border-0 rounded fw-bold'>OK</button>
            </div>
            <div class="row m-0">
                <div class="col-lg-6 left h-100" data-aos="fade-right" data-aos-duration="1000">
                    <img src="website/assets/img/sign.png" class='w-100' alt="" />
                </div>
                <div class="col-lg-6 right px-lg-5 pt-lg-4">
                    <form class="container px-lg-4" action="{{ route('login') }}" method="post">
                        @csrf
                        <h1 class='pt-4 mb-3' data-aos="fade-left" data-aos-duration="300">Log in to Exclusive</h1>
                        <p class='mb-5' data-aos="fade-left" data-aos-duration="300">Enter your details below</p>
                        <input type="email" name="email" class='pt-3 pb-1 ps-1 mb-4' placeholder='Email or Phone Number'
                            data-aos="fade-left" data-aos-duration="300" data-aos-delay="200" />
                        <input type="password" name="password" class='pt-3 ps-1 pb-1 mb-4' placeholder='Password'
                            data-aos="fade-left" data-aos-duration="300" data-aos-delay="400" />
                        <div class='mt-5 d-flex justify-content-between' data-aos="fade-left" data-aos-duration="300"
                            data-aos-delay="600">
                            <button type='submit' class='px-4 rounded py-2 border-0'>Log in</button>
                            <a href="{{ route('signup') }}" class='ms-3 mt-1'>Sing Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>
