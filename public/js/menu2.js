// Select all the cards using their individual classes
const cards = [
    document.querySelector(".card1"),
    document.querySelector(".card2"),
    document.querySelector(".card3"),
    document.querySelector(".card4"),
    document.querySelector(".card5"),
    document.querySelector(".card6")
];

cards.forEach(card => {
    card.onclick = () => {
        
        cards.forEach(c => c.classList.remove("card-focus"));
        
      
        card.classList.add("card-focus");

        if (card.classList.contains("card1")) {
          document.querySelector(".cards-selection-espressodrinks").style.display =   "flex";
          document.querySelector(".cards-selection-coldbrews").style.display =        "none";
          document.querySelector(".cards-selection-tealattes").style.display =        "none";
          document.querySelector(".cards-selection-specialtydrinks").style.display =  "none";
          document.querySelector(".cards-selection-icedcoffee").style.display =       "none";
          document.querySelector(".cards-selection-brewedcoffee").style.display =     "none";
          document.querySelector(".selection-text h1").innerHTML =   "Americano Coffee List"; 

        } else if (card.classList.contains("card2")) {
            document.querySelector(".cards-selection-coldbrews").style.display =      "flex";
            document.querySelector(".cards-selection-espressodrinks").style.display = "none";
            document.querySelector(".cards-selection-tealattes").style.display =      "none";
            document.querySelector(".cards-selection-icedcoffee").style.display =     "none";
            document.querySelector(".cards-selection-brewedcoffee").style.display =   "none";
            document.querySelector(".cards-selection-specialtydrinks").style.display ="none";
            document.querySelector(".selection-text h1").innerHTML = "Cold Brew Coffee List";

        } else if (card.classList.contains("card3")) {
            document.querySelector(".cards-selection-tealattes").style.display =      "flex";
            document.querySelector(".cards-selection-espressodrinks").style.display = "none";
            document.querySelector(".cards-selection-coldbrews").style.display =      "none";
            document.querySelector(".cards-selection-specialtydrinks").style.display ="none";
            document.querySelector(".cards-selection-icedcoffee").style.display =     "none";
            document.querySelector(".cards-selection-brewedcoffee").style.display =   "none";
            document.querySelector(".selection-text h1").innerHTML =       "Tea Lattes List";

        } else if (card.classList.contains("card4")) {
            document.querySelector(".cards-selection-specialtydrinks").style.display ="flex";
            document.querySelector(".cards-selection-espressodrinks").style.display = "none";
            document.querySelector(".cards-selection-coldbrews").style.display =      "none";
            document.querySelector(".cards-selection-tealattes").style.display =      "none";
            document.querySelector(".cards-selection-icedcoffee").style.display =     "none";
            document.querySelector(".cards-selection-brewedcoffee").style.display =   "none";
            document.querySelector(".selection-text h1").innerHTML = "Specialty Drinks List";

        } else if (card.classList.contains("card5")) {
            document.querySelector(".cards-selection-icedcoffee").style.display =     "flex";
            document.querySelector(".cards-selection-espressodrinks").style.display = "none";
            document.querySelector(".cards-selection-coldbrews").style.display =      "none";
            document.querySelector(".cards-selection-tealattes").style.display =      "none";
            document.querySelector(".cards-selection-specialtydrinks").style.display ="none";
            document.querySelector(".cards-selection-brewedcoffee").style.display =   "none";
            document.querySelector(".selection-text h1").innerHTML =      "Iced Coffee List";

        } else if (card.classList.contains("card6")){
            document.querySelector(".cards-selection-brewedcoffee").style.display =  "flex";
            document.querySelector(".cards-selection-espressodrinks").style.display ="none";
            document.querySelector(".cards-selection-coldbrews").style.display =     "none";
            document.querySelector(".cards-selection-tealattes").style.display =     "none";
            document.querySelector(".cards-selection-icedcoffee").style.display =    "none";
            document.querySelector(".cards-selection-specialtydrinks").style.display="none";
            document.querySelector(".selection-text h1").innerHTML =   "Brewed Coffee List";

        }
    };
});

