document.getElementById("agregar").onclick = function () {
    let inputNum = document.getElementById("num");
    let selectIngresados = document.getElementById("ingresados");

    let value = inputNum.value.trim();
    if (value === "" || isNaN(value)) {
        alert("Ingrese un número válido.");
        return;
    }

    let option = document.createElement("option");
    option.text = value;
    option.value = value;
    selectIngresados.appendChild(option);

    inputNum.value = "";
    inputNum.focus();
};

document.getElementById("frmNumeros").onsubmit = function () {
    let opciones = document.getElementById("ingresados").selectedOptions;
    if (opciones.length < 2) {
        alert("Debe seleccionar al menos 2 números.");
        return false;
    }
};