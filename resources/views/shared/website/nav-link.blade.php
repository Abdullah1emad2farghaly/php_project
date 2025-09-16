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