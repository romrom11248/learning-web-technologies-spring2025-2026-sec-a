const quantity=document.getElementById("quantity");

const display=document.getElementById("display");

const unitPrice=1000;

function calculate(){
    let Quantity=quantity.valueAsNumber;

    if(isNaN(Quantity)){
        display.value="Quantity has to be a number";
        Quantity=0;

    }if(Quantity<0){
        display.value="Error occurred";
        Quantity=0;
    }
        let x=Quantity*unitPrice;
        display.value="Total price "+ x+" tk";
        //display.value.style.fontSize="1.4rem";
        if(x>1000){
            alert("Customer is eligible for gift coupon!");
        }
    

}

quantity.addEventListener("input",calculate);
calculate();