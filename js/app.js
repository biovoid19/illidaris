// Variables generales
let audios = [
  'assets/audio/diez.mp3',
  'assets/audio/theme.mp3',

];
let currentVolume = 0.4;
let index = 0;
let sound = new Audio(audios[index]);


// Función que controla la reproducción de las canciones
function reproducirCancion() {
  stopSound();
  index++;
  if (index >= audios.length) {
    index = 0;
  }
  sound.src = audios[index];
  sound.volume = currentVolume;
  sound.play();
  sound.addEventListener('ended', reproducirCancion);
}


// Función que detiene las canciones
function stopSound() {
  if (sound.currentTime > 0) {
    sound.pause();
    sound.currentTime = 0;
    sound.removeEventListener('ended', reproducirCancion);
  }
}


// Función que controla el botón play/pause del reproductor
function player() {
  let etiqueta = document.getElementById('player');
  let play = 'bi-play-circle-fill';
  let pause = 'bi-pause-circle-fill';
  if (sound.paused) {
    sound.play();
    etiqueta.classList.remove(play);
    etiqueta.classList.add(pause);
  } else {
    sound.pause();
    etiqueta.classList.remove(pause);
    etiqueta.classList.add(play);
  }
}


// Función que controla el botón "Anterior"
function back() {
  stopSound();
  index--;
  if (index < 0) {
    index = audios.length - 1;
  }
  sound.src = audios[index];
  sound.volume = currentVolume;
  sound.play();
  sound.addEventListener('ended', reproducirCancion);
}


// Función que controla el botón "Siguiente"
function next() {
  stopSound();
  index++;
  if (index >= audios.length) {
    index = 0;
  }
  sound.src = audios[index];
  sound.volume = currentVolume;
  sound.play();
  sound.addEventListener('ended', reproducirCancion);
}


// Función que permite manejar el volumen de la pista de audio
function controlarVolumen() {
  let volumen = document.getElementById('volumen').value;
  if (volumen >= 0 && volumen <= 100) {
    let volumenDecimal = volumen / 100;
    sound.volume = volumenDecimal;
    currentVolume = volumenDecimal;
  } else {
    console.error('El valor del volumen debe estar entre 0 y 100.');
  }
}


// Llama a la función reproducirCancion para que se reproduzca automáticamente la primera canción
reproducirCancion();
