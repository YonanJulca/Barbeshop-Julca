// Seleccionando los elementos del DOM
const inputName = document.querySelector("#input-name");
const inputNumber = document.querySelector("#input-number");
const inputMonth = document.querySelector("#input-month");
const inputYear = document.querySelector("#input-year");
const inputCVC = document.querySelector("#input-cvc");
const cardNumber = document.querySelector("#card-number");
const cardName = document.querySelector("#card-name");
const cardMonth = document.querySelector("#card-month");
const cardYear = document.querySelector("#card-year");
const cardCVC = document.querySelector("#card-cvc");
const form = document.querySelector("#form");
const thankYou = document.querySelector("#thank-you");
const buttonContinue = document.querySelector("#continue");

// Event Listener para el campo de Nombre del Titular
inputName.addEventListener("input", () => {
    cardName.innerText = inputName.value;

    if (inputName.value.length === 0) {
        cardName.innerText = "Jane Appleseed";
    }
})

// Inicializando Cleave.js para el campo de Número de Tarjeta
var cleave = new Cleave('#input-number', {
    creditCard: true,
});

// Event Listener para el campo de Número de Tarjeta
inputNumber.addEventListener("input", () => {
    cardNumber.innerText = inputNumber.value;

    if (inputNumber.value.length === 0) {
        cardNumber.innerText = "0000 0000 0000 0000";
    }
})

// Event Listener para el campo de Mes de Expiración
inputMonth.addEventListener("input", () => {
    cardMonth.innerText = inputMonth.value;

    if (inputMonth.value.length === 0) {
        cardMonth.innerText = "00";
    }
})

// Event Listener para el campo de Año de Expiración
inputYear.addEventListener("input", () => {
    cardYear.innerText = inputYear.value;

    if (inputYear.value.length === 0) {
        cardYear.innerText = "00";
    }
})

// Event Listener para el campo de CVC
inputCVC.addEventListener("input", () => {
    cardCVC.innerText = inputCVC.value;

    if (inputCVC.value.length === 0) {
        cardCVC.innerText = "000";
    }
})

// Event Listener para el envío del formulario
form.addEventListener("submit", (e) => {
    e.preventDefault();
    form.classList.add("disabled");
    thankYou.classList.remove("disabled");
})

// Event Listener para el botón "Continuar"
buttonContinue.addEventListener("click", () => {
    form.classList.remove("disabled");
    thankYou.classList.add("disabled");
    form.reset();
    cardName.innerText = "Jane Appleseed";
    cardNumber.innerText = "0000 0000 0000 0000";
    cardMonth.innerText = "00";
    cardYear.innerText = "00";
    cardCVC.innerText = "000";
})
