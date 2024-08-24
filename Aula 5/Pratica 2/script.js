function getCamposTabelaByClass(classe) {
    let seletor = "." + classe;
    return tdValores = document.querySelectorAll(seletor);
}

function getCamposTabelaByID(id) {
    return document.querySelectorAll(id);
}

function getCamposTabelaByName(name) {
    return document.getElementsByName(name);
}

function setElementHiddenFalse(element) {
    element.hidden = false;
}

function setValorCamposTabela(campoTabela,valor) {
    campoTabela.textContent = String(valor);
}

function setNotaAlunos() { //Metodo responsavel pela geracao random das notas
    getCamposTabelaByClass("nota").forEach((element) => setValorCamposTabela(element,Math.floor(Math.random() * 11)));
}

//Metodos responsaveis pela criacao da linha totalizadora inferior da media de cada nota
function constructLinhaInferior() {
    setElementHiddenFalse(document.getElementById("trMediaNotas"));
}

function setMediaNota() {
    var valorMediaAluno = 0;

    constructLinhaInferior();

    for (let i = 1 ; i < 10 ; i++) {
        valorMediaNotas = 0;

        getCamposTabelaByID("#nota"+i).forEach((element) => valorMediaNotas += parseFloat(element.textContent.trim()));

        valorMediaNotas = valorMediaNotas / 6;

        getCamposTabelaByClass("mediaNotas" + i).forEach((element) => setValorCamposTabela(element,parseFloat(valorMediaNotas.toFixed(2))));
    }   
}

//Metodos responsaveis pela criacao da linha totalizadora da media de cada aluno
function constructLinhaMediaAlunos() {
    setElementHiddenFalse(document.getElementById("headerMediaAlunos"));

    getCamposTabelaByClass("mediaAluno").forEach(element => setElementHiddenFalse(element));
}

function setMediaNotaAluno() {
    constructLinhaMediaAlunos();

    arrayAlunos = new Array(6);

    var elementos = document.getElementsByClassName('aluno');

    var arrayAlunos = Array.from(elementos).map(elemento => elemento.textContent.trim());

    for (let i = 0 ; i < 6 ; i++) {
        valorMediaAluno = 0;
        valorTotalNotasAluno = 0;
        aluno = arrayAlunos[i];

        var elementosNotas = getCamposTabelaByName("nota" + aluno);
        var notas = Array.from(elementosNotas).map(elemento => elemento.textContent.trim());
        notas.forEach((element) => valorTotalNotasAluno += parseFloat(element));

        valorMediaAluno = valorTotalNotasAluno / 9;

        getCamposTabelaByID("#media" + aluno).forEach((element) => setValorCamposTabela(element,parseFloat(valorMediaAluno.toFixed(2))));

    }
}   
