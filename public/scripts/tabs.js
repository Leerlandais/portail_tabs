
const artistName =  document.querySelectorAll(".artistName");
const songList = document.querySelectorAll(".songList");
const addWindow = document.querySelectorAll(".addWindow");
const tabArtName = document.querySelectorAll(".tabArtName");
const songSlugger = document.querySelectorAll("#songSlugger");
const songNamer = document.querySelectorAll("#songNamer");
console.log(songNamer.length);
console.log(songSlugger.length);
console.log(tabArtName.length);

for (let i = 0; i < songNamer.length; i++) {
    songNamer[i].addEventListener("input", updateSlug);
}

for (let i = 0; i < artistName.length; i++) {
    artistName[i].addEventListener("click", showSongs);
    
}
for (let i = 0; i < tabArtName.length; i++) {
    tabArtName[i].addEventListener("click", showForm);
    
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

function showForm () {
    let showThis = this;
    for (i = 0; i < tabArtName.length; i++) {
        addWindow[i].style.display = "none";        
    }
    if (showThis.nextElementSibling.style.display === "block") {
        showThis.nextElementSibling.setAttribute("style", "display: none;");   
    }else {
        showThis.nextElementSibling.setAttribute("style", "display: block;");
    }
}

function updateSlug() {
    let changedName = this;
    let slugBefore = changedName.value;
    let slugAfter = slugBefore.toUpperCase();
    changedName.nextElementSibling.value = slugAfter;

}
