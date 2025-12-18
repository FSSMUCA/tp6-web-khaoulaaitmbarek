const form = document.getElementById("calcForm");
const errorDiv = document.getElementById("error");
const historyList = document.getElementById("historyList");

let operationsHistory = [];

form.addEventListener("submit", function(event) {

    const nombreA = Number(document.getElementById("nombreA").value);
    const nombreB = Number(document.getElementById("nombreB").value);
    const operation = document.getElementById("operation").value;

    errorDiv.textContent = ""; 

    if (isNaN(nombreA) || isNaN(nombreB)) {
        errorDiv.textContent = "Veuillez entrer des nombres valides.";
        return;
    }

    if (operation === "/" && nombreB === 0) {
        errorDiv.textContent = "Division par zéro interdite.";
        return;
    }

    
    let result;
    switch(operation) {
        case "+": result = nombreA + nombreB; break;
        case "-": result = nombreA - nombreB; break;
        case "*": result = nombreA * nombreB; break;
        case "/": result = nombreA / nombreB; break;
    }

    const operationStr = `${nombreA} ${operation} ${nombreB} = ${result}`;
    operationsHistory.push(operationStr);
    updateHistory();
});

function updateHistory() {
    historyList.innerHTML = "";
    operationsHistory.forEach(op => {
        const li = document.createElement("li");
        li.textContent = op;
        historyList.appendChild(li);
    });
}
