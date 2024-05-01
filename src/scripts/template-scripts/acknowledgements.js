/*
function setNumberOfCards() {
    var screenWidth = window.innerWidth;
    var numberOfCards;

    if (screenWidth >= 1441) {
        numberOfCards = 8;
    } else if (screenWidth >= 768) {
        numberOfCards = 6;
    } else {
        numberOfCards = 3;
    }

    var cardsContainer = document.querySelector('.gratitudes__content__cards');
    var cards = cardsContainer.querySelectorAll('.card');

    // Перевіряємо, чи кількість карток відповідає встановленій кількості
    if (cards.length !== numberOfCards) {
        // Вираховуємо різницю між поточною кількістю карток та бажаною
        var difference = numberOfCards - cards.length;

        if (difference > 0) {
            // Додаємо нові картки
            for (var i = 0; i < difference; i++) {
                var newCard = document.createElement('div');
                newCard.className = 'card';
                cardsContainer.appendChild(newCard);
            }
        } else {
            // Видаляємо зайві картки
            for (var i = 0; i < -difference; i++) {
                cardsContainer.removeChild(cardsContainer.lastChild);
            }
        }
    }
}

// Викликаємо функцію при завантаженні сторінки та при зміні розміру вікна
window.onload = setNumberOfCards;
window.onresize = setNumberOfCards;
*/

