<header>

    <div class="container">

        <div class="container-left">
            <a href="{{url('/home')}}" style="width: fit-content; text-decoration: none;" >
                <p>Budi Jaya Motor Serpong</p>
            </a>
        </div>

        <div class="container-mid">
            <div id="home">
                <a href="{{url('/home')}}">
                    <p>Home</p>
                </a>
            </div>
            {{-- <div id="about">
                <a href="{{url('/about')}}">
                    <p>About</p>
                </a>
            </div> --}}
            <div id="brand">
                <p>Brand</p>

                <div id="brand-hidden">
                    <ul>
                        <a href="{{url('type/Sedan')}}">
                            <li>Sedan</li>
                        </a>
                        <a href="{{url('type/Minivan MPV')}}">
                            <li>Minivan MPV</li>
                        </a>
                        <a href="{{url('type/SUV')}}">
                            <li>SUV</li>
                        </a>
                        <a href="{{url('type/Avanza')}}">
                            <li>Avanza</li>
                        </a>

                    </ul>
                </div>
            </div>
            <div id="contact">
                <a href="{{url('/contact')}}">
                    <p>Contact Us</p>
                </a>
            </div>

            <div id="account">
                <a>
                    <p>Account</p>
                </a>

                <div id="account-hidden">
                    <ul>
                        @if(!auth()->check())
                        <a id="login-button">
                            <li>Login</li>
                        </a>
                        @endif

                        @if(auth()->check())
                        <a href="{{url('/form')}}">
                            <li>Insert Car</li>
                        </a>
                        @endif

                        @if(auth()->check() && \Illuminate\Support\Facades\Auth::user()->role == 'master')
                        <a href="{{url('/viewUser')}}">
                            <li>View All User</li>
                        </a>
                        <a href="{{url('/formUser')}}">
                            <li>Insert User</li>
                        </a>
                        @endif

                        @if(auth()->check())
                        <a href="{{url('/logout')}}">
                            <li>Log Out</li>
                        </a>
                        @endif

                    </ul>
                </div>

            </div>

        </div>

        <div class="container-right">

            <input id="inputSearch" type="text" name="keyword" placeholder="Search your Car">

            <div id="searchResult" style="display: none;">
            </div>

        </div>

    </div>


</header>

<div class="login" id="login-popup">

    <div class="login-form">

        <div class="login-form-header">
            <img id="logo" src="{{url('assets/Logo.png')}}" alt="">
            <p class="title">Login Your Account</p>

            <div class="exit">
                <img id="exit-button" src="{{url('assets/cross.png')}}">
            </div>
        </div>

        <form action="{{url('/loginAuth')}}" method="POST">
            @csrf
            <div>
                <input id="username" type="text" name="username" placeholder="username">
            </div>

            <div>
                <input type="password" name="password" placeholder="password">
            </div>


            <input id="submit" type="submit" name="submit" value="Login">
        </form>

    </div>

</div>


