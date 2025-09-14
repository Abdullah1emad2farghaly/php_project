    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard</title>
        <!-- style file -->
        <link rel="stylesheet" href="/assets/css/dashboard.css" />
        <!-- material icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

        <link rel="stylesheet" href="/assets/fontawesome/css/all.css" />
        <link rel="stylesheet" href="/assets/bootstrap-5.3.3-dist/css/bootstrap.css.map" />

        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Lobster&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet" />

    </head>

    <body>
        <div class="container">
            <!-- start aside -->
            <aside>
                <div class="top">
                    <div class="logo">
                        <img src="/assets/images/logo.png" alt="" />
                        <h2>EGAR<span class="danger">TOR</span></h2>
                    </div>
                    <div class="close" id="close-btn">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>
                <div class="sidebar">
                    <!-- عملت component عشان اعرف اعمل active لما يدوس علي زرار لينك  -->
                    <!-- <a href="{{ route('admin.index') }}">
                        <span><i class="fa-solid fa-table-columns"></i></span>
                        <h3>Dashboard</h3>
                    </a> -->
                    <x-actived route="admin.index" icon="fa-solid fa-table-columns" label="Dashboard" />
                    <!-- <a href="{{ route('admin.customers') }}" >
                        <span><i class="fa-solid fa-person-military-pointing"></i></span>
                        <h3>Customers</h3>
                    </a> -->
                    <x-actived route="admin.customers" icon="fa-solid fa-person-military-pointing" label="Customers" />

                    <!-- <a href="{{ route('admin.orders') }} }}">
                        <span><i class="fa-brands fa-first-order"></i></span>
                        <h3>Orders</h3>
                    </a> -->
                    <x-actived route="admin.orders" icon="fa-brands fa-first-order" label="Orders" />

                    <!-- <a href="route('admin') }}">
                        <span><i class="fa-solid fa-chart-simple"></i></span>
                        <h3>Analytics</h3>
                    </a> -->

                    <!-- <a href="{{ route('admin.products.index') }}">
                        <span><i class="fa-brands fa-product-hunt"></i></span>
                        <h3>Products</h3>
                    </a> -->
                    <x-actived route="admin.products.index" icon="fa-brands fa-product-hunt" label="Products" />

                    <!-- <a href="{{route('admin.products.create') }}">
                        <span> <i class="fa-solid fa-address-card"></i></span>
                        <h3>Add Product</h3>
                    </a> -->
                    <x-actived route="admin.products.create" icon="fa-solid fa-address-card" label="Add Product" />


                    <!-- <a href="{{ route('logout') }}">
                        <span><i class="fa-solid fa-arrow-right-from-bracket"></i> </span>
                        <h3>Log out</h3>
                    </a> -->
                    <x-actived route="logout" icon="fa-solid fa-arrow-right-from-bracket" label="Log out" />


                </div>
            </aside>
            <!-- end aside -->

            @yield('sales')
            <!-- ENT INSIGHTS -->
            <!--====================================================================================================  -->
            <!-- <div class="recent-orders">
                    <h2>Recent Orders</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Number</th>
                                <th>Payment</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>foldable Mini Drone</td>
                                <td>85631</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>
                            <tr>
                                <td>foldable Mini Drone</td>
                                <td>85631</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>
                            <tr>
                                <td>foldable Mini Drone</td>
                                <td>85631</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>
                            <tr>
                                <td>foldable Mini Drone</td>
                                <td>85631</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>
                            <tr>
                                <td>foldable Mini Drone</td>
                                <td>85631</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="">Show All</a>
                </div> -->
            @yield('content')
            <!-- ==================================================================================================== -->
            </main>
            <!-- ========    END OF MAIN ================ -->
            <div class="right">
                <div class="top">
                    <button id="menu-btn">
                        <span><i class="fa-solid fa-bars"></i></span>
                    </button>
                    <div class="theme-toggler">
                        <span class="active"><i class="fa-solid fa-sun"></i></span>
                        <span><i class="fa-regular fa-moon"></i></span>
                    </div>
                    <div class="profile">
                        <div class="info">
                            <p>Hey, <b>Daniel</b></p>
                            <small class="text-muted">Admin</small>
                        </div>
                        <div class="profile-photo">
                            <img src="/assets/images/profile-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!-- end top -->

                <div class="recent-updates">
                    <h2>Recent Updates</h2>
                    <div class="updates">
                        <div class="update">
                            <div class="profile-photo">
                                <img src="/assets/images/profile-2.jpg" alt="">
                            </div>
                            <div class="message">
                                <p>
                                    <b>Mike Tyson</b>
                                    received his order of Night lion tech GPS drone.
                                </p>
                                <small class="text-muted">2 Minuts ago</small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="/assets/images/profile-4.jpg" alt="">
                            </div>
                            <div class="message">
                                <p>
                                    <b>Mike Tyson</b>
                                    received his order of Night lion tech GPS drone.
                                </p>
                                <small class="text-muted">2 Minuts ago</small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="/assets/images/profile-3.jpg" alt="">
                            </div>
                            <div class="message">
                                <p>
                                    <b>Mike Tyson</b>
                                    received his order of Night lion tech GPS drone.
                                </p>
                                <small class="text-muted">2 Minuts ago</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="sales-analytics">
                    <h2>Sales Analytics</h2>
                    <div class="item online">
                        <div class="icon">
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>ONLINE ORDERS</h3>
                                <small class="text-muted">Last 24 Hours</small>
                            </div>
                            <h5 class="success">+17%</h5>
                            <h3>1100</h3>
                        </div>
                    </div>
                    <div class="item ofline">
                        <div class="icon">
                            <span><i class="fa-solid fa-bag-shopping"></i></span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>OFLINE ORDERS</h3>
                                <small class="text-muted">Last 24 Hours</small>
                            </div>
                            <h5 class="danger">-39%</h5>
                            <h3>3894</h3>
                        </div>
                    </div>
                    <div class="item customer">
                        <div class="icon">
                            <span><i class="fa-solid fa-person-military-to-person"></i></span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>NEW CUSTOMER</h3>
                                <small class="text-muted">Last 24 Hours</small>
                            </div>
                            <h5 class="success">+39%</h5>
                            <h3>3894</h3>
                        </div>
                    </div>
                    <div class="item add-product">
                        <div>
                            <span><i class="fa-solid fa-plus"></i></span>
                            <h3>Add Product</h3>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <script src="/assets/fontawesome/js/all.min.js"></script>
        <script src="/assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
    </body>

    </html>