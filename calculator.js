const openBtn = document.getElementById("openCalcBtn");
const app = document.getElementById("app");

let calcCreated = false;  

openBtn.addEventListener("click", function () {
  if (calcCreated) return;  
  calcCreated = true;

  createCalculator();
});

function createCalculator(){
    //div for the entire cal as a container
    const calc=document.createElement("div");
    calc.className="calc";
    calc.id="calculator";
//ekta display
    const display=document.createElement("span");
    display.className="calcDisplay";
    display.id="Calc_Display";
    display.textContent=0;

    const btn=document.createElement("div");
    btn.className = "calc-buttons";
    btn.id = "calcButtons";

    calc.appendChild(display);
    calc.appendChild(btn);
    app.appendChild(calc);

    const buttons = [
        "7", "8", "9", "/",
        "4", "5", "6", "*",
        "1", "2", "3", "-",
        "0", ".", "=", "+",
        "C"
      ];

      let firstNum = "";
      let secondNum = "";
      let operator = "";
      let isSecond = false;

      for (let i = 0; i < buttons.length; i++) {
        const b = document.createElement("button");
        b.type = "button";
        b.textContent = buttons[i];

        b.id = "btn_" + buttons[i] + "_" + i;
        b.name = "btn_" + buttons[i];
        b.className="BUTTON";
        b.style.backgroundColor="yellow";


        btn.appendChild(b);

        if ((i + 1) % 4 === 0) {
            btn.appendChild(document.createElement("br"));
        }

        b.addEventListener("click", function () {
            const val = b.textContent;
      
            // forr Clear
            if (val === "C") {
              firstNum = "";
              secondNum = "";
              operator = "";
              isSecond = false;
              display.textContent = "0";
              return;
            }

            if (val === "=") {

                let result = operate(firstNum, secondNum, operator);

                display.textContent = result;

                firstNum = result;
                secondNum = "";
                operator = "";
                isSecond = false;

                return;
            }
            if (val === "+" || val === "-" || val === "*" || val === "/") {

                operator = val;
                isSecond = true;

                display.textContent = firstNum + " " + operator;

                return;
            }

            if (!isSecond) {
                firstNum += val;
                display.textContent = firstNum;
            } 
            else {
                secondNum += val;
                display.textContent = firstNum + " " + operator + " " + secondNum;
            }

        });

    }

    // Operations

function operate(a,b,op){
    let num1=parseFloat(a);
    let num2=parseFloat(b);

    if(op=== "+") return num1+ num2;
    if(op=== "-") return num1- num2;
    if(op=== "*") return num1* num2;
    if(op=== "/")  return num1/ num2;
    

}
}
        
    



