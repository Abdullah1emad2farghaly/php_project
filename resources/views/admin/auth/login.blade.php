<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="public/website/assets/css/sign_in.css">
</head>

<body>
    <div class='sign-in mb-5 pb-5 mt-5'>
        <div class="container-lg-fluid container">
            <div id='signin-error'
                class="signin-error rounded d-flex justify-content-center align-items-center text-center flex-column">
                <div class='fs-5'>
                    Your Email Or Password <br /> Is Not Valid
                </div>
                <button class='mt-4 px-4 py-1 border-0 rounded fw-bold'>OK</button>
            </div>
            <div class="row m-0">
                <div class="col-lg-6 left h-100">
                    <img src="website/assets/img/sign.png" class='w-100' alt="" />
                </div>
                <div class="col-lg-6 right px-lg-5 pt-lg-4">
                    <form class="container px-lg-4" action="{{ route('login.form') }}">
                        <h1 class='pt-4 mb-3'>Log in to Exclusive</h1>
                        <p class='mb-5'>Enter your details below</p>
                        <input type="email" class='pt-3 pb-1 ps-1 mb-4' placeholder='Email or Phone Number' />
                        <input type="password" class='pt-3 ps-1 pb-1 mb-4' placeholder='Password' />
                        <div class='mt-5 d-flex justify-content-between'>
                            <button type='submit' class='px-4 rounded py-2 border-0'>Log in</button>
                            <a href="#" class='ms-3 mt-1'>Forget Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
