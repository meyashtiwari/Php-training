function addButtonClicked() {
    let totalDivs = document.querySelectorAll(".unique");
    let countOfDivs = totalDivs.length;

    let clonedDiv = totalDivs[0].cloneNode(true);
    clonedDiv.id = countOfDivs + 1;

    let buttons = clonedDiv.getElementsByTagName("button");
    let addButton = buttons[0];
    let removeButton = buttons[1];

    addButton.id += "" + clonedDiv.id;
    removeButton.id += "" + clonedDiv.id;  

    removeButton.classList.remove("hidden");
    
    let submitButton = document.getElementById("submit-button");
    let parentDiv = submitButton.parentNode;
    parentDiv.insertBefore(clonedDiv, submitButton);
}

function removeButtonClicked(id) {
    let removeButton = document.getElementById(id);
    document.getElementById(removeButton.parentNode.parentNode.id).remove(); 
}