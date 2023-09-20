    <aside>
        <div class="layout-top-nav-bar">
            <div class="top-nav-bar-section">
                <div class="top-nav-bar-wrapper">
                    <div class="logo col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 d-flex justify-content-center">
                        <a href="">
                            <div class="logo-food">
                                FOOD
                            </div>
                            <div class="logo-web">
                                WEB
                            </div>
                        </a>
                    </div>
                    <div class="search-bar col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 ">
                        <form action="" class="d-flex justify-content-center">
                            <input type="text" name="search-bar-input" id="search-bar-input"
                                placeholder="Looking for something?"><a href=""><i
                                    class="bi bi-search text-dark"></i></a>
                        </form>
                    </div>
                    <div class="login-section col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 d-flex"
                        style="justify-content: center">
                        <a href="login-form"><button class="login">Login</button></a>
                    </div>
                </div>
            </div>
            {{-- <div class="commented">
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
            </div> --}}
            <div class="bottom-nav-bar-section">
                <div class="bottom-nav-bar-wrapper">

                    <ul class="bottom-nav-class" style="list-style: none;" id="bottomNav">
                        <li><a href="">Home</a></li>
                        <li><a href="">Menu</a></li>
                        <li><a href="">Restaurant</a></li>
                        <li><a href="">Cart</a></li>
                        <li><a href="">About</a></li>
                        <li style="border:none;"><a href="/contact">Contact</a></li>
                        <li class="icon-li"><a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                {{-- <i class="bi bi-list"></i> --}}
                                <span>&#9776;</span>
                            </a></li>
                    </ul>
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
                padding: 1rem 0.5rem;
                background-color: #20190d;
            }

            .logo a {
                display: flex;
                align-items: center;
            }

            .logo-food {
                color: #fff;
                background-color: #292929;
                padding: 0.5rem 0.3rem;
            }

            .row {
                margin-left: unset !important;
                margin-right: unset !important;
            }

            .logo-web {
                color: #000;
                background-color: #ffa31a;
                padding: 0.5rem 0.3rem;

            }

            .login-section {
                display: flex;
                align-items: center;
                justify-content: flex-end;
            }

            .login {
                background-color: transparent;
                padding: 0.5rem 1rem;
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
                border-radius: 8px;
                width: 90%;
                padding: 0.2rem 1rem;
                background-color: #ccc;
                height: 2.5rem;
            }

            .search-bar form i {
                position: relative;
                left: -1.8rem;
                top: 0.6rem;
            }

            .bottom-nav-bar-section {
                width: 100%;
                background-color: #000;
            }

            .bottom-nav-bar-wrapper {

                /* justify-content: center; */
                padding: 0.2rem 0.2rem;
                position: sticky;
                top: 0;
            }

            .bottom-nav-class {
                display: flex;
                justify-content: space-between;
                /* max-width: 1400px; */
                margin: auto;
            }

            ul {
                margin-bottom: unset !important;
                padding-left: unset !important;

            }

            .bottom-nav-class li {

                color: #ccc;

                margin: auto;
                width: 16.67%;
                text-align: center;
                padding: 5px 0%;
                border-right: 2px solid rgb(255, 255, 255, 0.4);

            }

            .bottom-nav-class li:last-child {
                border-right: unset !important
            }

            .bottom-nav-class a:hover {
                color: #ffa31a;
            }

            .bottom-nav-class a.icon span {
                padding: 0 5px;
            }

            .bottom-nav-class a.icon span:hover {
                background-color: #ffa31a;
                color: #000;
                font-weight: bold;
            }

            .bottom-nav-class .icon-li {
                display: none;
            }





            @media screen and (max-width:650px) {
                .search-bar input::placeholder {
                    font-size: 0.9rem;
                }

                /* .bottom-nav-class li:not(:first-child) {
                    display: none;
                } */

                .bottom-nav-class:not(.responsive) li:not(:first-child) {
                    display: none;
                }

                .bottom-nav-class li {
                    border: none;
                }

                .bottom-nav-class .icon-li {
                    float: right;
                    display: block !important;
                    text-align: right;
                    position: absolute;
                    top: 11.6%;
                    right: 0.5%;
                }


                .bottom-nav-class li {
                    float: none;
                    display: block;
                    text-align: left;
                    margin-left: 2rem;
                }

            }

            @media screen and (max-width:650px) {
                .bottom-nav-class.responsive {
                    position: relative;
                }

                .bottom-nav-class {
                    display: inline !important;
                }

                .bottom-nav-class.responsive .icon-li {
                    position: absolute;
                    right: 0;
                    top: 0;
                    text-align: right;
                }

                .bottom-nav-class.responsive li {
                    float: none;
                    display: block;
                    text-align: left;
                    margin-left: 2rem;
                }
            }

            @media screen and (max-width:500px) {

                .search-bar input::placeholder,
                .search-bar a {
                    font-size: 0.8rem;
                }

                .search-bar {
                    padding: none !important;
                    height:
                }

                .logo a {
                    font-size: 0.8rem;
                }

                .logo-food {
                    padding: 0.3rem 0.2rem;
                    /* padding: 0.5rem 0.3rem; */

                }

                .logo-web {
                    padding: 0.3rem 0.2rem;
                    /* padding: 0.5rem 0.3rem; */

                }

                .login {
                    font-size: 0.8rem;
                    padding: 0.3rem 0.5rem;
                }

                .search-bar form input {
                    height: 2rem;
                    width: 90%;
                }

                .search-bar i {
                    display: none;
                }

                .bottom-nav-class .icon-li {
                    float: right;
                    display: block !important;
                    text-align: right;
                    position: absolute;
                    top: 10.3%;
                    right: 0.8%;
                }
            }

            @media screen and (max-width:420px) {

                .search-bar input::placeholder,
                .search-bar a {
                    font-size: 0.7rem;
                }
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
        <script>
            function myFunction() {
                var x = document.getElementById("bottomNav");
                if (x.className === "bottom-nav-class") {
                    x.className += " responsive";
                } else {
                    x.className = "bottom-nav-class";
                }
            }
        </script>
    </aside>
