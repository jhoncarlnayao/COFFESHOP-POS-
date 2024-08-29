<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="biglogo">
        <img src="{{ asset('images/biglogo.png') }}" alt="">
      </div>
      
    <div class="bigbox-position">
        <div class="bigbox">
            <div class="small-logo">
                <img src="{{ asset('images/smalllogo.png') }}" alt="">
                <h1>Miau Café</h1>
            </div>
            <div class="no-account">
                <h1>No account?<br>Sign up</h1>
            </div>
            <div class="big-signup">
                <h1>Sign in</h1>
            </div>

            <div class="sign-buttons-position">
                <div class="signin-guest"> 
                    <button><img src="{{ asset('images/guest.png') }}" alt=""> &nbsp &nbspSign in as Guest </button>
                </div>
    
                <div class="signin-google"> 
                    <button><img src="{{ asset('images/Google.png') }}" alt="">Sign in with Google </button>
                </div>
            </div>

            <div class="or-position">
                <div class="or">
                    <div class="or-left"></div>
                    <h1>or</h1>
                    <div class="or-right"></div>
                </div>
            </div>

            <div class="email-text">Email Address</div>
            <div class="password-text">Password</div>
            <div class="forgot-password">Forgot Password ?</div>
            <div class="email-position">
                <input type="email" name="email" id="email" placeholder="Email Address" class="email-input">
                <input type="password" name="password" id="password" placeholder="Password" class="password-input">
            </div>

            <div class="signin-button-position">
                <div class="signin-button" id="signin-button"> <button>Sign in</button></div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>