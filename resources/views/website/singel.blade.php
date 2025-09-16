<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Details - Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    :root {
        --accent: #e74c3c;
        --muted: #6c6f73
    }

    body {
        background: #fff;
        font-family: system-ui, Arial, Helvetica, 'Segoe UI', sans-serif;
        color: #222
    }

    .main-img {
        width: 100%;
        height: 420px;
        object-fit: contain;
        border-radius: .5rem;
        background: #f6f6f6;
        padding: 1rem;
        transition: .3s ease
    }

    .main-img:hover {
        transform: scale(1.03);
        box-shadow: 0 6px 18px rgba(0, 0, 0, .15)
    }

    .sticky-card {
        position: sticky;
        top: 20px
    }

    .size-btn {
        border: 1px solid #e6e6e6;
        padding: .35rem .6rem;
        border-radius: .35rem
    }

    .size-btn.active {
        background: var(--accent);
        color: #fff;
        border-color: var(--accent)
    }

    .colour-swatch {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        display: inline-block;
        border: 2px solid #fff;
        box-shadow: 0 0 0 1px rgba(0, 0, 0, .06)
    }

    .option-row {
        display: flex;
        gap: .6rem;
        align-items: center
    }

    .specs {
        font-size: .95rem;
        color: var(--muted)
    }

    .delivery-card {
        border: 1px solid #e9e9e9;
        border-radius: .5rem;
        padding: 1rem
    }

    .related .card {
        border: 0;
        transition: .3s ease
    }

    .related .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, .1)
    }

    .related .card img {
        height: 150px;
        object-fit: contain;
        transition: .3s ease
    }

    .related .card img:hover {
        transform: scale(1.05)
    }

    @media (max-width:767px) {
        .sticky-card {
            position: static;
            margin-top: 1rem
        }

        .main-img {
            height: 320px
        }
    }
    </style>
</head>

<body>
    @include('shared.header')

    <main class="container my-4">
        <div class="row g-4">
            <div class="col-lg-7">
                <div class="zoom-wrap">
                    <img id="mainImage"
                        src="https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/13-laptop-platinum-right-render-fy25:VP4-1260x795?fmt=png-alpha"
                        alt="product" class="main-img img-fluid shadow-sm">
                </div>

                <hr class="my-4">

                <section>
                    <h5>Product Description</h5>
                    <p class="specs">PlayStation 5 Controller skin, high quality vinyl with air channel adhesive for
                        easy bubble free install & mess free removal. Pressure sensitive.</p>
                    <ul class="specs">

                        <li>Manufacturer Warranty: 1 Year</li>
                    </ul>
                </section>
            </div>

            <div class="col-lg-5">
                <div class="card p-3 sticky-card shadow-sm">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h4 class="mb-1">Havic HV G-92 Gamepad</h4>
                            <div class="d-flex gap-2 align-items-center mt-1">
                                <div class="stars" aria-hidden></div>
                                <small class="text-success">In Stock</small>
                            </div>
                        </div>
                        <div class="text-end">
                            <div class="h4 text-danger mb-1">$192.00</div>
                            <div class="specs">(150 Reviews)</div>
                        </div>
                    </div>

                    <hr>

                    <div class="mb-3 d-flex align-items-center gap-2">
                        <div class="input-group" style="width:140px">
                            <button class="btn btn-outline-secondary" id="dec">-</button>
                            <input id="qty" type="number" class="form-control text-center" value="2" min="1">
                            <button class="btn btn-outline-secondary" id="inc">+</button>
                        </div>
                        <button class="btn btn-danger flex-fill" id="buyNow">Buy Now</button>
                        <button class="btn btn-outline-secondary" title="Add to Wishlist">♡</button>
                    </div>

                    <div class="mb-3 delivery-card">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path d="M3 3h13v13H3z" stroke="#333" stroke-width="1.2" />
                            </svg>
                            <div>
                                <div class="fw-semibold">Free Delivery</div>
                                <div class="specs">Enter zip code for availability</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="10" stroke="#333" stroke-width="1.2" />
                            </svg>
                            <div>
                                <div class="fw-semibold">Free Return</div>
                                <div class="specs">30 Days Return</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 specs small">
                        SKU: HV-G92 • Weight: 220g • Made in Egypt
                    </div>
                </div>
            </div>
        </div>

        <section class="related mt-5">
            <h6 class="mb-3">Related Products</h6>
            <div class="row gx-3">
                <div class="col-6 col-md-3">
                    <div class="card text-center p-2">
                        <img src="https://m.media-amazon.com/images/I/513N9dw5IZL.jpg" class="card-img-top" alt="">
                        <div class="card-body p-2">
                            <div class="fw-bold">HAVIT HV-G92</div>
                            <div class="text-danger fw-semibold">$120 <del class="text-muted small">$160</del></div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card text-center p-2">
                        <img src="https://cdn-eshop.jo.zain.com/images/thumbs/0044185_iphone-15-pro_600.webp"
                            class="card-img-top" alt="">
                        <div class="card-body p-2">
                            <div class="fw-bold">AK-900 Wired</div>
                            <div class="text-danger fw-semibold">$90 <del class="text-muted small">$120</del></div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card text-center p-2">
                        <img src="https://www.3rafoty.com/images/product/product-featured-1378-1646172000.jpg"
                            class="card-img-top" alt="">
                        <div class="card-body p-2">
                            <div class="fw-bold">IPS LCD Monitor</div>
                            <div class="text-danger fw-semibold">$370 <del class="text-muted small">$400</del></div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card text-center p-2">
                        <img src="https://cdn.salla.sa/dzdxr/UF2acf1WTNw18d31sGRXRlgowln9Iv5duJeZhaFi.jpg"
                            class="card-img-top" alt="">
                        <div class="card-body p-2">
                            <div class="fw-bold">RGB CPU Cooler</div>
                            <div class="text-danger fw-semibold">$160 <del class="text-muted small">$190</del></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // size buttons
    document.querySelectorAll('.size-btn').forEach(b => {
        b.addEventListener('click', e => {
            document.querySelectorAll('.size-btn').forEach(x => x.classList.remove('active'));
            e.currentTarget.classList.add('active');
        });
    });

    // quantity
    const qty = document.getElementById('qty');
    document.getElementById('inc').addEventListener('click', () => {
        qty.value = parseInt(qty.value || 1) + 1
    });
    document.getElementById('dec').addEventListener('click', () => {
        qty.value = Math.max(1, parseInt(qty.value || 1) - 1)
    });

    // colour buttons (visual only)
    document.querySelectorAll('[data-col]').forEach(b => {
        b.addEventListener('click', e => {
            document.querySelectorAll('[data-col]').forEach(x => x.classList.remove('border',
                'border-2'));
            e.currentTarget.classList.add('border', 'border-2');
        });
    });

    // Buy now action (demo)
    document.getElementById('buyNow').addEventListener('click', () => {
        const size = document.querySelector('.size-btn.active')?.dataset.size || 'M';
        const count = qty.value;
        alert('Added to cart: ' + count + ' pcs - Size: ' + size);
    });

    // keyboard +/- for quantity
    qty.addEventListener('keydown', e => {
        if (e.key === 'ArrowUp') {
            qty.value = parseInt(qty.value || 1) + 1
        }
        if (e.key === 'ArrowDown') {
            qty.value = Math.max(1, parseInt(qty.value || 1) - 1)
        }
    });
    </script>
    @include('shared.website.footer')
</body>

</html>
