
const artistName =  document.querySelectorAll(".artistName");
const songWindow = document.querySelectorAll(".songWindow");
const songSlugger = document.querySelectorAll("#songSlugger");
const songNamer = document.querySelectorAll("#songNamer");
const showSlug = document.getElementById("showSlug");


for (i = 0; i < artistName.length; i++) {
    artistName[i].addEventListener("click", showSongs);
    
}
for (let i = 0; i < songNamer.length; i++) {
    songNamer[i].addEventListener("input", updateSlug);
}

function showSongs () {
    let showThis = this;
    for (i = 0; i < artistName.length; i++) {
        songWindow[i].style.display = "none";        
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
    let slugArray = [];


for (let i = 0; i < slugBefore.length; i++) {
    if (/[!@#$%'^"=:<>&,;*()_+]/.test(slugBefore[i])) {
        slugArray.push("_");
    }else {
    slugBefore[i] === " " ? slugArray.push("-") :
     slugBefore[i] === "é" ? slugArray.push("e") :
      slugBefore[i] === "è" ? slugArray.push("e") :
       slugBefore[i] === "à" ? slugArray.push("a") :
        slugBefore[i] === "ç" ? slugArray.push("c") :
         slugBefore[i] === "?" ? slugArray.push("_qm_") :
          slugBefore[i] === "/" ? slugArray.push("_slash_") :
           slugBefore[i] === "ù" ? slugArray.push("u") :
            slugBefore[i] === "." ? slugArray.push("_fs_") : slugArray.push(slugBefore[i].toLowerCase());
    }
    let slugAfter = slugArray.join("");
    changedName.nextElementSibling.value = slugAfter;
    showSlug.textContent = slugAfter;
}
}

const scrollToBottom = (id, duration) => {
    const element = document.querySelector(id);
    const scrollHeight = element.scrollHeight;
    const scrollStep = (duration / 1000);
    let count = 0;

    const scrollInterval = setInterval(function(){
        if (element.scrollTop + element.clientHeight < scrollHeight) {
            element.scrollBy(0, scrollStep);

            count++;
        } else {
            clearInterval(scrollInterval);
        }
    }, 200);
};

/*
const artistName =  document.querySelectorAll(".artistName");
const songList = document.querySelectorAll(".songList");
const addWindow = document.querySelectorAll(".addWindow");
const tabArtName = document.querySelectorAll(".tabArtName");
const songSlugger = document.querySelectorAll("#songSlugger");
const songNamer = document.querySelectorAll("#songNamer");
const showSlug = document.getElementById("showSlug");
// console.log(songNamer.length);
// console.log(songSlugger.length);
// console.log(tabArtName.length);

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
    let slugArray = [];


for (let i = 0; i < slugBefore.length; i++) {
    if (/[!@#$%'^"=:<>&,;*()_+]/.test(slugBefore[i])) {
        slugArray.push("_");
    }else {
    slugBefore[i] === " " ? slugArray.push("-") :
     slugBefore[i] === "é" ? slugArray.push("e") :
      slugBefore[i] === "è" ? slugArray.push("e") :
       slugBefore[i] === "à" ? slugArray.push("a") :
        slugBefore[i] === "ç" ? slugArray.push("c") :
         slugBefore[i] === "?" ? slugArray.push("_qm_") :
          slugBefore[i] === "/" ? slugArray.push("_slash_") :
           slugBefore[i] === "ù" ? slugArray.push("u") :
            slugBefore[i] === "." ? slugArray.push("_fs_") : slugArray.push(slugBefore[i].toLowerCase());
    }
    let slugAfter = slugArray.join("");
    changedName.nextElementSibling.value = slugAfter;
    showSlug.textContent = slugAfter;
}
}
*/