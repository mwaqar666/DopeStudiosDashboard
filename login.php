<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>Analytics || Log In</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon.png">
    <link href="./assets/css/style.min.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-6">
                <div class="loginForm">
                    <div class="logincontainer">
                        <div class="col-3 m-auto">
                            <img class="w-75 m-auto d-block" src="assets/images/logo/logo-icon.png" />
                        </div>
                        <div class="col-lg-12 m-auto text-center">
                            <h2 class="text-warning">Hey, Welcome to BlashAIO !</h2>
                        </div>
                        <div class="col-lg-6 m-auto">
                            <form class="g-3 needs-validation" onsubmit="login(event)">
                                <div class="col-12 mt-5 mb-5">
                                    <div id="input-key-fields">
                                        <label for="validationCustom01" class="form-label text-left">Please enter your license key to continue</label>
                                        <input minlength="4" type="text" class="form-control" id="validationCustom01" placeholder="License Key" required>
                                    </div>
                                    <div id="success" class="d-none">
                                        <div class="col-5 m-auto">
                                            <img class="w-100" src="assets/images/icons/animation_500.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-warning m-auto d-block w-50" id="login-button" type="submit">Login</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-lg-6 m-auto text-center needHelp">
                        <div>
                            <h4>Need help ? Contact us <a class="text-warning" href="javascript:void(0)">here</a></h4>
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
                                    <h2><span>$</span> 2,824</h2>
                                </div>
                                <div class="row">
                                    <div class="col-7">
                                        <div class="mainCardOne">
                                            <h5>Total Spent</h5>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="values">
                                            <img src="assets/images/icons/icon01.png"><span>+ $245</span>
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
                                    <h2><span>#</span> 2,824</h2>
                                </div>
                                <div class="row">
                                    <div class="col-7">
                                        <div class="mainCardTwo">
                                            <h5>Total Spent</h5>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="values">
                                            <img src="assets/images/icons/icon01.png"><span>+ 22</span>
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
                                    <h2><span>#</span> 2,824</h2>
                                </div>
                                <div class="row">
                                    <div class="col-7">
                                        <div class="mainCardThree">
                                            <h5>Total Spent</h5>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="values">
                                            <img src="assets/images/icons/icon02.png"><span class="text-danger">-
                                                12</span>
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

    <script>
        const successMessage = document.getElementById('success')
        const inputKeyFiled = document.getElementById('input-key-fields')
        const loginButton = document.getElementById('login-button')
        const login = (event) => {
            event.preventDefault()
            successMessage.classList.remove('d-none')
            inputKeyFiled.classList.add('d-none')
            loginButton.innerText = "Success"
            loginButton.classList.remove('bg-primary')
            loginButton.classList.add('bg-success')
        }
    </script>
</body>

</html>