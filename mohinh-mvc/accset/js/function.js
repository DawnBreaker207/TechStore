// let value =document.querySelector(".btn-quantity").value;
let value =0;
const minValue=0;
function incrementValue(){
    value ++;
    let displayElement= document.querySelector(".btn-quantity");
    displayElement.innerHTML= value;
}
function decrementValue(){
    if(value > minValue){
    value --;
    let displayElement= document.querySelector(".btn-quantity");
    displayElement.innerHTML= value;
    }
}