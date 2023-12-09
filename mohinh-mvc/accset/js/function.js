let numberInput = document.querySelector(".btn-quantity");
let currentValue = parseInt(numberInput.value); // Chuyển đổi giá trị thành số nguyên

let minValue = 0;
let maxValue = parseInt(numberInput.max); // Chuyển đổi giá trị tối đa thành số nguyên

function incrementValue() {
    if (currentValue < maxValue) {
        let displayElement = document.querySelector(".btn-quantity");
        let currentQuantity = parseInt(displayElement.value);
        let newQuantity = currentQuantity + 1;
        displayElement.value = newQuantity;
        currentValue = newQuantity; // Cập nhật giá trị hiện tại
    }
}

function decrementValue() {
    if (currentValue > minValue) {
        let displayElement = document.querySelector(".btn-quantity");
        let currentQuantity = parseInt(displayElement.value);
        let newQuantity = currentQuantity - 1;
        displayElement.value = newQuantity;
        currentValue = newQuantity; // Cập nhật giá trị hiện tại
    }
}
