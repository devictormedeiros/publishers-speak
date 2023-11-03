 document.addEventListener("DOMContentLoaded", function () {
      if (!window.speechSynthesis) {
        console.error("Speech Synthesis não suportado neste navegador.");
        // Desabilite o botão de alternância ou informe o usuário aqui, se necessário
        return;
      }

      const toggleBtn = document.getElementById("toggle-speech");
      const contentDiv = document.querySelector(".single-content");
      let isSpeaking = false;
      let utterance;

      let availableVoices = [];

      speechSynthesis.onvoiceschanged = function () {
        availableVoices = speechSynthesis.getVoices();
      };

      function toggleSpeech() {
        if (isSpeaking && speechSynthesis.speaking && !speechSynthesis.paused) {
          speechSynthesis.pause();
          toggleBtn.classList.remove("listening-content");
        } else if (isSpeaking && speechSynthesis.paused) {
          speechSynthesis.resume();
          toggleBtn.classList.add("listening-content");
        } else {
          utterance = new SpeechSynthesisUtterance(contentDiv.innerText);
          utterance.lang = "pt-BR";
          utterance.volume = 1;
          utterance.rate = 1;
          utterance.pitch = 0.1;
          utterance.voice = availableVoices[1]; // Certifique-se de que esta voz existe!
          utterance.onstart = () => {
            isSpeaking = true;
            toggleBtn.classList.add("listening-content");
          };

          utterance.onend = () => {
            isSpeaking = false;
            toggleBtn.classList.remove("listening-content");
          };

          speechSynthesis.speak(utterance);
        }
      }

      // Tente forçar o carregamento das vozes
      speechSynthesis.getVoices();

      toggleBtn.addEventListener("click", toggleSpeech);
      window.addEventListener(
        "beforeunload",
        speechSynthesis.cancel.bind(speechSynthesis)
      );
    });