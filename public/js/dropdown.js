function alterarVisibilidade(seletor, mostrar) {
    var div = document.querySelector(seletor);
    div.style.display = mostrar ? 'block' : 'none';
}
