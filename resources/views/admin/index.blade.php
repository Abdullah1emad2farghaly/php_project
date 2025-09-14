@extends('shared.admin.app');
@section('sales')
<!-- ============ -->
<main>
    <h1>Dashboard</h1>

    <div class="insights">
        <div class="sales">
            <span>
                <i class="fa-solid fa-chart-simple"></i>
            </span>
            <div class="middle">
                <div class="lef">
                    <h3>Total Sales</h3>
                    <h1>{{ $totalSales }}</h1>
                    <!-- <h1>$25.024</h1> -->
                </div>
                <div class="progress">
                    <svg>
                        <circle cx="38" cy="36" r="30"></circle>
                    </svg>
                    <div class="number">
                        <p>81%</p>
                    </div>
                </div>
            </div>
            <small class="text-muted">Last Year</small>
        </div>
        <!-- end of sales -->
        <div class="expenses">
            <span>
                <i class="fa-solid fa-chart-simple"></i>
            </span>
            <div class="middle">
                <div class="lef">
                    <h3>Total Expenses</h3>
                    <h1>$14.16</h1>
                </div>
                <div class="progress">
                    <svg>
                        <circle cx="38" cy="36" r="30"></circle>
                    </svg>
                    <div class="number">
                        <p>62%</p>
                    </div>
                </div>
            </div>
            <small class="text-muted">Last Year</small>
        </div>
        <!-- end of Expenses -->
        <div class="income">
            <span>
                <i class="fa-solid fa-chart-simple"></i>
            </span>
            <div class="middle">
                <div class="lef">
                    <h3>Total Income</h3>
                    <h1>$10.864</h1>
                </div>
                <div class="progress">
                    <svg>
                        <circle cx="38" cy="36" r="30"></circle>
                    </svg>
                    <div class="number">
                        <p>44%</p>
                    </div>
                </div>
            </div>
            <small class="text-muted">Last Year</small>
        </div>
        <!-- end of sales -->
    </div>
    @endsection
    @section('content')

    <div class="recent-orders">
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
    </div>
    @endsection