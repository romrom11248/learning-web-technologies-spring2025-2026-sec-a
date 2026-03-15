const openGameButton = document.getElementById("openGame");

let cells = [];
let messageText;
let resetButton;
let scoreXText;
let scoreOText;

let boardState = ["","","","","","","","",""];
let activePlayer = "X";
let gameActive = true;

let scoreX = 0;
let scoreO = 0;

const winPatterns = [
    [0,1,2],
    [3,4,5],
    [6,7,8],
    [0,3,6],
    [1,4,7],
    [2,5,8],
    [0,4,8],
    [2,4,6]
];

openGameButton.addEventListener("click", createGame);

function createGame(){
    openGameButton.style.display = "none";

    const style = document.createElement("style");
    style.textContent = `
        .cell{
            width: 80px;
            height: 80px;
            border: 2px solid black;
            font-size: 50px;
            cursor: pointer;
            text-align: center;
            line-height: 80px;
        }

        .cell.win{
            background-color: rgb(238, 221, 144);
        }


        .mark{ animation: pop 0.3s ease-out; }
        @keyframes pop {
        0% { transform: scale(0.5); }
        50% { transform: scale(1.2); }
        100% { transform: scale(1); }
        }



        #Container{
            display: grid;
            grid-template-columns: repeat(3,80px);
            width: 230px;
            margin: auto;
        }
    `;
    document.head.appendChild(style);

    const Container = document.createElement("div");
    Container.id = "Container";

    for(let i = 0; i < 9; i++){
        const cell = document.createElement("div");
        cell.setAttribute("cellIndex", i);
        cell.className = "cell";
        Container.appendChild(cell);
    }

    document.body.appendChild(Container);

    const infoDiv = document.createElement("div");
    infoDiv.style.textAlign = "center";

    const br = document.createElement("br");
    infoDiv.appendChild(br);

    const playerHeading = document.createElement("h3");
    playerHeading.id = "player";
    infoDiv.appendChild(playerHeading);

    const scorePara = document.createElement("p");
    scorePara.innerHTML = `
        X Score: <span id="scoreX">0</span> <br>
        O Score: <span id="scoreO">0</span>
    `;
    infoDiv.appendChild(scorePara);

    const button = document.createElement("button");
    button.id = "reset";
    button.textContent = "Reset Game";
    infoDiv.appendChild(button);

    document.body.appendChild(infoDiv);

    cells = document.querySelectorAll(".cell");
    messageText = document.getElementById("player");
    resetButton = document.getElementById("reset");
    scoreXText = document.getElementById("scoreX");
    scoreOText = document.getElementById("scoreO");

    startGame();
}

function startGame(){
    cells.forEach(cell => cell.addEventListener("click", turn));
    resetButton.addEventListener("click", resetGame);
    messageText.textContent = "Current Player: " + activePlayer;
}

function turn(){
    const position = this.getAttribute("cellIndex");
    cells[position].classList.add("mark");

    if(boardState[position] !== "" || !gameActive){
        return;
    }

    boardState[position] = activePlayer;
    this.textContent = activePlayer;

    checkGame();
}

function changeTurn(){
    activePlayer = activePlayer === "X" ? "O" : "X";
    messageText.textContent = "Current Player: " + activePlayer;
}

function checkGame(){
    let roundWon = false;
    let winCells;

    for(let i = 0; i < winPatterns.length; i++){
        const pattern = winPatterns[i];
        const cellA = boardState[pattern[0]];
        const cellB = boardState[pattern[1]];
        const cellC = boardState[pattern[2]];

        if(cellA === "" || cellB === "" || cellC === ""){
            continue;
        }

        if(cellA === cellB && cellB === cellC){
            roundWon = true;
            winCells = pattern;
            break;
        }
    }

    if(roundWon){
        messageText.textContent = activePlayer + " Wins!";

        for(let i = 0; i < winCells.length; i++){
            cells[winCells[i]].classList.add("win");
        }

        if(activePlayer === "X"){
            scoreX++;
            scoreXText.textContent = scoreX;
        }
        else{
            scoreO++;
            scoreOText.textContent = scoreO;
        }

        gameActive = false;
    }
    else if(!boardState.includes("")){
        messageText.textContent = "It's a Draw!";
        gameActive = false;
    }
    else{
        changeTurn();
    }
}

function resetGame(){
    boardState = ["","","","","","","","",""];
    gameActive = true;
    activePlayer = "X";

    messageText.textContent = "Current Player: " + activePlayer;

    cells.forEach(cell => {
        cell.textContent = "";
        cell.classList.remove("win");
    });
}