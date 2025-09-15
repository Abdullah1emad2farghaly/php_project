<header>
    <style>
        :root {
            --top-bar-bg: #000;
            --top-bar-text: #fff;
            --header-bg: #fff;
            --header-border: #e0e0e0;
            --primary-color: #db4444;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .top-bar {
            background-color: var(--top-bar-bg);
            color: var(--top-bar-text);
            text-align: center;
            padding: 10px 20px;
            font-size: 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .top-bar p {
            margin: 0;
        }

        .top-bar span {
            font-weight: bold;
            text-decoration: underline;
        }

        .language-dropdown {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .header {
            background-color: var(--header-bg);
            border-bottom: 1px solid var(--header-border);
            padding: 20px 0;
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .header-logo h1 {
            margin: 0;
            font-size: 28px;
            font-weight: bold;
            color: #000;
        }

        .header-nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 30px;
        }

        .header-nav a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .header-nav a:hover {
            color: var(--primary-color);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .search-box {
            position: relative;
        }

        .search-input {
            padding: 8px 35px 8px 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            width: 220px;
        }

        .search-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            background: none;
            border: none;
            padding: 0;
        }

        .icon-btn {
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
            font-size: 22px;
            color: #000;
            transition: color 0.3s ease;
        }

        .icon-btn:hover {
            color: var(--primary-color);
        }

        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 15px;
            }

            .header-nav ul {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }

            .header-actions {
                justify-content: center;
            }
        }
    </style>

    <!-- Top bar -->
    <div class="top-bar">
        <p>Summer Sale: All Swimwear & Free Express Delivery - <span>50% OFF!</span></p>
        <div class="language-dropdown">
            <span>English</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 9l6 6 6-6"/>
            </svg>
        </div>
    </div>

    <!-- Main header -->
    <div class="header">
        <div class="header-container">
            <div class="header-logo">
                <h1>Exclusive</h1>
            </div>

            <nav class="header-nav">
                <ul>
                    <li><a href="{{ route ('website.index')}}">Home</a></li>
                    <li><a href="{{ route ('website.contact')}}">Contact</a></li>
                    <li><a href="{{ route ('website.about')}}">About</a></li>
                    <li><a href="{{ route ('website.single')}}">Single</a></li>
                    
                </ul>
            </nav>

            <div class="header-actions">
                <div class="search-box">
                    <input type="text" placeholder="What are you looking for?" class="search-input">
                    <button class="search-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"/>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                        </svg>
                    </button>
                </div>

                <button class="icon-btn" title="Wishlist">
                    
                    <a href="{{ route ('wishlist')}}"><img src='https://icons.iconarchive.com/icons/paomedia/small-n-flat/16/heart-icon.png' alt='cart' style='width:20px; height:20px' ></a>
                </button>

                <button class="icon-btn" title="Cart">
                  <a href="{{ route ('cart')}}"><img src='https://cdn-icons-png.flaticon.com/128/4903/4903482.png' alt='cart' style='width:20px; height:20px' ></a>
                </button>
                <button class="icon-btn" title="Create Account">
                  <a href="{{ route ('account')}}"><img src='https://icons.iconarchive.com/icons/iconsmind/outline/16/Add-User-icon.png' alt='cart' style='width:20px; height:20px' ></a>
                </button>
            </div>
        </div>
    </div>
</header>