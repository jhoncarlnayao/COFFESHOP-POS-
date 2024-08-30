<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
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
                <h1>Already Have an Account ?<br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Sign in</h1>
            </div>
            <div class="big-signup">
                <h1>Sign up</h1>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form action="{{ route('register') }}" method="POST" class="signup-form">
                @csrf
            <div class="user-inputs">
                <div class="firstname-text">First name</div>
                <div class="middlename-text">Middle name</div>
                <div class="input1">
                    <input type="text" name="firstname" id="firstname" placeholder="First name" class="firstname">
                    <input type="text" name="middlename" id="middlename" placeholder="Middle name" class="middlename">
                </div>
                <div class="lastname-text">Last name</div>
                <div class="birthdate-text">Birthdate</div>
                <div class="input2">
                    <input type="text" name="lastname" id="lastname" placeholder="Last name" class="lastname">
                    <input type="date" name="birthdate" id="birthdate" placeholder="Birthdate" class="birthdate">
                </div>
                <div class="email-text">Email Address</div>
                <div class="input3">
                    <input type="email" name="emailaddress" id="emailaddress" placeholder="Email Address" class="emailaddress">
                    <input type="password" name="password" id="password" placeholder="Password" class="password">
                </div>
                <div class="password-text">Password</div>
            </div>
            <div class="signup-button-position">
                <button type="submit" class="signup-button">Sign up</button>
            </div>
        </form>
        </div>
    </div>
    
</body>
</html>