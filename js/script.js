// Definir os vídeos disponíveis
var videos = ["suporte/aula1.mp4", "suporte/aula2.mp4"];


// Inicializar o índice do vídeo atual
var currentVideoIndex = 0;

// Função para carregar o vídeo atual
function loadCurrentVideo() {
    var videoPlayer = document.querySelector('.video-player video');
    videoPlayer.src = videos[currentVideoIndex];
}

// Função para avançar para o próximo vídeo
function nextVideo() {
    currentVideoIndex = (currentVideoIndex + 1) % videos.length;
    loadCurrentVideo();
}

// Função para retroceder para o vídeo anterior
function previousVideo() {
    currentVideoIndex = (currentVideoIndex - 1 + videos.length) % videos.length;
    loadCurrentVideo();
}

// Adicionar eventos de clique aos botões de próximo e recuar
document.querySelector('.proximo button').addEventListener('click', nextVideo);
document.querySelector('.recuar button').addEventListener('click', previousVideo);

// Carregar o primeiro vídeo ao carregar a página
loadCurrentVideo();

// Função para carregar o vídeo atual e atualizar o título
function loadCurrentVideo() {
    var videoPlayer = document.querySelector('.video-player video');
    var videoTitle = document.querySelector('.video h2');
    videoPlayer.src = videos[currentVideoIndex];
    videoTitle.textContent = videos[currentVideoIndex].replace(/^.*[\\\/]/, '').split('.').slice(0, -1).join('.');
}






let description = document.getElementById("description")
let state = document.getElementById("state")

function toggleVisibility(){
    return state.innerHTML=="...mostrar mais" ? showMore() : showLess()
}
function showLess(){
    description.style.height = "130px"; 
    state.innerHTML = "...mostrar mais"
}
function showMore(){
    description.style.height = "auto"; 
    state.innerHTML = "mostrar menos"
}
