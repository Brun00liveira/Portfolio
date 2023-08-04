document.addEventListener('DOMContentLoaded',function(event){

    var dataText = ["Bruno Oliveira","Web Developer",];

    function typeWriter(text, i, fnCallback) {
      if (i < (text.length)) {
       document.querySelector("h1").innerHTML = text.substring(0, i+1) +'<span aria-hidden="true"></span>';
        setTimeout(function() {
          typeWriter(text, i + 1, fnCallback)
        }, 100);
      }
      else if (typeof fnCallback == 'function') {
        setTimeout(fnCallback, 700);
      }
    }
     function StartTextAnimation(i) {
       if (typeof dataText[i] == 'undefined'){
          setTimeout(function() {
            StartTextAnimation(0);
          }, 2000);
       }
      if (i < dataText[i].length) {
       typeWriter(dataText[i], 0, function(){
         StartTextAnimation(i + 1);
       });
      }
    }
    StartTextAnimation(0);
  });

  setTimeout(function() {
    document.getElementById('sobre').scrollIntoView({ behavior: 'smooth' });
  }, 2000);

  let scrollPosition = 0;

  function alterarVisibilidade(seletor, mostrar) {
    var div = document.querySelector(seletor);
    div.style.display = mostrar ? 'block' : 'none';

    if (mostrar) {

        scrollPosition = window.scrollY;
    }
}




