document.getElementById("icon-menu").addEventListener("click",mostrar_menu);

function mostrar_menu(){
    document.getElementById("move-content").classList.toggle('move-container-all')
    document.getElementById("show_menu").classList.toggle('mostrar_menu')
}