<!DOCTYPE html>
<html>

<head dir="ltr">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
   <link rel="shortcut icon" href="#" />

    <style>
        @font-face {
            font-family: event-reg;
            src: url({{ asset('siteassets/JF-Flat-regular.ttf') }});
        }

        body {
            margin: 0;
            font-family: event-reg !important;

        }

        h1 {
            font-weight: 300;
            letter-spacing: 2px;
            font-size: 48px;
        }

        p {
            letter-spacing: 1px;
            font-size: 14px;
            color: #151516;
        }

        .header {
            position: relative;
            text-align: center;
            background: linear-gradient(60deg, #e7e6f1 10%, #f3f1ff 100% );
            color: white;

            /*  */
        }

        .logo {
            width: 50px;
            fill: white;
            padding-right: 15px;
            display: inline-block;
            vertical-align: middle;
        }

        .inner-header {
            height: 100vh;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .flex {
            /*Flexbox for containers*/
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }



        .content {
            position: relative;
            height: 10vh;
            text-align: center;
            background-color: #1d1c1c;
        }

        /* Animation */

        .parallax>use {
            animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
        }

        .parallax>use:nth-child(1) {
            animation-delay: -2s;
            animation-duration: 7s;
        }

        .parallax>use:nth-child(2) {
            animation-delay: -3s;
            animation-duration: 10s;
        }

        .parallax>use:nth-child(3) {
            animation-delay: -4s;
            animation-duration: 13s;
        }

        .parallax>use:nth-child(4) {
            animation-delay: -5s;
            animation-duration: 20s;
        }

        @keyframes move-forever {
            0% {
                transform: translate3d(-90px, 0, 0);
            }

            100% {
                transform: translate3d(85px, 0, 0);
            }
        }

        /*Shrinking for mobile*/
        @media (max-width: 768px) {
            .waves {
                height: 30px;
                min-height: 40px;
            }

            .content {
                height: 50px
            }

        }

        .login-box {
            position: absolute;
            margin-left: 250px;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }

        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #1d1c1c;
            text-align: center;
        }

        .login-box .user-box {
            position: relative;
            margin-bottom: 30px;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #1d1c1c;
            /* margin-bottom: 30px; */
            border: none;
            border-bottom: 1px solid #1d1c1c;
            outline: none;
            background: transparent;
        }

        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #1d1c1c;
            pointer-events: none;
            transition: .5s;
        }

        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top: -20px;
            left: 0;
            color: #1d1c1c;
            font-size: 12px;
        }

        .login-box form button {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #1d1c1c;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            background: transparent;
            border: none;
            cursor: pointer;
            font-family: event-reg !important;
            /* letter-spacing: 4px */
        }

        .login-box button:hover {
            background: #1d1c1c;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #1d1c1c,
                0 0 25px #1d1c1c,
                0 0 50px #1d1c1c,
                0 0 100px #1d1c1c;
        }

        .login-box button span {
            position: absolute;
            display: block;
        }

        .login-box button span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #1d1c1c);
            animation: btn-anim1 1s linear infinite;
        }

        @keyframes btn-anim1 {
            0% {
                left: -100%;
            }

            50%,
            100% {
                left: 100%;
            }
        }

        .login-box button span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #1d1c1c);
            animation: btn-anim2 1s linear infinite;
            animation-delay: .25s
        }

        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }

            50%,
            100% {
                top: 100%;
            }
        }

        .login-box button span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #1d1c1c);
            animation: btn-anim3 1s linear infinite;
            animation-delay: .5s
        }

        @keyframes btn-anim3 {
            0% {
                right: -100%;
            }

            50%,
            100% {
                right: 100%;
            }
        }

        .login-box button span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #1d1c1c);
            animation: btn-anim4 1s linear infinite;
            animation-delay: .75s
        }

        @keyframes btn-anim4 {
            0% {
                bottom: -100%;
            }

            50%,
            100% {
                bottom: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="header">

        <!--Content before waves-->
        <div class="inner-header flex">
            <div class="all">
                <div class="login-box">
                    <h2>Login</h2>
                    <form autocomplete="off" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="user-box">
                            <input type="text" name="email" value="{{ old('email') }}" autocomplete="off">
                            <label>Username/Email: </label>
                            @error('email')
                            <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="user-box">
                            <input type="password" name="password" autocomplete="new-password">
                            <label>Password: </label>
                            @error('password')
                            <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-check">
                            @if (Route::has('password.request'))
                            <a style="text-decoration: none;color:#ffff" href="{{ route('password.request') }}">
                                {{ __('Forgot password?') }}
                            </a>
                            @endif
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember me') }}
                            </label>
                        </div>

                        <button href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                           Login
                        </button>
                        <br>
                        <br>   
                        <p>Don't have an account?
                            <a style="text-decoration: none;color:#ffff" href="{{ route('register') }}"> 
                                {{ __('Sign up') }}
                            </a>
                        </p> 
                        
                    </form>
                </div>
            </div>


        </div>


    </div>
    <!--Header ends-->

    <!--Content starts-->
    <div class="content flex">
        <!-- {{-- <p>By.Goodkatz | Free to use </p> --}} -->
    </div>
    <!--Content ends-->

    <script>
        // let inputs = document.querySelectorAll('.user-box input');
        // inputs.forEach(el => el.value = '')
    </script>
</body>

</html>