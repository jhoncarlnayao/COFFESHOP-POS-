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
            document.querySelector(".cards-selection-veganmeal").style.display = "flex";
            document.querySelector(".cards-selection-sandwich").style.display = "none";
            document.querySelector(".selection-text h1").innerHTML = "Vegan Meal";
        } else if (card.classList.contains("card2")) {
            document.querySelector(".cards-selection-sandwich").style.display = "flex";
            document.querySelector(".cards-selection-veganmeal").style.display = "none";
            document.querySelector(".selection-text h1").innerHTML = "Sandwich";
        }
    };
});

