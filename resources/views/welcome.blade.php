<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Instagram</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Open Sans', 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .content {
            text-align: center;
        }

        h2.info {
            font-weight: 600;
            line-height: 20px;
            font-size: 17px;
            margin: 0 40px 10px;
            color: #999;
            text-align: center;
        }

        img.logo {
            height: 30px;
            width: 130px;
        }

        input {
            background-color: rgb(247, 244, 244) !important;
            border: 1px solid rgb(240, 237, 237) !important;
            font-size: 12px !important;
        }
    </style>
</head>

<body>
    <div class="flex-center container">
        <div class="text-center">
            <div class="row">
                <div class="d-flex align-items-center">
                    <div class="mt-5 ml-auto">
                        <div class="col-5 mt-2">
                            <img src="/img/phones.png">
                        </div>
                    </div>
                    <div class="col-4 mr-auto">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="logo"><img src="/img/instagram.png" class="logo"></h1>
                                <form action="/register" class="text-center">
                                    <div>
                                        <h6 class="info mb-4"><b>Sign up to see photos and videos <br> from your
                                                friends.</b></h6>
                                        <button class="btn btn-primary btn-block btn-sm font-weight-bold mt-1">
                                            <svg width="20" height="20">
                                                <rect x="0" y="1" width="15" height="15" fill="white" />
                                                <text x="5" y="16" font-size="18"
                                                    style="fill:rgba(21, 21, 230, 0.699)">f</text>
                                            </svg>
                                            Log in with Facebook</button>
                                    </div>
                                    <div class="p-2">
                                        <h6 class="text-center info">OR</h6>
                                    </div>
                                    <div class="form-group">
                                        <input aria-label="Mobile Number or Email" aria-required="true"
                                            autocapitalize="off" autocomplete="tel" autocorrect="off"
                                            name="emailOrPhone" type="text" class="form-control readonly mb-2" value=""
                                            placeholder="Mobile Number or Email">
                                        <input aria-label="Full Name" aria-required="false" autocapitalize="sentences"
                                            autocorrect="off" name="fullName" type="text" class="form-control mb-2"
                                            value="" placeholder="Full Name">
                                        <input aria-label="Username" aria-required="true" autocapitalize="off"
                                            autocorrect="off" maxlength="30" name="username" type="text"
                                            class="form-control mb-2" value="" placeholder="Username">
                                        <input aria-label="Password" aria-required="true" autocapitalize="off"
                                            autocomplete="new-password" autocorrect="off" name="password"
                                            type="password" class="form-control mb-2" value="" placeholder="Password">

                                        <button class="btn btn-primary btn-sm btn-block font-weight-bold mt-3">Sign
                                            up</button>
                                    </div>
                                    <p class="mx-auto text-muted col-md-11">By signing up, you agree to our <a
                                            target="_blank" href="https://help.instagram.com/581066165581870">Terms</a>
                                        , <a target="_blank" href="https://help.instagram.com/519522125107875"
                                            style="">Data Policy</a> and <a target="_blank"
                                            href="/legal/cookies/">Cookies Policy</a> .</p>
                                </form>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-body">
                                Have an account? <a href="/login">Log in</a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <a
                                    href="https://itunes.apple.com/app/instagram/id389801252?pt=428156&amp;ct=igweb.signupPage.badge&amp;mt=8&amp;vt=lo"><img
                                        alt="Available on the App Store" class="w-100" src="/img/appstore.png"></a>
                            </div>
                            <div class="col-6">
                                <a
                                    href="https://play.google.com/store/apps/details?id=com.instagram.android&amp;referrer=utm_source%3Dinstagramweb%26utm_campaign%3DsignupPage%26ig_mid%3D043B12DC-BDDF-40BF-90D3-2208149E7B05%26utm_content%3Dlo%26utm_medium%3Dbadge"><img
                                        alt="Available on Google Play" class="w-100" src="/img/playstore.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mt-5">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto font-weight-bold">
                    <li class="nav-item"><a href="#" class="nav-link">ABOUT US</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">HELP</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">PRESS</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">API</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">JOBS</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">PRIVACY</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">TERMS</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">DIRECTORY</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">PROFILE</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">HASHTAGS</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">LANGUAGE</a></li>
                </ul>
                <small class="navbar-nav ml-auto">&copy;2020 INSTAGRAM FROM FACEBOOK</small>
            </div>
        </nav>
    </footer>
</body>

</html>