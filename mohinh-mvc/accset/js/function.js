// let value =document.querySelector(".btn-quantity").value;
let value = 0;

function incrementValue() {
    value++;
    let displayElement = document.querySelector(".btn-quantity");
    let currentQuantity = parseInt(displayElement.value);
    let newQuantity = currentQuantity + 1;

    displayElement.value = newQuantity;
}

function decrementValue() {

        value--;
        let displayElement = document.querySelector(".btn-quantity");
        let currentQuantity = parseInt(displayElement.value);
        let newQuantity = currentQuantity - 1;

        displayElement.value = newQuantity;

}