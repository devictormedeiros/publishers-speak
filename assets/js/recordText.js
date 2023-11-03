var button = document.getElementById("recordText");
var buttonNavigation = document.getElementById("btn-navigation-voice");
button.addEventListener("touchend", function(event) {
  event.preventDefault();
  startVoiceSearch(event);
});
button.addEventListener("click", startVoiceSearch);
if (!("webkitSpeechRecognition" in window) || isIOS()) {
  button.style.display = "none";
  buttonNavigation.style.display = "none";
}

function isIOS() {
  return /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
}
function startVoiceSearch(event) {
  event.preventDefault();
  
  var iconRecord = document.querySelector(".icon-record");
  var iconRecording = document.querySelector(".icon-recording");

  // Verificar se a API de reconhecimento de voz está disponível
  if ("webkitSpeechRecognition" in window) {
    var recognition = new webkitSpeechRecognition();
    recognition.lang = "pt-BR"; // Define o idioma para português brasileiro
    recognition.onstart = function () {

      // Esconder ícone de microfone e mostrar o ícone de gravação
      iconRecord.style.display = "none";
      iconRecording.style.display = "flex"; 
      // Mostrar os pontos animados ao iniciar a gravação
      document
        .querySelectorAll(".dot")
        .forEach((dot) => (dot.style.opacity = "1"));
    };

    recognition.onresult = function (event) {
      if (event.results.length > 0) {
        // Coloca o resultado no campo de texto
        document.getElementById("input-search").value =
          event.results[0][0].transcript;
      }
    };

    recognition.onend = function () {
      // Esconder ícone de gravação e mostrar o ícone de microfone
      iconRecording.style.display = "none";
      iconRecord.style.display = "block";

      // Esconder os pontos animados ao finalizar a gravação
      document
        .querySelectorAll(".dot")
        .forEach((dot) => (dot.style.opacity = "0"));
    };

    recognition.onerror = function (event) {
      console.error("Erro no reconhecimento de voz:", event.error);

      // Em caso de erro, esconder ícone de gravação e mostrar o ícone de microfone
      iconRecording.style.display = "none";
      iconRecord.style.display = "block";

      document
        .querySelectorAll(".dot")
        .forEach((dot) => (dot.style.opacity = "0"));
    };

    // Iniciar o reconhecimento de voz
    recognition.start();
  }
}

function startVoiceNavigation() {
  if ("webkitSpeechRecognition" in window) {
    var recognition = new webkitSpeechRecognition();
    buttonNavigation.querySelector(".icon-record").style.display = "none";
    buttonNavigation.querySelector(".icon-recording").style.display = "flex";
    recognition.lang = "pt-BR";

    recognition.onresult = function (event) {
      buttonNavigation.querySelector(".icon-record").style.display = "flex";
      buttonNavigation.querySelector(".icon-recording").style.display = "none";
      if (event.results.length > 0) {
        var result = event.results[0][0].transcript.toLowerCase();

        if (/(buscar|pesquisar|procurar| procurar) (.+)/.test(result)) {
          let match = result.match(
            /(buscar|pesquisar|saber sobre|procurar) (.+)/
          );
          let keyword = match[2];
          window.open(
            "https://www.agrimidia.com.br/?s=" + encodeURIComponent(keyword),
            "_blank"
          );
        } else if (
          /(ir|acessar|navegar|ver).*(início|home|principal)/.test(result)
        ) {
          window.open("https://staging-salvadorfm.seox.com.br", "_blank");
        } else if (/(ir|acessar|navegar|ver).*apresentadores/.test(result)) {
          window.open(
            "https://staging-salvadorfm.seox.com.br/apresentador",
            "_blank"
          ); // Navegar para a página de apresentadores em nova guia
        } else if (/(rolar|subir).*(cima|acima)/.test(result)) {
          window.scrollBy(0, -400); // Rolar a página para cima
        } else if (
          /(ir|acessar|navegar|ver).*rádio.*(ao vivo|vivo)?/.test(result) ||
          /(ir|acessar|navegar|ver).*(ao vivo|vivo)?.*rádio/.test(result)
        ) {
          window.open(
            "https://staging-salvadorfm.seox.com.br/radio-ao-vivo",
            "_blank"
          );
        } else if (/(rolar|role|descer).*(baixo|abaixo)/.test(result)) {
          window.scrollBy(0, 400); // Rolar a página para baixo
        } else {
          alert("Comando não reconhecido: " + result);
        }
      }
    };

    recognition.onerror = function (event) {
      console.error("Erro no reconhecimento de voz:", event.error);
      buttonNavigation.querySelector(".icon-record").style.display = "flex";
      buttonNavigation.querySelector(".icon-recording").style.display = "none";
    };

    recognition.start();
  } else {
    alert("Seu navegador não suporta navegação por voz.");
  }
}
