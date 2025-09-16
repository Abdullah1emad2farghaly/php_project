<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="website/assets/css/style.css">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>

<body>
    <div class='flash-sales pb-5 mt-5'>
        <div class="container">
            <div class="title">
                <div class="today d-flex align-items-center">
                    <p class='ms-5 mt-3'>Our Products</p>
                </div>
                <div class="flash d-flex mt-4 mb-4">
                    <h2>All Our Products</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($allProducts as $product)
                <div class="col-md-3 col-sm-6 col-12 mt-3">
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

    <script src="/assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>

</html>
