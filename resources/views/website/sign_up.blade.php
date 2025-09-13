<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="website/assets/css/sign_up.css">
</head>

<body>
    <div className='sign-up mb-5 pb-5 mt-5'>
        <div className="container-lg-fluid container p-sm-1 p-0">
            <div className="row m-0">
                <div className="col-lg-6 left h-100">
                    <img src="website/assets/img/sign.png" className='w-100' alt="" />
                </div>
                <div className="col-lg-6 right px-lg-5">
                    <form onSubmit={handleSignUp} className="container m-0 px-lg-4 p-0">
                        <h1 className='pt-4 mb-3'>Create an account</h1>
                        <p className='mb-4'>Enter your details below</p>
                        <div className='mb-4'>
                            <input placeholder='Full Name' id='name' className='pt-3 pb-1 ps-1' />
                            <p className='ps-2 text-danger fs-6 m-0' id='testName'>The full name is not valid</p>
                        </div>
                        <div className='mb-4'>
                            <input type="email" id='email' className='pt-3 pb-1 ps-1'
                                placeholder='Email or Phone Number' />
                            <p className='text-danger ps-2' id='testEmail'>please enter your email valid</p>
                        </div>
                        <div className='mb-4'>
                            <input type="password" id='password' className='pt-3 ps-1 pb-1' placeholder='Password' />
                            <p className='text-danger ps-2 fs-6' id='testPassword'>should be 8 characters and contains
                                digits</p>
                        </div>
                        <button className='mt-4' type='submit'>Create Account</button>
                        <div className='mt-4 d-flex'>
                            <p className='mt-1 m-0'>Already have account?</p>
                            <NavLink to='/signin' className='ms-3'>Log in</NavLink>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>