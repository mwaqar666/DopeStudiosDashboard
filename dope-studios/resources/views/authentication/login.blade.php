<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex,nofollow">
        <title>Analytics || Log In</title>
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.ico') }}">
        <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-6">
                    <div class="loginForm">
                        <div class="logincontainer">
                            <div class="col-3 m-auto">
                                <img class="w-75 m-auto d-block" src="{{  asset('assets/images/logo/logo-icon.png') }}" alt=""/>
                            </div>
                            <div class="col-lg-12 m-auto text-center">
                                <h2 class="text-warning">Hey, Welcome to Dope Studios!</h2>
                            </div>
                            <div class="col-lg-6 m-auto">
                                <form action="{{ route('') }}" class="g-3 needs-validation">
	                                @csrf
                                    <div class="col-12 mt-5 mb-5">
                                        <div id="input-key-fields">
                                            <label for="user_email" class="form-label text-left">Email</label>
                                            <input type="email" class="form-control" id="user_email" placeholder="abc@example.com" required>
                                        </div>
	                                    <div id="input-key-fields">
		                                    <label for="user_password" class="form-label text-left">Password</label>
		                                    <input type="password" class="form-control" id="user_password" placeholder="********" required>
	                                    </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-warning m-auto d-block w-50" id="login-button" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-auto loginCardsMobileHide">
                    <div>
                        <div class="col-lg-6 ml-5 shadow">
                            <div class="card bg-warning text-left mb-0">
                                <div class="card-body">
                                    <div class="mainCardOne">
                                        <h2>
                                            <span>$</span> 2,824
                                        </h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="mainCardOne">
                                                <h5>Total Spent</h5>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="values">
                                                <img src="{{ asset('assets/images/icons/icon01.png') }}" alt="">
                                                <span>+ $245</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 m-auto shadow">
                            <div class="card bg-success text-left loginCard mb-0">
                                <div class="card-body">
                                    <div class="mainCardTwo">
                                        <h2>
                                            <span>#</span> 2,824
                                        </h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="mainCardTwo">
                                                <h5>Total Spent</h5>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="values">
                                                <img src="{{ asset('assets/images/icons/icon01.png') }}" alt="">
                                                <span>+22</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ml-3 shadow">
                            <div class="card bg-danger loginCard text-left">
                                <div class="card-body">
                                    <div class="mainCardThree">
                                        <h2>
                                            <span>#</span> 2,824
                                        </h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="mainCardThree">
                                                <h5>Total Spent</h5>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="values">
                                                <img src="{{ asset('assets/images/icons/icon02.png') }}" alt="">
                                                <span class="text-danger">-12</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
