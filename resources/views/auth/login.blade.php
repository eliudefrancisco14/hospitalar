<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="/logint/images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="/logint/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/logint/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="/logint/fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="/logint/vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="/logint/vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="/logint/vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="/logint/vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="/logint/vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="/logint/css/util.css">
    <link rel="stylesheet" type="text/css" href="/logint/css/main.css">

    <meta name="robots" content="noindex, follow">
    <script nonce="cabfcfc5-df6a-4a92-8277-7753327e457c">
        (function(w, d) {
            ! function(a, e, t, r) {
                a.zarazData = a.zarazData || {};
                a.zarazData.executed = [];
                a.zaraz = {
                    deferred: []
                };
                a.zaraz.q = [];
                a.zaraz._f = function(e) {
                    return function() {
                        var t = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: t
                        })
                    }
                };
                for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
                a.zaraz.init = () => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
                    a.zarazData.x = Math.random();
                    a.zarazData.w = a.screen.width;
                    a.zarazData.h = a.screen.height;
                    a.zarazData.j = a.innerHeight;
                    a.zarazData.e = a.innerWidth;
                    a.zarazData.l = a.location.href;
                    a.zarazData.r = e.referrer;
                    a.zarazData.k = a.screen.colorDepth;
                    a.zarazData.n = e.characterSet;
                    a.zarazData.o = (new Date).getTimezoneOffset();
                    a.zarazData.q = [];
                    for (; a.zaraz.q.length;) {
                        const e = a.zaraz.q.shift();
                        a.zarazData.q.push(e)
                    }
                    z.defer = !0;
                    for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith(
                        "_zaraz_"))).forEach((t => {
                        try {
                            a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
                        } catch {
                            a.zarazData["z_" + t.slice(7)] = e.getItem(t)
                        }
                    }));
                    z.referrerPolicy = "origin";
                    z.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(a
                        .zarazData)));
                    t.parentNode.insertBefore(z, t)
                };
                ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>

<body>
    <div class="container-login100" style="background-image: url('/logint/images/login.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title p-b-37">
                    <img src="/site/images/logo-vertical.png" alt="Logo" width="220" >
                </span>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4 alert alert-info" :status="session('status')" />
        
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />
                <div class="wrap-input100 validate-input m-b-20" data-validate="Digite seu email">
                    <input class="input100" type="email" name="email" :value="old('email')" placeholder="email">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-25" data-validate="Digite sua password">
                    <input class="input100" type="password" name="password" placeholder="password">
                    <span class="focus-input100"></span>
                </div>
                <div class="container-login100-form-btn">
                  

                    <x-button class="login100-form-btn">
                        {{ __('Log in') }}
                    </x-button>
                </div>
           
            </form>
        </div>
    </div>
    <div id="dropDownSelect1"></div>

    <script src="/logint/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="/logint/vendor/animsition/js/animsition.min.js"></script>

    <script src="/logint/vendor/bootstrap/js/popper.js"></script>
    <script src="/logint/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="/logint/vendor/select2/select2.min.js"></script>

    <script src="/logint/vendor/daterangepicker/moment.min.js"></script>
    <script src="/logint/vendor/daterangepicker/daterangepicker.js"></script>

    <script src="/logint/vendor/countdowntime/countdowntime.js"></script>

    <script src="/logint/js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"738a91307def03f6","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/etc/lf/Login_v9/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Aug 2022 17:49:35 GMT -->

</html>
