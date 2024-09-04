<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <nav>
        <div class="container1-nav">

            <img src="{{ asset('images/angle-left (1).png') }}" alt="" class="back">
            <h1>Food and Drinks</h1>
        </div>
        <div class="searchbar-cart">
            <div class="search-cart-container">
                <div class="search-container">
                    <div class="group">
                        <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                            <g>
                                <path
                                    d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                                </path>
                            </g>
                        </svg>
                        <input placeholder="Search" type="search" class="input">
                    </div>
                </div>
                <div class="customer-cart-container">
                    <div class="customer-cart">
                    <img src="{{ asset('images/Shopping Cart.png') }}" alt=""> 
                        {{-- <img src="assets/Shopping Cart.png" alt=""> --}}
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="menu-cards-selection">
        <div class="menucards-container">
            <div class="card1">
                <img src="{{ asset('images/salad 1.png') }}" alt=""> 
                <p>Vegan Meal</p>
            </div>
            <div class="card2">
                <img src="{{ asset('images/sandwich 1.png') }}" alt=""> 
                <p>Sandwich</p>
            </div>
            <div class="card3">
                <img src="{{ asset('images/fruit 1.png') }}" alt=""> 
                <p>Fresh Fruits</p>
            </div>
            <div class="card4">
                <img src="{{ asset('images/juice 1.png') }}" alt=""> 
                <p>Organic Juices</p>
            </div>
            <div class="card5">
                <img src="{{ asset('images/bubble-tea (1) 1.png') }}" alt=""> 
                <p>Milk Tea</p>
            </div>
            <div class="card6">
                <img src="{{ asset('images/chocolate 1.png') }}" alt=""> 
                <p>Imported Tea</p>
            </div>
        </div>
    </div>

    <div class="selection-text">
        <h1>Vegan Meal</h1>
    </div>


    <div class="cards-selection-veganmeal">
        <div class="cards-selection-container">
            <div class="card-food1">
                <div class="food-img food-img1"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>

            <div class="card-food2">
                <div class="food-img food-img2"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>


            <div class="card-food3">
                <div class="food-img food-img3"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>

            <div class="card-food4">
                <div class="food-img food-img4"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cards-selection-sandwich">
        <div class="cards-selection-container-sandwich">
            <div class="card-food1-sandwich">
                <div class="food-img sandwich-img1"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
            <div class="card-food2-sandwich">
                <div class="food-img sandwich-img2"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
            <div class="card-food3-sandwich">
                <div class="food-img sandwich-img3"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
            <div class="card-food4-sandwich">
                <div class="food-img sandwich-img4"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cards-selection-freshfruits">
        <div class="cards-selection-container-freshfruits">
            <div class="card-food1-freshfruits">
                <div class="food-img freshfruits-img1"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
            <div class="card-food2-freshfruits">
                <div class="food-img freshfruits-img2"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
            <div class="card-food3-freshfruits">
                <div class="food-img freshfruits-img3"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
            <div class="card-food4-freshfruits">
                <div class="food-img freshfruits-img4"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cards-selection-organicjuice">
        <div class="cards-selection-container-organicjuice">
            <div class="card-food1-organicjuice">
                <div class="food-img organicjuice-img1"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
            <div class="card-food2-organicjuice">
                <div class="food-img organicjuice-img2"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
            <div class="card-food3-organicjuice">
                <div class="food-img organicjuice-img3"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
            <div class="card-food4-organicjuice">
                <div class="food-img organicjuice-img4"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cards-selection-milktea">
        <div class="cards-selection-container-milktea">
            <div class="card-food1-milktea">
                <div class="food-img milktea-img1"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
            <div class="card-food2-milktea">
                <div class="food-img milktea-img2"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
            <div class="card-food3-milktea">
                <div class="food-img milktea-img3"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
            <div class="card-food4-milktea">
                <div class="food-img milktea-img4"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="cards-selection-tea">
        <div class="cards-selection-container-tea">
            <div class="card-food1-tea">
                <div class="food-img tea-img1"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
            <div class="card-food2-tea">
                <div class="food-img tea-img2"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
            <div class="card-food3-tea">
                <div class="food-img tea-img3"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
            <div class="card-food4-tea">
                <div class="food-img tea-img4"></div>
                <p class="food-name">Vegan Cauliflower Gyros</p>
                <p class="food-description">Healthy Vegan Meal</p>
                <div class="price-stocks">
                    <h1 class="price">₱180</h1>
                    <div class="mid-line"></div>
                    <p class="stocks">Stocks: 20</p>
                </div>
                <div class="card-buttons">
                    <div class="view">
                        <h1>VIEW</h1>
                    </div>
                    <div class="add-cart">
                        <img src="{{ asset('images/shopping-cart-add.png') }}" alt="" style="width: 23px; height: 23px">
                        <div class="mid-line2"></div>
                        <h1>ADD TO CART</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
<script src="{{ asset('js/menu.js') }}"></script>

</html>