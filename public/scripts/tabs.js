
const artistName =  document.querySelectorAll(".artistName");
const songList = document.querySelectorAll(".songList");
console.log (artistName.length);

for (i = 0; i < artistName.length; i++) {
    artistName[i].addEventListener("click", showSongs);
    
}

function showSongs () {
    let showThis = this;
    for (i = 0; i < artistName.length; i++) {
        songList[i].style.display = "none";        
    }
    if (showThis.nextElementSibling.style.display === "block") {
        showThis.nextElementSibling.setAttribute("style", "display: none;");   
    }else {
        showThis.nextElementSibling.setAttribute("style", "display: block;");
    }
}


