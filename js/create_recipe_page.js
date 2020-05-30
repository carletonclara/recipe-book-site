console.log("Hello world");

function appendInstruction(){
    const newInput = document.createElement("input");
    const inst = document.getElementById("instructions");
    inst.appendChild(newInput);
}

const input = document.getElementById("instructions");
input.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        console.log("called");
    }
});