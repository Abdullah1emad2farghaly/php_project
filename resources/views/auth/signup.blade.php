<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="website/assets/css/sign_up.css">
    <link rel="stylesheet" href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>

<body>
    <div class='sign-up mb-5 pb-5 mt-5'>
        <div class="container-lg-fluid container p-sm-1 p-0">
                    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif   
        <div class="row m-0">
                <div class="col-lg-6 left h-100">
                    <img src="website/assets/img/sign.png" class='w-100' alt="" />
                </div>
                <div class="col-lg-6 right px-lg-5">
                    <form class="container m-0 px-lg-4 p-0" method="post" action="{{ route('signup') }}">
                    @csrf   
                    <h1 class='pt-4 mb-3'>Create an account</h1>
                        <p class='mb-4'>Enter your details below</p>
                        <div class='mb-4'>
                            <input placeholder='Full Name' id='name' name="name" class='pt-3 pb-1 ps-1' />
                            <p class='ps-2 text-danger fs-6 m-0' id='testName'>The full name is not valid</p>
                        </div>
                        <div class='mb-4'>
                            <input type="email" id='email' name="email" class='pt-3 pb-1 ps-1'
                                placeholder='Email or Phone Number' />
                            <p class='text-danger ps-2' id='testEmail'>please enter your email valid</p>
                        </div>
                        <div class='mb-4'>
                            <input type="password" id='password' name="password" class='pt-3 ps-1 pb-1'
                                placeholder='Password' />
                            <p class='text-danger ps-2 fs-6' id='testPassword'>should be 8 characters and contains
                                digits</p>
                        </div>
                        <button herf="" class='mt-4' type='submit'>Create Account</button>
                        <div class='mt-4 d-flex'>
                            <p class='mt-1 m-0'>Already have account?</p>
                            <a href="{{ route('login')  }}"class='ms-3'>Log in</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>

</html>
