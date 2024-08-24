var resultado = 0;

function getValorUm() {
    return parseFloat(document.getElementById("valorum").value);
}

function getValorDois() {
    return parseFloat(document.getElementById("valordois").value);
}

function somar() {
    valorUm   = getValorUm();
    valorDois = getValorDois();
    resultado = valorUm + valorDois;
    mostrarResultado();
    comportamentoResultado();
}

function subtrair() {  
    valorUm   = getValorUm();
    valorDois = getValorDois();
    resultado = valorUm - valorDois;
    mostrarResultado();
    comportamentoResultado();
}

function multiplicar() {  
    valorUm   = getValorUm();
    valorDois = getValorDois();
    resultado = valorUm * valorDois;
    mostrarResultado();
    comportamentoResultado();
}

function dividir() {   
    valorUm   = getValorUm();
    valorDois = getValorDois();
    resultado = valorUm / valorDois;
    mostrarResultado();
    comportamentoResultado();
}

function mostrarResultado() {
    document.getElementById("resultado").value = resultado;
}

function comportamentoResultado() {
    if (resultado < 0) {
        document.getElementById("resultado").style.backgroundColor = "red";
    } else if (resultado > 0) {
        document.getElementById("resultado").style.backgroundColor = "green";
    } else {
        document.getElementById("resultado").style.backgroundColor = "gray";
    }
}
