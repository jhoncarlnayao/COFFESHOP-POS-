<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="profile-container">
                <div class="profile-picture">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Profile Picture">
                    <h2>Jhon Carl Nayao</h2>
                    <p>Customer</p>
                    <button> Open Profile </button>
                </div>
            </div>
          
            <ul class="navbar-menu">
                <li>
                    <a href="#">
                        <img src="{{ asset('images/dashboard.png') }}" alt="Dashboard Icon" class="menu-icon">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('images/Coffee.png') }}" alt="Coffee Icon" class="menu-icon">
                        <span>Coffee</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('images/Bread.png') }}" alt="Bread Icon" class="menu-icon">
                        <span>Bread</span>
                    </a>
                </li>
                <li>
                    <a href="#" style="margin-bottom:50px;">
                        <img src="{{ asset('images/Food Bar.png') }}" alt="Food & Drinks Icon" class="menu-icon")>
                        <span>Food & Drinks</span>
                    </a>
                </li>
                <h1>Others</h1>
                <li>
                    <a href="#">
                        <img src="{{ asset('images/Notification.png') }}" alt="Notifications Icon" class="menu-icon">
                        <span>Notifications</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('images/Online Support.png') }}" alt="Contact Support Icon" class="menu-icon">
                        <span>Contact Support</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="search-cart-container">
        <div class="search-container">
            <div class="group">
                <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                <input placeholder="Search" type="search" class="input">
              </div>
        </div>
        <div class="customer-cart-container">
            <div class="customer-cart">
                <img src="{{ asset('images/Shopping Cart.png') }}" alt="">
            </div>
        </div>   
    </div>

    <div class="bigbox1-container">
        <div class="bigbox1" >
           <img class="bigcoffee" src="{{ asset('images/bigcoffee.png') }}" alt="">
           <h1>WELCOME OFFER</h1>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Neque voluptatum ab adipisci qui odit necessitatibus ea  <br>quod aliquam nam beatae repudiandae praesentium culpa, <br>excepturi nulla. Minus voluptatibus modi magni dolore!</p>
            <button id="redeem-now"><strong>Redeem now</strong></button>
        </div>
    </div>
    
    <div class="boxes-container">
        <div class="smallbox1-container">
            <div class="smallbox1">
                <h1>BREAD<br>BUNDLE</h1>
                <div class="img-1"><img src="{{ asset('images/round bread.png') }}" alt=""></div>
            </div>
            <div class="img-2"><img src="{{ asset('images/bread loaf.png') }}" alt=""></div>
       
        </div>
    
        <div class="smallbox2-container">
            <div class="smallbox2">
                <h1>BIG SALE!</h1>
                <p>Get 20% off when you buy 3 coffee</p>
            </div>
        </div>
    </div>

    <div class="explore-text">
        <h1>EXPLORE POPULAR COFFEE</h1>
    </div>

    <div class="coffee-container">
        <div class="coffe">
            <div class="coffee1"><img src="{{ asset('images/coffee1.png') }}" alt=""><p>Kopiko Coffee</p>
            </div>
            <div class="coffee2"><img src="{{ asset('images/coffee2.png') }}" alt=""><p>Kopiko With Milk</p></div>
            <div class="coffee3"><img src="{{ asset('images/coffee3.png') }}" alt=""><p>Goat Coffee</p></div>
            <div class="coffee4"><img src="{{ asset('images/coffeee4.png') }}" alt=""><p>Kopiko but with Chocolate</p></div>
        </div>
    </div>
   
   
</body>
</html>
