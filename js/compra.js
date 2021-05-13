error(elemento, `Debes introducir destinatario`);
}
if (elemento.validity.patternMismatch) {
    error(elemento, `El nombre debe tener esta estructura dos o tres letras mayúsculas correspondientes al estado, un guionbajo, el nombre de la ciudad en minúsculas, dos puntos, y el código de distrito de 4 digitos (ej. NM_alburquerque:1234)`);
}

return false;
}
return true;
}

function composicion() {
let elemento = document.getElementById("composicion");
if (!elemento.checkValidity()) {
if (elemento.validity.valueMissing) {
    error(elemento, `Debes introducir composicion `);
}
if (elemento.validity.patternMismatch) {
    error(elemento, `El nombre debe tener esta estructura una cantidad en gramos seguida de dos conjuntos de una o dos letras seguidas o no de un número. (ej. 200gC3OH7)`);
}

return false;
}
return true;
}


function num_cuen() {
let letras = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "Ñ", "O", "P", "Q", "R", "S", "U", "V", "W", "X", "Y", "Z"];
let elemento = document.getElementById("num_cuen");
if (!elemento.checkValidity()) {
if (elemento.validity.valueMissing) {
    error(elemento, `Debes introducir numero cuenta `);
}
if (elemento.validity.patternMismatch) {
    error(elemento, `El nombre  debe tener esta dos letras,dos digitos,un guion,dos digitos de control`);
}

return false;
} else {
let sumaletras = 0;

sumaletras += 1 + letras.indexOf(document.getElementById("num_cuen").value.substring(0, 1));
sumaletras += 1 + letras.indexOf(document.getElementById("num_cuen").value.substring(1, 2));
console.log(sumaletras);
let sumanumeros = document.getElementById("num_cuen").value.substring(2, 4);
console.log(sumanumeros);
if (sumaletras != sumanumeros) {
    error(elemento, `error en los dos primeros numeros`);
    return false;


} else {

    let numcontrol1 = document.getElementById("num_cuen").value.substring(18, 19);
    console.log(numcontrol1);
    let sumacuenta1 = parseInt(document.getElementById("num_cuen").value.substring(5, 6));
    console.log(sumacuenta1);
    sumacuenta1 += parseInt(document.getElementById("num_cuen").value.substring(6, 7));
    console.log(sumacuenta1);
    sumacuenta1 += parseInt(document.getElementById("num_cuen").value.substring(7, 8));
    console.log(sumacuenta1);
    sumacuenta1 += parseInt(document.getElementById("num_cuen").value.substring(8, 9));
    console.log(sumacuenta1);
    sumacuenta1 += parseInt(document.getElementById("num_cuen").value.substring(9, 10));
    console.log(sumacuenta1);
    sumacuenta1 += parseInt(document.getElementById("num_cuen").value.substring(10, 11));
    console.log(sumacuenta1);
    sumacuenta1 = Math.floor(sumacuenta1 / 6);
    console.log(sumacuenta1);
    if (sumacuenta1 != numcontrol1) {
       error(elemento, "error en el penultimo numero de control");
        return false;
    } else {
        let numcontrol2 = document.getElementById("num_cuen").value.substring(19, 20);
        console.log(numcontrol2);
        let sumacuenta2 = parseInt(document.getElementById("num_cuen").value.substring(11, 12));
        console.log(sumacuenta2);
        sumacuenta2 += parseInt(document.getElementById("num_cuen").value.substring(12, 13));
        console.log(sumacuenta2);
        sumacuenta2 += parseInt(document.getElementById("num_cuen").value.substring(13, 14));
        console.log(sumacuenta2);
        sumacuenta2 += parseInt(document.getElementById("num_cuen").value.substring(14, 15));
        console.log(sumacuenta2);
        sumacuenta2 += parseInt(document.getElementById("num_cuen").value.substring(15, 16));
        console.log(sumacuenta2);
        sumacuenta2 += parseInt(document.getElementById("num_cuen").value.substring(16, 17));
        console.log(sumacuenta2);
        sumacuenta2 = Math.floor(sumacuenta2 / 6);
        console.log(sumacuenta2);
        if (sumacuenta2 != numcontrol2) {
            error(elemento, "error en el ultimo numero de control");
            return false;
        } else {
            menfinal = document.getElementById("num_cuen").value;
            menfinal = menfinal.replace('-', '');
            let p = document.getElementById("menfinal");
            p.innerHTML = menfinal;
            

        }
    }

}



}

return true;

}




function validar(e) {
borrarError();
if (cocinero() && destinatario() && composicion() && num_cuen() && confirm("Pulsa aceptar si deseas enviar el formulario")) {
e.preventDefault();
return true;

} else {
e.preventDefault();
return false;
}
}





function borrarError() {
let div = document.getElementById("mensaje");
div.innerHTML = "";
div.style.display = "none";
}


function error(elemento, mensaje) {
let div = document.getElementById("mensaje");
div.innerHTML = mensaje;
div.style.display = "block";
elemento.focus();
}