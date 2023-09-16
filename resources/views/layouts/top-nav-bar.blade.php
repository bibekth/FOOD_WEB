<aside>
    <div class="layout-top-nav-bar">
        <div class="top-nav-bar-section">
            <div class="top-nav-bar-wrapper">
                <div class="logo col-lg-3 col-md-3 col-sm-3 col-3 d-flex" style="justify-content: center">
                    <a href="">
                        <div class="logo-food">
                            FOOD
                        </div>
                        <div class="logo-web">
                            WEB
                        </div>
                    </a>
                </div>
                <div class="search-bar col-lg-6 col-md-6 col-sm-6">
                    <form action="">
                        <input type="text" name="search-bar-input" id="search-bar-input"
                            placeholder="Looking for something?"><a href=""><i class="bi bi-search text-dark"></i></a>
                    </form>
                </div>
                <div class="login-section col-lg-3 col-md-3 col-sm-3 col-3 d-flex" style="justify-content: center">
                    <a href="login-form"><button class="login">Login</button></a>
                </div>
            </div>
        </div>
        <div class="bottom-nav-bar-section">
            <div class="bottom-nav-bar-wrapper">
                <div class="bottom-nav-class col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2">
                    <a href="/home">Home</a>
                </div>
                <div class="bottom-nav-class col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2">
                    <a href="">Menu</a>
                </div>
                <div class="bottom-nav-class col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2">
                    <a href="">Restaurant</a>
                </div>
                <div class="bottom-nav-class col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2">
                    <a href="">Cart</a>
                </div>
                <div class="bottom-nav-class col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2">
                    <a href="">About</a>
                </div>
                <div class="bottom-nav-class col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2" style="border:none">
                    <a href="/contact">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .top-nav-bar-section {
            background-color: #20190d;
        }

        .top-nav-bar-wrapper {
            display: flex;
            justify-content: space-between;
            padding: 0.5rem;
            background-color: #20190d;
        }

        .logo a{
            display: flex;
            align-items: center;
        }

        .logo-food {
            color: #fff;
            background-color: #292929;
            padding: 0 0.1rem;
        }

        .logo-web {
            color: #000;
            background-color: #ffa31a;
            padding: 0 0.1rem;

        }

        .login-section {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .login {
            background-color: transparent;
            padding: 0.1rem 1rem;
            font-weight: 900;
            border-radius: 8px;
            border: 2px solid #ffa31a;
            color: #ccc;
        }

        .login:hover {
            background-color: #ffa31a;
            color: #000;
        }

        .search-bar {}

        .search-bar form input {
            border: none;
            border-radius: 15px;
            width: 90%;
            padding: 0.2rem 1rem;
            background-color: #ccc;
        }

        .search-bar form i {
            position: relative;
            left: -1.8rem;
        }

        .bottom-nav-bar-section{
            width: 100%;
            background-color: #000;
        }

        .bottom-nav-bar-wrapper{
            display: flex;
            /* justify-content: center; */
            padding: 0.2rem 0;
        }

        .bottom-nav-class{
            display: flex;
            justify-content: center;
            color: #ccc;
            border-right: 2px solid rgb(255, 255, 255, 0.4);
            margin: auto;
        }

        .bottom-nav-class a:hover{
            color:#fff;
        }


    </style>
    {{-- <style>
        .top-nav-bar-section {
            display: flex;
            background-color: #20190d;
            justify-content: space-around;
        }

        .top-nav-bar-wrapper {
            background-color: #20190d;
            margin: 1rem;
            padding: 0 1rem 0 1rem;
            display: flex;
            width: 100vw;
            justify-content: space-around;
        }

        .bottom-nav-bar-section {
            display: flex;
            background-color: #000;
            /* justify-content: space-around; */
        }

        .bottom-nav-bar-wrapper {
            width: 100%;
            font-size: 1rem;
            /* margin:0.5rem; */
            padding: 0 1rem 0 1rem;
            display: flex;
            justify-content: space-evenly;
        }

        .bottom-nav-class{
            color: #fff;
            padding: 0.5rem 6rem 0.5rem 6rem;
            border-right: 2px solid rgb(255, 255, 255, 0.4);
        }

        .bottom-nav-class a{
            text-decoration: none;
            color: #fff;
        }

        .logo {
            display: flex;
            font-weight: 900;
            height: 2.5rem;
        }

        .logo-food {
            background-color: #292929;
            color: #fff;
            padding: 0.5rem;
        }

        .logo-web {
            background-color: #ffa31a;
            color: #000;
            padding: 0.5rem;
        }

        .search-bar form input {
            height: 2.5rem;
            width: 35vw;
            padding: 1rem;
            border-radius: 15px;
            border: none;
        }

        .search-bar form i {
            margin-left: -1.5rem;
            cursor: text;
        }

        .login {
            background-color: #ffa31a;
            font-weight: 900;
            width: 6rem;
            font-size: 1rem;
            padding: 0.5rem 1.5rem 0.5rem 1.5rem;
            border-radius: 15px;
            color: #292929;
        }

        /* .signup{
            background-color: #292929;
            font-weight: 900;
            width: 5vw;
            padding:0.5rem 1.5rem 0.5rem 1.5rem;
            color: #fff;
            border-radius: 15px;
        } */
        /* .registration{
            width: 15vw;
            display: flex;
            justify-content: space-between;
        } */
    </style> --}}
</aside>
